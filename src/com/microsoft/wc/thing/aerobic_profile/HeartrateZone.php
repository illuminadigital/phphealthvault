<?php
namespace com\microsoft\wc\thing\aerobic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.aerobic-profile", prefix="")
 * })
 * @XmlEntity	(xml="HeartrateZone")
 */
class HeartrateZone {
	/**
	 * A heart rate range.
	 * A heart rate zone defines a range of heart rate measurementsin beats per minute (BPM). A heart rate zone can be used tocategorize the intensity of aerobic exercise or to guidean aerobic session.A zone is defined by a lower and upper limit measured inBPM or as a percentage of a person's maximum heart rate.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\aerobic_profile\ZoneBoundary", name="lower-bound")
	 */
	protected $lowerBound;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\aerobic_profile\ZoneBoundary", name="upper-bound")
	 */
	protected $upperBound;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	public function __construct($lowerBound = NULL, $upperBound = NULL, $name = NULL) {
		$this->lowerBound = ($lowerBound===NULL) ? NULL : $this->validateLowerBound($lowerBound);
		$this->upperBound = ($upperBound===NULL) ? NULL : $this->validateUpperBound($upperBound);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getLowerBound() {
		if ($this->lowerBound===NULL) {
			$this->lowerBound = $this->createLowerBound();
		}
		return $this->lowerBound;
	}
	
	protected function createLowerBound() {
		return new \com\microsoft\wc\thing\aerobic_profile\ZoneBoundary();
	}

	public function setLowerBound($lowerBound) {
		$this->lowerBound = $this->validateLowerBound($lowerBound);
	}

	protected function validateLowerBound($lowerBound) {
		if ( ! $lowerBound instanceof \com\microsoft\wc\thing\aerobic_profile\ZoneBoundary ) {
			$lowerBound = new \com\microsoft\wc\thing\aerobic_profile\ZoneBoundary ($lowerBound);
		}
	
		return $lowerBound;
	}

	public function getUpperBound() {
		if ($this->upperBound===NULL) {
			$this->upperBound = $this->createUpperBound();
		}
		return $this->upperBound;
	}
	
	protected function createUpperBound() {
		return new \com\microsoft\wc\thing\aerobic_profile\ZoneBoundary();
	}

	public function setUpperBound($upperBound) {
		$this->upperBound = $this->validateUpperBound($upperBound);
	}

	protected function validateUpperBound($upperBound) {
		if ( ! $upperBound instanceof \com\microsoft\wc\thing\aerobic_profile\ZoneBoundary ) {
			$upperBound = new \com\microsoft\wc\thing\aerobic_profile\ZoneBoundary ($upperBound);
		}
	
		return $upperBound;
	}

	public function getName() {
		if ($this->name===NULL) {
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
} // end class HeartrateZone
