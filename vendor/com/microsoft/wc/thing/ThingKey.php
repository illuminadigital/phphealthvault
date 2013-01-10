<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\types\Guid;


/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="ThingKey")
 */
class ThingKey extends Guid {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="version-stamp")
	 */
	protected $versionStamp;

	public function __construct($versionStamp = NULL) {
		$this->versionStamp = ($versionStamp===NULL) ? NULL : $this->validateVersionStamp($versionStamp);
	}

	public function getVersionStamp() {
		if ($this->versionStamp===NULL) {
			$this->versionStamp = $this->createVersionStamp();
		}
		return $this->versionStamp;
	}
	
	protected function createVersionStamp() {
		return new Guid();
	}

	public function setVersionStamp($versionStamp) {
		$this->versionStamp = $this->validateVersionStamp($versionStamp);
	}

	protected function validateVersionStamp($versionStamp) {
		if ( ! $versionStamp instanceof Guid ) {
			$versionStamp = new Guid ($versionStamp);
		}
	
		return $versionStamp;
	}
} // end class ThingKey
