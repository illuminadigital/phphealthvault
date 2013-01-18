<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Caption")
 */
class StrucDoc.Caption {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.LinkHtml", name="linkHtml")
	 */
	protected $linkHtml;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Sub", name="sub")
	 */
	protected $sub;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Sup", name="sup")
	 */
	protected $sup;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Footnote", name="footnote")
	 */
	protected $footnote;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.FootnoteRef", name="footnoteRef")
	 */
	protected $footnoteRef;

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

	public function __construct($linkHtml = NULL, $sub = NULL, $sup = NULL, $footnote = NULL, $footnoteRef = NULL, $iD = NULL, $language = NULL, $styleCode = NULL) {
		$this->linkHtml = ($linkHtml===NULL) ? NULL : $this->validateLinkHtml($linkHtml);
		$this->sub = ($sub===NULL) ? NULL : $this->validateSub($sub);
		$this->sup = ($sup===NULL) ? NULL : $this->validateSup($sup);
		$this->footnote = ($footnote===NULL) ? NULL : $this->validateFootnote($footnote);
		$this->footnoteRef = ($footnoteRef===NULL) ? NULL : $this->validateFootnoteRef($footnoteRef);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
	}

	public function getLinkHtml() {
		if ($this->linkHtml===NULL) {
			$this->linkHtml = $this->createLinkHtml();
		}
		return $this->linkHtml;
	}
	
	protected function createLinkHtml() {
		return new \hl7_org\v3\StrucDoc.LinkHtml();
	}

	public function setLinkHtml($linkHtml) {
		$this->linkHtml = $this->validateLinkHtml($linkHtml);
	}

	protected function validateLinkHtml($linkHtml) {
		if ( ! $linkHtml instanceof \hl7_org\v3\StrucDoc.LinkHtml ) {
			$linkHtml = new \hl7_org\v3\StrucDoc.LinkHtml ($linkHtml);
		}
	
		return $linkHtml;
	}

	public function getSub() {
		if ($this->sub===NULL) {
			$this->sub = $this->createSub();
		}
		return $this->sub;
	}
	
	protected function createSub() {
		return new \hl7_org\v3\StrucDoc.Sub();
	}

	public function setSub($sub) {
		$this->sub = $this->validateSub($sub);
	}

	protected function validateSub($sub) {
		if ( ! $sub instanceof \hl7_org\v3\StrucDoc.Sub ) {
			$sub = new \hl7_org\v3\StrucDoc.Sub ($sub);
		}
	
		return $sub;
	}

	public function getSup() {
		if ($this->sup===NULL) {
			$this->sup = $this->createSup();
		}
		return $this->sup;
	}
	
	protected function createSup() {
		return new \hl7_org\v3\StrucDoc.Sup();
	}

	public function setSup($sup) {
		$this->sup = $this->validateSup($sup);
	}

	protected function validateSup($sup) {
		if ( ! $sup instanceof \hl7_org\v3\StrucDoc.Sup ) {
			$sup = new \hl7_org\v3\StrucDoc.Sup ($sup);
		}
	
		return $sup;
	}

	public function getFootnote() {
		if ($this->footnote===NULL) {
			$this->footnote = $this->createFootnote();
		}
		return $this->footnote;
	}
	
	protected function createFootnote() {
		return new \hl7_org\v3\StrucDoc.Footnote();
	}

	public function setFootnote($footnote) {
		$this->footnote = $this->validateFootnote($footnote);
	}

	protected function validateFootnote($footnote) {
		if ( ! $footnote instanceof \hl7_org\v3\StrucDoc.Footnote ) {
			$footnote = new \hl7_org\v3\StrucDoc.Footnote ($footnote);
		}
	
		return $footnote;
	}

	public function getFootnoteRef() {
		if ($this->footnoteRef===NULL) {
			$this->footnoteRef = $this->createFootnoteRef();
		}
		return $this->footnoteRef;
	}
	
	protected function createFootnoteRef() {
		return new \hl7_org\v3\StrucDoc.FootnoteRef();
	}

	public function setFootnoteRef($footnoteRef) {
		$this->footnoteRef = $this->validateFootnoteRef($footnoteRef);
	}

	protected function validateFootnoteRef($footnoteRef) {
		if ( ! $footnoteRef instanceof \hl7_org\v3\StrucDoc.FootnoteRef ) {
			$footnoteRef = new \hl7_org\v3\StrucDoc.FootnoteRef ($footnoteRef);
		}
	
		return $footnoteRef;
	}

	public function getID() {
		if ($this->iD===NULL) {
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

	public function getLanguage() {
		if ($this->language===NULL) {
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

	public function getStyleCode() {
		if ($this->styleCode===NULL) {
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
} // end class StrucDoc.Caption
