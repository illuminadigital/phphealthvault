<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Thead")
 */
class StrucDoc.Thead {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Tr", name="tr")
	 */
	protected $tr;

	/**
	 * @XmlAttribute	(type="string", name="ID")
	 */
	protected $iD;

	/**
	 * @XmlAttribute	(type="string", name="language")
	 */
	protected $language;

	/**
	 * @XmlAttribute	(type="string", name="styleCode")
	 */
	protected $styleCode;

	/**
	 * @XmlAttribute	(type="string", name="align")
	 */
	protected $align;

	/**
	 * @XmlAttribute	(type="string", name="char")
	 */
	protected $char;

	/**
	 * @XmlAttribute	(type="string", name="charoff")
	 */
	protected $charoff;

	/**
	 * @XmlAttribute	(type="string", name="valign")
	 */
	protected $valign;

	public function __construct($tr = NULL, $iD = NULL, $language = NULL, $styleCode = NULL, $align = NULL, $char = NULL, $charoff = NULL, $valign = NULL) {
		$this->tr = ($tr===NULL) ? NULL : $this->validateTr($tr);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
		$this->align = ($align===NULL) ? NULL : $this->validateAlign($align);
		$this->char = ($char===NULL) ? NULL : $this->validateChar($char);
		$this->charoff = ($charoff===NULL) ? NULL : $this->validateCharoff($charoff);
		$this->valign = ($valign===NULL) ? NULL : $this->validateValign($valign);
	}

	public function getTr($autoCreate = TRUE) {
		if ($this->tr===NULL && $autoCreate && ! isset($this->_overrides['tr']) ) {
			$this->tr = $this->createTr();
		}
		return $this->tr;
	}
	
	protected function createTr() {
		return NULL;
	}

	public function setTr($tr) {
		$this->tr = $this->validateTr($tr);
	}

	protected function validateTr($tr) {
	
		return $tr;
	}

	public function getID($autoCreate = TRUE) {
		if ($this->iD===NULL && $autoCreate && ! isset($this->_overrides['iD']) ) {
			$this->iD = $this->createID();
		}
		return $this->iD;
	}
	
	protected function createID() {
		return NULL;
	}

	public function setID($iD) {
		$this->iD = $this->validateID($iD);
	}

	protected function validateID($iD) {
		if (!is_string($iD)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'iD', 'string'));
		}
	
		return $iD;
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return NULL;
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if (!is_string($language)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'language', 'string'));
		}
	
		return $language;
	}

	public function getStyleCode($autoCreate = TRUE) {
		if ($this->styleCode===NULL && $autoCreate && ! isset($this->_overrides['styleCode']) ) {
			$this->styleCode = $this->createStyleCode();
		}
		return $this->styleCode;
	}
	
	protected function createStyleCode() {
		return NULL;
	}

	public function setStyleCode($styleCode) {
		$this->styleCode = $this->validateStyleCode($styleCode);
	}

	protected function validateStyleCode($styleCode) {
		if (!is_string($styleCode)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'styleCode', 'string'));
		}
	
		return $styleCode;
	}

	public function getAlign($autoCreate = TRUE) {
		if ($this->align===NULL && $autoCreate && ! isset($this->_overrides['align']) ) {
			$this->align = $this->createAlign();
		}
		return $this->align;
	}
	
	protected function createAlign() {
		return NULL;
	}

	public function setAlign($align) {
		$this->align = $this->validateAlign($align);
	}

	protected function validateAlign($align) {
		if (!is_string($align)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'align', 'string'));
		}
	
		return $align;
	}

	public function getChar($autoCreate = TRUE) {
		if ($this->char===NULL && $autoCreate && ! isset($this->_overrides['char']) ) {
			$this->char = $this->createChar();
		}
		return $this->char;
	}
	
	protected function createChar() {
		return '';
	}

	public function setChar($char) {
		$this->char = $this->validateChar($char);
	}

	protected function validateChar($char) {
		if (!is_string($char)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'char', 'string'));
		}
	
		return $char;
	}

	public function getCharoff($autoCreate = TRUE) {
		if ($this->charoff===NULL && $autoCreate && ! isset($this->_overrides['charoff']) ) {
			$this->charoff = $this->createCharoff();
		}
		return $this->charoff;
	}
	
	protected function createCharoff() {
		return '';
	}

	public function setCharoff($charoff) {
		$this->charoff = $this->validateCharoff($charoff);
	}

	protected function validateCharoff($charoff) {
		if (!is_string($charoff)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'charoff', 'string'));
		}
	
		return $charoff;
	}

	public function getValign($autoCreate = TRUE) {
		if ($this->valign===NULL && $autoCreate && ! isset($this->_overrides['valign']) ) {
			$this->valign = $this->createValign();
		}
		return $this->valign;
	}
	
	protected function createValign() {
		return NULL;
	}

	public function setValign($valign) {
		$this->valign = $this->validateValign($valign);
	}

	protected function validateValign($valign) {
		if (!is_string($valign)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'valign', 'string'));
		}
	
		return $valign;
	}
} // end class StrucDoc.Thead
