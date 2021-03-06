<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Table")
 */
class StrucDoc.Table {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Caption", name="caption")
	 */
	protected $caption;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Col", collection="true", name="col")
	 */
	protected $col;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Colgroup", collection="true", name="colgroup")
	 */
	protected $colgroup;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Thead", name="thead")
	 */
	protected $thead;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Tfoot", name="tfoot")
	 */
	protected $tfoot;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Tbody", collection="true", name="tbody")
	 */
	protected $tbody;

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
	 * @XmlAttribute	(type="string", name="summary")
	 */
	protected $summary;

	/**
	 * @XmlAttribute	(type="string", name="width")
	 */
	protected $width;

	/**
	 * @XmlAttribute	(type="string", name="border")
	 */
	protected $border;

	/**
	 * @XmlAttribute	(type="string", name="frame")
	 */
	protected $frame;

	/**
	 * @XmlAttribute	(type="string", name="rules")
	 */
	protected $rules;

	/**
	 * @XmlAttribute	(type="string", name="cellspacing")
	 */
	protected $cellspacing;

	/**
	 * @XmlAttribute	(type="string", name="cellpadding")
	 */
	protected $cellpadding;

	public function __construct($caption = NULL, $col = NULL, $colgroup = NULL, $thead = NULL, $tfoot = NULL, $tbody = NULL, $iD = NULL, $language = NULL, $styleCode = NULL, $summary = NULL, $width = NULL, $border = NULL, $frame = NULL, $rules = NULL, $cellspacing = NULL, $cellpadding = NULL) {
		$this->caption = ($caption===NULL) ? NULL : $this->validateCaption($caption);
		$this->col = ($col===NULL) ? NULL : $this->validateCol($col);
		$this->colgroup = ($colgroup===NULL) ? NULL : $this->validateColgroup($colgroup);
		$this->thead = ($thead===NULL) ? NULL : $this->validateThead($thead);
		$this->tfoot = ($tfoot===NULL) ? NULL : $this->validateTfoot($tfoot);
		$this->tbody = ($tbody===NULL) ? NULL : $this->validateTbody($tbody);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
		$this->summary = ($summary===NULL) ? NULL : $this->validateSummary($summary);
		$this->width = ($width===NULL) ? NULL : $this->validateWidth($width);
		$this->border = ($border===NULL) ? NULL : $this->validateBorder($border);
		$this->frame = ($frame===NULL) ? NULL : $this->validateFrame($frame);
		$this->rules = ($rules===NULL) ? NULL : $this->validateRules($rules);
		$this->cellspacing = ($cellspacing===NULL) ? NULL : $this->validateCellspacing($cellspacing);
		$this->cellpadding = ($cellpadding===NULL) ? NULL : $this->validateCellpadding($cellpadding);
	}

	public function getCaption($autoCreate = TRUE) {
		if ($this->caption===NULL && $autoCreate && ! isset($this->_overrides['caption']) ) {
			$this->caption = $this->createCaption();
		}
		return $this->caption;
	}
	
	protected function createCaption() {
		return NULL;
	}

	public function setCaption($caption) {
		$this->caption = $this->validateCaption($caption);
	}

	protected function validateCaption($caption) {
	
		return $caption;
	}

	public function getCol($autoCreate = TRUE) {
		if ($this->col===NULL && $autoCreate && ! isset($this->_overrides['col']) ) {
			$this->col = $this->createCol();
		}
		return $this->col;
	}
	
	protected function createCol() {
		return array();
	}

	public function setCol($col) {
		$this->col = $this->validateCol($col);
	}

