<?php
namespace com\microsoft\wc\thing\vital_signs;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.vital-signs", prefix="")
 * })
 * @XmlEntity	(xml="vital-signs")
 */
class VitalSigns extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to vital signs.
	 * This thing type describes the vital signs of a person.
	 */

	const ID = '73822612-C15F-4B49-9E65-6AF369E55C65';
	const NAME = 'Vital Signs';

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

	public function getVitalSignsResults($autoCreate = TRUE) {
		if ($this->vitalSignsResults===NULL && $autoCreate && ! isset($this->_overrides['vitalSignsResults']) ) {
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
		if ( $vitalSignsResults === FALSE ) {
			$this->_overrides['vitalSignsResults'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($vitalSignsResults) && ! is_null($vitalSignsResults) ) {
			$vitalSignsResults = array($vitalSignsResults);
		}

		unset ($this->_overrides['vitalSignsResults']);
		$count = count($vitalSignsResults);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vitalSignsResults', 0));
		}
		if ( ! empty($vitalSignsResults) ) {
			foreach ($vitalSignsResults as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\vital_signs\VitalSignResultType )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'vitalSignsResults', 'vital-sign-result-type'));
				}
			}
		}
	
		return $vitalSignsResults;
	}

	public function addVitalSignsResults($vitalSignsResults) {
		$this->vitalSignsResults[] = $vitalSignsResults;
	}

	public function getSite($autoCreate = TRUE) {
		if ($this->site===NULL && $autoCreate && ! isset($this->_overrides['site']) ) {
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

	public function getPosition($autoCreate = TRUE) {
		if ($this->position===NULL && $autoCreate && ! isset($this->_overrides['position']) ) {
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
