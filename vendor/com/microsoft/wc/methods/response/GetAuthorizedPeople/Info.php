<?php
namespace com\microsoft\wc\methods\response\GetAuthorizedPeople;

use com\microsoft\wc\methods\response\GetAuthorizedPeople\GetAuthorizedPeopleResponse;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAuthorizedPeople", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetAuthorizedPeople\GetAuthorizedPeopleResponse", name="response-results")
	 */
	protected $responseResults;

	public function __construct($responseResults = NULL) {
		$this->responseResults = ($responseResults===NULL) ? NULL : $this->validateResponseResults($responseResults);
	}

	public function getResponseResults() {
		if ($this->responseResults===NULL) {
			$this->responseResults = $this->createResponseResults();
		}
		return $this->responseResults;
	}
	
	protected function createResponseResults() {
		return new GetAuthorizedPeopleResponse();
	}

	public function setResponseResults($responseResults) {
		$this->responseResults = $this->validateResponseResults($responseResults);
	}

	protected function validateResponseResults($responseResults) {
		if ( ! $responseResults instanceof GetAuthorizedPeopleResponse ) {
			$responseResults = new GetAuthorizedPeopleResponse ($responseResults);
		}
	
		return $responseResults;
	}
} // end class Info
