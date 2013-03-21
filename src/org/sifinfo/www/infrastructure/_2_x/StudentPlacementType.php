<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentPlacementType")
 */
class StudentPlacementType {
	/**
	 * This object contains information that describes a specific instructional, related or transitional service that has been prescribed or recommended in the program plan developed for a student who has been placed in an individualized special program.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="StudentPlacementAsOfDate")
	 */
	protected $studentPlacementAsOfDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Service", name="Service")
	 */
	protected $service;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServiceCategory", name="ServiceCategory")
	 */
	protected $serviceCategory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServiceFundingSources", name="ServiceFundingSources")
	 */
	protected $serviceFundingSources;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServicingPublicAgency", name="ServicingPublicAgency")
	 */
	protected $servicingPublicAgency;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServicingSchool", name="ServicingSchool")
	 */
	protected $servicingSchool;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolWhereServiceDelivered", name="SchoolWhereServiceDelivered")
	 */
	protected $schoolWhereServiceDelivered;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServiceProviderType", name="ServiceProviderType")
	 */
	protected $serviceProviderType;

	/**
	 * @XmlText	(type="string", name="AgencyType")
	 */
	protected $agencyType;

	/**
	 * @XmlText	(type="string", name="ServiceProviderName")
	 */
	protected $serviceProviderName;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServiceSetting", name="ServiceSetting")
	 */
	protected $serviceSetting;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\WhenServiceProvided", name="WhenServiceProvided")
	 */
	protected $whenServiceProvided;

	/**
	 * @XmlText	(type="string", name="LatestStartDate")
	 */
	protected $latestStartDate;

	/**
	 * @XmlText	(type="string", name="StartDate")
	 */
	protected $startDate;

	/**
	 * @XmlText	(type="string", name="EndDate")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FrequencyTime", name="FrequencyTime")
	 */
	protected $frequencyTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DirectTime", name="DirectTime")
	 */
	protected $directTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IndirectTime", name="IndirectTime")
	 */
	protected $indirectTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TotalServiceDuration", name="TotalServiceDuration")
	 */
	protected $totalServiceDuration;

	/**
	 * @XmlText	(type="boolean", name="IncludedInSpecialEducationFTE")
	 */
	protected $includedInSpecialEducationFTE;

	/**
	 * @XmlText	(type="boolean", name="SpecialNeedsTransportation")
	 */
	protected $specialNeedsTransportation;

	/**
	 * @XmlText	(type="boolean", name="AssistiveTechnology")
	 */
	protected $assistiveTechnology;

	/**
	 * @XmlText	(type="string", name="EntryPerson")
	 */
	protected $entryPerson;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFMetadataType", name="SIF_Metadata")
	 */
	protected $sifMetadata;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	/**
	 * @XmlAttribute	(type="string", name="RefId")
	 */
	protected $refId;

	/**
	 * @XmlAttribute	(type="string", name="StudentParticipationRefId")
	 */
	protected $studentParticipationRefId;

	/**
	 * @XmlAttribute	(type="string", name="StudentPersonalRefId")
	 */
	protected $studentPersonalRefId;

