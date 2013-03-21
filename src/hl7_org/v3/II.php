<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="II")
 */
class II extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * An identifier that uniquely identifies a thing or object. Examples are object identifier for HL7 RIM objects, medical record number, order id, service catalog item id, Vehicle Identification Number (VIN), etc. Instance identifiers are defined based on ISO object identifiers.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getRoot($autoCreate = TRUE) {
		if ($this->root===NULL && $autoCreate && ! isset($this->_overrides['root']) ) {
			$this->root = $this->createRoot();
		}
		return $this->root;
	}
	
	protected function createRoot() {
		return NULL;
	}

	public function setRoot($root) {
		$this->root = $this->validateRoot($root);
	}

	protected function validateRoot($root) {
	
		return $root;
	}

	public function getExtension($autoCreate = TRUE) {
		if ($this->extension===NULL && $autoCreate && ! isset($this->_overrides['extension']) ) {
			$this->extension = $this->createExtension();
		}
		return $this->extension;
	}
	
	protected function createExtension() {
		return NULL;
	}

	public function setExtension($extension) {
		$this->extension = $this->validateExtension($extension);
	}

	protected function validateExtension($extension) {
	
		return $extension;
	}

	public function getAssigningAuthorityName($autoCreate = TRUE) {
		if ($this->assigningAuthorityName===NULL && $autoCreate && ! isset($this->_overrides['assigningAuthorityName']) ) {
			$this->assigningAuthorityName = $this->createAssigningAuthorityName();
		}
		return $this->assigningAuthorityName;
	}
	
	protected function createAssigningAuthorityName() {
		return NULL;
	}

	public function setAssigningAuthorityName($assigningAuthorityName) {
		$this->assigningAuthorityName = $this->validateAssigningAuthorityName($assigningAuthorityName);
	}

	protected function validateAssigningAuthorityName($assigningAuthorityName) {
	
		return $assigningAuthorityName;
	}

	public function getDisplayable($autoCreate = TRUE) {
		if ($this->displayable===NULL && $autoCreate && ! isset($this->_overrides['displayable']) ) {
			$this->displayable = $this->createDisplayable();
		}
		return $this->displayable;
	}
	
	protected function createDisplayable() {
		return NULL;
	}

	public function setDisplayable($displayable) {
		$this->displayable = $this->validateDisplayable($displayable);
	}

	protected function validateDisplayable($displayable) {
	
		return $displayable;
	}
} // end class II
