<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="Instance")
 */
class Instance {
	/**
	 * Describes a single instance of Microsoft HealthVault.
	 * In order to work seamlessly across the globe, HealthVault is deployed in multiple data centers around the world. Each of these deployments contains a complete instance of all HealthVault services, including both the HealthVault Shell and platform, and stores health record data primarily for users from a particular region or constituent population. Although an instance can never access personal health data stored in another instance, it knows that the other instances exist. When an application or end user needs a user's health record data, they can make a call to any instance to learn of the instance in which that user's data is stored.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String1024", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Url", name="platform-url")
	 */
	protected $platformUrl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Url", name="shell-url")
	 */
	protected $shellUrl;

	public function __construct($id = NULL, $name = NULL, $description = NULL, $platformUrl = NULL, $shellUrl = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->platformUrl = ($platformUrl===NULL) ? NULL : $this->validatePlatformUrl($platformUrl);
		$this->shellUrl = ($shellUrl===NULL) ? NULL : $this->validateShellUrl($shellUrl);
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\String255nw();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\String255nw ) {
			$id = new \com\microsoft\wc\types\String255nw ($id);
		}
	
		return $id;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\String255nw();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\String255nw ) {
			$name = new \com\microsoft\wc\types\String255nw ($name);
		}
	
		return $name;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return new \com\microsoft\wc\types\String1024();
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! $description instanceof \com\microsoft\wc\types\String1024 ) {
			$description = new \com\microsoft\wc\types\String1024 ($description);
		}
	
		return $description;
	}

	public function getPlatformUrl($autoCreate = TRUE) {
		if ($this->platformUrl===NULL && $autoCreate && ! isset($this->_overrides['platformUrl']) ) {
			$this->platformUrl = $this->createPlatformUrl();
		}
		return $this->platformUrl;
	}
	
	protected function createPlatformUrl() {
		return new \com\microsoft\wc\types\Url();
	}

	public function setPlatformUrl($platformUrl) {
		$this->platformUrl = $this->validatePlatformUrl($platformUrl);
	}

	protected function validatePlatformUrl($platformUrl) {
		if ( ! $platformUrl instanceof \com\microsoft\wc\types\Url ) {
			$platformUrl = new \com\microsoft\wc\types\Url ($platformUrl);
		}
	
		return $platformUrl;
	}

	public function getShellUrl($autoCreate = TRUE) {
		if ($this->shellUrl===NULL && $autoCreate && ! isset($this->_overrides['shellUrl']) ) {
			$this->shellUrl = $this->createShellUrl();
		}
		return $this->shellUrl;
	}
	
	protected function createShellUrl() {
		return new \com\microsoft\wc\types\Url();
	}

	public function setShellUrl($shellUrl) {
		$this->shellUrl = $this->validateShellUrl($shellUrl);
	}

	protected function validateShellUrl($shellUrl) {
		if ( ! $shellUrl instanceof \com\microsoft\wc\types\Url ) {
			$shellUrl = new \com\microsoft\wc\types\Url ($shellUrl);
		}
	
		return $shellUrl;
	}
} // end class Instance