	public function __construct($studentPlacementAsOfDate = NULL, $service = NULL, $serviceCategory = NULL, $serviceFundingSources = NULL, $servicingPublicAgency = NULL, $servicingSchool = NULL, $schoolWhereServiceDelivered = NULL, $serviceProviderType = NULL, $agencyType = NULL, $serviceProviderName = NULL, $serviceSetting = NULL, $whenServiceProvided = NULL, $latestStartDate = NULL, $startDate = NULL, $endDate = NULL, $frequencyTime = NULL, $directTime = NULL, $indirectTime = NULL, $totalServiceDuration = NULL, $includedInSpecialEducationFTE = NULL, $specialNeedsTransportation = NULL, $assistiveTechnology = NULL, $entryPerson = NULL, $sifMetadata = NULL, $sifExtendedElements = NULL, $refId = NULL, $studentParticipationRefId = NULL, $studentPersonalRefId = NULL) {
		$this->studentPlacementAsOfDate = ($studentPlacementAsOfDate===NULL) ? NULL : $this->validateStudentPlacementAsOfDate($studentPlacementAsOfDate);
		$this->service = ($service===NULL) ? NULL : $this->validateService($service);
		$this->serviceCategory = ($serviceCategory===NULL) ? NULL : $this->validateServiceCategory($serviceCategory);
		$this->serviceFundingSources = ($serviceFundingSources===NULL) ? NULL : $this->validateServiceFundingSources($serviceFundingSources);
		$this->servicingPublicAgency = ($servicingPublicAgency===NULL) ? NULL : $this->validateServicingPublicAgency($servicingPublicAgency);
		$this->servicingSchool = ($servicingSchool===NULL) ? NULL : $this->validateServicingSchool($servicingSchool);
		$this->schoolWhereServiceDelivered = ($schoolWhereServiceDelivered===NULL) ? NULL : $this->validateSchoolWhereServiceDelivered($schoolWhereServiceDelivered);
		$this->serviceProviderType = ($serviceProviderType===NULL) ? NULL : $this->validateServiceProviderType($serviceProviderType);
		$this->agencyType = ($agencyType===NULL) ? NULL : $this->validateAgencyType($agencyType);
		$this->serviceProviderName = ($serviceProviderName===NULL) ? NULL : $this->validateServiceProviderName($serviceProviderName);
		$this->serviceSetting = ($serviceSetting===NULL) ? NULL : $this->validateServiceSetting($serviceSetting);
		$this->whenServiceProvided = ($whenServiceProvided===NULL) ? NULL : $this->validateWhenServiceProvided($whenServiceProvided);
		$this->latestStartDate = ($latestStartDate===NULL) ? NULL : $this->validateLatestStartDate($latestStartDate);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->frequencyTime = ($frequencyTime===NULL) ? NULL : $this->validateFrequencyTime($frequencyTime);
		$this->directTime = ($directTime===NULL) ? NULL : $this->validateDirectTime($directTime);
		$this->indirectTime = ($indirectTime===NULL) ? NULL : $this->validateIndirectTime($indirectTime);
		$this->totalServiceDuration = ($totalServiceDuration===NULL) ? NULL : $this->validateTotalServiceDuration($totalServiceDuration);
		$this->includedInSpecialEducationFTE = ($includedInSpecialEducationFTE===NULL) ? NULL : $this->validateIncludedInSpecialEducationFTE($includedInSpecialEducationFTE);
		$this->specialNeedsTransportation = ($specialNeedsTransportation===NULL) ? NULL : $this->validateSpecialNeedsTransportation($specialNeedsTransportation);
		$this->assistiveTechnology = ($assistiveTechnology===NULL) ? NULL : $this->validateAssistiveTechnology($assistiveTechnology);
		$this->entryPerson = ($entryPerson===NULL) ? NULL : $this->validateEntryPerson($entryPerson);
		$this->sifMetadata = ($sifMetadata===NULL) ? NULL : $this->validateSifMetadata($sifMetadata);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->refId = ($refId===NULL) ? NULL : $this->validateRefId($refId);
		$this->studentParticipationRefId = ($studentParticipationRefId===NULL) ? NULL : $this->validateStudentParticipationRefId($studentParticipationRefId);
		$this->studentPersonalRefId = ($studentPersonalRefId===NULL) ? NULL : $this->validateStudentPersonalRefId($studentPersonalRefId);
	}

	public function getStudentPlacementAsOfDate($autoCreate = TRUE) {
		if ($this->studentPlacementAsOfDate===NULL && $autoCreate && ! isset($this->_overrides['studentPlacementAsOfDate']) ) {
			$this->studentPlacementAsOfDate = $this->createStudentPlacementAsOfDate();
		}
		return $this->studentPlacementAsOfDate;
	}
	
