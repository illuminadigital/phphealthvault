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

	public function getTargetDate() {
		if ($this->targetDate===NULL) {
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
		if ( ! $targetDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($targetDate) ) {
			$targetDate = new \com\microsoft\wc\dates\ApproxDateTime ($targetDate);
		}
	
		return $targetDate;
	}

	public function getCompletionDate() {
		if ($this->completionDate===NULL) {
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
		if ( ! $completionDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($completionDate) ) {
			$completionDate = new \com\microsoft\wc\dates\ApproxDateTime ($completionDate);
		}
	
		return $completionDate;
	}

	public function getStatus() {
		if ($this->status===NULL) {
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
		if ( ! $status instanceof \com\microsoft\wc\thing\types\GoalStatus  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\thing\types\GoalStatus ($status);
		}
	
		return $status;
	}
} // end class Goal
