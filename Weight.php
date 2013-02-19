<?php
namespace Illumina\HealthTrackingBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use com\microsoft\wc\thing\Thing;
use com\microsoft\wc\thing\weight\Weight as hvWeight;

class Weight extends MeasurementThing
{
    protected $name = 'Weight';
    
    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
     * 
     * @var integer
     */
    protected $majorWeight;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
     * 
     * @var integer
     */
    protected $minorWeight;

    /**
     * @Assert\NotBlank()
     * @Assert\Choice(callback="getWeightOptionChoices")
     * 
     * @var string
     */
    protected $weightType;

    protected static $weightTypes;

    protected static function getWeightTypes()
    {
        if (empty(self::$weightTypes)) {
            self::$weightTypes = array(
                'stlb' => array(
                    'name' => 'Stones',
                    'major' => 'stone(s)',
                    'minor' => 'pound(s)', 
                    'minor_scale' => 1 / 16,
                    'major_scale' => 6.35029
                ),
                'kg' => array(
                    'name' => 'Kilograms',
                    'major' => 'Kilogram(s)',
                    'minor' => 'gram(s)',
                    'minor_scale' => 0.01,
                ),
            );
        }
        
        return self::$weightTypes;
    }

    public static function getWeightOptions()
    {
        static $options;

        if (empty($options)) {
            $options = array();

            foreach (self::getWeightTypes() as $type => $data) {
                $options[$type] = $data['name'];
            }
        }

        return $options;
    }
    
    public static function getWeightOptionChoices() 
    {
        return array_keys(self::getWeightOptions());
    }
    
    /**
     * @return the integer
     */
    public function getMajorWeight()
    {
        return $this->majorWeight;
    }

    /**
     * @param  $majorWeight
     */
    public function setMajorWeight($majorWeight)
    {
        $this->majorWeight = $majorWeight;
    }

    /**
     * @return the integer
     */
    public function getMinorWeight()
    {
        return $this->minorWeight;
    }

    /**
     * @param  $minorWeight
     */
    public function setMinorWeight($minorWeight)
    {
        $this->minorWeight = $minorWeight;
    }

    /**
     * @return the string
     */
    public function getWeightType()
    {
        return $this->weightType;
    }

    /**
     * @param  $weightType
     */
    public function setWeightType($weightType)
    {
        $this->weightType = $weightType;
    }

    protected function getNewDataXmlContent()
    {
        return new hvWeight();
    }
    
    public static function reallySupports(Thing $thing)
    {
        return ($thing->getTypeId()->getValue() == hvWeight::ID);
    }
    
    public function setThing(Thing $thing)
    {
        $result = parent::setThing($thing);
        
        if ( ! $result )
        {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $value = $payload->getValue();
        $display = $value->getDisplay();
        
        $weightTypes = $this->getWeightTypes();
        
        $units = (double) $display->getValue();
            
        if (isset($weightTypes[$display->getUnitsCode()]))
        {
            $thisType = $weightTypes[$display->getUnitsCode()];
            
            if ($units > 0) {
                $majorUnits = (int) $units;
                $minorUnits = ($units - $majorUnits) / $thisType['minor_scale'];
                                 
            } else {
                $minor_scale = $thisType['minor_scale'];
                $major_scale = (isset($thisType['major_scale']) ? $thisType['major_scale'] : 1);
                
                $units = $value / $major_scale;
                
                $minorThreshold = 1 / $minor_scale;
                
                $majorUnits = (int) $units;
                $minorUnits = round(($units - $majorUnits) / $minor_scale);
            }
        }
        else
        {
            $majorUnits = $units;
            $minorUnits = 0;
        }
        
        $this->majorWeight = $majorUnits;
        $this->minorWeight = $minorUnits;
        $this->weightType = $display->getUnitsCode();
        
        return $result;
    }
    
    public function getThing(Thing $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingValue((int)$this->majorWeight, (int)$this->minorWeight, $this->weightType);
        
        return $thing;
    }
    
    protected function setThingValue($majorWeight, $minorWeight, $weightType)
    {
        $weightTypes = $this->getWeightTypes();
        
        if ( ! isset($weightTypes[$weightType])) {
            return FALSE;
        }
        
        $typeData = $weightTypes[$weightType];
        
        $text = $this->getValueString($majorWeight, $minorWeight, $weightType);
        
        $value = ($minorWeight * $typeData['minor_scale']) + $majorWeight;
        
        $needsNormalization = (isset($typeData['major_scale']) && $typeData['major_scale'] != 1);
        
        $normalizedValue = ($needsNormalization) ? $value * $typeData['major_scale'] : $value;

        $payload = $this->getThingPayload();
        $hvValue = $payload->getValue();
        $hvValue->getKg()->setValue($normalizedValue);
        $display = $hvValue->getDisplay();
        
        $display->setValue($value);
        $display->setUnits($typeData['name']);
        $display->setUnitsCode($weightType);
        $display->setText($text);
        
        return $this;
    }
    
    protected function getValueString($majorWeight, $minorWeight, $weightType)
    {
        $weightTypes = $this->getWeightTypes();
        
        if ( ! isset($weightTypes[$weightType])) {
            return FALSE;
        }
        
        $typeData = $weightTypes[$weightType];
        
        $majorName = $typeData['major'];
        $minorName = $typeData['minor'];
        
        $text = sprintf('%d %s', $majorWeight, $majorName);
        if ($minorWeight != 0) {
            $text .= sprintf(' %d %s', $minorWeight, $minorName);
        }
        
        return $text;
    }
    
    public function getWeight() {
        return $this->getValueString($this->majorWeight, $this->minorWeight, $this->weightType);
    }
    
    public static function getDisplayFields()
    {
        return array(
            'when' => 'Date',
            'weight' => 'Weight',
        );
    }
}
