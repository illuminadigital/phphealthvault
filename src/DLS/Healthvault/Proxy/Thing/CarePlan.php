<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\care_plan\CarePlan as hvCarePlan;
use com\microsoft\wc\thing\care_plan\CarePlanGoal as hvCarePlanGoal;
use com\microsoft\wc\thing\care_plan\CarePlanGoalGroup as hvCarePlanGoalGroup;
use com\microsoft\wc\thing\care_plan\CarePlanTask as hvCarePlanTask;
use com\microsoft\wc\thing\types\Person as hvPerson;

use DLS\Healthvault\Proxy\Thing\BaseThing;

use DLS\Healthvault\Proxy\Type\CarePlanGoal;
use DLS\Healthvault\Proxy\Type\CarePlanTask;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Blob\BlobStoreFactory;

use Symfony\Component\Validator\Constraints as Assert;

class CarePlan extends BaseThing
{
    protected $thingType = 'CarePlan';
    
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
    
    /**
     * The people involved in helping with the care plan
     * 
     * @var array
     */
    protected $careTeam = array();
    
    /**
     * The person who is managing the care plan.
     * 
     * @var \DLS\Healthvault\Proxy\Type\Person
     */
    protected $carePlanManager;

    protected $tasks = array();

    protected $goals = array();
    
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
            $this->tasks[] = $task;
        } else {
            $this->tasks[$sequence] = $task;
        }
    }
    
    public function deleteTask($task)
    {
        if (is_object($task)) {
            $referenceId = $task->getReferenceId();
        } else {
            $referenceId = (string) $task;
        }
        
        if (! is_array($this->tasks)) {
            return FALSE;
        }
        
        foreach ($this->tasks as $index => $thisTask) {
            if ($thisTask->getReferenceId() == $referenceId) {
                unset($this->tasks[$index]);
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
    public function replaceTask($task, $reference) {
        if (strpos($reference, '-') === FALSE) {
            if (isset($this->tasks[$reference])) {
                $this->tasks[$reference] = $task;
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            foreach ($this->tasks as $index => $theTask) {
                if ($theTask->getReferenceId() == $task->getReferenceId()) {
                    $this->tasks[$index] = $task;
                    return TRUE;
                }
            }
        }
        
        return FALSE;
    }
    
    public function getTaskForReference($reference) {
        if (strpos($reference, '-') === FALSE) {
            if (isset($this->tasks[$reference])) {
                return $this->tasks[$reference];
            } else {
                return NULL;
            }
        } else {
            if ( is_array($this->tasks) ) {
                foreach ($this->tasks as $index => $theTask) {
                    if ($theTask->getReferenceId() == $reference) {
                        return $this->tasks[$index];
                    }
                }
            }
        }
        
        return NULL;
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
    
    public function replaceGoal($goal, $reference) {
        if (strpos($reference, '-') === FALSE) {
            return FALSE; // Makes no sense
        }
        
        if ( is_array($this->goals) ) {
            foreach ($this->goals as $goalGroupName => $goalData) {
                if ( ! empty($goalData['goals']) && is_array($goalData['goals'])) {
                    foreach ($goalData['goals'] as $index => $theGoal) {
                        if ($theGoal->getReferenceId() == $reference) {
                            $this->goals[$goalGroupName]['goals'][$index] = $goal;
                            
                            return TRUE;
                        }
                    }
                }
            }
        }
        
        return FALSE;
    }
    
    public function getGoalForReference($reference) {
        if (strpos($reference, '-') === FALSE) {
            return FALSE; // Makes no sense
        }

        if ( is_array($this->goals) ) {
            foreach ($this->goals as $goalData) {
                if ( ! empty($goalData['goals']) && is_array($goalData['goals'])) {
                    foreach ($goalData['goals'] as $theGoal) {
                        if ($theGoal->getReferenceId() == $reference) {
                            return $theGoal;
                        }
                    }
                }
            }
        }
    
        return NULL;
    }
    
    public function getCareTeam()
    {
        return $this->careTeam;
    }
    
    public function setCareTeam($careTeam)
    {
        $this->careTeam = $careTeam;
        
        return $this;
    }
    
    public function addCareTeamMember($person)
    {
        if (empty($this->careTeam)) {
            $this->careTeam = array($person);
            return $this;
        }
        
        if (! is_array($this->careTeam)) {
            $this->careTeam = array($this->careTeam);
        }
        
        foreach ($this->careTeam as $careTeamMember)
        {
            if ($careTeamMember->equals($person))
            {
                // Already added
                return $this;
            }
        }
        $this->careTeam[] = $person;
        
        return $this;
    }
    
    public function replaceCareTeamMember($person)
    {
        if (empty($this->careTeam)) {
            $this->careTeam = array($person);
            return $this;
        }
        
        if (! is_array($this->careTeam)) {
            $this->careTeam = array($this->careTeam);
        }
        
        foreach ($this->careTeam as $index => $careTeamMember)
        {
            if ($careTeamMember->equals($person))
            {
                $this->careTeam[$index] = $person;
                
                return $this;
            }
        }
        
        $this->careTeam[] = $person;
        
        return FALSE;
    }
    
    public function removeCareTeamMember($person)
    {
        if (empty($this->careTeam)) {
            return $this;
        }
        
        if (! is_array($this->careTeam)) {
            $this->careTeam = array($this->careTeam);
        }
        
        foreach ($this->careTeam as $index => $careTeamMember)
        {
            if ($careTeamMember->equals($person))
            {
                unset($this->careTeam[$index]);
                
                return $this;
            }
        }
        
        return $this;
    }
    
    public function getCarePlanManager()
    {
        return $this->carePlanManager;
    }
    
    public function setCarePlanManager($manager)
    {
        $this->carePlanManager = $manager;
        
        return $this;
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
/*    
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
*/    
    public function getThingCarePlanManager()
    {
        $payload = $this->getThingPayload();
        $manager = $payload->getCarePlanManager(FALSE);
        
        return $manager;
    }
    
    public function setThingCarePlanManager($manager) 
    {
        $payload = $this->getThingPayload();
        
        if ($manager) {
            $manager->updateToThingElement($payload->getCarePlanManager());
        } else {
            $payload->setCarePlanManager(NULL);
        }
        
        return $this;
    }
    
    public function getThingCareTeam()
    {
        $payload = $this->getThingPayload();
        
        $careTeam = array();
        
        if (($hvCareTeam = $payload->getCareTeam(FALSE)) 
                && ($hvCareTeamMembers = $hvCareTeam->getPerson(FALSE)))
        {
            foreach ($hvCareTeamMembers as $hvTeamMember) {
                $teamMember = new Person($hvTeamMember);
                
                $careTeam[] = $teamMember;
            }
        }
        
        return $careTeam;
    }
    
    public function setThingCareTeam($careTeam) {
        $payload = $this->getThingPayload();
        
        if ( empty($careTeam) )
        {
            $payload->setCareTeam(NULL);
            
            return $this;
        }

        if ( ! is_array($careTeam) )
        {
            $careTeam = array($careTeam);
        }
        
        $hvCareTeam = array();
        foreach ($careTeam as $thisCareTeamMember)
        {
            if ( $thisCareTeamMember->isEmpty() ) {
                continue;
            }
            
            $hvCareTeamMember = new hvPerson();
            $thisCareTeamMember->updateToThingElement($hvCareTeamMember);
            
            $hvCareTeam[] = $hvCareTeamMember;
        }
        
        if ( ! empty($hvCareTeam)) {
            $payload->getCareTeam()->setPerson($hvCareTeam);
        } else {
            $payload->setCareTeam(NULL);
        }
        
        return $this;
    }
    
    public function getThingGoals()
    {
        $goals = array();
        
        $payload = $this->getThingPayload();
        $goalGroups = $payload->getGoalGroups(FALSE);
        
        if ( ! empty ($goalGroups) )
        {
            $groups = $goalGroups->getGoalGroup(FALSE);
            
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
                    
                    $thingGoalsWrapper = $goalGroup->getGoals();
                    
                    if (isset($thingGoalsWrapper)) {
                        $thingGoals = $thingGoalsWrapper->getGoal();
                        
                        if ( ! empty($thingGoals) )
                        {
                            foreach ($thingGoals as $thingGoal)
                            {
                                $goal = new CarePlanGoal($thingGoal, $this->healthvaultVocabulary);
                                $goals[$groupName]['goals'][$goal->getReferenceId()] = $goal; 
                            }
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
                    $tasks[] = new CarePlanTask($thingTask, $this->healthvaultVocabulary); 
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
        
        if ( ! empty ($this->endDate) ) {
            $this->setThingEndDate($this->endDate);
        }
        
        $payload = $this->getThingPayload();
        
        if ( ! empty($this->name)) {
            $this->setThingName($this->name);
        }
        
        $this->status->setVocabularyInterface($this->healthvaultVocabulary);
        $this->status->updateToThingElement($payload->getStatus());

        $this->synchroniseGoals();
        
        $this->synchroniseTasks();
        
        $this->synchroniseCareTeam();
        
        $this->setThingCarePlanManager($this->carePlanManager);
        
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
        
        $this->careTeam = $this->getThingCareTeam();
        $this->carePlanManager = $this->getThingCarePlanManager();
        
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
        $goalGroupsWrapper = $payload->getGoalGroups(FALSE);
        if ($goalGroupsWrapper) {
            $goalGroups = $goalGroupsWrapper->getGoalGroup(FALSE);
        } else {
            $goalGroups = array();
        }
        
        $ourGoals = array();
        if ( ! empty($this->goals) && is_array($this->goals)) {
            foreach ($this->goals as $thisGoalGroupName => $goalGroupData) {
                $ourGoals[$thisGoalGroupName] = array(
                    'name' => $goalGroupData['name'],
                    'description' => $goalGroupData['description'],
                    'goals' => array(),
                );
                
                foreach ($goalGroupData['goals'] as $thisGoal) {
                    if ( ! $thisGoal->isEmpty() ) {
                        $ourGoals[$thisGoalGroupName]['goals'][] = $thisGoal;
                    }
                }
            }
        }
        
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
                    if ($goal->getReferenceId(FALSE) == $ourGoal->getReferenceId()) {
                        $ourGoal->updateToThingElement($goalGroupGoals[$goalIndex]);
                        $goalStatus['kept'][] = $ourGoal;
                        
                        unset ($ourGoals[$goalGroupName]['goals'][$ourGoalIndex]);
                        
                        continue 2;
                    }
                }
                
                // Not found -- must be removed
                $goalStatus['removed'][] = new CarePlanGoal($goal, $this->healthvaultVocabulary);
                
                unset ($goalGroupGoals[$goalIndex]);
            }
            
            if ( ! empty ($ourGoals[$goalGroupName]['goals'])) {
                // Need to add these items
                
                foreach ($ourGoals[$goalGroupName]['goals'] as $thisGoal) {
                    $newGoal = new hvCarePlanGoal();
                    $thisGoal->updateToThingElement($newGoal);
                    $goalGroup->getGoals()->addGoal($newGoal);
                    
                    $goalStatus['added'][] = $thisGoal;
                }
                
                unset($ourGoals[$goalGroupName]);
            }
        }
        
        // ourGoals still contains a list of those groups added to the collection
        if ( ! empty($ourGoals) ) {
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
                    
                    $goalStatus['added'][] = $thisGoal;
                }
                
                $goalGroupWrapper = $payload->getGoalGroups();
                
                if ( ! $goalGroupWrapper ) {
                    $payload->setGoalGroups(NULL);
                    $goalGroupWrapper = $payload->getGoalGroups();
                }
                
                $goalGroupWrapper->addGoalGroup($goalGroup);
            }
        } 

        // If the result would be an empty group, remove the wrapper completely.           
        $goalGroupCheck = $payload->getGoalGroups(FALSE);
        if (empty($goalGroupCheck)) {
            $payload->setGoalGroups(FALSE);
        }
        
        return $goalStatus;
    }
    
    protected function synchroniseTasks() {
        // We always have ReferenceIds in our tasks
        
        $payload = $this->getThingPayload();
        $tasksWrapper = $payload->getTasks(FALSE);
        if ( $tasksWrapper ) { 
            $thingTasks = $tasksWrapper->getTask();
        } else {
            $thingTasks = array();
        }
        
        $newTasks = array();
        $extraTasks = array();

        if ( ! empty($this->tasks) && is_array($this->tasks)) {
            foreach ($this->tasks as $theTaskReference => $theTask) {
                if ($theTask->isEmpty()) {
                    continue;
                }
                
                if (is_numeric($theTaskReference)) {
                    // Must be an index
                    
                    if (isset($thingTasks[$theTaskReference])) {
                        $newTasks[$theTaskReference] = $thingTasks[$theTaskReference];
                        $theTask->updateToThingElement($newTasks[$theTaskReference]);
                    } else {
                        $newTask = new hvCarePlanTask();
                        $theTask->updateToThingElement($newTask);
                        $newTasks[$theTaskReference] = $newTask;
                    }
                } else {
                    foreach ($thingTasks as $thisThingTaskIndex => $thisThingTask) {
                        if ($thisThingTask->getReferenceId() == $theTaskReference) {
                            $newTasks[$theTaskReference] = $thisThingTask;
                            $theTask->updateToThingElement($newTasks[$theTaskReference]);
                            break;
                        }
                    }
                    
                    $newTask = new hvCarePlanTask();
                    $theTask->updateToThingElement($newTask);
                    $extraTasks[] = $newTask;
                }
            }
            
            if ( ! empty ($extraTasks) ) {
                $newTasks = array_merge($newTasks, $extraTasks);
            }
        }
        
        if ( ! empty($newTasks) ) {
            $tasksWrapper = $payload->getTasks();
            
            if ( ! $tasksWrapper ) {
                $payload->setTasks(NULL);
                $tasksWrapper = $payload->getTasks();
            }
            
            $tasksWrapper->setTask($newTasks);
        } else {
            $payload->setTasks(FALSE);
        }
    }
    
    protected function synchroniseCareTeam()
    {
        return $this->setThingCareTeam($this->careTeam);
    }
}
