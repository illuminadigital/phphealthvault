<?php
namespace com\microsoft\wc\methods\GetAuthorizedPeople;

use com\microsoft\wc\types\Guid;

/**
 * @XmlEntity	(xml="GetAuthorizedPeopleParameters")
 */
class GetAuthorizedPeopleParameters {
	/**
	 * The request parameters for paging the request results.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="person-id-cursor")
	 */
	protected $personIdCursor;

	/**
	 * @XmlText	(type="string", name="authorizations-created-since")
	 */
	protected $authorizationsCreatedSince;

	/**
	 * @XmlText	(type="integer", name="num-results")
	 */
	protected $numResults;

	public function __construct($personIdCursor = NULL, $authorizationsCreatedSince = NULL, $numResults = NULL) {
		$this->personIdCursor = ($personIdCursor===NULL) ? NULL : $this->validatePersonIdCursor($personIdCursor);
		$this->authorizationsCreatedSince = ($authorizationsCreatedSince===NULL) ? NULL : $this->validateAuthorizationsCreatedSince($authorizationsCreatedSince);
		$this->numResults = ($numResults===NULL) ? NULL : $this->validateNumResults($numResults);
	}

	public function getPersonIdCursor() {
		if ($this->personIdCursor===NULL) {
			$this->personIdCursor = $this->createPersonIdCursor();
		}
		return $this->personIdCursor;
	}
	
	protected function createPersonIdCursor() {
		return new Guid();
	}

	public function setPersonIdCursor($personIdCursor) {
		$this->personIdCursor = $this->validatePersonIdCursor($personIdCursor);
	}

	protected function validatePersonIdCursor($personIdCursor) {
		if ( ! $personIdCursor instanceof Guid  && ! is_null($personIdCursor) ) {
			$personIdCursor = new Guid ($personIdCursor);
		}
	
		return $personIdCursor;
	}

	public function getAuthorizationsCreatedSince() {
		if ($this->authorizationsCreatedSince===NULL) {
			$this->authorizationsCreatedSince = $this->createAuthorizationsCreatedSince();
		}
		return $this->authorizationsCreatedSince;
	}
	
	protected function createAuthorizationsCreatedSince() {
		return NULL;
	}

	public function setAuthorizationsCreatedSince($authorizationsCreatedSince) {
		$this->authorizationsCreatedSince = $this->validateAuthorizationsCreatedSince($authorizationsCreatedSince);
	}

	protected function validateAuthorizationsCreatedSince($authorizationsCreatedSince) {
		if ( ! is_string($authorizationsCreatedSince) && ! is_null($authorizationsCreatedSince) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'authorizationsCreatedSince', 'string'));
		}
	
		return $authorizationsCreatedSince;
	}

	public function getNumResults() {
		if ($this->numResults===NULL) {
			$this->numResults = $this->createNumResults();
		}
		return $this->numResults;
	}
	
	protected function createNumResults() {
		return NULL;
	}

	public function setNumResults($numResults) {
		$this->numResults = $this->validateNumResults($numResults);
	}

	protected function validateNumResults($numResults) {
		if ( ! is_integer($numResults) && ! is_null($numResults) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'numResults', 'integer'));
		}
	
		return $numResults;
	}
} // end class GetAuthorizedPeopleParameters
