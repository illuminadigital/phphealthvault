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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ServiceFundingSource", collection="true", name="ServiceFundingSource")
	 */
	protected $serviceFundingSource;

	public function __construct($serviceFundingSource = NULL) {
		$this->serviceFundingSource = ($serviceFundingSource===NULL) ? NULL : $this->validateServiceFundingSource($serviceFundingSource);
	}

	public function getServiceFundingSource($autoCreate = TRUE) {
		if ($this->serviceFundingSource===NULL && $autoCreate && ! isset($this->_overrides['serviceFundingSource']) ) {
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
		if ( ! is_array ($serviceFundingSource) ) {
			$serviceFundingSource = array($serviceFundingSource);
		}
		$count = count($serviceFundingSource);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'serviceFundingSource', 1));
		}
		foreach ($serviceFundingSource as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\ServiceFundingSource )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'serviceFundingSource', 'ServiceFundingSource'));
			}
		}
	
		return $serviceFundingSource;
	}

	public function addServiceFundingSource($serviceFundingSource) {
		$this->serviceFundingSource[] = $serviceFundingSource;
	}
} // end class ServiceFundingSources
