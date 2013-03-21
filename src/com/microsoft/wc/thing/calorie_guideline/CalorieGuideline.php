<?php
namespace com\microsoft\wc\thing\calorie_guideline;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.calorie-guideline", prefix="")
 * })
 * @XmlEntity	(xml="calorie-guideline")
 */
class CalorieGuideline extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Stores suggested calorie intake guidelines.
	 * Examples: Daily calories suggested for weight loss, calories needed for weight maintenance, BMR.
	 */

	const ID = 'd3170d30-a41b-4bde-a116-87698c8a001a';
	const NAME = 'Calorie Guideline';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="calories")
	 */
	protected $calories;

	public function __construct($when = NULL, $name = NULL, $calories = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->calories = ($calories===NULL) ? NULL : $this->validateCalories($calories);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
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

	public function getCalories($autoCreate = TRUE) {
		if ($this->calories===NULL && $autoCreate && ! isset($this->_overrides['calories']) ) {
			$this->calories = $this->createCalories();
		}
		return $this->calories;
	}
	
	protected function createCalories() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setCalories($calories) {
		$this->calories = $this->validateCalories($calories);
	}

	protected function validateCalories($calories) {
		if ( ! $calories instanceof \com\microsoft\wc\thing\types\GeneralMeasurement ) {
			$calories = new \com\microsoft\wc\thing\types\GeneralMeasurement ($calories);
		}
	
		return $calories;
	}
} // end class CalorieGuideline
