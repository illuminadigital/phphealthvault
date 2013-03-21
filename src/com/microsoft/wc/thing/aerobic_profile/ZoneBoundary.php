<?php
namespace com\microsoft\wc\thing\aerobic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.aerobic-profile", prefix="")
 * })
 * @XmlEntity	(xml="ZoneBoundary")
 */
class ZoneBoundary {
	/**
	 * Choice of absolute or relative boundary unites.
	 * The boundary of a heart rate zone may be set as either anabsolute heart rate (measured in BPM) or as a percentageof a person's maximum heart rate.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="absolute-heartrate")
	 */
	protected $absoluteHeartrate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="percent-max-heartrate")
	 */
	protected $percentMaxHeartrate;

	public function __construct($absoluteHeartrate = NULL, $percentMaxHeartrate = NULL) {
		$this->absoluteHeartrate = ($absoluteHeartrate===NULL) ? NULL : $this->validateAbsoluteHeartrate($absoluteHeartrate);
		$this->percentMaxHeartrate = ($percentMaxHeartrate===NULL) ? NULL : $this->validatePercentMaxHeartrate($percentMaxHeartrate);
	}

	public function getAbsoluteHeartrate($autoCreate = TRUE) {
		if ($this->absoluteHeartrate===NULL && $autoCreate && ! isset($this->_overrides['absoluteHeartrate']) ) {
			$this->absoluteHeartrate = $this->createAbsoluteHeartrate();
		}
		return $this->absoluteHeartrate;
	}
	
	protected function createAbsoluteHeartrate() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setAbsoluteHeartrate($absoluteHeartrate) {
		$this->absoluteHeartrate = $this->validateAbsoluteHeartrate($absoluteHeartrate);
	}

	protected function validateAbsoluteHeartrate($absoluteHeartrate) {
		if ( ! $absoluteHeartrate instanceof \com\microsoft\wc\thing\types\PositiveInt ) {
			$absoluteHeartrate = new \com\microsoft\wc\thing\types\PositiveInt ($absoluteHeartrate);
		}
	
		return $absoluteHeartrate;
	}

	public function getPercentMaxHeartrate($autoCreate = TRUE) {
		if ($this->percentMaxHeartrate===NULL && $autoCreate && ! isset($this->_overrides['percentMaxHeartrate']) ) {
			$this->percentMaxHeartrate = $this->createPercentMaxHeartrate();
		}
		return $this->percentMaxHeartrate;
	}
	
	protected function createPercentMaxHeartrate() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setPercentMaxHeartrate($percentMaxHeartrate) {
		$this->percentMaxHeartrate = $this->validatePercentMaxHeartrate($percentMaxHeartrate);
	}

	protected function validatePercentMaxHeartrate($percentMaxHeartrate) {
		if ( ! $percentMaxHeartrate instanceof \com\microsoft\wc\thing\types\Percentage ) {
			$percentMaxHeartrate = new \com\microsoft\wc\thing\types\Percentage ($percentMaxHeartrate);
		}
	
		return $percentMaxHeartrate;
	}
} // end class ZoneBoundary
