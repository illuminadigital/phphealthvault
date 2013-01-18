<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ServiceFundingSources")
 */
class ServiceFundingSources {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServiceFundingSource", collection="true", name="ServiceFundingSource")
	 */
	protected $serviceFundingSource;

	public function __construct($serviceFundingSource = NULL) {
		$this->serviceFundingSource = ($serviceFundingSource===NULL) ? NULL : $this->validateServiceFundingSource($serviceFundingSource);
	}

	public function getServiceFundingSource() {
		if ($this->serviceFundingSource===NULL) {
			$this->serviceFundingSource = $this->createServiceFundingSource();
		}
		return $this->serviceFundingSource;
	}
	
	protected function createServiceFundingSource() {
		return array();
	}

	public function setServiceFundingSource($serviceFundingSource) {
		$this->serviceFundingSource = $this->validateServiceFundingSource($serviceFundingSource);
	}

	protected function validateServiceFundingSource($serviceFundingSource) {
		if ( ! $serviceFundingSource instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSource ) {
			$serviceFundingSource = new \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSource ($serviceFundingSource);
		}
		$count = count($serviceFundingSource);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'serviceFundingSource', 1));
		}
		foreach ($serviceFundingSource as $entry) {
			if (!($entry instanceof ServiceFundingSource)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'serviceFundingSource', 'ServiceFundingSource'));
			}
		}
	
		return $serviceFundingSource;
	}

	public function addServiceFundingSource($serviceFundingSource) {
		$this->serviceFundingSource[] = $serviceFundingSource;
	}
} // end class ServiceFundingSources
