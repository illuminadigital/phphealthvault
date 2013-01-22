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
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="due-date")
	 */
	protected $dueDate;

	/**
	 * @XmlText	(type="string", name="last-menstrual-period")
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

	public function getDueDate() {
		if ($this->dueDate===NULL) {
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
		if ( ! $dueDate instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($dueDate) ) {
			$dueDate = new \com\microsoft\wc\dates\ApproxDate ($dueDate);
		}
	
		return $dueDate;
	}

	public function getLastMenstrualPeriod() {
		if ($this->lastMenstrualPeriod===NULL) {
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
		if ( ! $lastMenstrualPeriod instanceof \com\microsoft\wc\dates\Date  && ! is_null($lastMenstrualPeriod) ) {
			$lastMenstrualPeriod = new \com\microsoft\wc\dates\Date ($lastMenstrualPeriod);
		}
	
		return $lastMenstrualPeriod;
	}

	public function getConceptionMethod() {
		if ($this->conceptionMethod===NULL) {
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
		if ( ! $conceptionMethod instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($conceptionMethod) ) {
			$conceptionMethod = new \com\microsoft\wc\types\CodableValue ($conceptionMethod);
		}
	
		return $conceptionMethod;
	}

	public function getFetusCount() {
		if ($this->fetusCount===NULL) {
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
		if ( ! $fetusCount instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($fetusCount) ) {
			$fetusCount = new \com\microsoft\wc\thing\types\NonNegativeInt ($fetusCount);
		}
	
		return $fetusCount;
	}

	public function getGestationalAge() {
		if ($this->gestationalAge===NULL) {
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
		if ( ! $gestationalAge instanceof \com\microsoft\wc\thing\types\PositiveInt  && ! is_null($gestationalAge) ) {
			$gestationalAge = new \com\microsoft\wc\thing\types\PositiveInt ($gestationalAge);
		}
	
		return $gestationalAge;
	}

	public function getDelivery() {
		if ($this->delivery===NULL) {
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
		if ( ! $delivery instanceof \com\microsoft\wc\thing\pregnancy\Delivery  && ! is_null($delivery) ) {
			$delivery = new \com\microsoft\wc\thing\pregnancy\Delivery ($delivery);
		}
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
