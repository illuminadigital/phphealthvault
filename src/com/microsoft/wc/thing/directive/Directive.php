<?php
namespace com\microsoft\wc\thing\directive;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.directive", prefix="")
 * })
 * @XmlEntity	(xml="directive")
 */
class Directive extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A single advance directive.
	 * An advance directive (or advance health directive) islegal directive when dealing with health related issues.Examples include living wills and power of attorney forhealth care.
	 */

	const ID = '822a5e5a-14f1-4d06-b92f-8f3f1b05218f';
	const NAME = 'Advance Directive';

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
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="stop-date")
	 */
	protected $stopDate;

	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlText	(type="boolean", name="full-resuscitation")
	 */
	protected $fullResuscitation;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="prohibited-interventions")
	 */
	protected $prohibitedInterventions;

	/**
	 * @XmlText	(type="string", name="additional-instructions")
	 */
	protected $additionalInstructions;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="attending-physician")
	 */
	protected $attendingPhysician;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="attending-physician-endorsement")
	 */
	protected $attendingPhysicianEndorsement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="attending-nurse")
	 */
	protected $attendingNurse;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="attending-nurse-endorsement")
	 */
	protected $attendingNurseEndorsement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="expiration-date")
	 */
	protected $expirationDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="discontinuation-date")
	 */
	protected $discontinuationDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="discontinuation-physician")
	 */
	protected $discontinuationPhysician;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="discontinuation-physician-endorsement")
	 */
	protected $discontinuationPhysicianEndorsement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="discontinuation-nurse")
	 */
	protected $discontinuationNurse;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="discontinuation-nurse-endorsement")
	 */
	protected $discontinuationNurseEndorsement;

	public function __construct($startDate = NULL, $stopDate = NULL, $description = NULL, $fullResuscitation = NULL, $prohibitedInterventions = NULL, $additionalInstructions = NULL, $attendingPhysician = NULL, $attendingPhysicianEndorsement = NULL, $attendingNurse = NULL, $attendingNurseEndorsement = NULL, $expirationDate = NULL, $discontinuationDate = NULL, $discontinuationPhysician = NULL, $discontinuationPhysicianEndorsement = NULL, $discontinuationNurse = NULL, $discontinuationNurseEndorsement = NULL) {
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->stopDate = ($stopDate===NULL) ? NULL : $this->validateStopDate($stopDate);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->fullResuscitation = ($fullResuscitation===NULL) ? NULL : $this->validateFullResuscitation($fullResuscitation);
		$this->prohibitedInterventions = ($prohibitedInterventions===NULL) ? NULL : $this->validateProhibitedInterventions($prohibitedInterventions);
		$this->additionalInstructions = ($additionalInstructions===NULL) ? NULL : $this->validateAdditionalInstructions($additionalInstructions);
		$this->attendingPhysician = ($attendingPhysician===NULL) ? NULL : $this->validateAttendingPhysician($attendingPhysician);
		$this->attendingPhysicianEndorsement = ($attendingPhysicianEndorsement===NULL) ? NULL : $this->validateAttendingPhysicianEndorsement($attendingPhysicianEndorsement);
		$this->attendingNurse = ($attendingNurse===NULL) ? NULL : $this->validateAttendingNurse($attendingNurse);
		$this->attendingNurseEndorsement = ($attendingNurseEndorsement===NULL) ? NULL : $this->validateAttendingNurseEndorsement($attendingNurseEndorsement);
		$this->expirationDate = ($expirationDate===NULL) ? NULL : $this->validateExpirationDate($expirationDate);
		$this->discontinuationDate = ($discontinuationDate===NULL) ? NULL : $this->validateDiscontinuationDate($discontinuationDate);
		$this->discontinuationPhysician = ($discontinuationPhysician===NULL) ? NULL : $this->validateDiscontinuationPhysician($discontinuationPhysician);
		$this->discontinuationPhysicianEndorsement = ($discontinuationPhysicianEndorsement===NULL) ? NULL : $this->validateDiscontinuationPhysicianEndorsement($discontinuationPhysicianEndorsement);
		$this->discontinuationNurse = ($discontinuationNurse===NULL) ? NULL : $this->validateDiscontinuationNurse($discontinuationNurse);
		$this->discontinuationNurseEndorsement = ($discontinuationNurseEndorsement===NULL) ? NULL : $this->validateDiscontinuationNurseEndorsement($discontinuationNurseEndorsement);
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

	public function getStopDate($autoCreate = TRUE) {
		if ($this->stopDate===NULL && $autoCreate && ! isset($this->_overrides['stopDate']) ) {
			$this->stopDate = $this->createStopDate();
		}
		return $this->stopDate;
	}
	
	protected function createStopDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setStopDate($stopDate) {
		$this->stopDate = $this->validateStopDate($stopDate);
	}

	protected function validateStopDate($stopDate) {
		if ( ! $stopDate instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$stopDate = new \com\microsoft\wc\dates\ApproxDateTime ($stopDate);
		}
	
		return $stopDate;
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

	public function getFullResuscitation($autoCreate = TRUE) {
		if ($this->fullResuscitation===NULL && $autoCreate && ! isset($this->_overrides['fullResuscitation']) ) {
			$this->fullResuscitation = $this->createFullResuscitation();
		}
		return $this->fullResuscitation;
	}
	
	protected function createFullResuscitation() {
		return FALSE;
	}

	public function setFullResuscitation($fullResuscitation) {
		$this->fullResuscitation = $this->validateFullResuscitation($fullResuscitation);
	}

	protected function validateFullResuscitation($fullResuscitation) {
		if ( ! is_bool($fullResuscitation) && ! is_null($fullResuscitation) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'fullResuscitation', 'boolean'));
		}
	
		return $fullResuscitation;
	}

	public function getProhibitedInterventions($autoCreate = TRUE) {
		if ($this->prohibitedInterventions===NULL && $autoCreate && ! isset($this->_overrides['prohibitedInterventions']) ) {
			$this->prohibitedInterventions = $this->createProhibitedInterventions();
		}
		return $this->prohibitedInterventions;
	}
	
	protected function createProhibitedInterventions() {
		return array();
	}

	public function setProhibitedInterventions($prohibitedInterventions) {
		$this->prohibitedInterventions = $this->validateProhibitedInterventions($prohibitedInterventions);
	}

	protected function validateProhibitedInterventions($prohibitedInterventions) {
		if ( $prohibitedInterventions === FALSE ) {
			$this->_overrides['prohibitedInterventions'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($prohibitedInterventions) && ! is_null($prohibitedInterventions) ) {
			$prohibitedInterventions = array($prohibitedInterventions);
		}

		unset ($this->_overrides['prohibitedInterventions']);
		$count = count($prohibitedInterventions);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'prohibitedInterventions', 0));
		}
		if ( ! empty($prohibitedInterventions) ) {
			foreach ($prohibitedInterventions as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\CodableValue )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'prohibitedInterventions', 'codable-value'));
				}
			}
		}
	
		return $prohibitedInterventions;
	}

	public function addProhibitedInterventions($prohibitedInterventions) {
		$this->prohibitedInterventions[] = $prohibitedInterventions;
	}

	public function getAdditionalInstructions($autoCreate = TRUE) {
		if ($this->additionalInstructions===NULL && $autoCreate && ! isset($this->_overrides['additionalInstructions']) ) {
			$this->additionalInstructions = $this->createAdditionalInstructions();
		}
		return $this->additionalInstructions;
	}
	
	protected function createAdditionalInstructions() {
		return '';
	}

	public function setAdditionalInstructions($additionalInstructions) {
		$this->additionalInstructions = $this->validateAdditionalInstructions($additionalInstructions);
	}

	protected function validateAdditionalInstructions($additionalInstructions) {
		if ( ! is_string($additionalInstructions) && ! is_null($additionalInstructions) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'additionalInstructions', 'string'));
		}
	
		return $additionalInstructions;
	}

	public function getAttendingPhysician($autoCreate = TRUE) {
		if ($this->attendingPhysician===NULL && $autoCreate && ! isset($this->_overrides['attendingPhysician']) ) {
			$this->attendingPhysician = $this->createAttendingPhysician();
		}
		return $this->attendingPhysician;
	}
	
	protected function createAttendingPhysician() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setAttendingPhysician($attendingPhysician) {
		$this->attendingPhysician = $this->validateAttendingPhysician($attendingPhysician);
	}

	protected function validateAttendingPhysician($attendingPhysician) {
		if ( $attendingPhysician === FALSE ) {
			$this->_overrides['attendingPhysician'] = TRUE;
			return NULL;
		}

		if ( ! $attendingPhysician instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($attendingPhysician) ) {
			$attendingPhysician = new \com\microsoft\wc\thing\types\Person ($attendingPhysician);
		}

		unset ($this->_overrides['attendingPhysician']);
	
		return $attendingPhysician;
	}

	public function getAttendingPhysicianEndorsement($autoCreate = TRUE) {
		if ($this->attendingPhysicianEndorsement===NULL && $autoCreate && ! isset($this->_overrides['attendingPhysicianEndorsement']) ) {
			$this->attendingPhysicianEndorsement = $this->createAttendingPhysicianEndorsement();
		}
		return $this->attendingPhysicianEndorsement;
	}
	
	protected function createAttendingPhysicianEndorsement() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setAttendingPhysicianEndorsement($attendingPhysicianEndorsement) {
		$this->attendingPhysicianEndorsement = $this->validateAttendingPhysicianEndorsement($attendingPhysicianEndorsement);
	}

	protected function validateAttendingPhysicianEndorsement($attendingPhysicianEndorsement) {
		if ( $attendingPhysicianEndorsement === FALSE ) {
			$this->_overrides['attendingPhysicianEndorsement'] = TRUE;
			return NULL;
		}

		if ( ! $attendingPhysicianEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($attendingPhysicianEndorsement) ) {
			$attendingPhysicianEndorsement = new \com\microsoft\wc\dates\DateTime ($attendingPhysicianEndorsement);
		}

		unset ($this->_overrides['attendingPhysicianEndorsement']);
	
		return $attendingPhysicianEndorsement;
	}

	public function getAttendingNurse($autoCreate = TRUE) {
		if ($this->attendingNurse===NULL && $autoCreate && ! isset($this->_overrides['attendingNurse']) ) {
			$this->attendingNurse = $this->createAttendingNurse();
		}
		return $this->attendingNurse;
	}
	
	protected function createAttendingNurse() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setAttendingNurse($attendingNurse) {
		$this->attendingNurse = $this->validateAttendingNurse($attendingNurse);
	}

	protected function validateAttendingNurse($attendingNurse) {
		if ( $attendingNurse === FALSE ) {
			$this->_overrides['attendingNurse'] = TRUE;
			return NULL;
		}

		if ( ! $attendingNurse instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($attendingNurse) ) {
			$attendingNurse = new \com\microsoft\wc\thing\types\Person ($attendingNurse);
		}

		unset ($this->_overrides['attendingNurse']);
	
		return $attendingNurse;
	}

	public function getAttendingNurseEndorsement($autoCreate = TRUE) {
		if ($this->attendingNurseEndorsement===NULL && $autoCreate && ! isset($this->_overrides['attendingNurseEndorsement']) ) {
			$this->attendingNurseEndorsement = $this->createAttendingNurseEndorsement();
		}
		return $this->attendingNurseEndorsement;
	}
	
	protected function createAttendingNurseEndorsement() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setAttendingNurseEndorsement($attendingNurseEndorsement) {
		$this->attendingNurseEndorsement = $this->validateAttendingNurseEndorsement($attendingNurseEndorsement);
	}

	protected function validateAttendingNurseEndorsement($attendingNurseEndorsement) {
		if ( $attendingNurseEndorsement === FALSE ) {
			$this->_overrides['attendingNurseEndorsement'] = TRUE;
			return NULL;
		}

		if ( ! $attendingNurseEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($attendingNurseEndorsement) ) {
			$attendingNurseEndorsement = new \com\microsoft\wc\dates\DateTime ($attendingNurseEndorsement);
		}

		unset ($this->_overrides['attendingNurseEndorsement']);
	
		return $attendingNurseEndorsement;
	}

	public function getExpirationDate($autoCreate = TRUE) {
		if ($this->expirationDate===NULL && $autoCreate && ! isset($this->_overrides['expirationDate']) ) {
			$this->expirationDate = $this->createExpirationDate();
		}
		return $this->expirationDate;
	}
	
	protected function createExpirationDate() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setExpirationDate($expirationDate) {
		$this->expirationDate = $this->validateExpirationDate($expirationDate);
	}

	protected function validateExpirationDate($expirationDate) {
		if ( $expirationDate === FALSE ) {
			$this->_overrides['expirationDate'] = TRUE;
			return NULL;
		}

		if ( ! $expirationDate instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($expirationDate) ) {
			$expirationDate = new \com\microsoft\wc\dates\DateTime ($expirationDate);
		}

		unset ($this->_overrides['expirationDate']);
	
		return $expirationDate;
	}

	public function getDiscontinuationDate($autoCreate = TRUE) {
		if ($this->discontinuationDate===NULL && $autoCreate && ! isset($this->_overrides['discontinuationDate']) ) {
			$this->discontinuationDate = $this->createDiscontinuationDate();
		}
		return $this->discontinuationDate;
	}
	
	protected function createDiscontinuationDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDiscontinuationDate($discontinuationDate) {
		$this->discontinuationDate = $this->validateDiscontinuationDate($discontinuationDate);
	}

	protected function validateDiscontinuationDate($discontinuationDate) {
		if ( $discontinuationDate === FALSE ) {
			$this->_overrides['discontinuationDate'] = TRUE;
			return NULL;
		}

		if ( ! $discontinuationDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($discontinuationDate) ) {
			$discontinuationDate = new \com\microsoft\wc\dates\ApproxDateTime ($discontinuationDate);
		}

		unset ($this->_overrides['discontinuationDate']);
	
		return $discontinuationDate;
	}

	public function getDiscontinuationPhysician($autoCreate = TRUE) {
		if ($this->discontinuationPhysician===NULL && $autoCreate && ! isset($this->_overrides['discontinuationPhysician']) ) {
			$this->discontinuationPhysician = $this->createDiscontinuationPhysician();
		}
		return $this->discontinuationPhysician;
	}
	
	protected function createDiscontinuationPhysician() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setDiscontinuationPhysician($discontinuationPhysician) {
		$this->discontinuationPhysician = $this->validateDiscontinuationPhysician($discontinuationPhysician);
	}

	protected function validateDiscontinuationPhysician($discontinuationPhysician) {
		if ( $discontinuationPhysician === FALSE ) {
			$this->_overrides['discontinuationPhysician'] = TRUE;
			return NULL;
		}

		if ( ! $discontinuationPhysician instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($discontinuationPhysician) ) {
			$discontinuationPhysician = new \com\microsoft\wc\thing\types\Person ($discontinuationPhysician);
		}

		unset ($this->_overrides['discontinuationPhysician']);
	
		return $discontinuationPhysician;
	}

	public function getDiscontinuationPhysicianEndorsement($autoCreate = TRUE) {
		if ($this->discontinuationPhysicianEndorsement===NULL && $autoCreate && ! isset($this->_overrides['discontinuationPhysicianEndorsement']) ) {
			$this->discontinuationPhysicianEndorsement = $this->createDiscontinuationPhysicianEndorsement();
		}
		return $this->discontinuationPhysicianEndorsement;
	}
	
	protected function createDiscontinuationPhysicianEndorsement() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setDiscontinuationPhysicianEndorsement($discontinuationPhysicianEndorsement) {
		$this->discontinuationPhysicianEndorsement = $this->validateDiscontinuationPhysicianEndorsement($discontinuationPhysicianEndorsement);
	}

	protected function validateDiscontinuationPhysicianEndorsement($discontinuationPhysicianEndorsement) {
		if ( $discontinuationPhysicianEndorsement === FALSE ) {
			$this->_overrides['discontinuationPhysicianEndorsement'] = TRUE;
			return NULL;
		}

		if ( ! $discontinuationPhysicianEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($discontinuationPhysicianEndorsement) ) {
			$discontinuationPhysicianEndorsement = new \com\microsoft\wc\dates\DateTime ($discontinuationPhysicianEndorsement);
		}

		unset ($this->_overrides['discontinuationPhysicianEndorsement']);
	
		return $discontinuationPhysicianEndorsement;
	}

	public function getDiscontinuationNurse($autoCreate = TRUE) {
		if ($this->discontinuationNurse===NULL && $autoCreate && ! isset($this->_overrides['discontinuationNurse']) ) {
			$this->discontinuationNurse = $this->createDiscontinuationNurse();
		}
		return $this->discontinuationNurse;
	}
	
	protected function createDiscontinuationNurse() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setDiscontinuationNurse($discontinuationNurse) {
		$this->discontinuationNurse = $this->validateDiscontinuationNurse($discontinuationNurse);
	}

	protected function validateDiscontinuationNurse($discontinuationNurse) {
		if ( $discontinuationNurse === FALSE ) {
			$this->_overrides['discontinuationNurse'] = TRUE;
			return NULL;
		}

		if ( ! $discontinuationNurse instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($discontinuationNurse) ) {
			$discontinuationNurse = new \com\microsoft\wc\thing\types\Person ($discontinuationNurse);
		}

		unset ($this->_overrides['discontinuationNurse']);
	
		return $discontinuationNurse;
	}

	public function getDiscontinuationNurseEndorsement($autoCreate = TRUE) {
		if ($this->discontinuationNurseEndorsement===NULL && $autoCreate && ! isset($this->_overrides['discontinuationNurseEndorsement']) ) {
			$this->discontinuationNurseEndorsement = $this->createDiscontinuationNurseEndorsement();
		}
		return $this->discontinuationNurseEndorsement;
	}
	
	protected function createDiscontinuationNurseEndorsement() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setDiscontinuationNurseEndorsement($discontinuationNurseEndorsement) {
		$this->discontinuationNurseEndorsement = $this->validateDiscontinuationNurseEndorsement($discontinuationNurseEndorsement);
	}

	protected function validateDiscontinuationNurseEndorsement($discontinuationNurseEndorsement) {
		if ( $discontinuationNurseEndorsement === FALSE ) {
			$this->_overrides['discontinuationNurseEndorsement'] = TRUE;
			return NULL;
		}

		if ( ! $discontinuationNurseEndorsement instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($discontinuationNurseEndorsement) ) {
			$discontinuationNurseEndorsement = new \com\microsoft\wc\dates\DateTime ($discontinuationNurseEndorsement);
		}

		unset ($this->_overrides['discontinuationNurseEndorsement']);
	
		return $discontinuationNurseEndorsement;
	}
} // end class Directive
