<?php
namespace com\microsoft\wc\thing\dietary_intake;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake", prefix="")
 * })
 * @XmlEntity	(xml="food-energy-value")
 */
class FoodEnergyValue {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="calories")
	 */
	protected $calories;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($calories = NULL, $display = NULL) {
		$this->calories = ($calories===NULL) ? NULL : $this->validateCalories($calories);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getCalories() {
		if ($this->calories===NULL) {
			$this->calories = $this->createCalories();
		}
		return $this->calories;
	}
	
	protected function createCalories() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setCalories($calories) {
		$this->calories = $this->validateCalories($calories);
	}

	protected function validateCalories($calories) {
		if ( ! $calories instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$calories = new \com\microsoft\wc\thing\types\NonNegativeDouble ($calories);
		}
	
		return $calories;
	}

	public function getDisplay() {
		if ($this->display===NULL) {
			$this->display = $this->createDisplay();
		}
		return $this->display;
	}
	
	protected function createDisplay() {
		return new \com\microsoft\wc\thing\types\DisplayValue();
	}

	public function setDisplay($display) {
		$this->display = $this->validateDisplay($display);
	}

	protected function validateDisplay($display) {
		if ( ! $display instanceof \com\microsoft\wc\thing\types\DisplayValue  && ! is_null($display) ) {
			$display = new \com\microsoft\wc\thing\types\DisplayValue ($display);
		}
	
		return $display;
	}
} // end class FoodEnergyValue
