<?php
namespace com\microsoft\wc\methods\SelectInstance;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SelectInstance", prefix="")
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
	 * @XmlElement	(type="\com\microsoft\wc\types\Location", name="preferred-location")
	 */
	protected $preferredLocation;

	public function __construct($preferredLocation = NULL) {
		$this->preferredLocation = ($preferredLocation===NULL) ? NULL : $this->validatePreferredLocation($preferredLocation);
	}

	public function getPreferredLocation($autoCreate = TRUE) {
		if ($this->preferredLocation===NULL && $autoCreate && ! isset($this->_overrides['preferredLocation']) ) {
			$this->preferredLocation = $this->createPreferredLocation();
		}
		return $this->preferredLocation;
	}
	
	protected function createPreferredLocation() {
		return new \com\microsoft\wc\types\Location();
	}

	public function setPreferredLocation($preferredLocation) {
		$this->preferredLocation = $this->validatePreferredLocation($preferredLocation);
	}

	protected function validatePreferredLocation($preferredLocation) {
		if ( ! $preferredLocation instanceof \com\microsoft\wc\types\Location ) {
			$preferredLocation = new \com\microsoft\wc\types\Location ($preferredLocation);
		}
	
		return $preferredLocation;
	}
} // end class Info
