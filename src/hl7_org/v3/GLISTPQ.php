<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="GLIST_PQ")
 */
class GLISTPQ extends \ANY\ANY {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", name="head")
	 */
	protected $head;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", name="increment")
	 */
	protected $increment;

	/**
	 * @XmlAttribute	(type="integer", name="period")
	 */
	protected $period;

	/**
	 * @XmlAttribute	(type="integer", name="denominator")
	 */
	protected $denominator;

	public function __construct($head = NULL, $increment = NULL, $period = NULL, $denominator = NULL) {
		$this->head = ($head===NULL) ? NULL : $this->validateHead($head);
		$this->increment = ($increment===NULL) ? NULL : $this->validateIncrement($increment);
		$this->period = ($period===NULL) ? NULL : $this->validatePeriod($period);
		$this->denominator = ($denominator===NULL) ? NULL : $this->validateDenominator($denominator);
	}

	public function getHead() {
		if ($this->head===NULL) {
			$this->head = $this->createHead();
		}
		return $this->head;
	}
	
	protected function createHead() {
		return NULL;
	}

	public function setHead($head) {
		$this->head = $this->validateHead($head);
	}

	protected function validateHead($head) {
	
		return $head;
	}

	public function getIncrement() {
		if ($this->increment===NULL) {
			$this->increment = $this->createIncrement();
		}
		return $this->increment;
	}
	
	protected function createIncrement() {
		return NULL;
	}

	public function setIncrement($increment) {
		$this->increment = $this->validateIncrement($increment);
	}

	protected function validateIncrement($increment) {
	
		return $increment;
	}

	public function getPeriod() {
		if ($this->period===NULL) {
			$this->period = $this->createPeriod();
		}
		return $this->period;
	}
	
	protected function createPeriod() {
		return 0;
	}

	public function setPeriod($period) {
		$this->period = $this->validatePeriod($period);
	}

	protected function validatePeriod($period) {
	
		return $period;
	}

	public function getDenominator() {
		if ($this->denominator===NULL) {
			$this->denominator = $this->createDenominator();
		}
		return $this->denominator;
	}
	
	protected function createDenominator() {
		return 0;
	}

	public function setDenominator($denominator) {
		$this->denominator = $this->validateDenominator($denominator);
	}

	protected function validateDenominator($denominator) {
	
		return $denominator;
	}
} // end class GLISTPQ
