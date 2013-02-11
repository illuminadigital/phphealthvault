<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="OrganizationRelationshipType")
 */
class OrganizationRelationshipType {
	/**
	 * Provides information about a student's relationship to an organization.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ResidencyStatus", name="ResidencyStatus")
	 */
	protected $residencyStatus;

	/**
	 * @XmlText	(type="boolean", name="ProvidingInstruction")
	 */
	protected $providingInstruction;

	/**
	 * @XmlText	(type="boolean", name="ProvidingServices")
	 */
	protected $providingServices;

	/**
	 * @XmlText	(type="boolean", name="FinanciallyResponsible")
	 */
	protected $financiallyResponsible;

	public function __construct($residencyStatus = NULL, $providingInstruction = NULL, $providingServices = NULL, $financiallyResponsible = NULL) {
		$this->residencyStatus = ($residencyStatus===NULL) ? NULL : $this->validateResidencyStatus($residencyStatus);
		$this->providingInstruction = ($providingInstruction===NULL) ? NULL : $this->validateProvidingInstruction($providingInstruction);
		$this->providingServices = ($providingServices===NULL) ? NULL : $this->validateProvidingServices($providingServices);
		$this->financiallyResponsible = ($financiallyResponsible===NULL) ? NULL : $this->validateFinanciallyResponsible($financiallyResponsible);
	}

	public function getResidencyStatus() {
		if ($this->residencyStatus===NULL) {
			$this->residencyStatus = $this->createResidencyStatus();
		}
		return $this->residencyStatus;
	}
	
	protected function createResidencyStatus() {
		return new \org\sifinfo\www\infrastructure\_2_x\ResidencyStatus();
	}

	public function setResidencyStatus($residencyStatus) {
		$this->residencyStatus = $this->validateResidencyStatus($residencyStatus);
	}

	protected function validateResidencyStatus($residencyStatus) {
		if ( ! $residencyStatus instanceof \org\sifinfo\www\infrastructure\_2_x\ResidencyStatus ) {
			$residencyStatus = new \org\sifinfo\www\infrastructure\_2_x\ResidencyStatus ($residencyStatus);
		}
	
		return $residencyStatus;
	}

	public function getProvidingInstruction() {
		if ($this->providingInstruction===NULL) {
			$this->providingInstruction = $this->createProvidingInstruction();
		}
		return $this->providingInstruction;
	}
	
	protected function createProvidingInstruction() {
		return FALSE;
	}

	public function setProvidingInstruction($providingInstruction) {
		$this->providingInstruction = $this->validateProvidingInstruction($providingInstruction);
	}

	protected function validateProvidingInstruction($providingInstruction) {
		if (!is_bool($providingInstruction)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'providingInstruction', 'boolean'));
		}
	
		return $providingInstruction;
	}

	public function getProvidingServices() {
		if ($this->providingServices===NULL) {
			$this->providingServices = $this->createProvidingServices();
		}
		return $this->providingServices;
	}
	
	protected function createProvidingServices() {
		return FALSE;
	}

	public function setProvidingServices($providingServices) {
		$this->providingServices = $this->validateProvidingServices($providingServices);
	}

	protected function validateProvidingServices($providingServices) {
		if (!is_bool($providingServices)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'providingServices', 'boolean'));
		}
	
		return $providingServices;
	}

	public function getFinanciallyResponsible() {
		if ($this->financiallyResponsible===NULL) {
			$this->financiallyResponsible = $this->createFinanciallyResponsible();
		}
		return $this->financiallyResponsible;
	}
	
	protected function createFinanciallyResponsible() {
		return FALSE;
	}

	public function setFinanciallyResponsible($financiallyResponsible) {
		$this->financiallyResponsible = $this->validateFinanciallyResponsible($financiallyResponsible);
	}

	protected function validateFinanciallyResponsible($financiallyResponsible) {
		if (!is_bool($financiallyResponsible)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'financiallyResponsible', 'boolean'));
		}
	
		return $financiallyResponsible;
	}
} // end class OrganizationRelationshipType
