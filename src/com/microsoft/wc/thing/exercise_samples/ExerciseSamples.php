<?php
namespace com\microsoft\wc\thing\exercise_samples;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.exercise-samples", prefix="")
 * })
 * @XmlEntity	(xml="exercise-samples")
 */
class ExerciseSamples extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Stores a set of samples related to an exercise.
	 * Examples: Heart rate samples, speed samples, position samples.Exercise samples are related to exercises through related items.
	 */

	const ID = 'e1f92d7f-9699-4483-8223-8442874ec6d9';
	const NAME = 'Exercise Samples';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="unit")
	 */
	protected $unit;

	/**
	 * @XmlText	(type="float", name="sampling-interval")
	 */
	protected $samplingInterval;

	public function __construct($when = NULL, $name = NULL, $unit = NULL, $samplingInterval = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->unit = ($unit===NULL) ? NULL : $this->validateUnit($unit);
		$this->samplingInterval = ($samplingInterval===NULL) ? NULL : $this->validateSamplingInterval($samplingInterval);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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

	public function getUnit($autoCreate = TRUE) {
		if ($this->unit===NULL && $autoCreate && ! isset($this->_overrides['unit']) ) {
			$this->unit = $this->createUnit();
		}
		return $this->unit;
	}
	
	protected function createUnit() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setUnit($unit) {
		$this->unit = $this->validateUnit($unit);
	}

	protected function validateUnit($unit) {
		if ( ! $unit instanceof \com\microsoft\wc\types\CodableValue ) {
			$unit = new \com\microsoft\wc\types\CodableValue ($unit);
		}
	
		return $unit;
	}

	public function getSamplingInterval($autoCreate = TRUE) {
		if ($this->samplingInterval===NULL && $autoCreate && ! isset($this->_overrides['samplingInterval']) ) {
			$this->samplingInterval = $this->createSamplingInterval();
		}
		return $this->samplingInterval;
	}
	
	protected function createSamplingInterval() {
		return 0.0;
	}

	public function setSamplingInterval($samplingInterval) {
		$this->samplingInterval = $this->validateSamplingInterval($samplingInterval);
	}

	protected function validateSamplingInterval($samplingInterval) {
		$isValid = FALSE;
		if ( is_float($samplingInterval) ) {
			$isValid = TRUE;
		}
		else if ( $samplingInterval == ($castVar = (float) $samplingInterval) ) {
			$isValid = TRUE;
			$samplingInterval = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'samplingInterval', 'float'));
		}
	
		return $samplingInterval;
	}
} // end class ExerciseSamples
