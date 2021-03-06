<?php
namespace com\microsoft\wc\methods\GetPersonAndRecordForAlternateId;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetPersonAndRecordForAlternateId", prefix="")
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
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="alternate-id")
	 */
	protected $alternateId;

	public function __construct($alternateId = NULL) {
		$this->alternateId = ($alternateId===NULL) ? NULL : $this->validateAlternateId($alternateId);
	}

	public function getAlternateId($autoCreate = TRUE) {
		if ($this->alternateId===NULL && $autoCreate && ! isset($this->_overrides['alternateId']) ) {
			$this->alternateId = $this->createAlternateId();
		}
		return $this->alternateId;
	}
	
	protected function createAlternateId() {
		return new \com\microsoft\wc\types\String255nw();
	}

	public function setAlternateId($alternateId) {
		$this->alternateId = $this->validateAlternateId($alternateId);
	}

	protected function validateAlternateId($alternateId) {
		if ( ! $alternateId instanceof \com\microsoft\wc\types\String255nw ) {
			$alternateId = new \com\microsoft\wc\types\String255nw ($alternateId);
		}
	
		return $alternateId;
	}
} // end class Info
