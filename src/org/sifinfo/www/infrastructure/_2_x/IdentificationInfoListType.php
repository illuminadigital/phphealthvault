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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdentificationInfo", collection="true", name="IdentificationInfo")
	 */
	protected $identificationInfo;

	public function __construct($identificationInfo = NULL) {
		$this->identificationInfo = ($identificationInfo===NULL) ? NULL : $this->validateIdentificationInfo($identificationInfo);
	}

	public function getIdentificationInfo($autoCreate = TRUE) {
		if ($this->identificationInfo===NULL && $autoCreate && ! isset($this->_overrides['identificationInfo']) ) {
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
		$count = count($identificationInfo);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'identificationInfo', 1));
		}
		foreach ($identificationInfo as $entry) {
			if (!is_IdentificationInfo($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'identificationInfo', 'IdentificationInfo'));
			}
		}
	
		return $identificationInfo;
	}

	public function addIdentificationInfo($identificationInfo) {
		$this->identificationInfo[] = $this->validateIdentificationInfoType($identificationInfo);
	}

	protected function validateIdentificationInfoType($identificationInfo) {
		if (!is_IdentificationInfo($identificationInfo)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'identificationInfo', 'IdentificationInfo'));
		}
	
		return $identificationInfo;
	}
} // end class IdentificationInfoListType
