<?php
namespace com\microsoft\wc\thing\aerobic;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.aerobic", prefix="")
 * })
 * @XmlEntity	(xml="aerobic-session")
 */
class AerobicSession extends \com\microsoft\wc\thing\Thing {
	/**
	 * A single session of aerobic exercise.
	 * Note: Please use the new exercise type instead of this type.An aerobic session is a single instance of exercise likerunning, biking, etc.
	 */

	const ID = '90dbf000-fc55-4b92-b4a1-da45c36ad8bb';
	const NAME = 'Aerobic Exercise Session';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AerobicSession", name="session")
	 */
	protected $session;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AerobicSessionSamples", name="session-samples")
	 */
	protected $sessionSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AerobicLapSession", collection="true", name="lap-session")
	 */
	protected $lapSession;

	public function __construct($when = NULL, $session = NULL, $sessionSamples = NULL, $lapSession = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->session = ($session===NULL) ? NULL : $this->validateSession($session);
		$this->sessionSamples = ($sessionSamples===NULL) ? NULL : $this->validateSessionSamples($sessionSamples);
		$this->lapSession = ($lapSession===NULL) ? NULL : $this->validateLapSession($lapSession);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getSession() {
		if ($this->session===NULL) {
			$this->session = $this->createSession();
		}
		return $this->session;
	}
	
	protected function createSession() {
		return new \com\microsoft\wc\thing\aerobic\AerobicSession();
	}

	public function setSession($session) {
		$this->session = $this->validateSession($session);
	}

	protected function validateSession($session) {
		if ( ! $session instanceof \com\microsoft\wc\thing\aerobic\AerobicSession ) {
			$session = new \com\microsoft\wc\thing\aerobic\AerobicSession ($session);
		}
	
		return $session;
	}

	public function getSessionSamples() {
		if ($this->sessionSamples===NULL) {
			$this->sessionSamples = $this->createSessionSamples();
		}
		return $this->sessionSamples;
	}
	
	protected function createSessionSamples() {
		return new \com\microsoft\wc\thing\types\AerobicSessionSamples();
	}

	public function setSessionSamples($sessionSamples) {
		$this->sessionSamples = $this->validateSessionSamples($sessionSamples);
	}

	protected function validateSessionSamples($sessionSamples) {
		if ( ! $sessionSamples instanceof \com\microsoft\wc\thing\types\AerobicSessionSamples  && ! is_null($sessionSamples) ) {
			$sessionSamples = new \com\microsoft\wc\thing\types\AerobicSessionSamples ($sessionSamples);
		}
	
		return $sessionSamples;
	}

	public function getLapSession() {
		if ($this->lapSession===NULL) {
			$this->lapSession = $this->createLapSession();
		}
		return $this->lapSession;
	}
	
	protected function createLapSession() {
		return array();
	}

	public function setLapSession($lapSession) {
		$this->lapSession = $this->validateLapSession($lapSession);
	}

	protected function validateLapSession($lapSession) {
		if ( ! $lapSession instanceof \com\microsoft\wc\thing\types\AerobicLapSession  && ! is_null($lapSession) ) {
			$lapSession = new \com\microsoft\wc\thing\types\AerobicLapSession ($lapSession);
		}
		$count = count($lapSession);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'lapSession', 0));
		}
		foreach ($lapSession as $entry) {
			if (!($entry instanceof AerobicLapSession)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'lapSession', 'aerobic-lap-session'));
			}
		}
	
		return $lapSession;
	}

	public function addLapSession($lapSession) {
		$this->lapSession[] = $lapSession;
	}
} // end class AerobicSession
