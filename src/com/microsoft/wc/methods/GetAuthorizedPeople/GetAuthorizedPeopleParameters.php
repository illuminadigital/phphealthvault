<?php
namespace com\microsoft\wc\methods\GetAuthorizedPeople;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetAuthorizedPeople", prefix="")
 * })
 * @XmlEntity	(xml="GetAuthorizedPeopleParameters")
 */
class GetAuthorizedPeopleParameters {
	/**
	 * The request parameters for paging the request results.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getPersonIdCursor($autoCreate = TRUE) {
		if ($this->personIdCursor===NULL && $autoCreate && ! isset($this->_overrides['personIdCursor']) ) {
			$this->personIdCursor = $this->createPersonIdCursor();
		}
		return $this->personIdCursor;
	}
	
	protected function createPersonIdCursor() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setPersonIdCursor($personIdCursor) {
		$this->personIdCursor = $this->validatePersonIdCursor($personIdCursor);
	}

	protected function validatePersonIdCursor($personIdCursor) {
		if ( $personIdCursor === FALSE ) {
			$this->_overrides['personIdCursor'] = TRUE;
			return NULL;
		}

		if ( ! $personIdCursor instanceof \com\microsoft\wc\types\Guid  && ! is_null($personIdCursor) ) {
			$personIdCursor = new \com\microsoft\wc\types\Guid ($personIdCursor);
		}

		unset ($this->_overrides['personIdCursor']);
	
		return $personIdCursor;
	}

	public function getAuthorizationsCreatedSince($autoCreate = TRUE) {
		if ($this->authorizationsCreatedSince===NULL && $autoCreate && ! isset($this->_overrides['authorizationsCreatedSince']) ) {
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

	public function getNumResults($autoCreate = TRUE) {
		if ($this->numResults===NULL && $autoCreate && ! isset($this->_overrides['numResults']) ) {
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
		$isValid = FALSE;
		if ( is_integer($numResults) ) {
			$isValid = TRUE;
		}
		else if ( is_null($numResults) ) {
			$isValid = TRUE;
		}
		else if ( $numResults == ($castVar = (integer) $numResults) ) {
			$isValid = TRUE;
			$numResults = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'numResults', 'integer'));
		}
	
		return $numResults;
	}
} // end class GetAuthorizedPeopleParameters
