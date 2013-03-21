<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Component2")
 */
class POCDMT000040.Component2 {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.NonXMLBody", name="nonXMLBody")
	 */
	protected $nonXMLBody;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.StructuredBody", name="structuredBody")
	 */
	protected $structuredBody;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="typeCode")
	 */
	protected $typeCode;

	/**
	 * @XmlAttribute	(type="string", name="contextConductionInd")
	 */
	protected $contextConductionInd;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $nonXMLBody = NULL, $structuredBody = NULL, $nullFlavor = NULL, $typeCode = NULL, $contextConductionInd = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->nonXMLBody = ($nonXMLBody===NULL) ? NULL : $this->validateNonXMLBody($nonXMLBody);
		$this->structuredBody = ($structuredBody===NULL) ? NULL : $this->validateStructuredBody($structuredBody);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->typeCode = ($typeCode===NULL) ? NULL : $this->validateTypeCode($typeCode);
		$this->contextConductionInd = ($contextConductionInd===NULL) ? NULL : $this->validateContextConductionInd($contextConductionInd);
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

	public function getNonXMLBody($autoCreate = TRUE) {
		if ($this->nonXMLBody===NULL && $autoCreate && ! isset($this->_overrides['nonXMLBody']) ) {
			$this->nonXMLBody = $this->createNonXMLBody();
		}
		return $this->nonXMLBody;
	}
	
	protected function createNonXMLBody() {
		return NULL;
	}

	public function setNonXMLBody($nonXMLBody) {
		$this->nonXMLBody = $this->validateNonXMLBody($nonXMLBody);
	}

	protected function validateNonXMLBody($nonXMLBody) {
	
		return $nonXMLBody;
	}

	public function getStructuredBody($autoCreate = TRUE) {
		if ($this->structuredBody===NULL && $autoCreate && ! isset($this->_overrides['structuredBody']) ) {
			$this->structuredBody = $this->createStructuredBody();
		}
		return $this->structuredBody;
	}
	
	protected function createStructuredBody() {
		return NULL;
	}

	public function setStructuredBody($structuredBody) {
		$this->structuredBody = $this->validateStructuredBody($structuredBody);
	}

	protected function validateStructuredBody($structuredBody) {
	
		return $structuredBody;
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

	public function getTypeCode($autoCreate = TRUE) {
		if ($this->typeCode===NULL && $autoCreate && ! isset($this->_overrides['typeCode']) ) {
			$this->typeCode = $this->createTypeCode();
		}
		return $this->typeCode;
	}
	
	protected function createTypeCode() {
		return NULL;
	}

	public function setTypeCode($typeCode) {
		$this->typeCode = $this->validateTypeCode($typeCode);
	}

	protected function validateTypeCode($typeCode) {
	
		return $typeCode;
	}

	public function getContextConductionInd($autoCreate = TRUE) {
		if ($this->contextConductionInd===NULL && $autoCreate && ! isset($this->_overrides['contextConductionInd']) ) {
			$this->contextConductionInd = $this->createContextConductionInd();
		}
		return $this->contextConductionInd;
	}
	
	protected function createContextConductionInd() {
		return NULL;
	}

	public function setContextConductionInd($contextConductionInd) {
		$this->contextConductionInd = $this->validateContextConductionInd($contextConductionInd);
	}

	protected function validateContextConductionInd($contextConductionInd) {
	
		return $contextConductionInd;
	}
} // end class POCDMT000040.Component2
