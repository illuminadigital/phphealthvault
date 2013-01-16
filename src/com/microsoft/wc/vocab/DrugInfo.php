<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlEntity	(xml="drug-info")
 */
class DrugInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\MedicationStrength", collection="true", name="strength")
	 */
	protected $strength;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\MedicationRoutes", name="routes")
	 */
	protected $routes;

	public function __construct($strength = NULL, $routes = NULL) {
		$this->strength = ($strength===NULL) ? NULL : $this->validateStrength($strength);
		$this->routes = ($routes===NULL) ? NULL : $this->validateRoutes($routes);
	}

	public function getStrength() {
		if ($this->strength===NULL) {
			$this->strength = $this->createStrength();
		}
		return $this->strength;
	}
	
	protected function createStrength() {
		return array();
	}

	public function setStrength($strength) {
		$this->strength = $this->validateStrength($strength);
	}

	protected function validateStrength($strength) {
		if ( ! $strength instanceof \com\microsoft\wc\vocab\MedicationStrength  && ! is_null($strength) ) {
			$strength = new \com\microsoft\wc\vocab\MedicationStrength ($strength);
		}
		$count = count($strength);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'strength', 0));
		}
		foreach ($strength as $entry) {
			if (!($entry instanceof MedicationStrength)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'strength', 'medication-strength'));
			}
		}
	
		return $strength;
	}

	public function addStrength($strength) {
		$this->strength[] = $strength;
	}

	public function getRoutes() {
		if ($this->routes===NULL) {
			$this->routes = $this->createRoutes();
		}
		return $this->routes;
	}
	
	protected function createRoutes() {
		return new \com\microsoft\wc\vocab\MedicationRoutes();
	}

	public function setRoutes($routes) {
		$this->routes = $this->validateRoutes($routes);
	}

	protected function validateRoutes($routes) {
		if ( ! $routes instanceof \com\microsoft\wc\vocab\MedicationRoutes  && ! is_null($routes) ) {
			$routes = new \com\microsoft\wc\vocab\MedicationRoutes ($routes);
		}
	
		return $routes;
	}
} // end class DrugInfo
