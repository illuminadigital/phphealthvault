<?php
namespace com\microsoft\wc\thing\aerobic_weekly;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.aerobic-weekly", prefix="")
 * })
 * @XmlEntity	(xml="aerobic-weekly")
 */
class AerobicWeekly extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines a weekly goal for aerobic exercise.
	 * The thing's effective_date metadata implies the date on whichthis goal was initiated, for purposes of graphing, etc.
	 */

	const ID = 'e4501363-fb95-4a11-bb60-da64e98048b5';
	const NAME = 'Weekly Aerobic Exercise Goal';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AerobicSession", name="session")
	 */
	protected $session;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="recurrence")
	 */
	protected $recurrence;

	public function __construct($session = NULL, $recurrence = NULL) {
		$this->session = ($session===NULL) ? NULL : $this->validateSession($session);
		$this->recurrence = ($recurrence===NULL) ? NULL : $this->validateRecurrence($recurrence);
	}

	public function getSession($autoCreate = TRUE) {
		if ($this->session===NULL && $autoCreate && ! isset($this->_overrides['session']) ) {
			$this->session = $this->createSession();
		}
		return $this->session;
	}
	
	protected function createSession() {
		return new \com\microsoft\wc\thing\types\AerobicSession();
	}

	public function setSession($session) {
		$this->session = $this->validateSession($session);
	}

	protected function validateSession($session) {
		if ( ! $session instanceof \com\microsoft\wc\thing\types\AerobicSession ) {
			$session = new \com\microsoft\wc\thing\types\AerobicSession ($session);
		}
	
		return $session;
	}

	public function getRecurrence($autoCreate = TRUE) {
		if ($this->recurrence===NULL && $autoCreate && ! isset($this->_overrides['recurrence']) ) {
			$this->recurrence = $this->createRecurrence();
		}
		return $this->recurrence;
	}
	
	protected function createRecurrence() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setRecurrence($recurrence) {
		$this->recurrence = $this->validateRecurrence($recurrence);
	}

	protected function validateRecurrence($recurrence) {
		if ( ! $recurrence instanceof \com\microsoft\wc\thing\types\PositiveInt ) {
			$recurrence = new \com\microsoft\wc\thing\types\PositiveInt ($recurrence);
		}
	
		return $recurrence;
	}
} // end class AerobicWeekly
