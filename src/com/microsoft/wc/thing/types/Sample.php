<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="sample")
 */
class Sample {
	/**
	 * Sample
	 * Defines a single sample.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="time-offset")
	 */
	protected $timeOffset;

	/**
	 * @XmlText	(type="string", name="note")
	 */
	protected $note;

	/**
	 * @XmlText	(type="string", name="value")
	 */
	protected $value;

	public function __construct($timeOffset = NULL, $note = NULL, $value = NULL) {
		$this->timeOffset = ($timeOffset===NULL) ? NULL : $this->validateTimeOffset($timeOffset);
		$this->note = ($note===NULL) ? NULL : $this->validateNote($note);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getTimeOffset($autoCreate = TRUE) {
		if ($this->timeOffset===NULL && $autoCreate && ! isset($this->_overrides['timeOffset']) ) {
			$this->timeOffset = $this->createTimeOffset();
		}
		return $this->timeOffset;
	}
	
	protected function createTimeOffset() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setTimeOffset($timeOffset) {
		$this->timeOffset = $this->validateTimeOffset($timeOffset);
	}

	protected function validateTimeOffset($timeOffset) {
		if ( ! $timeOffset instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$timeOffset = new \com\microsoft\wc\thing\types\NonNegativeDouble ($timeOffset);
		}
	
		return $timeOffset;
	}

	public function getNote($autoCreate = TRUE) {
		if ($this->note===NULL && $autoCreate && ! isset($this->_overrides['note']) ) {
			$this->note = $this->createNote();
		}
		return $this->note;
	}
	
	protected function createNote() {
		return '';
	}

	public function setNote($note) {
		$this->note = $this->validateNote($note);
	}

	protected function validateNote($note) {
		if ( ! is_string($note) && ! is_null($note) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'note', 'string'));
		}
	
		return $note;
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! is_string($value) && ! is_null($value) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}
} // end class Sample
