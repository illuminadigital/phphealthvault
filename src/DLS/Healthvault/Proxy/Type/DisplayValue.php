<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Proxy\Type\BaseType;

abstract class DisplayValue extends BaseType implements DisplayValueInterface
{

    /**
     * @var double
     */
    protected $normalisedValue;

    /**
     * 
     * @var double
     */
    protected $majorValue;

    /**
     * 
     * @var double
     */
    protected $minorValue;

    /**
     * 
     * @var string
     */
    protected $unitsCode;

    public static function getTypeOptionChoices()
    {
        return array_keys(self::getSpecificTypeOptions());
    }

    public function getMajorValue()
    {
        return $this->majorValue;
    }

    public function setMajorValue($majorValue)
    {
        $this->majorValue = $majorValue;
        
        $this->updateNormalisedValue();
        
        return $this;
    }

    public function getMinorValue()
    {
        return $this->minorValue;
    }

    public function setMinorValue($minorValue)
    {
        $this->minorValue = $minorValue;
        
        $this->updateNormalisedValue();
        
        return $this;
    }

    public function getUnitsCode()
    {
        return $this->unitsCode;
    }

    public function setUnitsCode($unitsCode)
    {
        $this->unitsCode = $unitsCode;
        
        return $this;
    }

    public function getNormalisedValue()
    {
        return $this->normalisedValue;
    }

    public function setNormalisedValue($normalisedValue)
    {
        $this->normalisedValue = $normalisedValue;
    }

    public function getSelectedTypeData($unitsCode = NULL)
    {
        $typeOptions = self::getSpecificTypeOptions();

        if (empty($unitsCode)) {
            $unitsCode = $this->unitsCode;
        }

        if (isset($typeOptions[$unitsCode])) {
            return $typeOptions[$unitsCode];
        }
        // else
        return NULL;
    }

    public function getUnits()
    {
        $thisType = $this->getSelectedTypeData();

        if (!$thisType) {
            // Assume the major value is normalised and complete
            return $this->getMajorValue();
        }
        // else
        if (isset($thisType['minor_scale'])) {
            $units = ($this->minorValue * $thisType['minor_scale'])
                    + $this->majorValue;
        } else {
            $units = $this->majorValue;
        }
        if (isset($thisType['major_scale']) && $thisType['major_scale'] != 1) {
            $units = $units * $thisType['major_scale'];
        }
        return $units;
    }

    public function getDisplayValue()
    {
        $thisType = $this->getSelectedTypeData();

        if ( ! $thisType) {
            return (string) $this->majorValue;
        } else {
            return self::getValueString($this->majorValue, $this->minorValue,
                    $thisType);
        }
    }

    public static function getValueString($majorValue, $minorValue, $typeData)
    {
        $majorName = $typeData['major'];

        if ($majorValue != 0) {
            $text = sprintf('%d %s', $majorValue, $majorName);
        } else {
            $text = '';
        }
        
        if (0 != $minorValue) {
            if (isset($typeData['minor'])) {
                $minorName = $typeData['minor'];
                
                $text .= sprintf(' %0.2f %s', $minorValue, $minorName);
            } else {
                $text .= sprintf(' %0.2f', $minorValue);
            }
        }

        return $text;
    }

    public function setFromNormalisedUnits($units)
    {
        $thisType = $this->getSelectedTypeData();

        if (!$thisType) {
            // Assume the units value is normalised and complete
            $this->majorValue = $units;
            $this->minorValue = 0;
        } else {
            $convertedUnits = (isset($thisType['major_scale']) ? $units
                            / $thisType['major_scale'] : $units);

            $this->majorValue = (int)floor($convertedUnits+0.0001);
            if (isset($thisType['minor_scale']) && ($convertedUnits - $this->majorValue)>0) {
                $this->minorValue = ($convertedUnits - $this->majorValue)
                        / $thisType['minor_scale'];
            } else {
                $this->minorValue = ($convertedUnits - $this->majorValue)>0 ? $convertedUnits - $this->majorValue : 0;
            }
        }
        
        $this->normalisedValue = $units;
    }

