<?php
namespace com\microsoft\wc\thing\discharge_summary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.discharge-summary", prefix="")
 * })
 * @XmlEntity	(xml="discharge-summary")
 */
class DischargeSummary extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to the discharge summary.
	 * This thing type describes the discharge summary of a person.
	 */

	const ID = '02EF57A2-A620-425A-8E92-A301542CCA54';
	const NAME = 'Discharge Summary';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
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

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
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
		if ( $type === FALSE ) {
			$this->_overrides['type'] = TRUE;
			return NULL;
		}

		if ( ! $type instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($type) ) {
			$type = new \com\microsoft\wc\types\CodableValue ($type);
		}

		unset ($this->_overrides['type']);
	
		return $type;
	}

	public function getCategory($autoCreate = TRUE) {
		if ($this->category===NULL && $autoCreate && ! isset($this->_overrides['category']) ) {
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
		if ( $category === FALSE ) {
			$this->_overrides['category'] = TRUE;
			return NULL;
		}

		if ( ! $category instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($category) ) {
			$category = new \com\microsoft\wc\types\CodableValue ($category);
		}

		unset ($this->_overrides['category']);
	
		return $category;
	}

	public function getSetting($autoCreate = TRUE) {
		if ($this->setting===NULL && $autoCreate && ! isset($this->_overrides['setting']) ) {
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
		if ( $setting === FALSE ) {
			$this->_overrides['setting'] = TRUE;
			return NULL;
		}

		if ( ! $setting instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($setting) ) {
			$setting = new \com\microsoft\wc\types\CodableValue ($setting);
		}

		unset ($this->_overrides['setting']);
	
		return $setting;
	}

	public function getSpecialty($autoCreate = TRUE) {
		if ($this->specialty===NULL && $autoCreate && ! isset($this->_overrides['specialty']) ) {
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

	public function getText($autoCreate = TRUE) {
		if ($this->text===NULL && $autoCreate && ! isset($this->_overrides['text']) ) {
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

	public function getPrimaryProvider($autoCreate = TRUE) {
		if ($this->primaryProvider===NULL && $autoCreate && ! isset($this->_overrides['primaryProvider']) ) {
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
		if ( $primaryProvider === FALSE ) {
			$this->_overrides['primaryProvider'] = TRUE;
			return NULL;
		}

		if ( ! $primaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($primaryProvider) ) {
			$primaryProvider = new \com\microsoft\wc\thing\types\Person ($primaryProvider);
		}

		unset ($this->_overrides['primaryProvider']);
	
		return $primaryProvider;
	}

	public function getPrimaryProviderEndorsement($autoCreate = TRUE) {
		if ($this->primaryProviderEndorsement===NULL && $autoCreate && ! isset($this->_overrides['primaryProviderEndorsement']) ) {
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
		if ( $primaryProviderEndorsement === FALSE ) {
			$this->_overrides['primaryProviderEndorsement'] = TRUE;
			return NULL;
		}

		if ( ! $primaryProviderEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($primaryProviderEndorsement) ) {
			$primaryProviderEndorsement = new \com\microsoft\wc\dates\DateTime ($primaryProviderEndorsement);
		}

		unset ($this->_overrides['primaryProviderEndorsement']);
	
		return $primaryProviderEndorsement;
	}

	public function getSecondaryProvider($autoCreate = TRUE) {
		if ($this->secondaryProvider===NULL && $autoCreate && ! isset($this->_overrides['secondaryProvider']) ) {
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
		if ( $secondaryProvider === FALSE ) {
			$this->_overrides['secondaryProvider'] = TRUE;
			return NULL;
		}

		if ( ! $secondaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($secondaryProvider) ) {
			$secondaryProvider = new \com\microsoft\wc\thing\types\Person ($secondaryProvider);
		}

		unset ($this->_overrides['secondaryProvider']);
	
		return $secondaryProvider;
	}

	public function getSecondaryProviderEndorsement($autoCreate = TRUE) {
		if ($this->secondaryProviderEndorsement===NULL && $autoCreate && ! isset($this->_overrides['secondaryProviderEndorsement']) ) {
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
		if ( $secondaryProviderEndorsement === FALSE ) {
			$this->_overrides['secondaryProviderEndorsement'] = TRUE;
			return NULL;
		}

		if ( ! $secondaryProviderEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($secondaryProviderEndorsement) ) {
			$secondaryProviderEndorsement = new \com\microsoft\wc\dates\DateTime ($secondaryProviderEndorsement);
		}

		unset ($this->_overrides['secondaryProviderEndorsement']);
	
		return $secondaryProviderEndorsement;
	}

	public function getDischargeDateTime($autoCreate = TRUE) {
		if ($this->dischargeDateTime===NULL && $autoCreate && ! isset($this->_overrides['dischargeDateTime']) ) {
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
		if ( $dischargeDateTime === FALSE ) {
			$this->_overrides['dischargeDateTime'] = TRUE;
			return NULL;
		}

		if ( ! $dischargeDateTime instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dischargeDateTime) ) {
			$dischargeDateTime = new \com\microsoft\wc\dates\ApproxDateTime ($dischargeDateTime);
		}

		unset ($this->_overrides['dischargeDateTime']);
	
		return $dischargeDateTime;
	}

	public function getAdmittingDiagnosis($autoCreate = TRUE) {
		if ($this->admittingDiagnosis===NULL && $autoCreate && ! isset($this->_overrides['admittingDiagnosis']) ) {
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
		if ( $admittingDiagnosis === FALSE ) {
			$this->_overrides['admittingDiagnosis'] = TRUE;
			return NULL;
		}

		if ( ! $admittingDiagnosis instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($admittingDiagnosis) ) {
			$admittingDiagnosis = new \com\microsoft\wc\types\CodableValue ($admittingDiagnosis);
		}

		unset ($this->_overrides['admittingDiagnosis']);
	
		return $admittingDiagnosis;
	}

	public function getPrincipalDiagnosis($autoCreate = TRUE) {
		if ($this->principalDiagnosis===NULL && $autoCreate && ! isset($this->_overrides['principalDiagnosis']) ) {
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
		if ( $principalDiagnosis === FALSE ) {
			$this->_overrides['principalDiagnosis'] = TRUE;
			return NULL;
		}

		if ( ! $principalDiagnosis instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($principalDiagnosis) ) {
			$principalDiagnosis = new \com\microsoft\wc\types\CodableValue ($principalDiagnosis);
		}

		unset ($this->_overrides['principalDiagnosis']);
	
		return $principalDiagnosis;
	}

	public function getAdditionalDiagnosis($autoCreate = TRUE) {
		if ($this->additionalDiagnosis===NULL && $autoCreate && ! isset($this->_overrides['additionalDiagnosis']) ) {
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
		if ( $additionalDiagnosis === FALSE ) {
			$this->_overrides['additionalDiagnosis'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($additionalDiagnosis) && ! is_null($additionalDiagnosis) ) {
			$additionalDiagnosis = array($additionalDiagnosis);
		}

		unset ($this->_overrides['additionalDiagnosis']);
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

	public function getPrincipalProcedurePhysician($autoCreate = TRUE) {
		if ($this->principalProcedurePhysician===NULL && $autoCreate && ! isset($this->_overrides['principalProcedurePhysician']) ) {
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
		if ( $principalProcedurePhysician === FALSE ) {
			$this->_overrides['principalProcedurePhysician'] = TRUE;
			return NULL;
		}

		if ( ! $principalProcedurePhysician instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($principalProcedurePhysician) ) {
			$principalProcedurePhysician = new \com\microsoft\wc\thing\types\Person ($principalProcedurePhysician);
		}

		unset ($this->_overrides['principalProcedurePhysician']);
	
		return $principalProcedurePhysician;
	}

	public function getPrincipalProcedure($autoCreate = TRUE) {
		if ($this->principalProcedure===NULL && $autoCreate && ! isset($this->_overrides['principalProcedure']) ) {
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
		if ( $principalProcedure === FALSE ) {
			$this->_overrides['principalProcedure'] = TRUE;
			return NULL;
		}

		if ( ! $principalProcedure instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($principalProcedure) ) {
			$principalProcedure = new \com\microsoft\wc\types\CodableValue ($principalProcedure);
		}

		unset ($this->_overrides['principalProcedure']);
	
		return $principalProcedure;
	}

	public function getAdditionalProcedure($autoCreate = TRUE) {
		if ($this->additionalProcedure===NULL && $autoCreate && ! isset($this->_overrides['additionalProcedure']) ) {
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
		if ( $additionalProcedure === FALSE ) {
			$this->_overrides['additionalProcedure'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($additionalProcedure) && ! is_null($additionalProcedure) ) {
			$additionalProcedure = array($additionalProcedure);
		}

		unset ($this->_overrides['additionalProcedure']);
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
