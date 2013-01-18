<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="GLIST_TS")
 */
class GLISTTS extends \ANY\ANY {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\TS", name="head")
	 */
	protected $head;

	/**
	 * @XmlElement	(type="\hl7_org\v3\PQ", name="increment")
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
		return new \hl7_org\v3\TS();
	}

	public function setHead($head) {
		$this->head = $this->validateHead($head);
	}

	protected function validateHead($head) {
		if ( ! $head instanceof \hl7_org\v3\TS ) {
			$head = new \hl7_org\v3\TS ($head);
		}
	
		return $head;
	}

	public function getIncrement() {
		if ($this->increment===NULL) {
			$this->increment = $this->createIncrement();
		}
		return $this->increment;
	}
	
	protected function createIncrement() {
		return new \hl7_org\v3\PQ();
	}

	public function setIncrement($increment) {
		$this->increment = $this->validateIncrement($increment);
	}

	protected function validateIncrement($increment) {
		if ( ! $increment instanceof \hl7_org\v3\PQ ) {
			$increment = new \hl7_org\v3\PQ ($increment);
		}
	
		return $increment;
	}

	public function getPeriod() {
		if ($this->period===NULL) {
			$this->period = $this->createPeriod();
		}
		return $this->period;
	}
	
	protected function createPeriod() {
		return new \hl7_org\v3\Int();
	}

	public function setPeriod($period) {
		$this->period = $this->validatePeriod($period);
	}

	protected function validatePeriod($period) {
		if ( ! $period instanceof \hl7_org\v3\Int  && ! is_null($period) ) {
			$period = new \hl7_org\v3\Int ($period);
		}
	
		return $period;
	}

	public function getDenominator() {
		if ($this->denominator===NULL) {
			$this->denominator = $this->createDenominator();
		}
		return $this->denominator;
	}
	
	protected function createDenominator() {
		return new \hl7_org\v3\Int();
	}

	public function setDenominator($denominator) {
		$this->denominator = $this->validateDenominator($denominator);
	}

	protected function validateDenominator($denominator) {
		if ( ! $denominator instanceof \hl7_org\v3\Int  && ! is_null($denominator) ) {
			$denominator = new \hl7_org\v3\Int ($denominator);
		}
	
		return $denominator;
	}
} // end class GLISTTS
