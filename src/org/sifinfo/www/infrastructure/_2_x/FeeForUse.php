<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="FeeForUse")
 */
class FeeForUse {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\String", name="UseType")
	 */
	protected $useType;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Token", name="MeteringType")
	 */
	protected $meteringType;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AnyURI", name="MeteringURL")
	 */
	protected $meteringURL;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType", name="PerUseCharge")
	 */
	protected $perUseCharge;

	public function __construct($useType = NULL, $meteringType = NULL, $meteringURL = NULL, $perUseCharge = NULL) {
		$this->useType = ($useType===NULL) ? NULL : $this->validateUseType($useType);
		$this->meteringType = ($meteringType===NULL) ? NULL : $this->validateMeteringType($meteringType);
		$this->meteringURL = ($meteringURL===NULL) ? NULL : $this->validateMeteringURL($meteringURL);
		$this->perUseCharge = ($perUseCharge===NULL) ? NULL : $this->validatePerUseCharge($perUseCharge);
	}

	public function getUseType() {
		if ($this->useType===NULL) {
			$this->useType = $this->createUseType();
		}
		return $this->useType;
	}
	
	protected function createUseType() {
		return '';
	}

	public function setUseType($useType) {
		$this->useType = $this->validateUseType($useType);
	}

	protected function validateUseType($useType) {
		if (!is_string($useType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'useType', 'string'));
		}
	
		return $useType;
	}

	public function getMeteringType() {
		if ($this->meteringType===NULL) {
			$this->meteringType = $this->createMeteringType();
		}
		return $this->meteringType;
	}
	
	protected function createMeteringType() {
		return NULL;
	}

	public function setMeteringType($meteringType) {
		$this->meteringType = $this->validateMeteringType($meteringType);
	}

	protected function validateMeteringType($meteringType) {
		if (!is_token($meteringType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'meteringType', 'token'));
		}
	
		return $meteringType;
	}

	public function getMeteringURL() {
		if ($this->meteringURL===NULL) {
			$this->meteringURL = $this->createMeteringURL();
		}
		return $this->meteringURL;
	}
	
	protected function createMeteringURL() {
		return NULL;
	}

	public function setMeteringURL($meteringURL) {
		$this->meteringURL = $this->validateMeteringURL($meteringURL);
	}

	protected function validateMeteringURL($meteringURL) {
		if ( ! is_anyURI($meteringURL) && ! is_null($meteringURL) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'meteringURL', 'anyURI'));
		}
	
		return $meteringURL;
	}

	public function getPerUseCharge() {
		if ($this->perUseCharge===NULL) {
			$this->perUseCharge = $this->createPerUseCharge();
		}
		return $this->perUseCharge;
	}
	
	protected function createPerUseCharge() {
		return new \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType();
	}

	public function setPerUseCharge($perUseCharge) {
		$this->perUseCharge = $this->validatePerUseCharge($perUseCharge);
	}

	protected function validatePerUseCharge($perUseCharge) {
		if ( ! $perUseCharge instanceof \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType  && ! is_null($perUseCharge) ) {
			$perUseCharge = new \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType ($perUseCharge);
		}
	
		return $perUseCharge;
	}
} // end class FeeForUse
