<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ValidMark")
 */
class ValidMark {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Token", name="Code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Decimal", name="NumericEquivalent")
	 */
	protected $numericEquivalent;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\String", name="Description")
	 */
	protected $description;

	public function __construct($code = NULL, $numericEquivalent = NULL, $description = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->numericEquivalent = ($numericEquivalent===NULL) ? NULL : $this->validateNumericEquivalent($numericEquivalent);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return NULL;
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if (!is_token($code)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'token'));
		}
	
		return $code;
	}

	public function getNumericEquivalent() {
		if ($this->numericEquivalent===NULL) {
			$this->numericEquivalent = $this->createNumericEquivalent();
		}
		return $this->numericEquivalent;
	}
	
	protected function createNumericEquivalent() {
		return NULL;
	}

	public function setNumericEquivalent($numericEquivalent) {
		$this->numericEquivalent = $this->validateNumericEquivalent($numericEquivalent);
	}

	protected function validateNumericEquivalent($numericEquivalent) {
		if ( ! is_decimal($numericEquivalent) && ! is_null($numericEquivalent) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'numericEquivalent', 'decimal'));
		}
	
		return $numericEquivalent;
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}
} // end class ValidMark
