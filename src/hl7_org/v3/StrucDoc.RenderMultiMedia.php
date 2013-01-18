<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.RenderMultiMedia")
 */
class StrucDoc.RenderMultiMedia {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\StrucDoc.Caption", name="caption")
	 */
	protected $caption;

	/**
	 * @XmlAttribute	(type="string", name="referencedObject")
	 */
	protected $referencedObject;

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

	public function __construct($caption = NULL, $referencedObject = NULL, $iD = NULL, $language = NULL, $styleCode = NULL) {
		$this->caption = ($caption===NULL) ? NULL : $this->validateCaption($caption);
		$this->referencedObject = ($referencedObject===NULL) ? NULL : $this->validateReferencedObject($referencedObject);
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

	public function getReferencedObject() {
		if ($this->referencedObject===NULL) {
			$this->referencedObject = $this->createReferencedObject();
		}
		return $this->referencedObject;
	}
	
	protected function createReferencedObject() {
		return NULL;
	}

	public function setReferencedObject($referencedObject) {
		$this->referencedObject = $this->validateReferencedObject($referencedObject);
	}

	protected function validateReferencedObject($referencedObject) {
		if (!is_string($referencedObject)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'referencedObject', 'string'));
		}
	
		return $referencedObject;
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
} // end class StrucDoc.RenderMultiMedia
