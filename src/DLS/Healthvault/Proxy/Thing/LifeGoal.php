<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Thing\BaseThing;

use com\microsoft\wc\thing\life_goal\LifeGoal as hvLifeGoal;

use Symfony\Component\Validator\Constraints as Assert;

class LifeGoal extends BaseThing
{
    /**
     * Free-Form Description of the goal
     *  
     * @var string
     */
    protected $description;

    /**
     * Current target date to achieve the goal
     * @Assert\DateTime()
     * @var \DateTime
     */
    protected $targetDate;

    /**
     * Date on which the goal was achieved
     * @Assert\DateTime()
     * 
     * @var \DateTime
     */
    protected $completionDate;

    /**
     * Current status
     * @Assert\NotBlank()
     * 
     * @var string
     */
    protected $status;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        
        if ($this->thing) {
            $this->setThingDescription($description);
        }
        
        return $this;
    }

    public function getTargetDate()
    {
        return $this->targetDate;
    }

    public function setTargetDate(\DateTime $targetDate)
    {
        $this->targetDate = $targetDate;

        if ($this->thing) {
            $this->setThingTargetDate($targetDate);
        }
        
        return $this;
    }

    public function getCompletionDate()
    {
        return $this->completionDate;
    }

    public function setCompletionDate(\DateTime $completionDate)
    {
        $this->completionDate = $completionDate;

        if ($this->thing) {
            $this->setThingCompletionDate($completionDate);
        }
        
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        if ($this->thing) {
            $this->setThingStatus($status);
        }
        
        return $this;
    }

    
    public function setThing(Thing2 $thing) 
    {
        $result = parent::setThing($thing);
         
        $this->description = $this->getThingDescription();
        $this->targetDate = $this->getThingTargetDate();
        $this->completionDate = $this->getThingCompletionDate();
        $this->status = $this->getThingStatus();
        
        return $this;
    }
    
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingDescription($this->description);
        $this->setThingTargetDate($this->targetDate);
        $this->setThingCompletionDate($this->completionDate);
        $this->setThingStatus($this->status);
        
        return $thing;
    }
    
    public function getThingDescription()
    {
        $payload = $this->getThingPayload();
        $description = $payload->getDescription();
        
        return $description;
    }
    
    public function setThingDescription($description)
    {
        $payload = $this->getThingPayload();
        $payload->setDescription($description);
    
        return $this;
    }
    
    public function getThingTargetDate()
    {
        $goalInfo = $this->getThingGoalInfoPayload();
        $targetDate = $this->getThingApproxDateTime($goalInfo->getTargetDate());
        
        return $targetDate;
    }
    
    public function setThingTargetDate(\DateTime $targetDate)
    {
        $goalInfo = $this->getThingGoalInfoPayload();
        $this->setThingApproxDateTime($goalInfo->getTargetDate(), $targetDate);
    
        return $this;
    }
    
    public function getThingCompletionDate()
    {
        $goalInfo = $this->getThingGoalInfoPayload();
        $completionDate = $this->getThingApproxDateTime($goalInfo->getCompletionDate());
        
        return $completionDate;
    }
    
    public function setThingCompletionDate(\DateTime $completionDate)
    {
        $goalInfo = $this->getThingGoalInfoPayload();
        $this->setThingApproxDateTime($goalInfo->getCompletionDate(), $completionDate);
    
        return $this;
    }
    
    public function getThingStatus()
    {
        $goalInfo = $this->getThingGoalInfoPayload();
        $status = $goalInfo->getStatus()->getValue();
        
        return $status;
    }
    
    public function setThingStatus($status)
    {
        $goalInfo = $this->getThingGoalInfoPayload();
        $goalInfo->getStatus()->setValue($status);
    
        return $this;
    }
    
    protected function getThingGoalInfoPayload() {
        $payload = $this->getThingPayload();
        
        if ( ! is_object($payload) ) {
            return $payload;
        }
        
        return $payload->getGoalInfo();
    }
    
    protected function getNewDataXmlContent() {
        return new hvLifeGoal();
    }
    
    public static function getDisplayFields() {
        return array(
            'summary' => array(
                'description' => 'Goal',
                'targetDate' => 'Target Date',
                'status' => 'Status',
            ),
            'detailed' => array(
                'description' => 'Goal',
                'targetDate' => 'Target Date',
                'completionDate' => 'Completion Date',
                'status' => 'Status',
                'notes' => 'Notes',
            )
        );
    }
    
    public static function getStatusOptions() {
        return array('Active' => 'The goal is actively being worked toward.', 'Achieved' => 'The goal has been achieved.', 'Abandoned' => 'The goal has been abandoned.');
    }
}
