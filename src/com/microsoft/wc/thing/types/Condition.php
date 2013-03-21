<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="condition")
 */
class Condition {
	/**
	 * Condition
	 * Defines a single health or medical issue/problem.
	 * CCR qualifiers and other notes should go in thecommon/note section of the thing.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="onset-date")
	 */
	protected $onsetDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="resolution-date")
	 */
	protected $resolutionDate;

	/**
	 * @XmlText	(type="string", name="resolution")
	 */
	protected $resolution;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="occurrence")
	 */
	protected $occurrence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="severity")
	 */
	protected $severity;

	public function __construct($name = NULL, $onsetDate = NULL, $resolutionDate = NULL, $resolution = NULL, $occurrence = NULL, $severity = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->onsetDate = ($onsetDate===NULL) ? NULL : $this->validateOnsetDate($onsetDate);
		$this->resolutionDate = ($resolutionDate===NULL) ? NULL : $this->validateResolutionDate($resolutionDate);
		$this->resolution = ($resolution===NULL) ? NULL : $this->validateResolution($resolution);
		$this->occurrence = ($occurrence===NULL) ? NULL : $this->validateOccurrence($occurrence);
		$this->severity = ($severity===NULL) ? NULL : $this->validateSeverity($severity);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
	}

	public function getOnsetDate($autoCreate = TRUE) {
		if ($this->onsetDate===NULL && $autoCreate && ! isset($this->_overrides['onsetDate']) ) {
			$this->onsetDate = $this->createOnsetDate();
		}
		return $this->onsetDate;
	}
	
	protected function createOnsetDate() {
		return new \com\microsoft\wc\dates\ApproxDate();
	}

	public function setOnsetDate($onsetDate) {
		$this->onsetDate = $this->validateOnsetDate($onsetDate);
	}

	protected function validateOnsetDate($onsetDate) {
		if ( $onsetDate === FALSE ) {
			$this->_overrides['onsetDate'] = TRUE;
			return NULL;
		}

		if ( ! $onsetDate instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($onsetDate) ) {
			$onsetDate = new \com\microsoft\wc\dates\ApproxDate ($onsetDate);
		}

		unset ($this->_overrides['onsetDate']);
	
		return $onsetDate;
	}

	public function getResolutionDate($autoCreate = TRUE) {
		if ($this->resolutionDate===NULL && $autoCreate && ! isset($this->_overrides['resolutionDate']) ) {
			$this->resolutionDate = $this->createResolutionDate();
		}
		return $this->resolutionDate;
	}
	
	protected function createResolutionDate() {
		return new \com\microsoft\wc\dates\ApproxDate();
	}

	public function setResolutionDate($resolutionDate) {
		$this->resolutionDate = $this->validateResolutionDate($resolutionDate);
	}

	protected function validateResolutionDate($resolutionDate) {
		if ( $resolutionDate === FALSE ) {
			$this->_overrides['resolutionDate'] = TRUE;
			return NULL;
		}

		if ( ! $resolutionDate instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($resolutionDate) ) {
			$resolutionDate = new \com\microsoft\wc\dates\ApproxDate ($resolutionDate);
		}

		unset ($this->_overrides['resolutionDate']);
	
		return $resolutionDate;
	}

	public function getResolution($autoCreate = TRUE) {
		if ($this->resolution===NULL && $autoCreate && ! isset($this->_overrides['resolution']) ) {
			$this->resolution = $this->createResolution();
		}
		return $this->resolution;
	}
	
	protected function createResolution() {
		return '';
	}

	public function setResolution($resolution) {
		$this->resolution = $this->validateResolution($resolution);
	}

	protected function validateResolution($resolution) {
		if ( ! is_string($resolution) && ! is_null($resolution) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'resolution', 'string'));
		}
	
		return $resolution;
	}

	public function getOccurrence($autoCreate = TRUE) {
		if ($this->occurrence===NULL && $autoCreate && ! isset($this->_overrides['occurrence']) ) {
			$this->occurrence = $this->createOccurrence();
		}
		return $this->occurrence;
	}
	
	protected function createOccurrence() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setOccurrence($occurrence) {
		$this->occurrence = $this->validateOccurrence($occurrence);
	}

	protected function validateOccurrence($occurrence) {
		if ( $occurrence === FALSE ) {
			$this->_overrides['occurrence'] = TRUE;
			return NULL;
		}

		if ( ! $occurrence instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($occurrence) ) {
			$occurrence = new \com\microsoft\wc\types\CodableValue ($occurrence);
		}

		unset ($this->_overrides['occurrence']);
	
		return $occurrence;
	}

	public function getSeverity($autoCreate = TRUE) {
		if ($this->severity===NULL && $autoCreate && ! isset($this->_overrides['severity']) ) {
			$this->severity = $this->createSeverity();
		}
		return $this->severity;
	}
	
	protected function createSeverity() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSeverity($severity) {
		$this->severity = $this->validateSeverity($severity);
	}

	protected function validateSeverity($severity) {
		if ( $severity === FALSE ) {
			$this->_overrides['severity'] = TRUE;
			return NULL;
		}

		if ( ! $severity instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($severity) ) {
			$severity = new \com\microsoft\wc\types\CodableValue ($severity);
		}

		unset ($this->_overrides['severity']);
	
		return $severity;
	}
} // end class Condition
