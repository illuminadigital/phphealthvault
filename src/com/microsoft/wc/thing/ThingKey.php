<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="ThingKey")
 */
class ThingKey extends \com\microsoft\wc\types\Guid {
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
		return new \com\microsoft\wc\types\Guid();
	}

	public function setVersionStamp($versionStamp) {
		$this->versionStamp = $this->validateVersionStamp($versionStamp);
	}

	protected function validateVersionStamp($versionStamp) {
		if ( ! $versionStamp instanceof \com\microsoft\wc\types\Guid ) {
			$versionStamp = new \com\microsoft\wc\types\Guid ($versionStamp);
		}
	
		return $versionStamp;
	}
} // end class ThingKey
