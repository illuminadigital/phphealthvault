<?php
namespace com\microsoft\wc\thing\pap_session;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.pap-session", prefix="")
 * })
 * @XmlEntity	(xml="pap-session-respiratory-rate")
 */
class PapSessionRespiratoryRate {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\RespiratoryRateValue", name="mean")
	 */
	protected $mean;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\RespiratoryRateValue", name="median")
	 */
	protected $median;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\RespiratoryRateValue", name="maximum")
	 */
	protected $maximum;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\RespiratoryRateValue", name="percentile-95th")
	 */
	protected $percentile95th;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\RespiratoryRateValue", name="percentile-90th")
	 */
	protected $percentile90th;

	public function __construct($mean = NULL, $median = NULL, $maximum = NULL, $percentile95th = NULL, $percentile90th = NULL) {
		$this->mean = ($mean===NULL) ? NULL : $this->validateMean($mean);
		$this->median = ($median===NULL) ? NULL : $this->validateMedian($median);
		$this->maximum = ($maximum===NULL) ? NULL : $this->validateMaximum($maximum);
		$this->percentile95th = ($percentile95th===NULL) ? NULL : $this->validatePercentile95th($percentile95th);
		$this->percentile90th = ($percentile90th===NULL) ? NULL : $this->validatePercentile90th($percentile90th);
	}

	public function getMean($autoCreate = TRUE) {
		if ($this->mean===NULL && $autoCreate && ! isset($this->_overrides['mean']) ) {
			$this->mean = $this->createMean();
		}
		return $this->mean;
	}
	
	protected function createMean() {
		return new \com\microsoft\wc\thing\types\RespiratoryRateValue();
	}

	public function setMean($mean) {
		$this->mean = $this->validateMean($mean);
	}

	protected function validateMean($mean) {
		if ( $mean === FALSE ) {
			$this->_overrides['mean'] = TRUE;
			return NULL;
		}

		if ( ! $mean instanceof \com\microsoft\wc\thing\types\RespiratoryRateValue  && ! is_null($mean) ) {
			$mean = new \com\microsoft\wc\thing\types\RespiratoryRateValue ($mean);
		}

		unset ($this->_overrides['mean']);
	
		return $mean;
	}

	public function getMedian($autoCreate = TRUE) {
		if ($this->median===NULL && $autoCreate && ! isset($this->_overrides['median']) ) {
			$this->median = $this->createMedian();
		}
		return $this->median;
	}
	
	protected function createMedian() {
		return new \com\microsoft\wc\thing\types\RespiratoryRateValue();
	}

	public function setMedian($median) {
		$this->median = $this->validateMedian($median);
	}

	protected function validateMedian($median) {
		if ( $median === FALSE ) {
			$this->_overrides['median'] = TRUE;
			return NULL;
		}

		if ( ! $median instanceof \com\microsoft\wc\thing\types\RespiratoryRateValue  && ! is_null($median) ) {
			$median = new \com\microsoft\wc\thing\types\RespiratoryRateValue ($median);
		}

		unset ($this->_overrides['median']);
	
		return $median;
	}

	public function getMaximum($autoCreate = TRUE) {
		if ($this->maximum===NULL && $autoCreate && ! isset($this->_overrides['maximum']) ) {
			$this->maximum = $this->createMaximum();
		}
		return $this->maximum;
	}
	
	protected function createMaximum() {
		return new \com\microsoft\wc\thing\types\RespiratoryRateValue();
	}

	public function setMaximum($maximum) {
		$this->maximum = $this->validateMaximum($maximum);
	}

	protected function validateMaximum($maximum) {
		if ( $maximum === FALSE ) {
			$this->_overrides['maximum'] = TRUE;
			return NULL;
		}

		if ( ! $maximum instanceof \com\microsoft\wc\thing\types\RespiratoryRateValue  && ! is_null($maximum) ) {
			$maximum = new \com\microsoft\wc\thing\types\RespiratoryRateValue ($maximum);
		}

		unset ($this->_overrides['maximum']);
	
		return $maximum;
	}

	public function getPercentile95th($autoCreate = TRUE) {
		if ($this->percentile95th===NULL && $autoCreate && ! isset($this->_overrides['percentile95th']) ) {
			$this->percentile95th = $this->createPercentile95th();
		}
		return $this->percentile95th;
	}
	
	protected function createPercentile95th() {
		return new \com\microsoft\wc\thing\types\RespiratoryRateValue();
	}

	public function setPercentile95th($percentile95th) {
		$this->percentile95th = $this->validatePercentile95th($percentile95th);
	}

	protected function validatePercentile95th($percentile95th) {
		if ( $percentile95th === FALSE ) {
			$this->_overrides['percentile95th'] = TRUE;
			return NULL;
		}

		if ( ! $percentile95th instanceof \com\microsoft\wc\thing\types\RespiratoryRateValue  && ! is_null($percentile95th) ) {
			$percentile95th = new \com\microsoft\wc\thing\types\RespiratoryRateValue ($percentile95th);
		}

		unset ($this->_overrides['percentile95th']);
	
		return $percentile95th;
	}

	public function getPercentile90th($autoCreate = TRUE) {
		if ($this->percentile90th===NULL && $autoCreate && ! isset($this->_overrides['percentile90th']) ) {
			$this->percentile90th = $this->createPercentile90th();
		}
		return $this->percentile90th;
	}
	
	protected function createPercentile90th() {
		return new \com\microsoft\wc\thing\types\RespiratoryRateValue();
	}

	public function setPercentile90th($percentile90th) {
		$this->percentile90th = $this->validatePercentile90th($percentile90th);
	}

	protected function validatePercentile90th($percentile90th) {
		if ( $percentile90th === FALSE ) {
			$this->_overrides['percentile90th'] = TRUE;
			return NULL;
		}

		if ( ! $percentile90th instanceof \com\microsoft\wc\thing\types\RespiratoryRateValue  && ! is_null($percentile90th) ) {
			$percentile90th = new \com\microsoft\wc\thing\types\RespiratoryRateValue ($percentile90th);
		}

		unset ($this->_overrides['percentile90th']);
	
		return $percentile90th;
	}
} // end class PapSessionRespiratoryRate
