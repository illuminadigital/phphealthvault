<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ExtendedParametersType")
 */
class ExtendedParametersType {
	/**
	 * A list of ExtendedParameter elements
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ExtendedParameter", collection="true", name="ExtendedParameter")
	 */
	protected $extendedParameter;

	public function __construct($extendedParameter = NULL) {
		$this->extendedParameter = ($extendedParameter===NULL) ? NULL : $this->validateExtendedParameter($extendedParameter);
	}

	public function getExtendedParameter() {
		if ($this->extendedParameter===NULL) {
			$this->extendedParameter = $this->createExtendedParameter();
		}
		return $this->extendedParameter;
	}
	
	protected function createExtendedParameter() {
		return array();
	}

	public function setExtendedParameter($extendedParameter) {
		$this->extendedParameter = $this->validateExtendedParameter($extendedParameter);
	}

	protected function validateExtendedParameter($extendedParameter) {
		if ( ! is_array ($extendedParameter) && ! is_null($extendedParameter) ) {
			$extendedParameter = array($extendedParameter);
		}
		$count = count($extendedParameter);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'extendedParameter', 0));
		}
		foreach ($extendedParameter as $entry) {
			if (!($entry instanceof ExtendedParameter)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'extendedParameter', 'ExtendedParameter'));
			}
		}
	
		return $extendedParameter;
	}

	public function addExtendedParameter($extendedParameter) {
		$this->extendedParameter[] = $extendedParameter;
	}
} // end class ExtendedParametersType
