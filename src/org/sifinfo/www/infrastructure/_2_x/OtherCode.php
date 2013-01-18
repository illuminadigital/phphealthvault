<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="OtherCode")
 */
class OtherCode {
	/**
	 * A state/province code, local code, other code or a text string that crosswalks to or serves as a translation of an associated Code element.
	 */

	/**
	 * @XmlAttribute	(type="string", name="Codeset")
	 */
	protected $codeset;

	public function __construct($codeset = NULL) {
		$this->codeset = ($codeset===NULL) ? NULL : $this->validateCodeset($codeset);
	}

	public function getCodeset() {
		if ($this->codeset===NULL) {
			$this->codeset = $this->createCodeset();
		}
		return $this->codeset;
	}
	
	protected function createCodeset() {
		return NULL;
	}

	public function setCodeset($codeset) {
		$this->codeset = $this->validateCodeset($codeset);
	}

	protected function validateCodeset($codeset) {
		if (!is_string($codeset)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'codeset', 'string'));
		}
	
		return $codeset;
	}
} // end class OtherCode
