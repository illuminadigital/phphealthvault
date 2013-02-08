<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Td")
 */
class StrucDoc.Td {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Content", name="content")
	 */
	protected $content;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.LinkHtml", name="linkHtml")
	 */
	protected $linkHtml;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Sub", name="sub")
	 */
	protected $sub;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Sup", name="sup")
	 */
	protected $sup;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Br", name="br")
	 */
	protected $br;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Footnote", name="footnote")
	 */
	protected $footnote;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.FootnoteRef", name="footnoteRef")
	 */
	protected $footnoteRef;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.RenderMultiMedia", name="renderMultiMedia")
	 */
	protected $renderMultiMedia;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Paragraph", name="paragraph")
	 */
	protected $paragraph;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.List", name="list")
	 */
	protected $list;

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
	 * @XmlAttribute	(type="string", name="abbr")
	 */
	protected $abbr;

	/**
	 * @XmlAttribute	(type="string", name="axis")
	 */
	protected $axis;

	/**
	 * @XmlAttribute	(type="string", name="headers")
	 */
	protected $headers;

	/**
	 * @XmlAttribute	(type="string", name="scope")
	 */
	protected $scope;

	/**
	 * @XmlAttribute	(type="string", name="rowspan")
	 */
	protected $rowspan;

	/**
	 * @XmlAttribute	(type="string", name="colspan")
	 */
	protected $colspan;

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

	public function __construct($content = NULL, $linkHtml = NULL, $sub = NULL, $sup = NULL, $br = NULL, $footnote = NULL, $footnoteRef = NULL, $renderMultiMedia = NULL, $paragraph = NULL, $list = NULL, $iD = NULL, $language = NULL, $styleCode = NULL, $abbr = NULL, $axis = NULL, $headers = NULL, $scope = NULL, $rowspan = NULL, $colspan = NULL, $align = NULL, $char = NULL, $charoff = NULL, $valign = NULL) {
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
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
		$this->abbr = ($abbr===NULL) ? NULL : $this->validateAbbr($abbr);
		$this->axis = ($axis===NULL) ? NULL : $this->validateAxis($axis);
		$this->headers = ($headers===NULL) ? NULL : $this->validateHeaders($headers);
		$this->scope = ($scope===NULL) ? NULL : $this->validateScope($scope);
		$this->rowspan = ($rowspan===NULL) ? NULL : $this->validateRowspan($rowspan);
		$this->colspan = ($colspan===NULL) ? NULL : $this->validateColspan($colspan);
		$this->align = ($align===NULL) ? NULL : $this->validateAlign($align);
		$this->char = ($char===NULL) ? NULL : $this->validateChar($char);
		$this->charoff = ($charoff===NULL) ? NULL : $this->validateCharoff($charoff);
		$this->valign = ($valign===NULL) ? NULL : $this->validateValign($valign);
	}

	public function getContent() {
		if ($this->content===NULL) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return NULL;
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
	
		return $content;
	}

	public function getLinkHtml() {
		if ($this->linkHtml===NULL) {
			$this->linkHtml = $this->createLinkHtml();
		}
		return $this->linkHtml;
	}
	
	protected function createLinkHtml() {
		return NULL;
	}

	public function setLinkHtml($linkHtml) {
		$this->linkHtml = $this->validateLinkHtml($linkHtml);
	}

	protected function validateLinkHtml($linkHtml) {
	
		return $linkHtml;
	}

	public function getSub() {
		if ($this->sub===NULL) {
			$this->sub = $this->createSub();
		}
		return $this->sub;
	}
	
	protected function createSub() {
		return NULL;
	}

	public function setSub($sub) {
		$this->sub = $this->validateSub($sub);
	}

	protected function validateSub($sub) {
	
		return $sub;
	}

	public function getSup() {
		if ($this->sup===NULL) {
			$this->sup = $this->createSup();
		}
		return $this->sup;
	}
	
	protected function createSup() {
		return NULL;
	}

	public function setSup($sup) {
		$this->sup = $this->validateSup($sup);
	}

	protected function validateSup($sup) {
	
		return $sup;
	}

	public function getBr() {
		if ($this->br===NULL) {
			$this->br = $this->createBr();
		}
		return $this->br;
	}
	
	protected function createBr() {
		return NULL;
	}

	public function setBr($br) {
		$this->br = $this->validateBr($br);
	}

	protected function validateBr($br) {
	
		return $br;
	}

	public function getFootnote() {
		if ($this->footnote===NULL) {
			$this->footnote = $this->createFootnote();
		}
		return $this->footnote;
	}
	
	protected function createFootnote() {
		return NULL;
	}

	public function setFootnote($footnote) {
		$this->footnote = $this->validateFootnote($footnote);
	}

