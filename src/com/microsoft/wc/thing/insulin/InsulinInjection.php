<?php
namespace com\microsoft\wc\thing\insulin;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.insulin", prefix="")
 * })
 * @XmlEntity	(xml="insulin-injection")
 */
class InsulinInjection extends \com\microsoft\wc\thing\Thing {
	/**
	 * Any insulin injection used to treat diabetes.
	 * The injection may or may not have a device component.Each new injection package should have a new insulin-injection thing, evenif there is a containing device that is reusable.Changes in regimen (min/max doses per day) should alsocause a new thing to be created.
	 */

	const ID = '3B3C053B-B1FE-4E11-9E22-D4B480DE74E8';
	const NAME = 'Insulin Injection';

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

	public function __construct($type = NULL, $amount = NULL, $deviceId = NULL) {
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->amount = ($amount===NULL) ? NULL : $this->validateAmount($amount);
		$this->deviceId = ($deviceId===NULL) ? NULL : $this->validateDeviceId($deviceId);
	}

	public function getType() {
		if ($this->type===NULL) {
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

	public function getAmount() {
		if ($this->amount===NULL) {
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

	public function getDeviceId() {
		if ($this->deviceId===NULL) {
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
} // end class InsulinInjection
