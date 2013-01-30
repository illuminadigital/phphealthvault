<?php
namespace com\microsoft\wc\thing\dietary_intake;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake", prefix="")
 * })
 * @XmlEntity	(xml="additional-nutrition-facts")
 */
class AdditionalNutritionFacts {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\dietary_intake\NutritionFact", collection="true", name="nutrition-fact")
	 */
	protected $nutritionFact;

	public function __construct($nutritionFact = NULL) {
		$this->nutritionFact = ($nutritionFact===NULL) ? NULL : $this->validateNutritionFact($nutritionFact);
	}

	public function getNutritionFact() {
		if ($this->nutritionFact===NULL) {
			$this->nutritionFact = $this->createNutritionFact();
		}
		return $this->nutritionFact;
	}
	
	protected function createNutritionFact() {
		return array();
	}

	public function setNutritionFact($nutritionFact) {
		$this->nutritionFact = $this->validateNutritionFact($nutritionFact);
	}

	protected function validateNutritionFact($nutritionFact) {
		if ( ! is_array ($nutritionFact) ) {
			$nutritionFact = array($nutritionFact);
		}
		$count = count($nutritionFact);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'nutritionFact', 1));
		}
		foreach ($nutritionFact as $entry) {
			if (!($entry instanceof NutritionFact)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'nutritionFact', 'nutrition-fact'));
			}
		}
	
		return $nutritionFact;
	}

	public function addNutritionFact($nutritionFact) {
		$this->nutritionFact[] = $nutritionFact;
	}
} // end class AdditionalNutritionFacts
