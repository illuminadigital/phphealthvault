<?php
namespace com\microsoft\wc\thing\inhaler;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.inhaler", prefix="")
 * })
 * @XmlEntity	(xml="asthma-inhaler")
 */
class AsthmaInhaler extends \com\microsoft\wc\thing\Thing {
	/**
	 * Any inhaler unit used to treat asthma.
	 * The inhaler may or may not have a device component.Each new canister should have a new inhaler thing, evenif there is a containing device that is reusable. Changes in regimen (min/max doses per day) should alsocause a new thing to be created.
	 */

	const ID = 'ff9ce191-2096-47d8-9300-5469a9883746';
	const NAME = 'Asthma Inhaler';

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

	public function getDrug() {
		if ($this->drug===NULL) {
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

	public function getStrength() {
		if ($this->strength===NULL) {
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
		if ( ! $strength instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($strength) ) {
			$strength = new \com\microsoft\wc\types\CodableValue ($strength);
		}
	
		return $strength;
	}

	public function getPurpose() {
		if ($this->purpose===NULL) {
			$this->purpose = $this->createPurpose();
		}
		return $this->purpose;
	}
	
	protected function createPurpose() {
		return new \com\microsoft\wc\thing\inhaler\Purpose();
	}

	public function setPurpose($purpose) {
		$this->purpose = $this->validatePurpose($purpose);
	}

	protected function validatePurpose($purpose) {
		if ( ! $purpose instanceof \com\microsoft\wc\thing\inhaler\Purpose  && ! is_null($purpose) ) {
			$purpose = new \com\microsoft\wc\thing\inhaler\Purpose ($purpose);
		}
	
		return $purpose;
	}

	public function getStartDate() {
		if ($this->startDate===NULL) {
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

	public function getStopDate() {
		if ($this->stopDate===NULL) {
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
		if ( ! $stopDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($stopDate) ) {
			$stopDate = new \com\microsoft\wc\dates\ApproxDateTime ($stopDate);
		}
	
		return $stopDate;
	}

	public function getExpirationDate() {
		if ($this->expirationDate===NULL) {
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
		if ( ! $expirationDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($expirationDate) ) {
			$expirationDate = new \com\microsoft\wc\dates\ApproxDateTime ($expirationDate);
		}
	
		return $expirationDate;
	}

	public function getDeviceId() {
		if ($this->deviceId===NULL) {
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

	public function getInitialDoses() {
		if ($this->initialDoses===NULL) {
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
		if ( ! is_integer($initialDoses) && ! is_null($initialDoses) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'initialDoses', 'integer'));
		}
	
		return $initialDoses;
	}

	public function getMinDailyDoses() {
		if ($this->minDailyDoses===NULL) {
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
		if ( ! is_integer($minDailyDoses) && ! is_null($minDailyDoses) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'minDailyDoses', 'integer'));
		}
	
		return $minDailyDoses;
	}

	public function getMaxDailyDoses() {
		if ($this->maxDailyDoses===NULL) {
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
		if ( ! is_integer($maxDailyDoses) && ! is_null($maxDailyDoses) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maxDailyDoses', 'integer'));
		}
	
		return $maxDailyDoses;
	}

	public function getCanAlert() {
		if ($this->canAlert===NULL) {
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

	public function getAlert() {
		if ($this->alert===NULL) {
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
		if ( ! $alert instanceof \com\microsoft\wc\thing\inhaler\Alert  && ! is_null($alert) ) {
			$alert = new \com\microsoft\wc\thing\inhaler\Alert ($alert);
		}
		$count = count($alert);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'alert', 0));
		}
		foreach ($alert as $entry) {
			if (!($entry instanceof Alert)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'alert', 'alert'));
			}
		}
	
		return $alert;
	}

	public function addAlert($alert) {
		$this->alert[] = $alert;
	}
} // end class AsthmaInhaler
