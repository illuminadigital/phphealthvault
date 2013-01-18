<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.OrganizationPartOf")
 */
class POCDMT000040.OrganizationPartOf {
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
	 * @XmlElement	(type="\hl7_org\v3\II", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CS", name="statusCode")
	 */
	protected $statusCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLTS", name="effectiveTime")
	 */
	protected $effectiveTime;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Organization", name="wholeOrganization")
	 */
	protected $wholeOrganization;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $statusCode = NULL, $effectiveTime = NULL, $wholeOrganization = NULL, $nullFlavor = NULL, $classCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->statusCode = ($statusCode===NULL) ? NULL : $this->validateStatusCode($statusCode);
		$this->effectiveTime = ($effectiveTime===NULL) ? NULL : $this->validateEffectiveTime($effectiveTime);
		$this->wholeOrganization = ($wholeOrganization===NULL) ? NULL : $this->validateWholeOrganization($wholeOrganization);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
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

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return array();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \hl7_org\v3\II  && ! is_null($id) ) {
			$id = new \hl7_org\v3\II ($id);
		}
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		foreach ($id as $entry) {
			if (!($entry instanceof II)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'II'));
			}
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $id;
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

	public function getStatusCode() {
		if ($this->statusCode===NULL) {
			$this->statusCode = $this->createStatusCode();
		}
		return $this->statusCode;
	}
	
	protected function createStatusCode() {
		return new \hl7_org\v3\CS();
	}

	public function setStatusCode($statusCode) {
		$this->statusCode = $this->validateStatusCode($statusCode);
	}

	protected function validateStatusCode($statusCode) {
		if ( ! $statusCode instanceof \hl7_org\v3\CS  && ! is_null($statusCode) ) {
			$statusCode = new \hl7_org\v3\CS ($statusCode);
		}
	
		return $statusCode;
	}

	public function getEffectiveTime() {
		if ($this->effectiveTime===NULL) {
			$this->effectiveTime = $this->createEffectiveTime();
		}
		return $this->effectiveTime;
	}
	
	protected function createEffectiveTime() {
		return new \hl7_org\v3\IVLTS();
	}

	public function setEffectiveTime($effectiveTime) {
		$this->effectiveTime = $this->validateEffectiveTime($effectiveTime);
	}

	protected function validateEffectiveTime($effectiveTime) {
		if ( ! $effectiveTime instanceof \hl7_org\v3\IVLTS  && ! is_null($effectiveTime) ) {
			$effectiveTime = new \hl7_org\v3\IVLTS ($effectiveTime);
		}
	
		return $effectiveTime;
	}

	public function getWholeOrganization() {
		if ($this->wholeOrganization===NULL) {
			$this->wholeOrganization = $this->createWholeOrganization();
		}
		return $this->wholeOrganization;
	}
	
	protected function createWholeOrganization() {
		return new \hl7_org\v3\POCDMT000040.Organization();
	}

	public function setWholeOrganization($wholeOrganization) {
		$this->wholeOrganization = $this->validateWholeOrganization($wholeOrganization);
	}

	protected function validateWholeOrganization($wholeOrganization) {
		if ( ! $wholeOrganization instanceof \hl7_org\v3\POCDMT000040.Organization  && ! is_null($wholeOrganization) ) {
			$wholeOrganization = new \hl7_org\v3\POCDMT000040.Organization ($wholeOrganization);
		}
	
		return $wholeOrganization;
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
		return new \hl7_org\v3\RoleClass();
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
		if ( ! $classCode instanceof \hl7_org\v3\RoleClass  && ! is_null($classCode) ) {
			$classCode = new \hl7_org\v3\RoleClass ($classCode);
		}
	
		return $classCode;
	}
} // end class POCDMT000040.OrganizationPartOf
