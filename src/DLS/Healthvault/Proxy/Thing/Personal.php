<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Type\CodableValue;

use com\microsoft\wc\thing\personal\Personal as hvPersonal;
use com\microsoft\wc\thing\Thing2;


class Personal extends BaseThing
{
    protected $thingType = 'Personal';

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $name;

    /**
     * @Assert\Date
     * @var date
     */
    protected $birthdate;

    /**
     * @Assert\NotBlank()
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $bloodType;

    /**
     * @Assert\NotBlank()
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $ethnicity;

    /**
     * @var string
     */
    protected $ssn;

    /**
     * @Assert\NotBlank()
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $maritalStatus;

    /**
     * @var string
     */
    protected $employmentStatus;

    /**
     * @Assert\Type("boolean")
     * @var boolean
     */
    protected $isDeceased;

    /**
     * @Assert\Date
     * @var date
     */
    protected $dateOfDeath;
    /**
     * @Assert\NotBlank()
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $religion;

    /**
     * @Assert\Type("boolean")
     *
     * @var boolean
     */
    protected $isVeteran;

    /**
     * @Assert\NotBlank()
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $highestEducationLevel;

    /**
     * @Assert\Type("boolean")
     * @var boolean
     */
    protected $isDisabled;

    /**
     * @XmlText	(type="string", name="organ-donor")
     */
    protected $organDonor;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->bloodType = new CodableValue('blood-types');
        $this->ethnicity = new CodableValue('ethnicity');
        $this->maritalStatus = new CodableValue('marital-status');
        $this->religion = new CodableValue('religion');
        $this->highestEducationLevel = new CodableValue('education-level');

        if ($healthvaultVocabulary) {

            $this->bloodType->setVocabularyInterface($healthvaultVocabulary);
            $this->ethnicity->setVocabularyInterface($healthvaultVocabulary);
            $this->maritalStatus->setVocabularyInterface($healthvaultVocabulary);
            $this->religion->setVocabularyInterface($healthvaultVocabulary);
            $this->highestEducationLevel->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);
    }

    public function getName(){

        return $this->name;

    }

    public function setName($name){

        $this->name = $name;

        if ($this->thing) {
            $this->setThingName($name);
        }

        return $this;
    }
