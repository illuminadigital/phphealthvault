<?php
namespace com\microsoft\wc\thing\condition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.condition", prefix="")
 * })
 * @XmlEntity	(xml="condition")
 */
class Condition extends \com\microsoft\wc\thing\Thing {
	/**
	 * Defines a single health or medical issue/problem.
	 * CCR qualifiers and other notes should go in thecommon/note section of the thing.
	 */

	const ID = '7ea7a1f9-880b-4bd4-b593-f5660f20eda8';
	const NAME = 'Condition';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="onset-date")
	 */
	protected $onsetDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="stop-date")
	 */
	protected $stopDate;

	/**
	 * @XmlText	(type="string", name="stop-reason")
	 */
	protected $stopReason;

	public function __construct($name = NULL, $onsetDate = NULL, $status = NULL, $stopDate = NULL, $stopReason = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->onsetDate = ($onsetDate===NULL) ? NULL : $this->validateOnsetDate($onsetDate);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->stopDate = ($stopDate===NULL) ? NULL : $this->validateStopDate($stopDate);
		$this->stopReason = ($stopReason===NULL) ? NULL : $this->validateStopReason($stopReason);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
	}

	public function getOnsetDate() {
		if ($this->onsetDate===NULL) {
			$this->onsetDate = $this->createOnsetDate();
		}
		return $this->onsetDate;
	}
	
	protected function createOnsetDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setOnsetDate($onsetDate) {
		$this->onsetDate = $this->validateOnsetDate($onsetDate);
	}

	protected function validateOnsetDate($onsetDate) {
		if ( ! $onsetDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($onsetDate) ) {
			$onsetDate = new \com\microsoft\wc\dates\ApproxDateTime ($onsetDate);
		}
	
		return $onsetDate;
	}

	public function getStatus() {
		if ($this->status===NULL) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}
	
		return $status;
	}

	public function getStopDate() {
		if ($this->stopDate===NULL) {
			$this->stopDate = $this->createStopDate();
		}
		return $this->stopDate;
	}
	
	protected function createStopDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setStopDate($stopDate) {
		$this->stopDate = $this->validateStopDate($stopDate);
	}

	protected function validateStopDate($stopDate) {
		if ( ! $stopDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($stopDate) ) {
			$stopDate = new \com\microsoft\wc\dates\ApproxDateTime ($stopDate);
		}
	
		return $stopDate;
	}

	public function getStopReason() {
		if ($this->stopReason===NULL) {
			$this->stopReason = $this->createStopReason();
		}
		return $this->stopReason;
	}
	
	protected function createStopReason() {
		return '';
	}

	public function setStopReason($stopReason) {
		$this->stopReason = $this->validateStopReason($stopReason);
	}

	protected function validateStopReason($stopReason) {
		if ( ! is_string($stopReason) && ! is_null($stopReason) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'stopReason', 'string'));
		}
	
		return $stopReason;
	}
} // end class Condition
