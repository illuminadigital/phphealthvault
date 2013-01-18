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
	 * @XmlAttribute	(type="string", name="Code")
	 */
	protected $code;

	public function __construct($code = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
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
		if (!is_string($code)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'string'));
		}
	
		return $code;
	}
} // end class IdentificationInfoType
