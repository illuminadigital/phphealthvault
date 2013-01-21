<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ActivityAward")
 */
class ActivityAward {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="Name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0679ActivityInvolvementCodeType", name="InvolvementCode")
	 */
	protected $involvementCode;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="InvolvementBeginningDate")
	 */
	protected $involvementBeginningDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="InvolvementEndingDate")
	 */
	protected $involvementEndingDate;

	/**
	 * @XmlText	(type="string", name="InvolvementAmount")
	 */
	protected $involvementAmount;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0674HonorsTypeType", name="HonorsInformationCode")
	 */
	protected $honorsInformationCode;

	/**
	 * @XmlText	(type="string", name="HonorsDescription")
	 */
	protected $honorsDescription;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0684DiplomaCredentialLevelAndHonorsType", name="DiplomaCredentialHonorsCode")
	 */
	protected $diplomaCredentialHonorsCode;

	/**
	 * @XmlText	(type="string", name="DiplomaCredentialHonorsDescription")
	 */
	protected $diplomaCredentialHonorsDescription;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($name = NULL, $involvementCode = NULL, $involvementBeginningDate = NULL, $involvementEndingDate = NULL, $involvementAmount = NULL, $honorsInformationCode = NULL, $honorsDescription = NULL, $diplomaCredentialHonorsCode = NULL, $diplomaCredentialHonorsDescription = NULL, $sifExtendedElements = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->involvementCode = ($involvementCode===NULL) ? NULL : $this->validateInvolvementCode($involvementCode);
		$this->involvementBeginningDate = ($involvementBeginningDate===NULL) ? NULL : $this->validateInvolvementBeginningDate($involvementBeginningDate);
		$this->involvementEndingDate = ($involvementEndingDate===NULL) ? NULL : $this->validateInvolvementEndingDate($involvementEndingDate);
		$this->involvementAmount = ($involvementAmount===NULL) ? NULL : $this->validateInvolvementAmount($involvementAmount);
		$this->honorsInformationCode = ($honorsInformationCode===NULL) ? NULL : $this->validateHonorsInformationCode($honorsInformationCode);
		$this->honorsDescription = ($honorsDescription===NULL) ? NULL : $this->validateHonorsDescription($honorsDescription);
		$this->diplomaCredentialHonorsCode = ($diplomaCredentialHonorsCode===NULL) ? NULL : $this->validateDiplomaCredentialHonorsCode($diplomaCredentialHonorsCode);
		$this->diplomaCredentialHonorsDescription = ($diplomaCredentialHonorsDescription===NULL) ? NULL : $this->validateDiplomaCredentialHonorsDescription($diplomaCredentialHonorsDescription);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return NULL;
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getInvolvementCode() {
		if ($this->involvementCode===NULL) {
			$this->involvementCode = $this->createInvolvementCode();
		}
		return $this->involvementCode;
	}
	
	protected function createInvolvementCode() {
		return new \org\sifinfo\www\infrastructure\_2_x\NCES0679ActivityInvolvementCodeType();
	}

	public function setInvolvementCode($involvementCode) {
		$this->involvementCode = $this->validateInvolvementCode($involvementCode);
	}

	protected function validateInvolvementCode($involvementCode) {
		if ( ! $involvementCode instanceof \org\sifinfo\www\infrastructure\_2_x\NCES0679ActivityInvolvementCodeType  && ! is_null($involvementCode) ) {
			$involvementCode = new \org\sifinfo\www\infrastructure\_2_x\NCES0679ActivityInvolvementCodeType ($involvementCode);
		}
	
		return $involvementCode;
	}

	public function getInvolvementBeginningDate() {
		if ($this->involvementBeginningDate===NULL) {
			$this->involvementBeginningDate = $this->createInvolvementBeginningDate();
		}
		return $this->involvementBeginningDate;
	}
	
	protected function createInvolvementBeginningDate() {
		return new \org\sifinfo\www\infrastructure\_2_x\PartialDateType();
	}

	public function setInvolvementBeginningDate($involvementBeginningDate) {
		$this->involvementBeginningDate = $this->validateInvolvementBeginningDate($involvementBeginningDate);
	}

	protected function validateInvolvementBeginningDate($involvementBeginningDate) {
		if ( ! $involvementBeginningDate instanceof \org\sifinfo\www\infrastructure\_2_x\PartialDateType  && ! is_null($involvementBeginningDate) ) {
			$involvementBeginningDate = new \org\sifinfo\www\infrastructure\_2_x\PartialDateType ($involvementBeginningDate);
		}
	
		return $involvementBeginningDate;
	}

	public function getInvolvementEndingDate() {
		if ($this->involvementEndingDate===NULL) {
			$this->involvementEndingDate = $this->createInvolvementEndingDate();
		}
		return $this->involvementEndingDate;
	}
	
	protected function createInvolvementEndingDate() {
		return new \org\sifinfo\www\infrastructure\_2_x\PartialDateType();
	}

	public function setInvolvementEndingDate($involvementEndingDate) {
		$this->involvementEndingDate = $this->validateInvolvementEndingDate($involvementEndingDate);
	}

	protected function validateInvolvementEndingDate($involvementEndingDate) {
		if ( ! $involvementEndingDate instanceof \org\sifinfo\www\infrastructure\_2_x\PartialDateType  && ! is_null($involvementEndingDate) ) {
			$involvementEndingDate = new \org\sifinfo\www\infrastructure\_2_x\PartialDateType ($involvementEndingDate);
		}
	
		return $involvementEndingDate;
	}

	public function getInvolvementAmount() {
		if ($this->involvementAmount===NULL) {
			$this->involvementAmount = $this->createInvolvementAmount();
		}
		return $this->involvementAmount;
	}
	
	protected function createInvolvementAmount() {
		return NULL;
	}

	public function setInvolvementAmount($involvementAmount) {
		$this->involvementAmount = $this->validateInvolvementAmount($involvementAmount);
	}

	protected function validateInvolvementAmount($involvementAmount) {
		if ( ! is_string($involvementAmount) && ! is_null($involvementAmount) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'involvementAmount', 'string'));
		}
	
		return $involvementAmount;
	}

	public function getHonorsInformationCode() {
		if ($this->honorsInformationCode===NULL) {
			$this->honorsInformationCode = $this->createHonorsInformationCode();
		}
		return $this->honorsInformationCode;
	}
	
	protected function createHonorsInformationCode() {
		return new \org\sifinfo\www\infrastructure\_2_x\NCES0674HonorsTypeType();
	}

	public function setHonorsInformationCode($honorsInformationCode) {
		$this->honorsInformationCode = $this->validateHonorsInformationCode($honorsInformationCode);
	}

	protected function validateHonorsInformationCode($honorsInformationCode) {
		if ( ! $honorsInformationCode instanceof \org\sifinfo\www\infrastructure\_2_x\NCES0674HonorsTypeType  && ! is_null($honorsInformationCode) ) {
			$honorsInformationCode = new \org\sifinfo\www\infrastructure\_2_x\NCES0674HonorsTypeType ($honorsInformationCode);
		}
	
		return $honorsInformationCode;
	}

	public function getHonorsDescription() {
		if ($this->honorsDescription===NULL) {
			$this->honorsDescription = $this->createHonorsDescription();
		}
		return $this->honorsDescription;
	}
	
	protected function createHonorsDescription() {
		return NULL;
	}

	public function setHonorsDescription($honorsDescription) {
		$this->honorsDescription = $this->validateHonorsDescription($honorsDescription);
	}

	protected function validateHonorsDescription($honorsDescription) {
		if ( ! is_string($honorsDescription) && ! is_null($honorsDescription) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'honorsDescription', 'string'));
		}
	
		return $honorsDescription;
	}

	public function getDiplomaCredentialHonorsCode() {
		if ($this->diplomaCredentialHonorsCode===NULL) {
			$this->diplomaCredentialHonorsCode = $this->createDiplomaCredentialHonorsCode();
		}
		return $this->diplomaCredentialHonorsCode;
	}
	
	protected function createDiplomaCredentialHonorsCode() {
		return new \org\sifinfo\www\infrastructure\_2_x\NCES0684DiplomaCredentialLevelAndHonorsType();
	}

	public function setDiplomaCredentialHonorsCode($diplomaCredentialHonorsCode) {
		$this->diplomaCredentialHonorsCode = $this->validateDiplomaCredentialHonorsCode($diplomaCredentialHonorsCode);
	}

	protected function validateDiplomaCredentialHonorsCode($diplomaCredentialHonorsCode) {
		if ( ! $diplomaCredentialHonorsCode instanceof \org\sifinfo\www\infrastructure\_2_x\NCES0684DiplomaCredentialLevelAndHonorsType  && ! is_null($diplomaCredentialHonorsCode) ) {
			$diplomaCredentialHonorsCode = new \org\sifinfo\www\infrastructure\_2_x\NCES0684DiplomaCredentialLevelAndHonorsType ($diplomaCredentialHonorsCode);
		}
	
		return $diplomaCredentialHonorsCode;
	}

	public function getDiplomaCredentialHonorsDescription() {
		if ($this->diplomaCredentialHonorsDescription===NULL) {
			$this->diplomaCredentialHonorsDescription = $this->createDiplomaCredentialHonorsDescription();
		}
		return $this->diplomaCredentialHonorsDescription;
	}
	
	protected function createDiplomaCredentialHonorsDescription() {
		return NULL;
	}

	public function setDiplomaCredentialHonorsDescription($diplomaCredentialHonorsDescription) {
		$this->diplomaCredentialHonorsDescription = $this->validateDiplomaCredentialHonorsDescription($diplomaCredentialHonorsDescription);
	}

	protected function validateDiplomaCredentialHonorsDescription($diplomaCredentialHonorsDescription) {
		if ( ! is_string($diplomaCredentialHonorsDescription) && ! is_null($diplomaCredentialHonorsDescription) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'diplomaCredentialHonorsDescription', 'string'));
		}
	
		return $diplomaCredentialHonorsDescription;
	}

	public function getSifExtendedElements() {
		if ($this->sifExtendedElements===NULL) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}
	
		return $sifExtendedElements;
	}
} // end class ActivityAward