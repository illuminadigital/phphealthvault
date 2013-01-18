<?php
namespace com\microsoft\wc\thing\pap_session;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.pap-session", prefix="")
 * })
 * @XmlEntity	(xml="pap-session")
 */
class PapSession extends \com\microsoft\wc\thing\Thing {
	/**
	 * The Positive Airway Pressure (PAP) Session records data collected during a PAP session. A common use for PAP therapy is in the treatment of sleep apnea.
	 */

	const ID = '9085CAD9-E866-4564-8A91-7AD8685D204D';
	const NAME = 'PAP Session';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="duration-minutes")
	 */
	protected $durationMinutes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="apnea-hypopnea-index")
	 */
	protected $apneaHypopneaIndex;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="apnea-index")
	 */
	protected $apneaIndex;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="hypopnea-index")
	 */
	protected $hypopneaIndex;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="oxygen-desaturation-index")
	 */
	protected $oxygenDesaturationIndex;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\pap_session\PapSessionPressure", name="pressure")
	 */
	protected $pressure;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\pap_session\PapSessionLeakRate", name="leak-rate")
	 */
	protected $leakRate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\pap_session\PapSessionTidalVolume", name="tidal-volume")
	 */
	protected $tidalVolume;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\pap_session\PapSessionMinuteVentilation", name="minute-ventilation")
	 */
	protected $minuteVentilation;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\pap_session\PapSessionRespiratoryRate", name="respiratory-rate")
	 */
	protected $respiratoryRate;

	public function __construct($when = NULL, $durationMinutes = NULL, $apneaHypopneaIndex = NULL, $apneaIndex = NULL, $hypopneaIndex = NULL, $oxygenDesaturationIndex = NULL, $pressure = NULL, $leakRate = NULL, $tidalVolume = NULL, $minuteVentilation = NULL, $respiratoryRate = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->durationMinutes = ($durationMinutes===NULL) ? NULL : $this->validateDurationMinutes($durationMinutes);
		$this->apneaHypopneaIndex = ($apneaHypopneaIndex===NULL) ? NULL : $this->validateApneaHypopneaIndex($apneaHypopneaIndex);
		$this->apneaIndex = ($apneaIndex===NULL) ? NULL : $this->validateApneaIndex($apneaIndex);
		$this->hypopneaIndex = ($hypopneaIndex===NULL) ? NULL : $this->validateHypopneaIndex($hypopneaIndex);
		$this->oxygenDesaturationIndex = ($oxygenDesaturationIndex===NULL) ? NULL : $this->validateOxygenDesaturationIndex($oxygenDesaturationIndex);
		$this->pressure = ($pressure===NULL) ? NULL : $this->validatePressure($pressure);
		$this->leakRate = ($leakRate===NULL) ? NULL : $this->validateLeakRate($leakRate);
		$this->tidalVolume = ($tidalVolume===NULL) ? NULL : $this->validateTidalVolume($tidalVolume);
		$this->minuteVentilation = ($minuteVentilation===NULL) ? NULL : $this->validateMinuteVentilation($minuteVentilation);
		$this->respiratoryRate = ($respiratoryRate===NULL) ? NULL : $this->validateRespiratoryRate($respiratoryRate);
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

	public function getDurationMinutes() {
		if ($this->durationMinutes===NULL) {
			$this->durationMinutes = $this->createDurationMinutes();
		}
		return $this->durationMinutes;
	}
	
	protected function createDurationMinutes() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setDurationMinutes($durationMinutes) {
		$this->durationMinutes = $this->validateDurationMinutes($durationMinutes);
	}

	protected function validateDurationMinutes($durationMinutes) {
		if ( ! $durationMinutes instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$durationMinutes = new \com\microsoft\wc\thing\types\NonNegativeDouble ($durationMinutes);
		}
	
		return $durationMinutes;
	}

	public function getApneaHypopneaIndex() {
		if ($this->apneaHypopneaIndex===NULL) {
			$this->apneaHypopneaIndex = $this->createApneaHypopneaIndex();
		}
		return $this->apneaHypopneaIndex;
	}
	
	protected function createApneaHypopneaIndex() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setApneaHypopneaIndex($apneaHypopneaIndex) {
		$this->apneaHypopneaIndex = $this->validateApneaHypopneaIndex($apneaHypopneaIndex);
	}

	protected function validateApneaHypopneaIndex($apneaHypopneaIndex) {
		if ( ! $apneaHypopneaIndex instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$apneaHypopneaIndex = new \com\microsoft\wc\thing\types\NonNegativeDouble ($apneaHypopneaIndex);
		}
	
		return $apneaHypopneaIndex;
	}

	public function getApneaIndex() {
		if ($this->apneaIndex===NULL) {
			$this->apneaIndex = $this->createApneaIndex();
		}
		return $this->apneaIndex;
	}
	
	protected function createApneaIndex() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setApneaIndex($apneaIndex) {
		$this->apneaIndex = $this->validateApneaIndex($apneaIndex);
	}

	protected function validateApneaIndex($apneaIndex) {
		if ( ! $apneaIndex instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($apneaIndex) ) {
			$apneaIndex = new \com\microsoft\wc\thing\types\NonNegativeDouble ($apneaIndex);
		}
	
		return $apneaIndex;
	}

	public function getHypopneaIndex() {
		if ($this->hypopneaIndex===NULL) {
			$this->hypopneaIndex = $this->createHypopneaIndex();
		}
		return $this->hypopneaIndex;
	}
	
	protected function createHypopneaIndex() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setHypopneaIndex($hypopneaIndex) {
		$this->hypopneaIndex = $this->validateHypopneaIndex($hypopneaIndex);
	}

	protected function validateHypopneaIndex($hypopneaIndex) {
		if ( ! $hypopneaIndex instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($hypopneaIndex) ) {
			$hypopneaIndex = new \com\microsoft\wc\thing\types\NonNegativeDouble ($hypopneaIndex);
		}
	
		return $hypopneaIndex;
	}

	public function getOxygenDesaturationIndex() {
		if ($this->oxygenDesaturationIndex===NULL) {
			$this->oxygenDesaturationIndex = $this->createOxygenDesaturationIndex();
		}
		return $this->oxygenDesaturationIndex;
	}
	
	protected function createOxygenDesaturationIndex() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setOxygenDesaturationIndex($oxygenDesaturationIndex) {
		$this->oxygenDesaturationIndex = $this->validateOxygenDesaturationIndex($oxygenDesaturationIndex);
	}

	protected function validateOxygenDesaturationIndex($oxygenDesaturationIndex) {
		if ( ! $oxygenDesaturationIndex instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($oxygenDesaturationIndex) ) {
			$oxygenDesaturationIndex = new \com\microsoft\wc\thing\types\NonNegativeDouble ($oxygenDesaturationIndex);
		}
	
		return $oxygenDesaturationIndex;
	}

	public function getPressure() {
		if ($this->pressure===NULL) {
			$this->pressure = $this->createPressure();
		}
		return $this->pressure;
	}
	
	protected function createPressure() {
		return new \com\microsoft\wc\thing\pap_session\PapSessionPressure();
	}

	public function setPressure($pressure) {
		$this->pressure = $this->validatePressure($pressure);
	}

	protected function validatePressure($pressure) {
		if ( ! $pressure instanceof \com\microsoft\wc\thing\pap_session\PapSessionPressure  && ! is_null($pressure) ) {
			$pressure = new \com\microsoft\wc\thing\pap_session\PapSessionPressure ($pressure);
		}
	
		return $pressure;
	}

	public function getLeakRate() {
		if ($this->leakRate===NULL) {
			$this->leakRate = $this->createLeakRate();
		}
		return $this->leakRate;
	}
	
	protected function createLeakRate() {
		return new \com\microsoft\wc\thing\pap_session\PapSessionLeakRate();
	}

	public function setLeakRate($leakRate) {
		$this->leakRate = $this->validateLeakRate($leakRate);
	}

	protected function validateLeakRate($leakRate) {
		if ( ! $leakRate instanceof \com\microsoft\wc\thing\pap_session\PapSessionLeakRate  && ! is_null($leakRate) ) {
			$leakRate = new \com\microsoft\wc\thing\pap_session\PapSessionLeakRate ($leakRate);
		}
	
		return $leakRate;
	}

	public function getTidalVolume() {
		if ($this->tidalVolume===NULL) {
			$this->tidalVolume = $this->createTidalVolume();
		}
		return $this->tidalVolume;
	}
	
	protected function createTidalVolume() {
		return new \com\microsoft\wc\thing\pap_session\PapSessionTidalVolume();
	}

	public function setTidalVolume($tidalVolume) {
		$this->tidalVolume = $this->validateTidalVolume($tidalVolume);
	}

	protected function validateTidalVolume($tidalVolume) {
		if ( ! $tidalVolume instanceof \com\microsoft\wc\thing\pap_session\PapSessionTidalVolume  && ! is_null($tidalVolume) ) {
			$tidalVolume = new \com\microsoft\wc\thing\pap_session\PapSessionTidalVolume ($tidalVolume);
		}
	
		return $tidalVolume;
	}

	public function getMinuteVentilation() {
		if ($this->minuteVentilation===NULL) {
			$this->minuteVentilation = $this->createMinuteVentilation();
		}
		return $this->minuteVentilation;
	}
	
	protected function createMinuteVentilation() {
		return new \com\microsoft\wc\thing\pap_session\PapSessionMinuteVentilation();
	}

	public function setMinuteVentilation($minuteVentilation) {
		$this->minuteVentilation = $this->validateMinuteVentilation($minuteVentilation);
	}

	protected function validateMinuteVentilation($minuteVentilation) {
		if ( ! $minuteVentilation instanceof \com\microsoft\wc\thing\pap_session\PapSessionMinuteVentilation  && ! is_null($minuteVentilation) ) {
			$minuteVentilation = new \com\microsoft\wc\thing\pap_session\PapSessionMinuteVentilation ($minuteVentilation);
		}
	
		return $minuteVentilation;
	}

	public function getRespiratoryRate() {
		if ($this->respiratoryRate===NULL) {
			$this->respiratoryRate = $this->createRespiratoryRate();
		}
		return $this->respiratoryRate;
	}
	
	protected function createRespiratoryRate() {
		return new \com\microsoft\wc\thing\pap_session\PapSessionRespiratoryRate();
	}

	public function setRespiratoryRate($respiratoryRate) {
		$this->respiratoryRate = $this->validateRespiratoryRate($respiratoryRate);
	}

	protected function validateRespiratoryRate($respiratoryRate) {
		if ( ! $respiratoryRate instanceof \com\microsoft\wc\thing\pap_session\PapSessionRespiratoryRate  && ! is_null($respiratoryRate) ) {
			$respiratoryRate = new \com\microsoft\wc\thing\pap_session\PapSessionRespiratoryRate ($respiratoryRate);
		}
	
		return $respiratoryRate;
	}
} // end class PapSession
