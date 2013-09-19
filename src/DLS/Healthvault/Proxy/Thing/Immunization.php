<?php

namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Utilities\DateTimeUtils;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Proxy\Type\Person;
use DLS\Healthvault\Proxy\Type\Phone;
use DLS\Healthvault\Proxy\Type\Email;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\immunization\Immunization as hvImmunization;

class Immunization extends BaseThing
{
    protected $thingType = 'Immunization';

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $name;

    /**
     * @var DateTime
     * @Assert\DateTime
     */
    protected $administrationDate;

    /**
     * @var \DLS\Healthvault\Proxy\Type\PersonType
     */
    protected $administrator;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $manufacturer;

    /**
     * @var string
     */
    protected $lot;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $route;

    /**
     * @var DateTime
     * @Assert\DateTime
     */
    protected $expirationDate;

    /**
     * @var string
     */
    protected $sequence;

    /**
     * @var string
     */
    protected $adverseEvent;

    /**
     * @var string
     */
    protected $consent;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $anatomicSurface;

    /**
     * @param \com\microsoft\wc\thing\Thing2 $thing
     * @param \DLS\Healthvault\Utilities\VocabularyInterface $healthvaultVocabulary
     */
    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {

        $this->name = new CodableValue();

        $this->administrator = new Person();

        $this->administrator->getContact()->addPhone(new Phone());

        $this->administrator->getContact()->addEmail(new Email());

        $this->manufacturer = new CodableValue();

        $this->route = new CodableValue();

        $this->anatomicSurface = new CodableValue();

        parent::__construct($thing, $healthvaultVocabulary);

    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $name
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setName($name)
    {
        $this->name = $name;

        if ($this->thing) {

            $this->setThingName($name);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $name
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingName($name)
    {
        $payload = $this->getThingPayload();

        $this->name->updateToThingElement($payload->getName());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param \DateTime $administrationDate
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setAdministrationDate($administrationDate)
    {
        $this->administrationDate = $administrationDate;

        if ($this->thing) {

            $this->setThingAdministrationDate($administrationDate);

        }

        return $this;
    }

    /**
     * @param \DateTime $administrationDate
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingAdministrationDate($administrationDate)
    {

        if($administrationDate){

            $hvAdministrationDate = $this->getThingPayload()->getAdministrationDate(TRUE);

            $this->setThingApproxDateTime($hvAdministrationDate, $administrationDate);

        }

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAdministrationDate()
    {
        return $this->administrationDate;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\Person $administrator
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setAdministrator($administrator)
    {
        $this->administrator = $administrator;

        if ($this->thing) {

            $this->setThingAdministrator($administrator);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\Person $administrator
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingAdministrator($administrator)
    {
        $payload = $this->getThingPayload();

        $this->administrator->updateToThingElement($payload->getAdministrator());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\Person
     */
    public function getAdministrator()
    {
        return $this->administrator;
    }


    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $manufacturer
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        if ($this->thing) {

            $this->setThingManufacturer($manufacturer);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $manufacturer
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingManufacturer($manufacturer)
    {
        $payload = $this->getThingPayload();

        $this->manufacturer->updateToThingElement($payload->getManufacturer());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $lot
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setLot($lot)
    {
        $this->lot = $lot;

        if ($this->thing) {

            $this->setThingLot($lot);

        }

        return $this;
    }

    /**
     * @param string $lot
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingLot($lot)
    {
        $payload = $this->getThingPayload();

        $payload->setLot($lot);

        return $this;
    }

    /**
     * @return string
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $route
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setRoute($route)
    {
        $this->route = $route;

        if ($this->thing) {

            $this->setThingRoute($route);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $route
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingRoute($route)
    {
        $payload = $this->getThingPayload();

        $this->route->updateToThingElement($payload->getRoute());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param \DateTime $expirationDate
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        if ($this->thing) {

            $this->setThingExpirationDate($expirationDate);

        }

        return $this;
    }

    /**
     * @param \DateTime $expirationDate
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingExpirationDate($expirationDate)
    {

        if($expirationDate){

            $hvExpirationDate = $this->getThingPayload()->getExpirationDate(TRUE);

            $this->setThingApproxDate($hvExpirationDate, $expirationDate);

        }

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param string $sequence
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        if ($this->thing) {

            $this->setThingSequence($sequence);

        }

        return $this;
    }

    /**
     * @param string $sequence
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingSequence($sequence)
    {
        $payload = $this->getThingPayload();

        $payload->setSequence($sequence);

        return $this;
    }

    /**
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $anatomicSurface
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setAnatomicSurface($anatomicSurface)
    {
        $this->anatomicSurface = $anatomicSurface;

        if ($this->thing) {

            $this->setThingAnatomicSurface($anatomicSurface);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $anatomicSurface
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingAnatomicSurface($anatomicSurface)
    {
        $payload = $this->getThingPayload();

        $this->route->updateToThingElement($payload->getAnatomicSurface());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getAnatomicSurface()
    {
        return $this->anatomicSurface;
    }

    /**
     * @param string $adverseEvent
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setAdverseEvent($adverseEvent)
    {
        $this->adverseEvent = $adverseEvent;

        if ($this->thing) {

            $this->setThingAdverseEvent($adverseEvent);

        }

        return $this;
    }

    /**
     * @param string $adverseEvent
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingAdverseEvent($adverseEvent)
    {
        $payload = $this->getThingPayload();

        $payload->setAdverseEvent($adverseEvent);

        return $this;
    }

    /**
     * @return string
     */
    public function getAdverseEvent()
    {
        return $this->adverseEvent;
    }

    /**
     * @param string $consent
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setConsent($consent)
    {
        $this->consent = $consent;

        if ($this->thing) {

            $this->setThingConsent($consent);

        }

        return $this;
    }

    /**
     * @param string $consent
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThingConsent($consent)
    {
        $payload = $this->getThingPayload();

        $payload->setConsent($consent);

        return $this;
    }

    /**
     * @return string
     */
    public function getConsent()
    {
        return $this->consent;
    }


    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \DLS\Healthvault\Proxy\Thing\Immunization
     */
    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->name->setFromThingElement($payload->getName(FALSE));

        $this->administrationDate = DateTimeUtils::getThingApproxDateTime($payload->getAdministrationDate(FALSE));

        $this->administrator->setFromThingElement($payload->getAdministrator(FALSE));

        $this->manufacturer->setFromThingElement($payload->getManufacturer(FALSE));

        $this->lot = $payload->getLot();

        $this->route->setFromThingElement($payload->getRoute(FALSE));

        $this->expirationDate = DateTimeUtils::getThingApproxDate($payload->getExpirationDate(FALSE));

        $this->sequence = $payload->getSequence();

        $this->anatomicSurface->setFromThingElement($payload->getAnatomicSurface(FALSE));

        $this->adverseEvent = $payload->getAdverseEvent();

        $this->consent = $payload->getConsent();

        return $this;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \com\microsoft\wc\thing\Thing2
     */
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingName($this->name);

        $this->setAdministrationDate($this->administrationDate);

        if($this->administrator->getFullName()!=''){

            $this->setThingAdministrator($this->administrator);

        }

        $this->setThingManufacturer($this->manufacturer);

        $this->setThingLot($this->lot);

        $this->setThingRoute($this->route);

        $this->setExpirationDate($this->expirationDate);

        $this->setThingSequence($this->sequence);

        $this->setThingAnatomicSurface($this->anatomicSurface);

        $this->setThingAdverseEvent($this->adverseEvent);

        $this->setThingConsent($this->consent);

        return $thing;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return bool
     */
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvImmunization::ID);
    }

    /**
     * @return \com\microsoft\wc\thing\immunization\Immunization
     */
    protected function getNewDataXmlContent()
    {
        return new hvImmunization();
    }
}