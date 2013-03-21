<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="name")
 */
class Name {
	/**
	 * Name
	 * Defines a person's name.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="full")
	 */
	protected $full;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="title")
	 */
	protected $title;

	/**
	 * @XmlText	(type="string", name="first")
	 */
	protected $first;

	/**
	 * @XmlText	(type="string", name="middle")
	 */
	protected $middle;

	/**
	 * @XmlText	(type="string", name="last")
	 */
	protected $last;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="suffix")
	 */
	protected $suffix;

	public function __construct($full = NULL, $title = NULL, $first = NULL, $middle = NULL, $last = NULL, $suffix = NULL) {
		$this->full = ($full===NULL) ? NULL : $this->validateFull($full);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->first = ($first===NULL) ? NULL : $this->validateFirst($first);
		$this->middle = ($middle===NULL) ? NULL : $this->validateMiddle($middle);
		$this->last = ($last===NULL) ? NULL : $this->validateLast($last);
		$this->suffix = ($suffix===NULL) ? NULL : $this->validateSuffix($suffix);
	}

	public function getFull($autoCreate = TRUE) {
		if ($this->full===NULL && $autoCreate && ! isset($this->_overrides['full']) ) {
			$this->full = $this->createFull();
		}
		return $this->full;
	}
	
	protected function createFull() {
		return '';
	}

	public function setFull($full) {
		$this->full = $this->validateFull($full);
	}

	protected function validateFull($full) {
		if (!is_string($full)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'full', 'string'));
		}
	
		return $full;
	}

	public function getTitle($autoCreate = TRUE) {
		if ($this->title===NULL && $autoCreate && ! isset($this->_overrides['title']) ) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if ( $title === FALSE ) {
			$this->_overrides['title'] = TRUE;
			return NULL;
		}

		if ( ! $title instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($title) ) {
			$title = new \com\microsoft\wc\types\CodableValue ($title);
		}

		unset ($this->_overrides['title']);
	
		return $title;
	}

	public function getFirst($autoCreate = TRUE) {
		if ($this->first===NULL && $autoCreate && ! isset($this->_overrides['first']) ) {
			$this->first = $this->createFirst();
		}
		return $this->first;
	}
	
	protected function createFirst() {
		return '';
	}

	public function setFirst($first) {
		$this->first = $this->validateFirst($first);
	}

	protected function validateFirst($first) {
		if ( ! is_string($first) && ! is_null($first) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'first', 'string'));
		}
	
		return $first;
	}

	public function getMiddle($autoCreate = TRUE) {
		if ($this->middle===NULL && $autoCreate && ! isset($this->_overrides['middle']) ) {
			$this->middle = $this->createMiddle();
		}
		return $this->middle;
	}
	
	protected function createMiddle() {
		return '';
	}

	public function setMiddle($middle) {
		$this->middle = $this->validateMiddle($middle);
	}

	protected function validateMiddle($middle) {
		if ( ! is_string($middle) && ! is_null($middle) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'middle', 'string'));
		}
	
		return $middle;
	}

	public function getLast($autoCreate = TRUE) {
		if ($this->last===NULL && $autoCreate && ! isset($this->_overrides['last']) ) {
			$this->last = $this->createLast();
		}
		return $this->last;
	}
	
	protected function createLast() {
		return '';
	}

	public function setLast($last) {
		$this->last = $this->validateLast($last);
	}

	protected function validateLast($last) {
		if ( ! is_string($last) && ! is_null($last) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'last', 'string'));
		}
	
		return $last;
	}

	public function getSuffix($autoCreate = TRUE) {
		if ($this->suffix===NULL && $autoCreate && ! isset($this->_overrides['suffix']) ) {
			$this->suffix = $this->createSuffix();
		}
		return $this->suffix;
	}
	
	protected function createSuffix() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSuffix($suffix) {
		$this->suffix = $this->validateSuffix($suffix);
	}

	protected function validateSuffix($suffix) {
		if ( $suffix === FALSE ) {
			$this->_overrides['suffix'] = TRUE;
			return NULL;
		}

		if ( ! $suffix instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($suffix) ) {
			$suffix = new \com\microsoft\wc\types\CodableValue ($suffix);
		}

		unset ($this->_overrides['suffix']);
	
		return $suffix;
	}
} // end class Name
