<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="aerobic-session")
 */
class AerobicSession {
	/**
	 * AerobicSession
	 * Defines a lap within a single aerobic session.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="mode")
	 */
	protected $mode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="distance")
	 */
	protected $distance;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="minutes")
	 */
	protected $minutes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\OneToFive", name="intensity")
	 */
	protected $intensity;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="peak-heartrate")
	 */
	protected $peakHeartrate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="avg-heartrate")
	 */
	protected $avgHeartrate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="min-heartrate")
	 */
	protected $minHeartrate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="energy")
	 */
	protected $energy;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="energy-from-fat")
	 */
	protected $energyFromFat;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SpeedValue", name="peak-speed")
	 */
	protected $peakSpeed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SpeedValue", name="avg-speed")
	 */
	protected $avgSpeed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\SpeedValue", name="min-speed")
	 */
	protected $minSpeed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PaceValue", name="peak-pace")
	 */
	protected $peakPace;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PaceValue", name="avg-pace")
	 */
	protected $avgPace;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PaceValue", name="min-pace")
	 */
	protected $minPace;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PowerValue", name="peak-power")
	 */
	protected $peakPower;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PowerValue", name="avg-power")
	 */
	protected $avgPower;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PowerValue", name="min-power")
	 */
	protected $minPower;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\TorqueValue", name="peak-torque")
	 */
	protected $peakTorque;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\TorqueValue", name="avg-torque")
	 */
	protected $avgTorque;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\TorqueValue", name="min-torque")
	 */
	protected $minTorque;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="left-right-balance")
	 */
	protected $leftRightBalance;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="peak-cadence")
	 */
	protected $peakCadence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="avg-cadence")
	 */
	protected $avgCadence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="min-cadence")
	 */
	protected $minCadence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\TemperatureValue", name="peak-temperature")
	 */
	protected $peakTemperature;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\TemperatureValue", name="avg-temperature")
	 */
	protected $avgTemperature;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\TemperatureValue", name="min-temperature")
	 */
	protected $minTemperature;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AltitudeValue", name="peak-altitude")
	 */
	protected $peakAltitude;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AltitudeValue", name="avg-altitude")
	 */
	protected $avgAltitude;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\AltitudeValue", name="min-altitude")
	 */
	protected $minAltitude;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="elevation-gain")
	 */
	protected $elevationGain;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="elevation-loss")
	 */
	protected $elevationLoss;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="number-of-steps")
	 */
	protected $numberOfSteps;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="number-of-aerobic-steps")
	 */
	protected $numberOfAerobicSteps;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="aerobic-step-minutes")
	 */
	protected $aerobicStepMinutes;

	public function __construct($mode = NULL, $distance = NULL, $minutes = NULL, $intensity = NULL, $peakHeartrate = NULL, $avgHeartrate = NULL, $minHeartrate = NULL, $energy = NULL, $energyFromFat = NULL, $peakSpeed = NULL, $avgSpeed = NULL, $minSpeed = NULL, $peakPace = NULL, $avgPace = NULL, $minPace = NULL, $peakPower = NULL, $avgPower = NULL, $minPower = NULL, $peakTorque = NULL, $avgTorque = NULL, $minTorque = NULL, $leftRightBalance = NULL, $peakCadence = NULL, $avgCadence = NULL, $minCadence = NULL, $peakTemperature = NULL, $avgTemperature = NULL, $minTemperature = NULL, $peakAltitude = NULL, $avgAltitude = NULL, $minAltitude = NULL, $elevationGain = NULL, $elevationLoss = NULL, $numberOfSteps = NULL, $numberOfAerobicSteps = NULL, $aerobicStepMinutes = NULL) {
		$this->mode = ($mode===NULL) ? NULL : $this->validateMode($mode);
		$this->distance = ($distance===NULL) ? NULL : $this->validateDistance($distance);
		$this->minutes = ($minutes===NULL) ? NULL : $this->validateMinutes($minutes);
		$this->intensity = ($intensity===NULL) ? NULL : $this->validateIntensity($intensity);
		$this->peakHeartrate = ($peakHeartrate===NULL) ? NULL : $this->validatePeakHeartrate($peakHeartrate);
		$this->avgHeartrate = ($avgHeartrate===NULL) ? NULL : $this->validateAvgHeartrate($avgHeartrate);
		$this->minHeartrate = ($minHeartrate===NULL) ? NULL : $this->validateMinHeartrate($minHeartrate);
		$this->energy = ($energy===NULL) ? NULL : $this->validateEnergy($energy);
		$this->energyFromFat = ($energyFromFat===NULL) ? NULL : $this->validateEnergyFromFat($energyFromFat);
		$this->peakSpeed = ($peakSpeed===NULL) ? NULL : $this->validatePeakSpeed($peakSpeed);
		$this->avgSpeed = ($avgSpeed===NULL) ? NULL : $this->validateAvgSpeed($avgSpeed);
		$this->minSpeed = ($minSpeed===NULL) ? NULL : $this->validateMinSpeed($minSpeed);
		$this->peakPace = ($peakPace===NULL) ? NULL : $this->validatePeakPace($peakPace);
		$this->avgPace = ($avgPace===NULL) ? NULL : $this->validateAvgPace($avgPace);
		$this->minPace = ($minPace===NULL) ? NULL : $this->validateMinPace($minPace);
		$this->peakPower = ($peakPower===NULL) ? NULL : $this->validatePeakPower($peakPower);
		$this->avgPower = ($avgPower===NULL) ? NULL : $this->validateAvgPower($avgPower);
		$this->minPower = ($minPower===NULL) ? NULL : $this->validateMinPower($minPower);
		$this->peakTorque = ($peakTorque===NULL) ? NULL : $this->validatePeakTorque($peakTorque);
		$this->avgTorque = ($avgTorque===NULL) ? NULL : $this->validateAvgTorque($avgTorque);
		$this->minTorque = ($minTorque===NULL) ? NULL : $this->validateMinTorque($minTorque);
		$this->leftRightBalance = ($leftRightBalance===NULL) ? NULL : $this->validateLeftRightBalance($leftRightBalance);
		$this->peakCadence = ($peakCadence===NULL) ? NULL : $this->validatePeakCadence($peakCadence);
		$this->avgCadence = ($avgCadence===NULL) ? NULL : $this->validateAvgCadence($avgCadence);
		$this->minCadence = ($minCadence===NULL) ? NULL : $this->validateMinCadence($minCadence);
		$this->peakTemperature = ($peakTemperature===NULL) ? NULL : $this->validatePeakTemperature($peakTemperature);
		$this->avgTemperature = ($avgTemperature===NULL) ? NULL : $this->validateAvgTemperature($avgTemperature);
		$this->minTemperature = ($minTemperature===NULL) ? NULL : $this->validateMinTemperature($minTemperature);
		$this->peakAltitude = ($peakAltitude===NULL) ? NULL : $this->validatePeakAltitude($peakAltitude);
		$this->avgAltitude = ($avgAltitude===NULL) ? NULL : $this->validateAvgAltitude($avgAltitude);
		$this->minAltitude = ($minAltitude===NULL) ? NULL : $this->validateMinAltitude($minAltitude);
		$this->elevationGain = ($elevationGain===NULL) ? NULL : $this->validateElevationGain($elevationGain);
		$this->elevationLoss = ($elevationLoss===NULL) ? NULL : $this->validateElevationLoss($elevationLoss);
		$this->numberOfSteps = ($numberOfSteps===NULL) ? NULL : $this->validateNumberOfSteps($numberOfSteps);
		$this->numberOfAerobicSteps = ($numberOfAerobicSteps===NULL) ? NULL : $this->validateNumberOfAerobicSteps($numberOfAerobicSteps);
		$this->aerobicStepMinutes = ($aerobicStepMinutes===NULL) ? NULL : $this->validateAerobicStepMinutes($aerobicStepMinutes);
	}

	public function getMode($autoCreate = TRUE) {
		if ($this->mode===NULL && $autoCreate && ! isset($this->_overrides['mode']) ) {
			$this->mode = $this->createMode();
		}
		return $this->mode;
	}
	
	protected function createMode() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMode($mode) {
		$this->mode = $this->validateMode($mode);
	}

	protected function validateMode($mode) {
		if ( $mode === FALSE ) {
			$this->_overrides['mode'] = TRUE;
			return NULL;
		}

		if ( ! $mode instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($mode) ) {
			$mode = new \com\microsoft\wc\types\CodableValue ($mode);
		}

		unset ($this->_overrides['mode']);
	
		return $mode;
	}

	public function getDistance($autoCreate = TRUE) {
		if ($this->distance===NULL && $autoCreate && ! isset($this->_overrides['distance']) ) {
			$this->distance = $this->createDistance();
		}
		return $this->distance;
	}
	
	protected function createDistance() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setDistance($distance) {
		$this->distance = $this->validateDistance($distance);
	}

	protected function validateDistance($distance) {
		if ( $distance === FALSE ) {
			$this->_overrides['distance'] = TRUE;
			return NULL;
		}

		if ( ! $distance instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($distance) ) {
			$distance = new \com\microsoft\wc\thing\types\LengthValue ($distance);
		}

		unset ($this->_overrides['distance']);
	
		return $distance;
	}

	public function getMinutes($autoCreate = TRUE) {
		if ($this->minutes===NULL && $autoCreate && ! isset($this->_overrides['minutes']) ) {
			$this->minutes = $this->createMinutes();
		}
		return $this->minutes;
	}
	
	protected function createMinutes() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setMinutes($minutes) {
		$this->minutes = $this->validateMinutes($minutes);
	}

	protected function validateMinutes($minutes) {
		if ( $minutes === FALSE ) {
			$this->_overrides['minutes'] = TRUE;
			return NULL;
		}

		if ( ! $minutes instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($minutes) ) {
			$minutes = new \com\microsoft\wc\thing\types\PositiveDouble ($minutes);
		}

		unset ($this->_overrides['minutes']);
	
		return $minutes;
	}

	public function getIntensity($autoCreate = TRUE) {
		if ($this->intensity===NULL && $autoCreate && ! isset($this->_overrides['intensity']) ) {
			$this->intensity = $this->createIntensity();
		}
		return $this->intensity;
	}
	
	protected function createIntensity() {
		return new \com\microsoft\wc\thing\types\OneToFive();
	}

	public function setIntensity($intensity) {
		$this->intensity = $this->validateIntensity($intensity);
	}

	protected function validateIntensity($intensity) {
		if ( $intensity === FALSE ) {
			$this->_overrides['intensity'] = TRUE;
			return NULL;
		}

		if ( ! $intensity instanceof \com\microsoft\wc\thing\types\OneToFive  && ! is_null($intensity) ) {
			$intensity = new \com\microsoft\wc\thing\types\OneToFive ($intensity);
		}

		unset ($this->_overrides['intensity']);
	
		return $intensity;
	}

	public function getPeakHeartrate($autoCreate = TRUE) {
		if ($this->peakHeartrate===NULL && $autoCreate && ! isset($this->_overrides['peakHeartrate']) ) {
			$this->peakHeartrate = $this->createPeakHeartrate();
		}
		return $this->peakHeartrate;
	}
	
	protected function createPeakHeartrate() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setPeakHeartrate($peakHeartrate) {
		$this->peakHeartrate = $this->validatePeakHeartrate($peakHeartrate);
	}

	protected function validatePeakHeartrate($peakHeartrate) {
		if ( $peakHeartrate === FALSE ) {
			$this->_overrides['peakHeartrate'] = TRUE;
			return NULL;
		}

		if ( ! $peakHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($peakHeartrate) ) {
			$peakHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($peakHeartrate);
		}

		unset ($this->_overrides['peakHeartrate']);
	
		return $peakHeartrate;
	}

	public function getAvgHeartrate($autoCreate = TRUE) {
		if ($this->avgHeartrate===NULL && $autoCreate && ! isset($this->_overrides['avgHeartrate']) ) {
			$this->avgHeartrate = $this->createAvgHeartrate();
		}
		return $this->avgHeartrate;
	}
	
	protected function createAvgHeartrate() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setAvgHeartrate($avgHeartrate) {
		$this->avgHeartrate = $this->validateAvgHeartrate($avgHeartrate);
	}

	protected function validateAvgHeartrate($avgHeartrate) {
		if ( $avgHeartrate === FALSE ) {
			$this->_overrides['avgHeartrate'] = TRUE;
			return NULL;
		}

		if ( ! $avgHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($avgHeartrate) ) {
			$avgHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($avgHeartrate);
		}

		unset ($this->_overrides['avgHeartrate']);
	
		return $avgHeartrate;
	}

	public function getMinHeartrate($autoCreate = TRUE) {
		if ($this->minHeartrate===NULL && $autoCreate && ! isset($this->_overrides['minHeartrate']) ) {
			$this->minHeartrate = $this->createMinHeartrate();
		}
		return $this->minHeartrate;
	}
	
	protected function createMinHeartrate() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setMinHeartrate($minHeartrate) {
		$this->minHeartrate = $this->validateMinHeartrate($minHeartrate);
	}

	protected function validateMinHeartrate($minHeartrate) {
		if ( $minHeartrate === FALSE ) {
			$this->_overrides['minHeartrate'] = TRUE;
			return NULL;
		}

		if ( ! $minHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($minHeartrate) ) {
			$minHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($minHeartrate);
		}

		unset ($this->_overrides['minHeartrate']);
	
		return $minHeartrate;
	}

	public function getEnergy($autoCreate = TRUE) {
		if ($this->energy===NULL && $autoCreate && ! isset($this->_overrides['energy']) ) {
			$this->energy = $this->createEnergy();
		}
		return $this->energy;
	}
	
	protected function createEnergy() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setEnergy($energy) {
		$this->energy = $this->validateEnergy($energy);
	}

	protected function validateEnergy($energy) {
		if ( $energy === FALSE ) {
			$this->_overrides['energy'] = TRUE;
			return NULL;
		}

		if ( ! $energy instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($energy) ) {
			$energy = new \com\microsoft\wc\thing\types\PositiveDouble ($energy);
		}

		unset ($this->_overrides['energy']);
	
		return $energy;
	}

	public function getEnergyFromFat($autoCreate = TRUE) {
		if ($this->energyFromFat===NULL && $autoCreate && ! isset($this->_overrides['energyFromFat']) ) {
			$this->energyFromFat = $this->createEnergyFromFat();
		}
		return $this->energyFromFat;
	}
	
	protected function createEnergyFromFat() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setEnergyFromFat($energyFromFat) {
		$this->energyFromFat = $this->validateEnergyFromFat($energyFromFat);
	}

	protected function validateEnergyFromFat($energyFromFat) {
		if ( $energyFromFat === FALSE ) {
			$this->_overrides['energyFromFat'] = TRUE;
			return NULL;
		}

		if ( ! $energyFromFat instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($energyFromFat) ) {
			$energyFromFat = new \com\microsoft\wc\thing\types\PositiveDouble ($energyFromFat);
		}

		unset ($this->_overrides['energyFromFat']);
	
		return $energyFromFat;
	}

	public function getPeakSpeed($autoCreate = TRUE) {
		if ($this->peakSpeed===NULL && $autoCreate && ! isset($this->_overrides['peakSpeed']) ) {
			$this->peakSpeed = $this->createPeakSpeed();
		}
		return $this->peakSpeed;
	}
	
	protected function createPeakSpeed() {
		return new \com\microsoft\wc\thing\types\SpeedValue();
	}

	public function setPeakSpeed($peakSpeed) {
		$this->peakSpeed = $this->validatePeakSpeed($peakSpeed);
	}

	protected function validatePeakSpeed($peakSpeed) {
		if ( $peakSpeed === FALSE ) {
			$this->_overrides['peakSpeed'] = TRUE;
			return NULL;
		}

		if ( ! $peakSpeed instanceof \com\microsoft\wc\thing\types\SpeedValue  && ! is_null($peakSpeed) ) {
			$peakSpeed = new \com\microsoft\wc\thing\types\SpeedValue ($peakSpeed);
		}

		unset ($this->_overrides['peakSpeed']);
	
		return $peakSpeed;
	}

	public function getAvgSpeed($autoCreate = TRUE) {
		if ($this->avgSpeed===NULL && $autoCreate && ! isset($this->_overrides['avgSpeed']) ) {
			$this->avgSpeed = $this->createAvgSpeed();
		}
		return $this->avgSpeed;
	}
	
	protected function createAvgSpeed() {
		return new \com\microsoft\wc\thing\types\SpeedValue();
	}

	public function setAvgSpeed($avgSpeed) {
		$this->avgSpeed = $this->validateAvgSpeed($avgSpeed);
	}

	protected function validateAvgSpeed($avgSpeed) {
		if ( $avgSpeed === FALSE ) {
			$this->_overrides['avgSpeed'] = TRUE;
			return NULL;
		}

		if ( ! $avgSpeed instanceof \com\microsoft\wc\thing\types\SpeedValue  && ! is_null($avgSpeed) ) {
			$avgSpeed = new \com\microsoft\wc\thing\types\SpeedValue ($avgSpeed);
		}

		unset ($this->_overrides['avgSpeed']);
	
		return $avgSpeed;
	}

	public function getMinSpeed($autoCreate = TRUE) {
		if ($this->minSpeed===NULL && $autoCreate && ! isset($this->_overrides['minSpeed']) ) {
			$this->minSpeed = $this->createMinSpeed();
		}
		return $this->minSpeed;
	}
	
	protected function createMinSpeed() {
		return new \com\microsoft\wc\thing\types\SpeedValue();
	}

	public function setMinSpeed($minSpeed) {
		$this->minSpeed = $this->validateMinSpeed($minSpeed);
	}

	protected function validateMinSpeed($minSpeed) {
		if ( $minSpeed === FALSE ) {
			$this->_overrides['minSpeed'] = TRUE;
			return NULL;
		}

		if ( ! $minSpeed instanceof \com\microsoft\wc\thing\types\SpeedValue  && ! is_null($minSpeed) ) {
			$minSpeed = new \com\microsoft\wc\thing\types\SpeedValue ($minSpeed);
		}

		unset ($this->_overrides['minSpeed']);
	
		return $minSpeed;
	}

	public function getPeakPace($autoCreate = TRUE) {
		if ($this->peakPace===NULL && $autoCreate && ! isset($this->_overrides['peakPace']) ) {
			$this->peakPace = $this->createPeakPace();
		}
		return $this->peakPace;
	}
	
	protected function createPeakPace() {
		return new \com\microsoft\wc\thing\types\PaceValue();
	}

	public function setPeakPace($peakPace) {
		$this->peakPace = $this->validatePeakPace($peakPace);
	}

	protected function validatePeakPace($peakPace) {
		if ( $peakPace === FALSE ) {
			$this->_overrides['peakPace'] = TRUE;
			return NULL;
		}

		if ( ! $peakPace instanceof \com\microsoft\wc\thing\types\PaceValue  && ! is_null($peakPace) ) {
			$peakPace = new \com\microsoft\wc\thing\types\PaceValue ($peakPace);
		}

		unset ($this->_overrides['peakPace']);
	
		return $peakPace;
	}

	public function getAvgPace($autoCreate = TRUE) {
		if ($this->avgPace===NULL && $autoCreate && ! isset($this->_overrides['avgPace']) ) {
			$this->avgPace = $this->createAvgPace();
		}
		return $this->avgPace;
	}
	
	protected function createAvgPace() {
		return new \com\microsoft\wc\thing\types\PaceValue();
	}

	public function setAvgPace($avgPace) {
		$this->avgPace = $this->validateAvgPace($avgPace);
	}

	protected function validateAvgPace($avgPace) {
		if ( $avgPace === FALSE ) {
			$this->_overrides['avgPace'] = TRUE;
			return NULL;
		}

		if ( ! $avgPace instanceof \com\microsoft\wc\thing\types\PaceValue  && ! is_null($avgPace) ) {
			$avgPace = new \com\microsoft\wc\thing\types\PaceValue ($avgPace);
		}

		unset ($this->_overrides['avgPace']);
	
		return $avgPace;
	}

	public function getMinPace($autoCreate = TRUE) {
		if ($this->minPace===NULL && $autoCreate && ! isset($this->_overrides['minPace']) ) {
			$this->minPace = $this->createMinPace();
		}
		return $this->minPace;
	}
	
	protected function createMinPace() {
		return new \com\microsoft\wc\thing\types\PaceValue();
	}

	public function setMinPace($minPace) {
		$this->minPace = $this->validateMinPace($minPace);
	}

	protected function validateMinPace($minPace) {
		if ( $minPace === FALSE ) {
			$this->_overrides['minPace'] = TRUE;
			return NULL;
		}

		if ( ! $minPace instanceof \com\microsoft\wc\thing\types\PaceValue  && ! is_null($minPace) ) {
			$minPace = new \com\microsoft\wc\thing\types\PaceValue ($minPace);
		}

		unset ($this->_overrides['minPace']);
	
		return $minPace;
	}

	public function getPeakPower($autoCreate = TRUE) {
		if ($this->peakPower===NULL && $autoCreate && ! isset($this->_overrides['peakPower']) ) {
			$this->peakPower = $this->createPeakPower();
		}
		return $this->peakPower;
	}
	
	protected function createPeakPower() {
		return new \com\microsoft\wc\thing\types\PowerValue();
	}

	public function setPeakPower($peakPower) {
		$this->peakPower = $this->validatePeakPower($peakPower);
	}

	protected function validatePeakPower($peakPower) {
		if ( $peakPower === FALSE ) {
			$this->_overrides['peakPower'] = TRUE;
			return NULL;
		}

		if ( ! $peakPower instanceof \com\microsoft\wc\thing\types\PowerValue  && ! is_null($peakPower) ) {
			$peakPower = new \com\microsoft\wc\thing\types\PowerValue ($peakPower);
		}

		unset ($this->_overrides['peakPower']);
	
		return $peakPower;
	}

	public function getAvgPower($autoCreate = TRUE) {
		if ($this->avgPower===NULL && $autoCreate && ! isset($this->_overrides['avgPower']) ) {
			$this->avgPower = $this->createAvgPower();
		}
		return $this->avgPower;
	}
	
	protected function createAvgPower() {
		return new \com\microsoft\wc\thing\types\PowerValue();
	}

	public function setAvgPower($avgPower) {
		$this->avgPower = $this->validateAvgPower($avgPower);
	}

	protected function validateAvgPower($avgPower) {
		if ( $avgPower === FALSE ) {
			$this->_overrides['avgPower'] = TRUE;
			return NULL;
		}

		if ( ! $avgPower instanceof \com\microsoft\wc\thing\types\PowerValue  && ! is_null($avgPower) ) {
			$avgPower = new \com\microsoft\wc\thing\types\PowerValue ($avgPower);
		}

		unset ($this->_overrides['avgPower']);
	
		return $avgPower;
	}

	public function getMinPower($autoCreate = TRUE) {
		if ($this->minPower===NULL && $autoCreate && ! isset($this->_overrides['minPower']) ) {
			$this->minPower = $this->createMinPower();
		}
		return $this->minPower;
	}
	
	protected function createMinPower() {
		return new \com\microsoft\wc\thing\types\PowerValue();
	}

	public function setMinPower($minPower) {
		$this->minPower = $this->validateMinPower($minPower);
	}

	protected function validateMinPower($minPower) {
		if ( $minPower === FALSE ) {
			$this->_overrides['minPower'] = TRUE;
			return NULL;
		}

		if ( ! $minPower instanceof \com\microsoft\wc\thing\types\PowerValue  && ! is_null($minPower) ) {
			$minPower = new \com\microsoft\wc\thing\types\PowerValue ($minPower);
		}

		unset ($this->_overrides['minPower']);
	
		return $minPower;
	}

	public function getPeakTorque($autoCreate = TRUE) {
		if ($this->peakTorque===NULL && $autoCreate && ! isset($this->_overrides['peakTorque']) ) {
			$this->peakTorque = $this->createPeakTorque();
		}
		return $this->peakTorque;
	}
	
	protected function createPeakTorque() {
		return new \com\microsoft\wc\thing\types\TorqueValue();
	}

	public function setPeakTorque($peakTorque) {
		$this->peakTorque = $this->validatePeakTorque($peakTorque);
	}

	protected function validatePeakTorque($peakTorque) {
		if ( $peakTorque === FALSE ) {
			$this->_overrides['peakTorque'] = TRUE;
			return NULL;
		}

		if ( ! $peakTorque instanceof \com\microsoft\wc\thing\types\TorqueValue  && ! is_null($peakTorque) ) {
			$peakTorque = new \com\microsoft\wc\thing\types\TorqueValue ($peakTorque);
		}

		unset ($this->_overrides['peakTorque']);
	
		return $peakTorque;
	}

	public function getAvgTorque($autoCreate = TRUE) {
		if ($this->avgTorque===NULL && $autoCreate && ! isset($this->_overrides['avgTorque']) ) {
			$this->avgTorque = $this->createAvgTorque();
		}
		return $this->avgTorque;
	}
	
	protected function createAvgTorque() {
		return new \com\microsoft\wc\thing\types\TorqueValue();
	}

	public function setAvgTorque($avgTorque) {
		$this->avgTorque = $this->validateAvgTorque($avgTorque);
	}

	protected function validateAvgTorque($avgTorque) {
		if ( $avgTorque === FALSE ) {
			$this->_overrides['avgTorque'] = TRUE;
			return NULL;
		}

		if ( ! $avgTorque instanceof \com\microsoft\wc\thing\types\TorqueValue  && ! is_null($avgTorque) ) {
			$avgTorque = new \com\microsoft\wc\thing\types\TorqueValue ($avgTorque);
		}

		unset ($this->_overrides['avgTorque']);
	
		return $avgTorque;
	}

	public function getMinTorque($autoCreate = TRUE) {
		if ($this->minTorque===NULL && $autoCreate && ! isset($this->_overrides['minTorque']) ) {
			$this->minTorque = $this->createMinTorque();
		}
		return $this->minTorque;
	}
	
	protected function createMinTorque() {
		return new \com\microsoft\wc\thing\types\TorqueValue();
	}

	public function setMinTorque($minTorque) {
		$this->minTorque = $this->validateMinTorque($minTorque);
	}

	protected function validateMinTorque($minTorque) {
		if ( $minTorque === FALSE ) {
			$this->_overrides['minTorque'] = TRUE;
			return NULL;
		}

		if ( ! $minTorque instanceof \com\microsoft\wc\thing\types\TorqueValue  && ! is_null($minTorque) ) {
			$minTorque = new \com\microsoft\wc\thing\types\TorqueValue ($minTorque);
		}

		unset ($this->_overrides['minTorque']);
	
		return $minTorque;
	}

	public function getLeftRightBalance($autoCreate = TRUE) {
		if ($this->leftRightBalance===NULL && $autoCreate && ! isset($this->_overrides['leftRightBalance']) ) {
			$this->leftRightBalance = $this->createLeftRightBalance();
		}
		return $this->leftRightBalance;
	}
	
	protected function createLeftRightBalance() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setLeftRightBalance($leftRightBalance) {
		$this->leftRightBalance = $this->validateLeftRightBalance($leftRightBalance);
	}

	protected function validateLeftRightBalance($leftRightBalance) {
		if ( $leftRightBalance === FALSE ) {
			$this->_overrides['leftRightBalance'] = TRUE;
			return NULL;
		}

		if ( ! $leftRightBalance instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($leftRightBalance) ) {
			$leftRightBalance = new \com\microsoft\wc\thing\types\Percentage ($leftRightBalance);
		}

		unset ($this->_overrides['leftRightBalance']);
	
		return $leftRightBalance;
	}

	public function getPeakCadence($autoCreate = TRUE) {
		if ($this->peakCadence===NULL && $autoCreate && ! isset($this->_overrides['peakCadence']) ) {
			$this->peakCadence = $this->createPeakCadence();
		}
		return $this->peakCadence;
	}
	
	protected function createPeakCadence() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setPeakCadence($peakCadence) {
		$this->peakCadence = $this->validatePeakCadence($peakCadence);
	}

	protected function validatePeakCadence($peakCadence) {
		if ( $peakCadence === FALSE ) {
			$this->_overrides['peakCadence'] = TRUE;
			return NULL;
		}

		if ( ! $peakCadence instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($peakCadence) ) {
			$peakCadence = new \com\microsoft\wc\thing\types\PositiveDouble ($peakCadence);
		}

		unset ($this->_overrides['peakCadence']);
	
		return $peakCadence;
	}

	public function getAvgCadence($autoCreate = TRUE) {
		if ($this->avgCadence===NULL && $autoCreate && ! isset($this->_overrides['avgCadence']) ) {
			$this->avgCadence = $this->createAvgCadence();
		}
		return $this->avgCadence;
	}
	
	protected function createAvgCadence() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setAvgCadence($avgCadence) {
		$this->avgCadence = $this->validateAvgCadence($avgCadence);
	}

	protected function validateAvgCadence($avgCadence) {
		if ( $avgCadence === FALSE ) {
			$this->_overrides['avgCadence'] = TRUE;
			return NULL;
		}

		if ( ! $avgCadence instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($avgCadence) ) {
			$avgCadence = new \com\microsoft\wc\thing\types\PositiveDouble ($avgCadence);
		}

		unset ($this->_overrides['avgCadence']);
	
		return $avgCadence;
	}

	public function getMinCadence($autoCreate = TRUE) {
		if ($this->minCadence===NULL && $autoCreate && ! isset($this->_overrides['minCadence']) ) {
			$this->minCadence = $this->createMinCadence();
		}
		return $this->minCadence;
	}
	
	protected function createMinCadence() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setMinCadence($minCadence) {
		$this->minCadence = $this->validateMinCadence($minCadence);
	}

	protected function validateMinCadence($minCadence) {
		if ( $minCadence === FALSE ) {
			$this->_overrides['minCadence'] = TRUE;
			return NULL;
		}

		if ( ! $minCadence instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($minCadence) ) {
			$minCadence = new \com\microsoft\wc\thing\types\PositiveDouble ($minCadence);
		}

		unset ($this->_overrides['minCadence']);
	
		return $minCadence;
	}

	public function getPeakTemperature($autoCreate = TRUE) {
		if ($this->peakTemperature===NULL && $autoCreate && ! isset($this->_overrides['peakTemperature']) ) {
			$this->peakTemperature = $this->createPeakTemperature();
		}
		return $this->peakTemperature;
	}
	
	protected function createPeakTemperature() {
		return new \com\microsoft\wc\thing\types\TemperatureValue();
	}

	public function setPeakTemperature($peakTemperature) {
		$this->peakTemperature = $this->validatePeakTemperature($peakTemperature);
	}

	protected function validatePeakTemperature($peakTemperature) {
		if ( $peakTemperature === FALSE ) {
			$this->_overrides['peakTemperature'] = TRUE;
			return NULL;
		}

		if ( ! $peakTemperature instanceof \com\microsoft\wc\thing\types\TemperatureValue  && ! is_null($peakTemperature) ) {
			$peakTemperature = new \com\microsoft\wc\thing\types\TemperatureValue ($peakTemperature);
		}

		unset ($this->_overrides['peakTemperature']);
	
		return $peakTemperature;
	}

	public function getAvgTemperature($autoCreate = TRUE) {
		if ($this->avgTemperature===NULL && $autoCreate && ! isset($this->_overrides['avgTemperature']) ) {
			$this->avgTemperature = $this->createAvgTemperature();
		}
		return $this->avgTemperature;
	}
	
	protected function createAvgTemperature() {
		return new \com\microsoft\wc\thing\types\TemperatureValue();
	}

	public function setAvgTemperature($avgTemperature) {
		$this->avgTemperature = $this->validateAvgTemperature($avgTemperature);
	}

	protected function validateAvgTemperature($avgTemperature) {
		if ( $avgTemperature === FALSE ) {
			$this->_overrides['avgTemperature'] = TRUE;
			return NULL;
		}

		if ( ! $avgTemperature instanceof \com\microsoft\wc\thing\types\TemperatureValue  && ! is_null($avgTemperature) ) {
			$avgTemperature = new \com\microsoft\wc\thing\types\TemperatureValue ($avgTemperature);
		}

		unset ($this->_overrides['avgTemperature']);
	
		return $avgTemperature;
	}

	public function getMinTemperature($autoCreate = TRUE) {
		if ($this->minTemperature===NULL && $autoCreate && ! isset($this->_overrides['minTemperature']) ) {
			$this->minTemperature = $this->createMinTemperature();
		}
		return $this->minTemperature;
	}
	
	protected function createMinTemperature() {
		return new \com\microsoft\wc\thing\types\TemperatureValue();
	}

	public function setMinTemperature($minTemperature) {
		$this->minTemperature = $this->validateMinTemperature($minTemperature);
	}

	protected function validateMinTemperature($minTemperature) {
		if ( $minTemperature === FALSE ) {
			$this->_overrides['minTemperature'] = TRUE;
			return NULL;
		}

		if ( ! $minTemperature instanceof \com\microsoft\wc\thing\types\TemperatureValue  && ! is_null($minTemperature) ) {
			$minTemperature = new \com\microsoft\wc\thing\types\TemperatureValue ($minTemperature);
		}

		unset ($this->_overrides['minTemperature']);
	
		return $minTemperature;
	}

	public function getPeakAltitude($autoCreate = TRUE) {
		if ($this->peakAltitude===NULL && $autoCreate && ! isset($this->_overrides['peakAltitude']) ) {
			$this->peakAltitude = $this->createPeakAltitude();
		}
		return $this->peakAltitude;
	}
	
	protected function createPeakAltitude() {
		return new \com\microsoft\wc\thing\types\AltitudeValue();
	}

	public function setPeakAltitude($peakAltitude) {
		$this->peakAltitude = $this->validatePeakAltitude($peakAltitude);
	}

	protected function validatePeakAltitude($peakAltitude) {
		if ( $peakAltitude === FALSE ) {
			$this->_overrides['peakAltitude'] = TRUE;
			return NULL;
		}

		if ( ! $peakAltitude instanceof \com\microsoft\wc\thing\types\AltitudeValue  && ! is_null($peakAltitude) ) {
			$peakAltitude = new \com\microsoft\wc\thing\types\AltitudeValue ($peakAltitude);
		}

		unset ($this->_overrides['peakAltitude']);
	
		return $peakAltitude;
	}

	public function getAvgAltitude($autoCreate = TRUE) {
		if ($this->avgAltitude===NULL && $autoCreate && ! isset($this->_overrides['avgAltitude']) ) {
			$this->avgAltitude = $this->createAvgAltitude();
		}
		return $this->avgAltitude;
	}
	
	protected function createAvgAltitude() {
		return new \com\microsoft\wc\thing\types\AltitudeValue();
	}

	public function setAvgAltitude($avgAltitude) {
		$this->avgAltitude = $this->validateAvgAltitude($avgAltitude);
	}

	protected function validateAvgAltitude($avgAltitude) {
		if ( $avgAltitude === FALSE ) {
			$this->_overrides['avgAltitude'] = TRUE;
			return NULL;
		}

		if ( ! $avgAltitude instanceof \com\microsoft\wc\thing\types\AltitudeValue  && ! is_null($avgAltitude) ) {
			$avgAltitude = new \com\microsoft\wc\thing\types\AltitudeValue ($avgAltitude);
		}

		unset ($this->_overrides['avgAltitude']);
	
		return $avgAltitude;
	}

	public function getMinAltitude($autoCreate = TRUE) {
		if ($this->minAltitude===NULL && $autoCreate && ! isset($this->_overrides['minAltitude']) ) {
			$this->minAltitude = $this->createMinAltitude();
		}
		return $this->minAltitude;
	}
	
	protected function createMinAltitude() {
		return new \com\microsoft\wc\thing\types\AltitudeValue();
	}

	public function setMinAltitude($minAltitude) {
		$this->minAltitude = $this->validateMinAltitude($minAltitude);
	}

	protected function validateMinAltitude($minAltitude) {
		if ( $minAltitude === FALSE ) {
			$this->_overrides['minAltitude'] = TRUE;
			return NULL;
		}

		if ( ! $minAltitude instanceof \com\microsoft\wc\thing\types\AltitudeValue  && ! is_null($minAltitude) ) {
			$minAltitude = new \com\microsoft\wc\thing\types\AltitudeValue ($minAltitude);
		}

		unset ($this->_overrides['minAltitude']);
	
		return $minAltitude;
	}

	public function getElevationGain($autoCreate = TRUE) {
		if ($this->elevationGain===NULL && $autoCreate && ! isset($this->_overrides['elevationGain']) ) {
			$this->elevationGain = $this->createElevationGain();
		}
		return $this->elevationGain;
	}
	
	protected function createElevationGain() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setElevationGain($elevationGain) {
		$this->elevationGain = $this->validateElevationGain($elevationGain);
	}

	protected function validateElevationGain($elevationGain) {
		if ( $elevationGain === FALSE ) {
			$this->_overrides['elevationGain'] = TRUE;
			return NULL;
		}

		if ( ! $elevationGain instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($elevationGain) ) {
			$elevationGain = new \com\microsoft\wc\thing\types\LengthValue ($elevationGain);
		}

		unset ($this->_overrides['elevationGain']);
	
		return $elevationGain;
	}

	public function getElevationLoss($autoCreate = TRUE) {
		if ($this->elevationLoss===NULL && $autoCreate && ! isset($this->_overrides['elevationLoss']) ) {
			$this->elevationLoss = $this->createElevationLoss();
		}
		return $this->elevationLoss;
	}
	
	protected function createElevationLoss() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setElevationLoss($elevationLoss) {
		$this->elevationLoss = $this->validateElevationLoss($elevationLoss);
	}

	protected function validateElevationLoss($elevationLoss) {
		if ( $elevationLoss === FALSE ) {
			$this->_overrides['elevationLoss'] = TRUE;
			return NULL;
		}

		if ( ! $elevationLoss instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($elevationLoss) ) {
			$elevationLoss = new \com\microsoft\wc\thing\types\LengthValue ($elevationLoss);
		}

		unset ($this->_overrides['elevationLoss']);
	
		return $elevationLoss;
	}

	public function getNumberOfSteps($autoCreate = TRUE) {
		if ($this->numberOfSteps===NULL && $autoCreate && ! isset($this->_overrides['numberOfSteps']) ) {
			$this->numberOfSteps = $this->createNumberOfSteps();
		}
		return $this->numberOfSteps;
	}
	
	protected function createNumberOfSteps() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setNumberOfSteps($numberOfSteps) {
		$this->numberOfSteps = $this->validateNumberOfSteps($numberOfSteps);
	}

	protected function validateNumberOfSteps($numberOfSteps) {
		if ( $numberOfSteps === FALSE ) {
			$this->_overrides['numberOfSteps'] = TRUE;
			return NULL;
		}

		if ( ! $numberOfSteps instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($numberOfSteps) ) {
			$numberOfSteps = new \com\microsoft\wc\thing\types\NonNegativeInt ($numberOfSteps);
		}

		unset ($this->_overrides['numberOfSteps']);
	
		return $numberOfSteps;
	}

	public function getNumberOfAerobicSteps($autoCreate = TRUE) {
		if ($this->numberOfAerobicSteps===NULL && $autoCreate && ! isset($this->_overrides['numberOfAerobicSteps']) ) {
			$this->numberOfAerobicSteps = $this->createNumberOfAerobicSteps();
		}
		return $this->numberOfAerobicSteps;
	}
	
	protected function createNumberOfAerobicSteps() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setNumberOfAerobicSteps($numberOfAerobicSteps) {
		$this->numberOfAerobicSteps = $this->validateNumberOfAerobicSteps($numberOfAerobicSteps);
	}

	protected function validateNumberOfAerobicSteps($numberOfAerobicSteps) {
		if ( $numberOfAerobicSteps === FALSE ) {
			$this->_overrides['numberOfAerobicSteps'] = TRUE;
			return NULL;
		}

		if ( ! $numberOfAerobicSteps instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($numberOfAerobicSteps) ) {
			$numberOfAerobicSteps = new \com\microsoft\wc\thing\types\NonNegativeInt ($numberOfAerobicSteps);
		}

		unset ($this->_overrides['numberOfAerobicSteps']);
	
		return $numberOfAerobicSteps;
	}

	public function getAerobicStepMinutes($autoCreate = TRUE) {
		if ($this->aerobicStepMinutes===NULL && $autoCreate && ! isset($this->_overrides['aerobicStepMinutes']) ) {
			$this->aerobicStepMinutes = $this->createAerobicStepMinutes();
		}
		return $this->aerobicStepMinutes;
	}
	
	protected function createAerobicStepMinutes() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setAerobicStepMinutes($aerobicStepMinutes) {
		$this->aerobicStepMinutes = $this->validateAerobicStepMinutes($aerobicStepMinutes);
	}

	protected function validateAerobicStepMinutes($aerobicStepMinutes) {
		if ( $aerobicStepMinutes === FALSE ) {
			$this->_overrides['aerobicStepMinutes'] = TRUE;
			return NULL;
		}

		if ( ! $aerobicStepMinutes instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($aerobicStepMinutes) ) {
			$aerobicStepMinutes = new \com\microsoft\wc\thing\types\NonNegativeDouble ($aerobicStepMinutes);
		}

		unset ($this->_overrides['aerobicStepMinutes']);
	
		return $aerobicStepMinutes;
	}
} // end class AerobicSession
