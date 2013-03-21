<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.List")
 */
class StrucDoc.List {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Item", collection="true", name="item")
	 */
	protected $item;

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
	 * @XmlAttribute	(type="string", name="listType")
	 */
	protected $listType;

	public function __construct($caption = NULL, $item = NULL, $iD = NULL, $language = NULL, $styleCode = NULL, $listType = NULL) {
		$this->caption = ($caption===NULL) ? NULL : $this->validateCaption($caption);
		$this->item = ($item===NULL) ? NULL : $this->validateItem($item);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
		$this->listType = ($listType===NULL) ? NULL : $this->validateListType($listType);
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

	public function getItem($autoCreate = TRUE) {
		if ($this->item===NULL && $autoCreate && ! isset($this->_overrides['item']) ) {
			$this->item = $this->createItem();
		}
		return $this->item;
	}
	
	protected function createItem() {
		return array();
	}

	public function setItem($item) {
		$this->item = $this->validateItem($item);
	}

	protected function validateItem($item) {
		$count = count($item);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'item', 1));
		}
		foreach ($item as $entry) {
		}
	
		return $item;
	}

	public function addItem($item) {
		$this->item[] = $this->validateItemType($item);
	}

	protected function validateItemType($item) {
	
		return $item;
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

	public function getListType($autoCreate = TRUE) {
		if ($this->listType===NULL && $autoCreate && ! isset($this->_overrides['listType']) ) {
			$this->listType = $this->createListType();
		}
		return $this->listType;
	}
	
	protected function createListType() {
		return NULL;
	}

	public function setListType($listType) {
		$this->listType = $this->validateListType($listType);
	}

	protected function validateListType($listType) {
		if (!is_string($listType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'listType', 'string'));
		}
	
		return $listType;
	}
} // end class StrucDoc.List
