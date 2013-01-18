<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SIF_ExtendedElementsType")
 */
class SIFExtendedElementsType {
	/**
	 * Allows an agent to include data not yet defined within a SIF data object as name/value pairs.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElement", collection="true", name="SIF_ExtendedElement")
	 */
	protected $sifExtendedElement;

	public function __construct($sifExtendedElement = NULL) {
		$this->sifExtendedElement = ($sifExtendedElement===NULL) ? NULL : $this->validateSifExtendedElement($sifExtendedElement);
	}

	public function getSifExtendedElement() {
		if ($this->sifExtendedElement===NULL) {
			$this->sifExtendedElement = $this->createSifExtendedElement();
		}
		return $this->sifExtendedElement;
	}
	
	protected function createSifExtendedElement() {
		return array();
	}

	public function setSifExtendedElement($sifExtendedElement) {
		$this->sifExtendedElement = $this->validateSifExtendedElement($sifExtendedElement);
	}

	protected function validateSifExtendedElement($sifExtendedElement) {
		if ( ! $sifExtendedElement instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElement  && ! is_null($sifExtendedElement) ) {
			$sifExtendedElement = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElement ($sifExtendedElement);
		}
		$count = count($sifExtendedElement);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sifExtendedElement', 0));
		}
		foreach ($sifExtendedElement as $entry) {
			if (!($entry instanceof SIFExtendedElement)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'sifExtendedElement', 'SIF_ExtendedElement'));
			}
		}
	
		return $sifExtendedElement;
	}

	public function addSifExtendedElement($sifExtendedElement) {
		$this->sifExtendedElement[] = $sifExtendedElement;
	}
} // end class SIFExtendedElementsType
