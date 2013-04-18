<?php
namespace com\microsoft\wc\methods\response\GetAlternateIds;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAlternateIds", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetAlternateIds\AlternateIds", name="alternate-ids")
	 */
	protected $alternateIds;

	public function __construct($alternateIds = NULL) {
		$this->alternateIds = ($alternateIds===NULL) ? NULL : $this->validateAlternateIds($alternateIds);
	}

	public function getAlternateIds($autoCreate = TRUE) {
		if ($this->alternateIds===NULL && $autoCreate && ! isset($this->_overrides['alternateIds']) ) {
			$this->alternateIds = $this->createAlternateIds();
		}
		return $this->alternateIds;
	}
	
	protected function createAlternateIds() {
		return new \com\microsoft\wc\methods\response\GetAlternateIds\AlternateIds();
	}

	public function setAlternateIds($alternateIds) {
		$this->alternateIds = $this->validateAlternateIds($alternateIds);
	}

	protected function validateAlternateIds($alternateIds) {
		if ( ! $alternateIds instanceof \com\microsoft\wc\methods\response\GetAlternateIds\AlternateIds ) {
			$alternateIds = new \com\microsoft\wc\methods\response\GetAlternateIds\AlternateIds ($alternateIds);
		}
	
		return $alternateIds;
	}
} // end class Info
