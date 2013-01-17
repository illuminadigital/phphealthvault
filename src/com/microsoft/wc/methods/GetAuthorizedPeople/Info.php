<?php
namespace com\microsoft\wc\methods\GetAuthorizedPeople;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetAuthorizedPeople", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetAuthorizedPeople\GetAuthorizedPeopleParameters", name="parameters")
	 */
	protected $parameters;

	public function __construct($parameters = NULL) {
		$this->parameters = ($parameters===NULL) ? NULL : $this->validateParameters($parameters);
	}

	public function getParameters() {
		if ($this->parameters===NULL) {
			$this->parameters = $this->createParameters();
		}
		return $this->parameters;
	}
	
	protected function createParameters() {
		return new \com\microsoft\wc\methods\GetAuthorizedPeople\GetAuthorizedPeopleParameters();
	}

	public function setParameters($parameters) {
		$this->parameters = $this->validateParameters($parameters);
	}

	protected function validateParameters($parameters) {
		if ( ! $parameters instanceof \com\microsoft\wc\methods\GetAuthorizedPeople\GetAuthorizedPeopleParameters ) {
			$parameters = new \com\microsoft\wc\methods\GetAuthorizedPeople\GetAuthorizedPeopleParameters ($parameters);
		}
	
		return $parameters;
	}
} // end class Info
