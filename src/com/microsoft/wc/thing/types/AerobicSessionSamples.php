<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="aerobic-session-samples")
 */
class AerobicSessionSamples {
	/**
	 * AerobicSessionSamples
	 * Defines sample sets for an aerobic session.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="heartrate-samples")
	 */
	protected $heartrateSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="distance-samples")
	 */
	protected $distanceSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="position-samples")
	 */
	protected $positionSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="speed-samples")
	 */
	protected $speedSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="pace-samples")
	 */
	protected $paceSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="power-samples")
	 */
	protected $powerSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="torque-samples")
	 */
	protected $torqueSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="cadence-samples")
	 */
	protected $cadenceSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="temperature-samples")
	 */
	protected $temperatureSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="altitude-samples")
	 */
	protected $altitudeSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="air-pressure-samples")
	 */
	protected $airPressureSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="number-of-steps-samples")
	 */
	protected $numberOfStepsSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="number-of-aerobic-steps-samples")
	 */
	protected $numberOfAerobicStepsSamples;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SampleSet", name="aerobic-step-minutes-samples")
	 */
	protected $aerobicStepMinutesSamples;

	public function __construct($heartrateSamples = NULL, $distanceSamples = NULL, $positionSamples = NULL, $speedSamples = NULL, $paceSamples = NULL, $powerSamples = NULL, $torqueSamples = NULL, $cadenceSamples = NULL, $temperatureSamples = NULL, $altitudeSamples = NULL, $airPressureSamples = NULL, $numberOfStepsSamples = NULL, $numberOfAerobicStepsSamples = NULL, $aerobicStepMinutesSamples = NULL) {
		$this->heartrateSamples = ($heartrateSamples===NULL) ? NULL : $this->validateHeartrateSamples($heartrateSamples);
		$this->distanceSamples = ($distanceSamples===NULL) ? NULL : $this->validateDistanceSamples($distanceSamples);
		$this->positionSamples = ($positionSamples===NULL) ? NULL : $this->validatePositionSamples($positionSamples);
		$this->speedSamples = ($speedSamples===NULL) ? NULL : $this->validateSpeedSamples($speedSamples);
		$this->paceSamples = ($paceSamples===NULL) ? NULL : $this->validatePaceSamples($paceSamples);
		$this->powerSamples = ($powerSamples===NULL) ? NULL : $this->validatePowerSamples($powerSamples);
		$this->torqueSamples = ($torqueSamples===NULL) ? NULL : $this->validateTorqueSamples($torqueSamples);
		$this->cadenceSamples = ($cadenceSamples===NULL) ? NULL : $this->validateCadenceSamples($cadenceSamples);
		$this->temperatureSamples = ($temperatureSamples===NULL) ? NULL : $this->validateTemperatureSamples($temperatureSamples);
		$this->altitudeSamples = ($altitudeSamples===NULL) ? NULL : $this->validateAltitudeSamples($altitudeSamples);
		$this->airPressureSamples = ($airPressureSamples===NULL) ? NULL : $this->validateAirPressureSamples($airPressureSamples);
		$this->numberOfStepsSamples = ($numberOfStepsSamples===NULL) ? NULL : $this->validateNumberOfStepsSamples($numberOfStepsSamples);
		$this->numberOfAerobicStepsSamples = ($numberOfAerobicStepsSamples===NULL) ? NULL : $this->validateNumberOfAerobicStepsSamples($numberOfAerobicStepsSamples);
		$this->aerobicStepMinutesSamples = ($aerobicStepMinutesSamples===NULL) ? NULL : $this->validateAerobicStepMinutesSamples($aerobicStepMinutesSamples);
	}

	public function getHeartrateSamples() {
		if ($this->heartrateSamples===NULL) {
			$this->heartrateSamples = $this->createHeartrateSamples();
		}
		return $this->heartrateSamples;
	}
	
	protected function createHeartrateSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setHeartrateSamples($heartrateSamples) {
		$this->heartrateSamples = $this->validateHeartrateSamples($heartrateSamples);
	}

	protected function validateHeartrateSamples($heartrateSamples) {
		if ( ! $heartrateSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($heartrateSamples) ) {
			$heartrateSamples = new \com\microsoft\wc\thing\types\SampleSet ($heartrateSamples);
		}
	
		return $heartrateSamples;
	}

	public function getDistanceSamples() {
		if ($this->distanceSamples===NULL) {
			$this->distanceSamples = $this->createDistanceSamples();
		}
		return $this->distanceSamples;
	}
	
	protected function createDistanceSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setDistanceSamples($distanceSamples) {
		$this->distanceSamples = $this->validateDistanceSamples($distanceSamples);
	}

	protected function validateDistanceSamples($distanceSamples) {
		if ( ! $distanceSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($distanceSamples) ) {
			$distanceSamples = new \com\microsoft\wc\thing\types\SampleSet ($distanceSamples);
		}
	
		return $distanceSamples;
	}

	public function getPositionSamples() {
		if ($this->positionSamples===NULL) {
			$this->positionSamples = $this->createPositionSamples();
		}
		return $this->positionSamples;
	}
	
	protected function createPositionSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setPositionSamples($positionSamples) {
		$this->positionSamples = $this->validatePositionSamples($positionSamples);
	}

	protected function validatePositionSamples($positionSamples) {
		if ( ! $positionSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($positionSamples) ) {
			$positionSamples = new \com\microsoft\wc\thing\types\SampleSet ($positionSamples);
		}
	
		return $positionSamples;
	}

	public function getSpeedSamples() {
		if ($this->speedSamples===NULL) {
			$this->speedSamples = $this->createSpeedSamples();
		}
		return $this->speedSamples;
	}
	
	protected function createSpeedSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setSpeedSamples($speedSamples) {
		$this->speedSamples = $this->validateSpeedSamples($speedSamples);
	}

	protected function validateSpeedSamples($speedSamples) {
		if ( ! $speedSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($speedSamples) ) {
			$speedSamples = new \com\microsoft\wc\thing\types\SampleSet ($speedSamples);
		}
	
		return $speedSamples;
	}

	public function getPaceSamples() {
		if ($this->paceSamples===NULL) {
			$this->paceSamples = $this->createPaceSamples();
		}
		return $this->paceSamples;
	}
	
	protected function createPaceSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setPaceSamples($paceSamples) {
		$this->paceSamples = $this->validatePaceSamples($paceSamples);
	}

	protected function validatePaceSamples($paceSamples) {
		if ( ! $paceSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($paceSamples) ) {
			$paceSamples = new \com\microsoft\wc\thing\types\SampleSet ($paceSamples);
		}
	
		return $paceSamples;
	}

	public function getPowerSamples() {
		if ($this->powerSamples===NULL) {
			$this->powerSamples = $this->createPowerSamples();
		}
		return $this->powerSamples;
	}
	
	protected function createPowerSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setPowerSamples($powerSamples) {
		$this->powerSamples = $this->validatePowerSamples($powerSamples);
	}

	protected function validatePowerSamples($powerSamples) {
		if ( ! $powerSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($powerSamples) ) {
			$powerSamples = new \com\microsoft\wc\thing\types\SampleSet ($powerSamples);
		}
	
		return $powerSamples;
	}

	public function getTorqueSamples() {
		if ($this->torqueSamples===NULL) {
			$this->torqueSamples = $this->createTorqueSamples();
		}
		return $this->torqueSamples;
	}
	
	protected function createTorqueSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setTorqueSamples($torqueSamples) {
		$this->torqueSamples = $this->validateTorqueSamples($torqueSamples);
	}

	protected function validateTorqueSamples($torqueSamples) {
		if ( ! $torqueSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($torqueSamples) ) {
			$torqueSamples = new \com\microsoft\wc\thing\types\SampleSet ($torqueSamples);
		}
	
		return $torqueSamples;
	}

	public function getCadenceSamples() {
		if ($this->cadenceSamples===NULL) {
			$this->cadenceSamples = $this->createCadenceSamples();
		}
		return $this->cadenceSamples;
	}
	
	protected function createCadenceSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setCadenceSamples($cadenceSamples) {
		$this->cadenceSamples = $this->validateCadenceSamples($cadenceSamples);
	}

	protected function validateCadenceSamples($cadenceSamples) {
		if ( ! $cadenceSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($cadenceSamples) ) {
			$cadenceSamples = new \com\microsoft\wc\thing\types\SampleSet ($cadenceSamples);
		}
	
		return $cadenceSamples;
	}

	public function getTemperatureSamples() {
		if ($this->temperatureSamples===NULL) {
			$this->temperatureSamples = $this->createTemperatureSamples();
		}
		return $this->temperatureSamples;
	}
	
	protected function createTemperatureSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setTemperatureSamples($temperatureSamples) {
		$this->temperatureSamples = $this->validateTemperatureSamples($temperatureSamples);
	}

	protected function validateTemperatureSamples($temperatureSamples) {
		if ( ! $temperatureSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($temperatureSamples) ) {
			$temperatureSamples = new \com\microsoft\wc\thing\types\SampleSet ($temperatureSamples);
		}
	
		return $temperatureSamples;
	}

	public function getAltitudeSamples() {
		if ($this->altitudeSamples===NULL) {
			$this->altitudeSamples = $this->createAltitudeSamples();
		}
		return $this->altitudeSamples;
	}
	
	protected function createAltitudeSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setAltitudeSamples($altitudeSamples) {
		$this->altitudeSamples = $this->validateAltitudeSamples($altitudeSamples);
	}

	protected function validateAltitudeSamples($altitudeSamples) {
		if ( ! $altitudeSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($altitudeSamples) ) {
			$altitudeSamples = new \com\microsoft\wc\thing\types\SampleSet ($altitudeSamples);
		}
	
		return $altitudeSamples;
	}

	public function getAirPressureSamples() {
		if ($this->airPressureSamples===NULL) {
			$this->airPressureSamples = $this->createAirPressureSamples();
		}
		return $this->airPressureSamples;
	}
	
	protected function createAirPressureSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setAirPressureSamples($airPressureSamples) {
		$this->airPressureSamples = $this->validateAirPressureSamples($airPressureSamples);
	}

	protected function validateAirPressureSamples($airPressureSamples) {
		if ( ! $airPressureSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($airPressureSamples) ) {
			$airPressureSamples = new \com\microsoft\wc\thing\types\SampleSet ($airPressureSamples);
		}
	
		return $airPressureSamples;
	}

	public function getNumberOfStepsSamples() {
		if ($this->numberOfStepsSamples===NULL) {
			$this->numberOfStepsSamples = $this->createNumberOfStepsSamples();
		}
		return $this->numberOfStepsSamples;
	}
	
	protected function createNumberOfStepsSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setNumberOfStepsSamples($numberOfStepsSamples) {
		$this->numberOfStepsSamples = $this->validateNumberOfStepsSamples($numberOfStepsSamples);
	}

	protected function validateNumberOfStepsSamples($numberOfStepsSamples) {
		if ( ! $numberOfStepsSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($numberOfStepsSamples) ) {
			$numberOfStepsSamples = new \com\microsoft\wc\thing\types\SampleSet ($numberOfStepsSamples);
		}
	
		return $numberOfStepsSamples;
	}

	public function getNumberOfAerobicStepsSamples() {
		if ($this->numberOfAerobicStepsSamples===NULL) {
			$this->numberOfAerobicStepsSamples = $this->createNumberOfAerobicStepsSamples();
		}
		return $this->numberOfAerobicStepsSamples;
	}
	
	protected function createNumberOfAerobicStepsSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setNumberOfAerobicStepsSamples($numberOfAerobicStepsSamples) {
		$this->numberOfAerobicStepsSamples = $this->validateNumberOfAerobicStepsSamples($numberOfAerobicStepsSamples);
	}

	protected function validateNumberOfAerobicStepsSamples($numberOfAerobicStepsSamples) {
		if ( ! $numberOfAerobicStepsSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($numberOfAerobicStepsSamples) ) {
			$numberOfAerobicStepsSamples = new \com\microsoft\wc\thing\types\SampleSet ($numberOfAerobicStepsSamples);
		}
	
		return $numberOfAerobicStepsSamples;
	}

	public function getAerobicStepMinutesSamples() {
		if ($this->aerobicStepMinutesSamples===NULL) {
			$this->aerobicStepMinutesSamples = $this->createAerobicStepMinutesSamples();
		}
		return $this->aerobicStepMinutesSamples;
	}
	
	protected function createAerobicStepMinutesSamples() {
		return new \com\microsoft\wc\thing\types\SampleSet();
	}

	public function setAerobicStepMinutesSamples($aerobicStepMinutesSamples) {
		$this->aerobicStepMinutesSamples = $this->validateAerobicStepMinutesSamples($aerobicStepMinutesSamples);
	}

	protected function validateAerobicStepMinutesSamples($aerobicStepMinutesSamples) {
		if ( ! $aerobicStepMinutesSamples instanceof \com\microsoft\wc\thing\types\SampleSet  && ! is_null($aerobicStepMinutesSamples) ) {
			$aerobicStepMinutesSamples = new \com\microsoft\wc\thing\types\SampleSet ($aerobicStepMinutesSamples);
		}
	
		return $aerobicStepMinutesSamples;
	}
} // end class AerobicSessionSamples
