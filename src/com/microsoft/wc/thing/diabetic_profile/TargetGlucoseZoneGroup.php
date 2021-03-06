<?php
namespace com\microsoft\wc\thing\diabetic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.diabetic-profile", prefix="")
 * })
 * @XmlEntity	(xml="TargetGlucoseZoneGroup")
 */
class TargetGlucoseZoneGroup {
	/**
	 * A grouping of glucose zones.
	 * This allows for customized groupings of glucosezones based on different values. Glucosezones are often used to optimizemanagement events for different purposes. By grouping glucose zones into named groups it is easierto identify the zones to use for a particular management event.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\diabetic_profile\TargetGlucoseZone", collection="true", name="target-glucose-zone")
	 */
	protected $targetGlucoseZone;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	public function __construct($targetGlucoseZone = NULL, $name = NULL) {
		$this->targetGlucoseZone = ($targetGlucoseZone===NULL) ? NULL : $this->validateTargetGlucoseZone($targetGlucoseZone);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getTargetGlucoseZone($autoCreate = TRUE) {
		if ($this->targetGlucoseZone===NULL && $autoCreate && ! isset($this->_overrides['targetGlucoseZone']) ) {
			$this->targetGlucoseZone = $this->createTargetGlucoseZone();
		}
		return $this->targetGlucoseZone;
	}
	
	protected function createTargetGlucoseZone() {
		return array();
	}

	public function setTargetGlucoseZone($targetGlucoseZone) {
		$this->targetGlucoseZone = $this->validateTargetGlucoseZone($targetGlucoseZone);
	}

	protected function validateTargetGlucoseZone($targetGlucoseZone) {
		if ( $targetGlucoseZone === FALSE ) {
			$this->_overrides['targetGlucoseZone'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($targetGlucoseZone) && ! is_null($targetGlucoseZone) ) {
			$targetGlucoseZone = array($targetGlucoseZone);
		}

		unset ($this->_overrides['targetGlucoseZone']);
		$count = count($targetGlucoseZone);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'targetGlucoseZone', 0));
		}
		if ( ! empty($targetGlucoseZone) ) {
			foreach ($targetGlucoseZone as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\diabetic_profile\TargetGlucoseZone )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'targetGlucoseZone', 'TargetGlucoseZone'));
				}
			}
		}
	
		return $targetGlucoseZone;
	}

	public function addTargetGlucoseZone($targetGlucoseZone) {
		$this->targetGlucoseZone[] = $targetGlucoseZone;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! is_string($name) && ! is_null($name) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}
} // end class TargetGlucoseZoneGroup
