<?php
namespace com\microsoft\wc\types;



/**
 * @XmlEntity	(xml="HashFinalizedData")
 */
class HashFinalizedData extends \com\microsoft\wc\types\String512 {
	/**
	 * The resulting hash digest.
	 * Microsoft HealthVault will compute the hash over the same data that was used to compute this digest and compare them.
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
} // end class HashFinalizedData
