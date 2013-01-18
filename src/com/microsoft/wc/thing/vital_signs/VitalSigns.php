<?php
namespace com\microsoft\wc\thing\vital_signs;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.vital-signs", prefix="")
 * })
 * @XmlEntity	(xml="vital-signs")
 */
class VitalSigns extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to vital signs.
	 * This thing type describes the vital signs of a person.
	 */

	const ID = '73822612-C15F-4B49-9E65-6AF369E55C65';
	const NAME = 'Vital Signs';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\vital_signs\VitalSignResultType", collection="true", name="vital-signs-results")
	 */
	protected $vitalSignsResults;

	/**
	 * @XmlText	(type="string", name="site")
	 */
	protected $site;

	/**
	 * @XmlText	(type="string", name="position")
	 */
	protected $position;

	public function __construct($when = NULL, $vitalSignsResults = NULL, $site = NULL, $position = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->vitalSignsResults = ($vitalSignsResults===NULL) ? NULL : $this->validateVitalSignsResults($vitalSignsResults);
		$this->site = ($site===NULL) ? NULL : $this->validateSite($site);
		$this->position = ($position===NULL) ? NULL : $this->validatePosition($position);
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

	public function getVitalSignsResults() {
		if ($this->vitalSignsResults===NULL) {
			$this->vitalSignsResults = $this->createVitalSignsResults();
		}
		return $this->vitalSignsResults;
	}
	
	protected function createVitalSignsResults() {
		return array();
	}

	public function setVitalSignsResults($vitalSignsResults) {
		$this->vitalSignsResults = $this->validateVitalSignsResults($vitalSignsResults);
	}

	protected function validateVitalSignsResults($vitalSignsResults) {
		if ( ! $vitalSignsResults instanceof \com\microsoft\wc\thing\vital_signs\VitalSignResultType  && ! is_null($vitalSignsResults) ) {
			$vitalSignsResults = new \com\microsoft\wc\thing\vital_signs\VitalSignResultType ($vitalSignsResults);
		}
		$count = count($vitalSignsResults);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vitalSignsResults', 0));
		}
		foreach ($vitalSignsResults as $entry) {
			if (!($entry instanceof VitalSignResultType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'vitalSignsResults', 'vital-sign-result-type'));
			}
		}
	
		return $vitalSignsResults;
	}

	public function addVitalSignsResults($vitalSignsResults) {
		$this->vitalSignsResults[] = $vitalSignsResults;
	}

	public function getSite() {
		if ($this->site===NULL) {
			$this->site = $this->createSite();
		}
		return $this->site;
	}
	
	protected function createSite() {
		return '';
	}

	public function setSite($site) {
		$this->site = $this->validateSite($site);
	}

	protected function validateSite($site) {
		if ( ! is_string($site) && ! is_null($site) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'site', 'string'));
		}
	
		return $site;
	}

	public function getPosition() {
		if ($this->position===NULL) {
			$this->position = $this->createPosition();
		}
		return $this->position;
	}
	
	protected function createPosition() {
		return '';
	}

	public function setPosition($position) {
		$this->position = $this->validatePosition($position);
	}

	protected function validatePosition($position) {
		if ( ! is_string($position) && ! is_null($position) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'position', 'string'));
		}
	
		return $position;
	}
} // end class VitalSigns
