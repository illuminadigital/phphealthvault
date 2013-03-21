<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.RegionOfInterest.value")
 */
class POCDMT000040.RegionOfInterest.value extends \org\w3\www\_2001\XMLSchema\INT {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="boolean", name="unsorted")
	 */
	protected $unsorted;

	public function __construct($unsorted = NULL) {
		$this->unsorted = ($unsorted===NULL) ? NULL : $this->validateUnsorted($unsorted);
	}

	public function getUnsorted($autoCreate = TRUE) {
		if ($this->unsorted===NULL && $autoCreate && ! isset($this->_overrides['unsorted']) ) {
			$this->unsorted = $this->createUnsorted();
		}
		return $this->unsorted;
	}
	
	protected function createUnsorted() {
		return FALSE;
	}

	public function setUnsorted($unsorted) {
		$this->unsorted = $this->validateUnsorted($unsorted);
	}

	protected function validateUnsorted($unsorted) {
		if (!is_bool($unsorted)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'unsorted', 'boolean'));
		}
	
		return $unsorted;
	}
} // end class POCDMT000040.RegionOfInterest.value
