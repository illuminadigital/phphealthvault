<?php
namespace com\microsoft\wc\methods\GetThings3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings3", prefix="")
 * })
 * @XmlEntity	(xml="ThingRequestGroup2")
 */
class ThingRequestGroup2 {
	/**
	 * Specifies a filter group to be used for retrieving things from a record.
	 * Each group is independent of the other groups and is distinguished by the name. Each clause in this group is AND'd together except the id clause which is OR'd with the other clauses.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingKey", collection="true", name="key")
	 */
	protected $key;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", collection="true", name="client-thing-id")
	 */
	protected $clientThingId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings\ThingFilterSpec", collection="true", name="filter")
	 */
	protected $filter;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\ThingFormatSpec2", name="format")
	 */
	protected $format;

	/**
	 * @XmlText	(type="boolean", name="current-version-only")
	 */
	protected $currentVersionOnly;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlAttribute	(type="integer", name="max")
	 */
	protected $max;

	/**
	 * @XmlAttribute	(type="integer", name="max-full")
	 */
	protected $maxFull;

	public function __construct($id = NULL, $key = NULL, $clientThingId = NULL, $filter = NULL, $format = NULL, $currentVersionOnly = NULL, $name = NULL, $max = NULL, $maxFull = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->key = ($key===NULL) ? NULL : $this->validateKey($key);
		$this->clientThingId = ($clientThingId===NULL) ? NULL : $this->validateClientThingId($clientThingId);
		$this->filter = ($filter===NULL) ? NULL : $this->validateFilter($filter);
		$this->format = ($format===NULL) ? NULL : $this->validateFormat($format);
		$this->currentVersionOnly = ($currentVersionOnly===NULL) ? NULL : $this->validateCurrentVersionOnly($currentVersionOnly);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->max = ($max===NULL) ? NULL : $this->validateMax($max);
		$this->maxFull = ($maxFull===NULL) ? NULL : $this->validateMaxFull($maxFull);
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return array();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( $id === FALSE ) {
			$this->_overrides['id'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($id) && ! is_null($id) ) {
			$id = array($id);
		}

		unset ($this->_overrides['id']);
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		if ( ! empty($id) ) {
			foreach ($id as $entry) {
				if (!($entry instanceof Guid)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'guid'));
				}
			}
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $id;
	}

	public function getKey($autoCreate = TRUE) {
		if ($this->key===NULL && $autoCreate && ! isset($this->_overrides['key']) ) {
			$this->key = $this->createKey();
		}
		return $this->key;
	}
	
	protected function createKey() {
		return array();
	}

	public function setKey($key) {
		$this->key = $this->validateKey($key);
	}

