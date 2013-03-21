<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SoftwareRequirementListType")
 */
class SoftwareRequirementListType {
	/**
	 * Contains information about required software.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SoftwareRequirement", collection="true", name="SoftwareRequirement")
	 */
	protected $softwareRequirement;

	public function __construct($softwareRequirement = NULL) {
		$this->softwareRequirement = ($softwareRequirement===NULL) ? NULL : $this->validateSoftwareRequirement($softwareRequirement);
	}

	public function getSoftwareRequirement($autoCreate = TRUE) {
		if ($this->softwareRequirement===NULL && $autoCreate && ! isset($this->_overrides['softwareRequirement']) ) {
			$this->softwareRequirement = $this->createSoftwareRequirement();
		}
		return $this->softwareRequirement;
	}
	
	protected function createSoftwareRequirement() {
		return array();
	}

	public function setSoftwareRequirement($softwareRequirement) {
		$this->softwareRequirement = $this->validateSoftwareRequirement($softwareRequirement);
	}

	protected function validateSoftwareRequirement($softwareRequirement) {
		if ( $softwareRequirement === FALSE ) {
			$this->_overrides['softwareRequirement'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($softwareRequirement) && ! is_null($softwareRequirement) ) {
			$softwareRequirement = array($softwareRequirement);
		}

		unset ($this->_overrides['softwareRequirement']);
		$count = count($softwareRequirement);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'softwareRequirement', 0));
		}
		foreach ($softwareRequirement as $entry) {
			if (!($entry instanceof SoftwareRequirement)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'softwareRequirement', 'SoftwareRequirement'));
			}
		}
	
		return $softwareRequirement;
	}

	public function addSoftwareRequirement($softwareRequirement) {
		$this->softwareRequirement[] = $softwareRequirement;
	}
} // end class SoftwareRequirementListType
