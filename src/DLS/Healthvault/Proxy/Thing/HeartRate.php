<?php

namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\heart_rate\HeartRate as hvHeartRate;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Utilities\VocabularyInterface;

use Symfony\Component\Validator\Constraints as Assert;

class HeartRate extends WhenThing
{
    protected $thingType = 'Heart Rate';

    /**
     * @Assert\Type("integer")
     * @Assert\GreaterThan( value = -1 )
     * @Assert\NotBlank()
     *
     * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="value")
     */
    protected $value;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $measurementMethod;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $measurementConditions;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $measurementFlags;



    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $measurementConditions
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setMeasurementConditions($measurementConditions)
    {
        $this->measurementConditions = $measurementConditions;

        if ($this->thing) {

            $this->setThingMeasurementConditions($measurementConditions);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $measurementConditions
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setThingMeasurementConditions($measurementConditions)
    {

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getMeasurementConditions()
    {
        return $this->measurementConditions;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $measurementFlags
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setMeasurementFlags($measurementFlags)
    {
        $this->measurementFlags = $measurementFlags;

        if ($this->thing) {

            $this->setThingMeasurementFlags($measurementFlags);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $measurementFlags
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setThingMeasurementFlags($measurementFlags)
    {

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getMeasurementFlags()
    {
        return $this->measurementFlags;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $measurementMethod
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setMeasurementMethod($measurementMethod)
    {
        $this->measurementMethod = $measurementMethod;

        if ($this->thing) {

            $this->setThingMeasurementMethod($measurementMethod);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $measurementMethod
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setThingMeasurementMethod($measurementMethod)
    {

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getMeasurementMethod()
    {
        return $this->measurementMethod;
    }

    /**
     * @param mixed $value
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setValue($value)
    {
        $this->value = $value;

        if ($this->thing) {

            $this->setThingValue($value);

        }

        return $this;
    }

    /**
     * @param mixed $value
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setThingValue($value)
    {

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }


    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvHeartRate::ID);
    }

    protected function getNewDataXmlContent()
    {
        return new hvHeartRate();
    }

    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'value' => 'Heart rate value',
            'measurementMethod' => 'Method',
            'measurementConditions' => 'State',
            'measurementFlags' => 'Additional information'
        );
    }

}