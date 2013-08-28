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
use com\microsoft\wc\thing\allergy\Allergy as hvAllergy;

class Allergy extends BaseThing
{
    protected $thingType = 'Allergy';

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $name;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $reaction;

    /**
     * @var DateTime
     * @Assert\DateTime
     */
    protected $firstObserved;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $allergenType;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $allergenCode;

    /**
     * @var \DLS\Healthvault\Proxy\Type\PersonType
     */
    protected $treatmentProvider;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $treatment;

    /**
     * @var boolean
     */
    protected $isNegated;

    /**
     * @param \com\microsoft\wc\thing\Thing2 $thing
     * @param \DLS\Healthvault\Utilities\VocabularyInterface $healthvaultVocabulary
     */
    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {

        $this->name = new CodableValue();

        $this->reaction = new CodableValue('reaction');

        $this->allergenType = new CodableValue('allergen-type');

        $this->allergenCode = new CodableValue();

        $this->treatmentProvider = new Person();

        $this->treatmentProvider->getContact()->addPhone(new Phone());

        $this->treatmentProvider->getContact()->addEmail(new Email());

        $this->treatment = new CodableValue();


        if ($healthvaultVocabulary)
        {

            $this->reaction->setVocabularyInterface($healthvaultVocabulary);

            $this->allergenType->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);

    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $allergenCode
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setAllergenCode($allergenCode)
    {
        $this->allergenCode = $allergenCode;

        if ($this->thing) {

            $this->setThingAllergenCode($allergenCode);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $allergenCode
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingAllergenCode($allergenCode)
    {
        $payload = $this->getThingPayload();

        $this->allergenCode->updateToThingElement($payload->getAllergenCode());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getAllergenCode()
    {
        return $this->allergenCode;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $allergenType
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setAllergenType($allergenType)
    {
        $this->allergenType = $allergenType;

        if ($this->thing) {

            $this->setThingAllergenType($allergenType);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $allergenType
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingAllergenType($allergenType)
    {
        $payload = $this->getThingPayload();

        $this->allergenType->updateToThingElement($payload->getAllergenType());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getAllergenType()
    {
        return $this->allergenType;
    }

    /**
     * @param \DateTime $firstObserved
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setFirstObserved($firstObserved)
    {
        $this->firstObserved = $firstObserved;

        if ($this->thing) {

            $this->setThingFirstObserved($firstObserved);

        }

        return $this;
    }

    /**
     * @param \DateTime $firstObserved
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingFirstObserved($firstObserved)
    {
        $hvFirstObserved = $this->getThingPayload()->getFirstObserved();

        $this->setThingApproxDateTime($hvFirstObserved, $firstObserved);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstObserved()
    {
        return $this->firstObserved;
    }

    /**
     * @param boolean $isNegated
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setIsNegated($isNegated)
    {
        $this->isNegated = $isNegated;

        if ($this->thing) {

            $this->setThingIsNegated($isNegated);

        }

        return $this;
    }

    /**
     * @param boolean $isNegated
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingIsNegated($isNegated)
    {
        $payload = $this->getThingPayload();

        $payload->setIsNegated($this->isNegated);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNegated()
    {
        return $this->isNegated;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $name
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
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
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
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
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $reaction
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setReaction($reaction)
    {
        $this->reaction = $reaction;

        if ($this->thing) {

            $this->setThingReaction($reaction);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $reaction
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingReaction($reaction)
    {
        $payload = $this->getThingPayload();

        $this->reaction->updateToThingElement($payload->getReaction());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $treatment
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;

        if ($this->thing) {

            $this->setThingTreatment($treatment);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $treatment
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingTreatment($treatment)
    {
        $payload = $this->getThingPayload();

        $this->treatment->updateToThingElement($payload->getTreatment());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\Person $treatmentProvider
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setTreatmentProvider($treatmentProvider)
    {
        $this->treatmentProvider = $treatmentProvider;

        if ($this->thing) {

            $this->setThingTreatmentProvider($treatmentProvider);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\Person $treatmentProvider
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingTreatmentProvider($treatmentProvider)
    {
        $payload = $this->getThingPayload();

        $this->treatmentProvider->updateToThingElement($payload->getTreatmentProvider());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\Person
     */
    public function getTreatmentProvider()
    {
        return $this->treatmentProvider;
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

        $this->allergenCode->setFromThingElement($payload->getAllergenCode(FALSE));

        $this->allergenType->setFromThingElement($payload->getAllergenType(FALSE));

        $this->firstObserved = DateTimeUtils::getThingApproxDateTime($payload->getFirstObserved(FALSE));

        $this->isNegated = $payload->getIsNegated(FALSE);

        $this->name->setFromThingElement($payload->getName(FALSE));

        $this->reaction->setFromThingElement($payload->getReaction(FALSE));

        $this->treatment->setFromThingElement($payload->getTreatment(FALSE));

        $this->treatmentProvider->setFromThingElement($payload->getTreatmentProvider(FALSE));

        return $this;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \com\microsoft\wc\thing\Thing2
     */
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingAllergenCode($this->allergenCode);

        $this->setThingAllergenType($this->allergenType);

        $this->setThingFirstObserved($this->firstObserved);

        $this->setThingIsNegated($this->isNegated);

        $this->setThingName($this->name);

        $this->setThingReaction($this->reaction);

        $this->setThingTreatment($this->treatment);

        $this->setThingTreatmentProvider($this->treatmentProvider);

        return $thing;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return bool
     */
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvAllergy::ID);
    }

    /**
     * @return \com\microsoft\wc\thing\allergy\Allergy
     */
    protected function getNewDataXmlContent()
    {
        return new hvAllergy();
    }
}