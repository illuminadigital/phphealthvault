<?php
namespace com\microsoft\wc\methods\response\GetValidGroupMembership;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetValidGroupMembership", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * Contains the response of the GetValidGroupMemberships method request.
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
		if ( $thing === FALSE ) {
			$this->_overrides['thing'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($thing) && ! is_null($thing) ) {
			$thing = array($thing);
		}

		unset ($this->_overrides['thing']);
		$count = count($thing);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thing', 0));
		}
		if ( ! empty($thing) ) {
			foreach ($thing as $entry) {
				if (!($entry instanceof Thing)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'thing', 'Thing'));
				}
			}
		}
	
		return $thing;
	}

	public function addThing($thing) {
		$this->thing[] = $thing;
	}
} // end class Info
