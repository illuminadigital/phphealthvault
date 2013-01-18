<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.ServiceEvent")
 */
class POCDMT000040.ServiceEvent {
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
	 * @XmlElement	(type="\hl7_org\v3\IVLTS", name="effectiveTime")
	 */
	protected $effectiveTime;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Performer1", collection="true", name="performer")
	 */
	protected $performer;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $effectiveTime = NULL, $performer = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->effectiveTime = ($effectiveTime===NULL) ? NULL : $this->validateEffectiveTime($effectiveTime);
		$this->performer = ($performer===NULL) ? NULL : $this->validatePerformer($performer);
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

	public function getPerformer() {
		if ($this->performer===NULL) {
			$this->performer = $this->createPerformer();
		}
		return $this->performer;
	}
	
	protected function createPerformer() {
		return array();
	}

	public function setPerformer($performer) {
		$this->performer = $this->validatePerformer($performer);
	}

	protected function validatePerformer($performer) {
		if ( ! $performer instanceof \hl7_org\v3\POCDMT000040.Performer1  && ! is_null($performer) ) {
			$performer = new \hl7_org\v3\POCDMT000040.Performer1 ($performer);
		}
		$count = count($performer);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'performer', 0));
		}
		foreach ($performer as $entry) {
			if (!($entry instanceof POCDMT000040.Performer1)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'performer', 'POCD_MT000040.Performer1'));
			}
		}
	
		return $performer;
	}

	public function addPerformer($performer) {
		$this->performer[] = $performer;
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
		return new \hl7_org\v3\ActClassRoot();
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
		if ( ! $classCode instanceof \hl7_org\v3\ActClassRoot  && ! is_null($classCode) ) {
			$classCode = new \hl7_org\v3\ActClassRoot ($classCode);
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
} // end class POCDMT000040.ServiceEvent
