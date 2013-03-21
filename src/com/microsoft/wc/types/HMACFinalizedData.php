<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="HMACFinalizedData")
 */
class HMACFinalizedData extends \com\microsoft\wc\types\String512 {
	/**
	 * The resulting HMAC digest.
	 * The digest is computed by Microsoft HealthVault and is then compared to this result.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="algName")
	 */
	protected $algName;

	public function __construct($algName = NULL) {
		$this->algName = ($algName===NULL) ? NULL : $this->validateAlgName($algName);
	}

	public function getAlgName($autoCreate = TRUE) {
		if ($this->algName===NULL && $autoCreate && ! isset($this->_overrides['algName']) ) {
			$this->algName = $this->createAlgName();
		}
		return $this->algName;
	}
	
	protected function createAlgName() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setAlgName($algName) {
		$this->algName = $this->validateAlgName($algName);
	}

	protected function validateAlgName($algName) {
		if ( ! $algName instanceof \com\microsoft\wc\types\Stringnz ) {
			$algName = new \com\microsoft\wc\types\Stringnz ($algName);
		}
	
		return $algName;
	}
} // end class HMACFinalizedData
