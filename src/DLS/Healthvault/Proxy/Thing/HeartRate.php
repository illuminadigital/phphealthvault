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

    public function __construct(Thing2 $thing = NULL,
                                VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->measurementMethod = new CodableValue('heart-rate-measurement-method');
        $this->measurementConditions = new CodableValue('heart-rate-measurement-conditions');
        $this->measurementFlags = new CodableValue();

        if ($healthvaultVocabulary) {

            $this->measurementMethod->setVocabularyInterface($healthvaultVocabulary);
            $this->measurementConditions->setVocabularyInterface($healthvaultVocabulary);
            $this->measurementFlags->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);
    }

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
        $payload = $this->getThingPayload();

        $this->measurementConditions->updateToThingElement($payload->getMeasurementConditions());

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

        $payload = $this->getThingPayload();

        $this->measurementFlags->updateToThingElement($payload->getMeasurementFlags());

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
        $payload = $this->getThingPayload();

        $this->measurementMethod->updateToThingElement($payload->getMeasurementMethod());

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
     * @param integer $value
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */
    public function setThingValue($value)
    {
        $payload = $this->getThingPayload();

        $payload->setValue($value);

        return $this;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \DLS\Healthvault\Proxy\Thing\HeartRate
     */

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->value = $payload->getValue();

        $this->measurementMethod->setFromThingElement($payload->getMeasurementMethod());

        $this->measurementConditions->setFromThingElement($payload->getMeasurementConditions());

        $this->measurementFlags->setFromThingElement($payload->getMeasurementFlags());

        return $this;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \com\microsoft\wc\thing\Thing2
     */

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setValue($this->value);

        $this->setMeasurementMethod($this->measurementMethod);

        $this->setMeasurementConditions($this->measurementConditions);

        $this->setMeasurementFlags($this->measurementFlags);

        return $thing;
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