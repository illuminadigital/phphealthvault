<?php
namespace com\microsoft\wc\thing\equipment;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.equipment", prefix="")
 * })
 * @XmlEntity	(xml="device")
 */
class Device extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to medical equipment.
	 * This thing type describes medical equipment a person has.
	 */

	const ID = 'EF9CF8D5-6C0B-4292-997F-4047240BC7BE';
	const NAME = 'Device';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="device-name")
	 */
	protected $deviceName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="vendor")
	 */
	protected $vendor;

	/**
	 * @XmlText	(type="string", name="model")
	 */
	protected $model;

	/**
	 * @XmlText	(type="string", name="serial-number")
	 */
	protected $serialNumber;

	/**
	 * @XmlText	(type="string", name="anatomic-site")
	 */
	protected $anatomicSite;

	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	public function __construct($when = NULL, $deviceName = NULL, $vendor = NULL, $model = NULL, $serialNumber = NULL, $anatomicSite = NULL, $description = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->deviceName = ($deviceName===NULL) ? NULL : $this->validateDeviceName($deviceName);
		$this->vendor = ($vendor===NULL) ? NULL : $this->validateVendor($vendor);
		$this->model = ($model===NULL) ? NULL : $this->validateModel($model);
		$this->serialNumber = ($serialNumber===NULL) ? NULL : $this->validateSerialNumber($serialNumber);
		$this->anatomicSite = ($anatomicSite===NULL) ? NULL : $this->validateAnatomicSite($anatomicSite);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
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

	public function getDeviceName() {
		if ($this->deviceName===NULL) {
			$this->deviceName = $this->createDeviceName();
		}
		return $this->deviceName;
	}
	
	protected function createDeviceName() {
		return '';
	}

	public function setDeviceName($deviceName) {
		$this->deviceName = $this->validateDeviceName($deviceName);
	}

	protected function validateDeviceName($deviceName) {
		if ( ! is_string($deviceName) && ! is_null($deviceName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'deviceName', 'string'));
		}
	
		return $deviceName;
	}

	public function getVendor() {
		if ($this->vendor===NULL) {
			$this->vendor = $this->createVendor();
		}
		return $this->vendor;
	}
	
	protected function createVendor() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setVendor($vendor) {
		$this->vendor = $this->validateVendor($vendor);
	}

	protected function validateVendor($vendor) {
		if ( ! $vendor instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($vendor) ) {
			$vendor = new \com\microsoft\wc\thing\types\Person ($vendor);
		}
	
		return $vendor;
	}

	public function getModel() {
		if ($this->model===NULL) {
			$this->model = $this->createModel();
		}
		return $this->model;
	}
	
	protected function createModel() {
		return '';
	}

	public function setModel($model) {
		$this->model = $this->validateModel($model);
	}

	protected function validateModel($model) {
		if ( ! is_string($model) && ! is_null($model) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'model', 'string'));
		}
	
		return $model;
	}

	public function getSerialNumber() {
		if ($this->serialNumber===NULL) {
			$this->serialNumber = $this->createSerialNumber();
		}
		return $this->serialNumber;
	}
	
	protected function createSerialNumber() {
		return '';
	}

	public function setSerialNumber($serialNumber) {
		$this->serialNumber = $this->validateSerialNumber($serialNumber);
	}

	protected function validateSerialNumber($serialNumber) {
		if ( ! is_string($serialNumber) && ! is_null($serialNumber) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'serialNumber', 'string'));
		}
	
		return $serialNumber;
	}

	public function getAnatomicSite() {
		if ($this->anatomicSite===NULL) {
			$this->anatomicSite = $this->createAnatomicSite();
		}
		return $this->anatomicSite;
	}
	
	protected function createAnatomicSite() {
		return '';
	}

	public function setAnatomicSite($anatomicSite) {
		$this->anatomicSite = $this->validateAnatomicSite($anatomicSite);
	}

	protected function validateAnatomicSite($anatomicSite) {
		if ( ! is_string($anatomicSite) && ! is_null($anatomicSite) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'anatomicSite', 'string'));
		}
	
		return $anatomicSite;
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}
} // end class Device
