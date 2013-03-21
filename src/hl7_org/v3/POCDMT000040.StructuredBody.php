<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.StructuredBody")
 */
class POCDMT000040.StructuredBody {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", collection="true", name="realmCode")
	 */
	protected $realmCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.InfrastructureRoot.typeId", name="typeId")
	 */
	protected $typeId;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="templateId")
	 */
	protected $templateId;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="confidentialityCode")
	 */
	protected $confidentialityCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Component3", collection="true", name="component")
	 */
	protected $component;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	/**
	 * @XmlAttribute	(type="string", name="moodCode")
	 */
	protected $moodCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $confidentialityCode = NULL, $languageCode = NULL, $component = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->confidentialityCode = ($confidentialityCode===NULL) ? NULL : $this->validateConfidentialityCode($confidentialityCode);
		$this->languageCode = ($languageCode===NULL) ? NULL : $this->validateLanguageCode($languageCode);
		$this->component = ($component===NULL) ? NULL : $this->validateComponent($component);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
		$this->moodCode = ($moodCode===NULL) ? NULL : $this->validateMoodCode($moodCode);
	}

	public function getRealmCode($autoCreate = TRUE) {
		if ($this->realmCode===NULL && $autoCreate && ! isset($this->_overrides['realmCode']) ) {
			$this->realmCode = $this->createRealmCode();
		}
		return $this->realmCode;
	}
	
	protected function createRealmCode() {
		return array();
	}

	public function setRealmCode($realmCode) {
		$this->realmCode = $this->validateRealmCode($realmCode);
	}

	protected function validateRealmCode($realmCode) {
		$count = count($realmCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'realmCode', 0));
		}
		foreach ($realmCode as $entry) {
		}
	
		return $realmCode;
	}

	public function addRealmCode($realmCode) {
		$this->realmCode[] = $this->validateRealmCodeType($realmCode);
	}

	protected function validateRealmCodeType($realmCode) {
	
		return $realmCode;
	}

	public function getTypeId($autoCreate = TRUE) {
		if ($this->typeId===NULL && $autoCreate && ! isset($this->_overrides['typeId']) ) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return NULL;
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
	
		return $typeId;
	}

	public function getTemplateId($autoCreate = TRUE) {
		if ($this->templateId===NULL && $autoCreate && ! isset($this->_overrides['templateId']) ) {
			$this->templateId = $this->createTemplateId();
		}
		return $this->templateId;
	}
	
	protected function createTemplateId() {
		return array();
	}

	public function setTemplateId($templateId) {
		$this->templateId = $this->validateTemplateId($templateId);
	}

	protected function validateTemplateId($templateId) {
		$count = count($templateId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'templateId', 0));
		}
		foreach ($templateId as $entry) {
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $this->validateTemplateIdType($templateId);
	}

	protected function validateTemplateIdType($templateId) {
	
		return $templateId;
	}

	public function getConfidentialityCode($autoCreate = TRUE) {
		if ($this->confidentialityCode===NULL && $autoCreate && ! isset($this->_overrides['confidentialityCode']) ) {
			$this->confidentialityCode = $this->createConfidentialityCode();
		}
		return $this->confidentialityCode;
	}
	
	protected function createConfidentialityCode() {
		return NULL;
	}

	public function setConfidentialityCode($confidentialityCode) {
		$this->confidentialityCode = $this->validateConfidentialityCode($confidentialityCode);
	}

	protected function validateConfidentialityCode($confidentialityCode) {
	
		return $confidentialityCode;
	}

	public function getLanguageCode($autoCreate = TRUE) {
		if ($this->languageCode===NULL && $autoCreate && ! isset($this->_overrides['languageCode']) ) {
			$this->languageCode = $this->createLanguageCode();
		}
		return $this->languageCode;
	}
	
	protected function createLanguageCode() {
		return NULL;
	}

	public function setLanguageCode($languageCode) {
		$this->languageCode = $this->validateLanguageCode($languageCode);
	}

	protected function validateLanguageCode($languageCode) {
	
		return $languageCode;
	}

	public function getComponent($autoCreate = TRUE) {
		if ($this->component===NULL && $autoCreate && ! isset($this->_overrides['component']) ) {
			$this->component = $this->createComponent();
		}
		return $this->component;
	}
	
	protected function createComponent() {
		return array();
	}

	public function setComponent($component) {
		$this->component = $this->validateComponent($component);
	}

	protected function validateComponent($component) {
		$count = count($component);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'component', 1));
		}
		foreach ($component as $entry) {
		}
	
		return $component;
	}

	public function addComponent($component) {
		$this->component[] = $this->validateComponentType($component);
	}

	protected function validateComponentType($component) {
	
		return $component;
	}

	public function getNullFlavor($autoCreate = TRUE) {
		if ($this->nullFlavor===NULL && $autoCreate && ! isset($this->_overrides['nullFlavor']) ) {
			$this->nullFlavor = $this->createNullFlavor();
		}
		return $this->nullFlavor;
	}
	
	protected function createNullFlavor() {
		return NULL;
	}

	public function setNullFlavor($nullFlavor) {
		$this->nullFlavor = $this->validateNullFlavor($nullFlavor);
	}

	protected function validateNullFlavor($nullFlavor) {
	
		return $nullFlavor;
	}

	public function getClassCode($autoCreate = TRUE) {
		if ($this->classCode===NULL && $autoCreate && ! isset($this->_overrides['classCode']) ) {
			$this->classCode = $this->createClassCode();
		}
		return $this->classCode;
	}
	
	protected function createClassCode() {
		return NULL;
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
	
		return $classCode;
	}

	public function getMoodCode($autoCreate = TRUE) {
		if ($this->moodCode===NULL && $autoCreate && ! isset($this->_overrides['moodCode']) ) {
			$this->moodCode = $this->createMoodCode();
		}
		return $this->moodCode;
	}
	
	protected function createMoodCode() {
		return NULL;
	}

	public function setMoodCode($moodCode) {
		$this->moodCode = $this->validateMoodCode($moodCode);
	}

	protected function validateMoodCode($moodCode) {
	
		return $moodCode;
	}
} // end class POCDMT000040.StructuredBody
