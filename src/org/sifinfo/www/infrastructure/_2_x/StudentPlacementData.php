<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentPlacementData")
 */
class StudentPlacementData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FrequencyTime", name="FrequencyTime")
	 */
	protected $frequencyTime;

	public function __construct($service = NULL, $serviceCategory = NULL, $serviceFundingSources = NULL, $servicingPublicAgency = NULL, $servicingSchool = NULL, $schoolWhereServiceDelivered = NULL, $serviceProviderType = NULL, $agencyType = NULL, $frequencyTime = NULL) {
		$this->service = ($service===NULL) ? NULL : $this->validateService($service);
		$this->serviceCategory = ($serviceCategory===NULL) ? NULL : $this->validateServiceCategory($serviceCategory);
		$this->serviceFundingSources = ($serviceFundingSources===NULL) ? NULL : $this->validateServiceFundingSources($serviceFundingSources);
		$this->servicingPublicAgency = ($servicingPublicAgency===NULL) ? NULL : $this->validateServicingPublicAgency($servicingPublicAgency);
		$this->servicingSchool = ($servicingSchool===NULL) ? NULL : $this->validateServicingSchool($servicingSchool);
		$this->schoolWhereServiceDelivered = ($schoolWhereServiceDelivered===NULL) ? NULL : $this->validateSchoolWhereServiceDelivered($schoolWhereServiceDelivered);
		$this->serviceProviderType = ($serviceProviderType===NULL) ? NULL : $this->validateServiceProviderType($serviceProviderType);
		$this->agencyType = ($agencyType===NULL) ? NULL : $this->validateAgencyType($agencyType);
		$this->frequencyTime = ($frequencyTime===NULL) ? NULL : $this->validateFrequencyTime($frequencyTime);
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
} // end class StudentPlacementData
