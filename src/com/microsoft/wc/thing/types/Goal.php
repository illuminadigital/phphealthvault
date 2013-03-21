<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="goal")
 */
class Goal {
	/**
	 * Goal
	 * Defines a health or fitness goal.
	 * A goal may be a short-term achievement like losingweight or a long-term goal like competing in a marathon.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="target-date")
	 */
	protected $targetDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="completion-date")
	 */
	protected $completionDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GoalStatus", name="status")
	 */
	protected $status;

	public function __construct($targetDate = NULL, $completionDate = NULL, $status = NULL) {
		$this->targetDate = ($targetDate===NULL) ? NULL : $this->validateTargetDate($targetDate);
		$this->completionDate = ($completionDate===NULL) ? NULL : $this->validateCompletionDate($completionDate);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
	}

	public function getTargetDate($autoCreate = TRUE) {
		if ($this->targetDate===NULL && $autoCreate && ! isset($this->_overrides['targetDate']) ) {
			$this->targetDate = $this->createTargetDate();
		}
		return $this->targetDate;
	}
	
	protected function createTargetDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setTargetDate($targetDate) {
		$this->targetDate = $this->validateTargetDate($targetDate);
	}

	protected function validateTargetDate($targetDate) {
		if ( $targetDate === FALSE ) {
			$this->_overrides['targetDate'] = TRUE;
			return NULL;
		}

		if ( ! $targetDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($targetDate) ) {
			$targetDate = new \com\microsoft\wc\dates\ApproxDateTime ($targetDate);
		}

		unset ($this->_overrides['targetDate']);
	
		return $targetDate;
	}

	public function getCompletionDate($autoCreate = TRUE) {
		if ($this->completionDate===NULL && $autoCreate && ! isset($this->_overrides['completionDate']) ) {
			$this->completionDate = $this->createCompletionDate();
		}
		return $this->completionDate;
	}
	
	protected function createCompletionDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setCompletionDate($completionDate) {
		$this->completionDate = $this->validateCompletionDate($completionDate);
	}

	protected function validateCompletionDate($completionDate) {
		if ( $completionDate === FALSE ) {
			$this->_overrides['completionDate'] = TRUE;
			return NULL;
		}

		if ( ! $completionDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($completionDate) ) {
			$completionDate = new \com\microsoft\wc\dates\ApproxDateTime ($completionDate);
		}

		unset ($this->_overrides['completionDate']);
	
		return $completionDate;
	}

	public function getStatus($autoCreate = TRUE) {
		if ($this->status===NULL && $autoCreate && ! isset($this->_overrides['status']) ) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\thing\types\GoalStatus();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( $status === FALSE ) {
			$this->_overrides['status'] = TRUE;
			return NULL;
		}

		if ( ! $status instanceof \com\microsoft\wc\thing\types\GoalStatus  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\thing\types\GoalStatus ($status);
		}

		unset ($this->_overrides['status']);
	
		return $status;
	}
} // end class Goal
