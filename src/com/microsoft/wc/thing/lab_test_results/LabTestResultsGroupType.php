<?php
namespace com\microsoft\wc\thing\lab_test_results;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.lab-test-results", prefix="")
 * })
 * @XmlEntity	(xml="lab-test-results-group-type")
 */
class LabTestResultsGroupType {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="group-name")
	 */
	protected $groupName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="laboratory-name")
	 */
	protected $laboratoryName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\lab_test_results\LabTestResultsGroupType", collection="true", name="sub-groups")
	 */
	protected $subGroups;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\lab_test_results\LabTestResultType", collection="true", name="results")
	 */
	protected $results;

	public function __construct($groupName = NULL, $laboratoryName = NULL, $status = NULL, $subGroups = NULL, $results = NULL) {
		$this->groupName = ($groupName===NULL) ? NULL : $this->validateGroupName($groupName);
		$this->laboratoryName = ($laboratoryName===NULL) ? NULL : $this->validateLaboratoryName($laboratoryName);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->subGroups = ($subGroups===NULL) ? NULL : $this->validateSubGroups($subGroups);
		$this->results = ($results===NULL) ? NULL : $this->validateResults($results);
	}

	public function getGroupName() {
		if ($this->groupName===NULL) {
			$this->groupName = $this->createGroupName();
		}
		return $this->groupName;
	}
	
	protected function createGroupName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setGroupName($groupName) {
		$this->groupName = $this->validateGroupName($groupName);
	}

	protected function validateGroupName($groupName) {
		if ( ! $groupName instanceof \com\microsoft\wc\types\CodableValue ) {
			$groupName = new \com\microsoft\wc\types\CodableValue ($groupName);
		}
	
		return $groupName;
	}

	public function getLaboratoryName() {
		if ($this->laboratoryName===NULL) {
			$this->laboratoryName = $this->createLaboratoryName();
		}
		return $this->laboratoryName;
	}
	
	protected function createLaboratoryName() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setLaboratoryName($laboratoryName) {
		$this->laboratoryName = $this->validateLaboratoryName($laboratoryName);
	}

	protected function validateLaboratoryName($laboratoryName) {
		if ( ! $laboratoryName instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($laboratoryName) ) {
			$laboratoryName = new \com\microsoft\wc\thing\types\Organization ($laboratoryName);
		}
	
		return $laboratoryName;
	}

	public function getStatus() {
		if ($this->status===NULL) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}
	
		return $status;
	}

	public function getSubGroups() {
		if ($this->subGroups===NULL) {
			$this->subGroups = $this->createSubGroups();
		}
		return $this->subGroups;
	}
	
	protected function createSubGroups() {
		return array();
	}

	public function setSubGroups($subGroups) {
		$this->subGroups = $this->validateSubGroups($subGroups);
	}

	protected function validateSubGroups($subGroups) {
		if ( ! is_array ($subGroups) && ! is_null($subGroups) ) {
			$subGroups = array($subGroups);
		}
		$count = count($subGroups);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'subGroups', 0));
		}
		foreach ($subGroups as $entry) {
			if (!($entry instanceof LabTestResultsGroupType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'subGroups', 'lab-test-results-group-type'));
			}
		}
	
		return $subGroups;
	}

	public function addSubGroups($subGroups) {
		$this->subGroups[] = $subGroups;
	}

	public function getResults() {
		if ($this->results===NULL) {
			$this->results = $this->createResults();
		}
		return $this->results;
	}
	
	protected function createResults() {
		return array();
	}

	public function setResults($results) {
		$this->results = $this->validateResults($results);
	}

	protected function validateResults($results) {
		if ( ! is_array ($results) && ! is_null($results) ) {
			$results = array($results);
		}
		$count = count($results);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'results', 0));
		}
		foreach ($results as $entry) {
			if (!($entry instanceof LabTestResultType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'results', 'lab-test-result-type'));
			}
		}
	
		return $results;
	}

	public function addResults($results) {
		$this->results[] = $results;
	}
} // end class LabTestResultsGroupType
