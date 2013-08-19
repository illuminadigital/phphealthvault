<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\cholesterol_profile\CholesterolProfile as hvCholesterol;

class Cholesterol extends WhenThing
{
    protected $thingType = "Cholesterol Measurement";


    /**
     * @Assert\Type("integer")
     * @Assert\GreaterThan( value = 0 )
     * @var integer
     */
    protected $ldl;

    /**
     * @Assert\Type("integer")
     * @Assert\GreaterThan( value = 0 )
     *
     * @var integer
     */
    protected $hdl;

    /**
     * @Assert\Type("integer")
     * @Assert\GreaterThan( value = 0 )
     *
     * @var integer
     */
    protected $totalCholesterol;

    /**
     * @Assert\Type("integer")
     * @Assert\GreaterThan( value = 0 )
     *
     * @var integer
     */
    protected $triglyceride;

    /**
     * @param int $hdl
     */
    public function setHdl($hdl)
    {
        $this->hdl = $hdl;

        if ($this->thing) {

            $this->setThingHdl($hdl);

        }
        return $this;
    }

    public function setThingHdl($hdl)
    {

    }

    /**
     * @return int
     */
    public function getHdl()
    {
        return $this->hdl;
    }

    /**
     * @param int $ldl
     */
    public function setLdl($ldl)
    {
        $this->ldl = $ldl;

        return $this;
    }

    /**
     * @return int
     */
    public function getLdl()
    {
        return $this->ldl;
    }

    /**
     * @param int $totalCholesterol
     */
    public function setTotalCholesterol($totalCholesterol)
    {
        $this->totalCholesterol = $totalCholesterol;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCholesterol()
    {
        return $this->totalCholesterol;
    }

    /**
     * @param int $triglyceride
     */
    public function setTriglyceride($triglyceride)
    {
        $this->triglyceride = $triglyceride;

        return $this;
    }

    /**
     * @return int
     */
    public function getTriglyceride()
    {
        return $this->triglyceride;
    }



    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

//        $this->diastolic = $payload->getDiastolic()->getValue();
//        $this->systolic = $payload->getSystolic()->getValue();
//        $pulse = $payload->getPulse();
//        if ($pulse && $pulse->getValue()) {
//            $this->pulse = $pulse->getValue();
//        }
//        $this->irregularHeartbeat = $payload->getIrregularHeartbeat();

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

//        $this->setThingDiastolic((int)$this->diastolic);
//        $this->setThingSystolic((int)$this->systolic);
//        $this->setThingPulse($this->pulse ? (int) $this->pulse : NULL);
//        $this->setThingIrregularHeartbeat((bool) $this->irregularHeartbeat);

        return $thing;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvCholesterol::ID);
    }

    protected function getNewDataXmlContent()
    {
        return new hvCholesterol();
    }

    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'systolic' => 'Systolic',
            'diastolic' => 'Diastolic',
            'pulse' => 'Pulse',
        );
    }

}