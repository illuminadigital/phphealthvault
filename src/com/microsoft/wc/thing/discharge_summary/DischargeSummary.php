<?php
namespace com\microsoft\wc\thing\discharge_summary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.discharge-summary", prefix="")
 * })
 * @XmlEntity	(xml="discharge-summary")
 */
class DischargeSummary extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to the discharge summary.
	 * This thing type describes the discharge summary of a person.
	 */

	const ID = '02EF57A2-A620-425A-8E92-A301542CCA54';
	const NAME = 'Discharge Summary';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="type")
	 */
	protected $type;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="category")
	 */
	protected $category;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="setting")
	 */
	protected $setting;

	/**
	 * @XmlText	(type="string", name="specialty")
	 */
	protected $specialty;

	/**
	 * @XmlText	(type="string", name="text")
	 */
	protected $text;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="primary-provider")
	 */
	protected $primaryProvider;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="primary-provider-endorsement")
	 */
	protected $primaryProviderEndorsement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="secondary-provider")
	 */
	protected $secondaryProvider;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="secondary-provider-endorsement")
	 */
	protected $secondaryProviderEndorsement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="discharge-date-time")
	 */
	protected $dischargeDateTime;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="admitting-diagnosis")
	 */
	protected $admittingDiagnosis;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="principal-diagnosis")
	 */
	protected $principalDiagnosis;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="additional-diagnosis")
	 */
	protected $additionalDiagnosis;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="principal-procedure-physician")
	 */
	protected $principalProcedurePhysician;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="principal-procedure")
	 */
	protected $principalProcedure;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="additional-procedure")
	 */
	protected $additionalProcedure;

	public function __construct($when = NULL, $type = NULL, $category = NULL, $setting = NULL, $specialty = NULL, $text = NULL, $primaryProvider = NULL, $primaryProviderEndorsement = NULL, $secondaryProvider = NULL, $secondaryProviderEndorsement = NULL, $dischargeDateTime = NULL, $admittingDiagnosis = NULL, $principalDiagnosis = NULL, $additionalDiagnosis = NULL, $principalProcedurePhysician = NULL, $principalProcedure = NULL, $additionalProcedure = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->category = ($category===NULL) ? NULL : $this->validateCategory($category);
		$this->setting = ($setting===NULL) ? NULL : $this->validateSetting($setting);
		$this->specialty = ($specialty===NULL) ? NULL : $this->validateSpecialty($specialty);
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
		$this->primaryProvider = ($primaryProvider===NULL) ? NULL : $this->validatePrimaryProvider($primaryProvider);
		$this->primaryProviderEndorsement = ($primaryProviderEndorsement===NULL) ? NULL : $this->validatePrimaryProviderEndorsement($primaryProviderEndorsement);
		$this->secondaryProvider = ($secondaryProvider===NULL) ? NULL : $this->validateSecondaryProvider($secondaryProvider);
		$this->secondaryProviderEndorsement = ($secondaryProviderEndorsement===NULL) ? NULL : $this->validateSecondaryProviderEndorsement($secondaryProviderEndorsement);
		$this->dischargeDateTime = ($dischargeDateTime===NULL) ? NULL : $this->validateDischargeDateTime($dischargeDateTime);
		$this->admittingDiagnosis = ($admittingDiagnosis===NULL) ? NULL : $this->validateAdmittingDiagnosis($admittingDiagnosis);
		$this->principalDiagnosis = ($principalDiagnosis===NULL) ? NULL : $this->validatePrincipalDiagnosis($principalDiagnosis);
		$this->additionalDiagnosis = ($additionalDiagnosis===NULL) ? NULL : $this->validateAdditionalDiagnosis($additionalDiagnosis);
		$this->principalProcedurePhysician = ($principalProcedurePhysician===NULL) ? NULL : $this->validatePrincipalProcedurePhysician($principalProcedurePhysician);
		$this->principalProcedure = ($principalProcedure===NULL) ? NULL : $this->validatePrincipalProcedure($principalProcedure);
		$this->additionalProcedure = ($additionalProcedure===NULL) ? NULL : $this->validateAdditionalProcedure($additionalProcedure);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! $type instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($type) ) {
			$type = new \com\microsoft\wc\types\CodableValue ($type);
		}
	
		return $type;
	}

	public function getCategory() {
		if ($this->category===NULL) {
			$this->category = $this->createCategory();
		}
		return $this->category;
	}
	
	protected function createCategory() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCategory($category) {
		$this->category = $this->validateCategory($category);
	}

	protected function validateCategory($category) {
		if ( ! $category instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($category) ) {
			$category = new \com\microsoft\wc\types\CodableValue ($category);
		}
	
		return $category;
	}

	public function getSetting() {
		if ($this->setting===NULL) {
			$this->setting = $this->createSetting();
		}
		return $this->setting;
	}
	
	protected function createSetting() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSetting($setting) {
		$this->setting = $this->validateSetting($setting);
	}

	protected function validateSetting($setting) {
		if ( ! $setting instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($setting) ) {
			$setting = new \com\microsoft\wc\types\CodableValue ($setting);
		}
	
		return $setting;
	}

	public function getSpecialty() {
		if ($this->specialty===NULL) {
			$this->specialty = $this->createSpecialty();
		}
		return $this->specialty;
	}
	
	protected function createSpecialty() {
		return '';
	}

	public function setSpecialty($specialty) {
		$this->specialty = $this->validateSpecialty($specialty);
	}

	protected function validateSpecialty($specialty) {
		if ( ! is_string($specialty) && ! is_null($specialty) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'specialty', 'string'));
		}
	
		return $specialty;
	}

	public function getText() {
		if ($this->text===NULL) {
			$this->text = $this->createText();
		}
		return $this->text;
	}
	
	protected function createText() {
		return '';
	}

	public function setText($text) {
		$this->text = $this->validateText($text);
	}

	protected function validateText($text) {
		if ( ! is_string($text) && ! is_null($text) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'text', 'string'));
		}
	
		return $text;
	}

	public function getPrimaryProvider() {
		if ($this->primaryProvider===NULL) {
			$this->primaryProvider = $this->createPrimaryProvider();
		}
		return $this->primaryProvider;
	}
	
	protected function createPrimaryProvider() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setPrimaryProvider($primaryProvider) {
		$this->primaryProvider = $this->validatePrimaryProvider($primaryProvider);
	}

	protected function validatePrimaryProvider($primaryProvider) {
		if ( ! $primaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($primaryProvider) ) {
			$primaryProvider = new \com\microsoft\wc\thing\types\Person ($primaryProvider);
		}
	
		return $primaryProvider;
	}

	public function getPrimaryProviderEndorsement() {
		if ($this->primaryProviderEndorsement===NULL) {
			$this->primaryProviderEndorsement = $this->createPrimaryProviderEndorsement();
		}
		return $this->primaryProviderEndorsement;
	}
	
	protected function createPrimaryProviderEndorsement() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setPrimaryProviderEndorsement($primaryProviderEndorsement) {
		$this->primaryProviderEndorsement = $this->validatePrimaryProviderEndorsement($primaryProviderEndorsement);
	}

	protected function validatePrimaryProviderEndorsement($primaryProviderEndorsement) {
		if ( ! $primaryProviderEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($primaryProviderEndorsement) ) {
			$primaryProviderEndorsement = new \com\microsoft\wc\dates\DateTime ($primaryProviderEndorsement);
		}
	
		return $primaryProviderEndorsement;
	}

	public function getSecondaryProvider() {
		if ($this->secondaryProvider===NULL) {
			$this->secondaryProvider = $this->createSecondaryProvider();
		}
		return $this->secondaryProvider;
	}
	
	protected function createSecondaryProvider() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setSecondaryProvider($secondaryProvider) {
		$this->secondaryProvider = $this->validateSecondaryProvider($secondaryProvider);
	}

	protected function validateSecondaryProvider($secondaryProvider) {
		if ( ! $secondaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($secondaryProvider) ) {
			$secondaryProvider = new \com\microsoft\wc\thing\types\Person ($secondaryProvider);
		}
	
		return $secondaryProvider;
	}

	public function getSecondaryProviderEndorsement() {
		if ($this->secondaryProviderEndorsement===NULL) {
			$this->secondaryProviderEndorsement = $this->createSecondaryProviderEndorsement();
		}
		return $this->secondaryProviderEndorsement;
	}
	
	protected function createSecondaryProviderEndorsement() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setSecondaryProviderEndorsement($secondaryProviderEndorsement) {
		$this->secondaryProviderEndorsement = $this->validateSecondaryProviderEndorsement($secondaryProviderEndorsement);
	}

	protected function validateSecondaryProviderEndorsement($secondaryProviderEndorsement) {
		if ( ! $secondaryProviderEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($secondaryProviderEndorsement) ) {
			$secondaryProviderEndorsement = new \com\microsoft\wc\dates\DateTime ($secondaryProviderEndorsement);
		}
	
		return $secondaryProviderEndorsement;
	}

	public function getDischargeDateTime() {
		if ($this->dischargeDateTime===NULL) {
			$this->dischargeDateTime = $this->createDischargeDateTime();
		}
		return $this->dischargeDateTime;
	}
	
	protected function createDischargeDateTime() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDischargeDateTime($dischargeDateTime) {
		$this->dischargeDateTime = $this->validateDischargeDateTime($dischargeDateTime);
	}

	protected function validateDischargeDateTime($dischargeDateTime) {
		if ( ! $dischargeDateTime instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dischargeDateTime) ) {
			$dischargeDateTime = new \com\microsoft\wc\dates\ApproxDateTime ($dischargeDateTime);
		}
	
		return $dischargeDateTime;
	}

	public function getAdmittingDiagnosis() {
		if ($this->admittingDiagnosis===NULL) {
			$this->admittingDiagnosis = $this->createAdmittingDiagnosis();
		}
		return $this->admittingDiagnosis;
	}
	
	protected function createAdmittingDiagnosis() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setAdmittingDiagnosis($admittingDiagnosis) {
		$this->admittingDiagnosis = $this->validateAdmittingDiagnosis($admittingDiagnosis);
	}

	protected function validateAdmittingDiagnosis($admittingDiagnosis) {
		if ( ! $admittingDiagnosis instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($admittingDiagnosis) ) {
			$admittingDiagnosis = new \com\microsoft\wc\types\CodableValue ($admittingDiagnosis);
		}
	
		return $admittingDiagnosis;
	}

	public function getPrincipalDiagnosis() {
		if ($this->principalDiagnosis===NULL) {
			$this->principalDiagnosis = $this->createPrincipalDiagnosis();
		}
		return $this->principalDiagnosis;
	}
	
	protected function createPrincipalDiagnosis() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setPrincipalDiagnosis($principalDiagnosis) {
		$this->principalDiagnosis = $this->validatePrincipalDiagnosis($principalDiagnosis);
	}

	protected function validatePrincipalDiagnosis($principalDiagnosis) {
		if ( ! $principalDiagnosis instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($principalDiagnosis) ) {
			$principalDiagnosis = new \com\microsoft\wc\types\CodableValue ($principalDiagnosis);
		}
	
		return $principalDiagnosis;
	}

	public function getAdditionalDiagnosis() {
		if ($this->additionalDiagnosis===NULL) {
			$this->additionalDiagnosis = $this->createAdditionalDiagnosis();
		}
		return $this->additionalDiagnosis;
	}
	
	protected function createAdditionalDiagnosis() {
		return array();
	}

	public function setAdditionalDiagnosis($additionalDiagnosis) {
		$this->additionalDiagnosis = $this->validateAdditionalDiagnosis($additionalDiagnosis);
	}

	protected function validateAdditionalDiagnosis($additionalDiagnosis) {
		if ( ! $additionalDiagnosis instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($additionalDiagnosis) ) {
			$additionalDiagnosis = new \com\microsoft\wc\types\CodableValue ($additionalDiagnosis);
		}
		$count = count($additionalDiagnosis);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'additionalDiagnosis', 0));
		}
		foreach ($additionalDiagnosis as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'additionalDiagnosis', 'codable-value'));
			}
		}
	
		return $additionalDiagnosis;
	}

	public function addAdditionalDiagnosis($additionalDiagnosis) {
		$this->additionalDiagnosis[] = $additionalDiagnosis;
	}

	public function getPrincipalProcedurePhysician() {
		if ($this->principalProcedurePhysician===NULL) {
			$this->principalProcedurePhysician = $this->createPrincipalProcedurePhysician();
		}
		return $this->principalProcedurePhysician;
	}
	
	protected function createPrincipalProcedurePhysician() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setPrincipalProcedurePhysician($principalProcedurePhysician) {
		$this->principalProcedurePhysician = $this->validatePrincipalProcedurePhysician($principalProcedurePhysician);
	}

	protected function validatePrincipalProcedurePhysician($principalProcedurePhysician) {
		if ( ! $principalProcedurePhysician instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($principalProcedurePhysician) ) {
			$principalProcedurePhysician = new \com\microsoft\wc\thing\types\Person ($principalProcedurePhysician);
		}
	
		return $principalProcedurePhysician;
	}

	public function getPrincipalProcedure() {
		if ($this->principalProcedure===NULL) {
			$this->principalProcedure = $this->createPrincipalProcedure();
		}
		return $this->principalProcedure;
	}
	
	protected function createPrincipalProcedure() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setPrincipalProcedure($principalProcedure) {
		$this->principalProcedure = $this->validatePrincipalProcedure($principalProcedure);
	}

	protected function validatePrincipalProcedure($principalProcedure) {
		if ( ! $principalProcedure instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($principalProcedure) ) {
			$principalProcedure = new \com\microsoft\wc\types\CodableValue ($principalProcedure);
		}
	
		return $principalProcedure;
	}

	public function getAdditionalProcedure() {
		if ($this->additionalProcedure===NULL) {
			$this->additionalProcedure = $this->createAdditionalProcedure();
		}
		return $this->additionalProcedure;
	}
	
	protected function createAdditionalProcedure() {
		return array();
	}

	public function setAdditionalProcedure($additionalProcedure) {
		$this->additionalProcedure = $this->validateAdditionalProcedure($additionalProcedure);
	}

	protected function validateAdditionalProcedure($additionalProcedure) {
		if ( ! $additionalProcedure instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($additionalProcedure) ) {
			$additionalProcedure = new \com\microsoft\wc\types\CodableValue ($additionalProcedure);
		}
		$count = count($additionalProcedure);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'additionalProcedure', 0));
		}
		foreach ($additionalProcedure as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'additionalProcedure', 'codable-value'));
			}
		}
	
		return $additionalProcedure;
	}

	public function addAdditionalProcedure($additionalProcedure) {
		$this->additionalProcedure[] = $additionalProcedure;
	}
} // end class DischargeSummary
