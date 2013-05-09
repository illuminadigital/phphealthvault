<?php
namespace com\microsoft\wc\thing\inhaler;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.inhaler", prefix="")
 * })
 * @XmlEntity	(xml="asthma-inhaler")
 */
class AsthmaInhaler extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Any inhaler unit used to treat asthma.
	 * The inhaler may or may not have a device component.Each new canister should have a new inhaler thing, evenif there is a containing device that is reusable. Changes in regimen (min/max doses per day) should alsocause a new thing to be created.
	 */

	const ID = 'ff9ce191-2096-47d8-9300-5469a9883746';
	const NAME = 'Asthma Inhaler';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="drug")
	 */
	protected $drug;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="strength")
	 */
	protected $strength;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\inhaler\Purpose", name="purpose")
	 */
	protected $purpose;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="start-date")
	 */
	protected $startDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="stop-date")
	 */
	protected $stopDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="expiration-date")
	 */
	protected $expirationDate;

	/**
	 * @XmlText	(type="string", name="device-id")
	 */
	protected $deviceId;

	/**
	 * @XmlText	(type="integer", name="initial-doses")
	 */
	protected $initialDoses;

	/**
	 * @XmlText	(type="integer", name="min-daily-doses")
	 */
	protected $minDailyDoses;

	/**
	 * @XmlText	(type="integer", name="max-daily-doses")
	 */
	protected $maxDailyDoses;

	/**
	 * @XmlText	(type="boolean", name="can-alert")
	 */
	protected $canAlert;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\inhaler\Alert", collection="true", name="alert")
	 */
	protected $alert;

	public function __construct($drug = NULL, $strength = NULL, $purpose = NULL, $startDate = NULL, $stopDate = NULL, $expirationDate = NULL, $deviceId = NULL, $initialDoses = NULL, $minDailyDoses = NULL, $maxDailyDoses = NULL, $canAlert = NULL, $alert = NULL) {
		$this->drug = ($drug===NULL) ? NULL : $this->validateDrug($drug);
		$this->strength = ($strength===NULL) ? NULL : $this->validateStrength($strength);
		$this->purpose = ($purpose===NULL) ? NULL : $this->validatePurpose($purpose);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->stopDate = ($stopDate===NULL) ? NULL : $this->validateStopDate($stopDate);
		$this->expirationDate = ($expirationDate===NULL) ? NULL : $this->validateExpirationDate($expirationDate);
		$this->deviceId = ($deviceId===NULL) ? NULL : $this->validateDeviceId($deviceId);
		$this->initialDoses = ($initialDoses===NULL) ? NULL : $this->validateInitialDoses($initialDoses);
		$this->minDailyDoses = ($minDailyDoses===NULL) ? NULL : $this->validateMinDailyDoses($minDailyDoses);
		$this->maxDailyDoses = ($maxDailyDoses===NULL) ? NULL : $this->validateMaxDailyDoses($maxDailyDoses);
		$this->canAlert = ($canAlert===NULL) ? NULL : $this->validateCanAlert($canAlert);
		$this->alert = ($alert===NULL) ? NULL : $this->validateAlert($alert);
	}

	public function getDrug($autoCreate = TRUE) {
		if ($this->drug===NULL && $autoCreate && ! isset($this->_overrides['drug']) ) {
			$this->drug = $this->createDrug();
		}
		return $this->drug;
	}
	
	protected function createDrug() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDrug($drug) {
		$this->drug = $this->validateDrug($drug);
	}

	protected function validateDrug($drug) {
		if ( ! $drug instanceof \com\microsoft\wc\types\CodableValue ) {
			$drug = new \com\microsoft\wc\types\CodableValue ($drug);
		}
	
		return $drug;
	}

	public function getStrength($autoCreate = TRUE) {
		if ($this->strength===NULL && $autoCreate && ! isset($this->_overrides['strength']) ) {
			$this->strength = $this->createStrength();
		}
		return $this->strength;
	}
	
	protected function createStrength() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStrength($strength) {
		$this->strength = $this->validateStrength($strength);
	}

	protected function validateStrength($strength) {
		if ( $strength === FALSE ) {
			$this->_overrides['strength'] = TRUE;
			return NULL;
		}

		if ( ! $strength instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($strength) ) {
			$strength = new \com\microsoft\wc\types\CodableValue ($strength);
		}

		unset ($this->_overrides['strength']);
	
		return $strength;
	}

	public function getPurpose($autoCreate = TRUE) {
		if ($this->purpose===NULL && $autoCreate && ! isset($this->_overrides['purpose']) ) {
			$this->purpose = $this->createPurpose();
		}
		return $this->purpose;
	}
	
	protected function createPurpose() {
		return NULL;
	}

	public function setPurpose($purpose) {
		$this->purpose = $this->validatePurpose($purpose);
	}

	protected function validatePurpose($purpose) {
	
		return $purpose;
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
		if ( $stopDate === FALSE ) {
			$this->_overrides['stopDate'] = TRUE;
			return NULL;
		}

		if ( ! $stopDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($stopDate) ) {
			$stopDate = new \com\microsoft\wc\dates\ApproxDateTime ($stopDate);
		}

		unset ($this->_overrides['stopDate']);
	
		return $stopDate;
	}

	public function getExpirationDate($autoCreate = TRUE) {
		if ($this->expirationDate===NULL && $autoCreate && ! isset($this->_overrides['expirationDate']) ) {
			$this->expirationDate = $this->createExpirationDate();
		}
		return $this->expirationDate;
	}
	
	protected function createExpirationDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setExpirationDate($expirationDate) {
		$this->expirationDate = $this->validateExpirationDate($expirationDate);
	}

	protected function validateExpirationDate($expirationDate) {
		if ( $expirationDate === FALSE ) {
			$this->_overrides['expirationDate'] = TRUE;
			return NULL;
		}

		if ( ! $expirationDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($expirationDate) ) {
			$expirationDate = new \com\microsoft\wc\dates\ApproxDateTime ($expirationDate);
		}

		unset ($this->_overrides['expirationDate']);
	
		return $expirationDate;
	}

	public function getDeviceId($autoCreate = TRUE) {
		if ($this->deviceId===NULL && $autoCreate && ! isset($this->_overrides['deviceId']) ) {
			$this->deviceId = $this->createDeviceId();
		}
		return $this->deviceId;
	}
	
	protected function createDeviceId() {
		return '';
	}

	public function setDeviceId($deviceId) {
		$this->deviceId = $this->validateDeviceId($deviceId);
	}

	protected function validateDeviceId($deviceId) {
		if ( ! is_string($deviceId) && ! is_null($deviceId) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'deviceId', 'string'));
		}
	
		return $deviceId;
	}

	public function getInitialDoses($autoCreate = TRUE) {
		if ($this->initialDoses===NULL && $autoCreate && ! isset($this->_overrides['initialDoses']) ) {
			$this->initialDoses = $this->createInitialDoses();
		}
		return $this->initialDoses;
	}
	
	protected function createInitialDoses() {
		return 0;
	}

	public function setInitialDoses($initialDoses) {
		$this->initialDoses = $this->validateInitialDoses($initialDoses);
	}

	protected function validateInitialDoses($initialDoses) {
		$isValid = FALSE;
		if ( is_integer($initialDoses) ) {
			$isValid = TRUE;
		}
		else if ( is_null($initialDoses) ) {
			$isValid = TRUE;
		}
		else if ( $initialDoses == ($castVar = (integer) $initialDoses) ) {
			$isValid = TRUE;
			$initialDoses = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'initialDoses', 'integer'));
		}
	
		return $initialDoses;
	}

	public function getMinDailyDoses($autoCreate = TRUE) {
		if ($this->minDailyDoses===NULL && $autoCreate && ! isset($this->_overrides['minDailyDoses']) ) {
			$this->minDailyDoses = $this->createMinDailyDoses();
		}
		return $this->minDailyDoses;
	}
	
	protected function createMinDailyDoses() {
		return 0;
	}

	public function setMinDailyDoses($minDailyDoses) {
		$this->minDailyDoses = $this->validateMinDailyDoses($minDailyDoses);
	}

	protected function validateMinDailyDoses($minDailyDoses) {
		$isValid = FALSE;
		if ( is_integer($minDailyDoses) ) {
			$isValid = TRUE;
		}
		else if ( is_null($minDailyDoses) ) {
			$isValid = TRUE;
		}
		else if ( $minDailyDoses == ($castVar = (integer) $minDailyDoses) ) {
			$isValid = TRUE;
			$minDailyDoses = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'minDailyDoses', 'integer'));
		}
	
		return $minDailyDoses;
	}

	public function getMaxDailyDoses($autoCreate = TRUE) {
		if ($this->maxDailyDoses===NULL && $autoCreate && ! isset($this->_overrides['maxDailyDoses']) ) {
			$this->maxDailyDoses = $this->createMaxDailyDoses();
		}
		return $this->maxDailyDoses;
	}
	
	protected function createMaxDailyDoses() {
		return 0;
	}

	public function setMaxDailyDoses($maxDailyDoses) {
		$this->maxDailyDoses = $this->validateMaxDailyDoses($maxDailyDoses);
	}

	protected function validateMaxDailyDoses($maxDailyDoses) {
		$isValid = FALSE;
		if ( is_integer($maxDailyDoses) ) {
			$isValid = TRUE;
		}
		else if ( is_null($maxDailyDoses) ) {
			$isValid = TRUE;
		}
		else if ( $maxDailyDoses == ($castVar = (integer) $maxDailyDoses) ) {
			$isValid = TRUE;
			$maxDailyDoses = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maxDailyDoses', 'integer'));
		}
	
		return $maxDailyDoses;
	}

	public function getCanAlert($autoCreate = TRUE) {
		if ($this->canAlert===NULL && $autoCreate && ! isset($this->_overrides['canAlert']) ) {
			$this->canAlert = $this->createCanAlert();
		}
		return $this->canAlert;
	}
	
	protected function createCanAlert() {
		return FALSE;
	}

	public function setCanAlert($canAlert) {
		$this->canAlert = $this->validateCanAlert($canAlert);
	}

	protected function validateCanAlert($canAlert) {
		if ( ! is_bool($canAlert) && ! is_null($canAlert) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'canAlert', 'boolean'));
		}
	
		return $canAlert;
	}

	public function getAlert($autoCreate = TRUE) {
		if ($this->alert===NULL && $autoCreate && ! isset($this->_overrides['alert']) ) {
			$this->alert = $this->createAlert();
		}
		return $this->alert;
	}
	
	protected function createAlert() {
		return array();
	}

	public function setAlert($alert) {
		$this->alert = $this->validateAlert($alert);
	}

	protected function validateAlert($alert) {
		if ( $alert === FALSE ) {
			$this->_overrides['alert'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($alert) && ! is_null($alert) ) {
			$alert = array($alert);
		}

		unset ($this->_overrides['alert']);
		$count = count($alert);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'alert', 0));
		}
		if ( ! empty($alert) ) {
			foreach ($alert as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\inhaler\Alert )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'alert', 'alert'));
				}
			}
		}
	
		return $alert;
	}

	public function addAlert($alert) {
		$this->alert[] = $alert;
	}
} // end class AsthmaInhaler
