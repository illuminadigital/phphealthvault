<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="duration-value")
 */
class DurationValue {
	/**
	 * DurationValue
	 * A pair of approximate date-times used to create arange.
	 * This type derives uses two approximate date-times toprovide a duration range.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="start-date")
	 */
	protected $startDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="end-date")
	 */
	protected $endDate;

	public function __construct($startDate = NULL, $endDate = NULL) {
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
	}

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( ! $startDate instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$startDate = new \com\microsoft\wc\dates\ApproxDateTime ($startDate);
		}
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( $endDate === FALSE ) {
			$this->_overrides['endDate'] = TRUE;
			return NULL;
		}

		if ( ! $endDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($endDate) ) {
			$endDate = new \com\microsoft\wc\dates\ApproxDateTime ($endDate);
		}

		unset ($this->_overrides['endDate']);
	
		return $endDate;
	}
} // end class DurationValue
