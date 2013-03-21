<?php
namespace com\microsoft\wc\thing\medication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.medication", prefix="")
 * })
 * @XmlEntity	(xml="DoseValue")
 */
class DoseValue {
	/**
	 * Defines a medication dosage.
	 * The dose taken may be a fixed amount, like 2 (meaning2 capsules, 2 tablets, etc.), or it may be a range, like1/2 - 1, and it may also include free-form text.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="exact-dose")
	 */
	protected $exactDose;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="min-dose")
	 */
	protected $minDose;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="max-dose")
	 */
	protected $maxDose;

	public function __construct($description = NULL, $exactDose = NULL, $minDose = NULL, $maxDose = NULL) {
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->exactDose = ($exactDose===NULL) ? NULL : $this->validateExactDose($exactDose);
		$this->minDose = ($minDose===NULL) ? NULL : $this->validateMinDose($minDose);
		$this->maxDose = ($maxDose===NULL) ? NULL : $this->validateMaxDose($maxDose);
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getExactDose($autoCreate = TRUE) {
		if ($this->exactDose===NULL && $autoCreate && ! isset($this->_overrides['exactDose']) ) {
			$this->exactDose = $this->createExactDose();
		}
		return $this->exactDose;
	}
	
	protected function createExactDose() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setExactDose($exactDose) {
		$this->exactDose = $this->validateExactDose($exactDose);
	}

	protected function validateExactDose($exactDose) {
		if ( $exactDose === FALSE ) {
			$this->_overrides['exactDose'] = TRUE;
			return NULL;
		}

		if ( ! $exactDose instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($exactDose) ) {
			$exactDose = new \com\microsoft\wc\thing\types\PositiveDouble ($exactDose);
		}

		unset ($this->_overrides['exactDose']);
	
		return $exactDose;
	}

	public function getMinDose($autoCreate = TRUE) {
		if ($this->minDose===NULL && $autoCreate && ! isset($this->_overrides['minDose']) ) {
			$this->minDose = $this->createMinDose();
		}
		return $this->minDose;
	}
	
	protected function createMinDose() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setMinDose($minDose) {
		$this->minDose = $this->validateMinDose($minDose);
	}

	protected function validateMinDose($minDose) {
		if ( $minDose === FALSE ) {
			$this->_overrides['minDose'] = TRUE;
			return NULL;
		}

		if ( ! $minDose instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($minDose) ) {
			$minDose = new \com\microsoft\wc\thing\types\PositiveDouble ($minDose);
		}

		unset ($this->_overrides['minDose']);
	
		return $minDose;
	}

	public function getMaxDose($autoCreate = TRUE) {
		if ($this->maxDose===NULL && $autoCreate && ! isset($this->_overrides['maxDose']) ) {
			$this->maxDose = $this->createMaxDose();
		}
		return $this->maxDose;
	}
	
	protected function createMaxDose() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setMaxDose($maxDose) {
		$this->maxDose = $this->validateMaxDose($maxDose);
	}

	protected function validateMaxDose($maxDose) {
		if ( $maxDose === FALSE ) {
			$this->_overrides['maxDose'] = TRUE;
			return NULL;
		}

		if ( ! $maxDose instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($maxDose) ) {
			$maxDose = new \com\microsoft\wc\thing\types\PositiveDouble ($maxDose);
		}

		unset ($this->_overrides['maxDose']);
	
		return $maxDose;
	}
} // end class DoseValue
