<?php
namespace com\microsoft\wc\methods\response\GetThings3;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\UnprocessedThingKeyInfo;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThings3", prefix="")
 * })
 * @XmlEntity	(xml="ThingResponseGroup2")
 */
class ThingResponseGroup2 {
	/**
	 * Each response group corresponds to a filter request group sent with the GetThings request.
	 * Each group is uniquely identified by the group name and contains the represent an group of clauses that are used as a filter to a GetThings method request. Each group is independent of the other groups that might be sent with the same request.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Thing2", collection="true", name="thing")
	 */
	protected $thing;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\UnprocessedThingKeyInfo", collection="true", name="unprocessed-thing-key-info")
	 */
	protected $unprocessedThingKeyInfo;

	/**
	 * @XmlText	(type="boolean", name="filtered")
	 */
	protected $filtered;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	public function __construct($thing = NULL, $unprocessedThingKeyInfo = NULL, $filtered = NULL, $name = NULL) {
		$this->thing = ($thing===NULL) ? NULL : $this->validateThing($thing);
		$this->unprocessedThingKeyInfo = ($unprocessedThingKeyInfo===NULL) ? NULL : $this->validateUnprocessedThingKeyInfo($unprocessedThingKeyInfo);
		$this->filtered = ($filtered===NULL) ? NULL : $this->validateFiltered($filtered);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
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
		if ( ! $thing instanceof Thing2 ) {
			$thing = new Thing2 ($thing);
		}
		$count = count($thing);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thing', 0));
		}
		foreach ($thing as $entry) {
			if (!($entry instanceof Thing2)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thing', 'Thing2'));
			}
		}
	
		return $thing;
	}

	public function addThing($thing) {
		$this->thing[] = $thing;
	}

	public function getUnprocessedThingKeyInfo() {
		if ($this->unprocessedThingKeyInfo===NULL) {
			$this->unprocessedThingKeyInfo = $this->createUnprocessedThingKeyInfo();
		}
		return $this->unprocessedThingKeyInfo;
	}
	
	protected function createUnprocessedThingKeyInfo() {
		return array();
	}

	public function setUnprocessedThingKeyInfo($unprocessedThingKeyInfo) {
		$this->unprocessedThingKeyInfo = $this->validateUnprocessedThingKeyInfo($unprocessedThingKeyInfo);
	}

	protected function validateUnprocessedThingKeyInfo($unprocessedThingKeyInfo) {
		if ( ! $unprocessedThingKeyInfo instanceof UnprocessedThingKeyInfo ) {
			$unprocessedThingKeyInfo = new UnprocessedThingKeyInfo ($unprocessedThingKeyInfo);
		}
		$count = count($unprocessedThingKeyInfo);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'unprocessedThingKeyInfo', 0));
		}
		foreach ($unprocessedThingKeyInfo as $entry) {
			if (!($entry instanceof UnprocessedThingKeyInfo)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'unprocessedThingKeyInfo', 'UnprocessedThingKeyInfo'));
			}
		}
	
		return $unprocessedThingKeyInfo;
	}

	public function addUnprocessedThingKeyInfo($unprocessedThingKeyInfo) {
		$this->unprocessedThingKeyInfo[] = $unprocessedThingKeyInfo;
	}

	public function getFiltered() {
		if ($this->filtered===NULL) {
			$this->filtered = $this->createFiltered();
		}
		return $this->filtered;
	}
	
	protected function createFiltered() {
		return FALSE;
	}

	public function setFiltered($filtered) {
		$this->filtered = $this->validateFiltered($filtered);
	}

	protected function validateFiltered($filtered) {
		if (!is_bool($filtered)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'filtered', 'boolean'));
		}
	
		return $filtered;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}
} // end class ThingResponseGroup2
