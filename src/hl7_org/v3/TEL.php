<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="TEL")
 */
class TEL extends \org\w3\www\_2001\XMLSchema\URL {
	/**
	 * A telephone number (voice or fax), e-mail address, orother locator for a resource (information or service)mediated by telecommunication equipment. The addressis specified as a URLqualified by time specification and use codes that helpin deciding which address to use for a given time andpurpose.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\SXCMTS", collection="true", name="useablePeriod")
	 */
	protected $useablePeriod;

	/**
	 * @XmlAttribute	(type="string", name="use")
	 */
	protected $use;

	public function __construct($useablePeriod = NULL, $use = NULL) {
		$this->useablePeriod = ($useablePeriod===NULL) ? NULL : $this->validateUseablePeriod($useablePeriod);
		$this->use = ($use===NULL) ? NULL : $this->validateUse($use);
	}

	public function getUseablePeriod($autoCreate = TRUE) {
		if ($this->useablePeriod===NULL && $autoCreate && ! isset($this->_overrides['useablePeriod']) ) {
			$this->useablePeriod = $this->createUseablePeriod();
		}
		return $this->useablePeriod;
	}
	
	protected function createUseablePeriod() {
		return array();
	}

	public function setUseablePeriod($useablePeriod) {
		$this->useablePeriod = $this->validateUseablePeriod($useablePeriod);
	}

	protected function validateUseablePeriod($useablePeriod) {
		$count = count($useablePeriod);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'useablePeriod', 0));
		}
		if ( ! empty($useablePeriod) ) {
			foreach ($useablePeriod as $entry) {
			}
		}
	
		return $useablePeriod;
	}

	public function addUseablePeriod($useablePeriod) {
		$this->useablePeriod[] = $this->validateUseablePeriodType($useablePeriod);
	}

	protected function validateUseablePeriodType($useablePeriod) {
	
		return $useablePeriod;
	}

	public function getUse($autoCreate = TRUE) {
		if ($this->use===NULL && $autoCreate && ! isset($this->_overrides['use']) ) {
			$this->use = $this->createUse();
		}
		return $this->use;
	}
	
	protected function createUse() {
		return NULL;
	}

	public function setUse($use) {
		$this->use = $this->validateUse($use);
	}

	protected function validateUse($use) {
	
		return $use;
	}
} // end class TEL
