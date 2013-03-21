<?php
namespace com\microsoft\wc\thing\respiratory_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.respiratory-profile", prefix="")
 * })
 * @XmlEntity	(xml="respiratory-profile")
 */
class RespiratoryProfile extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A summary of a person's respiratory condition.
	 * A person's respiratory profile is made up of a set ofanswers to common questions and measurements that indicate therespiratory condition of the person.
	 */

	const ID = '5fd15cb7-b717-4b1c-89e0-1dbcf7f815dd';
	const NAME = 'Respiratory Profile';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
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

	public function getExpiratoryFlowRedZoneUpperBoundary($autoCreate = TRUE) {
		if ($this->expiratoryFlowRedZoneUpperBoundary===NULL && $autoCreate && ! isset($this->_overrides['expiratoryFlowRedZoneUpperBoundary']) ) {
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
		if ( $expiratoryFlowRedZoneUpperBoundary === FALSE ) {
			$this->_overrides['expiratoryFlowRedZoneUpperBoundary'] = TRUE;
			return NULL;
		}

		if ( ! $expiratoryFlowRedZoneUpperBoundary instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($expiratoryFlowRedZoneUpperBoundary) ) {
			$expiratoryFlowRedZoneUpperBoundary = new \com\microsoft\wc\thing\types\FlowValue ($expiratoryFlowRedZoneUpperBoundary);
		}

		unset ($this->_overrides['expiratoryFlowRedZoneUpperBoundary']);
	
		return $expiratoryFlowRedZoneUpperBoundary;
	}

	public function getExpiratoryFlowOrangeZoneUpperBoundary($autoCreate = TRUE) {
		if ($this->expiratoryFlowOrangeZoneUpperBoundary===NULL && $autoCreate && ! isset($this->_overrides['expiratoryFlowOrangeZoneUpperBoundary']) ) {
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
		if ( $expiratoryFlowOrangeZoneUpperBoundary === FALSE ) {
			$this->_overrides['expiratoryFlowOrangeZoneUpperBoundary'] = TRUE;
			return NULL;
		}

		if ( ! $expiratoryFlowOrangeZoneUpperBoundary instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($expiratoryFlowOrangeZoneUpperBoundary) ) {
			$expiratoryFlowOrangeZoneUpperBoundary = new \com\microsoft\wc\thing\types\FlowValue ($expiratoryFlowOrangeZoneUpperBoundary);
		}

		unset ($this->_overrides['expiratoryFlowOrangeZoneUpperBoundary']);
	
		return $expiratoryFlowOrangeZoneUpperBoundary;
	}

	public function getExpiratoryFlowYellowZoneUpperBoundary($autoCreate = TRUE) {
		if ($this->expiratoryFlowYellowZoneUpperBoundary===NULL && $autoCreate && ! isset($this->_overrides['expiratoryFlowYellowZoneUpperBoundary']) ) {
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
		if ( $expiratoryFlowYellowZoneUpperBoundary === FALSE ) {
			$this->_overrides['expiratoryFlowYellowZoneUpperBoundary'] = TRUE;
			return NULL;
		}

		if ( ! $expiratoryFlowYellowZoneUpperBoundary instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($expiratoryFlowYellowZoneUpperBoundary) ) {
			$expiratoryFlowYellowZoneUpperBoundary = new \com\microsoft\wc\thing\types\FlowValue ($expiratoryFlowYellowZoneUpperBoundary);
		}

		unset ($this->_overrides['expiratoryFlowYellowZoneUpperBoundary']);
	
		return $expiratoryFlowYellowZoneUpperBoundary;
	}
} // end class RespiratoryProfile
