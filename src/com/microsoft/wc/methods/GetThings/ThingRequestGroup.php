<?php
namespace com\microsoft\wc\methods\GetThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings", prefix="wc-method-getthings")
 * })
 * @XmlEntity	(xml="ThingRequestGroup")
 */
class ThingRequestGroup {
	/**
	 * Specifies a filter group to be used for retrieving things from a record.
	 * Each group is independent of the other groups and is distinguished by the name. Each clause in this group is AND'd together except the id clause which is OR'd with the other clauses.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingKey", name="key")
	 */
	protected $key;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="client-thing-id")
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
		return new \com\microsoft\wc\types\Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\Guid ) {
			$id = new \com\microsoft\wc\types\Guid ($id);
		}
	
		return $id;
	}

	public function getKey() {
		if ($this->key===NULL) {
			$this->key = $this->createKey();
		}
		return $this->key;
	}
	
	protected function createKey() {
		return new \com\microsoft\wc\thing\ThingKey();
	}

	public function setKey($key) {
		$this->key = $this->validateKey($key);
	}

	protected function validateKey($key) {
		if ( ! $key instanceof \com\microsoft\wc\thing\ThingKey ) {
			$key = new \com\microsoft\wc\thing\ThingKey ($key);
		}
	
		return $key;
	}

	public function getClientThingId() {
		if ($this->clientThingId===NULL) {
			$this->clientThingId = $this->createClientThingId();
		}
		return $this->clientThingId;
	}
	
	protected function createClientThingId() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setClientThingId($clientThingId) {
		$this->clientThingId = $this->validateClientThingId($clientThingId);
	}

	protected function validateClientThingId($clientThingId) {
		if ( ! $clientThingId instanceof \com\microsoft\wc\types\String255 ) {
			$clientThingId = new \com\microsoft\wc\types\String255 ($clientThingId);
		}
	
		return $clientThingId;
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
		if ( ! is_array ($filter) && ! is_null($filter) ) {
			$filter = array($filter);
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
		return new \com\microsoft\wc\methods\GetThings\ThingFormatSpec();
	}

	public function setFormat($format) {
		$this->format = $this->validateFormat($format);
	}

	protected function validateFormat($format) {
		if ( ! $format instanceof \com\microsoft\wc\methods\GetThings\ThingFormatSpec ) {
			$format = new \com\microsoft\wc\methods\GetThings\ThingFormatSpec ($format);
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
} // end class ThingRequestGroup
