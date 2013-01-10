<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\ApproxDate;
use com\microsoft\wc\thing\Time;
use com\microsoft\wc\types\CodableValue;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="StructuredApproxDate")
 */
class StructuredApproxDate {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ApproxDate", name="date")
	 */
	protected $date;

	/**
	 * @XmlText	(type="string", name="time")
	 */
	protected $time;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="tz")
	 */
	protected $tz;

	public function __construct($date = NULL, $time = NULL, $tz = NULL) {
		$this->date = ($date===NULL) ? NULL : $this->validateDate($date);
		$this->time = ($time===NULL) ? NULL : $this->validateTime($time);
		$this->tz = ($tz===NULL) ? NULL : $this->validateTz($tz);
	}

	public function getDate() {
		if ($this->date===NULL) {
			$this->date = $this->createDate();
		}
		return $this->date;
	}
	
	protected function createDate() {
		return new ApproxDate();
	}

	public function setDate($date) {
		$this->date = $this->validateDate($date);
	}

	protected function validateDate($date) {
		if ( ! $date instanceof ApproxDate ) {
			$date = new ApproxDate ($date);
		}
	
		return $date;
	}

	public function getTime() {
		if ($this->time===NULL) {
			$this->time = $this->createTime();
		}
		return $this->time;
	}
	
	protected function createTime() {
		return new Time();
	}

	public function setTime($time) {
		$this->time = $this->validateTime($time);
	}

	protected function validateTime($time) {
		if ( ! $time instanceof Time ) {
			$time = new Time ($time);
		}
	
		return $time;
	}

	public function getTz() {
		if ($this->tz===NULL) {
			$this->tz = $this->createTz();
		}
		return $this->tz;
	}
	
	protected function createTz() {
		return new CodableValue();
	}

	public function setTz($tz) {
		$this->tz = $this->validateTz($tz);
	}

	protected function validateTz($tz) {
		if ( ! $tz instanceof CodableValue ) {
			$tz = new CodableValue ($tz);
		}
	
		return $tz;
	}
} // end class StructuredApproxDate
