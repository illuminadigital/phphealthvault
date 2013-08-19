<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\cholesterol_profile\CholesterolProfile as hvCholesterol;

use Symfony\Component\Validator\Constraints as Assert;

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
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setHdl($hdl)
    {
        $this->hdl = $hdl;

        if ($this->thing) {

            $this->setThingHdl($hdl);

        }

        return $this;
    }

    /**
     * @param int $hdl
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setThingHdl($hdl)
    {
       $payload = $this->getThingPayload();

        $payload->setHdl($hdl);

        return $this;
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
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setLdl($ldl)
    {
        $this->ldl = $ldl;

        if ($this->thing) {

            $this->setThingLdl($ldl);

        }

        return $this;
    }

    /**
     * @param int $ldl
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setThingLdl($ldl)
    {
        $payload = $this->getThingPayload();

        $payload->setLdl($ldl);

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
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setTotalCholesterol($totalCholesterol)
    {
        $this->totalCholesterol = $totalCholesterol;

        if ($this->thing) {

            $this->setThingTotalCholesterol($totalCholesterol);

        }

        return $this;
    }

    /**
     * @param int $totalCholesterol
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setThingTotalCholesterol($totalCholesterol)
    {

        $payload = $this->getThingPayload();

        $payload->setTotalCholesterol($totalCholesterol);

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
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setTriglyceride($triglyceride)
    {
        $this->triglyceride = $triglyceride;

        if ($this->thing) {

            $this->setThingTriglyceride($triglyceride);

        }

        return $this;
    }

    /**
     * @param int $triglyceride
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */
    public function setThingTriglyceride($triglyceride)
    {
        $payload = $this->getThingPayload();

        $payload->setTriglyceride($triglyceride);

        return $this;
    }

    /**
     * @return int
     */
    public function getTriglyceride()
    {
        return $this->triglyceride;
    }


    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \DLS\Healthvault\Proxy\Thing\Cholesterol
     */

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->ldl = $payload->getLdl();

        $this->hdl = $payload->getHdl();

        $this->totalCholesterol = $payload->getTotalCholesterol();

        $this->triglyceride = $payload->getTriglyceride();

        return $this;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \com\microsoft\wc\thing\Thing2
     */

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingLdl($this->ldl);

        $this->setThingHdl($this->hdl);

        $this->setThingTriglyceride($this->triglyceride);

        $this->setThingTotalCholesterol($this->totalCholesterol);

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
            'totalCholesterol' => 'Total cholesterol',
            'ldl' => 'LDL',
            'hdl' => 'HDL',
            'triglyceride' => 'Triglyceride level'
        );
    }

}