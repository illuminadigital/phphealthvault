<?php
namespace com\microsoft\wc\thing\lab_test_results;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.lab-test-results", prefix="")
 * })
 * @XmlEntity	(xml="lab-test-result-value-type")
 */
class LabTestResultValueType {
	/**
	 * A clinical value within a laboratory result.
	 * This type is define a clinical value within a laboratory result, including value, unit, reference and toxic ranges.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="measurement")
	 */
	protected $measurement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\lab_test_results\TestResultRange", collection="true", name="ranges")
	 */
	protected $ranges;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="flag")
	 */
	protected $flag;

	public function __construct($measurement = NULL, $ranges = NULL, $flag = NULL) {
		$this->measurement = ($measurement===NULL) ? NULL : $this->validateMeasurement($measurement);
		$this->ranges = ($ranges===NULL) ? NULL : $this->validateRanges($ranges);
		$this->flag = ($flag===NULL) ? NULL : $this->validateFlag($flag);
	}

	public function getMeasurement() {
		if ($this->measurement===NULL) {
			$this->measurement = $this->createMeasurement();
		}
		return $this->measurement;
	}
	
	protected function createMeasurement() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setMeasurement($measurement) {
		$this->measurement = $this->validateMeasurement($measurement);
	}

	protected function validateMeasurement($measurement) {
		if ( ! $measurement instanceof \com\microsoft\wc\thing\types\GeneralMeasurement ) {
			$measurement = new \com\microsoft\wc\thing\types\GeneralMeasurement ($measurement);
		}
	
		return $measurement;
	}

	public function getRanges() {
		if ($this->ranges===NULL) {
			$this->ranges = $this->createRanges();
		}
		return $this->ranges;
	}
	
	protected function createRanges() {
		return array();
	}

	public function setRanges($ranges) {
		$this->ranges = $this->validateRanges($ranges);
	}

	protected function validateRanges($ranges) {
		if ( ! is_array ($ranges) && ! is_null($ranges) ) {
			$ranges = array($ranges);
		}
		$count = count($ranges);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'ranges', 0));
		}
		foreach ($ranges as $entry) {
			if (!($entry instanceof TestResultRange)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'ranges', 'test-result-range'));
			}
		}
	
		return $ranges;
	}

	public function addRanges($ranges) {
		$this->ranges[] = $ranges;
	}

	public function getFlag() {
		if ($this->flag===NULL) {
			$this->flag = $this->createFlag();
		}
		return $this->flag;
	}
	
	protected function createFlag() {
		return array();
	}

	public function setFlag($flag) {
		$this->flag = $this->validateFlag($flag);
	}

	protected function validateFlag($flag) {
		if ( ! is_array ($flag) && ! is_null($flag) ) {
			$flag = array($flag);
		}
		$count = count($flag);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'flag', 0));
		}
		foreach ($flag as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'flag', 'codable-value'));
			}
		}
	
		return $flag;
	}

	public function addFlag($flag) {
		$this->flag[] = $flag;
	}
} // end class LabTestResultValueType