	protected function validateFootnote($footnote) {
	
		return $footnote;
	}

	public function getFootnoteRef() {
		if ($this->footnoteRef===NULL) {
			$this->footnoteRef = $this->createFootnoteRef();
		}
		return $this->footnoteRef;
	}
	
	protected function createFootnoteRef() {
		return NULL;
	}

	public function setFootnoteRef($footnoteRef) {
		$this->footnoteRef = $this->validateFootnoteRef($footnoteRef);
	}

	protected function validateFootnoteRef($footnoteRef) {
	
		return $footnoteRef;
	}

	public function getRenderMultiMedia() {
		if ($this->renderMultiMedia===NULL) {
			$this->renderMultiMedia = $this->createRenderMultiMedia();
		}
		return $this->renderMultiMedia;
	}
	
	protected function createRenderMultiMedia() {
		return NULL;
	}

	public function setRenderMultiMedia($renderMultiMedia) {
		$this->renderMultiMedia = $this->validateRenderMultiMedia($renderMultiMedia);
	}

	protected function validateRenderMultiMedia($renderMultiMedia) {
	
		return $renderMultiMedia;
	}

	public function getParagraph() {
		if ($this->paragraph===NULL) {
			$this->paragraph = $this->createParagraph();
		}
		return $this->paragraph;
	}
	
	protected function createParagraph() {
		return NULL;
	}

	public function setParagraph($paragraph) {
		$this->paragraph = $this->validateParagraph($paragraph);
	}

	protected function validateParagraph($paragraph) {
	
		return $paragraph;
	}

	public function getList() {
		if ($this->list===NULL) {
			$this->list = $this->createList();
		}
		return $this->list;
	}
	
	protected function createList() {
		return NULL;
	}

	public function setList($list) {
		$this->list = $this->validateList($list);
	}

	protected function validateList($list) {
	
		return $list;
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

	public function getAbbr() {
		if ($this->abbr===NULL) {
			$this->abbr = $this->createAbbr();
		}
		return $this->abbr;
	}
	
	protected function createAbbr() {
		return '';
	}

	public function setAbbr($abbr) {
		$this->abbr = $this->validateAbbr($abbr);
	}

	protected function validateAbbr($abbr) {
		if (!is_string($abbr)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'abbr', 'string'));
		}
	
		return $abbr;
	}

	public function getAxis() {
		if ($this->axis===NULL) {
			$this->axis = $this->createAxis();
		}
		return $this->axis;
	}
	
	protected function createAxis() {
		return '';
	}

	public function setAxis($axis) {
		$this->axis = $this->validateAxis($axis);
	}

	protected function validateAxis($axis) {
		if (!is_string($axis)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'axis', 'string'));
		}
	
		return $axis;
	}

	public function getHeaders() {
		if ($this->headers===NULL) {
			$this->headers = $this->createHeaders();
		}
		return $this->headers;
	}
	
	protected function createHeaders() {
		return NULL;
	}

	public function setHeaders($headers) {
		$this->headers = $this->validateHeaders($headers);
	}

	protected function validateHeaders($headers) {
		if (!is_string($headers)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'headers', 'string'));
		}
	
		return $headers;
	}

	public function getScope() {
		if ($this->scope===NULL) {
			$this->scope = $this->createScope();
		}
		return $this->scope;
	}
	
	protected function createScope() {
		return NULL;
	}

	public function setScope($scope) {
		$this->scope = $this->validateScope($scope);
	}

	protected function validateScope($scope) {
		if (!is_string($scope)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'scope', 'string'));
		}
	
		return $scope;
	}

	public function getRowspan() {
		if ($this->rowspan===NULL) {
			$this->rowspan = $this->createRowspan();
		}
		return $this->rowspan;
	}
	
	protected function createRowspan() {
		return '';
	}

	public function setRowspan($rowspan) {
		$this->rowspan = $this->validateRowspan($rowspan);
	}

	protected function validateRowspan($rowspan) {
		if (!is_string($rowspan)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'rowspan', 'string'));
		}
	
		return $rowspan;
	}

	public function getColspan() {
		if ($this->colspan===NULL) {
			$this->colspan = $this->createColspan();
		}
		return $this->colspan;
	}
	
	protected function createColspan() {
		return '';
	}

	public function setColspan($colspan) {
		$this->colspan = $this->validateColspan($colspan);
	}

	protected function validateColspan($colspan) {
		if (!is_string($colspan)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'colspan', 'string'));
		}
	
		return $colspan;
	}

	public function getAlign() {
		if ($this->align===NULL) {
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

	public function getChar() {
		if ($this->char===NULL) {
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

	public function getCharoff() {
		if ($this->charoff===NULL) {
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

	public function getValign() {
		if ($this->valign===NULL) {
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
} // end class StrucDoc.Td
