<?php
namespace com\microsoft\wc\thing\meal_definition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.meal-definition", prefix="")
 * })
 * @XmlEntity	(xml="DietaryItems")
 */
class DietaryItems {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\dietary_intake\DietaryIntake", collection="true", name="dietary-item")
	 */
	protected $dietaryItem;

	public function __construct($dietaryItem = NULL) {
		$this->dietaryItem = ($dietaryItem===NULL) ? NULL : $this->validateDietaryItem($dietaryItem);
	}

	public function getDietaryItem($autoCreate = TRUE) {
		if ($this->dietaryItem===NULL && $autoCreate && ! isset($this->_overrides['dietaryItem']) ) {
			$this->dietaryItem = $this->createDietaryItem();
		}
		return $this->dietaryItem;
	}
	
	protected function createDietaryItem() {
		return array();
	}

	public function setDietaryItem($dietaryItem) {
		$this->dietaryItem = $this->validateDietaryItem($dietaryItem);
	}

	protected function validateDietaryItem($dietaryItem) {
		if ( ! is_array ($dietaryItem) ) {
			$dietaryItem = array($dietaryItem);
		}
		$count = count($dietaryItem);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'dietaryItem', 1));
		}
		foreach ($dietaryItem as $entry) {
			if (!($entry instanceof \com\microsoft\wc\thing\dietary_intake\DietaryIntake )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'dietaryItem', 'DietaryIntake'));
			}
		}
	
		return $dietaryItem;
	}

	public function addDietaryItem($dietaryItem) {
		$this->dietaryItem[] = $dietaryItem;
	}
} // end class DietaryItems
