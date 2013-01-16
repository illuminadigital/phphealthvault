<?php
namespace com\microsoft\wc\methods\response\GetAuthorizedPeople;



/**
 * @XmlEntity	(xml="GetAuthorizedPeopleResponse")
 */
class GetAuthorizedPeopleResponse {
	/**
	 * Type containing the response data for GetAuthorizedPeople.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\PersonInfo", collection="true", name="person-info")
	 */
	protected $personInfo;

	/**
	 * @XmlText	(type="boolean", name="more-results")
	 */
	protected $moreResults;

	public function __construct($personInfo = NULL, $moreResults = NULL) {
		$this->personInfo = ($personInfo===NULL) ? NULL : $this->validatePersonInfo($personInfo);
		$this->moreResults = ($moreResults===NULL) ? NULL : $this->validateMoreResults($moreResults);
	}

	public function getPersonInfo() {
		if ($this->personInfo===NULL) {
			$this->personInfo = $this->createPersonInfo();
		}
		return $this->personInfo;
	}
	
	protected function createPersonInfo() {
		return array();
	}

	public function setPersonInfo($personInfo) {
		$this->personInfo = $this->validatePersonInfo($personInfo);
	}

	protected function validatePersonInfo($personInfo) {
		if ( ! $personInfo instanceof \com\microsoft\wc\types\PersonInfo  && ! is_null($personInfo) ) {
			$personInfo = new \com\microsoft\wc\types\PersonInfo ($personInfo);
		}
		$count = count($personInfo);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'personInfo', 0));
		}
		foreach ($personInfo as $entry) {
			if (!($entry instanceof PersonInfo)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'personInfo', 'PersonInfo'));
			}
		}
	
		return $personInfo;
	}

	public function addPersonInfo($personInfo) {
		$this->personInfo[] = $personInfo;
	}

	public function getMoreResults() {
		if ($this->moreResults===NULL) {
			$this->moreResults = $this->createMoreResults();
		}
		return $this->moreResults;
	}
	
	protected function createMoreResults() {
		return FALSE;
	}

	public function setMoreResults($moreResults) {
		$this->moreResults = $this->validateMoreResults($moreResults);
	}

	protected function validateMoreResults($moreResults) {
		if (!is_bool($moreResults)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'moreResults', 'boolean'));
		}
	
		return $moreResults;
	}
} // end class GetAuthorizedPeopleResponse
