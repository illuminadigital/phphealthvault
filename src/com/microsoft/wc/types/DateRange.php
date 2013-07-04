<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="DateRange")
 */
class DateRange {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getDateMin($autoCreate = TRUE) {
		if ($this->dateMin===NULL && $autoCreate && ! isset($this->_overrides['dateMin']) ) {
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
		if ( ! is_string($dateMin) && ! is_null($dateMin) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateMin', 'string'));
		}
	
		return $dateMin;
	}

	public function getDateMax($autoCreate = TRUE) {
		if ($this->dateMax===NULL && $autoCreate && ! isset($this->_overrides['dateMax']) ) {
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
		if ( ! is_string($dateMax) && ! is_null($dateMax) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateMax', 'string'));
		}
	
		return $dateMax;
	}
} // end class DateRange
