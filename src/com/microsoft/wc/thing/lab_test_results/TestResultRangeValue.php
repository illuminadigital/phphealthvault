<?php
namespace com\microsoft\wc\thing\lab_test_results;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.lab-test-results", prefix="")
 * })
 * @XmlEntity	(xml="test-result-range-value")
 */
class TestResultRangeValue {
	/**
	 * A pair of doubles used to create a range.
	 * The minimum or maximum value may be omitted to specify open-ended ranges.
	 */

	/**
	 * @XmlText	(type="float", name="minimum-range")
	 */
	protected $minimumRange;

	/**
	 * @XmlText	(type="float", name="maximum-range")
	 */
	protected $maximumRange;

	public function __construct($minimumRange = NULL, $maximumRange = NULL) {
		$this->minimumRange = ($minimumRange===NULL) ? NULL : $this->validateMinimumRange($minimumRange);
		$this->maximumRange = ($maximumRange===NULL) ? NULL : $this->validateMaximumRange($maximumRange);
	}

	public function getMinimumRange() {
		if ($this->minimumRange===NULL) {
			$this->minimumRange = $this->createMinimumRange();
		}
		return $this->minimumRange;
	}
	
	protected function createMinimumRange() {
		return 0.0;
	}

	public function setMinimumRange($minimumRange) {
		$this->minimumRange = $this->validateMinimumRange($minimumRange);
	}

	protected function validateMinimumRange($minimumRange) {
		if ( ! is_float($minimumRange) && ! is_null($minimumRange) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'minimumRange', 'float'));
		}
	
		return $minimumRange;
	}

	public function getMaximumRange() {
		if ($this->maximumRange===NULL) {
			$this->maximumRange = $this->createMaximumRange();
		}
		return $this->maximumRange;
	}
	
	protected function createMaximumRange() {
		return 0.0;
	}

	public function setMaximumRange($maximumRange) {
		$this->maximumRange = $this->validateMaximumRange($maximumRange);
	}

	protected function validateMaximumRange($maximumRange) {
		if ( ! is_float($maximumRange) && ! is_null($maximumRange) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maximumRange', 'float'));
		}
	
		return $maximumRange;
	}
} // end class TestResultRangeValue
