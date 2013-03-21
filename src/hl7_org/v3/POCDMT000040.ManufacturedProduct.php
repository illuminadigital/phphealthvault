<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.ManufacturedProduct")
 */
class POCDMT000040.ManufacturedProduct {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.LabeledDrug", name="manufacturedLabeledDrug")
	 */
	protected $manufacturedLabeledDrug;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Material", name="manufacturedMaterial")
	 */
	protected $manufacturedMaterial;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Organization", name="manufacturerOrganization")
	 */
	protected $manufacturerOrganization;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $manufacturedLabeledDrug = NULL, $manufacturedMaterial = NULL, $manufacturerOrganization = NULL, $nullFlavor = NULL, $classCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->manufacturedLabeledDrug = ($manufacturedLabeledDrug===NULL) ? NULL : $this->validateManufacturedLabeledDrug($manufacturedLabeledDrug);
		$this->manufacturedMaterial = ($manufacturedMaterial===NULL) ? NULL : $this->validateManufacturedMaterial($manufacturedMaterial);
		$this->manufacturerOrganization = ($manufacturerOrganization===NULL) ? NULL : $this->validateManufacturerOrganization($manufacturerOrganization);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
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
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		foreach ($id as $entry) {
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $this->validateIdType($id);
	}

	protected function validateIdType($id) {
	
		return $id;
	}

	public function getManufacturedLabeledDrug($autoCreate = TRUE) {
		if ($this->manufacturedLabeledDrug===NULL && $autoCreate && ! isset($this->_overrides['manufacturedLabeledDrug']) ) {
			$this->manufacturedLabeledDrug = $this->createManufacturedLabeledDrug();
		}
		return $this->manufacturedLabeledDrug;
	}
	
	protected function createManufacturedLabeledDrug() {
		return NULL;
	}

	public function setManufacturedLabeledDrug($manufacturedLabeledDrug) {
		$this->manufacturedLabeledDrug = $this->validateManufacturedLabeledDrug($manufacturedLabeledDrug);
	}

	protected function validateManufacturedLabeledDrug($manufacturedLabeledDrug) {
	
		return $manufacturedLabeledDrug;
	}

	public function getManufacturedMaterial($autoCreate = TRUE) {
		if ($this->manufacturedMaterial===NULL && $autoCreate && ! isset($this->_overrides['manufacturedMaterial']) ) {
			$this->manufacturedMaterial = $this->createManufacturedMaterial();
		}
		return $this->manufacturedMaterial;
	}
	
	protected function createManufacturedMaterial() {
		return NULL;
	}

	public function setManufacturedMaterial($manufacturedMaterial) {
		$this->manufacturedMaterial = $this->validateManufacturedMaterial($manufacturedMaterial);
	}

	protected function validateManufacturedMaterial($manufacturedMaterial) {
	
		return $manufacturedMaterial;
	}

	public function getManufacturerOrganization($autoCreate = TRUE) {
		if ($this->manufacturerOrganization===NULL && $autoCreate && ! isset($this->_overrides['manufacturerOrganization']) ) {
			$this->manufacturerOrganization = $this->createManufacturerOrganization();
		}
		return $this->manufacturerOrganization;
	}
	
	protected function createManufacturerOrganization() {
		return NULL;
	}

	public function setManufacturerOrganization($manufacturerOrganization) {
		$this->manufacturerOrganization = $this->validateManufacturerOrganization($manufacturerOrganization);
	}

	protected function validateManufacturerOrganization($manufacturerOrganization) {
	
		return $manufacturerOrganization;
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
} // end class POCDMT000040.ManufacturedProduct
