<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\care_plan\CarePlan as hvCarePlan;
use com\microsoft\wc\thing\care_plan\CarePlanGoal as hvCarePlanGoal;
use com\microsoft\wc\thing\care_plan\CarePlanGoalGroup as hvCarePlanGoalGroup;

use DLS\Healthvault\Proxy\Thing\BaseThing;

use DLS\Healthvault\Proxy\Type\CarePlanGoal;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Blob\BlobStoreFactory;

use Symfony\Component\Validator\Constraints as Assert;

class CarePlan extends BaseThing
{
    /**
     * The name of the care plan
     * @Assert\NotBlank()
     * 
     * @var string
     */
    protected $name;

    /**
     * Start date for the care plan
     * @Assert\DateTime()
     * 
     * @var \DateTime
     */
    protected $startDate;

    /**
     * End date for the care plan
     * @Assert\DateTime()
     * 
     * @var \DateTime
     */
    protected $endDate;

    /**
     * Status of the care plan
     * @Assert\NotBlank()
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    /*
     * @Validate\InHealthvaultVocabulary("goal-status") ?
     */
    protected $status;

    protected $tasks;

    protected $goals;
    
    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL, BlobStoreFactory $factory = NULL) {
        
        $this->status = new CodableValue('goal-status');
        if ($healthvaultVocabulary) {
            $this->status->setVocabularyInterface($healthvaultVocabulary);
        }
        
        parent::__construct($thing, $healthvaultVocabulary, $factory);
    }

    /**
     * @return the string
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
        
        if ($this->thing) {
            $this->setThingName($name);
        }
        
        return $this;
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
            
        if ($this->thing) {
            $this->setThingStartDate($startDate);
        }
        
        return $this;
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
            
        if ($this->thing) {
            $this->setThingEndDate($endDate);
        }
        
        return $this;
    }

    /**
     * @return the string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param  $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return the unknown_type
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * @param unknown_type $tasks
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
    }
    
    public function addTask($task, $sequence = NULL)
    {
        if (empty($sequence)) {
            $sequence = count($this->tasks);
        }
        
        $this->tasks[$sequence][] = $task;
    }

    /**
     * @return the unknown_type
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param unknown_type $goals
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;
    }
    
    public function addGoal($goal, $group = NULL)
    {
        if ( empty($group) ) {
            if (empty($this->goals)) {
                $group = $this->addGoalGroup('General', 'General');
            } else {
                $groupNames = array_keys($this->goals);
                $group = array_pop($groupNames);
            }
        }
        
        $this->goals[$group]['goals'][] = $goal;
    }
    
    public function addGoalGroup($name, $description) {
        $this->goals[$name] = array(
            'name' => $name,
            'description' => $description,
            'goals' => array(),
        );
        
        return $name;
    }
    
    /* Thing Methods */
    public function getThingName()
    {
        $payload = $this->getThingPayload();
        $name = $payload->getName()->getValue();
        
        return $name;
    }
    
    public function setThingName($name)
    {
        $payload = $this->getThingPayload();
        $payload->getName()->setValue($name);
        
        return $this;
    }
    
    public function getThingStartDate()
    {
        $payload = $this->getThingPayload();
        $startDate = $this->getThingApproxDateTime($payload->getStartDate(FALSE));
    
        return $startDate;
    }
    
    public function setThingStartDate(\DateTime $startDate)
    {
        $payload = $this->getThingPayload();
        $this->setThingApproxDateTime($payload->getStartDate(), $startDate);
    
        return $this;
    }
    
    public function getThingEndDate()
    {
        $payload = $this->getThingPayload();
        $endDate = $this->getThingApproxDateTime($payload->getEndDate(FALSE));
    
        return $endDate;
    }
    
    public function setThingEndDate(\DateTime $endDate)
    {
        $payload = $this->getThingPayload();
        $this->setThingApproxDateTime($payload->getEndDate(), $endDate);
    
        return $this;
    }
    
    public function getThingTargetDate()
    {
        $payload = $this->getThingPayload();
        $targetDate = $this->getThingApproxDateTime($payload->getTargetDate(FALSE));
    
        return $targetDate;
    }
    
    public function setThingTargetDate(\DateTime $targetDate)
    {
        $payload = $this->getThingPayload();
        $this->setThingApproxDateTime($payload->getTargetDate(), $targetDate);
    
        return $this;
    }
    
    public function getThingCompletionDate()
    {
        $payload = $this->getThingPayload();
        $endDate = $this->getThingApproxDateTime($payload->getEndDate(FALSE));
    
        return $endDate;
    }
    
    public function setThingCompletionDate(\DateTime $endDate)
    {
        $payload = $this->getThingPayload();
        $this->setThingApproxDateTime($payload->getEndDate(), $endDate);
    
        return $this;
    }
    
    public function getThingGoals()
    {
        $goals = array();
        
        $payload = $this->getThingPayload();
        $goalGroups = $payload->getGoalGroups();
        
        if ( ! empty ($goalGroups) )
        {
            $groups = $goalGroups->getGoalGroup();
            
            if ( ! empty($groups) )
            {
                foreach ($groups as $goalGroup)
                {
                    $groupName = $goalGroup->getName()->getText();
                    
                    $goals[$groupName] = array(
                        'name' => $groupName,
                        'description' => $goalGroup->getDescription()->getValue(),
                        'goals' => array(),
                    );
                    
                    $thingGoals = $goalGroup->getGoals();
                    
                    if ( ! empty($thingGoals) )
                    {
                        foreach ($thingGoals as $thingGoal)
                        {
                            $goals[$groupName]['goals'][$thingGoal->getName()->getValue()] = new CarePlanGoal($thingGoal, $this->vocabularyInterface); 
                        }                            
                    }
                }
            }
        }
        
        return $goals;
    }
    
    public function getThingTasks()
    {
        $tasks = array();
        
        $payload = $this->getThingPayload();
        $goalTasks = $payload->getTasks(FALSE);
        
        if ( ! empty ($goalTasks) )
        {
            $thingTasks = $goalTasks->getTask();
            
            if ( ! empty($thingTasks) )
            {
                foreach ($thingTasks as $thingTask)
                {
                    $tasks[$thingTask->getName()->getValue()] = new CarePlanTask($thingTask, $this->vocabularyInterface); 
                }                            
            }
        }
        
        return $tasks;
    }
    
    public function getThing(Thing2 $thing = NULL) {
        $thing = parent::getThing($thing);

        if ( ! empty ($this->startDate) ) {
            $this->setThingStartDate($this->startDate);
        }
        
        if ( ! empty ($this->targetDate) ) {
            $this->setThingTargetDate($this->targetDate);
        }
        
        $payload = $this->getThingPayload();
        
        $this->setThingName($this->name);
        $this->status->setVocabularyInterface($this->healthvaultVocabulary);
        $this->status->updateToThingElement($payload->getStatus());

        $this->synchroniseGoals();
        
        return $thing;
    }
    
    public function setThing(Thing2 $thing) {
        $result = parent::setThing($thing);
        
        $this->startDate = $this->getThingStartDate();
        $this->endDate = $this->getThingEndDate();
        $this->name = $this->getThingName();
        
        $payload = $this->getThingPayload();
        
        $this->status->setVocabularyInterface($this->healthvaultVocabulary);
        $this->status->setFromThingElement($payload->getStatus());
        
        $this->goals = $this->getThingGoals();
        $this->tasks = $this->getThingTasks();
        
        // FIXME: Implement rest of the methods
        
        return $this;
    }
    /* End of Thing Methods */
    
    /* BaseThing Methods */
    protected function getNewDataXmlContent() {
        return new hvCarePlan();
    }
    
    public static function getDisplayFields() {
        return array(
                'summary' => array(
                ),
                'detailed' => array(
                )
        );
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvCarePlan::ID);
    }
    /* End of BaseThing Methods */
    
    /**
     * Synchronise the goals into the thing
     * 
     * Returns an array of goals according to what happened to them
     * 
     * @return array  
     */
    protected function synchroniseGoals()
    {
        // Get the values that are in the current structure
        // compare with what we think they should be
        // adjust accordingly

        $payload = $this->getThingPayload();
        $goalGroups = $payload->getGoalGroups()->getGoalgroup();
        
        $ourGoals = array_merge($this->goals, array());
        
        $goalStatus = array(
            'added' => array(),
            'removed' => array(),
            'kept' => array(),
        );
        
        foreach ($goalGroups as $goalGroupIndex => $goalGroup) {
            $goalGroupName = $goalGroup->getName()->getText();
            if ( ! isset ($ourGoals[$goalGroupName]) || empty($ourGoals[$goalGroupName]['goals'])) {
                unset($goalGroups[$goalGroupIndex]);
                
                foreach ($goalGroup->getGoals()->getGoal() as $thisGoal) {
                    $goalStatus['removed'][] = new CarePlanGoal($thisGoal, $this->healthvaultVocabulary);
                }
                
                continue;
            }
            
            $goalGroupGoals = $goalGroup->getGoals()->getGoal();
            
            foreach ($goalGroupGoals as $goalIndex => $goal) {
                foreach ($ourGoals[$goalGroupName]['goals'] as $ourGoalIndex => $ourGoal) {
                    if ($goal->getReferenceId() == $ourGoal->getReferenceId()) {
                        $ourGoal->updateToThingElement($goalGroupGoals[$goalIndex]);
                        $goalStatus['kept'][] = $ourGoal;
                        
                        unset ($ourGoals[$goalGroupName]['goals'][$ourGoalIndex]);
                        
                        continue 2;
                    }
                }
                
                // Not found -- must be removed
                $goalStatus['removed'] = new CarePlanGoal($goal, $this->healthvaultVocabulary);
                
                unset ($goalGroupGoals[$goalIndex]);
            }
            
            if ( ! empty ($ourGoals[$goalGroupName]['goals'])) {
                // Need to add these items
                
                foreach ($ourGoals[$goalGroupName]['goals'] as $thisGoal) {
                    $newGoal = new hvCarePlanGoal();
                    $thisGoal->updateToThingElement($newGoal);
                    $goalGroup->getGoals()->addGoal($newGoal);
                    
                    $goalStatus['added'] = $thisGoal;
                }
                
                unset($ourGoals[$goalGroupName]);
            }
        }
        
        // ourGoals still contains a list of those groups added to the collection
        foreach ($ourGoals as $groupName => $goalData) {
            if ( empty($goalData['goals'])) {
                continue;
            }
            
            $goalGroup = new hvCarePlanGoalGroup();
            $goalGroup->setName($goalData['name']);
            $goalGroup->setDescription($goalData['description']);
            
            foreach ($goalData['goals'] as $thisGoal) {
                $newGoal = new hvCarePlanGoal();
                $thisGoal->updateToThingElement($newGoal);
                $goalGroup->getGoals()->addGoal($newGoal);
                
                $goalStatus['added'] = $thisGoal;
            }
            
            $payload->getGoalGroups()->addGoalGroup($goalGroup);
        }
        
        return $goalStatus;
    }
}
