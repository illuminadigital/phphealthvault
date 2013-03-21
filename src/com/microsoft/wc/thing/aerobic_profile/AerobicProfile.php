<?php
namespace com\microsoft\wc\thing\aerobic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.aerobic-profile", prefix="")
 * })
 * @XmlEntity	(xml="aerobic-profile")
 */
class AerobicProfile extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A summary of a person's aerobic condition.
	 * A person's aerobic profile is made up of a set ofmeasurements that indicate the aerobic capabilities of the person.
	 */

	const ID = '7b2ea78c-4b78-4f75-a6a7-5396fe38b09a';
	const NAME = 'Aerobic Profile';

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="max-heartrate")
	 */
	protected $maxHeartrate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="resting-heartrate")
	 */
	protected $restingHeartrate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="anaerobic-threshold")
	 */
	protected $anaerobicThreshold;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\aerobic_profile\MaxVO2", name="VO2-max")
	 */
	protected $vo2Max;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\aerobic_profile\HeartrateZoneGroup", collection="true", name="heartrate-zone-group")
	 */
	protected $heartrateZoneGroup;

	public function __construct($when = NULL, $maxHeartrate = NULL, $restingHeartrate = NULL, $anaerobicThreshold = NULL, $vo2Max = NULL, $heartrateZoneGroup = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->maxHeartrate = ($maxHeartrate===NULL) ? NULL : $this->validateMaxHeartrate($maxHeartrate);
		$this->restingHeartrate = ($restingHeartrate===NULL) ? NULL : $this->validateRestingHeartrate($restingHeartrate);
		$this->anaerobicThreshold = ($anaerobicThreshold===NULL) ? NULL : $this->validateAnaerobicThreshold($anaerobicThreshold);
		$this->vo2Max = ($vo2Max===NULL) ? NULL : $this->validateVo2Max($vo2Max);
		$this->heartrateZoneGroup = ($heartrateZoneGroup===NULL) ? NULL : $this->validateHeartrateZoneGroup($heartrateZoneGroup);
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

	public function getMaxHeartrate($autoCreate = TRUE) {
		if ($this->maxHeartrate===NULL && $autoCreate && ! isset($this->_overrides['maxHeartrate']) ) {
			$this->maxHeartrate = $this->createMaxHeartrate();
		}
		return $this->maxHeartrate;
	}
	
	protected function createMaxHeartrate() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setMaxHeartrate($maxHeartrate) {
		$this->maxHeartrate = $this->validateMaxHeartrate($maxHeartrate);
	}

	protected function validateMaxHeartrate($maxHeartrate) {
		if ( $maxHeartrate === FALSE ) {
			$this->_overrides['maxHeartrate'] = TRUE;
			return NULL;
		}

		if ( ! $maxHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($maxHeartrate) ) {
			$maxHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($maxHeartrate);
		}

		unset ($this->_overrides['maxHeartrate']);
	
		return $maxHeartrate;
	}

	public function getRestingHeartrate($autoCreate = TRUE) {
		if ($this->restingHeartrate===NULL && $autoCreate && ! isset($this->_overrides['restingHeartrate']) ) {
			$this->restingHeartrate = $this->createRestingHeartrate();
		}
		return $this->restingHeartrate;
	}
	
	protected function createRestingHeartrate() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setRestingHeartrate($restingHeartrate) {
		$this->restingHeartrate = $this->validateRestingHeartrate($restingHeartrate);
	}

	protected function validateRestingHeartrate($restingHeartrate) {
		if ( $restingHeartrate === FALSE ) {
			$this->_overrides['restingHeartrate'] = TRUE;
			return NULL;
		}

		if ( ! $restingHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($restingHeartrate) ) {
			$restingHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($restingHeartrate);
		}

		unset ($this->_overrides['restingHeartrate']);
	
		return $restingHeartrate;
	}

	public function getAnaerobicThreshold($autoCreate = TRUE) {
		if ($this->anaerobicThreshold===NULL && $autoCreate && ! isset($this->_overrides['anaerobicThreshold']) ) {
			$this->anaerobicThreshold = $this->createAnaerobicThreshold();
		}
		return $this->anaerobicThreshold;
	}
	
	protected function createAnaerobicThreshold() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setAnaerobicThreshold($anaerobicThreshold) {
		$this->anaerobicThreshold = $this->validateAnaerobicThreshold($anaerobicThreshold);
	}

	protected function validateAnaerobicThreshold($anaerobicThreshold) {
		if ( $anaerobicThreshold === FALSE ) {
			$this->_overrides['anaerobicThreshold'] = TRUE;
			return NULL;
		}

		if ( ! $anaerobicThreshold instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($anaerobicThreshold) ) {
			$anaerobicThreshold = new \com\microsoft\wc\thing\types\PositiveInt ($anaerobicThreshold);
		}

		unset ($this->_overrides['anaerobicThreshold']);
	
		return $anaerobicThreshold;
	}

	public function getVo2Max($autoCreate = TRUE) {
		if ($this->vo2Max===NULL && $autoCreate && ! isset($this->_overrides['vo2Max']) ) {
			$this->vo2Max = $this->createVo2Max();
		}
		return $this->vo2Max;
	}
	
	protected function createVo2Max() {
		return new \com\microsoft\wc\thing\aerobic_profile\MaxVO2();
	}

	public function setVo2Max($vo2Max) {
		$this->vo2Max = $this->validateVo2Max($vo2Max);
	}

	protected function validateVo2Max($vo2Max) {
		if ( $vo2Max === FALSE ) {
			$this->_overrides['vo2Max'] = TRUE;
			return NULL;
		}

		if ( ! $vo2Max instanceof \com\microsoft\wc\thing\aerobic_profile\MaxVO2  && ! is_null($vo2Max) ) {
			$vo2Max = new \com\microsoft\wc\thing\aerobic_profile\MaxVO2 ($vo2Max);
		}

		unset ($this->_overrides['vo2Max']);
	
		return $vo2Max;
	}

	public function getHeartrateZoneGroup($autoCreate = TRUE) {
		if ($this->heartrateZoneGroup===NULL && $autoCreate && ! isset($this->_overrides['heartrateZoneGroup']) ) {
			$this->heartrateZoneGroup = $this->createHeartrateZoneGroup();
		}
		return $this->heartrateZoneGroup;
	}
	
	protected function createHeartrateZoneGroup() {
		return array();
	}

	public function setHeartrateZoneGroup($heartrateZoneGroup) {
		$this->heartrateZoneGroup = $this->validateHeartrateZoneGroup($heartrateZoneGroup);
	}

	protected function validateHeartrateZoneGroup($heartrateZoneGroup) {
		if ( $heartrateZoneGroup === FALSE ) {
			$this->_overrides['heartrateZoneGroup'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($heartrateZoneGroup) && ! is_null($heartrateZoneGroup) ) {
			$heartrateZoneGroup = array($heartrateZoneGroup);
		}

		unset ($this->_overrides['heartrateZoneGroup']);
		$count = count($heartrateZoneGroup);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'heartrateZoneGroup', 0));
		}
		foreach ($heartrateZoneGroup as $entry) {
			if (!($entry instanceof HeartrateZoneGroup)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'heartrateZoneGroup', 'HeartrateZoneGroup'));
			}
		}
	
		return $heartrateZoneGroup;
	}

	public function addHeartrateZoneGroup($heartrateZoneGroup) {
		$this->heartrateZoneGroup[] = $heartrateZoneGroup;
	}
} // end class AerobicProfile
