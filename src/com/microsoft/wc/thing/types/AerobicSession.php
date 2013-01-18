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

	public function getMode() {
		if ($this->mode===NULL) {
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
		if ( ! $mode instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($mode) ) {
			$mode = new \com\microsoft\wc\types\CodableValue ($mode);
		}
	
		return $mode;
	}

	public function getDistance() {
		if ($this->distance===NULL) {
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
		if ( ! $distance instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($distance) ) {
			$distance = new \com\microsoft\wc\thing\types\LengthValue ($distance);
		}
	
		return $distance;
	}

	public function getMinutes() {
		if ($this->minutes===NULL) {
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
		if ( ! $minutes instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($minutes) ) {
			$minutes = new \com\microsoft\wc\thing\types\PositiveDouble ($minutes);
		}
	
		return $minutes;
	}

	public function getIntensity() {
		if ($this->intensity===NULL) {
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
		if ( ! $intensity instanceof \com\microsoft\wc\thing\types\OneToFive  && ! is_null($intensity) ) {
			$intensity = new \com\microsoft\wc\thing\types\OneToFive ($intensity);
		}
	
		return $intensity;
	}

	public function getPeakHeartrate() {
		if ($this->peakHeartrate===NULL) {
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
		if ( ! $peakHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($peakHeartrate) ) {
			$peakHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($peakHeartrate);
		}
	
		return $peakHeartrate;
	}

	public function getAvgHeartrate() {
		if ($this->avgHeartrate===NULL) {
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
		if ( ! $avgHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($avgHeartrate) ) {
			$avgHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($avgHeartrate);
		}
	
		return $avgHeartrate;
	}

	public function getMinHeartrate() {
		if ($this->minHeartrate===NULL) {
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
		if ( ! $minHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($minHeartrate) ) {
			$minHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($minHeartrate);
		}
	
		return $minHeartrate;
	}

	public function getEnergy() {
		if ($this->energy===NULL) {
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
		if ( ! $energy instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($energy) ) {
			$energy = new \com\microsoft\wc\thing\types\PositiveDouble ($energy);
		}
	
		return $energy;
	}

	public function getEnergyFromFat() {
		if ($this->energyFromFat===NULL) {
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
		if ( ! $energyFromFat instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($energyFromFat) ) {
			$energyFromFat = new \com\microsoft\wc\thing\types\PositiveDouble ($energyFromFat);
		}
	
		return $energyFromFat;
	}

	public function getPeakSpeed() {
		if ($this->peakSpeed===NULL) {
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
		if ( ! $peakSpeed instanceof \com\microsoft\wc\thing\types\SpeedValue  && ! is_null($peakSpeed) ) {
			$peakSpeed = new \com\microsoft\wc\thing\types\SpeedValue ($peakSpeed);
		}
	
		return $peakSpeed;
	}

	public function getAvgSpeed() {
		if ($this->avgSpeed===NULL) {
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
		if ( ! $avgSpeed instanceof \com\microsoft\wc\thing\types\SpeedValue  && ! is_null($avgSpeed) ) {
			$avgSpeed = new \com\microsoft\wc\thing\types\SpeedValue ($avgSpeed);
		}
	
		return $avgSpeed;
	}

	public function getMinSpeed() {
		if ($this->minSpeed===NULL) {
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
		if ( ! $minSpeed instanceof \com\microsoft\wc\thing\types\SpeedValue  && ! is_null($minSpeed) ) {
			$minSpeed = new \com\microsoft\wc\thing\types\SpeedValue ($minSpeed);
		}
	
		return $minSpeed;
	}

	public function getPeakPace() {
		if ($this->peakPace===NULL) {
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
		if ( ! $peakPace instanceof \com\microsoft\wc\thing\types\PaceValue  && ! is_null($peakPace) ) {
			$peakPace = new \com\microsoft\wc\thing\types\PaceValue ($peakPace);
		}
	
		return $peakPace;
	}

	public function getAvgPace() {
		if ($this->avgPace===NULL) {
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
		if ( ! $avgPace instanceof \com\microsoft\wc\thing\types\PaceValue  && ! is_null($avgPace) ) {
			$avgPace = new \com\microsoft\wc\thing\types\PaceValue ($avgPace);
		}
	
		return $avgPace;
	}

	public function getMinPace() {
		if ($this->minPace===NULL) {
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
		if ( ! $minPace instanceof \com\microsoft\wc\thing\types\PaceValue  && ! is_null($minPace) ) {
			$minPace = new \com\microsoft\wc\thing\types\PaceValue ($minPace);
		}
	
		return $minPace;
	}

	public function getPeakPower() {
		if ($this->peakPower===NULL) {
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
		if ( ! $peakPower instanceof \com\microsoft\wc\thing\types\PowerValue  && ! is_null($peakPower) ) {
			$peakPower = new \com\microsoft\wc\thing\types\PowerValue ($peakPower);
		}
	
		return $peakPower;
	}

	public function getAvgPower() {
		if ($this->avgPower===NULL) {
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
		if ( ! $avgPower instanceof \com\microsoft\wc\thing\types\PowerValue  && ! is_null($avgPower) ) {
			$avgPower = new \com\microsoft\wc\thing\types\PowerValue ($avgPower);
		}
	
		return $avgPower;
	}

	public function getMinPower() {
		if ($this->minPower===NULL) {
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
		if ( ! $minPower instanceof \com\microsoft\wc\thing\types\PowerValue  && ! is_null($minPower) ) {
			$minPower = new \com\microsoft\wc\thing\types\PowerValue ($minPower);
		}
	
		return $minPower;
	}

	public function getPeakTorque() {
		if ($this->peakTorque===NULL) {
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
		if ( ! $peakTorque instanceof \com\microsoft\wc\thing\types\TorqueValue  && ! is_null($peakTorque) ) {
			$peakTorque = new \com\microsoft\wc\thing\types\TorqueValue ($peakTorque);
		}
	
		return $peakTorque;
	}

	public function getAvgTorque() {
		if ($this->avgTorque===NULL) {
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
		if ( ! $avgTorque instanceof \com\microsoft\wc\thing\types\TorqueValue  && ! is_null($avgTorque) ) {
			$avgTorque = new \com\microsoft\wc\thing\types\TorqueValue ($avgTorque);
		}
	
		return $avgTorque;
	}

	public function getMinTorque() {
		if ($this->minTorque===NULL) {
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
		if ( ! $minTorque instanceof \com\microsoft\wc\thing\types\TorqueValue  && ! is_null($minTorque) ) {
			$minTorque = new \com\microsoft\wc\thing\types\TorqueValue ($minTorque);
		}
	
		return $minTorque;
	}

	public function getLeftRightBalance() {
		if ($this->leftRightBalance===NULL) {
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
		if ( ! $leftRightBalance instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($leftRightBalance) ) {
			$leftRightBalance = new \com\microsoft\wc\thing\types\Percentage ($leftRightBalance);
		}
	
		return $leftRightBalance;
	}

	public function getPeakCadence() {
		if ($this->peakCadence===NULL) {
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
		if ( ! $peakCadence instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($peakCadence) ) {
			$peakCadence = new \com\microsoft\wc\thing\types\PositiveDouble ($peakCadence);
		}
	
		return $peakCadence;
	}

	public function getAvgCadence() {
		if ($this->avgCadence===NULL) {
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
		if ( ! $avgCadence instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($avgCadence) ) {
			$avgCadence = new \com\microsoft\wc\thing\types\PositiveDouble ($avgCadence);
		}
	
		return $avgCadence;
	}

	public function getMinCadence() {
		if ($this->minCadence===NULL) {
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
		if ( ! $minCadence instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($minCadence) ) {
			$minCadence = new \com\microsoft\wc\thing\types\PositiveDouble ($minCadence);
		}
	
		return $minCadence;
	}

	public function getPeakTemperature() {
		if ($this->peakTemperature===NULL) {
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
		if ( ! $peakTemperature instanceof \com\microsoft\wc\thing\types\TemperatureValue  && ! is_null($peakTemperature) ) {
			$peakTemperature = new \com\microsoft\wc\thing\types\TemperatureValue ($peakTemperature);
		}
	
		return $peakTemperature;
	}

	public function getAvgTemperature() {
		if ($this->avgTemperature===NULL) {
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
		if ( ! $avgTemperature instanceof \com\microsoft\wc\thing\types\TemperatureValue  && ! is_null($avgTemperature) ) {
			$avgTemperature = new \com\microsoft\wc\thing\types\TemperatureValue ($avgTemperature);
		}
	
		return $avgTemperature;
	}

	public function getMinTemperature() {
		if ($this->minTemperature===NULL) {
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
		if ( ! $minTemperature instanceof \com\microsoft\wc\thing\types\TemperatureValue  && ! is_null($minTemperature) ) {
			$minTemperature = new \com\microsoft\wc\thing\types\TemperatureValue ($minTemperature);
		}
	
		return $minTemperature;
	}

	public function getPeakAltitude() {
		if ($this->peakAltitude===NULL) {
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
		if ( ! $peakAltitude instanceof \com\microsoft\wc\thing\types\AltitudeValue  && ! is_null($peakAltitude) ) {
			$peakAltitude = new \com\microsoft\wc\thing\types\AltitudeValue ($peakAltitude);
		}
	
		return $peakAltitude;
	}

	public function getAvgAltitude() {
		if ($this->avgAltitude===NULL) {
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
		if ( ! $avgAltitude instanceof \com\microsoft\wc\thing\types\AltitudeValue  && ! is_null($avgAltitude) ) {
			$avgAltitude = new \com\microsoft\wc\thing\types\AltitudeValue ($avgAltitude);
		}
	
		return $avgAltitude;
	}

	public function getMinAltitude() {
		if ($this->minAltitude===NULL) {
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
		if ( ! $minAltitude instanceof \com\microsoft\wc\thing\types\AltitudeValue  && ! is_null($minAltitude) ) {
			$minAltitude = new \com\microsoft\wc\thing\types\AltitudeValue ($minAltitude);
		}
	
		return $minAltitude;
	}

	public function getElevationGain() {
		if ($this->elevationGain===NULL) {
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
		if ( ! $elevationGain instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($elevationGain) ) {
			$elevationGain = new \com\microsoft\wc\thing\types\LengthValue ($elevationGain);
		}
	
		return $elevationGain;
	}

	public function getElevationLoss() {
		if ($this->elevationLoss===NULL) {
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
		if ( ! $elevationLoss instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($elevationLoss) ) {
			$elevationLoss = new \com\microsoft\wc\thing\types\LengthValue ($elevationLoss);
		}
	
		return $elevationLoss;
	}

	public function getNumberOfSteps() {
		if ($this->numberOfSteps===NULL) {
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
		if ( ! $numberOfSteps instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($numberOfSteps) ) {
			$numberOfSteps = new \com\microsoft\wc\thing\types\NonNegativeInt ($numberOfSteps);
		}
	
		return $numberOfSteps;
	}

	public function getNumberOfAerobicSteps() {
		if ($this->numberOfAerobicSteps===NULL) {
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
		if ( ! $numberOfAerobicSteps instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($numberOfAerobicSteps) ) {
			$numberOfAerobicSteps = new \com\microsoft\wc\thing\types\NonNegativeInt ($numberOfAerobicSteps);
		}
	
		return $numberOfAerobicSteps;
	}

	public function getAerobicStepMinutes() {
		if ($this->aerobicStepMinutes===NULL) {
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
		if ( ! $aerobicStepMinutes instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($aerobicStepMinutes) ) {
			$aerobicStepMinutes = new \com\microsoft\wc\thing\types\NonNegativeDouble ($aerobicStepMinutes);
		}
	
		return $aerobicStepMinutes;
	}
} // end class AerobicSession
