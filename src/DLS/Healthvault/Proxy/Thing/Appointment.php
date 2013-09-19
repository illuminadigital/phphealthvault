<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\appointment\Appointment as hvAppointment;
use com\microsoft\wc\thing\Thing2;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Proxy\Type\DurationValue;
use DLS\Healthvault\Proxy\Type\Person;
use DLS\Healthvault\Proxy\Type\Phone;
use DLS\Healthvault\Proxy\Type\Email;


class Appointment extends WhenThing
{

    protected $thingType = 'Appointment';

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $service;

//    /**
//     * @var \DLS\Healthvault\Proxy\Type\DurationValue
//     */
//    protected $duration;

    /**
     * @var \DLS\Healthvault\Proxy\Type\Person
     */
    protected $clinic;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $specialty;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $status;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $careClass;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {

        $this->service = new CodableValue('appointment-care-class');

        $this->specialty = new CodableValue('medical-specialties:all');

        $this->status = new CodableValue('appointment-status');

        $this->careClass = new CodableValue('appointment-care-class:all');

        //$this->duration = new DurationValue();

        $this->clinic = new Person();

        $this->clinic->getContact()->addPhone(new Phone());

        $this->clinic->getContact()->addEmail(new Email());

        if ($healthvaultVocabulary)
        {

            $this->specialty->setVocabularyInterface($healthvaultVocabulary);

            $this->status->setVocabularyInterface($healthvaultVocabulary);

            $this->careClass->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);

    }

    public function getService()
    {

        return $this->service;

    }

    public function setService($service)
    {

        $this->service = $service;

        if($this->thing)
        {

            $this->setThingService($service);

        }

        return $this;

    }

    public function setThingService($service)
    {

        $payload = $this->getThingPayload();

        $this->service->updateToThingElement($payload->getService());

    }

//    public function getDuration()
//    {
//
//        return $this->duration;
//
//    }
//
//    public function setDuration($duration)
//    {
//
//        $this->duration = $duration;
//
//        if($this->thing)
//        {
//
//            $this->setThingDuration($duration);
//
//        }
//
//        return $this;
//
//    }
//
//    public function setThingDuration($duration){
//
//        $payload = $this->getThingPayload();
//
//        $this->duration->updateToThingElement($payload->getDuration());
//
//    }

    public function getClinic()
    {

        return $this->clinic;

    }

    public function setClinic($clinic)
    {

        $this->clinic = $clinic;

        if($this->thing)
        {

            $this->setThingClinic($clinic);

        }

        return $this;

    }

    public function setThingClinic($clinic)
    {
        $payload = $this->getThingPayload();

        $this->clinic->updateToThingElement($payload->getClinic());
    }

    public function getSpecialty()
    {

        return $this->specialty;

    }

    public function setSpecialty($speciality)
    {

        $this->specialty = $speciality;

        if($this->thing)
        {

            return $this->setThingSpecialty($speciality);

        }

        return $this;

    }

    public function setThingSpecialty($speciality)
    {

        $payload = $this->getThingPayload();

        $this->specialty->updateToThingElement($payload->getSpecialty());

    }

    public function getStatus()
    {

        return $this->status;

    }

    public function setStatus($status)
    {

        $this->status = $status;

        if($this->status)
        {

            $this->setThingStatus($status);

        }

        return $this;

    }
    public function setThingStatus($status){

        $payload = $this->getThingPayload();

        $this->status->updateToThingElement($payload->getStatus());

    }

    public function getCareClass()
    {

        return $this->careClass;

    }

    public function setCareClass($careClass)
    {

        $this->careClass = $careClass;

        if($this->thing)
        {

            $this->setThingCareClass($careClass);

        }

        return $this;

    }

    public function setThingCareClass($careClass){

        $payload = $this->getThingPayload();

        $this->careClass->updateToThingElement($payload->getCareClass());

    }

    public function setThing(Thing2 $thing)
    {

        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        //LOAD SERVICE
        $service = $payload->getService();

        $this->service->setFromThingElement($service);

        //LOAD SPECIALITY
        $specialty = $payload->getSpecialty();

        $this->specialty->setFromThingElement($specialty);

        //LOAD STATUS
        $status = $payload->getStatus();

        $this->status->setFromThingElement($status);

        //LOAD CARECLASS
        $careClass = $payload->getCareClass();

        $this->careClass->setFromThingElement($careClass);

//        //LOAD DURATION
//        $duration = $payload->getDuration();
//
//        $this->duration->setFromThingElement($duration);

        //LOAD CLINIC
        $clinic = $payload->getClinic();

        $this->clinic->setFromThingElement($clinic);

        return $result;
    }

    public function getThing(Thing2 $thing = NULL){

        $thing = parent::getThing($thing);

        $payload = $this->getThingPayload();

        $this->setThingService($this->service);

        $this->setThingSpecialty($this->specialty);

        $this->setThingStatus($this->status);

        $this->setThingCareClass($this->careClass);

//        $this->setThingDuration($this->duration);

        $this->setThingClinic($this->clinic);

        return $thing;

    }

    public static function reallySupports(Thing2 $thing)
    {
        return (strtolower($thing->getTypeId()->getValue()) == strtolower(hvAppointment::ID));
    }


    protected function getNewDataXmlContent()
    {
        return new hvAppointment();
    }

}