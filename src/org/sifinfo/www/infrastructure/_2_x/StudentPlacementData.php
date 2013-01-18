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

	public function getService() {
		if ($this->service===NULL) {
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

	public function getServiceCategory() {
		if ($this->serviceCategory===NULL) {
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
		if ( ! $serviceCategory instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceCategory  && ! is_null($serviceCategory) ) {
			$serviceCategory = new \org\sifinfo\www\infrastructure\_2_x\ServiceCategory ($serviceCategory);
		}
	
		return $serviceCategory;
	}

	public function getServiceFundingSources() {
		if ($this->serviceFundingSources===NULL) {
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
		if ( ! $serviceFundingSources instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSources  && ! is_null($serviceFundingSources) ) {
			$serviceFundingSources = new \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSources ($serviceFundingSources);
		}
	
		return $serviceFundingSources;
	}

	public function getServicingPublicAgency() {
		if ($this->servicingPublicAgency===NULL) {
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
		if ( ! $servicingPublicAgency instanceof \org\sifinfo\www\infrastructure\_2_x\ServicingPublicAgency  && ! is_null($servicingPublicAgency) ) {
			$servicingPublicAgency = new \org\sifinfo\www\infrastructure\_2_x\ServicingPublicAgency ($servicingPublicAgency);
		}
	
		return $servicingPublicAgency;
	}

	public function getServicingSchool() {
		if ($this->servicingSchool===NULL) {
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
		if ( ! $servicingSchool instanceof \org\sifinfo\www\infrastructure\_2_x\ServicingSchool  && ! is_null($servicingSchool) ) {
			$servicingSchool = new \org\sifinfo\www\infrastructure\_2_x\ServicingSchool ($servicingSchool);
		}
	
		return $servicingSchool;
	}

	public function getSchoolWhereServiceDelivered() {
		if ($this->schoolWhereServiceDelivered===NULL) {
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
		if ( ! $schoolWhereServiceDelivered instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolWhereServiceDelivered  && ! is_null($schoolWhereServiceDelivered) ) {
			$schoolWhereServiceDelivered = new \org\sifinfo\www\infrastructure\_2_x\SchoolWhereServiceDelivered ($schoolWhereServiceDelivered);
		}
	
		return $schoolWhereServiceDelivered;
	}

	public function getServiceProviderType() {
		if ($this->serviceProviderType===NULL) {
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
		if ( ! $serviceProviderType instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceProviderType  && ! is_null($serviceProviderType) ) {
			$serviceProviderType = new \org\sifinfo\www\infrastructure\_2_x\ServiceProviderType ($serviceProviderType);
		}
	
		return $serviceProviderType;
	}

	public function getAgencyType() {
		if ($this->agencyType===NULL) {
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

	public function getFrequencyTime() {
		if ($this->frequencyTime===NULL) {
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
		if ( ! $frequencyTime instanceof \org\sifinfo\www\infrastructure\_2_x\FrequencyTime  && ! is_null($frequencyTime) ) {
			$frequencyTime = new \org\sifinfo\www\infrastructure\_2_x\FrequencyTime ($frequencyTime);
		}
	
		return $frequencyTime;
	}
} // end class StudentPlacementData
