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
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.LabeledDrug", name="manufacturedLabeledDrug")
	 */
	protected $manufacturedLabeledDrug;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Material", name="manufacturedMaterial")
	 */
	protected $manufacturedMaterial;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Organization", name="manufacturerOrganization")
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
		if ( ! is_array ($id) && ! is_null($id) ) {
			$id = array($id);
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

	public function getManufacturedLabeledDrug() {
		if ($this->manufacturedLabeledDrug===NULL) {
			$this->manufacturedLabeledDrug = $this->createManufacturedLabeledDrug();
		}
		return $this->manufacturedLabeledDrug;
	}
	
	protected function createManufacturedLabeledDrug() {
		return new \hl7_org\v3\POCDMT000040.LabeledDrug();
	}

	public function setManufacturedLabeledDrug($manufacturedLabeledDrug) {
		$this->manufacturedLabeledDrug = $this->validateManufacturedLabeledDrug($manufacturedLabeledDrug);
	}

	protected function validateManufacturedLabeledDrug($manufacturedLabeledDrug) {
		if ( ! $manufacturedLabeledDrug instanceof \hl7_org\v3\POCDMT000040.LabeledDrug ) {
			$manufacturedLabeledDrug = new \hl7_org\v3\POCDMT000040.LabeledDrug ($manufacturedLabeledDrug);
		}
	
		return $manufacturedLabeledDrug;
	}

	public function getManufacturedMaterial() {
		if ($this->manufacturedMaterial===NULL) {
			$this->manufacturedMaterial = $this->createManufacturedMaterial();
		}
		return $this->manufacturedMaterial;
	}
	
	protected function createManufacturedMaterial() {
		return new \hl7_org\v3\POCDMT000040.Material();
	}

	public function setManufacturedMaterial($manufacturedMaterial) {
		$this->manufacturedMaterial = $this->validateManufacturedMaterial($manufacturedMaterial);
	}

	protected function validateManufacturedMaterial($manufacturedMaterial) {
		if ( ! $manufacturedMaterial instanceof \hl7_org\v3\POCDMT000040.Material ) {
			$manufacturedMaterial = new \hl7_org\v3\POCDMT000040.Material ($manufacturedMaterial);
		}
	
		return $manufacturedMaterial;
	}

	public function getManufacturerOrganization() {
		if ($this->manufacturerOrganization===NULL) {
			$this->manufacturerOrganization = $this->createManufacturerOrganization();
		}
		return $this->manufacturerOrganization;
	}
	
	protected function createManufacturerOrganization() {
		return new \hl7_org\v3\POCDMT000040.Organization();
	}

	public function setManufacturerOrganization($manufacturerOrganization) {
		$this->manufacturerOrganization = $this->validateManufacturerOrganization($manufacturerOrganization);
	}

	protected function validateManufacturerOrganization($manufacturerOrganization) {
		if ( ! $manufacturerOrganization instanceof \hl7_org\v3\POCDMT000040.Organization  && ! is_null($manufacturerOrganization) ) {
			$manufacturerOrganization = new \hl7_org\v3\POCDMT000040.Organization ($manufacturerOrganization);
		}
	
		return $manufacturerOrganization;
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
} // end class POCDMT000040.ManufacturedProduct
