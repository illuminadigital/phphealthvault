<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.LanguageCommunication")
 */
class POCDMT000040.LanguageCommunication {
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
	 * @XmlElement	(type="\hl7_org\v3\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="modeCode")
	 */
	protected $modeCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="proficiencyLevelCode")
	 */
	protected $proficiencyLevelCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\BL", name="preferenceInd")
	 */
	protected $preferenceInd;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $languageCode = NULL, $modeCode = NULL, $proficiencyLevelCode = NULL, $preferenceInd = NULL, $nullFlavor = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->languageCode = ($languageCode===NULL) ? NULL : $this->validateLanguageCode($languageCode);
		$this->modeCode = ($modeCode===NULL) ? NULL : $this->validateModeCode($modeCode);
		$this->proficiencyLevelCode = ($proficiencyLevelCode===NULL) ? NULL : $this->validateProficiencyLevelCode($proficiencyLevelCode);
		$this->preferenceInd = ($preferenceInd===NULL) ? NULL : $this->validatePreferenceInd($preferenceInd);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
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

	public function getModeCode() {
		if ($this->modeCode===NULL) {
			$this->modeCode = $this->createModeCode();
		}
		return $this->modeCode;
	}
	
	protected function createModeCode() {
		return new \hl7_org\v3\CE();
	}

	public function setModeCode($modeCode) {
		$this->modeCode = $this->validateModeCode($modeCode);
	}

	protected function validateModeCode($modeCode) {
		if ( ! $modeCode instanceof \hl7_org\v3\CE  && ! is_null($modeCode) ) {
			$modeCode = new \hl7_org\v3\CE ($modeCode);
		}
	
		return $modeCode;
	}

	public function getProficiencyLevelCode() {
		if ($this->proficiencyLevelCode===NULL) {
			$this->proficiencyLevelCode = $this->createProficiencyLevelCode();
		}
		return $this->proficiencyLevelCode;
	}
	
	protected function createProficiencyLevelCode() {
		return new \hl7_org\v3\CE();
	}

	public function setProficiencyLevelCode($proficiencyLevelCode) {
		$this->proficiencyLevelCode = $this->validateProficiencyLevelCode($proficiencyLevelCode);
	}

	protected function validateProficiencyLevelCode($proficiencyLevelCode) {
		if ( ! $proficiencyLevelCode instanceof \hl7_org\v3\CE  && ! is_null($proficiencyLevelCode) ) {
			$proficiencyLevelCode = new \hl7_org\v3\CE ($proficiencyLevelCode);
		}
	
		return $proficiencyLevelCode;
	}

	public function getPreferenceInd() {
		if ($this->preferenceInd===NULL) {
			$this->preferenceInd = $this->createPreferenceInd();
		}
		return $this->preferenceInd;
	}
	
	protected function createPreferenceInd() {
		return new \hl7_org\v3\BL();
	}

	public function setPreferenceInd($preferenceInd) {
		$this->preferenceInd = $this->validatePreferenceInd($preferenceInd);
	}

	protected function validatePreferenceInd($preferenceInd) {
		if ( ! $preferenceInd instanceof \hl7_org\v3\BL  && ! is_null($preferenceInd) ) {
			$preferenceInd = new \hl7_org\v3\BL ($preferenceInd);
		}
	
		return $preferenceInd;
	}

	public function getNullFlavor() {
		if ($this->nullFlavor===NULL) {
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
} // end class POCDMT000040.LanguageCommunication
