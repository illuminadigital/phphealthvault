<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="aerobic-lap-session")
 */
class AerobicLapSession {
	/**
	 * LapSession
	 * One stage of the aerobic session.
	 * For example, one circuit of a running track or one length of a swimming pool.Usually indicated by the person pressing the stopwatch during exercise.This may occur multiple times in a session.
	 */

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="seconds-into-session")
	 */
	protected $secondsIntoSession;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AerobicSession", name="lap-session")
	 */
	protected $lapSession;

	public function __construct($name = NULL, $secondsIntoSession = NULL, $lapSession = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->secondsIntoSession = ($secondsIntoSession===NULL) ? NULL : $this->validateSecondsIntoSession($secondsIntoSession);
		$this->lapSession = ($lapSession===NULL) ? NULL : $this->validateLapSession($lapSession);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! is_string($name) && ! is_null($name) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getSecondsIntoSession() {
		if ($this->secondsIntoSession===NULL) {
			$this->secondsIntoSession = $this->createSecondsIntoSession();
		}
		return $this->secondsIntoSession;
	}
	
	protected function createSecondsIntoSession() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setSecondsIntoSession($secondsIntoSession) {
		$this->secondsIntoSession = $this->validateSecondsIntoSession($secondsIntoSession);
	}

	protected function validateSecondsIntoSession($secondsIntoSession) {
		if ( ! $secondsIntoSession instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($secondsIntoSession) ) {
			$secondsIntoSession = new \com\microsoft\wc\thing\types\NonNegativeDouble ($secondsIntoSession);
		}
	
		return $secondsIntoSession;
	}

	public function getLapSession() {
		if ($this->lapSession===NULL) {
			$this->lapSession = $this->createLapSession();
		}
		return $this->lapSession;
	}
	
	protected function createLapSession() {
		return new \com\microsoft\wc\thing\types\AerobicSession();
	}

	public function setLapSession($lapSession) {
		$this->lapSession = $this->validateLapSession($lapSession);
	}

	protected function validateLapSession($lapSession) {
		if ( ! $lapSession instanceof \com\microsoft\wc\thing\types\AerobicSession  && ! is_null($lapSession) ) {
			$lapSession = new \com\microsoft\wc\thing\types\AerobicSession ($lapSession);
		}
	
		return $lapSession;
	}
} // end class AerobicLapSession