	protected function validateKey($key) {
		if ( $key === FALSE ) {
			$this->_overrides['key'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($key) && ! is_null($key) ) {
			$key = array($key);
		}

		unset ($this->_overrides['key']);
		$count = count($key);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'key', 0));
		}
		if ( ! empty($key) ) {
			foreach ($key as $entry) {
				if (!($entry instanceof ThingKey)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'key', 'ThingKey'));
				}
			}
		}
	
		return $key;
	}

	public function addKey($key) {
		$this->key[] = $key;
	}

	public function getClientThingId($autoCreate = TRUE) {
		if ($this->clientThingId===NULL && $autoCreate && ! isset($this->_overrides['clientThingId']) ) {
			$this->clientThingId = $this->createClientThingId();
		}
		return $this->clientThingId;
	}
	
	protected function createClientThingId() {
		return array();
	}

	public function setClientThingId($clientThingId) {
		$this->clientThingId = $this->validateClientThingId($clientThingId);
	}

	protected function validateClientThingId($clientThingId) {
		if ( $clientThingId === FALSE ) {
			$this->_overrides['clientThingId'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($clientThingId) && ! is_null($clientThingId) ) {
			$clientThingId = array($clientThingId);
		}

		unset ($this->_overrides['clientThingId']);
		$count = count($clientThingId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'clientThingId', 0));
		}
		if ( ! empty($clientThingId) ) {
			foreach ($clientThingId as $entry) {
				if (!($entry instanceof String255)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'clientThingId', 'string255'));
				}
			}
		}
	
		return $clientThingId;
	}

	public function addClientThingId($clientThingId) {
		$this->clientThingId[] = $clientThingId;
	}

	public function getFilter($autoCreate = TRUE) {
		if ($this->filter===NULL && $autoCreate && ! isset($this->_overrides['filter']) ) {
			$this->filter = $this->createFilter();
		}
		return $this->filter;
	}
	
	protected function createFilter() {
		return array();
	}

	public function setFilter($filter) {
		$this->filter = $this->validateFilter($filter);
	}

	protected function validateFilter($filter) {
		if ( $filter === FALSE ) {
			$this->_overrides['filter'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($filter) && ! is_null($filter) ) {
			$filter = array($filter);
		}

		unset ($this->_overrides['filter']);
		$count = count($filter);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'filter', 0));
		}
		if ( ! empty($filter) ) {
			foreach ($filter as $entry) {
				if (!($entry instanceof ThingFilterSpec)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'filter', 'ThingFilterSpec'));
				}
			}
		}
	
		return $filter;
	}

	public function addFilter($filter) {
		$this->filter[] = $filter;
	}

	public function getFormat($autoCreate = TRUE) {
		if ($this->format===NULL && $autoCreate && ! isset($this->_overrides['format']) ) {
			$this->format = $this->createFormat();
		}
		return $this->format;
	}
	
	protected function createFormat() {
		return new \com\microsoft\wc\methods\GetThings3\ThingFormatSpec2();
	}

	public function setFormat($format) {
		$this->format = $this->validateFormat($format);
	}

	protected function validateFormat($format) {
		if ( ! $format instanceof \com\microsoft\wc\methods\GetThings3\ThingFormatSpec2 ) {
			$format = new \com\microsoft\wc\methods\GetThings3\ThingFormatSpec2 ($format);
		}
	
		return $format;
	}

	public function getCurrentVersionOnly($autoCreate = TRUE) {
		if ($this->currentVersionOnly===NULL && $autoCreate && ! isset($this->_overrides['currentVersionOnly']) ) {
			$this->currentVersionOnly = $this->createCurrentVersionOnly();
		}
		return $this->currentVersionOnly;
	}
	
	protected function createCurrentVersionOnly() {
		return FALSE;
	}

	public function setCurrentVersionOnly($currentVersionOnly) {
		$this->currentVersionOnly = $this->validateCurrentVersionOnly($currentVersionOnly);
	}

	protected function validateCurrentVersionOnly($currentVersionOnly) {
		if ( ! is_bool($currentVersionOnly) && ! is_null($currentVersionOnly) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'currentVersionOnly', 'boolean'));
		}
	
		return $currentVersionOnly;
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

	public function getMax($autoCreate = TRUE) {
		if ($this->max===NULL && $autoCreate && ! isset($this->_overrides['max']) ) {
			$this->max = $this->createMax();
		}
		return $this->max;
	}
	
	protected function createMax() {
		return NULL;
	}

	public function setMax($max) {
		$this->max = $this->validateMax($max);
	}

	protected function validateMax($max) {
		$isValid = FALSE;
		if ( is_integer($max) ) {
			$isValid = TRUE;
		}
		else if ( is_null($max) ) {
			$isValid = TRUE;
		}
		else if ( $max == ($castVar = (integer) $max) ) {
			$isValid = TRUE;
			$max = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'max', 'integer'));
		}
	
		return $max;
	}

	public function getMaxFull($autoCreate = TRUE) {
		if ($this->maxFull===NULL && $autoCreate && ! isset($this->_overrides['maxFull']) ) {
			$this->maxFull = $this->createMaxFull();
		}
		return $this->maxFull;
	}
	
	protected function createMaxFull() {
		return NULL;
	}

	public function setMaxFull($maxFull) {
		$this->maxFull = $this->validateMaxFull($maxFull);
	}

	protected function validateMaxFull($maxFull) {
		$isValid = FALSE;
		if ( is_integer($maxFull) ) {
			$isValid = TRUE;
		}
		else if ( is_null($maxFull) ) {
			$isValid = TRUE;
		}
		else if ( $maxFull == ($castVar = (integer) $maxFull) ) {
			$isValid = TRUE;
			$maxFull = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maxFull', 'integer'));
		}
	
		return $maxFull;
	}
} // end class ThingRequestGroup2
