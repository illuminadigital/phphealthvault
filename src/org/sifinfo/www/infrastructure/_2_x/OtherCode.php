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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="Codeset")
	 */
	protected $codeset;

	public function __construct($codeset = NULL) {
		$this->codeset = ($codeset===NULL) ? NULL : $this->validateCodeset($codeset);
	}

	public function getCodeset($autoCreate = TRUE) {
		if ($this->codeset===NULL && $autoCreate && ! isset($this->_overrides['codeset']) ) {
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
