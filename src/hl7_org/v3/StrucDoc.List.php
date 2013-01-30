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
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Caption", name="caption")
	 */
	protected $caption;

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Item", collection="true", name="item")
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

	public function getItem() {
		if ($this->item===NULL) {
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
		if ( ! is_array ($item) ) {
			$item = array($item);
		}
		$count = count($item);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'item', 1));
		}
		foreach ($item as $entry) {
			if (!($entry instanceof StrucDoc.Item)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'item', 'StrucDoc.Item'));
			}
		}
	
		return $item;
	}

	public function addItem($item) {
		$this->item[] = $item;
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

	public function getListType() {
		if ($this->listType===NULL) {
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