	protected function validateCol($col) {
		$count = count($col);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'col', 0));
		}
		if ( ! empty($col) ) {
			foreach ($col as $entry) {
			}
		}
	
		return $col;
	}

	public function addCol($col) {
		$this->col[] = $this->validateColType($col);
	}

	protected function validateColType($col) {
	
		return $col;
	}

	public function getColgroup($autoCreate = TRUE) {
		if ($this->colgroup===NULL && $autoCreate && ! isset($this->_overrides['colgroup']) ) {
			$this->colgroup = $this->createColgroup();
		}
		return $this->colgroup;
	}
	
	protected function createColgroup() {
		return array();
	}

	public function setColgroup($colgroup) {
		$this->colgroup = $this->validateColgroup($colgroup);
	}

	protected function validateColgroup($colgroup) {
		$count = count($colgroup);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'colgroup', 0));
		}
		if ( ! empty($colgroup) ) {
			foreach ($colgroup as $entry) {
			}
		}
	
		return $colgroup;
	}

	public function addColgroup($colgroup) {
		$this->colgroup[] = $this->validateColgroupType($colgroup);
	}

	protected function validateColgroupType($colgroup) {
	
		return $colgroup;
	}

	public function getThead($autoCreate = TRUE) {
		if ($this->thead===NULL && $autoCreate && ! isset($this->_overrides['thead']) ) {
			$this->thead = $this->createThead();
		}
		return $this->thead;
	}
	
	protected function createThead() {
		return NULL;
	}

	public function setThead($thead) {
		$this->thead = $this->validateThead($thead);
	}

	protected function validateThead($thead) {
	
		return $thead;
	}

	public function getTfoot($autoCreate = TRUE) {
		if ($this->tfoot===NULL && $autoCreate && ! isset($this->_overrides['tfoot']) ) {
			$this->tfoot = $this->createTfoot();
		}
		return $this->tfoot;
	}
	
	protected function createTfoot() {
		return NULL;
	}

	public function setTfoot($tfoot) {
		$this->tfoot = $this->validateTfoot($tfoot);
	}

	protected function validateTfoot($tfoot) {
	
		return $tfoot;
	}

	public function getTbody($autoCreate = TRUE) {
		if ($this->tbody===NULL && $autoCreate && ! isset($this->_overrides['tbody']) ) {
			$this->tbody = $this->createTbody();
		}
		return $this->tbody;
	}
	
	protected function createTbody() {
		return array();
	}

	public function setTbody($tbody) {
		$this->tbody = $this->validateTbody($tbody);
	}

	protected function validateTbody($tbody) {
		$count = count($tbody);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'tbody', 1));
		}
		foreach ($tbody as $entry) {
		}
	
		return $tbody;
	}

	public function addTbody($tbody) {
		$this->tbody[] = $this->validateTbodyType($tbody);
	}

	protected function validateTbodyType($tbody) {
	
		return $tbody;
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

	public function getSummary($autoCreate = TRUE) {
		if ($this->summary===NULL && $autoCreate && ! isset($this->_overrides['summary']) ) {
			$this->summary = $this->createSummary();
		}
		return $this->summary;
	}
	
	protected function createSummary() {
		return '';
	}

	public function setSummary($summary) {
		$this->summary = $this->validateSummary($summary);
	}

	protected function validateSummary($summary) {
		if (!is_string($summary)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'summary', 'string'));
		}
	
		return $summary;
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

	public function getBorder($autoCreate = TRUE) {
		if ($this->border===NULL && $autoCreate && ! isset($this->_overrides['border']) ) {
			$this->border = $this->createBorder();
		}
		return $this->border;
	}
	
	protected function createBorder() {
		return '';
	}

	public function setBorder($border) {
		$this->border = $this->validateBorder($border);
	}

	protected function validateBorder($border) {
		if (!is_string($border)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'border', 'string'));
		}
	
		return $border;
	}

	public function getFrame($autoCreate = TRUE) {
		if ($this->frame===NULL && $autoCreate && ! isset($this->_overrides['frame']) ) {
			$this->frame = $this->createFrame();
		}
		return $this->frame;
	}
	
	protected function createFrame() {
		return NULL;
	}

	public function setFrame($frame) {
		$this->frame = $this->validateFrame($frame);
	}

	protected function validateFrame($frame) {
		if (!is_string($frame)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'frame', 'string'));
		}
	
		return $frame;
	}

	public function getRules($autoCreate = TRUE) {
		if ($this->rules===NULL && $autoCreate && ! isset($this->_overrides['rules']) ) {
			$this->rules = $this->createRules();
		}
		return $this->rules;
	}
	
	protected function createRules() {
		return NULL;
	}

	public function setRules($rules) {
		$this->rules = $this->validateRules($rules);
	}

	protected function validateRules($rules) {
		if (!is_string($rules)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'rules', 'string'));
		}
	
		return $rules;
	}

	public function getCellspacing($autoCreate = TRUE) {
		if ($this->cellspacing===NULL && $autoCreate && ! isset($this->_overrides['cellspacing']) ) {
			$this->cellspacing = $this->createCellspacing();
		}
		return $this->cellspacing;
	}
	
	protected function createCellspacing() {
		return '';
	}

	public function setCellspacing($cellspacing) {
		$this->cellspacing = $this->validateCellspacing($cellspacing);
	}

	protected function validateCellspacing($cellspacing) {
		if (!is_string($cellspacing)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'cellspacing', 'string'));
		}
	
		return $cellspacing;
	}

	public function getCellpadding($autoCreate = TRUE) {
		if ($this->cellpadding===NULL && $autoCreate && ! isset($this->_overrides['cellpadding']) ) {
			$this->cellpadding = $this->createCellpadding();
		}
		return $this->cellpadding;
	}
	
	protected function createCellpadding() {
		return '';
	}

	public function setCellpadding($cellpadding) {
		$this->cellpadding = $this->validateCellpadding($cellpadding);
	}

	protected function validateCellpadding($cellpadding) {
		if (!is_string($cellpadding)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'cellpadding', 'string'));
		}
	
		return $cellpadding;
	}
} // end class StrucDoc.Table
