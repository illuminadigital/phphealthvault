<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\height\Height as hvHeight;

class Height extends MeasurementThing
{
    protected $name = 'Height';
    
    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
     * 
     * @var integer
     */
    protected $majorLength;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
     * 
     * @var integer
     */
    protected $minorLength;

    /**
     * @Assert\NotBlank()
     * @Assert\Choice(callback="getLengthOptionChoices")
     * 
     * @var string
     */
    protected $lengthType;

    protected static $lengthTypes;

    protected static function getLengthTypes()
    {
        if (empty(self::$lengthTypes)) {
            self::$lengthTypes = array(
                'ft' => array(
                    'name' => 'Feet',
                    'major' => 'feet',
                    'minor' => 'inch(es)', 
                    'minor_scale' => 1 / 12,
                    'major_scale' => 12 * 0.0254 // (Inches in a foot) * (length of inch in metres)
                ),
                'm' => array(
                    'name' => 'Metres',
                    'major' => 'metre(s)',
                    'minor' => 'centimetres',
                    'minor_scale' => 0.01,
                ),
            );
        }

        return self::$lengthTypes;
    }

    public static function getLengthOptions()
    {
        static $options;

        if (empty($options)) {
            $options = array();

            foreach (self::getLengthTypes() as $type => $data) {
                $options[$type] = $data['name'];
            }
        }

        return $options;
    }

    public static function getLengthOptionChoices()
    {
        return array_keys(self::getLengthOptions());
    }
    
    /**
     * @return the integer
     */
    public function getMajorLength()
    {
        return $this->majorLength;
    }

    /**
     * @param  $majorLength
     */
    public function setMajorLength($majorLength)
    {
        $this->majorLength = $majorLength;
    }

    /**
     * @return the integer
     */
    public function getMinorLength()
    {
        return $this->minorLength;
    }

    /**
     * @param  $minorLength
     */
    public function setMinorLength($minorLength)
    {
        $this->minorLength = $minorLength;
    }

    /**
     * @return the string
     */
    public function getLengthType()
    {
        return $this->lengthType;
    }

    /**
     * @param  $lengthType
     */
    public function setLengthType($lengthType)
    {
        $this->lengthType = $lengthType;
    }

    protected function getNewDataXmlContent()
    {
        return new hvHeight();
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvHeight::ID);
    }
    
    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);
        
        if ( ! $result )
        {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $value = $payload->getValue();
        $display = $value->getDisplay();
        
        $lengthTypes = $this->getLengthTypes();
        
        $units = (double) $display->getValue();
            
        if (isset($lengthTypes[$display->getUnitsCode()]))
        {
            $thisType = $lengthTypes[$display->getUnitsCode()];
            
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
        
        $this->majorLength = $majorUnits;
        $this->minorLength = $minorUnits;
        $this->lengthType = $display->getUnitsCode();
        
        return $result;
    }
    
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingValue((int)$this->majorLength, (int)$this->minorLength, $this->lengthType);
        
        return $thing;
    }
    
    protected function setThingValue($majorLength, $minorLength, $lengthType)
    {
        $lengthTypes = $this->getLengthTypes();
        
        if ( ! isset($lengthTypes[$lengthType])) {
            return FALSE;
        }
        
        $typeData = $lengthTypes[$lengthType];
        
        $text = $this->getValueString($majorLength, $minorLength, $lengthType);
        
        $value = ($minorLength * $typeData['minor_scale']) + $majorLength;
        
        $needsNormalization = (isset($typeData['major_scale']) && $typeData['major_scale'] != 1);
        
        $normalizedValue = ($needsNormalization) ? $value * $typeData['major_scale'] : $value;

        $payload = $this->getThingPayload();
        $hvValue = $payload->getValue();
        $hvValue->getM()->setValue($normalizedValue);
        $display = $hvValue->getDisplay();
        
        $display->setValue($value);
        $display->setUnits($typeData['name']);
        $display->setUnitsCode($lengthType);
        $display->setText($text);
        
        return $this;
    }
    
    protected function getValueString($majorLength, $minorLength, $lengthType)
    {
        $lengthTypes = $this->getLengthTypes();
        
        if ( ! isset($lengthTypes[$lengthType])) {
            return FALSE;
        }
        
        $typeData = $lengthTypes[$lengthType];
        
        $majorName = $typeData['major'];
        $minorName = $typeData['minor'];
        
        $text = sprintf('%d %s', $majorLength, $majorName);
        if ($minorLength != 0) {
            $text .= sprintf(' %d %s', $minorLength, $minorName);
        }
        
        return $text;
    }
    
    public function getHeight() {
        return $this->getValueString($this->majorLength, $this->minorLength, $this->lengthType);
    }
    
    public static function getDisplayFields()
    {
        return array(
            'when' => 'Date',
            'height' => 'Height',
        );
    }
}
