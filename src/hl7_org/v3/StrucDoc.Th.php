<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Th")
 */
class StrucDoc.Th {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Content", collection="true", name="content")
	 */
	protected $content;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.LinkHtml", collection="true", name="linkHtml")
	 */
	protected $linkHtml;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Sub", collection="true", name="sub")
	 */
	protected $sub;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Sup", collection="true", name="sup")
	 */
	protected $sup;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Br", collection="true", name="br")
	 */
	protected $br;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Footnote", collection="true", name="footnote")
	 */
	protected $footnote;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.FootnoteRef", collection="true", name="footnoteRef")
	 */
	protected $footnoteRef;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.RenderMultiMedia", collection="true", name="renderMultiMedia")
	 */
	protected $renderMultiMedia;

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

	public function __construct($content = NULL, $linkHtml = NULL, $sub = NULL, $sup = NULL, $br = NULL, $footnote = NULL, $footnoteRef = NULL, $renderMultiMedia = NULL, $iD = NULL, $language = NULL, $styleCode = NULL, $abbr = NULL, $axis = NULL, $headers = NULL, $scope = NULL, $rowspan = NULL, $colspan = NULL, $align = NULL, $char = NULL, $charoff = NULL, $valign = NULL) {
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
		$this->linkHtml = ($linkHtml===NULL) ? NULL : $this->validateLinkHtml($linkHtml);
		$this->sub = ($sub===NULL) ? NULL : $this->validateSub($sub);
		$this->sup = ($sup===NULL) ? NULL : $this->validateSup($sup);
		$this->br = ($br===NULL) ? NULL : $this->validateBr($br);
		$this->footnote = ($footnote===NULL) ? NULL : $this->validateFootnote($footnote);
		$this->footnoteRef = ($footnoteRef===NULL) ? NULL : $this->validateFootnoteRef($footnoteRef);
		$this->renderMultiMedia = ($renderMultiMedia===NULL) ? NULL : $this->validateRenderMultiMedia($renderMultiMedia);
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

	public function getContent($autoCreate = TRUE) {
		if ($this->content===NULL && $autoCreate && ! isset($this->_overrides['content']) ) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return array();
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		$count = count($content);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'content', 0));
		}
		foreach ($content as $entry) {
		}
	
		return $content;
	}

	public function addContent($content) {
		$this->content[] = $this->validateContentType($content);
	}

	protected function validateContentType($content) {
	
		return $content;
	}

	public function getLinkHtml($autoCreate = TRUE) {
		if ($this->linkHtml===NULL && $autoCreate && ! isset($this->_overrides['linkHtml']) ) {
			$this->linkHtml = $this->createLinkHtml();
		}
		return $this->linkHtml;
	}
	
	protected function createLinkHtml() {
		return array();
	}

	public function setLinkHtml($linkHtml) {
		$this->linkHtml = $this->validateLinkHtml($linkHtml);
	}

	protected function validateLinkHtml($linkHtml) {
		$count = count($linkHtml);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'linkHtml', 0));
		}
		foreach ($linkHtml as $entry) {
		}
	
		return $linkHtml;
	}

	public function addLinkHtml($linkHtml) {
		$this->linkHtml[] = $this->validateLinkHtmlType($linkHtml);
	}

	protected function validateLinkHtmlType($linkHtml) {
	
		return $linkHtml;
	}

	public function getSub($autoCreate = TRUE) {
		if ($this->sub===NULL && $autoCreate && ! isset($this->_overrides['sub']) ) {
			$this->sub = $this->createSub();
		}
		return $this->sub;
	}
	
	protected function createSub() {
		return array();
	}

	public function setSub($sub) {
		$this->sub = $this->validateSub($sub);
	}

	protected function validateSub($sub) {
		$count = count($sub);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sub', 0));
		}
		foreach ($sub as $entry) {
		}
	
		return $sub;
	}

	public function addSub($sub) {
		$this->sub[] = $this->validateSubType($sub);
	}

	protected function validateSubType($sub) {
	
		return $sub;
	}

	public function getSup($autoCreate = TRUE) {
		if ($this->sup===NULL && $autoCreate && ! isset($this->_overrides['sup']) ) {
			$this->sup = $this->createSup();
		}
		return $this->sup;
	}
	
	protected function createSup() {
		return array();
	}

	public function setSup($sup) {
		$this->sup = $this->validateSup($sup);
	}

	protected function validateSup($sup) {
		$count = count($sup);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sup', 0));
		}
		foreach ($sup as $entry) {
		}
	
		return $sup;
	}

	public function addSup($sup) {
		$this->sup[] = $this->validateSupType($sup);
	}

	protected function validateSupType($sup) {
	
		return $sup;
	}

	public function getBr($autoCreate = TRUE) {
		if ($this->br===NULL && $autoCreate && ! isset($this->_overrides['br']) ) {
			$this->br = $this->createBr();
		}
		return $this->br;
	}
	
	protected function createBr() {
		return array();
	}

	public function setBr($br) {
		$this->br = $this->validateBr($br);
	}

	protected function validateBr($br) {
		$count = count($br);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'br', 0));
		}
		foreach ($br as $entry) {
		}
	
		return $br;
	}

	public function addBr($br) {
		$this->br[] = $this->validateBrType($br);
	}

	protected function validateBrType($br) {
	
		return $br;
	}

	public function getFootnote($autoCreate = TRUE) {
		if ($this->footnote===NULL && $autoCreate && ! isset($this->_overrides['footnote']) ) {
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

	public function getFootnoteRef($autoCreate = TRUE) {
		if ($this->footnoteRef===NULL && $autoCreate && ! isset($this->_overrides['footnoteRef']) ) {
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

	public function getRenderMultiMedia($autoCreate = TRUE) {
		if ($this->renderMultiMedia===NULL && $autoCreate && ! isset($this->_overrides['renderMultiMedia']) ) {
			$this->renderMultiMedia = $this->createRenderMultiMedia();
		}
		return $this->renderMultiMedia;
	}
	
	protected function createRenderMultiMedia() {
		return array();
	}

	public function setRenderMultiMedia($renderMultiMedia) {
		$this->renderMultiMedia = $this->validateRenderMultiMedia($renderMultiMedia);
	}

	protected function validateRenderMultiMedia($renderMultiMedia) {
		$count = count($renderMultiMedia);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'renderMultiMedia', 0));
		}
		foreach ($renderMultiMedia as $entry) {
		}
	
		return $renderMultiMedia;
	}

	public function addRenderMultiMedia($renderMultiMedia) {
		$this->renderMultiMedia[] = $this->validateRenderMultiMediaType($renderMultiMedia);
	}

	protected function validateRenderMultiMediaType($renderMultiMedia) {
	
		return $renderMultiMedia;
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

	public function getAbbr($autoCreate = TRUE) {
		if ($this->abbr===NULL && $autoCreate && ! isset($this->_overrides['abbr']) ) {
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

	public function getAxis($autoCreate = TRUE) {
		if ($this->axis===NULL && $autoCreate && ! isset($this->_overrides['axis']) ) {
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

	public function getHeaders($autoCreate = TRUE) {
		if ($this->headers===NULL && $autoCreate && ! isset($this->_overrides['headers']) ) {
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

	public function getScope($autoCreate = TRUE) {
		if ($this->scope===NULL && $autoCreate && ! isset($this->_overrides['scope']) ) {
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

	public function getRowspan($autoCreate = TRUE) {
		if ($this->rowspan===NULL && $autoCreate && ! isset($this->_overrides['rowspan']) ) {
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

	public function getColspan($autoCreate = TRUE) {
		if ($this->colspan===NULL && $autoCreate && ! isset($this->_overrides['colspan']) ) {
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
} // end class StrucDoc.Th
