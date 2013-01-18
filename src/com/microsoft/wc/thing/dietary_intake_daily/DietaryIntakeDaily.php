<?php
namespace com\microsoft\wc\thing\dietary_intake_daily;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake-daily", prefix="")
 * })
 * @XmlEntity	(xml="dietary-intake-daily")
 */
class DietaryIntakeDaily extends \com\microsoft\wc\thing\Thing {
	/**
	 * The amount of dietary nutrients and minerals consumed in a day.
	 */

	const ID = '9c29c6b9-f40e-44ff-b24e-fba6f3074638';
	const NAME = 'Daily Dietary Intake';

	/**
	 * @XmlText	(type="string", name="when")
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

	public function getWhen() {
		if ($this->when===NULL) {
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

	public function getCalories() {
		if ($this->calories===NULL) {
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
		if ( ! $calories instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($calories) ) {
			$calories = new \com\microsoft\wc\thing\types\PositiveInt ($calories);
		}
	
		return $calories;
	}

	public function getTotalFat() {
		if ($this->totalFat===NULL) {
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
		if ( ! $totalFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($totalFat) ) {
			$totalFat = new \com\microsoft\wc\thing\types\WeightValue ($totalFat);
		}
	
		return $totalFat;
	}

	public function getSaturatedFat() {
		if ($this->saturatedFat===NULL) {
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
		if ( ! $saturatedFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($saturatedFat) ) {
			$saturatedFat = new \com\microsoft\wc\thing\types\WeightValue ($saturatedFat);
		}
	
		return $saturatedFat;
	}

	public function getTransFat() {
		if ($this->transFat===NULL) {
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
		if ( ! $transFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($transFat) ) {
			$transFat = new \com\microsoft\wc\thing\types\WeightValue ($transFat);
		}
	
		return $transFat;
	}

	public function getProtein() {
		if ($this->protein===NULL) {
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
		if ( ! $protein instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($protein) ) {
			$protein = new \com\microsoft\wc\thing\types\WeightValue ($protein);
		}
	
		return $protein;
	}

	public function getTotalCarbohydrates() {
		if ($this->totalCarbohydrates===NULL) {
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
		if ( ! $totalCarbohydrates instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($totalCarbohydrates) ) {
			$totalCarbohydrates = new \com\microsoft\wc\thing\types\WeightValue ($totalCarbohydrates);
		}
	
		return $totalCarbohydrates;
	}

	public function getDietaryFiber() {
		if ($this->dietaryFiber===NULL) {
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
		if ( ! $dietaryFiber instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($dietaryFiber) ) {
			$dietaryFiber = new \com\microsoft\wc\thing\types\WeightValue ($dietaryFiber);
		}
	
		return $dietaryFiber;
	}

	public function getSugars() {
		if ($this->sugars===NULL) {
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
		if ( ! $sugars instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($sugars) ) {
			$sugars = new \com\microsoft\wc\thing\types\WeightValue ($sugars);
		}
	
		return $sugars;
	}

	public function getSodium() {
		if ($this->sodium===NULL) {
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
		if ( ! $sodium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($sodium) ) {
			$sodium = new \com\microsoft\wc\thing\types\WeightValue ($sodium);
		}
	
		return $sodium;
	}

	public function getCholesterol() {
		if ($this->cholesterol===NULL) {
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
		if ( ! $cholesterol instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($cholesterol) ) {
			$cholesterol = new \com\microsoft\wc\thing\types\WeightValue ($cholesterol);
		}
	
		return $cholesterol;
	}
} // end class DietaryIntakeDaily
