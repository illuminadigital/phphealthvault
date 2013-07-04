<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="ANY")
 */
class ANY {
	/**
	 * Defines the basic properties of every data value. Thisis an abstract type, meaning that no value can be justa data value without belonging to any concrete type.Every concrete type is a specialization of thisgeneral abstract DataValue type.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	public function __construct($nullFlavor = NULL) {
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
	}

	public function getNullFlavor($autoCreate = TRUE) {
		if ($this->nullFlavor===NULL && $autoCreate && ! isset($this->_overrides['nullFlavor']) ) {
			$this->nullFlavor = $this->createNullFlavor();
		}
		return $this->nullFlavor;
	}
	
	protected function createNullFlavor() {
		return NULL;
	}

	public function setNullFlavor($nullFlavor) {
		$this->nullFlavor = $this->validateNullFlavor($nullFlavor);
	}

	protected function validateNullFlavor($nullFlavor) {
	
		return $nullFlavor;
	}
} // end class ANY
