<?php
namespace com\microsoft\wc\thing\pregnancy;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.pregnancy", prefix="")
 * })
 * @XmlEntity	(xml="pregnancy")
 */
class Pregnancy extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Record of a pregnancy.
	 */

	const ID = '46d485cf-2b84-429d-9159-83152ba801f4';
	const NAME = 'Pregnancy';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="due-date")
	 */
	protected $dueDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Date", name="last-menstrual-period")
	 */
	protected $lastMenstrualPeriod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="conception-method")
	 */
	protected $conceptionMethod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="fetus-count")
	 */
	protected $fetusCount;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveInt", name="gestational-age")
	 */
	protected $gestationalAge;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\pregnancy\Delivery", collection="true", name="delivery")
	 */
	protected $delivery;

	public function __construct($dueDate = NULL, $lastMenstrualPeriod = NULL, $conceptionMethod = NULL, $fetusCount = NULL, $gestationalAge = NULL, $delivery = NULL) {
		$this->dueDate = ($dueDate===NULL) ? NULL : $this->validateDueDate($dueDate);
		$this->lastMenstrualPeriod = ($lastMenstrualPeriod===NULL) ? NULL : $this->validateLastMenstrualPeriod($lastMenstrualPeriod);
		$this->conceptionMethod = ($conceptionMethod===NULL) ? NULL : $this->validateConceptionMethod($conceptionMethod);
		$this->fetusCount = ($fetusCount===NULL) ? NULL : $this->validateFetusCount($fetusCount);
		$this->gestationalAge = ($gestationalAge===NULL) ? NULL : $this->validateGestationalAge($gestationalAge);
		$this->delivery = ($delivery===NULL) ? NULL : $this->validateDelivery($delivery);
	}

	public function getDueDate($autoCreate = TRUE) {
		if ($this->dueDate===NULL && $autoCreate && ! isset($this->_overrides['dueDate']) ) {
			$this->dueDate = $this->createDueDate();
		}
		return $this->dueDate;
	}
	
	protected function createDueDate() {
		return new \com\microsoft\wc\dates\ApproxDate();
	}

	public function setDueDate($dueDate) {
		$this->dueDate = $this->validateDueDate($dueDate);
	}

	protected function validateDueDate($dueDate) {
		if ( $dueDate === FALSE ) {
			$this->_overrides['dueDate'] = TRUE;
			return NULL;
		}

		if ( ! $dueDate instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($dueDate) ) {
			$dueDate = new \com\microsoft\wc\dates\ApproxDate ($dueDate);
		}

		unset ($this->_overrides['dueDate']);
	
		return $dueDate;
	}

	public function getLastMenstrualPeriod($autoCreate = TRUE) {
		if ($this->lastMenstrualPeriod===NULL && $autoCreate && ! isset($this->_overrides['lastMenstrualPeriod']) ) {
			$this->lastMenstrualPeriod = $this->createLastMenstrualPeriod();
		}
		return $this->lastMenstrualPeriod;
	}
	
	protected function createLastMenstrualPeriod() {
		return new \com\microsoft\wc\dates\Date();
	}

	public function setLastMenstrualPeriod($lastMenstrualPeriod) {
		$this->lastMenstrualPeriod = $this->validateLastMenstrualPeriod($lastMenstrualPeriod);
	}

	protected function validateLastMenstrualPeriod($lastMenstrualPeriod) {
		if ( $lastMenstrualPeriod === FALSE ) {
			$this->_overrides['lastMenstrualPeriod'] = TRUE;
			return NULL;
		}

		if ( ! $lastMenstrualPeriod instanceof \com\microsoft\wc\dates\Date  && ! is_null($lastMenstrualPeriod) ) {
			$lastMenstrualPeriod = new \com\microsoft\wc\dates\Date ($lastMenstrualPeriod);
		}

		unset ($this->_overrides['lastMenstrualPeriod']);
	
		return $lastMenstrualPeriod;
	}

	public function getConceptionMethod($autoCreate = TRUE) {
		if ($this->conceptionMethod===NULL && $autoCreate && ! isset($this->_overrides['conceptionMethod']) ) {
			$this->conceptionMethod = $this->createConceptionMethod();
		}
		return $this->conceptionMethod;
	}
	
	protected function createConceptionMethod() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setConceptionMethod($conceptionMethod) {
		$this->conceptionMethod = $this->validateConceptionMethod($conceptionMethod);
	}

	protected function validateConceptionMethod($conceptionMethod) {
		if ( $conceptionMethod === FALSE ) {
			$this->_overrides['conceptionMethod'] = TRUE;
			return NULL;
		}

		if ( ! $conceptionMethod instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($conceptionMethod) ) {
			$conceptionMethod = new \com\microsoft\wc\types\CodableValue ($conceptionMethod);
		}

		unset ($this->_overrides['conceptionMethod']);
	
		return $conceptionMethod;
	}

	public function getFetusCount($autoCreate = TRUE) {
		if ($this->fetusCount===NULL && $autoCreate && ! isset($this->_overrides['fetusCount']) ) {
			$this->fetusCount = $this->createFetusCount();
		}
		return $this->fetusCount;
	}
	
	protected function createFetusCount() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setFetusCount($fetusCount) {
		$this->fetusCount = $this->validateFetusCount($fetusCount);
	}

	protected function validateFetusCount($fetusCount) {
		if ( $fetusCount === FALSE ) {
			$this->_overrides['fetusCount'] = TRUE;
			return NULL;
		}

		if ( ! $fetusCount instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($fetusCount) ) {
			$fetusCount = new \com\microsoft\wc\thing\types\NonNegativeInt ($fetusCount);
		}

		unset ($this->_overrides['fetusCount']);
	
		return $fetusCount;
	}

	public function getGestationalAge($autoCreate = TRUE) {
		if ($this->gestationalAge===NULL && $autoCreate && ! isset($this->_overrides['gestationalAge']) ) {
			$this->gestationalAge = $this->createGestationalAge();
		}
		return $this->gestationalAge;
	}
	
	protected function createGestationalAge() {
		return new \com\microsoft\wc\thing\types\PositiveInt();
	}

	public function setGestationalAge($gestationalAge) {
		$this->gestationalAge = $this->validateGestationalAge($gestationalAge);
	}

	protected function validateGestationalAge($gestationalAge) {
		if ( $gestationalAge === FALSE ) {
			$this->_overrides['gestationalAge'] = TRUE;
			return NULL;
		}

		if ( ! $gestationalAge instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($gestationalAge) ) {
			$gestationalAge = new \com\microsoft\wc\thing\types\PositiveInt ($gestationalAge);
		}

		unset ($this->_overrides['gestationalAge']);
	
		return $gestationalAge;
	}

	public function getDelivery($autoCreate = TRUE) {
		if ($this->delivery===NULL && $autoCreate && ! isset($this->_overrides['delivery']) ) {
			$this->delivery = $this->createDelivery();
		}
		return $this->delivery;
	}
	
	protected function createDelivery() {
		return array();
	}

	public function setDelivery($delivery) {
		$this->delivery = $this->validateDelivery($delivery);
	}

	protected function validateDelivery($delivery) {
		if ( $delivery === FALSE ) {
			$this->_overrides['delivery'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($delivery) && ! is_null($delivery) ) {
			$delivery = array($delivery);
		}

		unset ($this->_overrides['delivery']);
		$count = count($delivery);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'delivery', 0));
		}
		foreach ($delivery as $entry) {
			if (!($entry instanceof Delivery)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'delivery', 'Delivery'));
			}
		}
	
		return $delivery;
	}

	public function addDelivery($delivery) {
		$this->delivery[] = $delivery;
	}
} // end class Pregnancy
