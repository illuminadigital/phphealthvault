<?php
namespace com\microsoft\wc\methods\response\GetValidGroupMembership;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetValidGroupMembership", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * Contains the response of the GetValidGroupMemberships method request.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Thing", collection="true", name="thing")
	 */
	protected $thing;

	public function __construct($thing = NULL) {
		$this->thing = ($thing===NULL) ? NULL : $this->validateThing($thing);
	}

	public function getThing() {
		if ($this->thing===NULL) {
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
		if ( ! $thing instanceof \com\microsoft\wc\thing\Thing  && ! is_null($thing) ) {
			$thing = new \com\microsoft\wc\thing\Thing ($thing);
		}
		$count = count($thing);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thing', 0));
		}
		foreach ($thing as $entry) {
			if (!($entry instanceof Thing)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thing', 'Thing'));
			}
		}
	
		return $thing;
	}

	public function addThing($thing) {
		$this->thing[] = $thing;
	}
} // end class Info
