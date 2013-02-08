<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ExtendedParameter")
 */
class ExtendedParameter {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="SIF_Name")
	 */
	protected $sifName;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="SIF_Value")
	 */
	protected $sifValue;

	public function __construct($sifName = NULL, $sifValue = NULL) {
		$this->sifName = ($sifName===NULL) ? NULL : $this->validateSifName($sifName);
		$this->sifValue = ($sifValue===NULL) ? NULL : $this->validateSifValue($sifValue);
	}

	public function getSifName() {
		if ($this->sifName===NULL) {
			$this->sifName = $this->createSifName();
		}
		return $this->sifName;
	}
	
	protected function createSifName() {
		return NULL;
	}

	public function setSifName($sifName) {
		$this->sifName = $this->validateSifName($sifName);
	}

	protected function validateSifName($sifName) {
		if (!is_normalizedString($sifName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifName', 'normalizedString'));
		}
	
		return $sifName;
	}

	public function getSifValue() {
		if ($this->sifValue===NULL) {
			$this->sifValue = $this->createSifValue();
		}
		return $this->sifValue;
	}
	
	protected function createSifValue() {
		return NULL;
	}

	public function setSifValue($sifValue) {
		$this->sifValue = $this->validateSifValue($sifValue);
	}

	protected function validateSifValue($sifValue) {
		if (!is_normalizedString($sifValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifValue', 'normalizedString'));
		}
	
		return $sifValue;
	}
} // end class ExtendedParameter
