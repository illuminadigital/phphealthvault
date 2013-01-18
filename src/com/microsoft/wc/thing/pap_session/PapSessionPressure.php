<?php
namespace com\microsoft\wc\thing\pap_session;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.pap-session", prefix="")
 * })
 * @XmlEntity	(xml="pap-session-pressure")
 */
class PapSessionPressure {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PressureValue", name="mean")
	 */
	protected $mean;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PressureValue", name="median")
	 */
	protected $median;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PressureValue", name="maximum")
	 */
	protected $maximum;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PressureValue", name="percentile-95th")
	 */
	protected $percentile95th;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PressureValue", name="percentile-90th")
	 */
	protected $percentile90th;

	public function __construct($mean = NULL, $median = NULL, $maximum = NULL, $percentile95th = NULL, $percentile90th = NULL) {
		$this->mean = ($mean===NULL) ? NULL : $this->validateMean($mean);
		$this->median = ($median===NULL) ? NULL : $this->validateMedian($median);
		$this->maximum = ($maximum===NULL) ? NULL : $this->validateMaximum($maximum);
		$this->percentile95th = ($percentile95th===NULL) ? NULL : $this->validatePercentile95th($percentile95th);
		$this->percentile90th = ($percentile90th===NULL) ? NULL : $this->validatePercentile90th($percentile90th);
	}

	public function getMean() {
		if ($this->mean===NULL) {
			$this->mean = $this->createMean();
		}
		return $this->mean;
	}
	
	protected function createMean() {
		return new \com\microsoft\wc\thing\types\PressureValue();
	}

	public function setMean($mean) {
		$this->mean = $this->validateMean($mean);
	}

	protected function validateMean($mean) {
		if ( ! $mean instanceof \com\microsoft\wc\thing\types\PressureValue  && ! is_null($mean) ) {
			$mean = new \com\microsoft\wc\thing\types\PressureValue ($mean);
		}
	
		return $mean;
	}

	public function getMedian() {
		if ($this->median===NULL) {
			$this->median = $this->createMedian();
		}
		return $this->median;
	}
	
	protected function createMedian() {
		return new \com\microsoft\wc\thing\types\PressureValue();
	}

	public function setMedian($median) {
		$this->median = $this->validateMedian($median);
	}

	protected function validateMedian($median) {
		if ( ! $median instanceof \com\microsoft\wc\thing\types\PressureValue  && ! is_null($median) ) {
			$median = new \com\microsoft\wc\thing\types\PressureValue ($median);
		}
	
		return $median;
	}

	public function getMaximum() {
		if ($this->maximum===NULL) {
			$this->maximum = $this->createMaximum();
		}
		return $this->maximum;
	}
	
	protected function createMaximum() {
		return new \com\microsoft\wc\thing\types\PressureValue();
	}

	public function setMaximum($maximum) {
		$this->maximum = $this->validateMaximum($maximum);
	}

	protected function validateMaximum($maximum) {
		if ( ! $maximum instanceof \com\microsoft\wc\thing\types\PressureValue  && ! is_null($maximum) ) {
			$maximum = new \com\microsoft\wc\thing\types\PressureValue ($maximum);
		}
	
		return $maximum;
	}

	public function getPercentile95th() {
		if ($this->percentile95th===NULL) {
			$this->percentile95th = $this->createPercentile95th();
		}
		return $this->percentile95th;
	}
	
	protected function createPercentile95th() {
		return new \com\microsoft\wc\thing\types\PressureValue();
	}

	public function setPercentile95th($percentile95th) {
		$this->percentile95th = $this->validatePercentile95th($percentile95th);
	}

	protected function validatePercentile95th($percentile95th) {
		if ( ! $percentile95th instanceof \com\microsoft\wc\thing\types\PressureValue  && ! is_null($percentile95th) ) {
			$percentile95th = new \com\microsoft\wc\thing\types\PressureValue ($percentile95th);
		}
	
		return $percentile95th;
	}

	public function getPercentile90th() {
		if ($this->percentile90th===NULL) {
			$this->percentile90th = $this->createPercentile90th();
		}
		return $this->percentile90th;
	}
	
	protected function createPercentile90th() {
		return new \com\microsoft\wc\thing\types\PressureValue();
	}

	public function setPercentile90th($percentile90th) {
		$this->percentile90th = $this->validatePercentile90th($percentile90th);
	}

	protected function validatePercentile90th($percentile90th) {
		if ( ! $percentile90th instanceof \com\microsoft\wc\thing\types\PressureValue  && ! is_null($percentile90th) ) {
			$percentile90th = new \com\microsoft\wc\thing\types\PressureValue ($percentile90th);
		}
	
		return $percentile90th;
	}
} // end class PapSessionPressure
