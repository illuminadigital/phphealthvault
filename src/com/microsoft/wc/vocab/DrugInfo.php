<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="drug-info")
 */
class DrugInfo {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getStrength($autoCreate = TRUE) {
		if ($this->strength===NULL && $autoCreate && ! isset($this->_overrides['strength']) ) {
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
		if ( $strength === FALSE ) {
			$this->_overrides['strength'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($strength) && ! is_null($strength) ) {
			$strength = array($strength);
		}

		unset ($this->_overrides['strength']);
		$count = count($strength);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'strength', 0));
		}
		if ( ! empty($strength) ) {
			foreach ($strength as $entry) {
				if (!($entry instanceof \com\microsoft\wc\vocab\MedicationStrength )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'strength', 'medication-strength'));
				}
			}
		}
	
		return $strength;
	}

	public function addStrength($strength) {
		$this->strength[] = $strength;
	}

	public function getRoutes($autoCreate = TRUE) {
		if ($this->routes===NULL && $autoCreate && ! isset($this->_overrides['routes']) ) {
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
		if ( $routes === FALSE ) {
			$this->_overrides['routes'] = TRUE;
			return NULL;
		}

		if ( ! $routes instanceof \com\microsoft\wc\vocab\MedicationRoutes  && ! is_null($routes) ) {
			$routes = new \com\microsoft\wc\vocab\MedicationRoutes ($routes);
		}

		unset ($this->_overrides['routes']);
	
		return $routes;
	}
} // end class DrugInfo
