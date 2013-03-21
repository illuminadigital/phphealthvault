<?php
namespace com\microsoft\wc\thing\dietary_intake_daily;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake-daily", prefix="")
 * })
 * @XmlEntity	(xml="dietary-intake-daily")
 */
class DietaryIntakeDaily extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * The amount of dietary nutrients and minerals consumed in a day.
	 */

	const ID = '9c29c6b9-f40e-44ff-b24e-fba6f3074638';
	const NAME = 'Daily Dietary Intake';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Date", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="calories")
	 */
	protected $calories;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="total-fat")
	 */
	protected $totalFat;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="saturated-fat")
	 */
	protected $saturatedFat;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="trans-fat")
	 */
	protected $transFat;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="protein")
	 */
	protected $protein;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="total-carbohydrates")
	 */
	protected $totalCarbohydrates;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="dietary-fiber")
	 */
	protected $dietaryFiber;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="sugars")
	 */
	protected $sugars;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="sodium")
	 */
	protected $sodium;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="cholesterol")
	 */
	protected $cholesterol;

	public function __construct($when = NULL, $calories = NULL, $totalFat = NULL, $saturatedFat = NULL, $transFat = NULL, $protein = NULL, $totalCarbohydrates = NULL, $dietaryFiber = NULL, $sugars = NULL, $sodium = NULL, $cholesterol = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->calories = ($calories===NULL) ? NULL : $this->validateCalories($calories);
		$this->totalFat = ($totalFat===NULL) ? NULL : $this->validateTotalFat($totalFat);
		$this->saturatedFat = ($saturatedFat===NULL) ? NULL : $this->validateSaturatedFat($saturatedFat);
		$this->transFat = ($transFat===NULL) ? NULL : $this->validateTransFat($transFat);
		$this->protein = ($protein===NULL) ? NULL : $this->validateProtein($protein);
		$this->totalCarbohydrates = ($totalCarbohydrates===NULL) ? NULL : $this->validateTotalCarbohydrates($totalCarbohydrates);
		$this->dietaryFiber = ($dietaryFiber===NULL) ? NULL : $this->validateDietaryFiber($dietaryFiber);
		$this->sugars = ($sugars===NULL) ? NULL : $this->validateSugars($sugars);
		$this->sodium = ($sodium===NULL) ? NULL : $this->validateSodium($sodium);
		$this->cholesterol = ($cholesterol===NULL) ? NULL : $this->validateCholesterol($cholesterol);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\Date();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\Date ) {
			$when = new \com\microsoft\wc\dates\Date ($when);
		}
	
		return $when;
	}

	public function getCalories($autoCreate = TRUE) {
		if ($this->calories===NULL && $autoCreate && ! isset($this->_overrides['calories']) ) {
			$this->calories = $this->createCalories();
		}
		return $this->calories;
	}
	
	protected function createCalories() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setCalories($calories) {
		$this->calories = $this->validateCalories($calories);
	}

	protected function validateCalories($calories) {
		if ( $calories === FALSE ) {
			$this->_overrides['calories'] = TRUE;
			return NULL;
		}

		if ( ! $calories instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($calories) ) {
			$calories = new \com\microsoft\wc\thing\types\PositiveInt ($calories);
		}

		unset ($this->_overrides['calories']);
	
		return $calories;
	}

	public function getTotalFat($autoCreate = TRUE) {
		if ($this->totalFat===NULL && $autoCreate && ! isset($this->_overrides['totalFat']) ) {
			$this->totalFat = $this->createTotalFat();
		}
		return $this->totalFat;
	}
	
	protected function createTotalFat() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setTotalFat($totalFat) {
		$this->totalFat = $this->validateTotalFat($totalFat);
	}

	protected function validateTotalFat($totalFat) {
		if ( $totalFat === FALSE ) {
			$this->_overrides['totalFat'] = TRUE;
			return NULL;
		}

		if ( ! $totalFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($totalFat) ) {
			$totalFat = new \com\microsoft\wc\thing\types\WeightValue ($totalFat);
		}

		unset ($this->_overrides['totalFat']);
	
		return $totalFat;
	}

	public function getSaturatedFat($autoCreate = TRUE) {
		if ($this->saturatedFat===NULL && $autoCreate && ! isset($this->_overrides['saturatedFat']) ) {
			$this->saturatedFat = $this->createSaturatedFat();
		}
		return $this->saturatedFat;
	}
	
	protected function createSaturatedFat() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setSaturatedFat($saturatedFat) {
		$this->saturatedFat = $this->validateSaturatedFat($saturatedFat);
	}

	protected function validateSaturatedFat($saturatedFat) {
		if ( $saturatedFat === FALSE ) {
			$this->_overrides['saturatedFat'] = TRUE;
			return NULL;
		}

		if ( ! $saturatedFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($saturatedFat) ) {
			$saturatedFat = new \com\microsoft\wc\thing\types\WeightValue ($saturatedFat);
		}

		unset ($this->_overrides['saturatedFat']);
	
		return $saturatedFat;
	}

	public function getTransFat($autoCreate = TRUE) {
		if ($this->transFat===NULL && $autoCreate && ! isset($this->_overrides['transFat']) ) {
			$this->transFat = $this->createTransFat();
		}
		return $this->transFat;
	}
	
	protected function createTransFat() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setTransFat($transFat) {
		$this->transFat = $this->validateTransFat($transFat);
	}

	protected function validateTransFat($transFat) {
		if ( $transFat === FALSE ) {
			$this->_overrides['transFat'] = TRUE;
			return NULL;
		}

		if ( ! $transFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($transFat) ) {
			$transFat = new \com\microsoft\wc\thing\types\WeightValue ($transFat);
		}

		unset ($this->_overrides['transFat']);
	
		return $transFat;
	}

	public function getProtein($autoCreate = TRUE) {
		if ($this->protein===NULL && $autoCreate && ! isset($this->_overrides['protein']) ) {
			$this->protein = $this->createProtein();
		}
		return $this->protein;
	}
	
	protected function createProtein() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setProtein($protein) {
		$this->protein = $this->validateProtein($protein);
	}

	protected function validateProtein($protein) {
		if ( $protein === FALSE ) {
			$this->_overrides['protein'] = TRUE;
			return NULL;
		}

		if ( ! $protein instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($protein) ) {
			$protein = new \com\microsoft\wc\thing\types\WeightValue ($protein);
		}

		unset ($this->_overrides['protein']);
	
		return $protein;
	}

	public function getTotalCarbohydrates($autoCreate = TRUE) {
		if ($this->totalCarbohydrates===NULL && $autoCreate && ! isset($this->_overrides['totalCarbohydrates']) ) {
			$this->totalCarbohydrates = $this->createTotalCarbohydrates();
		}
		return $this->totalCarbohydrates;
	}
	
	protected function createTotalCarbohydrates() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setTotalCarbohydrates($totalCarbohydrates) {
		$this->totalCarbohydrates = $this->validateTotalCarbohydrates($totalCarbohydrates);
	}

	protected function validateTotalCarbohydrates($totalCarbohydrates) {
		if ( $totalCarbohydrates === FALSE ) {
			$this->_overrides['totalCarbohydrates'] = TRUE;
			return NULL;
		}

		if ( ! $totalCarbohydrates instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($totalCarbohydrates) ) {
			$totalCarbohydrates = new \com\microsoft\wc\thing\types\WeightValue ($totalCarbohydrates);
		}

		unset ($this->_overrides['totalCarbohydrates']);
	
		return $totalCarbohydrates;
	}

	public function getDietaryFiber($autoCreate = TRUE) {
		if ($this->dietaryFiber===NULL && $autoCreate && ! isset($this->_overrides['dietaryFiber']) ) {
			$this->dietaryFiber = $this->createDietaryFiber();
		}
		return $this->dietaryFiber;
	}
	
	protected function createDietaryFiber() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setDietaryFiber($dietaryFiber) {
		$this->dietaryFiber = $this->validateDietaryFiber($dietaryFiber);
	}

	protected function validateDietaryFiber($dietaryFiber) {
		if ( $dietaryFiber === FALSE ) {
			$this->_overrides['dietaryFiber'] = TRUE;
			return NULL;
		}

		if ( ! $dietaryFiber instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($dietaryFiber) ) {
			$dietaryFiber = new \com\microsoft\wc\thing\types\WeightValue ($dietaryFiber);
		}

		unset ($this->_overrides['dietaryFiber']);
	
		return $dietaryFiber;
	}

	public function getSugars($autoCreate = TRUE) {
		if ($this->sugars===NULL && $autoCreate && ! isset($this->_overrides['sugars']) ) {
			$this->sugars = $this->createSugars();
		}
		return $this->sugars;
	}
	
	protected function createSugars() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setSugars($sugars) {
		$this->sugars = $this->validateSugars($sugars);
	}

	protected function validateSugars($sugars) {
		if ( $sugars === FALSE ) {
			$this->_overrides['sugars'] = TRUE;
			return NULL;
		}

		if ( ! $sugars instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($sugars) ) {
			$sugars = new \com\microsoft\wc\thing\types\WeightValue ($sugars);
		}

		unset ($this->_overrides['sugars']);
	
		return $sugars;
	}

	public function getSodium($autoCreate = TRUE) {
		if ($this->sodium===NULL && $autoCreate && ! isset($this->_overrides['sodium']) ) {
			$this->sodium = $this->createSodium();
		}
		return $this->sodium;
	}
	
	protected function createSodium() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setSodium($sodium) {
		$this->sodium = $this->validateSodium($sodium);
	}

	protected function validateSodium($sodium) {
		if ( $sodium === FALSE ) {
			$this->_overrides['sodium'] = TRUE;
			return NULL;
		}

		if ( ! $sodium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($sodium) ) {
			$sodium = new \com\microsoft\wc\thing\types\WeightValue ($sodium);
		}

		unset ($this->_overrides['sodium']);
	
		return $sodium;
	}

	public function getCholesterol($autoCreate = TRUE) {
		if ($this->cholesterol===NULL && $autoCreate && ! isset($this->_overrides['cholesterol']) ) {
			$this->cholesterol = $this->createCholesterol();
		}
		return $this->cholesterol;
	}
	
	protected function createCholesterol() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setCholesterol($cholesterol) {
		$this->cholesterol = $this->validateCholesterol($cholesterol);
	}

	protected function validateCholesterol($cholesterol) {
		if ( $cholesterol === FALSE ) {
			$this->_overrides['cholesterol'] = TRUE;
			return NULL;
		}

		if ( ! $cholesterol instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($cholesterol) ) {
			$cholesterol = new \com\microsoft\wc\thing\types\WeightValue ($cholesterol);
		}

		unset ($this->_overrides['cholesterol']);
	
		return $cholesterol;
	}
} // end class DietaryIntakeDaily
