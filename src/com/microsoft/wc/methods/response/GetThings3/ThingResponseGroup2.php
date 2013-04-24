<?php
namespace com\microsoft\wc\methods\response\GetThings3;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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
				if (!($entry instanceof Thing2)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'thing', 'Thing2'));
				}
			}
		}
	
		return $thing;
	}

	public function addThing($thing) {
		$this->thing[] = $thing;
	}

	public function getUnprocessedThingKeyInfo($autoCreate = TRUE) {
		if ($this->unprocessedThingKeyInfo===NULL && $autoCreate && ! isset($this->_overrides['unprocessedThingKeyInfo']) ) {
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
		if ( $unprocessedThingKeyInfo === FALSE ) {
			$this->_overrides['unprocessedThingKeyInfo'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($unprocessedThingKeyInfo) && ! is_null($unprocessedThingKeyInfo) ) {
			$unprocessedThingKeyInfo = array($unprocessedThingKeyInfo);
		}

		unset ($this->_overrides['unprocessedThingKeyInfo']);
		$count = count($unprocessedThingKeyInfo);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'unprocessedThingKeyInfo', 0));
		}
		if ( ! empty($unprocessedThingKeyInfo) ) {
			foreach ($unprocessedThingKeyInfo as $entry) {
				if (!($entry instanceof UnprocessedThingKeyInfo)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'unprocessedThingKeyInfo', 'UnprocessedThingKeyInfo'));
				}
			}
		}
	
		return $unprocessedThingKeyInfo;
	}

	public function addUnprocessedThingKeyInfo($unprocessedThingKeyInfo) {
		$this->unprocessedThingKeyInfo[] = $unprocessedThingKeyInfo;
	}

	public function getFiltered($autoCreate = TRUE) {
		if ($this->filtered===NULL && $autoCreate && ! isset($this->_overrides['filtered']) ) {
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
		if ( ! is_bool($filtered) && ! is_null($filtered) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'filtered', 'boolean'));
		}
	
		return $filtered;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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
		if ( ! is_string($name) && ! is_null($name) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}
} // end class ThingResponseGroup2
