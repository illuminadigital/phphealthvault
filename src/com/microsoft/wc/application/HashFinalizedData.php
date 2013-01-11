<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\Stringnz;


/**
 * @XmlEntity	(xml="HashFinalizedData")
 */
class HashFinalizedData extends String512 {
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
} // end class HashFinalizedData
