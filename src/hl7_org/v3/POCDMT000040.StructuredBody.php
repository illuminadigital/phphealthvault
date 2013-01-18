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
	 * @XmlElement	(type="\hl7_org\v3\CS", collection="true", name="realmCode")
	 */
	protected $realmCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId", name="typeId")
	 */
	protected $typeId;

	/**
	 * @XmlElement	(type="\hl7_org\v3\II", collection="true", name="templateId")
	 */
	protected $templateId;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="confidentialityCode")
	 */
	protected $confidentialityCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Component3", collection="true", name="component")
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

	public function getRealmCode() {
		if ($this->realmCode===NULL) {
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
		if ( ! $realmCode instanceof \hl7_org\v3\CS  && ! is_null($realmCode) ) {
			$realmCode = new \hl7_org\v3\CS ($realmCode);
		}
		$count = count($realmCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'realmCode', 0));
		}
		foreach ($realmCode as $entry) {
			if (!($entry instanceof CS)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'realmCode', 'CS'));
			}
		}
	
		return $realmCode;
	}

	public function addRealmCode($realmCode) {
		$this->realmCode[] = $realmCode;
	}

	public function getTypeId() {
		if ($this->typeId===NULL) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return new \hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( ! $typeId instanceof \hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId  && ! is_null($typeId) ) {
			$typeId = new \hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId ($typeId);
		}
	
		return $typeId;
	}

	public function getTemplateId() {
		if ($this->templateId===NULL) {
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
		if ( ! $templateId instanceof \hl7_org\v3\II  && ! is_null($templateId) ) {
			$templateId = new \hl7_org\v3\II ($templateId);
		}
		$count = count($templateId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'templateId', 0));
		}
		foreach ($templateId as $entry) {
			if (!($entry instanceof II)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'templateId', 'II'));
			}
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $templateId;
	}

	public function getConfidentialityCode() {
		if ($this->confidentialityCode===NULL) {
			$this->confidentialityCode = $this->createConfidentialityCode();
		}
		return $this->confidentialityCode;
	}
	
	protected function createConfidentialityCode() {
		return new \hl7_org\v3\CE();
	}

	public function setConfidentialityCode($confidentialityCode) {
		$this->confidentialityCode = $this->validateConfidentialityCode($confidentialityCode);
	}

	protected function validateConfidentialityCode($confidentialityCode) {
		if ( ! $confidentialityCode instanceof \hl7_org\v3\CE  && ! is_null($confidentialityCode) ) {
			$confidentialityCode = new \hl7_org\v3\CE ($confidentialityCode);
		}
	
		return $confidentialityCode;
	}

	public function getLanguageCode() {
		if ($this->languageCode===NULL) {
			$this->languageCode = $this->createLanguageCode();
		}
		return $this->languageCode;
	}
	
	protected function createLanguageCode() {
		return new \hl7_org\v3\CS();
	}

	public function setLanguageCode($languageCode) {
		$this->languageCode = $this->validateLanguageCode($languageCode);
	}

	protected function validateLanguageCode($languageCode) {
		if ( ! $languageCode instanceof \hl7_org\v3\CS  && ! is_null($languageCode) ) {
			$languageCode = new \hl7_org\v3\CS ($languageCode);
		}
	
		return $languageCode;
	}

	public function getComponent() {
		if ($this->component===NULL) {
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
		if ( ! $component instanceof \hl7_org\v3\POCDMT000040.Component3 ) {
			$component = new \hl7_org\v3\POCDMT000040.Component3 ($component);
		}
		$count = count($component);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'component', 1));
		}
		foreach ($component as $entry) {
			if (!($entry instanceof POCDMT000040.Component3)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'component', 'POCD_MT000040.Component3'));
			}
		}
	
		return $component;
	}

	public function addComponent($component) {
		$this->component[] = $component;
	}

	public function getNullFlavor() {
		if ($this->nullFlavor===NULL) {
			$this->nullFlavor = $this->createNullFlavor();
		}
		return $this->nullFlavor;
	}
	
	protected function createNullFlavor() {
		return new \hl7_org\v3\NullFlavor();
	}

	public function setNullFlavor($nullFlavor) {
		$this->nullFlavor = $this->validateNullFlavor($nullFlavor);
	}

	protected function validateNullFlavor($nullFlavor) {
		if ( ! $nullFlavor instanceof \hl7_org\v3\NullFlavor  && ! is_null($nullFlavor) ) {
			$nullFlavor = new \hl7_org\v3\NullFlavor ($nullFlavor);
		}
	
		return $nullFlavor;
	}

	public function getClassCode() {
		if ($this->classCode===NULL) {
			$this->classCode = $this->createClassCode();
		}
		return $this->classCode;
	}
	
	protected function createClassCode() {
		return new \hl7_org\v3\ActClass();
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
		if ( ! $classCode instanceof \hl7_org\v3\ActClass  && ! is_null($classCode) ) {
			$classCode = new \hl7_org\v3\ActClass ($classCode);
		}
	
		return $classCode;
	}

	public function getMoodCode() {
		if ($this->moodCode===NULL) {
			$this->moodCode = $this->createMoodCode();
		}
		return $this->moodCode;
	}
	
	protected function createMoodCode() {
		return new \hl7_org\v3\ActMood();
	}

	public function setMoodCode($moodCode) {
		$this->moodCode = $this->validateMoodCode($moodCode);
	}

	protected function validateMoodCode($moodCode) {
		if ( ! $moodCode instanceof \hl7_org\v3\ActMood  && ! is_null($moodCode) ) {
			$moodCode = new \hl7_org\v3\ActMood ($moodCode);
		}
	
		return $moodCode;
	}
} // end class POCDMT000040.StructuredBody
