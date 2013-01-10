<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;



/**
 * @XmlEntity	(xml="XmlMethodVersion")
 */
class XmlMethodVersion {
	/**
	 * Information about a particular version of one of the Microsoft HealthVault XML web-methods.
	 */

	/**
	 * @XmlText	(type="string", name="request-schema-url")
	 */
	protected $requestSchemaUrl;

	/**
	 * @XmlText	(type="string", name="response-schema-url")
	 */
	protected $responseSchemaUrl;

	/**
	 * @XmlAttribute	(type="string", name="number")
	 */
	protected $number;

	public function __construct($requestSchemaUrl = NULL, $responseSchemaUrl = NULL, $number = NULL) {
		$this->requestSchemaUrl = ($requestSchemaUrl===NULL) ? NULL : $this->validateRequestSchemaUrl($requestSchemaUrl);
		$this->responseSchemaUrl = ($responseSchemaUrl===NULL) ? NULL : $this->validateResponseSchemaUrl($responseSchemaUrl);
		$this->number = ($number===NULL) ? NULL : $this->validateNumber($number);
	}

	public function getRequestSchemaUrl() {
		if ($this->requestSchemaUrl===NULL) {
			$this->requestSchemaUrl = $this->createRequestSchemaUrl();
		}
		return $this->requestSchemaUrl;
	}
	
	protected function createRequestSchemaUrl() {
		return '';
	}

	public function setRequestSchemaUrl($requestSchemaUrl) {
		$this->requestSchemaUrl = $this->validateRequestSchemaUrl($requestSchemaUrl);
	}

	protected function validateRequestSchemaUrl($requestSchemaUrl) {
		if ( ! is_string($requestSchemaUrl) && ! is_null($requestSchemaUrl) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'requestSchemaUrl', 'string'));
		}
	
		return $requestSchemaUrl;
	}

	public function getResponseSchemaUrl() {
		if ($this->responseSchemaUrl===NULL) {
			$this->responseSchemaUrl = $this->createResponseSchemaUrl();
		}
		return $this->responseSchemaUrl;
	}
	
	protected function createResponseSchemaUrl() {
		return '';
	}

	public function setResponseSchemaUrl($responseSchemaUrl) {
		$this->responseSchemaUrl = $this->validateResponseSchemaUrl($responseSchemaUrl);
	}

	protected function validateResponseSchemaUrl($responseSchemaUrl) {
		if ( ! is_string($responseSchemaUrl) && ! is_null($responseSchemaUrl) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'responseSchemaUrl', 'string'));
		}
	
		return $responseSchemaUrl;
	}

	public function getNumber() {
		if ($this->number===NULL) {
			$this->number = $this->createNumber();
		}
		return $this->number;
	}
	
	protected function createNumber() {
		return '';
	}

	public function setNumber($number) {
		$this->number = $this->validateNumber($number);
	}

	protected function validateNumber($number) {
		if (!is_string($number)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'number', 'string'));
		}
	
		return $number;
	}
} // end class XmlMethodVersion
