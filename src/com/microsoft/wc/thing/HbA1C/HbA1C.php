<?php
namespace com\microsoft\wc\thing\HbA1C;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.HbA1C", prefix="")
 * })
 * @XmlEntity	(xml="HbA1C")
 */
class HbA1C extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines a single HbA1C reading.
	 * HbA1c is a test that measures the amount of glycosylated hemoglobin in your blood.
	 */

	const ID = '227F55FB-1001-4D4E-9F6A-8D893E07B451';
	const NAME = 'HbA1C Measurement';

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="HbA1C-assay-method")
	 */
	protected $hba1cAssayMethod;

	/**
	 * @XmlText	(type="string", name="device-id")
	 */
	protected $deviceId;

	public function __construct($when = NULL, $value = NULL, $hba1cAssayMethod = NULL, $deviceId = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->hba1cAssayMethod = ($hba1cAssayMethod===NULL) ? NULL : $this->validateHba1cAssayMethod($hba1cAssayMethod);
		$this->deviceId = ($deviceId===NULL) ? NULL : $this->validateDeviceId($deviceId);
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

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\types\Percentage ) {
			$value = new \com\microsoft\wc\thing\types\Percentage ($value);
		}
	
		return $value;
	}

	public function getHba1cAssayMethod($autoCreate = TRUE) {
		if ($this->hba1cAssayMethod===NULL && $autoCreate && ! isset($this->_overrides['hba1cAssayMethod']) ) {
			$this->hba1cAssayMethod = $this->createHba1cAssayMethod();
		}
		return $this->hba1cAssayMethod;
	}
	
	protected function createHba1cAssayMethod() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setHba1cAssayMethod($hba1cAssayMethod) {
		$this->hba1cAssayMethod = $this->validateHba1cAssayMethod($hba1cAssayMethod);
	}

	protected function validateHba1cAssayMethod($hba1cAssayMethod) {
		if ( $hba1cAssayMethod === FALSE ) {
			$this->_overrides['hba1cAssayMethod'] = TRUE;
			return NULL;
		}

		if ( ! $hba1cAssayMethod instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($hba1cAssayMethod) ) {
			$hba1cAssayMethod = new \com\microsoft\wc\types\CodableValue ($hba1cAssayMethod);
		}

		unset ($this->_overrides['hba1cAssayMethod']);
	
		return $hba1cAssayMethod;
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
} // end class HbA1C
