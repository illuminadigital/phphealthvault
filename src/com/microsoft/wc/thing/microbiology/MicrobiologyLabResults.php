<?php
namespace com\microsoft\wc\thing\microbiology;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.microbiology", prefix="")
 * })
 * @XmlEntity	(xml="microbiology-lab-results")
 */
class MicrobiologyLabResults extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a microbiology lab test.
	 * This thing type describes the microbiology lab test results of a person.
	 */

	const ID = 'B8FCB138-F8E6-436A-A15D-E3A2D6916094';
	const NAME = 'Microbiology Lab Test Result';

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LabTestType", collection="true", name="lab-tests")
	 */
	protected $labTests;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="sensitivity-agent")
	 */
	protected $sensitivityAgent;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="sensitivity-value")
	 */
	protected $sensitivityValue;

	/**
	 * @XmlText	(type="string", name="sensitivity-interpretation")
	 */
	protected $sensitivityInterpretation;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="specimen-type")
	 */
	protected $specimenType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="organism-name")
	 */
	protected $organismName;

	/**
	 * @XmlText	(type="string", name="organism-comment")
	 */
	protected $organismComment;

	public function __construct($when = NULL, $labTests = NULL, $sensitivityAgent = NULL, $sensitivityValue = NULL, $sensitivityInterpretation = NULL, $specimenType = NULL, $organismName = NULL, $organismComment = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->labTests = ($labTests===NULL) ? NULL : $this->validateLabTests($labTests);
		$this->sensitivityAgent = ($sensitivityAgent===NULL) ? NULL : $this->validateSensitivityAgent($sensitivityAgent);
		$this->sensitivityValue = ($sensitivityValue===NULL) ? NULL : $this->validateSensitivityValue($sensitivityValue);
		$this->sensitivityInterpretation = ($sensitivityInterpretation===NULL) ? NULL : $this->validateSensitivityInterpretation($sensitivityInterpretation);
		$this->specimenType = ($specimenType===NULL) ? NULL : $this->validateSpecimenType($specimenType);
		$this->organismName = ($organismName===NULL) ? NULL : $this->validateOrganismName($organismName);
		$this->organismComment = ($organismComment===NULL) ? NULL : $this->validateOrganismComment($organismComment);
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

	public function getLabTests($autoCreate = TRUE) {
		if ($this->labTests===NULL && $autoCreate && ! isset($this->_overrides['labTests']) ) {
			$this->labTests = $this->createLabTests();
		}
		return $this->labTests;
	}
	
	protected function createLabTests() {
		return array();
	}

	public function setLabTests($labTests) {
		$this->labTests = $this->validateLabTests($labTests);
	}

	protected function validateLabTests($labTests) {
		if ( $labTests === FALSE ) {
			$this->_overrides['labTests'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($labTests) && ! is_null($labTests) ) {
			$labTests = array($labTests);
		}

		unset ($this->_overrides['labTests']);
		$count = count($labTests);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'labTests', 0));
		}
		if ( ! empty($labTests) ) {
			foreach ($labTests as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\types\LabTestType )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'labTests', 'lab-test-type'));
				}
			}
		}
	
		return $labTests;
	}

	public function addLabTests($labTests) {
		$this->labTests[] = $labTests;
	}

	public function getSensitivityAgent($autoCreate = TRUE) {
		if ($this->sensitivityAgent===NULL && $autoCreate && ! isset($this->_overrides['sensitivityAgent']) ) {
			$this->sensitivityAgent = $this->createSensitivityAgent();
		}
		return $this->sensitivityAgent;
	}
	
	protected function createSensitivityAgent() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSensitivityAgent($sensitivityAgent) {
		$this->sensitivityAgent = $this->validateSensitivityAgent($sensitivityAgent);
	}

	protected function validateSensitivityAgent($sensitivityAgent) {
		if ( $sensitivityAgent === FALSE ) {
			$this->_overrides['sensitivityAgent'] = TRUE;
			return NULL;
		}

		if ( ! $sensitivityAgent instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($sensitivityAgent) ) {
			$sensitivityAgent = new \com\microsoft\wc\types\CodableValue ($sensitivityAgent);
		}

		unset ($this->_overrides['sensitivityAgent']);
	
		return $sensitivityAgent;
	}

	public function getSensitivityValue($autoCreate = TRUE) {
		if ($this->sensitivityValue===NULL && $autoCreate && ! isset($this->_overrides['sensitivityValue']) ) {
			$this->sensitivityValue = $this->createSensitivityValue();
		}
		return $this->sensitivityValue;
	}
	
	protected function createSensitivityValue() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSensitivityValue($sensitivityValue) {
		$this->sensitivityValue = $this->validateSensitivityValue($sensitivityValue);
	}

	protected function validateSensitivityValue($sensitivityValue) {
		if ( $sensitivityValue === FALSE ) {
			$this->_overrides['sensitivityValue'] = TRUE;
			return NULL;
		}

		if ( ! $sensitivityValue instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($sensitivityValue) ) {
			$sensitivityValue = new \com\microsoft\wc\types\CodableValue ($sensitivityValue);
		}

		unset ($this->_overrides['sensitivityValue']);
	
		return $sensitivityValue;
	}

	public function getSensitivityInterpretation($autoCreate = TRUE) {
		if ($this->sensitivityInterpretation===NULL && $autoCreate && ! isset($this->_overrides['sensitivityInterpretation']) ) {
			$this->sensitivityInterpretation = $this->createSensitivityInterpretation();
		}
		return $this->sensitivityInterpretation;
	}
	
	protected function createSensitivityInterpretation() {
		return '';
	}

	public function setSensitivityInterpretation($sensitivityInterpretation) {
		$this->sensitivityInterpretation = $this->validateSensitivityInterpretation($sensitivityInterpretation);
	}

	protected function validateSensitivityInterpretation($sensitivityInterpretation) {
		if ( ! is_string($sensitivityInterpretation) && ! is_null($sensitivityInterpretation) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sensitivityInterpretation', 'string'));
		}
	
		return $sensitivityInterpretation;
	}

	public function getSpecimenType($autoCreate = TRUE) {
		if ($this->specimenType===NULL && $autoCreate && ! isset($this->_overrides['specimenType']) ) {
			$this->specimenType = $this->createSpecimenType();
		}
		return $this->specimenType;
	}
	
	protected function createSpecimenType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSpecimenType($specimenType) {
		$this->specimenType = $this->validateSpecimenType($specimenType);
	}

	protected function validateSpecimenType($specimenType) {
		if ( $specimenType === FALSE ) {
			$this->_overrides['specimenType'] = TRUE;
			return NULL;
		}

		if ( ! $specimenType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($specimenType) ) {
			$specimenType = new \com\microsoft\wc\types\CodableValue ($specimenType);
		}

		unset ($this->_overrides['specimenType']);
	
		return $specimenType;
	}

	public function getOrganismName($autoCreate = TRUE) {
		if ($this->organismName===NULL && $autoCreate && ! isset($this->_overrides['organismName']) ) {
			$this->organismName = $this->createOrganismName();
		}
		return $this->organismName;
	}
	
	protected function createOrganismName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setOrganismName($organismName) {
		$this->organismName = $this->validateOrganismName($organismName);
	}

	protected function validateOrganismName($organismName) {
		if ( $organismName === FALSE ) {
			$this->_overrides['organismName'] = TRUE;
			return NULL;
		}

		if ( ! $organismName instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($organismName) ) {
			$organismName = new \com\microsoft\wc\types\CodableValue ($organismName);
		}

		unset ($this->_overrides['organismName']);
	
		return $organismName;
	}

	public function getOrganismComment($autoCreate = TRUE) {
		if ($this->organismComment===NULL && $autoCreate && ! isset($this->_overrides['organismComment']) ) {
			$this->organismComment = $this->createOrganismComment();
		}
		return $this->organismComment;
	}
	
	protected function createOrganismComment() {
		return '';
	}

	public function setOrganismComment($organismComment) {
		$this->organismComment = $this->validateOrganismComment($organismComment);
	}

	protected function validateOrganismComment($organismComment) {
		if ( ! is_string($organismComment) && ! is_null($organismComment) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'organismComment', 'string'));
		}
	
		return $organismComment;
	}
} // end class MicrobiologyLabResults
