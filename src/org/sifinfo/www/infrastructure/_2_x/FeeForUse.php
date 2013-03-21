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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="UseType")
	 */
	protected $useType;

	/**
	 * @XmlText	(type="string", name="MeteringType")
	 */
	protected $meteringType;

	/**
	 * @XmlText	(type="string", name="MeteringURL")
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

	public function getUseType($autoCreate = TRUE) {
		if ($this->useType===NULL && $autoCreate && ! isset($this->_overrides['useType']) ) {
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

	public function getMeteringType($autoCreate = TRUE) {
		if ($this->meteringType===NULL && $autoCreate && ! isset($this->_overrides['meteringType']) ) {
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
		if (!is_string($meteringType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'meteringType', 'string'));
		}
	
		return $meteringType;
	}

	public function getMeteringURL($autoCreate = TRUE) {
		if ($this->meteringURL===NULL && $autoCreate && ! isset($this->_overrides['meteringURL']) ) {
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
		if ( ! is_string($meteringURL) && ! is_null($meteringURL) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'meteringURL', 'string'));
		}
	
		return $meteringURL;
	}

	public function getPerUseCharge($autoCreate = TRUE) {
		if ($this->perUseCharge===NULL && $autoCreate && ! isset($this->_overrides['perUseCharge']) ) {
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
		if ( $perUseCharge === FALSE ) {
			$this->_overrides['perUseCharge'] = TRUE;
			return NULL;
		}

		if ( ! $perUseCharge instanceof \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType  && ! is_null($perUseCharge) ) {
			$perUseCharge = new \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType ($perUseCharge);
		}

		unset ($this->_overrides['perUseCharge']);
	
		return $perUseCharge;
	}
} // end class FeeForUse
