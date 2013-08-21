<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\cholesterol_profile\CholesterolProfile as hvCholesterol;

use Symfony\Component\Validator\Constraints as Assert;
use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Type\ConcentrationValue;


class Cholesterol extends WhenThing
{
    protected $thingType = "Cholesterol Measurement";


    /**
     * @var \DLS\Healthvault\Proxy\Type\ConcentrationValue
     */
    protected $ldl;

    /**
     * @var \DLS\Healthvault\Proxy\Type\ConcentrationValue
     */
    protected $hdl;

    /**
     * @var \DLS\Healthvault\Proxy\Type\ConcentrationValue
     */
    protected $totalCholesterol;

    /**
     * @var \DLS\Healthvault\Proxy\Type\ConcentrationValue
     */
    protected $triglyceride;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->ldl = new ConcentrationValue();

        $this->hdl = new ConcentrationValue();

        $this->totalCholesterol = new ConcentrationValue();

        $this->triglyceride = new ConcentrationValue();

        parent::__construct($thing, $healthvaultVocabulary);

    }

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

        $hdl->updateToThingElement($payload->getHdl());

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

        $ldl->updateToThingElement($payload->getLdl());

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

        $totalCholesterol->updateToThingElement($payload->getTotalCholesterol());

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

        $triglyceride->updateToThingElement($payload->getTriglyceride());

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

        $this->ldl->setFromThingElement($payload->getLdl());

        $this->hdl->setFromThingElement($payload->getHdl());

        $this->totalCholesterol->setFromThingElement($payload->getTotalCholesterol());

        $this->triglyceride->setFromThingElement($payload->getTriglyceride());

        return $this;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \com\microsoft\wc\thing\Thing2
     */

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingTotalCholesterol($this->totalCholesterol);

        $this->setThingLdl($this->ldl);

        $this->setThingHdl($this->hdl);

        $this->setThingTriglyceride($this->triglyceride);

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