<?php
namespace com\microsoft\wc\methods\GetThings;

use com\microsoft\wc\methods\GetThings\ThingFormatSpec;
use com\microsoft\wc\types\Guid;
use com\microsoft\wc\thing\ThingKey;
use com\microsoft\wc\types\String255;
use com\microsoft\wc\methods\GetThings\ThingFilterSpec;

/**
 * @XmlEntity	(xml="ThingRequestGroup")
 */
class ThingRequestGroup {
	/**
	 * Specifies a filter group to be used for retrieving things from a record.
	 * Each group is independent of the other groups and is distinguished by the name. Each clause in this group is AND'd together except the id clause which is OR'd with the other clauses.
	 */

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
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings\ThingFormatSpec", name="format")
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

	public function getId() {
		if ($this->id===NULL) {
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
		if ( ! $id instanceof Guid  && ! is_null($id) ) {
			$id = new Guid ($id);
		}
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		foreach ($id as $entry) {
			if (!($entry instanceof Guid)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'guid'));
			}
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $id;
	}

	public function getKey() {
		if ($this->key===NULL) {
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
		if ( ! $key instanceof ThingKey  && ! is_null($key) ) {
			$key = new ThingKey ($key);
		}
		$count = count($key);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'key', 0));
		}
		foreach ($key as $entry) {
			if (!($entry instanceof ThingKey)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'key', 'ThingKey'));
			}
		}
	
		return $key;
	}

	public function addKey($key) {
		$this->key[] = $key;
	}

	public function getClientThingId() {
		if ($this->clientThingId===NULL) {
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
		if ( ! $clientThingId instanceof String255  && ! is_null($clientThingId) ) {
			$clientThingId = new String255 ($clientThingId);
		}
		$count = count($clientThingId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'clientThingId', 0));
		}
		foreach ($clientThingId as $entry) {
			if (!($entry instanceof String255)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'clientThingId', 'string255'));
			}
		}
	
		return $clientThingId;
	}

	public function addClientThingId($clientThingId) {
		$this->clientThingId[] = $clientThingId;
	}

	public function getFilter() {
		if ($this->filter===NULL) {
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
		if ( ! $filter instanceof ThingFilterSpec  && ! is_null($filter) ) {
			$filter = new ThingFilterSpec ($filter);
		}
		$count = count($filter);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'filter', 0));
		}
		foreach ($filter as $entry) {
			if (!($entry instanceof ThingFilterSpec)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'filter', 'ThingFilterSpec'));
			}
		}
	
		return $filter;
	}

	public function addFilter($filter) {
		$this->filter[] = $filter;
	}

	public function getFormat() {
		if ($this->format===NULL) {
			$this->format = $this->createFormat();
		}
		return $this->format;
	}
	
	protected function createFormat() {
		return new ThingFormatSpec();
	}

	public function setFormat($format) {
		$this->format = $this->validateFormat($format);
	}

	protected function validateFormat($format) {
		if ( ! $format instanceof ThingFormatSpec ) {
			$format = new ThingFormatSpec ($format);
		}
	
		return $format;
	}

	public function getCurrentVersionOnly() {
		if ($this->currentVersionOnly===NULL) {
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
		if ( ! is_string($name) && ! is_null($name) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getMax() {
		if ($this->max===NULL) {
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
		if ( ! is_integer($max) && ! is_null($max) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'max', 'integer'));
		}
	
		return $max;
	}

	public function getMaxFull() {
		if ($this->maxFull===NULL) {
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
		if ( ! is_integer($maxFull) && ! is_null($maxFull) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maxFull', 'integer'));
		}
	
		return $maxFull;
	}
} // end class ThingRequestGroup
