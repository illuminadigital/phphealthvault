<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-tasks")
 */
class CarePlanTasks {
	/**
	 * List of care plan tasks.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\CarePlanTask", collection="true", name="task")
	 */
	protected $task;

	public function __construct($task = NULL) {
		$this->task = ($task===NULL) ? NULL : $this->validateTask($task);
	}

	public function getTask($autoCreate = TRUE) {
		if ($this->task===NULL && $autoCreate && ! isset($this->_overrides['task']) ) {
			$this->task = $this->createTask();
		}
		return $this->task;
	}
	
	protected function createTask() {
		return array();
	}

	public function setTask($task) {
		$this->task = $this->validateTask($task);
	}

	protected function validateTask($task) {
		if ( ! is_array ($task) ) {
			$task = array($task);
		}
		$count = count($task);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'task', 1));
		}
		foreach ($task as $entry) {
			if (!($entry instanceof \com\microsoft\wc\thing\care_plan\CarePlanTask )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'task', 'care-plan-task'));
			}
		}
	
		return $task;
	}

	public function addTask($task) {
		$this->task[] = $task;
	}
} // end class CarePlanTasks
