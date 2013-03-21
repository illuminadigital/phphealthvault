<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SXPR_TS")
 */
class SXPRTS extends \org\w3\www\_2001\XMLSchema\SXCMTS {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\SXCMTS", collection="true", name="comp")
	 */
	protected $comp;

	public function __construct($comp = NULL) {
		$this->comp = ($comp===NULL) ? NULL : $this->validateComp($comp);
	}

	public function getComp($autoCreate = TRUE) {
		if ($this->comp===NULL && $autoCreate && ! isset($this->_overrides['comp']) ) {
			$this->comp = $this->createComp();
		}
		return $this->comp;
	}
	
	protected function createComp() {
		return array();
	}

	public function setComp($comp) {
		$this->comp = $this->validateComp($comp);
	}

	protected function validateComp($comp) {
		$count = count($comp);
		if ($count < 2) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'comp', 2));
		}
		foreach ($comp as $entry) {
		}
	
		return $comp;
	}

	public function addComp($comp) {
		$this->comp[] = $this->validateCompType($comp);
	}

	protected function validateCompType($comp) {
	
		return $comp;
	}
} // end class SXPRTS
