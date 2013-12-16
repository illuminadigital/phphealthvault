<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\blood_oxygen_saturation\BloodOxygenSaturation as hvBloodOxygenSaturation;

class BloodOxygenSaturation extends WhenThing
{
    protected $thingType = 'Blood Oxygen Saturation';

    /**
     * @Assert\Type("double")
     * @Assert\NotBlank()
     *
     */
    protected $value;

    /**
     * @return double
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return \DLS\Healthvault\Proxy\Thing\BloodOxygenSaturation
     */
    public function setValue($value)
    {
        $this->value = $value;

        if ($this->thing) {

            $this->setThingValue($value);

        }

        return $this;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvBloodOxygenSaturation::ID);
    }

    /**
     * @param double $value
     * @return \DLS\Healthvault\Proxy\Thing\BloodOxygenSaturation
     */
    public function setThingValue($value)
    {
        $payload = $this->getThingPayload();

        $payload->setValue($value);

        return $this;
    }

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->value = $payload->getValue()->getValue();

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setValue($this->value);

        return $thing;
    }

    protected function getNewDataXmlContent()
    {
        return new hvBloodOxygenSaturation();
    }

    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'value' => 'Saturation',
        );
    }
}
