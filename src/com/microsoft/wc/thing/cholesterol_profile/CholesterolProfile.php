<?php
namespace com\microsoft\wc\thing\cholesterol_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.cholesterol-profile", prefix="")
 * })
 * @XmlEntity	(xml="cholesterol-profile")
 */
class CholesterolProfile extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines cholesterol reading in the blood.
	 */

	const ID = '98f76958-e34f-459b-a760-83c1699add38';
	const NAME = 'Cholesterol Measurement';

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\ConcentrationValue", name="ldl")
	 */
	protected $ldl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\ConcentrationValue", name="hdl")
	 */
	protected $hdl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\ConcentrationValue", name="total-cholesterol")
	 */
	protected $totalCholesterol;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\ConcentrationValue", name="triglyceride")
	 */
	protected $triglyceride;

	public function __construct($when = NULL, $ldl = NULL, $hdl = NULL, $totalCholesterol = NULL, $triglyceride = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->ldl = ($ldl===NULL) ? NULL : $this->validateLdl($ldl);
		$this->hdl = ($hdl===NULL) ? NULL : $this->validateHdl($hdl);
		$this->totalCholesterol = ($totalCholesterol===NULL) ? NULL : $this->validateTotalCholesterol($totalCholesterol);
		$this->triglyceride = ($triglyceride===NULL) ? NULL : $this->validateTriglyceride($triglyceride);
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

	public function getLdl($autoCreate = TRUE) {
		if ($this->ldl===NULL && $autoCreate && ! isset($this->_overrides['ldl']) ) {
			$this->ldl = $this->createLdl();
		}
		return $this->ldl;
	}
	
	protected function createLdl() {
		return new \com\microsoft\wc\thing\types\ConcentrationValue();
	}

	public function setLdl($ldl) {
		$this->ldl = $this->validateLdl($ldl);
	}

	protected function validateLdl($ldl) {
		if ( $ldl === FALSE ) {
			$this->_overrides['ldl'] = TRUE;
			return NULL;
		}

		if ( ! $ldl instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($ldl) ) {
			$ldl = new \com\microsoft\wc\thing\types\ConcentrationValue ($ldl);
		}

		unset ($this->_overrides['ldl']);
	
		return $ldl;
	}

	public function getHdl($autoCreate = TRUE) {
		if ($this->hdl===NULL && $autoCreate && ! isset($this->_overrides['hdl']) ) {
			$this->hdl = $this->createHdl();
		}
		return $this->hdl;
	}
	
	protected function createHdl() {
		return new \com\microsoft\wc\thing\types\ConcentrationValue();
	}

	public function setHdl($hdl) {
		$this->hdl = $this->validateHdl($hdl);
	}

	protected function validateHdl($hdl) {
		if ( $hdl === FALSE ) {
			$this->_overrides['hdl'] = TRUE;
			return NULL;
		}

		if ( ! $hdl instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($hdl) ) {
			$hdl = new \com\microsoft\wc\thing\types\ConcentrationValue ($hdl);
		}

		unset ($this->_overrides['hdl']);
	
		return $hdl;
	}

	public function getTotalCholesterol($autoCreate = TRUE) {
		if ($this->totalCholesterol===NULL && $autoCreate && ! isset($this->_overrides['totalCholesterol']) ) {
			$this->totalCholesterol = $this->createTotalCholesterol();
		}
		return $this->totalCholesterol;
	}
	
	protected function createTotalCholesterol() {
		return new \com\microsoft\wc\thing\types\ConcentrationValue();
	}

	public function setTotalCholesterol($totalCholesterol) {
		$this->totalCholesterol = $this->validateTotalCholesterol($totalCholesterol);
	}

	protected function validateTotalCholesterol($totalCholesterol) {
		if ( $totalCholesterol === FALSE ) {
			$this->_overrides['totalCholesterol'] = TRUE;
			return NULL;
		}

		if ( ! $totalCholesterol instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($totalCholesterol) ) {
			$totalCholesterol = new \com\microsoft\wc\thing\types\ConcentrationValue ($totalCholesterol);
		}

		unset ($this->_overrides['totalCholesterol']);
	
		return $totalCholesterol;
	}

	public function getTriglyceride($autoCreate = TRUE) {
		if ($this->triglyceride===NULL && $autoCreate && ! isset($this->_overrides['triglyceride']) ) {
			$this->triglyceride = $this->createTriglyceride();
		}
		return $this->triglyceride;
	}
	
	protected function createTriglyceride() {
		return new \com\microsoft\wc\thing\types\ConcentrationValue();
	}

	public function setTriglyceride($triglyceride) {
		$this->triglyceride = $this->validateTriglyceride($triglyceride);
	}

	protected function validateTriglyceride($triglyceride) {
		if ( $triglyceride === FALSE ) {
			$this->_overrides['triglyceride'] = TRUE;
			return NULL;
		}

		if ( ! $triglyceride instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($triglyceride) ) {
			$triglyceride = new \com\microsoft\wc\thing\types\ConcentrationValue ($triglyceride);
		}

		unset ($this->_overrides['triglyceride']);
	
		return $triglyceride;
	}
} // end class CholesterolProfile
