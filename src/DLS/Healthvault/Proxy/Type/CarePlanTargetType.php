<?php
namespace DLS\Healthvault\Proxy\Type;
use DLS\Healthvault\Proxy\Type\CodableValue;

use DLS\Healthvault\Utilities\Guid;
use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\VocabularyType;

use Symfony\Component\Validator\Constraints as Assert;

abstract class CarePlanTargetType extends VocabularyType
{
    /**
     * Name of the target
     * 
     * @Assert\NotBlank()
     * 
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $name;

    /**
     * Description of the target
     * 
     * @var string
     */
    protected $description;

    /**
     * Start date for the target
     * 
     * @Assert\DateTime()
     * 
     * @var \DateTime
     */
    protected $startDate;

    /**
     * End date for the target (no longer tracked)
     * 
     * @Assert\DateTime()
     * 
     * @var \DateTime
     */
    protected $endDate;

    /**
     * Intended completion date for the target
     * 
     * @Assert\DateTime()
     * 
     * @var \DateTime
     */
    protected $targetCompletionDate;

    protected $associatedType;

    /**
     * Unique reference ID for the task
     * 
     * @var string
     */
    protected $referenceId;

    /**
     * Type of recurrence
     * 
     * @var \DLS\Healthvault\Proxy\Type\CodableValue;
     */
    protected $recurrenceInterval;

    /**
     * Number of repetitions within the interval
     * 
     * @Assert\Type("integer")
     * 
     * @var int
     */
    protected $recurrenceRepetitions;
    
    /**
     * Version id of the parent Care plan
     * 
     * @var string
     */
    protected $version;

    /* Construction */

    public function __construct($thingElement = NULL, $vocabularyInterface = NULL)
    {
        $this->referenceId = Guid::getGuid();

        $this->associatedType = array();

        $this->recurrenceInterval = new CodableValue("recurrence-intervals");
        $this->name = new CodableValue("recurrence-intervals");
        
        if ( isset($vocabularyInterface) ) {
            $this->setVocabularyInterface($vocabularyInterface);
        }
        
        parent::__construct($thingElement);
    }

    /* End of Construction */

    /* Getters/Setters */

    /**
     * @return the CodableValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return the string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param  $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return the DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return the DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return the DateTime
     */
    public function getTargetCompletionDate()
    {
        return $this->targetCompletionDate;
    }

    /**
     * @param \DateTime $targetCompletionDate
     */
    public function setTargetCompletionDate(\DateTime $targetCompletionDate)
    {
        $this->targetCompletionDate = $targetCompletionDate;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\AssociatableType
     */
    public function getAssociatedType()
    {
        return $this->associatedType;
    }

    /**
     * @param unknown_type $associatedType
     */
    public function setAssociatedType($associatedType)
    {
        $this->associatedType = $associatedType;
    }

    /**
     * @return the string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param  $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return the CodableValue;
     */
    public function getRecurrenceInterval()
    {
        return $this->recurrenceInterval;
    }

    /**
     * @param  $recurrenceInterval
     */
    public function setRecurrenceInterval($recurrenceInterval)
    {
        $this->recurrenceInterval = $recurrenceInterval;
    }

    /**
     * @return the int
     */
    public function getRecurrenceRepetitions()
    {
        return $this->recurrenceRepetitions;
    }

    /**
     * @param int $recurrenceRepetitions
     */
    public function setRecurrenceRepetitions(int $recurrenceRepetitions)
    {
        $this->recurrenceRepetitions = $recurrenceRepetitions;
    }
    
    public function getVersion() {
        return $this->version;
    }
    
    public function setVersion($version) {
        $this->version = $version;
    
        return $this;
    }

    /* End of Getters/Setters */

    /* Thing Manipulation */

    public function setFromThingElement($thingElement)
    {
        $this->name->setVocabularyInterface($this->vocabularyInterface);
        $this->name->setFromThingElement($thingElement->getName());
    }

    public function updateToThingElement($thingElement)
    {
        $this->name->setVocabularyInterface($this->vocabularyInterface);
        $this->name->updateToThingElement($thingElement->getName());
    }

    /* End of Thing Manipulation */
}
