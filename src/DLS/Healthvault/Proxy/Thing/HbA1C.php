<?php

namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\HbA1C\HbA1C as hvHbA1C;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

class HbA1C extends WhenThing
{

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="double")
     * @var double;
     */
    protected $value;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $HbA1CAssayMethod;

    /**
     * @var string
     */
    protected $deviceId;



    protected $thingType = 'HbA1C Measurement';

    public function __construct(Thing2 $thing = NULL,
                                VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->HbA1CAssayMethod = new CodableValue('HbA1C-assay-method');


        if ($healthvaultVocabulary) {
            $this->HbA1CAssayMethod->setVocabularyInterface($healthvaultVocabulary);
        }

        parent::__construct($thing, $healthvaultVocabulary);

    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        $this->value = $value;

        if($this->thing){

            $this->setThingValue($value);

        }

        return $this;
    }

    public function setThingValue($value){

        $payload = $this->getThingPayload();

        $payload->setValue($value);

        return $this;

    }

    public function getHbA1CAssayMethod(){
        return $this->HbA1CAssayMethod;
    }

    public function setHbA1CAssayMethod($HbA1CAssayMethod){

        $this->HbA1CAssayMethod = $HbA1CAssayMethod;

        if($this->thing){

            $this->setThingHbA1CAssayMethod($HbA1CAssayMethod);

        }

        return $this;
    }
    public function setThingHbA1CAssayMethod($HbA1CAssayMethod){

        $payload = $this->getThingPayload();

        $this->HbA1CAssayMethod->updateToThingElement($payload->getHbA1CAssayMethod());

        return $this;

    }

    public function getDeviceId(){
        return $this->deviceId;
    }
    public function setDeviceId($deviceId){

        $this->deviceId = $deviceId;

        if($this->thing){

            $this->setThingDeviceId($deviceId);

        }

        return $this;

    }
    public function setThingDeviceId($deviceId){

        $payload = $this->getThingPayload();

        $payload->setDeviceId($deviceId);

        return $this;

    }


    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( $result === FALSE ) {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->value = $payload->getValue()->getValue();

        $HbA1CAssayMethod = $payload->getHba1cAssayMethod();

        $this->HbA1CAssayMethod->setFromThingElement($HbA1CAssayMethod);

        $this->deviceId = $payload->getDeviceId();

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingValue($this->value);
        $this->setThingHbA1CAssayMethod($this->HbA1CAssayMethod);
        $this->setThingDeviceId($this->deviceId);

        return $thing;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return (strtolower($thing->getTypeId()->getValue()) == strtolower(hvHbA1C::ID));

    }

    protected function getNewDataXmlContent() {
        return new hvHbA1C();
    }

    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'value' => 'Value',
            'HbA1CAssayMethod' => 'HbA1C Assay Method',
            'deviceId' => 'Device'
        );
    }


}