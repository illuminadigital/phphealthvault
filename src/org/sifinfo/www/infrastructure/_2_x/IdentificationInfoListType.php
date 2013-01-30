<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="IdentificationInfoListType")
 */
class IdentificationInfoListType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdentificationInfo", collection="true", name="IdentificationInfo")
	 */
	protected $identificationInfo;

	public function __construct($identificationInfo = NULL) {
		$this->identificationInfo = ($identificationInfo===NULL) ? NULL : $this->validateIdentificationInfo($identificationInfo);
	}

	public function getIdentificationInfo() {
		if ($this->identificationInfo===NULL) {
			$this->identificationInfo = $this->createIdentificationInfo();
		}
		return $this->identificationInfo;
	}
	
	protected function createIdentificationInfo() {
		return array();
	}

	public function setIdentificationInfo($identificationInfo) {
		$this->identificationInfo = $this->validateIdentificationInfo($identificationInfo);
	}

	protected function validateIdentificationInfo($identificationInfo) {
		if ( ! is_array ($identificationInfo) ) {
			$identificationInfo = array($identificationInfo);
		}
		$count = count($identificationInfo);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'identificationInfo', 1));
		}
		foreach ($identificationInfo as $entry) {
			if (!($entry instanceof IdentificationInfo)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'identificationInfo', 'IdentificationInfo'));
			}
		}
	
		return $identificationInfo;
	}

	public function addIdentificationInfo($identificationInfo) {
		$this->identificationInfo[] = $identificationInfo;
	}
} // end class IdentificationInfoListType
