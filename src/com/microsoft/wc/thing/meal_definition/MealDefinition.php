<?php
namespace com\microsoft\wc\thing\meal_definition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.meal-definition", prefix="")
 * })
 * @XmlEntity	(xml="meal-definition")
 */
class MealDefinition extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a meal.
	 */

	const ID = '074e122a-335a-4a47-a63d-00a8f3e79e60';
	const NAME = 'Meal Definition';

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
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="meal-type")
	 */
	protected $mealType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String1024nw", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\meal_definition\DietaryItems", name="dietary-items")
	 */
	protected $dietaryItems;

	public function __construct($name = NULL, $mealType = NULL, $description = NULL, $dietaryItems = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->mealType = ($mealType===NULL) ? NULL : $this->validateMealType($mealType);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->dietaryItems = ($dietaryItems===NULL) ? NULL : $this->validateDietaryItems($dietaryItems);
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

	public function getMealType($autoCreate = TRUE) {
		if ($this->mealType===NULL && $autoCreate && ! isset($this->_overrides['mealType']) ) {
			$this->mealType = $this->createMealType();
		}
		return $this->mealType;
	}
	
	protected function createMealType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMealType($mealType) {
		$this->mealType = $this->validateMealType($mealType);
	}

	protected function validateMealType($mealType) {
		if ( $mealType === FALSE ) {
			$this->_overrides['mealType'] = TRUE;
			return NULL;
		}

		if ( ! $mealType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($mealType) ) {
			$mealType = new \com\microsoft\wc\types\CodableValue ($mealType);
		}

		unset ($this->_overrides['mealType']);
	
		return $mealType;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return new \com\microsoft\wc\types\String1024nw();
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( $description === FALSE ) {
			$this->_overrides['description'] = TRUE;
			return NULL;
		}

		if ( ! $description instanceof \com\microsoft\wc\types\String1024nw  && ! is_null($description) ) {
			$description = new \com\microsoft\wc\types\String1024nw ($description);
		}

		unset ($this->_overrides['description']);
	
		return $description;
	}

	public function getDietaryItems($autoCreate = TRUE) {
		if ($this->dietaryItems===NULL && $autoCreate && ! isset($this->_overrides['dietaryItems']) ) {
			$this->dietaryItems = $this->createDietaryItems();
		}
		return $this->dietaryItems;
	}
	
	protected function createDietaryItems() {
		return new \com\microsoft\wc\thing\meal_definition\DietaryItems();
	}

	public function setDietaryItems($dietaryItems) {
		$this->dietaryItems = $this->validateDietaryItems($dietaryItems);
	}

	protected function validateDietaryItems($dietaryItems) {
		if ( $dietaryItems === FALSE ) {
			$this->_overrides['dietaryItems'] = TRUE;
			return NULL;
		}

		if ( ! $dietaryItems instanceof \com\microsoft\wc\thing\meal_definition\DietaryItems  && ! is_null($dietaryItems) ) {
			$dietaryItems = new \com\microsoft\wc\thing\meal_definition\DietaryItems ($dietaryItems);
		}

		unset ($this->_overrides['dietaryItems']);
	
		return $dietaryItems;
	}
} // end class MealDefinition
