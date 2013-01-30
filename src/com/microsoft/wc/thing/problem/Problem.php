<?php
namespace com\microsoft\wc\thing\problem;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.problem", prefix="")
 * })
 * @XmlEntity	(xml="problem")
 */
class Problem extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a medical problem (please see remarks).
	 * Note: We are in the process of merging the problem and condition types, andrecommend that applications use the condition type instead of the problem type. This thing type describes the medical problem of a person.
	 */

	const ID = '5E2C027E-3417-4CFC-BD10-5A6F2E91AD23';
	const NAME = 'Medical Problem';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="diagnosis")
	 */
	protected $diagnosis;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", collection="true", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\problem\Importance", name="importance")
	 */
	protected $importance;

	public function __construct($when = NULL, $diagnosis = NULL, $duration = NULL, $importance = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->diagnosis = ($diagnosis===NULL) ? NULL : $this->validateDiagnosis($diagnosis);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->importance = ($importance===NULL) ? NULL : $this->validateImportance($importance);
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

	public function getDiagnosis() {
		if ($this->diagnosis===NULL) {
			$this->diagnosis = $this->createDiagnosis();
		}
		return $this->diagnosis;
	}
	
	protected function createDiagnosis() {
		return array();
	}

	public function setDiagnosis($diagnosis) {
		$this->diagnosis = $this->validateDiagnosis($diagnosis);
	}

	protected function validateDiagnosis($diagnosis) {
		if ( ! is_array ($diagnosis) && ! is_null($diagnosis) ) {
			$diagnosis = array($diagnosis);
		}
		$count = count($diagnosis);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'diagnosis', 0));
		}
		foreach ($diagnosis as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'diagnosis', 'codable-value'));
			}
		}
	
		return $diagnosis;
	}

	public function addDiagnosis($diagnosis) {
		$this->diagnosis[] = $diagnosis;
	}

	public function getDuration() {
		if ($this->duration===NULL) {
			$this->duration = $this->createDuration();
		}
		return $this->duration;
	}
	
	protected function createDuration() {
		return array();
	}

	public function setDuration($duration) {
		$this->duration = $this->validateDuration($duration);
	}

	protected function validateDuration($duration) {
		if ( ! is_array ($duration) && ! is_null($duration) ) {
			$duration = array($duration);
		}
		$count = count($duration);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'duration', 0));
		}
		foreach ($duration as $entry) {
			if (!($entry instanceof DurationValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'duration', 'duration-value'));
			}
		}
	
		return $duration;
	}

	public function addDuration($duration) {
		$this->duration[] = $duration;
	}

	public function getImportance() {
		if ($this->importance===NULL) {
			$this->importance = $this->createImportance();
		}
		return $this->importance;
	}
	
	protected function createImportance() {
		return new \com\microsoft\wc\thing\problem\Importance();
	}

	public function setImportance($importance) {
		$this->importance = $this->validateImportance($importance);
	}

	protected function validateImportance($importance) {
		if ( ! $importance instanceof \com\microsoft\wc\thing\problem\Importance  && ! is_null($importance) ) {
			$importance = new \com\microsoft\wc\thing\problem\Importance ($importance);
		}
	
		return $importance;
	}
} // end class Problem
