<?php
namespace com\microsoft\wc\thing\insulin_injection_use;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.insulin-injection-use", prefix="")
 * })
 * @XmlEntity	(xml="diabetes-insulin-injection-use")
 */
class DiabetesInsulinInjectionUse extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A single use of an insulin-injection.
	 * Note, this may wrap more than one "dose" if multipleinjections per use are prescribed.
	 */

	const ID = '184166BE-8ADB-4D9C-8162-C403040E31AD';
	const NAME = 'Diabetes Insulin Injection Usage';

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
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="type")
	 */
	protected $type;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\InsulinInjectionValue", name="amount")
	 */
	protected $amount;

	/**
	 * @XmlText	(type="string", name="device-id")
	 */
	protected $deviceId;

	public function __construct($when = NULL, $type = NULL, $amount = NULL, $deviceId = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->amount = ($amount===NULL) ? NULL : $this->validateAmount($amount);
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

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! $type instanceof \com\microsoft\wc\types\CodableValue ) {
			$type = new \com\microsoft\wc\types\CodableValue ($type);
		}
	
		return $type;
	}

	public function getAmount($autoCreate = TRUE) {
		if ($this->amount===NULL && $autoCreate && ! isset($this->_overrides['amount']) ) {
			$this->amount = $this->createAmount();
		}
		return $this->amount;
	}
	
	protected function createAmount() {
		return new \com\microsoft\wc\thing\types\InsulinInjectionValue();
	}

	public function setAmount($amount) {
		$this->amount = $this->validateAmount($amount);
	}

	protected function validateAmount($amount) {
		if ( ! $amount instanceof \com\microsoft\wc\thing\types\InsulinInjectionValue ) {
			$amount = new \com\microsoft\wc\thing\types\InsulinInjectionValue ($amount);
		}
	
		return $amount;
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
} // end class DiabetesInsulinInjectionUse
