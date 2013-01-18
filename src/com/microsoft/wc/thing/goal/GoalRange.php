<?php
namespace com\microsoft\wc\thing\goal;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.goal", prefix="")
 * })
 * @XmlEntity	(xml="goal-range")
 */
class GoalRange {
	/**
	 * This represents a goal range associated with a goal.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="description")
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

	public function getName() {
		if ($this->name===NULL) {
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

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getMinimum() {
		if ($this->minimum===NULL) {
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
		if ( ! $minimum instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($minimum) ) {
			$minimum = new \com\microsoft\wc\thing\types\GeneralMeasurement ($minimum);
		}
	
		return $minimum;
	}

	public function getMaximum() {
		if ($this->maximum===NULL) {
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
		if ( ! $maximum instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($maximum) ) {
			$maximum = new \com\microsoft\wc\thing\types\GeneralMeasurement ($maximum);
		}
	
		return $maximum;
	}
} // end class GoalRange
