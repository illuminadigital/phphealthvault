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
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.NonXMLBody", name="nonXMLBody")
	 */
	protected $nonXMLBody;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.StructuredBody", name="structuredBody")
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

	public function getNonXMLBody() {
		if ($this->nonXMLBody===NULL) {
			$this->nonXMLBody = $this->createNonXMLBody();
		}
		return $this->nonXMLBody;
	}
	
	protected function createNonXMLBody() {
		return new \hl7_org\v3\POCDMT000040.NonXMLBody();
	}

	public function setNonXMLBody($nonXMLBody) {
		$this->nonXMLBody = $this->validateNonXMLBody($nonXMLBody);
	}

	protected function validateNonXMLBody($nonXMLBody) {
		if ( ! $nonXMLBody instanceof \hl7_org\v3\POCDMT000040.NonXMLBody ) {
			$nonXMLBody = new \hl7_org\v3\POCDMT000040.NonXMLBody ($nonXMLBody);
		}
	
		return $nonXMLBody;
	}

	public function getStructuredBody() {
		if ($this->structuredBody===NULL) {
			$this->structuredBody = $this->createStructuredBody();
		}
		return $this->structuredBody;
	}
	
	protected function createStructuredBody() {
		return new \hl7_org\v3\POCDMT000040.StructuredBody();
	}

	public function setStructuredBody($structuredBody) {
		$this->structuredBody = $this->validateStructuredBody($structuredBody);
	}

	protected function validateStructuredBody($structuredBody) {
		if ( ! $structuredBody instanceof \hl7_org\v3\POCDMT000040.StructuredBody ) {
			$structuredBody = new \hl7_org\v3\POCDMT000040.StructuredBody ($structuredBody);
		}
	
		return $structuredBody;
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

	public function getTypeCode() {
		if ($this->typeCode===NULL) {
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

	public function getContextConductionInd() {
		if ($this->contextConductionInd===NULL) {
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
