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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="modeCode")
	 */
	protected $modeCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="proficiencyLevelCode")
	 */
	protected $proficiencyLevelCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\BL", name="preferenceInd")
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
		if ( ! empty($realmCode) ) {
			foreach ($realmCode as $entry) {
			}
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
		if ( ! empty($templateId) ) {
			foreach ($templateId as $entry) {
			}
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $this->validateTemplateIdType($templateId);
	}

	protected function validateTemplateIdType($templateId) {
	
		return $templateId;
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

	public function getModeCode($autoCreate = TRUE) {
		if ($this->modeCode===NULL && $autoCreate && ! isset($this->_overrides['modeCode']) ) {
			$this->modeCode = $this->createModeCode();
		}
		return $this->modeCode;
	}
	
	protected function createModeCode() {
		return NULL;
	}

	public function setModeCode($modeCode) {
		$this->modeCode = $this->validateModeCode($modeCode);
	}

	protected function validateModeCode($modeCode) {
	
		return $modeCode;
	}

	public function getProficiencyLevelCode($autoCreate = TRUE) {
		if ($this->proficiencyLevelCode===NULL && $autoCreate && ! isset($this->_overrides['proficiencyLevelCode']) ) {
			$this->proficiencyLevelCode = $this->createProficiencyLevelCode();
		}
		return $this->proficiencyLevelCode;
	}
	
	protected function createProficiencyLevelCode() {
		return NULL;
	}

	public function setProficiencyLevelCode($proficiencyLevelCode) {
		$this->proficiencyLevelCode = $this->validateProficiencyLevelCode($proficiencyLevelCode);
	}

	protected function validateProficiencyLevelCode($proficiencyLevelCode) {
	
		return $proficiencyLevelCode;
	}

	public function getPreferenceInd($autoCreate = TRUE) {
		if ($this->preferenceInd===NULL && $autoCreate && ! isset($this->_overrides['preferenceInd']) ) {
			$this->preferenceInd = $this->createPreferenceInd();
		}
		return $this->preferenceInd;
	}
	
	protected function createPreferenceInd() {
		return NULL;
	}

	public function setPreferenceInd($preferenceInd) {
		$this->preferenceInd = $this->validatePreferenceInd($preferenceInd);
	}

	protected function validatePreferenceInd($preferenceInd) {
	
		return $preferenceInd;
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
} // end class POCDMT000040.LanguageCommunication
