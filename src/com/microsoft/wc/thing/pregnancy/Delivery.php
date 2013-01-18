<?php
namespace com\microsoft\wc\thing\pregnancy;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.pregnancy", prefix="")
 * })
 * @XmlEntity	(xml="Delivery")
 */
class Delivery {
	/**
	 * Details about the delivery.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="location")
	 */
	protected $location;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="time-of-delivery")
	 */
	protected $timeOfDelivery;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="labor-duration")
	 */
	protected $laborDuration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="complications")
	 */
	protected $complications;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="anesthesia")
	 */
	protected $anesthesia;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="delivery-method")
	 */
	protected $deliveryMethod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="outcome")
	 */
	protected $outcome;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\pregnancy\Baby", name="baby")
	 */
	protected $baby;

	/**
	 * @XmlText	(type="string", name="note")
	 */
	protected $note;

	public function __construct($location = NULL, $timeOfDelivery = NULL, $laborDuration = NULL, $complications = NULL, $anesthesia = NULL, $deliveryMethod = NULL, $outcome = NULL, $baby = NULL, $note = NULL) {
		$this->location = ($location===NULL) ? NULL : $this->validateLocation($location);
		$this->timeOfDelivery = ($timeOfDelivery===NULL) ? NULL : $this->validateTimeOfDelivery($timeOfDelivery);
		$this->laborDuration = ($laborDuration===NULL) ? NULL : $this->validateLaborDuration($laborDuration);
		$this->complications = ($complications===NULL) ? NULL : $this->validateComplications($complications);
		$this->anesthesia = ($anesthesia===NULL) ? NULL : $this->validateAnesthesia($anesthesia);
		$this->deliveryMethod = ($deliveryMethod===NULL) ? NULL : $this->validateDeliveryMethod($deliveryMethod);
		$this->outcome = ($outcome===NULL) ? NULL : $this->validateOutcome($outcome);
		$this->baby = ($baby===NULL) ? NULL : $this->validateBaby($baby);
		$this->note = ($note===NULL) ? NULL : $this->validateNote($note);
	}

	public function getLocation() {
		if ($this->location===NULL) {
			$this->location = $this->createLocation();
		}
		return $this->location;
	}
	
	protected function createLocation() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setLocation($location) {
		$this->location = $this->validateLocation($location);
	}

	protected function validateLocation($location) {
		if ( ! $location instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($location) ) {
			$location = new \com\microsoft\wc\thing\types\Organization ($location);
		}
	
		return $location;
	}

	public function getTimeOfDelivery() {
		if ($this->timeOfDelivery===NULL) {
			$this->timeOfDelivery = $this->createTimeOfDelivery();
		}
		return $this->timeOfDelivery;
	}
	
	protected function createTimeOfDelivery() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setTimeOfDelivery($timeOfDelivery) {
		$this->timeOfDelivery = $this->validateTimeOfDelivery($timeOfDelivery);
	}

	protected function validateTimeOfDelivery($timeOfDelivery) {
		if ( ! $timeOfDelivery instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($timeOfDelivery) ) {
			$timeOfDelivery = new \com\microsoft\wc\dates\ApproxDateTime ($timeOfDelivery);
		}
	
		return $timeOfDelivery;
	}

	public function getLaborDuration() {
		if ($this->laborDuration===NULL) {
			$this->laborDuration = $this->createLaborDuration();
		}
		return $this->laborDuration;
	}
	
	protected function createLaborDuration() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setLaborDuration($laborDuration) {
		$this->laborDuration = $this->validateLaborDuration($laborDuration);
	}

	protected function validateLaborDuration($laborDuration) {
		if ( ! $laborDuration instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($laborDuration) ) {
			$laborDuration = new \com\microsoft\wc\thing\types\PositiveDouble ($laborDuration);
		}
	
		return $laborDuration;
	}

	public function getComplications() {
		if ($this->complications===NULL) {
			$this->complications = $this->createComplications();
		}
		return $this->complications;
	}
	
	protected function createComplications() {
		return array();
	}

	public function setComplications($complications) {
		$this->complications = $this->validateComplications($complications);
	}

	protected function validateComplications($complications) {
		if ( ! $complications instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($complications) ) {
			$complications = new \com\microsoft\wc\types\CodableValue ($complications);
		}
		$count = count($complications);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'complications', 0));
		}
		foreach ($complications as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'complications', 'codable-value'));
			}
		}
	
		return $complications;
	}

	public function addComplications($complications) {
		$this->complications[] = $complications;
	}

	public function getAnesthesia() {
		if ($this->anesthesia===NULL) {
			$this->anesthesia = $this->createAnesthesia();
		}
		return $this->anesthesia;
	}
	
	protected function createAnesthesia() {
		return array();
	}

	public function setAnesthesia($anesthesia) {
		$this->anesthesia = $this->validateAnesthesia($anesthesia);
	}

	protected function validateAnesthesia($anesthesia) {
		if ( ! $anesthesia instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($anesthesia) ) {
			$anesthesia = new \com\microsoft\wc\types\CodableValue ($anesthesia);
		}
		$count = count($anesthesia);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'anesthesia', 0));
		}
		foreach ($anesthesia as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'anesthesia', 'codable-value'));
			}
		}
	
		return $anesthesia;
	}

	public function addAnesthesia($anesthesia) {
		$this->anesthesia[] = $anesthesia;
	}

	public function getDeliveryMethod() {
		if ($this->deliveryMethod===NULL) {
			$this->deliveryMethod = $this->createDeliveryMethod();
		}
		return $this->deliveryMethod;
	}
	
	protected function createDeliveryMethod() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDeliveryMethod($deliveryMethod) {
		$this->deliveryMethod = $this->validateDeliveryMethod($deliveryMethod);
	}

	protected function validateDeliveryMethod($deliveryMethod) {
		if ( ! $deliveryMethod instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($deliveryMethod) ) {
			$deliveryMethod = new \com\microsoft\wc\types\CodableValue ($deliveryMethod);
		}
	
		return $deliveryMethod;
	}

	public function getOutcome() {
		if ($this->outcome===NULL) {
			$this->outcome = $this->createOutcome();
		}
		return $this->outcome;
	}
	
	protected function createOutcome() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setOutcome($outcome) {
		$this->outcome = $this->validateOutcome($outcome);
	}

	protected function validateOutcome($outcome) {
		if ( ! $outcome instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($outcome) ) {
			$outcome = new \com\microsoft\wc\types\CodableValue ($outcome);
		}
	
		return $outcome;
	}

	public function getBaby() {
		if ($this->baby===NULL) {
			$this->baby = $this->createBaby();
		}
		return $this->baby;
	}
	
	protected function createBaby() {
		return new \com\microsoft\wc\thing\pregnancy\Baby();
	}

	public function setBaby($baby) {
		$this->baby = $this->validateBaby($baby);
	}

	protected function validateBaby($baby) {
		if ( ! $baby instanceof \com\microsoft\wc\thing\pregnancy\Baby  && ! is_null($baby) ) {
			$baby = new \com\microsoft\wc\thing\pregnancy\Baby ($baby);
		}
	
		return $baby;
	}

	public function getNote() {
		if ($this->note===NULL) {
			$this->note = $this->createNote();
		}
		return $this->note;
	}
	
	protected function createNote() {
		return '';
	}

	public function setNote($note) {
		$this->note = $this->validateNote($note);
	}

	protected function validateNote($note) {
		if ( ! is_string($note) && ! is_null($note) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'note', 'string'));
		}
	
		return $note;
	}
} // end class Delivery
