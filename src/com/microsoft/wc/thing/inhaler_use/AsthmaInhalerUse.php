<?php
namespace com\microsoft\wc\thing\inhaler_use;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.inhaler-use", prefix="")
 * })
 * @XmlEntity	(xml="asthma-inhaler-use")
 */
class AsthmaInhalerUse extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A single use of an inhaler.
	 * Note, this may wrap more than one "dose" if multiplepuffs per use are prescribed.
	 */

	const ID = '03efe378-976a-42f8-ae1e-507c497a8c6d';
	const NAME = 'Asthma Inhaler Usage';

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
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="drug")
	 */
	protected $drug;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="strength")
	 */
	protected $strength;

	/**
	 * @XmlText	(type="integer", name="dose-count")
	 */
	protected $doseCount;

	/**
	 * @XmlText	(type="string", name="device-id")
	 */
	protected $deviceId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="dose-purpose")
	 */
	protected $dosePurpose;

	public function __construct($when = NULL, $drug = NULL, $strength = NULL, $doseCount = NULL, $deviceId = NULL, $dosePurpose = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->drug = ($drug===NULL) ? NULL : $this->validateDrug($drug);
		$this->strength = ($strength===NULL) ? NULL : $this->validateStrength($strength);
		$this->doseCount = ($doseCount===NULL) ? NULL : $this->validateDoseCount($doseCount);
		$this->deviceId = ($deviceId===NULL) ? NULL : $this->validateDeviceId($deviceId);
		$this->dosePurpose = ($dosePurpose===NULL) ? NULL : $this->validateDosePurpose($dosePurpose);
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

	public function getDrug($autoCreate = TRUE) {
		if ($this->drug===NULL && $autoCreate && ! isset($this->_overrides['drug']) ) {
			$this->drug = $this->createDrug();
		}
		return $this->drug;
	}
	
	protected function createDrug() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDrug($drug) {
		$this->drug = $this->validateDrug($drug);
	}

	protected function validateDrug($drug) {
		if ( ! $drug instanceof \com\microsoft\wc\types\CodableValue ) {
			$drug = new \com\microsoft\wc\types\CodableValue ($drug);
		}
	
		return $drug;
	}

	public function getStrength($autoCreate = TRUE) {
		if ($this->strength===NULL && $autoCreate && ! isset($this->_overrides['strength']) ) {
			$this->strength = $this->createStrength();
		}
		return $this->strength;
	}
	
	protected function createStrength() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStrength($strength) {
		$this->strength = $this->validateStrength($strength);
	}

	protected function validateStrength($strength) {
		if ( $strength === FALSE ) {
			$this->_overrides['strength'] = TRUE;
			return NULL;
		}

		if ( ! $strength instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($strength) ) {
			$strength = new \com\microsoft\wc\types\CodableValue ($strength);
		}

		unset ($this->_overrides['strength']);
	
		return $strength;
	}

	public function getDoseCount($autoCreate = TRUE) {
		if ($this->doseCount===NULL && $autoCreate && ! isset($this->_overrides['doseCount']) ) {
			$this->doseCount = $this->createDoseCount();
		}
		return $this->doseCount;
	}
	
	protected function createDoseCount() {
		return 0;
	}

	public function setDoseCount($doseCount) {
		$this->doseCount = $this->validateDoseCount($doseCount);
	}

	protected function validateDoseCount($doseCount) {
		$isValid = FALSE;
		if ( is_integer($doseCount) ) {
			$isValid = TRUE;
		}
		else if ( is_null($doseCount) ) {
			$isValid = TRUE;
		}
		else if ( $doseCount == ($castVar = (integer) $doseCount) ) {
			$isValid = TRUE;
			$doseCount = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'doseCount', 'integer'));
		}
	
		return $doseCount;
	}

	public function getDeviceId($autoCreate = TRUE) {
		if ($this->deviceId===NULL && $autoCreate && ! isset($this->_overrides['deviceId']) ) {
			$this->deviceId = $this->createDeviceId();
		}
		return $this->deviceId;
	}
	
	protected function createDeviceId() {
		return '';
	}

	public function setDeviceId($deviceId) {
		$this->deviceId = $this->validateDeviceId($deviceId);
	}

	protected function validateDeviceId($deviceId) {
		if ( ! is_string($deviceId) && ! is_null($deviceId) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'deviceId', 'string'));
		}
	
		return $deviceId;
	}

	public function getDosePurpose($autoCreate = TRUE) {
		if ($this->dosePurpose===NULL && $autoCreate && ! isset($this->_overrides['dosePurpose']) ) {
			$this->dosePurpose = $this->createDosePurpose();
		}
		return $this->dosePurpose;
	}
	
	protected function createDosePurpose() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDosePurpose($dosePurpose) {
		$this->dosePurpose = $this->validateDosePurpose($dosePurpose);
	}

	protected function validateDosePurpose($dosePurpose) {
		if ( $dosePurpose === FALSE ) {
			$this->_overrides['dosePurpose'] = TRUE;
			return NULL;
		}

		if ( ! $dosePurpose instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($dosePurpose) ) {
			$dosePurpose = new \com\microsoft\wc\types\CodableValue ($dosePurpose);
		}

		unset ($this->_overrides['dosePurpose']);
	
		return $dosePurpose;
	}
} // end class AsthmaInhalerUse
