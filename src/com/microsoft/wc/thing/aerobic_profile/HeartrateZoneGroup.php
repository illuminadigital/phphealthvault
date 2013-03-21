<?php
namespace com\microsoft\wc\thing\aerobic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.aerobic-profile", prefix="")
 * })
 * @XmlEntity	(xml="HeartrateZoneGroup")
 */
class HeartrateZoneGroup {
	/**
	 * A grouping of heart rate zones.
	 * This allows for customized groupings of heartrate zones based on different values.Heartrate zones are often used to optimizeexercise for different purposes. By groupingheart rate zones into named groups it is easierto identify the zones to use for a particularworkout.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\aerobic_profile\HeartrateZone", collection="true", name="heartrate-zone")
	 */
	protected $heartrateZone;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	public function __construct($heartrateZone = NULL, $name = NULL) {
		$this->heartrateZone = ($heartrateZone===NULL) ? NULL : $this->validateHeartrateZone($heartrateZone);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getHeartrateZone($autoCreate = TRUE) {
		if ($this->heartrateZone===NULL && $autoCreate && ! isset($this->_overrides['heartrateZone']) ) {
			$this->heartrateZone = $this->createHeartrateZone();
		}
		return $this->heartrateZone;
	}
	
	protected function createHeartrateZone() {
		return array();
	}

	public function setHeartrateZone($heartrateZone) {
		$this->heartrateZone = $this->validateHeartrateZone($heartrateZone);
	}

	protected function validateHeartrateZone($heartrateZone) {
		if ( $heartrateZone === FALSE ) {
			$this->_overrides['heartrateZone'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($heartrateZone) && ! is_null($heartrateZone) ) {
			$heartrateZone = array($heartrateZone);
		}

		unset ($this->_overrides['heartrateZone']);
		$count = count($heartrateZone);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'heartrateZone', 0));
		}
		foreach ($heartrateZone as $entry) {
			if (!($entry instanceof HeartrateZone)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'heartrateZone', 'HeartrateZone'));
			}
		}
	
		return $heartrateZone;
	}

	public function addHeartrateZone($heartrateZone) {
		$this->heartrateZone[] = $heartrateZone;
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
} // end class HeartrateZoneGroup
