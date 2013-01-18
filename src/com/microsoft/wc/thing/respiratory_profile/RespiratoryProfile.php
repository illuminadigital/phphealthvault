<?php
namespace com\microsoft\wc\thing\respiratory_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.respiratory-profile", prefix="")
 * })
 * @XmlEntity	(xml="respiratory-profile")
 */
class RespiratoryProfile extends \com\microsoft\wc\thing\Thing {
	/**
	 * A summary of a person's respiratory condition.
	 * A person's respiratory profile is made up of a set ofanswers to common questions and measurements that indicate therespiratory condition of the person.
	 */

	const ID = '5fd15cb7-b717-4b1c-89e0-1dbcf7f815dd';
	const NAME = 'Respiratory Profile';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\FlowValue", name="expiratory-flow-red-zone-upper-boundary")
	 */
	protected $expiratoryFlowRedZoneUpperBoundary;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\FlowValue", name="expiratory-flow-orange-zone-upper-boundary")
	 */
	protected $expiratoryFlowOrangeZoneUpperBoundary;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\FlowValue", name="expiratory-flow-yellow-zone-upper-boundary")
	 */
	protected $expiratoryFlowYellowZoneUpperBoundary;

	public function __construct($when = NULL, $expiratoryFlowRedZoneUpperBoundary = NULL, $expiratoryFlowOrangeZoneUpperBoundary = NULL, $expiratoryFlowYellowZoneUpperBoundary = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->expiratoryFlowRedZoneUpperBoundary = ($expiratoryFlowRedZoneUpperBoundary===NULL) ? NULL : $this->validateExpiratoryFlowRedZoneUpperBoundary($expiratoryFlowRedZoneUpperBoundary);
		$this->expiratoryFlowOrangeZoneUpperBoundary = ($expiratoryFlowOrangeZoneUpperBoundary===NULL) ? NULL : $this->validateExpiratoryFlowOrangeZoneUpperBoundary($expiratoryFlowOrangeZoneUpperBoundary);
		$this->expiratoryFlowYellowZoneUpperBoundary = ($expiratoryFlowYellowZoneUpperBoundary===NULL) ? NULL : $this->validateExpiratoryFlowYellowZoneUpperBoundary($expiratoryFlowYellowZoneUpperBoundary);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getExpiratoryFlowRedZoneUpperBoundary() {
		if ($this->expiratoryFlowRedZoneUpperBoundary===NULL) {
			$this->expiratoryFlowRedZoneUpperBoundary = $this->createExpiratoryFlowRedZoneUpperBoundary();
		}
		return $this->expiratoryFlowRedZoneUpperBoundary;
	}
	
	protected function createExpiratoryFlowRedZoneUpperBoundary() {
		return new \com\microsoft\wc\thing\types\FlowValue();
	}

	public function setExpiratoryFlowRedZoneUpperBoundary($expiratoryFlowRedZoneUpperBoundary) {
		$this->expiratoryFlowRedZoneUpperBoundary = $this->validateExpiratoryFlowRedZoneUpperBoundary($expiratoryFlowRedZoneUpperBoundary);
	}

	protected function validateExpiratoryFlowRedZoneUpperBoundary($expiratoryFlowRedZoneUpperBoundary) {
		if ( ! $expiratoryFlowRedZoneUpperBoundary instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($expiratoryFlowRedZoneUpperBoundary) ) {
			$expiratoryFlowRedZoneUpperBoundary = new \com\microsoft\wc\thing\types\FlowValue ($expiratoryFlowRedZoneUpperBoundary);
		}
	
		return $expiratoryFlowRedZoneUpperBoundary;
	}

	public function getExpiratoryFlowOrangeZoneUpperBoundary() {
		if ($this->expiratoryFlowOrangeZoneUpperBoundary===NULL) {
			$this->expiratoryFlowOrangeZoneUpperBoundary = $this->createExpiratoryFlowOrangeZoneUpperBoundary();
		}
		return $this->expiratoryFlowOrangeZoneUpperBoundary;
	}
	
	protected function createExpiratoryFlowOrangeZoneUpperBoundary() {
		return new \com\microsoft\wc\thing\types\FlowValue();
	}

	public function setExpiratoryFlowOrangeZoneUpperBoundary($expiratoryFlowOrangeZoneUpperBoundary) {
		$this->expiratoryFlowOrangeZoneUpperBoundary = $this->validateExpiratoryFlowOrangeZoneUpperBoundary($expiratoryFlowOrangeZoneUpperBoundary);
	}

	protected function validateExpiratoryFlowOrangeZoneUpperBoundary($expiratoryFlowOrangeZoneUpperBoundary) {
		if ( ! $expiratoryFlowOrangeZoneUpperBoundary instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($expiratoryFlowOrangeZoneUpperBoundary) ) {
			$expiratoryFlowOrangeZoneUpperBoundary = new \com\microsoft\wc\thing\types\FlowValue ($expiratoryFlowOrangeZoneUpperBoundary);
		}
	
		return $expiratoryFlowOrangeZoneUpperBoundary;
	}

	public function getExpiratoryFlowYellowZoneUpperBoundary() {
		if ($this->expiratoryFlowYellowZoneUpperBoundary===NULL) {
			$this->expiratoryFlowYellowZoneUpperBoundary = $this->createExpiratoryFlowYellowZoneUpperBoundary();
		}
		return $this->expiratoryFlowYellowZoneUpperBoundary;
	}
	
	protected function createExpiratoryFlowYellowZoneUpperBoundary() {
		return new \com\microsoft\wc\thing\types\FlowValue();
	}

	public function setExpiratoryFlowYellowZoneUpperBoundary($expiratoryFlowYellowZoneUpperBoundary) {
		$this->expiratoryFlowYellowZoneUpperBoundary = $this->validateExpiratoryFlowYellowZoneUpperBoundary($expiratoryFlowYellowZoneUpperBoundary);
	}

	protected function validateExpiratoryFlowYellowZoneUpperBoundary($expiratoryFlowYellowZoneUpperBoundary) {
		if ( ! $expiratoryFlowYellowZoneUpperBoundary instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($expiratoryFlowYellowZoneUpperBoundary) ) {
			$expiratoryFlowYellowZoneUpperBoundary = new \com\microsoft\wc\thing\types\FlowValue ($expiratoryFlowYellowZoneUpperBoundary);
		}
	
		return $expiratoryFlowYellowZoneUpperBoundary;
	}
} // end class RespiratoryProfile
