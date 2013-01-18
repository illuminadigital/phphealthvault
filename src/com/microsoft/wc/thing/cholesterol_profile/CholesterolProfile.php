<?php
namespace com\microsoft\wc\thing\cholesterol_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.cholesterol-profile", prefix="")
 * })
 * @XmlEntity	(xml="cholesterol-profile")
 */
class CholesterolProfile extends \com\microsoft\wc\thing\Thing {
	/**
	 * Defines cholesterol reading in the blood.
	 */

	const ID = '98f76958-e34f-459b-a760-83c1699add38';
	const NAME = 'Cholesterol Measurement';

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

	public function getLdl() {
		if ($this->ldl===NULL) {
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
		if ( ! $ldl instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($ldl) ) {
			$ldl = new \com\microsoft\wc\thing\types\ConcentrationValue ($ldl);
		}
	
		return $ldl;
	}

	public function getHdl() {
		if ($this->hdl===NULL) {
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
		if ( ! $hdl instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($hdl) ) {
			$hdl = new \com\microsoft\wc\thing\types\ConcentrationValue ($hdl);
		}
	
		return $hdl;
	}

	public function getTotalCholesterol() {
		if ($this->totalCholesterol===NULL) {
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
		if ( ! $totalCholesterol instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($totalCholesterol) ) {
			$totalCholesterol = new \com\microsoft\wc\thing\types\ConcentrationValue ($totalCholesterol);
		}
	
		return $totalCholesterol;
	}

	public function getTriglyceride() {
		if ($this->triglyceride===NULL) {
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
		if ( ! $triglyceride instanceof \com\microsoft\wc\thing\types\ConcentrationValue  && ! is_null($triglyceride) ) {
			$triglyceride = new \com\microsoft\wc\thing\types\ConcentrationValue ($triglyceride);
		}
	
		return $triglyceride;
	}
} // end class CholesterolProfile
