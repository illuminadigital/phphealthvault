<?php
namespace com\microsoft\wc\thing\dietary_intake;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake", prefix="")
 * })
 * @XmlEntity	(xml="DietaryIntake")
 */
class DietaryIntake {
	/**
	 * The amount of dietary nutrients and minerals consumed.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="food-item")
	 */
	protected $foodItem;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="serving-size")
	 */
	protected $servingSize;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="servings-consumed")
	 */
	protected $servingsConsumed;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="meal")
	 */
	protected $meal;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\dietary_intake\FoodEnergyValue", name="energy")
	 */
	protected $energy;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\dietary_intake\FoodEnergyValue", name="energy-from-fat")
	 */
	protected $energyFromFat;

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="monounsaturated-fat")
	 */
	protected $monounsaturatedFat;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="polyunsaturated-fat")
	 */
	protected $polyunsaturatedFat;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="protein")
	 */
	protected $protein;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="carbohydrates")
	 */
	protected $carbohydrates;

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

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="calcium")
	 */
	protected $calcium;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="iron")
	 */
	protected $iron;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="magnesium")
	 */
	protected $magnesium;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="phosphorus")
	 */
	protected $phosphorus;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="potassium")
	 */
	protected $potassium;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="zinc")
	 */
	protected $zinc;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="vitamin-A-RAE")
	 */
	protected $vitaminARAE;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="vitamin-E")
	 */
	protected $vitaminE;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="vitamin-D")
	 */
	protected $vitaminD;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="vitamin-C")
	 */
	protected $vitaminC;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="thiamin")
	 */
	protected $thiamin;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="riboflavin")
	 */
	protected $riboflavin;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="niacin")
	 */
	protected $niacin;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="vitamin-B-6")
	 */
	protected $vitaminB6;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="folate-DFE")
	 */
	protected $folateDFE;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="vitamin-B-12")
	 */
	protected $vitaminB12;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="vitamin-K")
	 */
	protected $vitaminK;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\dietary_intake\AdditionalNutritionFacts", name="additional-nutrition-facts")
	 */
	protected $additionalNutritionFacts;

	public function __construct($foodItem = NULL, $servingSize = NULL, $servingsConsumed = NULL, $meal = NULL, $when = NULL, $energy = NULL, $energyFromFat = NULL, $totalFat = NULL, $saturatedFat = NULL, $transFat = NULL, $monounsaturatedFat = NULL, $polyunsaturatedFat = NULL, $protein = NULL, $carbohydrates = NULL, $dietaryFiber = NULL, $sugars = NULL, $sodium = NULL, $cholesterol = NULL, $calcium = NULL, $iron = NULL, $magnesium = NULL, $phosphorus = NULL, $potassium = NULL, $zinc = NULL, $vitaminARAE = NULL, $vitaminE = NULL, $vitaminD = NULL, $vitaminC = NULL, $thiamin = NULL, $riboflavin = NULL, $niacin = NULL, $vitaminB6 = NULL, $folateDFE = NULL, $vitaminB12 = NULL, $vitaminK = NULL, $additionalNutritionFacts = NULL) {
		$this->foodItem = ($foodItem===NULL) ? NULL : $this->validateFoodItem($foodItem);
		$this->servingSize = ($servingSize===NULL) ? NULL : $this->validateServingSize($servingSize);
		$this->servingsConsumed = ($servingsConsumed===NULL) ? NULL : $this->validateServingsConsumed($servingsConsumed);
		$this->meal = ($meal===NULL) ? NULL : $this->validateMeal($meal);
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->energy = ($energy===NULL) ? NULL : $this->validateEnergy($energy);
		$this->energyFromFat = ($energyFromFat===NULL) ? NULL : $this->validateEnergyFromFat($energyFromFat);
		$this->totalFat = ($totalFat===NULL) ? NULL : $this->validateTotalFat($totalFat);
		$this->saturatedFat = ($saturatedFat===NULL) ? NULL : $this->validateSaturatedFat($saturatedFat);
		$this->transFat = ($transFat===NULL) ? NULL : $this->validateTransFat($transFat);
		$this->monounsaturatedFat = ($monounsaturatedFat===NULL) ? NULL : $this->validateMonounsaturatedFat($monounsaturatedFat);
		$this->polyunsaturatedFat = ($polyunsaturatedFat===NULL) ? NULL : $this->validatePolyunsaturatedFat($polyunsaturatedFat);
		$this->protein = ($protein===NULL) ? NULL : $this->validateProtein($protein);
		$this->carbohydrates = ($carbohydrates===NULL) ? NULL : $this->validateCarbohydrates($carbohydrates);
		$this->dietaryFiber = ($dietaryFiber===NULL) ? NULL : $this->validateDietaryFiber($dietaryFiber);
		$this->sugars = ($sugars===NULL) ? NULL : $this->validateSugars($sugars);
		$this->sodium = ($sodium===NULL) ? NULL : $this->validateSodium($sodium);
		$this->cholesterol = ($cholesterol===NULL) ? NULL : $this->validateCholesterol($cholesterol);
		$this->calcium = ($calcium===NULL) ? NULL : $this->validateCalcium($calcium);
		$this->iron = ($iron===NULL) ? NULL : $this->validateIron($iron);
		$this->magnesium = ($magnesium===NULL) ? NULL : $this->validateMagnesium($magnesium);
		$this->phosphorus = ($phosphorus===NULL) ? NULL : $this->validatePhosphorus($phosphorus);
		$this->potassium = ($potassium===NULL) ? NULL : $this->validatePotassium($potassium);
		$this->zinc = ($zinc===NULL) ? NULL : $this->validateZinc($zinc);
		$this->vitaminARAE = ($vitaminARAE===NULL) ? NULL : $this->validateVitaminARAE($vitaminARAE);
		$this->vitaminE = ($vitaminE===NULL) ? NULL : $this->validateVitaminE($vitaminE);
		$this->vitaminD = ($vitaminD===NULL) ? NULL : $this->validateVitaminD($vitaminD);
		$this->vitaminC = ($vitaminC===NULL) ? NULL : $this->validateVitaminC($vitaminC);
		$this->thiamin = ($thiamin===NULL) ? NULL : $this->validateThiamin($thiamin);
		$this->riboflavin = ($riboflavin===NULL) ? NULL : $this->validateRiboflavin($riboflavin);
		$this->niacin = ($niacin===NULL) ? NULL : $this->validateNiacin($niacin);
		$this->vitaminB6 = ($vitaminB6===NULL) ? NULL : $this->validateVitaminB6($vitaminB6);
		$this->folateDFE = ($folateDFE===NULL) ? NULL : $this->validateFolateDFE($folateDFE);
		$this->vitaminB12 = ($vitaminB12===NULL) ? NULL : $this->validateVitaminB12($vitaminB12);
		$this->vitaminK = ($vitaminK===NULL) ? NULL : $this->validateVitaminK($vitaminK);
		$this->additionalNutritionFacts = ($additionalNutritionFacts===NULL) ? NULL : $this->validateAdditionalNutritionFacts($additionalNutritionFacts);
	}

	public function getFoodItem($autoCreate = TRUE) {
		if ($this->foodItem===NULL && $autoCreate && ! isset($this->_overrides['foodItem']) ) {
			$this->foodItem = $this->createFoodItem();
		}
		return $this->foodItem;
	}
	
	protected function createFoodItem() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setFoodItem($foodItem) {
		$this->foodItem = $this->validateFoodItem($foodItem);
	}

	protected function validateFoodItem($foodItem) {
		if ( ! $foodItem instanceof \com\microsoft\wc\types\CodableValue ) {
			$foodItem = new \com\microsoft\wc\types\CodableValue ($foodItem);
		}
	
		return $foodItem;
	}

	public function getServingSize($autoCreate = TRUE) {
		if ($this->servingSize===NULL && $autoCreate && ! isset($this->_overrides['servingSize']) ) {
			$this->servingSize = $this->createServingSize();
		}
		return $this->servingSize;
	}
	
	protected function createServingSize() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setServingSize($servingSize) {
		$this->servingSize = $this->validateServingSize($servingSize);
	}

	protected function validateServingSize($servingSize) {
		if ( $servingSize === FALSE ) {
			$this->_overrides['servingSize'] = TRUE;
			return NULL;
		}

		if ( ! $servingSize instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($servingSize) ) {
			$servingSize = new \com\microsoft\wc\types\CodableValue ($servingSize);
		}

		unset ($this->_overrides['servingSize']);
	
		return $servingSize;
	}

	public function getServingsConsumed($autoCreate = TRUE) {
		if ($this->servingsConsumed===NULL && $autoCreate && ! isset($this->_overrides['servingsConsumed']) ) {
			$this->servingsConsumed = $this->createServingsConsumed();
		}
		return $this->servingsConsumed;
	}
	
	protected function createServingsConsumed() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setServingsConsumed($servingsConsumed) {
		$this->servingsConsumed = $this->validateServingsConsumed($servingsConsumed);
	}

	protected function validateServingsConsumed($servingsConsumed) {
		if ( $servingsConsumed === FALSE ) {
			$this->_overrides['servingsConsumed'] = TRUE;
			return NULL;
		}

		if ( ! $servingsConsumed instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($servingsConsumed) ) {
			$servingsConsumed = new \com\microsoft\wc\thing\types\NonNegativeDouble ($servingsConsumed);
		}

		unset ($this->_overrides['servingsConsumed']);
	
		return $servingsConsumed;
	}

	public function getMeal($autoCreate = TRUE) {
		if ($this->meal===NULL && $autoCreate && ! isset($this->_overrides['meal']) ) {
			$this->meal = $this->createMeal();
		}
		return $this->meal;
	}
	
	protected function createMeal() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMeal($meal) {
		$this->meal = $this->validateMeal($meal);
	}

	protected function validateMeal($meal) {
		if ( $meal === FALSE ) {
			$this->_overrides['meal'] = TRUE;
			return NULL;
		}

		if ( ! $meal instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($meal) ) {
			$meal = new \com\microsoft\wc\types\CodableValue ($meal);
		}

		unset ($this->_overrides['meal']);
	
		return $meal;
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( $when === FALSE ) {
			$this->_overrides['when'] = TRUE;
			return NULL;
		}

		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}

		unset ($this->_overrides['when']);
	
		return $when;
	}

	public function getEnergy($autoCreate = TRUE) {
		if ($this->energy===NULL && $autoCreate && ! isset($this->_overrides['energy']) ) {
			$this->energy = $this->createEnergy();
		}
		return $this->energy;
	}
	
	protected function createEnergy() {
		return new \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue();
	}

	public function setEnergy($energy) {
		$this->energy = $this->validateEnergy($energy);
	}

	protected function validateEnergy($energy) {
		if ( $energy === FALSE ) {
			$this->_overrides['energy'] = TRUE;
			return NULL;
		}

		if ( ! $energy instanceof \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue  && ! is_null($energy) ) {
			$energy = new \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue ($energy);
		}

		unset ($this->_overrides['energy']);
	
		return $energy;
	}

	public function getEnergyFromFat($autoCreate = TRUE) {
		if ($this->energyFromFat===NULL && $autoCreate && ! isset($this->_overrides['energyFromFat']) ) {
			$this->energyFromFat = $this->createEnergyFromFat();
		}
		return $this->energyFromFat;
	}
	
	protected function createEnergyFromFat() {
		return new \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue();
	}

	public function setEnergyFromFat($energyFromFat) {
		$this->energyFromFat = $this->validateEnergyFromFat($energyFromFat);
	}

	protected function validateEnergyFromFat($energyFromFat) {
		if ( $energyFromFat === FALSE ) {
			$this->_overrides['energyFromFat'] = TRUE;
			return NULL;
		}

		if ( ! $energyFromFat instanceof \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue  && ! is_null($energyFromFat) ) {
			$energyFromFat = new \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue ($energyFromFat);
		}

		unset ($this->_overrides['energyFromFat']);
	
		return $energyFromFat;
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

	public function getMonounsaturatedFat($autoCreate = TRUE) {
		if ($this->monounsaturatedFat===NULL && $autoCreate && ! isset($this->_overrides['monounsaturatedFat']) ) {
			$this->monounsaturatedFat = $this->createMonounsaturatedFat();
		}
		return $this->monounsaturatedFat;
	}
	
	protected function createMonounsaturatedFat() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setMonounsaturatedFat($monounsaturatedFat) {
		$this->monounsaturatedFat = $this->validateMonounsaturatedFat($monounsaturatedFat);
	}

	protected function validateMonounsaturatedFat($monounsaturatedFat) {
		if ( $monounsaturatedFat === FALSE ) {
			$this->_overrides['monounsaturatedFat'] = TRUE;
			return NULL;
		}

		if ( ! $monounsaturatedFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($monounsaturatedFat) ) {
			$monounsaturatedFat = new \com\microsoft\wc\thing\types\WeightValue ($monounsaturatedFat);
		}

		unset ($this->_overrides['monounsaturatedFat']);
	
		return $monounsaturatedFat;
	}

	public function getPolyunsaturatedFat($autoCreate = TRUE) {
		if ($this->polyunsaturatedFat===NULL && $autoCreate && ! isset($this->_overrides['polyunsaturatedFat']) ) {
			$this->polyunsaturatedFat = $this->createPolyunsaturatedFat();
		}
		return $this->polyunsaturatedFat;
	}
	
	protected function createPolyunsaturatedFat() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setPolyunsaturatedFat($polyunsaturatedFat) {
		$this->polyunsaturatedFat = $this->validatePolyunsaturatedFat($polyunsaturatedFat);
	}

	protected function validatePolyunsaturatedFat($polyunsaturatedFat) {
		if ( $polyunsaturatedFat === FALSE ) {
			$this->_overrides['polyunsaturatedFat'] = TRUE;
			return NULL;
		}

		if ( ! $polyunsaturatedFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($polyunsaturatedFat) ) {
			$polyunsaturatedFat = new \com\microsoft\wc\thing\types\WeightValue ($polyunsaturatedFat);
		}

		unset ($this->_overrides['polyunsaturatedFat']);
	
		return $polyunsaturatedFat;
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

	public function getCarbohydrates($autoCreate = TRUE) {
		if ($this->carbohydrates===NULL && $autoCreate && ! isset($this->_overrides['carbohydrates']) ) {
			$this->carbohydrates = $this->createCarbohydrates();
		}
		return $this->carbohydrates;
	}
	
	protected function createCarbohydrates() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setCarbohydrates($carbohydrates) {
		$this->carbohydrates = $this->validateCarbohydrates($carbohydrates);
	}

	protected function validateCarbohydrates($carbohydrates) {
		if ( $carbohydrates === FALSE ) {
			$this->_overrides['carbohydrates'] = TRUE;
			return NULL;
		}

		if ( ! $carbohydrates instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($carbohydrates) ) {
			$carbohydrates = new \com\microsoft\wc\thing\types\WeightValue ($carbohydrates);
		}

		unset ($this->_overrides['carbohydrates']);
	
		return $carbohydrates;
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

	public function getCalcium($autoCreate = TRUE) {
		if ($this->calcium===NULL && $autoCreate && ! isset($this->_overrides['calcium']) ) {
			$this->calcium = $this->createCalcium();
		}
		return $this->calcium;
	}
	
	protected function createCalcium() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setCalcium($calcium) {
		$this->calcium = $this->validateCalcium($calcium);
	}

	protected function validateCalcium($calcium) {
		if ( $calcium === FALSE ) {
			$this->_overrides['calcium'] = TRUE;
			return NULL;
		}

		if ( ! $calcium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($calcium) ) {
			$calcium = new \com\microsoft\wc\thing\types\WeightValue ($calcium);
		}

		unset ($this->_overrides['calcium']);
	
		return $calcium;
	}

	public function getIron($autoCreate = TRUE) {
		if ($this->iron===NULL && $autoCreate && ! isset($this->_overrides['iron']) ) {
			$this->iron = $this->createIron();
		}
		return $this->iron;
	}
	
	protected function createIron() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setIron($iron) {
		$this->iron = $this->validateIron($iron);
	}

	protected function validateIron($iron) {
		if ( $iron === FALSE ) {
			$this->_overrides['iron'] = TRUE;
			return NULL;
		}

		if ( ! $iron instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($iron) ) {
			$iron = new \com\microsoft\wc\thing\types\WeightValue ($iron);
		}

		unset ($this->_overrides['iron']);
	
		return $iron;
	}

	public function getMagnesium($autoCreate = TRUE) {
		if ($this->magnesium===NULL && $autoCreate && ! isset($this->_overrides['magnesium']) ) {
			$this->magnesium = $this->createMagnesium();
		}
		return $this->magnesium;
	}
	
	protected function createMagnesium() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setMagnesium($magnesium) {
		$this->magnesium = $this->validateMagnesium($magnesium);
	}

	protected function validateMagnesium($magnesium) {
		if ( $magnesium === FALSE ) {
			$this->_overrides['magnesium'] = TRUE;
			return NULL;
		}

		if ( ! $magnesium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($magnesium) ) {
			$magnesium = new \com\microsoft\wc\thing\types\WeightValue ($magnesium);
		}

		unset ($this->_overrides['magnesium']);
	
		return $magnesium;
	}

	public function getPhosphorus($autoCreate = TRUE) {
		if ($this->phosphorus===NULL && $autoCreate && ! isset($this->_overrides['phosphorus']) ) {
			$this->phosphorus = $this->createPhosphorus();
		}
		return $this->phosphorus;
	}
	
	protected function createPhosphorus() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setPhosphorus($phosphorus) {
		$this->phosphorus = $this->validatePhosphorus($phosphorus);
	}

	protected function validatePhosphorus($phosphorus) {
		if ( $phosphorus === FALSE ) {
			$this->_overrides['phosphorus'] = TRUE;
			return NULL;
		}

		if ( ! $phosphorus instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($phosphorus) ) {
			$phosphorus = new \com\microsoft\wc\thing\types\WeightValue ($phosphorus);
		}

		unset ($this->_overrides['phosphorus']);
	
		return $phosphorus;
	}

	public function getPotassium($autoCreate = TRUE) {
		if ($this->potassium===NULL && $autoCreate && ! isset($this->_overrides['potassium']) ) {
			$this->potassium = $this->createPotassium();
		}
		return $this->potassium;
	}
	
	protected function createPotassium() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setPotassium($potassium) {
		$this->potassium = $this->validatePotassium($potassium);
	}

	protected function validatePotassium($potassium) {
		if ( $potassium === FALSE ) {
			$this->_overrides['potassium'] = TRUE;
			return NULL;
		}

		if ( ! $potassium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($potassium) ) {
			$potassium = new \com\microsoft\wc\thing\types\WeightValue ($potassium);
		}

		unset ($this->_overrides['potassium']);
	
		return $potassium;
	}

	public function getZinc($autoCreate = TRUE) {
		if ($this->zinc===NULL && $autoCreate && ! isset($this->_overrides['zinc']) ) {
			$this->zinc = $this->createZinc();
		}
		return $this->zinc;
	}
	
	protected function createZinc() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setZinc($zinc) {
		$this->zinc = $this->validateZinc($zinc);
	}

	protected function validateZinc($zinc) {
		if ( $zinc === FALSE ) {
			$this->_overrides['zinc'] = TRUE;
			return NULL;
		}

		if ( ! $zinc instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($zinc) ) {
			$zinc = new \com\microsoft\wc\thing\types\WeightValue ($zinc);
		}

		unset ($this->_overrides['zinc']);
	
		return $zinc;
	}

	public function getVitaminARAE($autoCreate = TRUE) {
		if ($this->vitaminARAE===NULL && $autoCreate && ! isset($this->_overrides['vitaminARAE']) ) {
			$this->vitaminARAE = $this->createVitaminARAE();
		}
		return $this->vitaminARAE;
	}
	
	protected function createVitaminARAE() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setVitaminARAE($vitaminARAE) {
		$this->vitaminARAE = $this->validateVitaminARAE($vitaminARAE);
	}

	protected function validateVitaminARAE($vitaminARAE) {
		if ( $vitaminARAE === FALSE ) {
			$this->_overrides['vitaminARAE'] = TRUE;
			return NULL;
		}

		if ( ! $vitaminARAE instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminARAE) ) {
			$vitaminARAE = new \com\microsoft\wc\thing\types\WeightValue ($vitaminARAE);
		}

		unset ($this->_overrides['vitaminARAE']);
	
		return $vitaminARAE;
	}

	public function getVitaminE($autoCreate = TRUE) {
		if ($this->vitaminE===NULL && $autoCreate && ! isset($this->_overrides['vitaminE']) ) {
			$this->vitaminE = $this->createVitaminE();
		}
		return $this->vitaminE;
	}
	
	protected function createVitaminE() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setVitaminE($vitaminE) {
		$this->vitaminE = $this->validateVitaminE($vitaminE);
	}

	protected function validateVitaminE($vitaminE) {
		if ( $vitaminE === FALSE ) {
			$this->_overrides['vitaminE'] = TRUE;
			return NULL;
		}

		if ( ! $vitaminE instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminE) ) {
			$vitaminE = new \com\microsoft\wc\thing\types\WeightValue ($vitaminE);
		}

		unset ($this->_overrides['vitaminE']);
	
		return $vitaminE;
	}

	public function getVitaminD($autoCreate = TRUE) {
		if ($this->vitaminD===NULL && $autoCreate && ! isset($this->_overrides['vitaminD']) ) {
			$this->vitaminD = $this->createVitaminD();
		}
		return $this->vitaminD;
	}
	
	protected function createVitaminD() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setVitaminD($vitaminD) {
		$this->vitaminD = $this->validateVitaminD($vitaminD);
	}

	protected function validateVitaminD($vitaminD) {
		if ( $vitaminD === FALSE ) {
			$this->_overrides['vitaminD'] = TRUE;
			return NULL;
		}

		if ( ! $vitaminD instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminD) ) {
			$vitaminD = new \com\microsoft\wc\thing\types\WeightValue ($vitaminD);
		}

		unset ($this->_overrides['vitaminD']);
	
		return $vitaminD;
	}

	public function getVitaminC($autoCreate = TRUE) {
		if ($this->vitaminC===NULL && $autoCreate && ! isset($this->_overrides['vitaminC']) ) {
			$this->vitaminC = $this->createVitaminC();
		}
		return $this->vitaminC;
	}
	
	protected function createVitaminC() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setVitaminC($vitaminC) {
		$this->vitaminC = $this->validateVitaminC($vitaminC);
	}

	protected function validateVitaminC($vitaminC) {
		if ( $vitaminC === FALSE ) {
			$this->_overrides['vitaminC'] = TRUE;
			return NULL;
		}

		if ( ! $vitaminC instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminC) ) {
			$vitaminC = new \com\microsoft\wc\thing\types\WeightValue ($vitaminC);
		}

		unset ($this->_overrides['vitaminC']);
	
		return $vitaminC;
	}

	public function getThiamin($autoCreate = TRUE) {
		if ($this->thiamin===NULL && $autoCreate && ! isset($this->_overrides['thiamin']) ) {
			$this->thiamin = $this->createThiamin();
		}
		return $this->thiamin;
	}
	
	protected function createThiamin() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setThiamin($thiamin) {
		$this->thiamin = $this->validateThiamin($thiamin);
	}

	protected function validateThiamin($thiamin) {
		if ( $thiamin === FALSE ) {
			$this->_overrides['thiamin'] = TRUE;
			return NULL;
		}

		if ( ! $thiamin instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($thiamin) ) {
			$thiamin = new \com\microsoft\wc\thing\types\WeightValue ($thiamin);
		}

		unset ($this->_overrides['thiamin']);
	
		return $thiamin;
	}

	public function getRiboflavin($autoCreate = TRUE) {
		if ($this->riboflavin===NULL && $autoCreate && ! isset($this->_overrides['riboflavin']) ) {
			$this->riboflavin = $this->createRiboflavin();
		}
		return $this->riboflavin;
	}
	
	protected function createRiboflavin() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setRiboflavin($riboflavin) {
		$this->riboflavin = $this->validateRiboflavin($riboflavin);
	}

	protected function validateRiboflavin($riboflavin) {
		if ( $riboflavin === FALSE ) {
			$this->_overrides['riboflavin'] = TRUE;
			return NULL;
		}

		if ( ! $riboflavin instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($riboflavin) ) {
			$riboflavin = new \com\microsoft\wc\thing\types\WeightValue ($riboflavin);
		}

		unset ($this->_overrides['riboflavin']);
	
		return $riboflavin;
	}

	public function getNiacin($autoCreate = TRUE) {
		if ($this->niacin===NULL && $autoCreate && ! isset($this->_overrides['niacin']) ) {
			$this->niacin = $this->createNiacin();
		}
		return $this->niacin;
	}
	
	protected function createNiacin() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setNiacin($niacin) {
		$this->niacin = $this->validateNiacin($niacin);
	}

	protected function validateNiacin($niacin) {
		if ( $niacin === FALSE ) {
			$this->_overrides['niacin'] = TRUE;
			return NULL;
		}

		if ( ! $niacin instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($niacin) ) {
			$niacin = new \com\microsoft\wc\thing\types\WeightValue ($niacin);
		}

		unset ($this->_overrides['niacin']);
	
		return $niacin;
	}

	public function getVitaminB6($autoCreate = TRUE) {
		if ($this->vitaminB6===NULL && $autoCreate && ! isset($this->_overrides['vitaminB6']) ) {
			$this->vitaminB6 = $this->createVitaminB6();
		}
		return $this->vitaminB6;
	}
	
	protected function createVitaminB6() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setVitaminB6($vitaminB6) {
		$this->vitaminB6 = $this->validateVitaminB6($vitaminB6);
	}

	protected function validateVitaminB6($vitaminB6) {
		if ( $vitaminB6 === FALSE ) {
			$this->_overrides['vitaminB6'] = TRUE;
			return NULL;
		}

		if ( ! $vitaminB6 instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminB6) ) {
			$vitaminB6 = new \com\microsoft\wc\thing\types\WeightValue ($vitaminB6);
		}

		unset ($this->_overrides['vitaminB6']);
	
		return $vitaminB6;
	}

	public function getFolateDFE($autoCreate = TRUE) {
		if ($this->folateDFE===NULL && $autoCreate && ! isset($this->_overrides['folateDFE']) ) {
			$this->folateDFE = $this->createFolateDFE();
		}
		return $this->folateDFE;
	}
	
	protected function createFolateDFE() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setFolateDFE($folateDFE) {
		$this->folateDFE = $this->validateFolateDFE($folateDFE);
	}

	protected function validateFolateDFE($folateDFE) {
		if ( $folateDFE === FALSE ) {
			$this->_overrides['folateDFE'] = TRUE;
			return NULL;
		}

		if ( ! $folateDFE instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($folateDFE) ) {
			$folateDFE = new \com\microsoft\wc\thing\types\WeightValue ($folateDFE);
		}

		unset ($this->_overrides['folateDFE']);
	
		return $folateDFE;
	}

	public function getVitaminB12($autoCreate = TRUE) {
		if ($this->vitaminB12===NULL && $autoCreate && ! isset($this->_overrides['vitaminB12']) ) {
			$this->vitaminB12 = $this->createVitaminB12();
		}
		return $this->vitaminB12;
	}
	
	protected function createVitaminB12() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setVitaminB12($vitaminB12) {
		$this->vitaminB12 = $this->validateVitaminB12($vitaminB12);
	}

	protected function validateVitaminB12($vitaminB12) {
		if ( $vitaminB12 === FALSE ) {
			$this->_overrides['vitaminB12'] = TRUE;
			return NULL;
		}

		if ( ! $vitaminB12 instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminB12) ) {
			$vitaminB12 = new \com\microsoft\wc\thing\types\WeightValue ($vitaminB12);
		}

		unset ($this->_overrides['vitaminB12']);
	
		return $vitaminB12;
	}

	public function getVitaminK($autoCreate = TRUE) {
		if ($this->vitaminK===NULL && $autoCreate && ! isset($this->_overrides['vitaminK']) ) {
			$this->vitaminK = $this->createVitaminK();
		}
		return $this->vitaminK;
	}
	
	protected function createVitaminK() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setVitaminK($vitaminK) {
		$this->vitaminK = $this->validateVitaminK($vitaminK);
	}

	protected function validateVitaminK($vitaminK) {
		if ( $vitaminK === FALSE ) {
			$this->_overrides['vitaminK'] = TRUE;
			return NULL;
		}

		if ( ! $vitaminK instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminK) ) {
			$vitaminK = new \com\microsoft\wc\thing\types\WeightValue ($vitaminK);
		}

		unset ($this->_overrides['vitaminK']);
	
		return $vitaminK;
	}

	public function getAdditionalNutritionFacts($autoCreate = TRUE) {
		if ($this->additionalNutritionFacts===NULL && $autoCreate && ! isset($this->_overrides['additionalNutritionFacts']) ) {
			$this->additionalNutritionFacts = $this->createAdditionalNutritionFacts();
		}
		return $this->additionalNutritionFacts;
	}
	
	protected function createAdditionalNutritionFacts() {
		return new \com\microsoft\wc\thing\dietary_intake\AdditionalNutritionFacts();
	}

	public function setAdditionalNutritionFacts($additionalNutritionFacts) {
		$this->additionalNutritionFacts = $this->validateAdditionalNutritionFacts($additionalNutritionFacts);
	}

	protected function validateAdditionalNutritionFacts($additionalNutritionFacts) {
		if ( $additionalNutritionFacts === FALSE ) {
			$this->_overrides['additionalNutritionFacts'] = TRUE;
			return NULL;
		}

		if ( ! $additionalNutritionFacts instanceof \com\microsoft\wc\thing\dietary_intake\AdditionalNutritionFacts  && ! is_null($additionalNutritionFacts) ) {
			$additionalNutritionFacts = new \com\microsoft\wc\thing\dietary_intake\AdditionalNutritionFacts ($additionalNutritionFacts);
		}

		unset ($this->_overrides['additionalNutritionFacts']);
	
		return $additionalNutritionFacts;
	}
} // end class DietaryIntake
