<?php
namespace com\microsoft\wc\thing\equipment;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.equipment", prefix="")
 * })
 * @XmlEntity	(xml="device")
 */
class Device extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to medical equipment.
	 * This thing type describes medical equipment a person has.
	 */

	const ID = 'EF9CF8D5-6C0B-4292-997F-4047240BC7BE';
	const NAME = 'Device';

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

	public function getDeviceName($autoCreate = TRUE) {
		if ($this->deviceName===NULL && $autoCreate && ! isset($this->_overrides['deviceName']) ) {
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

	public function getVendor($autoCreate = TRUE) {
		if ($this->vendor===NULL && $autoCreate && ! isset($this->_overrides['vendor']) ) {
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
		if ( $vendor === FALSE ) {
			$this->_overrides['vendor'] = TRUE;
			return NULL;
		}

		if ( ! $vendor instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($vendor) ) {
			$vendor = new \com\microsoft\wc\thing\types\Person ($vendor);
		}

		unset ($this->_overrides['vendor']);
	
		return $vendor;
	}

	public function getModel($autoCreate = TRUE) {
		if ($this->model===NULL && $autoCreate && ! isset($this->_overrides['model']) ) {
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

	public function getSerialNumber($autoCreate = TRUE) {
		if ($this->serialNumber===NULL && $autoCreate && ! isset($this->_overrides['serialNumber']) ) {
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

	public function getAnatomicSite($autoCreate = TRUE) {
		if ($this->anatomicSite===NULL && $autoCreate && ! isset($this->_overrides['anatomicSite']) ) {
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

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
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
