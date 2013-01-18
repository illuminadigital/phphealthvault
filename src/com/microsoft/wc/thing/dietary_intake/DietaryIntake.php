<?php
namespace com\microsoft\wc\thing\dietary_intake;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake", prefix="")
 * })
 * @XmlEntity	(xml="dietary-intake")
 */
class DietaryIntake extends \com\microsoft\wc\thing\Thing {
	/**
	 * The amount of dietary nutrients and minerals consumed.
	 */

	const ID = '089646a6-7e25-4495-ad15-3e28d4c1a71d';
	const NAME = 'Dietary Intake';

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

	public function getFoodItem() {
		if ($this->foodItem===NULL) {
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

	public function getServingSize() {
		if ($this->servingSize===NULL) {
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
		if ( ! $servingSize instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($servingSize) ) {
			$servingSize = new \com\microsoft\wc\types\CodableValue ($servingSize);
		}
	
		return $servingSize;
	}

	public function getServingsConsumed() {
		if ($this->servingsConsumed===NULL) {
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
		if ( ! $servingsConsumed instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($servingsConsumed) ) {
			$servingsConsumed = new \com\microsoft\wc\thing\types\NonNegativeDouble ($servingsConsumed);
		}
	
		return $servingsConsumed;
	}

	public function getMeal() {
		if ($this->meal===NULL) {
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
		if ( ! $meal instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($meal) ) {
			$meal = new \com\microsoft\wc\types\CodableValue ($meal);
		}
	
		return $meal;
	}

	public function getWhen() {
		if ($this->when===NULL) {
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
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getEnergy() {
		if ($this->energy===NULL) {
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
		if ( ! $energy instanceof \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue  && ! is_null($energy) ) {
			$energy = new \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue ($energy);
		}
	
		return $energy;
	}

	public function getEnergyFromFat() {
		if ($this->energyFromFat===NULL) {
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
		if ( ! $energyFromFat instanceof \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue  && ! is_null($energyFromFat) ) {
			$energyFromFat = new \com\microsoft\wc\thing\dietary_intake\FoodEnergyValue ($energyFromFat);
		}
	
		return $energyFromFat;
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

	public function getMonounsaturatedFat() {
		if ($this->monounsaturatedFat===NULL) {
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
		if ( ! $monounsaturatedFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($monounsaturatedFat) ) {
			$monounsaturatedFat = new \com\microsoft\wc\thing\types\WeightValue ($monounsaturatedFat);
		}
	
		return $monounsaturatedFat;
	}

	public function getPolyunsaturatedFat() {
		if ($this->polyunsaturatedFat===NULL) {
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
		if ( ! $polyunsaturatedFat instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($polyunsaturatedFat) ) {
			$polyunsaturatedFat = new \com\microsoft\wc\thing\types\WeightValue ($polyunsaturatedFat);
		}
	
		return $polyunsaturatedFat;
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

	public function getCarbohydrates() {
		if ($this->carbohydrates===NULL) {
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
		if ( ! $carbohydrates instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($carbohydrates) ) {
			$carbohydrates = new \com\microsoft\wc\thing\types\WeightValue ($carbohydrates);
		}
	
		return $carbohydrates;
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

	public function getCalcium() {
		if ($this->calcium===NULL) {
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
		if ( ! $calcium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($calcium) ) {
			$calcium = new \com\microsoft\wc\thing\types\WeightValue ($calcium);
		}
	
		return $calcium;
	}

	public function getIron() {
		if ($this->iron===NULL) {
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
		if ( ! $iron instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($iron) ) {
			$iron = new \com\microsoft\wc\thing\types\WeightValue ($iron);
		}
	
		return $iron;
	}

	public function getMagnesium() {
		if ($this->magnesium===NULL) {
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
		if ( ! $magnesium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($magnesium) ) {
			$magnesium = new \com\microsoft\wc\thing\types\WeightValue ($magnesium);
		}
	
		return $magnesium;
	}

	public function getPhosphorus() {
		if ($this->phosphorus===NULL) {
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
		if ( ! $phosphorus instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($phosphorus) ) {
			$phosphorus = new \com\microsoft\wc\thing\types\WeightValue ($phosphorus);
		}
	
		return $phosphorus;
	}

	public function getPotassium() {
		if ($this->potassium===NULL) {
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
		if ( ! $potassium instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($potassium) ) {
			$potassium = new \com\microsoft\wc\thing\types\WeightValue ($potassium);
		}
	
		return $potassium;
	}

	public function getZinc() {
		if ($this->zinc===NULL) {
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
		if ( ! $zinc instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($zinc) ) {
			$zinc = new \com\microsoft\wc\thing\types\WeightValue ($zinc);
		}
	
		return $zinc;
	}

	public function getVitaminARAE() {
		if ($this->vitaminARAE===NULL) {
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
		if ( ! $vitaminARAE instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminARAE) ) {
			$vitaminARAE = new \com\microsoft\wc\thing\types\WeightValue ($vitaminARAE);
		}
	
		return $vitaminARAE;
	}

	public function getVitaminE() {
		if ($this->vitaminE===NULL) {
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
		if ( ! $vitaminE instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminE) ) {
			$vitaminE = new \com\microsoft\wc\thing\types\WeightValue ($vitaminE);
		}
	
		return $vitaminE;
	}

	public function getVitaminD() {
		if ($this->vitaminD===NULL) {
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
		if ( ! $vitaminD instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminD) ) {
			$vitaminD = new \com\microsoft\wc\thing\types\WeightValue ($vitaminD);
		}
	
		return $vitaminD;
	}

	public function getVitaminC() {
		if ($this->vitaminC===NULL) {
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
		if ( ! $vitaminC instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminC) ) {
			$vitaminC = new \com\microsoft\wc\thing\types\WeightValue ($vitaminC);
		}
	
		return $vitaminC;
	}

	public function getThiamin() {
		if ($this->thiamin===NULL) {
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
		if ( ! $thiamin instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($thiamin) ) {
			$thiamin = new \com\microsoft\wc\thing\types\WeightValue ($thiamin);
		}
	
		return $thiamin;
	}

	public function getRiboflavin() {
		if ($this->riboflavin===NULL) {
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
		if ( ! $riboflavin instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($riboflavin) ) {
			$riboflavin = new \com\microsoft\wc\thing\types\WeightValue ($riboflavin);
		}
	
		return $riboflavin;
	}

	public function getNiacin() {
		if ($this->niacin===NULL) {
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
		if ( ! $niacin instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($niacin) ) {
			$niacin = new \com\microsoft\wc\thing\types\WeightValue ($niacin);
		}
	
		return $niacin;
	}

	public function getVitaminB6() {
		if ($this->vitaminB6===NULL) {
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
		if ( ! $vitaminB6 instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminB6) ) {
			$vitaminB6 = new \com\microsoft\wc\thing\types\WeightValue ($vitaminB6);
		}
	
		return $vitaminB6;
	}

	public function getFolateDFE() {
		if ($this->folateDFE===NULL) {
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
		if ( ! $folateDFE instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($folateDFE) ) {
			$folateDFE = new \com\microsoft\wc\thing\types\WeightValue ($folateDFE);
		}
	
		return $folateDFE;
	}

	public function getVitaminB12() {
		if ($this->vitaminB12===NULL) {
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
		if ( ! $vitaminB12 instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminB12) ) {
			$vitaminB12 = new \com\microsoft\wc\thing\types\WeightValue ($vitaminB12);
		}
	
		return $vitaminB12;
	}

	public function getVitaminK() {
		if ($this->vitaminK===NULL) {
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
		if ( ! $vitaminK instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($vitaminK) ) {
			$vitaminK = new \com\microsoft\wc\thing\types\WeightValue ($vitaminK);
		}
	
		return $vitaminK;
	}

	public function getAdditionalNutritionFacts() {
		if ($this->additionalNutritionFacts===NULL) {
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
		if ( ! $additionalNutritionFacts instanceof \com\microsoft\wc\thing\dietary_intake\AdditionalNutritionFacts  && ! is_null($additionalNutritionFacts) ) {
			$additionalNutritionFacts = new \com\microsoft\wc\thing\dietary_intake\AdditionalNutritionFacts ($additionalNutritionFacts);
		}
	
		return $additionalNutritionFacts;
	}
} // end class DietaryIntake
