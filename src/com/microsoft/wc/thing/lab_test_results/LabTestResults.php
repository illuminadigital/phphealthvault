<?php
namespace com\microsoft\wc\thing\lab_test_results;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.lab-test-results", prefix="")
 * })
 * @XmlEntity	(xml="lab-test-results")
 */
class LabTestResults extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A series of lab test results.
	 */

	const ID = '5800eab5-a8c2-482a-a4d6-f1db25ae08c3';
	const NAME = 'Lab Test Result';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\lab_test_results\LabTestResultsGroupType", collection="true", name="lab-group")
	 */
	protected $labGroup;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="ordered-by")
	 */
	protected $orderedBy;

	public function __construct($when = NULL, $labGroup = NULL, $orderedBy = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->labGroup = ($labGroup===NULL) ? NULL : $this->validateLabGroup($labGroup);
		$this->orderedBy = ($orderedBy===NULL) ? NULL : $this->validateOrderedBy($orderedBy);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getLabGroup() {
		if ($this->labGroup===NULL) {
			$this->labGroup = $this->createLabGroup();
		}
		return $this->labGroup;
	}
	
	protected function createLabGroup() {
		return array();
	}

	public function setLabGroup($labGroup) {
		$this->labGroup = $this->validateLabGroup($labGroup);
	}

	protected function validateLabGroup($labGroup) {
		if ( ! is_array ($labGroup) ) {
			$labGroup = array($labGroup);
		}
		$count = count($labGroup);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'labGroup', 1));
		}
		foreach ($labGroup as $entry) {
			if (!($entry instanceof LabTestResultsGroupType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'labGroup', 'lab-test-results-group-type'));
			}
		}
	
		return $labGroup;
	}

	public function addLabGroup($labGroup) {
		$this->labGroup[] = $labGroup;
	}

	public function getOrderedBy() {
		if ($this->orderedBy===NULL) {
			$this->orderedBy = $this->createOrderedBy();
		}
		return $this->orderedBy;
	}
	
	protected function createOrderedBy() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setOrderedBy($orderedBy) {
		$this->orderedBy = $this->validateOrderedBy($orderedBy);
	}

	protected function validateOrderedBy($orderedBy) {
		if ( ! $orderedBy instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($orderedBy) ) {
			$orderedBy = new \com\microsoft\wc\thing\types\Organization ($orderedBy);
		}
	
		return $orderedBy;
	}
} // end class LabTestResults
