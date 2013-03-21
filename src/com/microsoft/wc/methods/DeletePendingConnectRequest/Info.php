<?php
namespace com\microsoft\wc\methods\DeletePendingConnectRequest;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.DeletePendingConnectRequest", prefix="")
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
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="external-id")
	 */
	protected $externalId;

	public function __construct($externalId = NULL) {
		$this->externalId = ($externalId===NULL) ? NULL : $this->validateExternalId($externalId);
	}

	public function getExternalId($autoCreate = TRUE) {
		if ($this->externalId===NULL && $autoCreate && ! isset($this->_overrides['externalId']) ) {
			$this->externalId = $this->createExternalId();
		}
		return $this->externalId;
	}
	
	protected function createExternalId() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setExternalId($externalId) {
		$this->externalId = $this->validateExternalId($externalId);
	}

	protected function validateExternalId($externalId) {
		if ( ! $externalId instanceof \com\microsoft\wc\types\Stringnz ) {
			$externalId = new \com\microsoft\wc\types\Stringnz ($externalId);
		}
	
		return $externalId;
	}
} // end class Info
