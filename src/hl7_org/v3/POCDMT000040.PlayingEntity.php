<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.PlayingEntity")
 */
class POCDMT000040.PlayingEntity {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", collection="true", name="quantity")
	 */
	protected $quantity;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PN", collection="true", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ED", name="desc")
	 */
	protected $desc;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $code = NULL, $quantity = NULL, $name = NULL, $desc = NULL, $nullFlavor = NULL, $classCode = NULL, $determinerCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->quantity = ($quantity===NULL) ? NULL : $this->validateQuantity($quantity);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->desc = ($desc===NULL) ? NULL : $this->validateDesc($desc);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
		$this->determinerCode = ($determinerCode===NULL) ? NULL : $this->validateDeterminerCode($determinerCode);
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

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return NULL;
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
	
		return $code;
	}

	public function getQuantity($autoCreate = TRUE) {
		if ($this->quantity===NULL && $autoCreate && ! isset($this->_overrides['quantity']) ) {
			$this->quantity = $this->createQuantity();
		}
		return $this->quantity;
	}
	
	protected function createQuantity() {
		return array();
	}

	public function setQuantity($quantity) {
		$this->quantity = $this->validateQuantity($quantity);
	}

	protected function validateQuantity($quantity) {
		$count = count($quantity);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'quantity', 0));
		}
		foreach ($quantity as $entry) {
		}
	
		return $quantity;
	}

	public function addQuantity($quantity) {
		$this->quantity[] = $this->validateQuantityType($quantity);
	}

	protected function validateQuantityType($quantity) {
	
		return $quantity;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return array();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		$count = count($name);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 0));
		}
		foreach ($name as $entry) {
		}
	
		return $name;
	}

	public function addName($name) {
		$this->name[] = $this->validateNameType($name);
	}

	protected function validateNameType($name) {
	
		return $name;
	}

	public function getDesc($autoCreate = TRUE) {
		if ($this->desc===NULL && $autoCreate && ! isset($this->_overrides['desc']) ) {
			$this->desc = $this->createDesc();
		}
		return $this->desc;
	}
	
	protected function createDesc() {
		return NULL;
	}

	public function setDesc($desc) {
		$this->desc = $this->validateDesc($desc);
	}

	protected function validateDesc($desc) {
	
		return $desc;
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

	public function getDeterminerCode($autoCreate = TRUE) {
		if ($this->determinerCode===NULL && $autoCreate && ! isset($this->_overrides['determinerCode']) ) {
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
} // end class POCDMT000040.PlayingEntity
