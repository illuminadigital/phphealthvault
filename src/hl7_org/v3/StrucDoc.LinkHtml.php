<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.LinkHtml")
 */
class StrucDoc.LinkHtml {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Footnote", collection="true", name="footnote")
	 */
	protected $footnote;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.FootnoteRef", collection="true", name="footnoteRef")
	 */
	protected $footnoteRef;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlAttribute	(type="string", name="href")
	 */
	protected $href;

	/**
	 * @XmlAttribute	(type="string", name="rel")
	 */
	protected $rel;

	/**
	 * @XmlAttribute	(type="string", name="rev")
	 */
	protected $rev;

	/**
	 * @XmlAttribute	(type="string", name="title")
	 */
	protected $title;

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

	public function __construct($footnote = NULL, $footnoteRef = NULL, $name = NULL, $href = NULL, $rel = NULL, $rev = NULL, $title = NULL, $iD = NULL, $language = NULL, $styleCode = NULL) {
		$this->footnote = ($footnote===NULL) ? NULL : $this->validateFootnote($footnote);
		$this->footnoteRef = ($footnoteRef===NULL) ? NULL : $this->validateFootnoteRef($footnoteRef);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->href = ($href===NULL) ? NULL : $this->validateHref($href);
		$this->rel = ($rel===NULL) ? NULL : $this->validateRel($rel);
		$this->rev = ($rev===NULL) ? NULL : $this->validateRev($rev);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
	}

	public function getFootnote() {
		if ($this->footnote===NULL) {
			$this->footnote = $this->createFootnote();
		}
		return $this->footnote;
	}
	
	protected function createFootnote() {
		return array();
	}

	public function setFootnote($footnote) {
		$this->footnote = $this->validateFootnote($footnote);
	}

	protected function validateFootnote($footnote) {
		$count = count($footnote);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'footnote', 0));
		}
		foreach ($footnote as $entry) {
		}
	
		return $footnote;
	}

	public function addFootnote($footnote) {
		$this->footnote[] = $this->validateFootnoteType($footnote);
	}

	protected function validateFootnoteType($footnote) {
	
		return $footnote;
	}

	public function getFootnoteRef() {
		if ($this->footnoteRef===NULL) {
			$this->footnoteRef = $this->createFootnoteRef();
		}
		return $this->footnoteRef;
	}
	
	protected function createFootnoteRef() {
		return array();
	}

	public function setFootnoteRef($footnoteRef) {
		$this->footnoteRef = $this->validateFootnoteRef($footnoteRef);
	}

	protected function validateFootnoteRef($footnoteRef) {
		$count = count($footnoteRef);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'footnoteRef', 0));
		}
		foreach ($footnoteRef as $entry) {
		}
	
		return $footnoteRef;
	}

	public function addFootnoteRef($footnoteRef) {
		$this->footnoteRef[] = $this->validateFootnoteRefType($footnoteRef);
	}

	protected function validateFootnoteRefType($footnoteRef) {
	
		return $footnoteRef;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getHref() {
		if ($this->href===NULL) {
			$this->href = $this->createHref();
		}
		return $this->href;
	}
	
	protected function createHref() {
		return '';
	}

	public function setHref($href) {
		$this->href = $this->validateHref($href);
	}

	protected function validateHref($href) {
		if (!is_string($href)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'href', 'string'));
		}
	
		return $href;
	}

	public function getRel() {
		if ($this->rel===NULL) {
			$this->rel = $this->createRel();
		}
		return $this->rel;
	}
	
	protected function createRel() {
		return '';
	}

	public function setRel($rel) {
		$this->rel = $this->validateRel($rel);
	}

	protected function validateRel($rel) {
		if (!is_string($rel)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'rel', 'string'));
		}
	
		return $rel;
	}

	public function getRev() {
		if ($this->rev===NULL) {
			$this->rev = $this->createRev();
		}
		return $this->rev;
	}
	
	protected function createRev() {
		return '';
	}

	public function setRev($rev) {
		$this->rev = $this->validateRev($rev);
	}

	protected function validateRev($rev) {
		if (!is_string($rev)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'rev', 'string'));
		}
	
		return $rev;
	}

	public function getTitle() {
		if ($this->title===NULL) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return '';
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if (!is_string($title)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'title', 'string'));
		}
	
		return $title;
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
} // end class StrucDoc.LinkHtml
