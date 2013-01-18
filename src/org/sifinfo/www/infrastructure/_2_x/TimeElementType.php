<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="TimeElementType")
 */
class TimeElementType {
	/**
	 * A common metadata element designed to contain time data, both self-defined and by type.
	 */

	/**
	 * @XmlText	(type="string", name="Type")
	 */
	protected $type;

	/**
	 * @XmlText	(type="string", name="Code")
	 */
	protected $code;

	/**
	 * @XmlText	(type="string", name="Name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="Value")
	 */
	protected $value;

	/**
	 * @XmlText	(type="string", name="StartDateTime")
	 */
	protected $startDateTime;

	/**
	 * @XmlText	(type="string", name="EndDateTime")
	 */
	protected $endDateTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SpanGaps", name="SpanGaps")
	 */
	protected $spanGaps;

	/**
	 * @XmlText	(type="boolean", name="IsCurrent")
	 */
	protected $isCurrent;

	public function __construct($type = NULL, $code = NULL, $name = NULL, $value = NULL, $startDateTime = NULL, $endDateTime = NULL, $spanGaps = NULL, $isCurrent = NULL) {
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->startDateTime = ($startDateTime===NULL) ? NULL : $this->validateStartDateTime($startDateTime);
		$this->endDateTime = ($endDateTime===NULL) ? NULL : $this->validateEndDateTime($endDateTime);
		$this->spanGaps = ($spanGaps===NULL) ? NULL : $this->validateSpanGaps($spanGaps);
		$this->isCurrent = ($isCurrent===NULL) ? NULL : $this->validateIsCurrent($isCurrent);
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return NULL;
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if (!is_string($code)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'string'));
		}
	
		return $code;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return NULL;
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

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}

	public function getStartDateTime() {
		if ($this->startDateTime===NULL) {
			$this->startDateTime = $this->createStartDateTime();
		}
		return $this->startDateTime;
	}
	
	protected function createStartDateTime() {
		return NULL;
	}

	public function setStartDateTime($startDateTime) {
		$this->startDateTime = $this->validateStartDateTime($startDateTime);
	}

	protected function validateStartDateTime($startDateTime) {
		if ( ! is_string($startDateTime) && ! is_null($startDateTime) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'startDateTime', 'string'));
		}
	
		return $startDateTime;
	}

	public function getEndDateTime() {
		if ($this->endDateTime===NULL) {
			$this->endDateTime = $this->createEndDateTime();
		}
		return $this->endDateTime;
	}
	
	protected function createEndDateTime() {
		return NULL;
	}

	public function setEndDateTime($endDateTime) {
		$this->endDateTime = $this->validateEndDateTime($endDateTime);
	}

	protected function validateEndDateTime($endDateTime) {
		if ( ! is_string($endDateTime) && ! is_null($endDateTime) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'endDateTime', 'string'));
		}
	
		return $endDateTime;
	}

	public function getSpanGaps() {
		if ($this->spanGaps===NULL) {
			$this->spanGaps = $this->createSpanGaps();
		}
		return $this->spanGaps;
	}
	
	protected function createSpanGaps() {
		return new \org\sifinfo\www\infrastructure\_2_x\SpanGaps();
	}

	public function setSpanGaps($spanGaps) {
		$this->spanGaps = $this->validateSpanGaps($spanGaps);
	}

	protected function validateSpanGaps($spanGaps) {
		if ( ! $spanGaps instanceof \org\sifinfo\www\infrastructure\_2_x\SpanGaps  && ! is_null($spanGaps) ) {
			$spanGaps = new \org\sifinfo\www\infrastructure\_2_x\SpanGaps ($spanGaps);
		}
	
		return $spanGaps;
	}

	public function getIsCurrent() {
		if ($this->isCurrent===NULL) {
			$this->isCurrent = $this->createIsCurrent();
		}
		return $this->isCurrent;
	}
	
	protected function createIsCurrent() {
		return FALSE;
	}

	public function setIsCurrent($isCurrent) {
		$this->isCurrent = $this->validateIsCurrent($isCurrent);
	}

	protected function validateIsCurrent($isCurrent) {
		if (!is_bool($isCurrent)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isCurrent', 'boolean'));
		}
	
		return $isCurrent;
	}
} // end class TimeElementType
