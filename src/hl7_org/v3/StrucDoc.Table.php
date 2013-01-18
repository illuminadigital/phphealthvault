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
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Caption", name="caption")
	 */
	protected $caption;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Col", collection="true", name="col")
	 */
	protected $col;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Colgroup", collection="true", name="colgroup")
	 */
	protected $colgroup;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Thead", name="thead")
	 */
	protected $thead;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Tfoot", name="tfoot")
	 */
	protected $tfoot;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Tbody", collection="true", name="tbody")
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

	public function getCol() {
		if ($this->col===NULL) {
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
		if ( ! $col instanceof \hl7_org\v3\StrucDoc.Col  && ! is_null($col) ) {
			$col = new \hl7_org\v3\StrucDoc.Col ($col);
		}
		$count = count($col);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'col', 0));
		}
		foreach ($col as $entry) {
			if (!($entry instanceof StrucDoc.Col)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'col', 'StrucDoc.Col'));
			}
		}
	
		return $col;
	}

	public function addCol($col) {
		$this->col[] = $col;
	}

	public function getColgroup() {
		if ($this->colgroup===NULL) {
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
		if ( ! $colgroup instanceof \hl7_org\v3\StrucDoc.Colgroup  && ! is_null($colgroup) ) {
			$colgroup = new \hl7_org\v3\StrucDoc.Colgroup ($colgroup);
		}
		$count = count($colgroup);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'colgroup', 0));
		}
		foreach ($colgroup as $entry) {
			if (!($entry instanceof StrucDoc.Colgroup)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'colgroup', 'StrucDoc.Colgroup'));
			}
		}
	
		return $colgroup;
	}

	public function addColgroup($colgroup) {
		$this->colgroup[] = $colgroup;
	}

	public function getThead() {
		if ($this->thead===NULL) {
			$this->thead = $this->createThead();
		}
		return $this->thead;
	}
	
	protected function createThead() {
		return new \hl7_org\v3\StrucDoc.Thead();
	}

	public function setThead($thead) {
		$this->thead = $this->validateThead($thead);
	}

	protected function validateThead($thead) {
		if ( ! $thead instanceof \hl7_org\v3\StrucDoc.Thead  && ! is_null($thead) ) {
			$thead = new \hl7_org\v3\StrucDoc.Thead ($thead);
		}
	
		return $thead;
	}

	public function getTfoot() {
		if ($this->tfoot===NULL) {
			$this->tfoot = $this->createTfoot();
		}
		return $this->tfoot;
	}
	
	protected function createTfoot() {
		return new \hl7_org\v3\StrucDoc.Tfoot();
	}

	public function setTfoot($tfoot) {
		$this->tfoot = $this->validateTfoot($tfoot);
	}

	protected function validateTfoot($tfoot) {
		if ( ! $tfoot instanceof \hl7_org\v3\StrucDoc.Tfoot  && ! is_null($tfoot) ) {
			$tfoot = new \hl7_org\v3\StrucDoc.Tfoot ($tfoot);
		}
	
		return $tfoot;
	}

	public function getTbody() {
		if ($this->tbody===NULL) {
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
		if ( ! $tbody instanceof \hl7_org\v3\StrucDoc.Tbody ) {
			$tbody = new \hl7_org\v3\StrucDoc.Tbody ($tbody);
		}
		$count = count($tbody);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'tbody', 1));
		}
		foreach ($tbody as $entry) {
			if (!($entry instanceof StrucDoc.Tbody)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'tbody', 'StrucDoc.Tbody'));
			}
		}
	
		return $tbody;
	}

	public function addTbody($tbody) {
		$this->tbody[] = $tbody;
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

	public function getSummary() {
		if ($this->summary===NULL) {
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

	public function getWidth() {
		if ($this->width===NULL) {
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

	public function getBorder() {
		if ($this->border===NULL) {
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

	public function getFrame() {
		if ($this->frame===NULL) {
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

	public function getRules() {
		if ($this->rules===NULL) {
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

	public function getCellspacing() {
		if ($this->cellspacing===NULL) {
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

	public function getCellpadding() {
		if ($this->cellpadding===NULL) {
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
