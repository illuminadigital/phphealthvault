<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Device")
 */
class POCDMT000040.Device {
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
	 * @XmlElement	(type="\hl7_org\v3\CE", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\hl7_org\v3\SC", name="manufacturerModelName")
	 */
	protected $manufacturerModelName;

	/**
	 * @XmlElement	(type="\hl7_org\v3\SC", name="softwareName")
	 */
	protected $softwareName;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	/**
	 * @XmlAttribute	(type="string", name="determinerCode")
	 */
	protected $determinerCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $code = NULL, $manufacturerModelName = NULL, $softwareName = NULL, $nullFlavor = NULL, $classCode = NULL, $determinerCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->manufacturerModelName = ($manufacturerModelName===NULL) ? NULL : $this->validateManufacturerModelName($manufacturerModelName);
		$this->softwareName = ($softwareName===NULL) ? NULL : $this->validateSoftwareName($softwareName);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
		$this->determinerCode = ($determinerCode===NULL) ? NULL : $this->validateDeterminerCode($determinerCode);
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
		if ( ! is_array ($realmCode) && ! is_null($realmCode) ) {
			$realmCode = array($realmCode);
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
		if ( ! is_array ($templateId) && ! is_null($templateId) ) {
			$templateId = array($templateId);
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

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return new \hl7_org\v3\CE();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! $code instanceof \hl7_org\v3\CE  && ! is_null($code) ) {
			$code = new \hl7_org\v3\CE ($code);
		}
	
		return $code;
	}

	public function getManufacturerModelName() {
		if ($this->manufacturerModelName===NULL) {
			$this->manufacturerModelName = $this->createManufacturerModelName();
		}
		return $this->manufacturerModelName;
	}
	
	protected function createManufacturerModelName() {
		return new \hl7_org\v3\SC();
	}

	public function setManufacturerModelName($manufacturerModelName) {
		$this->manufacturerModelName = $this->validateManufacturerModelName($manufacturerModelName);
	}

	protected function validateManufacturerModelName($manufacturerModelName) {
		if ( ! $manufacturerModelName instanceof \hl7_org\v3\SC  && ! is_null($manufacturerModelName) ) {
			$manufacturerModelName = new \hl7_org\v3\SC ($manufacturerModelName);
		}
	
		return $manufacturerModelName;
	}

	public function getSoftwareName() {
		if ($this->softwareName===NULL) {
			$this->softwareName = $this->createSoftwareName();
		}
		return $this->softwareName;
	}
	
	protected function createSoftwareName() {
		return new \hl7_org\v3\SC();
	}

	public function setSoftwareName($softwareName) {
		$this->softwareName = $this->validateSoftwareName($softwareName);
	}

	protected function validateSoftwareName($softwareName) {
		if ( ! $softwareName instanceof \hl7_org\v3\SC  && ! is_null($softwareName) ) {
			$softwareName = new \hl7_org\v3\SC ($softwareName);
		}
	
		return $softwareName;
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

	public function getClassCode() {
		if ($this->classCode===NULL) {
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

	public function getDeterminerCode() {
		if ($this->determinerCode===NULL) {
			$this->determinerCode = $this->createDeterminerCode();
		}
		return $this->determinerCode;
	}
	
	protected function createDeterminerCode() {
		return NULL;
	}

	public function setDeterminerCode($determinerCode) {
		$this->determinerCode = $this->validateDeterminerCode($determinerCode);
	}

	protected function validateDeterminerCode($determinerCode) {
	
		return $determinerCode;
	}
} // end class POCDMT000040.Device
