<?php
namespace com\microsoft\wc\thing\sjpm;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.sjpm", prefix="")
 * })
 * @XmlEntity	(xml="sleep-pm")
 */
class SleepPm extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines an evening sleep journal.
	 * The data items in this schema are adapted from NIHpublication #06-5271, November 2005, "Your Guide toHealthy Sleep", ISBN 1-933236-05-1.
	 */

	const ID = '031F5706-7F1A-11DB-AD56-7BD355D89593';
	const NAME = 'Sleep Related Activity';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Time", collection="true", name="caffeine")
	 */
	protected $caffeine;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Time", collection="true", name="alcohol")
	 */
	protected $alcohol;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\sjpm\Activity", collection="true", name="nap")
	 */
	protected $nap;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\sjpm\Activity", collection="true", name="exercise")
	 */
	protected $exercise;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\sjpm\Sleepiness", name="sleepiness")
	 */
	protected $sleepiness;

	public function __construct($when = NULL, $caffeine = NULL, $alcohol = NULL, $nap = NULL, $exercise = NULL, $sleepiness = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->caffeine = ($caffeine===NULL) ? NULL : $this->validateCaffeine($caffeine);
		$this->alcohol = ($alcohol===NULL) ? NULL : $this->validateAlcohol($alcohol);
		$this->nap = ($nap===NULL) ? NULL : $this->validateNap($nap);
		$this->exercise = ($exercise===NULL) ? NULL : $this->validateExercise($exercise);
		$this->sleepiness = ($sleepiness===NULL) ? NULL : $this->validateSleepiness($sleepiness);
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

	public function getCaffeine() {
		if ($this->caffeine===NULL) {
			$this->caffeine = $this->createCaffeine();
		}
		return $this->caffeine;
	}
	
	protected function createCaffeine() {
		return array();
	}

	public function setCaffeine($caffeine) {
		$this->caffeine = $this->validateCaffeine($caffeine);
	}

	protected function validateCaffeine($caffeine) {
		if ( ! is_array ($caffeine) && ! is_null($caffeine) ) {
			$caffeine = array($caffeine);
		}
		$count = count($caffeine);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'caffeine', 0));
		}
		foreach ($caffeine as $entry) {
			if (!($entry instanceof Time)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'caffeine', 'time'));
			}
		}
	
		return $caffeine;
	}

	public function addCaffeine($caffeine) {
		$this->caffeine[] = $caffeine;
	}

	public function getAlcohol() {
		if ($this->alcohol===NULL) {
			$this->alcohol = $this->createAlcohol();
		}
		return $this->alcohol;
	}
	
	protected function createAlcohol() {
		return array();
	}

	public function setAlcohol($alcohol) {
		$this->alcohol = $this->validateAlcohol($alcohol);
	}

	protected function validateAlcohol($alcohol) {
		if ( ! is_array ($alcohol) && ! is_null($alcohol) ) {
			$alcohol = array($alcohol);
		}
		$count = count($alcohol);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'alcohol', 0));
		}
		foreach ($alcohol as $entry) {
			if (!($entry instanceof Time)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'alcohol', 'time'));
			}
		}
	
		return $alcohol;
	}

	public function addAlcohol($alcohol) {
		$this->alcohol[] = $alcohol;
	}

	public function getNap() {
		if ($this->nap===NULL) {
			$this->nap = $this->createNap();
		}
		return $this->nap;
	}
	
	protected function createNap() {
		return array();
	}

	public function setNap($nap) {
		$this->nap = $this->validateNap($nap);
	}

	protected function validateNap($nap) {
		if ( ! is_array ($nap) && ! is_null($nap) ) {
			$nap = array($nap);
		}
		$count = count($nap);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'nap', 0));
		}
		foreach ($nap as $entry) {
			if (!($entry instanceof Activity)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'nap', 'Activity'));
			}
		}
	
		return $nap;
	}

	public function addNap($nap) {
		$this->nap[] = $nap;
	}

	public function getExercise() {
		if ($this->exercise===NULL) {
			$this->exercise = $this->createExercise();
		}
		return $this->exercise;
	}
	
	protected function createExercise() {
		return array();
	}

	public function setExercise($exercise) {
		$this->exercise = $this->validateExercise($exercise);
	}

	protected function validateExercise($exercise) {
		if ( ! is_array ($exercise) && ! is_null($exercise) ) {
			$exercise = array($exercise);
		}
		$count = count($exercise);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'exercise', 0));
		}
		foreach ($exercise as $entry) {
			if (!($entry instanceof Activity)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'exercise', 'Activity'));
			}
		}
	
		return $exercise;
	}

	public function addExercise($exercise) {
		$this->exercise[] = $exercise;
	}

	public function getSleepiness() {
		if ($this->sleepiness===NULL) {
			$this->sleepiness = $this->createSleepiness();
		}
		return $this->sleepiness;
	}
	
	protected function createSleepiness() {
		return new \com\microsoft\wc\thing\sjpm\Sleepiness();
	}

	public function setSleepiness($sleepiness) {
		$this->sleepiness = $this->validateSleepiness($sleepiness);
	}

	protected function validateSleepiness($sleepiness) {
		if ( ! $sleepiness instanceof \com\microsoft\wc\thing\sjpm\Sleepiness ) {
			$sleepiness = new \com\microsoft\wc\thing\sjpm\Sleepiness ($sleepiness);
		}
	
		return $sleepiness;
	}
} // end class SleepPm
