<?php
namespace com\microsoft\wc\thing\pap_session;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.pap-session", prefix="")
 * })
 * @XmlEntity	(xml="pap-session")
 */
class PapSession extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * The Positive Airway Pressure (PAP) Session records data collected during a PAP session. A common use for PAP therapy is in the treatment of sleep apnea.
	 */

	const ID = '9085CAD9-E866-4564-8A91-7AD8685D204D';
	const NAME = 'PAP Session';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
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

	public function getDurationMinutes($autoCreate = TRUE) {
		if ($this->durationMinutes===NULL && $autoCreate && ! isset($this->_overrides['durationMinutes']) ) {
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

	public function getApneaHypopneaIndex($autoCreate = TRUE) {
		if ($this->apneaHypopneaIndex===NULL && $autoCreate && ! isset($this->_overrides['apneaHypopneaIndex']) ) {
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

	public function getApneaIndex($autoCreate = TRUE) {
		if ($this->apneaIndex===NULL && $autoCreate && ! isset($this->_overrides['apneaIndex']) ) {
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
		if ( $apneaIndex === FALSE ) {
			$this->_overrides['apneaIndex'] = TRUE;
			return NULL;
		}

		if ( ! $apneaIndex instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($apneaIndex) ) {
			$apneaIndex = new \com\microsoft\wc\thing\types\NonNegativeDouble ($apneaIndex);
		}

		unset ($this->_overrides['apneaIndex']);
	
		return $apneaIndex;
	}

	public function getHypopneaIndex($autoCreate = TRUE) {
		if ($this->hypopneaIndex===NULL && $autoCreate && ! isset($this->_overrides['hypopneaIndex']) ) {
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
		if ( $hypopneaIndex === FALSE ) {
			$this->_overrides['hypopneaIndex'] = TRUE;
			return NULL;
		}

		if ( ! $hypopneaIndex instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($hypopneaIndex) ) {
			$hypopneaIndex = new \com\microsoft\wc\thing\types\NonNegativeDouble ($hypopneaIndex);
		}

		unset ($this->_overrides['hypopneaIndex']);
	
		return $hypopneaIndex;
	}

	public function getOxygenDesaturationIndex($autoCreate = TRUE) {
		if ($this->oxygenDesaturationIndex===NULL && $autoCreate && ! isset($this->_overrides['oxygenDesaturationIndex']) ) {
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
		if ( $oxygenDesaturationIndex === FALSE ) {
			$this->_overrides['oxygenDesaturationIndex'] = TRUE;
			return NULL;
		}

		if ( ! $oxygenDesaturationIndex instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($oxygenDesaturationIndex) ) {
			$oxygenDesaturationIndex = new \com\microsoft\wc\thing\types\NonNegativeDouble ($oxygenDesaturationIndex);
		}

		unset ($this->_overrides['oxygenDesaturationIndex']);
	
		return $oxygenDesaturationIndex;
	}

	public function getPressure($autoCreate = TRUE) {
		if ($this->pressure===NULL && $autoCreate && ! isset($this->_overrides['pressure']) ) {
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
		if ( $pressure === FALSE ) {
			$this->_overrides['pressure'] = TRUE;
			return NULL;
		}

		if ( ! $pressure instanceof \com\microsoft\wc\thing\pap_session\PapSessionPressure  && ! is_null($pressure) ) {
			$pressure = new \com\microsoft\wc\thing\pap_session\PapSessionPressure ($pressure);
		}

		unset ($this->_overrides['pressure']);
	
		return $pressure;
	}

	public function getLeakRate($autoCreate = TRUE) {
		if ($this->leakRate===NULL && $autoCreate && ! isset($this->_overrides['leakRate']) ) {
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
		if ( $leakRate === FALSE ) {
			$this->_overrides['leakRate'] = TRUE;
			return NULL;
		}

		if ( ! $leakRate instanceof \com\microsoft\wc\thing\pap_session\PapSessionLeakRate  && ! is_null($leakRate) ) {
			$leakRate = new \com\microsoft\wc\thing\pap_session\PapSessionLeakRate ($leakRate);
		}

		unset ($this->_overrides['leakRate']);
	
		return $leakRate;
	}

	public function getTidalVolume($autoCreate = TRUE) {
		if ($this->tidalVolume===NULL && $autoCreate && ! isset($this->_overrides['tidalVolume']) ) {
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
		if ( $tidalVolume === FALSE ) {
			$this->_overrides['tidalVolume'] = TRUE;
			return NULL;
		}

		if ( ! $tidalVolume instanceof \com\microsoft\wc\thing\pap_session\PapSessionTidalVolume  && ! is_null($tidalVolume) ) {
			$tidalVolume = new \com\microsoft\wc\thing\pap_session\PapSessionTidalVolume ($tidalVolume);
		}

		unset ($this->_overrides['tidalVolume']);
	
		return $tidalVolume;
	}

	public function getMinuteVentilation($autoCreate = TRUE) {
		if ($this->minuteVentilation===NULL && $autoCreate && ! isset($this->_overrides['minuteVentilation']) ) {
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
		if ( $minuteVentilation === FALSE ) {
			$this->_overrides['minuteVentilation'] = TRUE;
			return NULL;
		}

		if ( ! $minuteVentilation instanceof \com\microsoft\wc\thing\pap_session\PapSessionMinuteVentilation  && ! is_null($minuteVentilation) ) {
			$minuteVentilation = new \com\microsoft\wc\thing\pap_session\PapSessionMinuteVentilation ($minuteVentilation);
		}

		unset ($this->_overrides['minuteVentilation']);
	
		return $minuteVentilation;
	}

	public function getRespiratoryRate($autoCreate = TRUE) {
		if ($this->respiratoryRate===NULL && $autoCreate && ! isset($this->_overrides['respiratoryRate']) ) {
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
		if ( $respiratoryRate === FALSE ) {
			$this->_overrides['respiratoryRate'] = TRUE;
			return NULL;
		}

		if ( ! $respiratoryRate instanceof \com\microsoft\wc\thing\pap_session\PapSessionRespiratoryRate  && ! is_null($respiratoryRate) ) {
			$respiratoryRate = new \com\microsoft\wc\thing\pap_session\PapSessionRespiratoryRate ($respiratoryRate);
		}

		unset ($this->_overrides['respiratoryRate']);
	
		return $respiratoryRate;
	}
} // end class PapSession
