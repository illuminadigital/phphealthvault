<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Proxy\Type\BaseType;

abstract class DisplayConvertibleValue extends DisplayValue implements DisplayConvertibleValueInterface
{
    public static function getTypeOptionChoices()
    {
        return array_keys(self::getSpecificTypeOptions());
    }

    public function getNormalisedValue()
    {
        $thisType = $this->getSelectedTypeData();

        $value = $this->value;

        if(array_key_exists('major_scale',$thisType)){

            $value = $this->value*$thisType['major_scale'];

        }

        return $value;
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
            return $this->value;
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

    public function getDisplayValue($normalisedUnit = '')
    {

        $thisType = $this->getSelectedTypeData();

        if ( ! $thisType) {
            return (string) $this->value;
        } else {
            return $this->getValueString($normalisedUnit);
        }
    }

    public function getValueString($normalisedUnit)
    {

        if($normalisedUnit ='' ){
            return (string)$this->value;
        }

        $value = $this->value;

        $integerValue = (int)$this->value;

        $fractionValue = $value - $integerValue;


        if ($value != 0) {

            $text = sprintf('%d %s', $integerValue,  $typeData['major']);

        } else {
            $text = '';
        }

        if (0 != $fractionValue) {
            if (isset($typeData['minor'])) {
                $minorName = $typeData['minor'];

                $text .= sprintf(' %0.2f %s', $fractionValue, $minorName);
            } else {
                $text .= sprintf(' %0.2f', $fractionValue);
            }
        }

        return $text;
    }

    public function setFromNormalisedUnits($units,$normalisedUnits)
    {
        $thisType = $this->getSelectedTypeData();

        $value = $units;

        if ( $thisType && $normalisedUnits != $this->unitsCode) {

            $value = $units/$thisType['major_scale'];

        }

        $this->value = $value;

    }

    public function setFromThingElement($thingElement)
    {

        $display = $thingElement->getDisplay();

        if (empty($display)) {
            return FALSE;
        }

        $this->units = $display->getUnits();

        $this->unitsCode = $display->getUnitsCode();

        $this->value = $display->getValue();

        return $thingElement;
    }

    public function updateToThingElement($thingElement)
    {

        $display = $thingElement->getDisplay();

        if (empty($display)) {
            return FALSE;
        }

        $display->setValue($this->value);

        $types = $this->getPossibleTypes();

        $display->setUnits($types[$this->unitsCode]['name']);

        $display->setUnitsCode($this->unitsCode);

        $type = $this->getSelectedTypeData();

        $display->setText($this->value.' '.$type['major']);

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
        $type = $this->getSelectedTypeData();
        return (string)$this->value.' '.$type['major'];

    }
    
    public function isEmpty() {
        return (empty($this->value));
    }
}
