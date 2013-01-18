<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Item")
 */
class StrucDoc.Item {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Caption", name="caption")
	 */
	protected $caption;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Content", name="content")
	 */
	protected $content;

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
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Br", name="br")
	 */
	protected $br;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Footnote", name="footnote")
	 */
	protected $footnote;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.FootnoteRef", name="footnoteRef")
	 */
	protected $footnoteRef;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.RenderMultiMedia", name="renderMultiMedia")
	 */
	protected $renderMultiMedia;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Paragraph", name="paragraph")
	 */
	protected $paragraph;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.List", name="list")
	 */
	protected $list;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Table", name="table")
	 */
	protected $table;

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

	public function __construct($caption = NULL, $content = NULL, $linkHtml = NULL, $sub = NULL, $sup = NULL, $br = NULL, $footnote = NULL, $footnoteRef = NULL, $renderMultiMedia = NULL, $paragraph = NULL, $list = NULL, $table = NULL, $iD = NULL, $language = NULL, $styleCode = NULL) {
		$this->caption = ($caption===NULL) ? NULL : $this->validateCaption($caption);
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
		$this->linkHtml = ($linkHtml===NULL) ? NULL : $this->validateLinkHtml($linkHtml);
		$this->sub = ($sub===NULL) ? NULL : $this->validateSub($sub);
		$this->sup = ($sup===NULL) ? NULL : $this->validateSup($sup);
		$this->br = ($br===NULL) ? NULL : $this->validateBr($br);
		$this->footnote = ($footnote===NULL) ? NULL : $this->validateFootnote($footnote);
		$this->footnoteRef = ($footnoteRef===NULL) ? NULL : $this->validateFootnoteRef($footnoteRef);
		$this->renderMultiMedia = ($renderMultiMedia===NULL) ? NULL : $this->validateRenderMultiMedia($renderMultiMedia);
		$this->paragraph = ($paragraph===NULL) ? NULL : $this->validateParagraph($paragraph);
		$this->list = ($list===NULL) ? NULL : $this->validateList($list);
		$this->table = ($table===NULL) ? NULL : $this->validateTable($table);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
	}

	public function getCaption() {
		if ($this->caption===NULL) {
			$this->caption = $this->createCaption();
		}
		return $this->caption;
	}
	
	protected function createCaption() {
		return new \hl7_org\v3\StrucDoc.Caption();
	}

	public function setCaption($caption) {
		$this->caption = $this->validateCaption($caption);
	}

	protected function validateCaption($caption) {
		if ( ! $caption instanceof \hl7_org\v3\StrucDoc.Caption  && ! is_null($caption) ) {
			$caption = new \hl7_org\v3\StrucDoc.Caption ($caption);
		}
	
		return $caption;
	}

	public function getContent() {
		if ($this->content===NULL) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return new \hl7_org\v3\StrucDoc.Content();
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		if ( ! $content instanceof \hl7_org\v3\StrucDoc.Content ) {
			$content = new \hl7_org\v3\StrucDoc.Content ($content);
		}
	
		return $content;
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

	public function getRenderMultiMedia() {
		if ($this->renderMultiMedia===NULL) {
			$this->renderMultiMedia = $this->createRenderMultiMedia();
		}
		return $this->renderMultiMedia;
	}
	
	protected function createRenderMultiMedia() {
		return new \hl7_org\v3\StrucDoc.RenderMultiMedia();
	}

	public function setRenderMultiMedia($renderMultiMedia) {
		$this->renderMultiMedia = $this->validateRenderMultiMedia($renderMultiMedia);
	}

	protected function validateRenderMultiMedia($renderMultiMedia) {
		if ( ! $renderMultiMedia instanceof \hl7_org\v3\StrucDoc.RenderMultiMedia ) {
			$renderMultiMedia = new \hl7_org\v3\StrucDoc.RenderMultiMedia ($renderMultiMedia);
		}
	
		return $renderMultiMedia;
	}

	public function getParagraph() {
		if ($this->paragraph===NULL) {
			$this->paragraph = $this->createParagraph();
		}
		return $this->paragraph;
	}
	
	protected function createParagraph() {
		return new \hl7_org\v3\StrucDoc.Paragraph();
	}

	public function setParagraph($paragraph) {
		$this->paragraph = $this->validateParagraph($paragraph);
	}

	protected function validateParagraph($paragraph) {
		if ( ! $paragraph instanceof \hl7_org\v3\StrucDoc.Paragraph ) {
			$paragraph = new \hl7_org\v3\StrucDoc.Paragraph ($paragraph);
		}
	
		return $paragraph;
	}

	public function getList() {
		if ($this->list===NULL) {
			$this->list = $this->createList();
		}
		return $this->list;
	}
	
	protected function createList() {
		return new \hl7_org\v3\StrucDoc.List();
	}

	public function setList($list) {
		$this->list = $this->validateList($list);
	}

	protected function validateList($list) {
		if ( ! $list instanceof \hl7_org\v3\StrucDoc.List ) {
			$list = new \hl7_org\v3\StrucDoc.List ($list);
		}
	
		return $list;
	}

	public function getTable() {
		if ($this->table===NULL) {
			$this->table = $this->createTable();
		}
		return $this->table;
	}
	
	protected function createTable() {
		return new \hl7_org\v3\StrucDoc.Table();
	}

	public function setTable($table) {
		$this->table = $this->validateTable($table);
	}

	protected function validateTable($table) {
		if ( ! $table instanceof \hl7_org\v3\StrucDoc.Table ) {
			$table = new \hl7_org\v3\StrucDoc.Table ($table);
		}
	
		return $table;
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
} // end class StrucDoc.Item
