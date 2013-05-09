<?php
namespace com\microsoft\wc\methods\OverwriteThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.OverwriteThings", prefix="")
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
	 * @XmlElement	(type="\com\microsoft\wc\thing\Thing", collection="true", name="thing")
	 */
	protected $thing;

	public function __construct($thing = NULL) {
		$this->thing = ($thing===NULL) ? NULL : $this->validateThing($thing);
	}

	public function getThing($autoCreate = TRUE) {
		if ($this->thing===NULL && $autoCreate && ! isset($this->_overrides['thing']) ) {
			$this->thing = $this->createThing();
		}
		return $this->thing;
	}
	
	protected function createThing() {
		return array();
	}

	public function setThing($thing) {
		$this->thing = $this->validateThing($thing);
	}

	protected function validateThing($thing) {
		if ( ! is_array ($thing) ) {
			$thing = array($thing);
		}
		$count = count($thing);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thing', 1));
		}
		foreach ($thing as $entry) {
			if (!($entry instanceof \com\microsoft\wc\thing\Thing )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thing', 'Thing'));
			}
		}
	
		return $thing;
	}

	public function addThing($thing) {
		$this->thing[] = $thing;
	}
} // end class Info
