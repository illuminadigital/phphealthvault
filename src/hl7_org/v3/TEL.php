<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="TEL")
 */
class TEL extends \URL\URL {
	/**
	 * A telephone number (voice or fax), e-mail address, or other locator for a resource (information or service) mediated by telecommunication equipment. The address is specified as a Universal Resource Locator (URL) qualified by time specification and use codes that help in deciding which address to use for a given time and purpose.
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\SXCMTS", collection="true", name="useablePeriod")
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

	public function getUseablePeriod() {
		if ($this->useablePeriod===NULL) {
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
		if ( ! $useablePeriod instanceof \hl7_org\v3\SXCMTS  && ! is_null($useablePeriod) ) {
			$useablePeriod = new \hl7_org\v3\SXCMTS ($useablePeriod);
		}
		$count = count($useablePeriod);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'useablePeriod', 0));
		}
		foreach ($useablePeriod as $entry) {
			if (!($entry instanceof SXCMTS)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'useablePeriod', 'SXCM_TS'));
			}
		}
	
		return $useablePeriod;
	}

	public function addUseablePeriod($useablePeriod) {
		$this->useablePeriod[] = $useablePeriod;
	}

	public function getUse() {
		if ($this->use===NULL) {
			$this->use = $this->createUse();
		}
		return $this->use;
	}
	
	protected function createUse() {
		return new \hl7_org\v3\SetTelecommunicationAddressUse();
	}

	public function setUse($use) {
		$this->use = $this->validateUse($use);
	}

	protected function validateUse($use) {
		if ( ! $use instanceof \hl7_org\v3\SetTelecommunicationAddressUse  && ! is_null($use) ) {
			$use = new \hl7_org\v3\SetTelecommunicationAddressUse ($use);
		}
	
		return $use;
	}
} // end class TEL