<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\Stringnz;


/**
 * @XmlEntity	(xml="HMACFinalizedData")
 */
class HMACFinalizedData extends String512 {
	/**
	 * The resulting HMAC digest.
	 * The digest is computed by Microsoft HealthVault and is then compared to this result.
	 */

	/**
	 * @XmlAttribute	(type="string", name="algName")
	 */
	protected $algName;

	public function __construct($algName = NULL) {
		$this->algName = ($algName===NULL) ? NULL : $this->validateAlgName($algName);
	}

	public function getAlgName() {
		if ($this->algName===NULL) {
			$this->algName = $this->createAlgName();
		}
		return $this->algName;
	}
	
	protected function createAlgName() {
		return new Stringnz();
	}

	public function setAlgName($algName) {
		$this->algName = $this->validateAlgName($algName);
	}

	protected function validateAlgName($algName) {
		if ( ! $algName instanceof Stringnz ) {
			$algName = new Stringnz ($algName);
		}
	
		return $algName;
	}
} // end class HMACFinalizedData
