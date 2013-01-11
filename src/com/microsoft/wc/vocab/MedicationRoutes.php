<?php
namespace com\microsoft\wc\vocab;

use com\microsoft\wc\types\CodableValue;

/**
 * @XmlEntity	(xml="medication-routes")
 */
class MedicationRoutes {
	/**
	 * The routes of a medication.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="route")
	 */
	protected $route;

	public function __construct($route = NULL) {
		$this->route = ($route===NULL) ? NULL : $this->validateRoute($route);
	}

	public function getRoute() {
		if ($this->route===NULL) {
			$this->route = $this->createRoute();
		}
		return $this->route;
	}
	
	protected function createRoute() {
		return array();
	}

	public function setRoute($route) {
		$this->route = $this->validateRoute($route);
	}

	protected function validateRoute($route) {
		if ( ! $route instanceof CodableValue ) {
			$route = new CodableValue ($route);
		}
		$count = count($route);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'route', 1));
		}
		foreach ($route as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'route', 'codable-value'));
			}
		}
	
		return $route;
	}

	public function addRoute($route) {
		$this->route[] = $route;
	}
} // end class MedicationRoutes
