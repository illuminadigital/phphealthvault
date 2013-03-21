<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="IdentificationInfoType")
 */
class IdentificationInfoType {
	/**
	 * Other identification information associated with a school or LEA.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="IdentificationInfoType")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="Code")
	 */
	protected $code;

	public function __construct($value = NULL, $code = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
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
		if (!is_string($code)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'string'));
		}
	
		return $code;
	}
} // end class IdentificationInfoType
