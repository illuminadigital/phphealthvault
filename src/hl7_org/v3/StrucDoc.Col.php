<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Col")
 */
class StrucDoc.Col {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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
	 * @XmlAttribute	(type="string", name="span")
	 */
	protected $span;

	/**
	 * @XmlAttribute	(type="string", name="width")
	 */
	protected $width;

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

	public function __construct($iD = NULL, $language = NULL, $styleCode = NULL, $span = NULL, $width = NULL, $align = NULL, $char = NULL, $charoff = NULL, $valign = NULL) {
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
		$this->span = ($span===NULL) ? NULL : $this->validateSpan($span);
		$this->width = ($width===NULL) ? NULL : $this->validateWidth($width);
		$this->align = ($align===NULL) ? NULL : $this->validateAlign($align);
		$this->char = ($char===NULL) ? NULL : $this->validateChar($char);
		$this->charoff = ($charoff===NULL) ? NULL : $this->validateCharoff($charoff);
		$this->valign = ($valign===NULL) ? NULL : $this->validateValign($valign);
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

	public function getSpan($autoCreate = TRUE) {
		if ($this->span===NULL && $autoCreate && ! isset($this->_overrides['span']) ) {
			$this->span = $this->createSpan();
		}
		return $this->span;
	}
	
	protected function createSpan() {
		return '';
	}

	public function setSpan($span) {
		$this->span = $this->validateSpan($span);
	}

	protected function validateSpan($span) {
		if (!is_string($span)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'span', 'string'));
		}
	
		return $span;
	}

	public function getWidth($autoCreate = TRUE) {
		if ($this->width===NULL && $autoCreate && ! isset($this->_overrides['width']) ) {
			$this->width = $this->createWidth();
		}
		return $this->width;
	}
	
	protected function createWidth() {
		return '';
	}

	public function setWidth($width) {
		$this->width = $this->validateWidth($width);
	}

	protected function validateWidth($width) {
		if (!is_string($width)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'width', 'string'));
		}
	
		return $width;
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
} // end class StrucDoc.Col
