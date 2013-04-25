<?php
namespace DLS\Healthvault\Proxy\Type;
use DLS\Healthvault\Proxy\Type\CodableValue;

use DLS\Healthvault\Utilities\Guid;
use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Utilities\DateTimeUtils;

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
        $this->name = new CodableValue("goal-type");
        
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
    public function setStartDate($startDate)
    {
        if ( ! $startDate instanceof \DateTime ) {
            $startDate = new \DateTime($startDate);
        }
        
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
    public function setEndDate($endDate)
    {
        if ( ! $endDate instanceof \DateTime ) {
            $endDate = new \DateTime($endDate);
        }
        
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
    public function setTargetCompletionDate($targetCompletionDate)
    {
        if ( ! $targetCompletionDate instanceof \DateTime ) {
            $targetCompletionDate = new \DateTime($targetCompletionDate);
        }
        
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
    
    /* Utility */
    public function isComplete() {
        return ( isset($this->endDate) );
    }

    /* Thing Manipulation */

    public function setFromThingElement($thingElement)
    {
        $this->name->setVocabularyInterface($this->vocabularyInterface);
        $this->name->setFromThingElement($thingElement->getName());
        
        $ref = $thingElement->getReferenceId(FALSE);
        if ($ref) {
            $this->referenceId = $ref->getValue();
        }
        
        $desc = $thingElement->getDescription(FALSE);
        if ($desc) {
            $this->description = $desc->getValue();
        }
        
        $this->startDate = DateTimeUtils::getThingApproxDateTime($thingElement->getStartDate(FALSE));
        $this->endDate = DateTimeUtils::getThingApproxDateTime($thingElement->getEndDate(FALSE));
        $this->targetCompletionDate = DateTimeUtils::getThingApproxDateTime($thingElement->getTargetCompletionDate(FALSE));
        
        // FIXME: Implement associatedTypeInfo
        // FIXME: Implement recurrence
                
    }

    public function updateToThingElement($thingElement)
    {
        $this->name->setVocabularyInterface($this->vocabularyInterface);
        if (! $this->name->isEmpty() ) {
            $this->name->updateToThingElement($thingElement->getName());
        } else {
            $thingElement->setName(NULL);
        }
        
        if ( ! empty($this->referenceId)) {
            $thingElement->getReferenceId()->setValue($this->referenceId);
        }
        if ($this->description) {
            $thingElement->getDescription()->setValue($this->description);
        }
        
        if ( isset($this->startDate) || $thingElement->getStartDate(FALSE)) {
            DateTimeUtils::setThingApproxDateTime($thingElement->getStartDate(), $this->startDate);
        }
        if ( isset($this->endDate) || $thingElement->getEndDate(FALSE)) {
            DateTimeUtils::setThingApproxDateTime($thingElement->getEndDate(), $this->endDate);
        }
        if ( isset($this->targetCompletionDate) || $thingElement->getTargetCompletionDate(FALSE)) {
            DateTimeUtils::setThingApproxDateTime($thingElement->getTargetCompletionDate(), $this->targetCompletionDate);
        }
        
        // FIXME: Implement associatedTypeInfo
        // FIXME: Implement recurrence
    }

    /* End of Thing Manipulation */
    
    public function isEmpty() 
    {
        return ((empty($this->name) || $this->name->isEmpty()) && empty($this->description));
    }
}
