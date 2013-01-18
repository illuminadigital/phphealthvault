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

	public function getDescription() {
		if ($this->description===NULL) {
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

	public function getExactDose() {
		if ($this->exactDose===NULL) {
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
		if ( ! $exactDose instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($exactDose) ) {
			$exactDose = new \com\microsoft\wc\thing\types\PositiveDouble ($exactDose);
		}
	
		return $exactDose;
	}

	public function getMinDose() {
		if ($this->minDose===NULL) {
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
		if ( ! $minDose instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($minDose) ) {
			$minDose = new \com\microsoft\wc\thing\types\PositiveDouble ($minDose);
		}
	
		return $minDose;
	}

	public function getMaxDose() {
		if ($this->maxDose===NULL) {
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
		if ( ! $maxDose instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($maxDose) ) {
			$maxDose = new \com\microsoft\wc\thing\types\PositiveDouble ($maxDose);
		}
	
		return $maxDose;
	}
} // end class DoseValue
