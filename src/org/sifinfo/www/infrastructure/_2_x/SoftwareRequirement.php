<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SoftwareRequirement")
 */
class SoftwareRequirement {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="SoftwareTitle")
	 */
	protected $softwareTitle;

	/**
	 * @XmlText	(type="string", name="Version")
	 */
	protected $version;

	/**
	 * @XmlText	(type="string", name="Vendor")
	 */
	protected $vendor;

	/**
	 * @XmlText	(type="string", name="OS")
	 */
	protected $oS;

	public function __construct($softwareTitle = NULL, $version = NULL, $vendor = NULL, $oS = NULL) {
		$this->softwareTitle = ($softwareTitle===NULL) ? NULL : $this->validateSoftwareTitle($softwareTitle);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
		$this->vendor = ($vendor===NULL) ? NULL : $this->validateVendor($vendor);
		$this->oS = ($oS===NULL) ? NULL : $this->validateOS($oS);
	}

	public function getSoftwareTitle($autoCreate = TRUE) {
		if ($this->softwareTitle===NULL && $autoCreate && ! isset($this->_overrides['softwareTitle']) ) {
			$this->softwareTitle = $this->createSoftwareTitle();
		}
		return $this->softwareTitle;
	}
	
	protected function createSoftwareTitle() {
		return '';
	}

	public function setSoftwareTitle($softwareTitle) {
		$this->softwareTitle = $this->validateSoftwareTitle($softwareTitle);
	}

	protected function validateSoftwareTitle($softwareTitle) {
		if (!is_string($softwareTitle)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'softwareTitle', 'string'));
		}
	
		return $softwareTitle;
	}

	public function getVersion($autoCreate = TRUE) {
		if ($this->version===NULL && $autoCreate && ! isset($this->_overrides['version']) ) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return '';
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( ! is_string($version) && ! is_null($version) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'version', 'string'));
		}
	
		return $version;
	}

	public function getVendor($autoCreate = TRUE) {
		if ($this->vendor===NULL && $autoCreate && ! isset($this->_overrides['vendor']) ) {
			$this->vendor = $this->createVendor();
		}
		return $this->vendor;
	}
	
	protected function createVendor() {
		return '';
	}

	public function setVendor($vendor) {
		$this->vendor = $this->validateVendor($vendor);
	}

	protected function validateVendor($vendor) {
		if ( ! is_string($vendor) && ! is_null($vendor) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'vendor', 'string'));
		}
	
		return $vendor;
	}

	public function getOS($autoCreate = TRUE) {
		if ($this->oS===NULL && $autoCreate && ! isset($this->_overrides['oS']) ) {
			$this->oS = $this->createOS();
		}
		return $this->oS;
	}
	
	protected function createOS() {
		return '';
	}

	public function setOS($oS) {
		$this->oS = $this->validateOS($oS);
	}

	protected function validateOS($oS) {
		if ( ! is_string($oS) && ! is_null($oS) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'oS', 'string'));
		}
	
		return $oS;
	}
} // end class SoftwareRequirement
