<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="OtherCodeListType")
 */
class OtherCodeListType {
	/**
	 * List of other codes or strings that crosswalk to or serve as translations of the Code element paired with this common element. If Code changesand OtherCodes are supported, both Code and all associated OtherCode elements must be present.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherCode", collection="true", name="OtherCode")
	 */
	protected $otherCode;

	public function __construct($otherCode = NULL) {
		$this->otherCode = ($otherCode===NULL) ? NULL : $this->validateOtherCode($otherCode);
	}

	public function getOtherCode($autoCreate = TRUE) {
		if ($this->otherCode===NULL && $autoCreate && ! isset($this->_overrides['otherCode']) ) {
			$this->otherCode = $this->createOtherCode();
		}
		return $this->otherCode;
	}
	
	protected function createOtherCode() {
		return array();
	}

	public function setOtherCode($otherCode) {
		$this->otherCode = $this->validateOtherCode($otherCode);
	}

	protected function validateOtherCode($otherCode) {
		if ( ! is_array ($otherCode) ) {
			$otherCode = array($otherCode);
		}
		$count = count($otherCode);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'otherCode', 1));
		}
		foreach ($otherCode as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\OtherCode )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'otherCode', 'OtherCode'));
			}
		}
	
		return $otherCode;
	}

	public function addOtherCode($otherCode) {
		$this->otherCode[] = $otherCode;
	}
} // end class OtherCodeListType
