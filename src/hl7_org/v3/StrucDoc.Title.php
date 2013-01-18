<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Title")
 */
class StrucDoc.Title {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.TitleContent", name="content")
	 */
	protected $content;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Sub", name="sub")
	 */
	protected $sub;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Sup", name="sup")
	 */
	protected $sup;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Br", name="br")
	 */
	protected $br;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.TitleFootnote", name="footnote")
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

	/**
	 * @XmlAttribute	(type="string", name="mediaType")
	 */
	protected $mediaType;

	public function __construct($content = NULL, $sub = NULL, $sup = NULL, $br = NULL, $footnote = NULL, $footnoteRef = NULL, $iD = NULL, $language = NULL, $styleCode = NULL, $mediaType = NULL) {
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
		$this->sub = ($sub===NULL) ? NULL : $this->validateSub($sub);
		$this->sup = ($sup===NULL) ? NULL : $this->validateSup($sup);
		$this->br = ($br===NULL) ? NULL : $this->validateBr($br);
		$this->footnote = ($footnote===NULL) ? NULL : $this->validateFootnote($footnote);
		$this->footnoteRef = ($footnoteRef===NULL) ? NULL : $this->validateFootnoteRef($footnoteRef);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
		$this->mediaType = ($mediaType===NULL) ? NULL : $this->validateMediaType($mediaType);
	}

	public function getContent() {
		if ($this->content===NULL) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return new \hl7_org\v3\StrucDoc.TitleContent();
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		if ( ! $content instanceof \hl7_org\v3\StrucDoc.TitleContent ) {
			$content = new \hl7_org\v3\StrucDoc.TitleContent ($content);
		}
	
		return $content;
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

	public function getBr() {
		if ($this->br===NULL) {
			$this->br = $this->createBr();
		}
		return $this->br;
	}
	
	protected function createBr() {
		return new \hl7_org\v3\StrucDoc.Br();
	}

	public function setBr($br) {
		$this->br = $this->validateBr($br);
	}

	protected function validateBr($br) {
		if ( ! $br instanceof \hl7_org\v3\StrucDoc.Br ) {
			$br = new \hl7_org\v3\StrucDoc.Br ($br);
		}
	
		return $br;
	}

	public function getFootnote() {
		if ($this->footnote===NULL) {
			$this->footnote = $this->createFootnote();
		}
		return $this->footnote;
	}
	
	protected function createFootnote() {
		return new \hl7_org\v3\StrucDoc.TitleFootnote();
	}

	public function setFootnote($footnote) {
		$this->footnote = $this->validateFootnote($footnote);
	}

	protected function validateFootnote($footnote) {
		if ( ! $footnote instanceof \hl7_org\v3\StrucDoc.TitleFootnote ) {
			$footnote = new \hl7_org\v3\StrucDoc.TitleFootnote ($footnote);
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

	public function getMediaType() {
		if ($this->mediaType===NULL) {
			$this->mediaType = $this->createMediaType();
		}
		return $this->mediaType;
	}
	
	protected function createMediaType() {
		return '';
	}

	public function setMediaType($mediaType) {
		$this->mediaType = $this->validateMediaType($mediaType);
	}

	protected function validateMediaType($mediaType) {
		if (!is_string($mediaType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mediaType', 'string'));
		}
	
		return $mediaType;
	}
} // end class StrucDoc.Title
