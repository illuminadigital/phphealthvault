<?php

namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\inhaler_use\AsthmaInhalerUse as hvAsthmaInhalerUse;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

class AsthmaInhalerUse extends WhenThing
{
    protected $thingType = 'Asthma Inhaler Usage';

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $drug;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $strength;

    /**
     * @var integer
     */
    protected $doseCount;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $dosePurpose;

    public function __construct(Thing2 $thing = NULL,
                                VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->drug = new CodableValue();
        $this->strength = new CodableValue('medication-dose-units');
        $this->dosePurpose = new CodableValue('inhaler-dose-purpose');

        if ($healthvaultVocabulary) {

            $this->drug->setVocabularyInterface($healthvaultVocabulary);
            $this->strength->setVocabularyInterface($healthvaultVocabulary);
            $this->dosePurpose->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);
    }

    /**
     * @param string $deviceId
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        if ($this->thing) {

            $this->setThingDeviceId($deviceId);

        }

        return $this;
    }

    /**
     * @param string $deviceId
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setThingDeviceId($deviceId)
    {
        $payload = $this->getThingPayload();

        $payload->setDeviceId($deviceId);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param integer $doseCount
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setDoseCount($doseCount)
    {
        $this->doseCount = $doseCount;

        if ($this->thing) {

            $this->setThingDoseCount($doseCount);

        }

        return $this;

    }

    /**
     * @param integer $doseCount
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setThingDoseCount($doseCount)
    {
        $payload = $this->getThingPayload();

        $payload->setDoseCount($doseCount);

        return $this;
    }

    /**
     * @return integer
     */
    public function getDoseCount()
    {
        return $this->doseCount;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $dosePurpose
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setDosePurpose($dosePurpose)
    {
        $this->dosePurpose = $dosePurpose;

        if ($this->thing) {

            $this->setThingDosePurpose($dosePurpose);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $dosePurpose
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setThingDosePurpose($dosePurpose){

        $payload = $this->getThingPayload();

        $this->dosePurpose->updateToThingElement($payload->getDosePurpose());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getDosePurpose()
    {
        return $this->dosePurpose;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $drug
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setDrug($drug)
    {
        $this->drug = $drug;

        if ($this->thing) {

            $this->setThingDrug($drug);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $drug
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setThingDrug($drug)
    {
        $payload = $this->getThingPayload();

        $this->drug->updateToThingElement($payload->getDrug());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getDrug()
    {
        return $this->drug;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $strength
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        if ($this->thing) {

            $this->setThingStrength($strength);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $strength
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setThingStrength($strength)
    {
        $payload = $this->getThingPayload();

        $this->strength->updateToThingElement($payload->getStrength());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getStrength()
    {
        return $this->strength;
    }




    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->drug->setFromThingElement($payload->getDrug());

        $this->strength->setFromThingElement($payload->getStrength());

        $this->doseCount = $payload->getDoseCount();

        $this->deviceId = $payload->getDeviceId();

        $this->dosePurpose->setFromThingElement($payload->getDosePurpose());

        return $this;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \com\microsoft\wc\thing\Thing2
     */

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingDrug($this->drug);

        $this->setThingStrength($this->strength);

        $this->setThingDoseCount($this->doseCount);

        $this->setThingDeviceId($this->deviceId);

        $this->setThingDosePurpose($this->dosePurpose);

        return $thing;
    }


    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvAsthmaInhalerUse::ID);
    }

    protected function getNewDataXmlContent()
    {
        return new hvAsthmaInhalerUse();
    }

    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'drug' => 'Drug',
            'doseCount' => 'Dose',
            'strength' => 'Strength',
            'dosePurpose' => 'Dose purpose'
        );
    }



}