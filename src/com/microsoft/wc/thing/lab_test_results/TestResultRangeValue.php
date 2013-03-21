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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getMinimumRange($autoCreate = TRUE) {
		if ($this->minimumRange===NULL && $autoCreate && ! isset($this->_overrides['minimumRange']) ) {
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
		$isValid = FALSE;
		if ( is_float($minimumRange) ) {
			$isValid = TRUE;
		}
		else if ( is_null($minimumRange) ) {
			$isValid = TRUE;
		}
		else if ( $minimumRange == ($castVar = (float) $minimumRange) ) {
			$isValid = TRUE;
			$minimumRange = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'minimumRange', 'float'));
		}
	
		return $minimumRange;
	}

	public function getMaximumRange($autoCreate = TRUE) {
		if ($this->maximumRange===NULL && $autoCreate && ! isset($this->_overrides['maximumRange']) ) {
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
		$isValid = FALSE;
		if ( is_float($maximumRange) ) {
			$isValid = TRUE;
		}
		else if ( is_null($maximumRange) ) {
			$isValid = TRUE;
		}
		else if ( $maximumRange == ($castVar = (float) $maximumRange) ) {
			$isValid = TRUE;
			$maximumRange = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maximumRange', 'float'));
		}
	
		return $maximumRange;
	}
} // end class TestResultRangeValue
