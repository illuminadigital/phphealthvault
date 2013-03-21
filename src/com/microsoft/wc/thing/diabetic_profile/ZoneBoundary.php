<?php
namespace com\microsoft\wc\thing\diabetic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.diabetic-profile", prefix="")
 * })
 * @XmlEntity	(xml="ZoneBoundary")
 */
class ZoneBoundary {
	/**
	 * Choice of absolute or relative boundary units.
	 * The boundary of a glucose zone may be set as either anabsolute glucose measurement or as a percentageof a person's maximum glucose measurement.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\BloodGlucoseValue", name="absolute-glucose")
	 */
	protected $absoluteGlucose;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="percent-max-glucose")
	 */
	protected $percentMaxGlucose;

	public function __construct($absoluteGlucose = NULL, $percentMaxGlucose = NULL) {
		$this->absoluteGlucose = ($absoluteGlucose===NULL) ? NULL : $this->validateAbsoluteGlucose($absoluteGlucose);
		$this->percentMaxGlucose = ($percentMaxGlucose===NULL) ? NULL : $this->validatePercentMaxGlucose($percentMaxGlucose);
	}

	public function getAbsoluteGlucose($autoCreate = TRUE) {
		if ($this->absoluteGlucose===NULL && $autoCreate && ! isset($this->_overrides['absoluteGlucose']) ) {
			$this->absoluteGlucose = $this->createAbsoluteGlucose();
		}
		return $this->absoluteGlucose;
	}
	
	protected function createAbsoluteGlucose() {
		return new \com\microsoft\wc\thing\types\BloodGlucoseValue();
	}

	public function setAbsoluteGlucose($absoluteGlucose) {
		$this->absoluteGlucose = $this->validateAbsoluteGlucose($absoluteGlucose);
	}

	protected function validateAbsoluteGlucose($absoluteGlucose) {
		if ( ! $absoluteGlucose instanceof \com\microsoft\wc\thing\types\BloodGlucoseValue ) {
			$absoluteGlucose = new \com\microsoft\wc\thing\types\BloodGlucoseValue ($absoluteGlucose);
		}
	
		return $absoluteGlucose;
	}

	public function getPercentMaxGlucose($autoCreate = TRUE) {
		if ($this->percentMaxGlucose===NULL && $autoCreate && ! isset($this->_overrides['percentMaxGlucose']) ) {
			$this->percentMaxGlucose = $this->createPercentMaxGlucose();
		}
		return $this->percentMaxGlucose;
	}
	
	protected function createPercentMaxGlucose() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setPercentMaxGlucose($percentMaxGlucose) {
		$this->percentMaxGlucose = $this->validatePercentMaxGlucose($percentMaxGlucose);
	}

	protected function validatePercentMaxGlucose($percentMaxGlucose) {
		if ( ! $percentMaxGlucose instanceof \com\microsoft\wc\thing\types\Percentage ) {
			$percentMaxGlucose = new \com\microsoft\wc\thing\types\Percentage ($percentMaxGlucose);
		}
	
		return $percentMaxGlucose;
	}
} // end class ZoneBoundary