	protected function createStudentPlacementAsOfDate() {
		return NULL;
	}

	public function setStudentPlacementAsOfDate($studentPlacementAsOfDate) {
		$this->studentPlacementAsOfDate = $this->validateStudentPlacementAsOfDate($studentPlacementAsOfDate);
	}

	protected function validateStudentPlacementAsOfDate($studentPlacementAsOfDate) {
		if (!is_string($studentPlacementAsOfDate)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'studentPlacementAsOfDate', 'string'));
		}
	
		return $studentPlacementAsOfDate;
	}

	public function getService($autoCreate = TRUE) {
		if ($this->service===NULL && $autoCreate && ! isset($this->_overrides['service']) ) {
			$this->service = $this->createService();
		}
		return $this->service;
	}
	
	protected function createService() {
		return new \org\sifinfo\www\infrastructure\_2_x\Service();
	}

	public function setService($service) {
		$this->service = $this->validateService($service);
	}

	protected function validateService($service) {
		if ( ! $service instanceof \org\sifinfo\www\infrastructure\_2_x\Service ) {
			$service = new \org\sifinfo\www\infrastructure\_2_x\Service ($service);
		}
	
		return $service;
	}

	public function getServiceCategory($autoCreate = TRUE) {
		if ($this->serviceCategory===NULL && $autoCreate && ! isset($this->_overrides['serviceCategory']) ) {
			$this->serviceCategory = $this->createServiceCategory();
		}
		return $this->serviceCategory;
	}
	
	protected function createServiceCategory() {
		return new \org\sifinfo\www\infrastructure\_2_x\ServiceCategory();
	}

	public function setServiceCategory($serviceCategory) {
		$this->serviceCategory = $this->validateServiceCategory($serviceCategory);
	}

	protected function validateServiceCategory($serviceCategory) {
		if ( $serviceCategory === FALSE ) {
			$this->_overrides['serviceCategory'] = TRUE;
			return NULL;
		}

		if ( ! $serviceCategory instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceCategory  && ! is_null($serviceCategory) ) {
			$serviceCategory = new \org\sifinfo\www\infrastructure\_2_x\ServiceCategory ($serviceCategory);
		}

		unset ($this->_overrides['serviceCategory']);
	
		return $serviceCategory;
	}

	public function getServiceFundingSources($autoCreate = TRUE) {
		if ($this->serviceFundingSources===NULL && $autoCreate && ! isset($this->_overrides['serviceFundingSources']) ) {
			$this->serviceFundingSources = $this->createServiceFundingSources();
		}
		return $this->serviceFundingSources;
	}
	
	protected function createServiceFundingSources() {
		return new \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSources();
	}

	public function setServiceFundingSources($serviceFundingSources) {
		$this->serviceFundingSources = $this->validateServiceFundingSources($serviceFundingSources);
	}

	protected function validateServiceFundingSources($serviceFundingSources) {
		if ( $serviceFundingSources === FALSE ) {
			$this->_overrides['serviceFundingSources'] = TRUE;
			return NULL;
		}

		if ( ! $serviceFundingSources instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSources  && ! is_null($serviceFundingSources) ) {
			$serviceFundingSources = new \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSources ($serviceFundingSources);
		}

		unset ($this->_overrides['serviceFundingSources']);
	
		return $serviceFundingSources;
	}

	public function getServicingPublicAgency($autoCreate = TRUE) {
		if ($this->servicingPublicAgency===NULL && $autoCreate && ! isset($this->_overrides['servicingPublicAgency']) ) {
			$this->servicingPublicAgency = $this->createServicingPublicAgency();
		}
		return $this->servicingPublicAgency;
	}
	
	protected function createServicingPublicAgency() {
		return new \org\sifinfo\www\infrastructure\_2_x\ServicingPublicAgency();
	}

	public function setServicingPublicAgency($servicingPublicAgency) {
		$this->servicingPublicAgency = $this->validateServicingPublicAgency($servicingPublicAgency);
	}

	protected function validateServicingPublicAgency($servicingPublicAgency) {
		if ( $servicingPublicAgency === FALSE ) {
			$this->_overrides['servicingPublicAgency'] = TRUE;
			return NULL;
		}

		if ( ! $servicingPublicAgency instanceof \org\sifinfo\www\infrastructure\_2_x\ServicingPublicAgency  && ! is_null($servicingPublicAgency) ) {
			$servicingPublicAgency = new \org\sifinfo\www\infrastructure\_2_x\ServicingPublicAgency ($servicingPublicAgency);
		}

		unset ($this->_overrides['servicingPublicAgency']);
	
		return $servicingPublicAgency;
	}

	public function getServicingSchool($autoCreate = TRUE) {
		if ($this->servicingSchool===NULL && $autoCreate && ! isset($this->_overrides['servicingSchool']) ) {
			$this->servicingSchool = $this->createServicingSchool();
		}
		return $this->servicingSchool;
	}
	
	protected function createServicingSchool() {
		return new \org\sifinfo\www\infrastructure\_2_x\ServicingSchool();
	}

	public function setServicingSchool($servicingSchool) {
		$this->servicingSchool = $this->validateServicingSchool($servicingSchool);
	}

	protected function validateServicingSchool($servicingSchool) {
		if ( $servicingSchool === FALSE ) {
			$this->_overrides['servicingSchool'] = TRUE;
			return NULL;
		}

		if ( ! $servicingSchool instanceof \org\sifinfo\www\infrastructure\_2_x\ServicingSchool  && ! is_null($servicingSchool) ) {
			$servicingSchool = new \org\sifinfo\www\infrastructure\_2_x\ServicingSchool ($servicingSchool);
		}

		unset ($this->_overrides['servicingSchool']);
	
		return $servicingSchool;
	}

	public function getSchoolWhereServiceDelivered($autoCreate = TRUE) {
		if ($this->schoolWhereServiceDelivered===NULL && $autoCreate && ! isset($this->_overrides['schoolWhereServiceDelivered']) ) {
			$this->schoolWhereServiceDelivered = $this->createSchoolWhereServiceDelivered();
		}
		return $this->schoolWhereServiceDelivered;
	}
	
	protected function createSchoolWhereServiceDelivered() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolWhereServiceDelivered();
	}

	public function setSchoolWhereServiceDelivered($schoolWhereServiceDelivered) {
		$this->schoolWhereServiceDelivered = $this->validateSchoolWhereServiceDelivered($schoolWhereServiceDelivered);
	}

	protected function validateSchoolWhereServiceDelivered($schoolWhereServiceDelivered) {
		if ( $schoolWhereServiceDelivered === FALSE ) {
			$this->_overrides['schoolWhereServiceDelivered'] = TRUE;
			return NULL;
		}

		if ( ! $schoolWhereServiceDelivered instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolWhereServiceDelivered  && ! is_null($schoolWhereServiceDelivered) ) {
			$schoolWhereServiceDelivered = new \org\sifinfo\www\infrastructure\_2_x\SchoolWhereServiceDelivered ($schoolWhereServiceDelivered);
		}

		unset ($this->_overrides['schoolWhereServiceDelivered']);
	
		return $schoolWhereServiceDelivered;
	}

	public function getServiceProviderType($autoCreate = TRUE) {
		if ($this->serviceProviderType===NULL && $autoCreate && ! isset($this->_overrides['serviceProviderType']) ) {
			$this->serviceProviderType = $this->createServiceProviderType();
		}
		return $this->serviceProviderType;
	}
	
	protected function createServiceProviderType() {
		return new \org\sifinfo\www\infrastructure\_2_x\ServiceProviderType();
	}

	public function setServiceProviderType($serviceProviderType) {
		$this->serviceProviderType = $this->validateServiceProviderType($serviceProviderType);
	}

	protected function validateServiceProviderType($serviceProviderType) {
		if ( $serviceProviderType === FALSE ) {
			$this->_overrides['serviceProviderType'] = TRUE;
			return NULL;
		}

		if ( ! $serviceProviderType instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceProviderType  && ! is_null($serviceProviderType) ) {
			$serviceProviderType = new \org\sifinfo\www\infrastructure\_2_x\ServiceProviderType ($serviceProviderType);
		}

		unset ($this->_overrides['serviceProviderType']);
	
		return $serviceProviderType;
	}

	public function getAgencyType($autoCreate = TRUE) {
		if ($this->agencyType===NULL && $autoCreate && ! isset($this->_overrides['agencyType']) ) {
			$this->agencyType = $this->createAgencyType();
		}
		return $this->agencyType;
	}
	
	protected function createAgencyType() {
		return NULL;
	}

	public function setAgencyType($agencyType) {
		$this->agencyType = $this->validateAgencyType($agencyType);
	}

	protected function validateAgencyType($agencyType) {
		if ( ! is_string($agencyType) && ! is_null($agencyType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'agencyType', 'string'));
		}
	
		return $agencyType;
	}

	public function getServiceProviderName($autoCreate = TRUE) {
		if ($this->serviceProviderName===NULL && $autoCreate && ! isset($this->_overrides['serviceProviderName']) ) {
			$this->serviceProviderName = $this->createServiceProviderName();
		}
		return $this->serviceProviderName;
	}
	
	protected function createServiceProviderName() {
		return NULL;
	}

	public function setServiceProviderName($serviceProviderName) {
		$this->serviceProviderName = $this->validateServiceProviderName($serviceProviderName);
	}

	protected function validateServiceProviderName($serviceProviderName) {
		if ( ! is_string($serviceProviderName) && ! is_null($serviceProviderName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'serviceProviderName', 'string'));
		}
	
		return $serviceProviderName;
	}

	public function getServiceSetting($autoCreate = TRUE) {
		if ($this->serviceSetting===NULL && $autoCreate && ! isset($this->_overrides['serviceSetting']) ) {
			$this->serviceSetting = $this->createServiceSetting();
		}
		return $this->serviceSetting;
	}
	
	protected function createServiceSetting() {
		return new \org\sifinfo\www\infrastructure\_2_x\ServiceSetting();
	}

	public function setServiceSetting($serviceSetting) {
		$this->serviceSetting = $this->validateServiceSetting($serviceSetting);
	}

	protected function validateServiceSetting($serviceSetting) {
		if ( $serviceSetting === FALSE ) {
			$this->_overrides['serviceSetting'] = TRUE;
			return NULL;
		}

		if ( ! $serviceSetting instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceSetting  && ! is_null($serviceSetting) ) {
			$serviceSetting = new \org\sifinfo\www\infrastructure\_2_x\ServiceSetting ($serviceSetting);
		}

		unset ($this->_overrides['serviceSetting']);
	
		return $serviceSetting;
	}

	public function getWhenServiceProvided($autoCreate = TRUE) {
		if ($this->whenServiceProvided===NULL && $autoCreate && ! isset($this->_overrides['whenServiceProvided']) ) {
			$this->whenServiceProvided = $this->createWhenServiceProvided();
		}
		return $this->whenServiceProvided;
	}
	
	protected function createWhenServiceProvided() {
		return new \org\sifinfo\www\infrastructure\_2_x\WhenServiceProvided();
	}

	public function setWhenServiceProvided($whenServiceProvided) {
		$this->whenServiceProvided = $this->validateWhenServiceProvided($whenServiceProvided);
	}

	protected function validateWhenServiceProvided($whenServiceProvided) {
		if ( $whenServiceProvided === FALSE ) {
			$this->_overrides['whenServiceProvided'] = TRUE;
			return NULL;
		}

		if ( ! $whenServiceProvided instanceof \org\sifinfo\www\infrastructure\_2_x\WhenServiceProvided  && ! is_null($whenServiceProvided) ) {
			$whenServiceProvided = new \org\sifinfo\www\infrastructure\_2_x\WhenServiceProvided ($whenServiceProvided);
		}

		unset ($this->_overrides['whenServiceProvided']);
	
		return $whenServiceProvided;
	}

	public function getLatestStartDate($autoCreate = TRUE) {
		if ($this->latestStartDate===NULL && $autoCreate && ! isset($this->_overrides['latestStartDate']) ) {
			$this->latestStartDate = $this->createLatestStartDate();
		}
		return $this->latestStartDate;
	}
	
	protected function createLatestStartDate() {
		return NULL;
	}

	public function setLatestStartDate($latestStartDate) {
		$this->latestStartDate = $this->validateLatestStartDate($latestStartDate);
	}

	protected function validateLatestStartDate($latestStartDate) {
		if ( ! is_string($latestStartDate) && ! is_null($latestStartDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'latestStartDate', 'string'));
		}
	
		return $latestStartDate;
	}

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return NULL;
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( ! is_string($startDate) && ! is_null($startDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'startDate', 'string'));
		}
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return NULL;
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( ! is_string($endDate) && ! is_null($endDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'endDate', 'string'));
		}
	
		return $endDate;
	}

	public function getFrequencyTime($autoCreate = TRUE) {
		if ($this->frequencyTime===NULL && $autoCreate && ! isset($this->_overrides['frequencyTime']) ) {
			$this->frequencyTime = $this->createFrequencyTime();
		}
		return $this->frequencyTime;
	}
	
	protected function createFrequencyTime() {
		return new \org\sifinfo\www\infrastructure\_2_x\FrequencyTime();
	}

	public function setFrequencyTime($frequencyTime) {
		$this->frequencyTime = $this->validateFrequencyTime($frequencyTime);
	}

	protected function validateFrequencyTime($frequencyTime) {
		if ( $frequencyTime === FALSE ) {
			$this->_overrides['frequencyTime'] = TRUE;
			return NULL;
		}

		if ( ! $frequencyTime instanceof \org\sifinfo\www\infrastructure\_2_x\FrequencyTime  && ! is_null($frequencyTime) ) {
			$frequencyTime = new \org\sifinfo\www\infrastructure\_2_x\FrequencyTime ($frequencyTime);
		}

		unset ($this->_overrides['frequencyTime']);
	
		return $frequencyTime;
	}

	public function getDirectTime($autoCreate = TRUE) {
		if ($this->directTime===NULL && $autoCreate && ! isset($this->_overrides['directTime']) ) {
			$this->directTime = $this->createDirectTime();
		}
		return $this->directTime;
	}
	
	protected function createDirectTime() {
		return new \org\sifinfo\www\infrastructure\_2_x\DirectTime();
	}

	public function setDirectTime($directTime) {
		$this->directTime = $this->validateDirectTime($directTime);
	}

	protected function validateDirectTime($directTime) {
		if ( $directTime === FALSE ) {
			$this->_overrides['directTime'] = TRUE;
			return NULL;
		}

		if ( ! $directTime instanceof \org\sifinfo\www\infrastructure\_2_x\DirectTime  && ! is_null($directTime) ) {
			$directTime = new \org\sifinfo\www\infrastructure\_2_x\DirectTime ($directTime);
		}

		unset ($this->_overrides['directTime']);
	
		return $directTime;
	}

	public function getIndirectTime($autoCreate = TRUE) {
		if ($this->indirectTime===NULL && $autoCreate && ! isset($this->_overrides['indirectTime']) ) {
			$this->indirectTime = $this->createIndirectTime();
		}
		return $this->indirectTime;
	}
	
	protected function createIndirectTime() {
		return new \org\sifinfo\www\infrastructure\_2_x\IndirectTime();
	}

	public function setIndirectTime($indirectTime) {
		$this->indirectTime = $this->validateIndirectTime($indirectTime);
	}

	protected function validateIndirectTime($indirectTime) {
		if ( $indirectTime === FALSE ) {
			$this->_overrides['indirectTime'] = TRUE;
			return NULL;
		}

		if ( ! $indirectTime instanceof \org\sifinfo\www\infrastructure\_2_x\IndirectTime  && ! is_null($indirectTime) ) {
			$indirectTime = new \org\sifinfo\www\infrastructure\_2_x\IndirectTime ($indirectTime);
		}

		unset ($this->_overrides['indirectTime']);
	
		return $indirectTime;
	}

	public function getTotalServiceDuration($autoCreate = TRUE) {
		if ($this->totalServiceDuration===NULL && $autoCreate && ! isset($this->_overrides['totalServiceDuration']) ) {
			$this->totalServiceDuration = $this->createTotalServiceDuration();
		}
		return $this->totalServiceDuration;
	}
	
	protected function createTotalServiceDuration() {
		return new \org\sifinfo\www\infrastructure\_2_x\TotalServiceDuration();
	}

	public function setTotalServiceDuration($totalServiceDuration) {
		$this->totalServiceDuration = $this->validateTotalServiceDuration($totalServiceDuration);
	}

	protected function validateTotalServiceDuration($totalServiceDuration) {
		if ( $totalServiceDuration === FALSE ) {
			$this->_overrides['totalServiceDuration'] = TRUE;
			return NULL;
		}

		if ( ! $totalServiceDuration instanceof \org\sifinfo\www\infrastructure\_2_x\TotalServiceDuration  && ! is_null($totalServiceDuration) ) {
			$totalServiceDuration = new \org\sifinfo\www\infrastructure\_2_x\TotalServiceDuration ($totalServiceDuration);
		}

		unset ($this->_overrides['totalServiceDuration']);
	
		return $totalServiceDuration;
	}

	public function getIncludedInSpecialEducationFTE($autoCreate = TRUE) {
		if ($this->includedInSpecialEducationFTE===NULL && $autoCreate && ! isset($this->_overrides['includedInSpecialEducationFTE']) ) {
			$this->includedInSpecialEducationFTE = $this->createIncludedInSpecialEducationFTE();
		}
		return $this->includedInSpecialEducationFTE;
	}
	
	protected function createIncludedInSpecialEducationFTE() {
		return FALSE;
	}

	public function setIncludedInSpecialEducationFTE($includedInSpecialEducationFTE) {
		$this->includedInSpecialEducationFTE = $this->validateIncludedInSpecialEducationFTE($includedInSpecialEducationFTE);
	}

	protected function validateIncludedInSpecialEducationFTE($includedInSpecialEducationFTE) {
		if ( ! is_bool($includedInSpecialEducationFTE) && ! is_null($includedInSpecialEducationFTE) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'includedInSpecialEducationFTE', 'boolean'));
		}
	
		return $includedInSpecialEducationFTE;
	}

	public function getSpecialNeedsTransportation($autoCreate = TRUE) {
		if ($this->specialNeedsTransportation===NULL && $autoCreate && ! isset($this->_overrides['specialNeedsTransportation']) ) {
			$this->specialNeedsTransportation = $this->createSpecialNeedsTransportation();
		}
		return $this->specialNeedsTransportation;
	}
	
	protected function createSpecialNeedsTransportation() {
		return FALSE;
	}

	public function setSpecialNeedsTransportation($specialNeedsTransportation) {
		$this->specialNeedsTransportation = $this->validateSpecialNeedsTransportation($specialNeedsTransportation);
	}

	protected function validateSpecialNeedsTransportation($specialNeedsTransportation) {
		if ( ! is_bool($specialNeedsTransportation) && ! is_null($specialNeedsTransportation) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'specialNeedsTransportation', 'boolean'));
		}
	
		return $specialNeedsTransportation;
	}

	public function getAssistiveTechnology($autoCreate = TRUE) {
		if ($this->assistiveTechnology===NULL && $autoCreate && ! isset($this->_overrides['assistiveTechnology']) ) {
			$this->assistiveTechnology = $this->createAssistiveTechnology();
		}
		return $this->assistiveTechnology;
	}
	
	protected function createAssistiveTechnology() {
		return FALSE;
	}

	public function setAssistiveTechnology($assistiveTechnology) {
		$this->assistiveTechnology = $this->validateAssistiveTechnology($assistiveTechnology);
	}

	protected function validateAssistiveTechnology($assistiveTechnology) {
		if ( ! is_bool($assistiveTechnology) && ! is_null($assistiveTechnology) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'assistiveTechnology', 'boolean'));
		}
	
		return $assistiveTechnology;
	}

	public function getEntryPerson($autoCreate = TRUE) {
		if ($this->entryPerson===NULL && $autoCreate && ! isset($this->_overrides['entryPerson']) ) {
			$this->entryPerson = $this->createEntryPerson();
		}
		return $this->entryPerson;
	}
	
	protected function createEntryPerson() {
		return NULL;
	}

	public function setEntryPerson($entryPerson) {
		$this->entryPerson = $this->validateEntryPerson($entryPerson);
	}

	protected function validateEntryPerson($entryPerson) {
		if ( ! is_string($entryPerson) && ! is_null($entryPerson) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'entryPerson', 'string'));
		}
	
		return $entryPerson;
	}

	public function getSifMetadata($autoCreate = TRUE) {
		if ($this->sifMetadata===NULL && $autoCreate && ! isset($this->_overrides['sifMetadata']) ) {
			$this->sifMetadata = $this->createSifMetadata();
		}
		return $this->sifMetadata;
	}
	
	protected function createSifMetadata() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType();
	}

	public function setSifMetadata($sifMetadata) {
		$this->sifMetadata = $this->validateSifMetadata($sifMetadata);
	}

	protected function validateSifMetadata($sifMetadata) {
		if ( $sifMetadata === FALSE ) {
			$this->_overrides['sifMetadata'] = TRUE;
			return NULL;
		}

		if ( ! $sifMetadata instanceof \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType  && ! is_null($sifMetadata) ) {
			$sifMetadata = new \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType ($sifMetadata);
		}

		unset ($this->_overrides['sifMetadata']);
	
		return $sifMetadata;
	}

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
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
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}

	public function getRefId($autoCreate = TRUE) {
		if ($this->refId===NULL && $autoCreate && ! isset($this->_overrides['refId']) ) {
			$this->refId = $this->createRefId();
		}
		return $this->refId;
	}
	
	protected function createRefId() {
		return NULL;
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
	
		return $refId;
	}

	public function getStudentParticipationRefId($autoCreate = TRUE) {
		if ($this->studentParticipationRefId===NULL && $autoCreate && ! isset($this->_overrides['studentParticipationRefId']) ) {
			$this->studentParticipationRefId = $this->createStudentParticipationRefId();
		}
		return $this->studentParticipationRefId;
	}
	
	protected function createStudentParticipationRefId() {
		return NULL;
	}

	public function setStudentParticipationRefId($studentParticipationRefId) {
		$this->studentParticipationRefId = $this->validateStudentParticipationRefId($studentParticipationRefId);
	}

	protected function validateStudentParticipationRefId($studentParticipationRefId) {
	
		return $studentParticipationRefId;
	}

	public function getStudentPersonalRefId($autoCreate = TRUE) {
		if ($this->studentPersonalRefId===NULL && $autoCreate && ! isset($this->_overrides['studentPersonalRefId']) ) {
			$this->studentPersonalRefId = $this->createStudentPersonalRefId();
		}
		return $this->studentPersonalRefId;
	}
	
	protected function createStudentPersonalRefId() {
		return NULL;
	}

	public function setStudentPersonalRefId($studentPersonalRefId) {
		$this->studentPersonalRefId = $this->validateStudentPersonalRefId($studentPersonalRefId);
	}

	protected function validateStudentPersonalRefId($studentPersonalRefId) {
	
		return $studentPersonalRefId;
	}
} // end class StudentPlacementType
