<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SXPR_TS")
 */
class SXPRTS extends \SXCM_TS\SXCMTS {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\SXCMTS", collection="true", name="comp")
	 */
	protected $comp;

	public function __construct($comp = NULL) {
		$this->comp = ($comp===NULL) ? NULL : $this->validateComp($comp);
	}

	public function getComp() {
		if ($this->comp===NULL) {
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
		if ( ! is_array ($comp) ) {
			$comp = array($comp);
		}
		$count = count($comp);
		if ($count < 2) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'comp', 2));
		}
		foreach ($comp as $entry) {
			if (!($entry instanceof SXCMTS)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'comp', 'SXCM_TS'));
			}
		}
	
		return $comp;
	}

	public function addComp($comp) {
		$this->comp[] = $comp;
	}
} // end class SXPRTS
