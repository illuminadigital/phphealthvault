<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\personal\Personal as hvPersonal;
use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;
use com\microsoft\wc\types\CodedValue;
use com\microsoft\wc\types\CodableValue;

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
     * @Validate\InHealthvaultVocabulary("blood-types")
     * @var string
     */
    protected $bloodType;

    /**
     * @Assert\NotBlank()
     * @Validate\InHealthvaultVocabulary("ethnicity")
     * @var string
     */
    protected $ethnicity;

    /**
     * @var string
     */
    protected $ssn;

    /**
     * @Assert\NotBlank()
     * @Validate\InHealthvaultVocabulary("marital-status")
     * @var string
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
     * @Validate\InHealthvaultVocabulary("religion")
     * @var string
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
     * @Validate\InHealthvaultVocabulary("education-level")
     * @var string
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

    /*
        protected $name;
        protected $birthdate;
        protected $bloodType;
        protected $ethnicity;
        protected $ssn;
        protected $maritalStatus;
        protected $employmentStatus;
        protected $isDeceased;
        protected $dateOfDeath;
        protected $religion;
        protected $isVeteran;
        protected $highestEducationLevel;
        protected $isDisabled;
        protected $organDonor;
      */

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
    public function setBloodType($bloodType){}
    public function setThingBloodType($bloodType){}

    public function getEthnicity(){

        return $this->ethnicity;

    }
    public function setEthnicity($ethnicity){}
    public function setThingEthnicity($ethnicity){}

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
    public function setMaritalStatus($martialStatus){}
    public function setThingMaritalStatus($martialStatus){}

    public function getEmploymentStatus(){

        return $this->employmentStatus;

    }

    public function setEmploymentStatus($employmentStatus){}
    public function setThingEmploymentStatus($employmentStatus){}

    public function getIsDeceased(){

        return $this->employmentStatus;

    }

    public function setIsDeceased($isDeceased){}
    public function setThingIsDeceased($isDeceased){}

    public function getDateOfDeath(){

        return $this->dateOfDeath;

    }
    public function setDateOfDeath($dateOfDeath){}
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
    public function setReligion($religion){}
    public function setThingReligion($religion){}

    public function getIsVeteran(){

        return $this->isVeteran;

    }
    public function setIsVeteran($isVeteran){}
    public function setThingIsVeteran($isVeteran){}

    public function getHighestEducationLevel(){

        return $this->highestEducationLevel;

    }
    public function setHighestEducationLevel($highestEducationLevel){}
    public function setThingHighestEducationLevel($highestEducationLevel){}

    public function getIsDisabled(){

        return $this->isDisabled;

    }
    public function setIsDisabled($isDisabled){}
    public function setThingIsDisabled($isDisabled){}

    public function getOrganDonor(){

        return $this->organDonor;

    }

    public function setOrganDonor($organDonor){}
    public function setThingOrganDonor($organDonor){}

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvPersonal::ID);
    }

    public function setThing(Thing2 $hvPersonal)
    {

        if ( ! self::supports($hvPersonal) )
        {
            return FALSE;
        }

        $result = parent::setThing($hvPersonal);

        if ( ! $result )
        {
            return $result;
        }

        $this->hvPersonal = $hvPersonal;

        $payloadArea = $this->getThingPayloadArea();

        $payload = $this->getThingPayload();

        //$this->name = $payload->getName()->getText();

        $this->name = $payload->getName()->getFull();

        $this->birthdate = $this->getThingDateTime($payload->getBirthdate());

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