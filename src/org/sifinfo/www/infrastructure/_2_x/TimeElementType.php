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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Type")
	 */
	protected $type;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Token", name="Code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DateTime", name="StartDateTime")
	 */
	protected $startDateTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DateTime", name="EndDateTime")
	 */
	protected $endDateTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SpanGaps", name="SpanGaps")
	 */
	protected $spanGaps;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Boolean", name="IsCurrent")
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
		if (!is_normalizedString($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'normalizedString'));
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
		if (!is_token($code)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'token'));
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
		if (!is_normalizedString($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'normalizedString'));
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
		if (!is_normalizedString($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'normalizedString'));
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
		if ( ! is_dateTime($startDateTime) && ! is_null($startDateTime) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'startDateTime', 'dateTime'));
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
		if ( ! is_dateTime($endDateTime) && ! is_null($endDateTime) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'endDateTime', 'dateTime'));
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
