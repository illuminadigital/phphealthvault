<?php
namespace com\microsoft\wc\thing\dietary_intake;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake", prefix="")
 * })
 * @XmlEntity	(xml="nutrition-fact")
 */
class NutritionFact {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GeneralMeasurement", name="fact")
	 */
	protected $fact;

	public function __construct($name = NULL, $fact = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->fact = ($fact===NULL) ? NULL : $this->validateFact($fact);
	}

	public function getName() {
		if ($this->name===NULL) {
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

	public function getFact() {
		if ($this->fact===NULL) {
			$this->fact = $this->createFact();
		}
		return $this->fact;
	}
	
	protected function createFact() {
		return new \com\microsoft\wc\thing\types\GeneralMeasurement();
	}

	public function setFact($fact) {
		$this->fact = $this->validateFact($fact);
	}

	protected function validateFact($fact) {
		if ( ! $fact instanceof \com\microsoft\wc\thing\types\GeneralMeasurement  && ! is_null($fact) ) {
			$fact = new \com\microsoft\wc\thing\types\GeneralMeasurement ($fact);
		}
	
		return $fact;
	}
} // end class NutritionFact
