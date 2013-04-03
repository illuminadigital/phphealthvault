<?php
namespace DLS\Healthvault\Proxy\Type;
use DLS\Healthvault\Utilities\VocabularyInterface;

use Symfony\Component\Validator\Constraints as Assert;

class Person extends VocabularyType
{
    /**
     * Full name of the person
     * 
     * @Assert\NotBlank()
     * 
     * @var string
     */
    protected $fullName;

    /**
     * Title of the person
     * 
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $title;

    /**
     * First name of the person
     * 
     * @var string
     */
    protected $firstName;

    /**
     * Middle name of the person
     * 
     * @var string
     */
    protected $middleName;

    /**
     * Last name of the person
     * 
     * @var string
     */
    protected $lastName;

    /**
     * Suffix of the person's name
     * 
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $suffix;

    /**
     * Name of the organization
     * 
     * @var string
     */
    protected $organization;

    /**
     * Description of the persons professional training
     * 
     * @var string
     */
    protected $professionalTraining;

    /**
     * ID of the person within the organization
     * 
     * @var string
     */
    protected $organizationId;

    protected $contact;

    /**
     * Type of person that this refers to
     * 
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $type;

    public function __construct($thingElement = NULL)
    {
        $this->type = new CodableValue('person-types');
        $this->title = new CodableValue('name-prefixes');
        $this->suffix = new CodableValue('name-suffixes');
        
        parent::__construct($thingElement);
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        
        return $this;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        
        return $this;
    }

    public function getSuffix()
    {
        return $this->suffix;
    }

    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
        
        return $this;
    }

    public function getOrganization()
    {
        return $this->organization;
    }

    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    public function getProfessionalTraining()
    {
        return $this->professionalTraining;
    }

    public function setProfessionalTraining($professionalTraining)
    {
        $this->professionalTraining = $professionalTraining;

        return $this;
    }

    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;

        return $this;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function setFromThingElement($thingElement)
    {
        // FIXME:
        //$this->xxx->setVocabularyInterface($this->vocabularyInterface);
        
    }

    public function updateToThingElement($thingElement)
    {
        // FIXME:
        //$this->xxx->setVocabularyInterface($this->vocabularyInterface);
        
    }

    public function __toString()
    {

    }
}