    public function setFromUnits($units)
    {
        $thisType = $this->getSelectedTypeData();

        if (!$thisType) {
            // Assume the units value is normalised and complete
            $this->majorValue = $units;
            $this->minorValue = 0;
        } else {
            if (isset($thisType['major_scale']) && $thisType['major_scale'] != 1) {
                $units = $units / $thisType['major_scale'];
            }
            
            $this->majorValue = (int)floor($units+0.0001);
            
            if (isset($thisType['minor_scale']) && ($units - $this->majorValue)>0) {
                $this->minorValue = ($units - $this->majorValue)
                        / $thisType['minor_scale'];
            } else {
                $this->minorValue = 0;
            }
        }
        
        $this->updateNormalisedValue();
    }
    
    protected function updateNormalisedValue() {
        $thisType = $this->getSelectedTypeData();
        
        if (!$thisType) {
            $normalisedValue = $this->majorValue;
        } else {
            $minorScaleFactor = isset($thisType['minor_scale']) ? $thisType['minor_scale'] : 0;
            $majorScaleFactor = isset($thisType['major_scale']) ? $thisType['major_scale'] : 1;
            
            $normalisedValue = $this->majorValue + ($this->minorValue * $minorScaleFactor);
            $normalisedValue = $normalisedValue * $majorScaleFactor;
        }
        
        $this->normalisedValue = $normalisedValue;
        
        return $normalisedValue;
    } 

    public function setFromThingElement($thingElement)
    {
        $display = $thingElement->getDisplay();

        if (empty($display)) {
            return FALSE;
        }

        $unitsCode = $display->getUnitsCode();
        $units = $display->getUnits();

        $codeValue = NULL;
        
        if ( ! empty($unitsCode) ) {
            if ( $this->getSelectedTypeData($unitsCode) ) {
                $codeValue = $unitsCode;
            }
        }

        if ( ! $codeValue && ! empty($units) ) {
            $codeValue = $this->getCodeForTypeName($units);

            // Only sometimes this is a code, not a name ....
            if ( ! $codeValue && $this->getSelectedTypeData($units) ) {
                $codeValue = $units;
            }
        }

        $this->unitsCode = $codeValue;

        $this->setFromUnits($display->getValue());

        // We can't set the normalised value. The outer code needs to

        return $thingElement;
    }

    public function updateToThingElement($thingElement)
    {
        $display = $thingElement->getDisplay();

        if (empty($display)) {
            return FALSE;
        }
        
        $thisType = $this->getSelectedTypeData();
        
        $display->setUnitsCode($this->unitsCode);
        $display->setUnits($thisType['name']);
        $display->setValue($this->getUnits());
        $display->setText($this->getDisplayValue());
        
        $thingElement->setDisplay($display);
        
        return $thingElement;
    }

    public function getSelectedUnitData($unitCode = NULL)
    {
        $data = self::getSpecificTypeOptions();

        if (isset($data[$unitCode])) {
            return $data[$unitCode];
        }
        // else
        return NULL;
    }

    public function getCodeForTypeName($name)
    {
        $data = self::getSpecificTypeOptions();

        $name = strtolower($name);
        
        foreach ($data as $code => $datum) {
            if (isset($datum['name']) && strtolower($datum['name']) == $name) {
                return $code;
            }
        }

        return NULL;
    }
    
    protected static function getSpecificTypeOptions() {
        $calledClass = get_called_class();
        
        // The method must exist at some level because it is part of the interface
        return call_user_func(array($calledClass, 'getTypeOptions'));
    }
    
    public function __toString() {
        return $this->getDisplayValue();
    }
    
    public function isEmpty() {
        return (empty($this->minorValue) && empty($this->majorValue));
    }
}
