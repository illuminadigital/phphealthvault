<?php
namespace com\microsoft\wc\methods\GetServiceDefinition2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="updated-date")
	 */
	protected $updatedDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetServiceDefinition2\ResponseSections", name="response-sections")
	 */
	protected $responseSections;

	public function __construct($updatedDate = NULL, $responseSections = NULL) {
		$this->updatedDate = ($updatedDate===NULL) ? NULL : $this->validateUpdatedDate($updatedDate);
		$this->responseSections = ($responseSections===NULL) ? NULL : $this->validateResponseSections($responseSections);
	}

	public function getUpdatedDate($autoCreate = TRUE) {
		if ($this->updatedDate===NULL && $autoCreate && ! isset($this->_overrides['updatedDate']) ) {
			$this->updatedDate = $this->createUpdatedDate();
		}
		return $this->updatedDate;
	}
	
	protected function createUpdatedDate() {
		return NULL;
	}

	public function setUpdatedDate($updatedDate) {
		$this->updatedDate = $this->validateUpdatedDate($updatedDate);
	}

	protected function validateUpdatedDate($updatedDate) {
		if ( ! is_string($updatedDate) && ! is_null($updatedDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updatedDate', 'string'));
		}
	
		return $updatedDate;
	}

	public function getResponseSections($autoCreate = TRUE) {
		if ($this->responseSections===NULL && $autoCreate && ! isset($this->_overrides['responseSections']) ) {
			$this->responseSections = $this->createResponseSections();
		}
		return $this->responseSections;
	}
	
	protected function createResponseSections() {
		return new \com\microsoft\wc\methods\GetServiceDefinition2\ResponseSections();
	}

	public function setResponseSections($responseSections) {
		$this->responseSections = $this->validateResponseSections($responseSections);
	}

	protected function validateResponseSections($responseSections) {
		if ( $responseSections === FALSE ) {
			$this->_overrides['responseSections'] = TRUE;
			return NULL;
		}

		if ( ! $responseSections instanceof \com\microsoft\wc\methods\GetServiceDefinition2\ResponseSections  && ! is_null($responseSections) ) {
			$responseSections = new \com\microsoft\wc\methods\GetServiceDefinition2\ResponseSections ($responseSections);
		}

		unset ($this->_overrides['responseSections']);
	
		return $responseSections;
	}
} // end class Info
