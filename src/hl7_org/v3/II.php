<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="II")
 */
class II extends \ANY\ANY {
	/**
	 * An identifier that uniquely identifies a thing or object. Examples are object identifier for HL7 RIM objects, medical record number, order id, service catalog item id, Vehicle Identification Number (VIN), etc. Instance identifiers are defined based on ISO object identifiers.
	 */

	/**
	 * @XmlAttribute	(type="string", name="root")
	 */
	protected $root;

	/**
	 * @XmlAttribute	(type="string", name="extension")
	 */
	protected $extension;

	/**
	 * @XmlAttribute	(type="string", name="assigningAuthorityName")
	 */
	protected $assigningAuthorityName;

	/**
	 * @XmlAttribute	(type="string", name="displayable")
	 */
	protected $displayable;

	public function __construct($root = NULL, $extension = NULL, $assigningAuthorityName = NULL, $displayable = NULL) {
		$this->root = ($root===NULL) ? NULL : $this->validateRoot($root);
		$this->extension = ($extension===NULL) ? NULL : $this->validateExtension($extension);
		$this->assigningAuthorityName = ($assigningAuthorityName===NULL) ? NULL : $this->validateAssigningAuthorityName($assigningAuthorityName);
		$this->displayable = ($displayable===NULL) ? NULL : $this->validateDisplayable($displayable);
	}

	public function getRoot() {
		if ($this->root===NULL) {
			$this->root = $this->createRoot();
		}
		return $this->root;
	}
	
	protected function createRoot() {
		return new \hl7_org\v3\Uid();
	}

	public function setRoot($root) {
		$this->root = $this->validateRoot($root);
	}

	protected function validateRoot($root) {
		if ( ! $root instanceof \hl7_org\v3\Uid  && ! is_null($root) ) {
			$root = new \hl7_org\v3\Uid ($root);
		}
	
		return $root;
	}

	public function getExtension() {
		if ($this->extension===NULL) {
			$this->extension = $this->createExtension();
		}
		return $this->extension;
	}
	
	protected function createExtension() {
		return new \hl7_org\v3\St();
	}

	public function setExtension($extension) {
		$this->extension = $this->validateExtension($extension);
	}

	protected function validateExtension($extension) {
		if ( ! $extension instanceof \hl7_org\v3\St  && ! is_null($extension) ) {
			$extension = new \hl7_org\v3\St ($extension);
		}
	
		return $extension;
	}

	public function getAssigningAuthorityName() {
		if ($this->assigningAuthorityName===NULL) {
			$this->assigningAuthorityName = $this->createAssigningAuthorityName();
		}
		return $this->assigningAuthorityName;
	}
	
	protected function createAssigningAuthorityName() {
		return new \hl7_org\v3\St();
	}

	public function setAssigningAuthorityName($assigningAuthorityName) {
		$this->assigningAuthorityName = $this->validateAssigningAuthorityName($assigningAuthorityName);
	}

	protected function validateAssigningAuthorityName($assigningAuthorityName) {
		if ( ! $assigningAuthorityName instanceof \hl7_org\v3\St  && ! is_null($assigningAuthorityName) ) {
			$assigningAuthorityName = new \hl7_org\v3\St ($assigningAuthorityName);
		}
	
		return $assigningAuthorityName;
	}

	public function getDisplayable() {
		if ($this->displayable===NULL) {
			$this->displayable = $this->createDisplayable();
		}
		return $this->displayable;
	}
	
	protected function createDisplayable() {
		return new \hl7_org\v3\Bl();
	}

	public function setDisplayable($displayable) {
		$this->displayable = $this->validateDisplayable($displayable);
	}

	protected function validateDisplayable($displayable) {
		if ( ! $displayable instanceof \hl7_org\v3\Bl  && ! is_null($displayable) ) {
			$displayable = new \hl7_org\v3\Bl ($displayable);
		}
	
		return $displayable;
	}
} // end class II
