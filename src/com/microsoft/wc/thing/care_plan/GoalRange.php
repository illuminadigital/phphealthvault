<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="goal-range")
 */
class GoalRange {
	/**
	 * This represents a goal range associated with a goal.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="minimum")
	 */
	protected $minimum;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="maximum")
	 */
	protected $maximum;

	public function __construct($name = NULL, $description = NULL, $minimum = NULL, $maximum = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->minimum = ($minimum===NULL) ? NULL : $this->validateMinimum($minimum);
		$this->maximum = ($maximum===NULL) ? NULL : $this->validateMaximum($maximum);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( $description === FALSE ) {
			$this->_overrides['description'] = TRUE;
			return NULL;
		}

		if ( ! $description instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($description) ) {
			$description = new \com\microsoft\wc\types\Stringnznw ($description);
		}

		unset ($this->_overrides['description']);
	
		return $description;
	}

	public function getMinimum($autoCreate = TRUE) {
		if ($this->minimum===NULL && $autoCreate && ! isset($this->_overrides['minimum']) ) {
			$this->minimum = $this->createMinimum();
		}
		return $this->minimum;
	}
	
	protected function createMinimum() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setMinimum($minimum) {
		$this->minimum = $this->validateMinimum($minimum);
	}

	protected function validateMinimum($minimum) {
		if ( $minimum === FALSE ) {
			$this->_overrides['minimum'] = TRUE;
			return NULL;
		}

		if ( ! $minimum instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($minimum) ) {
			$minimum = new \com\microsoft\wc\thing\types\GeneralMeasurement ($minimum);
		}

		unset ($this->_overrides['minimum']);
	
		return $minimum;
	}

	public function getMaximum($autoCreate = TRUE) {
		if ($this->maximum===NULL && $autoCreate && ! isset($this->_overrides['maximum']) ) {
			$this->maximum = $this->createMaximum();
		}
		return $this->maximum;
	}
	
	protected function createMaximum() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setMaximum($maximum) {
		$this->maximum = $this->validateMaximum($maximum);
	}

	protected function validateMaximum($maximum) {
		if ( $maximum === FALSE ) {
			$this->_overrides['maximum'] = TRUE;
			return NULL;
		}

		if ( ! $maximum instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($maximum) ) {
			$maximum = new \com\microsoft\wc\thing\types\GeneralMeasurement ($maximum);
		}

		unset ($this->_overrides['maximum']);
	
		return $maximum;
	}
} // end class GoalRange