// FIXME: Get thing name
    public function setThingName($name){}



    public function getBirthdate(){

        return $this->birthdate;

    }

    public function setBirthdate($birthdate){

        $this->birthdate = $birthdate;

        if ($this->thing) {

            $this->setThingBirthdate($birthdate);
        }

        return $this;
    }

    public function setThingBirthdate($birthdate){

        $hvBirthdate = $this->getThingPayload()->geBirthdate();

        $this->setThingApproxDate($hvBirthdate, $birthdate);

    }

    public function getBloodType(){

        return $this->bloodType;

    }

    public function setBloodType($bloodType){

        $this->bloodType = $bloodType;

        if($this->thing){

            $this->setThingBloodType($bloodType);

        }

        return this;

    }

    public function setThingBloodType($bloodType){

        $payload = $this->getThingPayload();

        $this->bloodType->updateToThingElement($payload->getBloodType());

    }

    public function getEthnicity(){

        return $this->ethnicity;

    }

    public function setEthnicity($ethnicity){

        $this->ethnicity = $ethnicity;

        if($this->thing){

            $this->setThingEthnicity($ethnicity);

        }

        return this;

    }

    public function setThingEthnicity($ethnicity){

        $payload = $this->getThingPayload();

        $this->ethnicity->updateToThingElement($payload->getSsn());

    }

    public function getSsn(){

        return $this->ssn;

    }

    public function setSsn($ssn){
        $this->ssn = $ssn;

        if ($this->thing) {
            $this->setThingName($ssn);
        }

        return $this;
    }

    public function setThingSsn($ssn){

        $this->getThingPayload()->setSsn($ssn);
    }

    public function getMaritalStatus(){

        return $this->maritalStatus;

    }

    public function setMaritalStatus($martialStatus){

        $this->maritalStatus = $martialStatus;

        if($this->thing){

            $this->setThingMaritalStatus($martialStatus);

        }

        return this;

    }

    public function setThingMaritalStatus($martialStatus){

        $payload = $this->getThingPayload();

        $this->maritalStatus->updateToThingElement($payload->getMaritalStatus());

    }

    public function getEmploymentStatus(){

        return $this->employmentStatus;

    }

    public function setEmploymentStatus($employmentStatus){

        $this->employmentStatus = $employmentStatus;

        if($this->thing){

            $this->setThingEmploymentStatus($employmentStatus);

        }

        return this;

    }

    public function setThingEmploymentStatus($employmentStatus){

        $payload = $this->getThingPayload();

        $this->employmentStatus->updateToThingElement($payload->getEmploymentStatus());

    }

    public function getIsDeceased(){

        return $this->employmentStatus;

    }

    public function setIsDeceased($isDeceased){

        $this->isDeceased = $isDeceased;

        if($this->thing){

            $this->setThingIsDeceased($isDeceased);

        }

        return this;

    }

    public function setThingIsDeceased($isDeceased){

        $payload = $this->getThingPayload();

        $this->isDeceased->updateToThingElement($payload->getIsDeceased());

    }

    public function getDateOfDeath(){

        return $this->dateOfDeath;

    }

    public function setDateOfDeath($dateOfDeath){

        $this->dateOfDeath = $dateOfDeath;

        if($this->thing){

            $this->setThingDateOfDeath($dateOfDeath);

        }

        return this;

    }

    public function setThingDateOfDeath($dateOfDeath){

        if ( ! empty($dateOfDeath) )
        {
            $hvdateOfDeath = $this->getThingPayload()->getDateOfDeath();

            $this->setThingApproxDate($hvdateOfDeath, $dateOfDeath);
        }
        else
        {
            $this->getThingPayload()->setDateOfDeath(NULL);
        }
    }

    public function getReligion(){

        return $this->religion;

    }

    public function setReligion($religion){

        $this->religion = $religion;

        if($this->thing){

            $this->setThingReligion($religion);

        }

        return this;

    }

    public function setThingReligion($religion){

        $payload = $this->getThingPayload();

        $this->religion->updateToThingElement($payload->getReligion());

    }

    public function getIsVeteran(){

        return $this->isVeteran;

    }

    public function setIsVeteran($isVeteran){

        $this->isVeteran = $isVeteran;

        if($this->thing){

            $this->setThingIsVeteran($isVeteran);

        }

        return this;


    }

    public function setThingIsVeteran($isVeteran){

        $payload = $this->getThingPayload();

        $this->isVeteran->updateToThingElement($payload->getIsVeteran());

    }

    public function getHighestEducationLevel(){

        return $this->highestEducationLevel;

    }

    public function setHighestEducationLevel($highestEducationLevel){

        $this->highestEducationLevel = $highestEducationLevel;

        if($this->thing){

            $this->setThingHighestEducationLevel($highestEducationLevel);

        }

        return this;

    }

    public function setThingHighestEducationLevel($highestEducationLevel){

        $payload = $this->getThingPayload();

        $this->highestEducationLevel->updateToThingElement($payload->getHighestEducationLevel());

    }

    public function getIsDisabled(){

        return $this->isDisabled;

    }

    public function setIsDisabled($isDisabled){

        $this->isDisabled = $isDisabled;

        if($this->thing){

            $this->setThingIsDisabled($isDisabled);

        }

        return this;

    }

    public function setThingIsDisabled($isDisabled){

        $payload = $this->getThingPayload();

        $this->isDisabled->updateToThingElement($payload->getIsDisabled());

    }

    public function getOrganDonor(){

        return $this->organDonor;

    }

    public function setOrganDonor($organDonor){

        $this->organDonor = $organDonor;

        if($this->thing){

            $this->setThingOrganDonor($organDonor);

        }

        return this;

    }

    public function setThingOrganDonor($organDonor){

        $payload = $this->getThingPayload();

        $this->organDonor->updateToThingElement($payload->getOrganDonor());

    }

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvPersonal::ID);
    }

    public function setThing(Thing2 $hvPersonal)
    {
        $result = parent::setThing($hvPersonal);

        if ( ! $result )
        {
            return $result;
        }


        $payload = $this->getThingPayload();


        $this->name = $payload->getName()->getFull();

        $this->birthdate = $this->getThingDateTime($payload->getBirthdate());

        //TODO: Finish the setter


        return $this;
    }

    public function getThing(Thing2 $hvPersonal = NULL)
    {
        $hvPersonal = parent::getThing($hvPersonal);

        $this->setThingName($this->name);
        $this->setThingBirthdate($this->birthdate);
        $this->setThingBloodType($this->bloodType);
        $this->setThingEthnicity($this->ethnicity);
        $this->setThingSsn($this->ssn);
        $this->setThingMaritalStatus($this->maritalStatus);
        $this->setThingEmploymentStatus($this->employmentStatus);
        $this->setThingIsDeceased($this->isDeceased);
        $this->setThingDateOfDeath($this->dateOfDeath);
        $this->setThingReligion($this->religion);
        $this->setThingIsVeteran($this->isVeteran);
        $this->setThingHighestEducationLevel($this->highestEducationLevel);
        $this->setThingIsDisabled($this->isDisabled);
        $this->setThingOrganDonor($this->organDonor);

        return $hvPersonal;
    }

    protected function getNewDataXmlContent() {
        return new hvPersonal();
    }
}