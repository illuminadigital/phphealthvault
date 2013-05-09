<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="Set")
 */
class Set {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\DateRange", collection="true", name="date-range")
	 */
	protected $dateRange;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="type-id")
	 */
	protected $typeId;

	public function __construct($dateRange = NULL, $typeId = NULL) {
		$this->dateRange = ($dateRange===NULL) ? NULL : $this->validateDateRange($dateRange);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
	}

	public function getDateRange($autoCreate = TRUE) {
		if ($this->dateRange===NULL && $autoCreate && ! isset($this->_overrides['dateRange']) ) {
			$this->dateRange = $this->createDateRange();
		}
		return $this->dateRange;
	}
	
	protected function createDateRange() {
		return array();
	}

	public function setDateRange($dateRange) {
		$this->dateRange = $this->validateDateRange($dateRange);
	}

	protected function validateDateRange($dateRange) {
		if ( $dateRange === FALSE ) {
			$this->_overrides['dateRange'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($dateRange) && ! is_null($dateRange) ) {
			$dateRange = array($dateRange);
		}

		unset ($this->_overrides['dateRange']);
		$count = count($dateRange);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'dateRange', 0));
		}
		if ( ! empty($dateRange) ) {
			foreach ($dateRange as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\DateRange )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'dateRange', 'DateRange'));
				}
			}
		}
	
		return $dateRange;
	}

	public function addDateRange($dateRange) {
		$this->dateRange[] = $dateRange;
	}

	public function getTypeId($autoCreate = TRUE) {
		if ($this->typeId===NULL && $autoCreate && ! isset($this->_overrides['typeId']) ) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return array();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( $typeId === FALSE ) {
			$this->_overrides['typeId'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($typeId) && ! is_null($typeId) ) {
			$typeId = array($typeId);
		}

		unset ($this->_overrides['typeId']);
		$count = count($typeId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'typeId', 0));
		}
		if ( ! empty($typeId) ) {
			foreach ($typeId as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\Guid )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'typeId', 'guid'));
				}
			}
		}
	
		return $typeId;
	}

	public function addTypeId($typeId) {
		$this->typeId[] = $typeId;
	}
} // end class Set
