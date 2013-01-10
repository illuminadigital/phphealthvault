<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="DateRange")
 */
class DateRange {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="date-min")
	 */
	protected $dateMin;

	/**
	 * @XmlText	(type="string", name="date-max")
	 */
	protected $dateMax;

	public function __construct($dateMin = NULL, $dateMax = NULL) {
		$this->dateMin = ($dateMin===NULL) ? NULL : $this->validateDateMin($dateMin);
		$this->dateMax = ($dateMax===NULL) ? NULL : $this->validateDateMax($dateMax);
	}

	public function getDateMin() {
		if ($this->dateMin===NULL) {
			$this->dateMin = $this->createDateMin();
		}
		return $this->dateMin;
	}
	
	protected function createDateMin() {
		return NULL;
	}

	public function setDateMin($dateMin) {
		$this->dateMin = $this->validateDateMin($dateMin);
	}

	protected function validateDateMin($dateMin) {
		if (!is_string($dateMin)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateMin', 'string'));
		}
	
		return $dateMin;
	}

	public function getDateMax() {
		if ($this->dateMax===NULL) {
			$this->dateMax = $this->createDateMax();
		}
		return $this->dateMax;
	}
	
	protected function createDateMax() {
		return NULL;
	}

	public function setDateMax($dateMax) {
		$this->dateMax = $this->validateDateMax($dateMax);
	}

	protected function validateDateMax($dateMax) {
		if (!is_string($dateMax)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateMax', 'string'));
		}
	
		return $dateMax;
	}
} // end class DateRange
