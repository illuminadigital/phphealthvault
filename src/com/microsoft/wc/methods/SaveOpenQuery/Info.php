<?php
namespace com\microsoft\wc\methods\SaveOpenQuery;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SaveOpenQuery", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the SaveOpenQuery method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="integer", name="expires")
	 */
	protected $expires;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128", name="pin-code")
	 */
	protected $pinCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128", name="note")
	 */
	protected $note;

	/**
	 * @XmlText	(type="string", name="method")
	 */
	protected $method;

	/**
	 * @XmlText	(type="integer", name="method-version")
	 */
	protected $methodVersion;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="record-id")
	 */
	protected $recordId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Iso6391", name="language")
	 */
	protected $language;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Iso3166", name="country")
	 */
	protected $country;

	/**
	 * @XmlText	(type="string", name="final-xsl")
	 */
	protected $finalXsl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\request\Info", name="info")
	 */
	protected $info;

	public function __construct($expires = NULL, $pinCode = NULL, $note = NULL, $method = NULL, $methodVersion = NULL, $recordId = NULL, $language = NULL, $country = NULL, $finalXsl = NULL, $info = NULL) {
		$this->expires = ($expires===NULL) ? NULL : $this->validateExpires($expires);
		$this->pinCode = ($pinCode===NULL) ? NULL : $this->validatePinCode($pinCode);
		$this->note = ($note===NULL) ? NULL : $this->validateNote($note);
		$this->method = ($method===NULL) ? NULL : $this->validateMethod($method);
		$this->methodVersion = ($methodVersion===NULL) ? NULL : $this->validateMethodVersion($methodVersion);
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->finalXsl = ($finalXsl===NULL) ? NULL : $this->validateFinalXsl($finalXsl);
		$this->info = ($info===NULL) ? NULL : $this->validateInfo($info);
	}

	public function getExpires($autoCreate = TRUE) {
		if ($this->expires===NULL && $autoCreate && ! isset($this->_overrides['expires']) ) {
			$this->expires = $this->createExpires();
		}
		return $this->expires;
	}
	
	protected function createExpires() {
		return 0;
	}

	public function setExpires($expires) {
		$this->expires = $this->validateExpires($expires);
	}

	protected function validateExpires($expires) {
		$isValid = FALSE;
		if ( is_integer($expires) ) {
			$isValid = TRUE;
		}
		else if ( is_null($expires) ) {
			$isValid = TRUE;
		}
		else if ( $expires == ($castVar = (integer) $expires) ) {
			$isValid = TRUE;
			$expires = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'expires', 'integer'));
		}
	
		return $expires;
	}

	public function getPinCode($autoCreate = TRUE) {
		if ($this->pinCode===NULL && $autoCreate && ! isset($this->_overrides['pinCode']) ) {
			$this->pinCode = $this->createPinCode();
		}
		return $this->pinCode;
	}
	
	protected function createPinCode() {
		return new \com\microsoft\wc\types\String128();
	}

	public function setPinCode($pinCode) {
		$this->pinCode = $this->validatePinCode($pinCode);
	}

	protected function validatePinCode($pinCode) {
		if ( $pinCode === FALSE ) {
			$this->_overrides['pinCode'] = TRUE;
			return NULL;
		}

		if ( ! $pinCode instanceof \com\microsoft\wc\types\String128  && ! is_null($pinCode) ) {
			$pinCode = new \com\microsoft\wc\types\String128 ($pinCode);
		}

		unset ($this->_overrides['pinCode']);
	
		return $pinCode;
	}

	public function getNote($autoCreate = TRUE) {
		if ($this->note===NULL && $autoCreate && ! isset($this->_overrides['note']) ) {
			$this->note = $this->createNote();
		}
		return $this->note;
	}
	
	protected function createNote() {
		return new \com\microsoft\wc\types\String128();
	}

	public function setNote($note) {
		$this->note = $this->validateNote($note);
	}

	protected function validateNote($note) {
		if ( $note === FALSE ) {
			$this->_overrides['note'] = TRUE;
			return NULL;
		}

		if ( ! $note instanceof \com\microsoft\wc\types\String128  && ! is_null($note) ) {
			$note = new \com\microsoft\wc\types\String128 ($note);
		}

		unset ($this->_overrides['note']);
	
		return $note;
	}

	public function getMethod($autoCreate = TRUE) {
		if ($this->method===NULL && $autoCreate && ! isset($this->_overrides['method']) ) {
			$this->method = $this->createMethod();
		}
		return $this->method;
	}
	
	protected function createMethod() {
		return '';
	}

	public function setMethod($method) {
		$this->method = $this->validateMethod($method);
	}

	protected function validateMethod($method) {
		if (!is_string($method)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'method', 'string'));
		}
	
		return $method;
	}

	public function getMethodVersion($autoCreate = TRUE) {
		if ($this->methodVersion===NULL && $autoCreate && ! isset($this->_overrides['methodVersion']) ) {
			$this->methodVersion = $this->createMethodVersion();
		}
		return $this->methodVersion;
	}
	
	protected function createMethodVersion() {
		return 0;
	}

	public function setMethodVersion($methodVersion) {
		$this->methodVersion = $this->validateMethodVersion($methodVersion);
	}

	protected function validateMethodVersion($methodVersion) {
		$isValid = FALSE;
		if ( is_integer($methodVersion) ) {
			$isValid = TRUE;
		}
		else if ( $methodVersion == ($castVar = (integer) $methodVersion) ) {
			$isValid = TRUE;
			$methodVersion = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'methodVersion', 'integer'));
		}
	
		return $methodVersion;
	}

	public function getRecordId($autoCreate = TRUE) {
		if ($this->recordId===NULL && $autoCreate && ! isset($this->_overrides['recordId']) ) {
			$this->recordId = $this->createRecordId();
		}
		return $this->recordId;
	}
	
	protected function createRecordId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setRecordId($recordId) {
		$this->recordId = $this->validateRecordId($recordId);
	}

	protected function validateRecordId($recordId) {
		if ( $recordId === FALSE ) {
			$this->_overrides['recordId'] = TRUE;
			return NULL;
		}

		if ( ! $recordId instanceof \com\microsoft\wc\types\Guid  && ! is_null($recordId) ) {
			$recordId = new \com\microsoft\wc\types\Guid ($recordId);
		}

		unset ($this->_overrides['recordId']);
	
		return $recordId;
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new \com\microsoft\wc\types\Iso6391();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( $language === FALSE ) {
			$this->_overrides['language'] = TRUE;
			return NULL;
		}

		if ( ! $language instanceof \com\microsoft\wc\types\Iso6391  && ! is_null($language) ) {
			$language = new \com\microsoft\wc\types\Iso6391 ($language);
		}

		unset ($this->_overrides['language']);
	
		return $language;
	}

	public function getCountry($autoCreate = TRUE) {
		if ($this->country===NULL && $autoCreate && ! isset($this->_overrides['country']) ) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new \com\microsoft\wc\types\Iso3166();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( $country === FALSE ) {
			$this->_overrides['country'] = TRUE;
			return NULL;
		}

		if ( ! $country instanceof \com\microsoft\wc\types\Iso3166  && ! is_null($country) ) {
			$country = new \com\microsoft\wc\types\Iso3166 ($country);
		}

		unset ($this->_overrides['country']);
	
		return $country;
	}

	public function getFinalXsl($autoCreate = TRUE) {
		if ($this->finalXsl===NULL && $autoCreate && ! isset($this->_overrides['finalXsl']) ) {
			$this->finalXsl = $this->createFinalXsl();
		}
		return $this->finalXsl;
	}
	
	protected function createFinalXsl() {
		return '';
	}

	public function setFinalXsl($finalXsl) {
		$this->finalXsl = $this->validateFinalXsl($finalXsl);
	}

	protected function validateFinalXsl($finalXsl) {
		if ( ! is_string($finalXsl) && ! is_null($finalXsl) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'finalXsl', 'string'));
		}
	
		return $finalXsl;
	}

	public function getInfo($autoCreate = TRUE) {
		if ($this->info===NULL && $autoCreate && ! isset($this->_overrides['info']) ) {
			$this->info = $this->createInfo();
		}
		return $this->info;
	}
	
	protected function createInfo() {
		return new \com\microsoft\wc\request\Info();
	}

	public function setInfo($info) {
		$this->info = $this->validateInfo($info);
	}

	protected function validateInfo($info) {
		if ( ! $info instanceof \com\microsoft\wc\request\Info ) {
			$info = new \com\microsoft\wc\request\Info ($info);
		}
	
		return $info;
	}
} // end class Info
