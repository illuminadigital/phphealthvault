<?php
namespace com\microsoft\wc\thing\diabetic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.diabetic-profile", prefix="")
 * })
 * @XmlEntity	(xml="diabetic-profile")
 */
class DiabeticProfile extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A summary of a person's diabetic condition.
	 * A person's diabetic profile is made up of a set ofmeasurements that indicate the diabetic capabilities of the person.
	 */

	const ID = '80CF4080-AD3F-4BB5-A0B5-907C22F73017';
	const NAME = 'Diabetic Profile';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="max-HbA1C")
	 */
	protected $maxHbA1C;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\diabetic_profile\TargetGlucoseZoneGroup", collection="true", name="target-glucose-zone-group")
	 */
	protected $targetGlucoseZoneGroup;

	public function __construct($when = NULL, $maxHbA1C = NULL, $targetGlucoseZoneGroup = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->maxHbA1C = ($maxHbA1C===NULL) ? NULL : $this->validateMaxHbA1C($maxHbA1C);
		$this->targetGlucoseZoneGroup = ($targetGlucoseZoneGroup===NULL) ? NULL : $this->validateTargetGlucoseZoneGroup($targetGlucoseZoneGroup);
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

	public function getMaxHbA1C() {
		if ($this->maxHbA1C===NULL) {
			$this->maxHbA1C = $this->createMaxHbA1C();
		}
		return $this->maxHbA1C;
	}
	
	protected function createMaxHbA1C() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setMaxHbA1C($maxHbA1C) {
		$this->maxHbA1C = $this->validateMaxHbA1C($maxHbA1C);
	}

	protected function validateMaxHbA1C($maxHbA1C) {
		if ( ! $maxHbA1C instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($maxHbA1C) ) {
			$maxHbA1C = new \com\microsoft\wc\thing\types\Percentage ($maxHbA1C);
		}
	
		return $maxHbA1C;
	}

	public function getTargetGlucoseZoneGroup() {
		if ($this->targetGlucoseZoneGroup===NULL) {
			$this->targetGlucoseZoneGroup = $this->createTargetGlucoseZoneGroup();
		}
		return $this->targetGlucoseZoneGroup;
	}
	
	protected function createTargetGlucoseZoneGroup() {
		return array();
	}

	public function setTargetGlucoseZoneGroup($targetGlucoseZoneGroup) {
		$this->targetGlucoseZoneGroup = $this->validateTargetGlucoseZoneGroup($targetGlucoseZoneGroup);
	}

	protected function validateTargetGlucoseZoneGroup($targetGlucoseZoneGroup) {
		if ( ! is_array ($targetGlucoseZoneGroup) && ! is_null($targetGlucoseZoneGroup) ) {
			$targetGlucoseZoneGroup = array($targetGlucoseZoneGroup);
		}
		$count = count($targetGlucoseZoneGroup);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'targetGlucoseZoneGroup', 0));
		}
		foreach ($targetGlucoseZoneGroup as $entry) {
			if (!($entry instanceof TargetGlucoseZoneGroup)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'targetGlucoseZoneGroup', 'TargetGlucoseZoneGroup'));
			}
		}
	
		return $targetGlucoseZoneGroup;
	}

	public function addTargetGlucoseZoneGroup($targetGlucoseZoneGroup) {
		$this->targetGlucoseZoneGroup[] = $targetGlucoseZoneGroup;
	}
} // end class DiabeticProfile
