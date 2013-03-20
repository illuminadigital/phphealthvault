<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="VersionInfo")
 */
class VersionInfo {
	/**
	 * The version information for a single version of a thing type.
	 */

	/**
	 * @XmlAttribute	(type="string", name="version-type-id")
	 */
	protected $versionTypeId;

	/**
	 * @XmlAttribute	(type="string", name="version-name")
	 */
	protected $versionName;

	/**
	 * @XmlAttribute	(type="integer", name="version-sequence")
	 */
	protected $versionSequence;

	public function __construct($versionTypeId = NULL, $versionName = NULL, $versionSequence = NULL) {
		$this->versionTypeId = ($versionTypeId===NULL) ? NULL : $this->validateVersionTypeId($versionTypeId);
		$this->versionName = ($versionName===NULL) ? NULL : $this->validateVersionName($versionName);
		$this->versionSequence = ($versionSequence===NULL) ? NULL : $this->validateVersionSequence($versionSequence);
	}

	public function getVersionTypeId() {
		if ($this->versionTypeId===NULL) {
			$this->versionTypeId = $this->createVersionTypeId();
		}
		return $this->versionTypeId;
	}
	
	protected function createVersionTypeId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setVersionTypeId($versionTypeId) {
		$this->versionTypeId = $this->validateVersionTypeId($versionTypeId);
	}

	protected function validateVersionTypeId($versionTypeId) {
		if ( ! $versionTypeId instanceof \com\microsoft\wc\types\Guid ) {
			$versionTypeId = new \com\microsoft\wc\types\Guid ($versionTypeId);
		}
	
		return $versionTypeId;
	}

	public function getVersionName() {
		if ($this->versionName===NULL) {
			$this->versionName = $this->createVersionName();
		}
		return $this->versionName;
	}
	
	protected function createVersionName() {
		return '';
	}

	public function setVersionName($versionName) {
		$this->versionName = $this->validateVersionName($versionName);
	}

	protected function validateVersionName($versionName) {
		if (!is_string($versionName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'versionName', 'string'));
		}
	
		return $versionName;
	}

	public function getVersionSequence() {
		if ($this->versionSequence===NULL) {
			$this->versionSequence = $this->createVersionSequence();
		}
		return $this->versionSequence;
	}
	
	protected function createVersionSequence() {
		return 0;
	}

	public function setVersionSequence($versionSequence) {
		$this->versionSequence = $this->validateVersionSequence($versionSequence);
	}

	protected function validateVersionSequence($versionSequence) {
		$isValid = FALSE;
		if ( is_integer($versionSequence) ) {
			$isValid = TRUE;
		}
		else if ( $versionSequence == ($castVar = (integer) $versionSequence) ) {
			$isValid = TRUE;
			$versionSequence = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'versionSequence', 'integer'));
		}
	
		return $versionSequence;
	}
} // end class VersionInfo
