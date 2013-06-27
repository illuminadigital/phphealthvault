<?php
namespace com\microsoft\wc\request;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.request", prefix="")
 * })
 * @XmlEntity	(xml="Header")
 */
class Header {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="method")
	 */
	protected $method;

	/**
	 * @XmlText	(type="integer", name="method-version")
	 */
	protected $methodVersion;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="target-person-id")
	 */
	protected $targetPersonId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="record-id")
	 */
	protected $recordId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\request\AuthenticatedSessionInfo", name="auth-session")
	 */
	protected $authSession;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnwz64", name="language")
	 */
	protected $language;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnwz64", name="country")
	 */
	protected $country;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnwz64", name="culture-code")
	 */
	protected $cultureCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\request\Xsl", name="final-xsl")
	 */
	protected $finalXsl;

	/**
	 * @XmlText	(type="string", name="msg-time")
	 */
	protected $msgTime;

	/**
	 * @XmlText	(type="integer", name="msg-ttl")
	 */
	protected $msgTtl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="version")
	 */
	protected $version;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HashFinalized", name="info-hash")
	 */
	protected $infoHash;

	public function __construct($method = NULL, $methodVersion = NULL, $targetPersonId = NULL, $recordId = NULL, $appId = NULL, $authSession = NULL, $language = NULL, $country = NULL, $cultureCode = NULL, $finalXsl = NULL, $msgTime = NULL, $msgTtl = NULL, $version = NULL, $infoHash = NULL) {
		$this->method = ($method===NULL) ? NULL : $this->validateMethod($method);
		$this->methodVersion = ($methodVersion===NULL) ? NULL : $this->validateMethodVersion($methodVersion);
		$this->targetPersonId = ($targetPersonId===NULL) ? NULL : $this->validateTargetPersonId($targetPersonId);
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->authSession = ($authSession===NULL) ? NULL : $this->validateAuthSession($authSession);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->cultureCode = ($cultureCode===NULL) ? NULL : $this->validateCultureCode($cultureCode);
		$this->finalXsl = ($finalXsl===NULL) ? NULL : $this->validateFinalXsl($finalXsl);
		$this->msgTime = ($msgTime===NULL) ? NULL : $this->validateMsgTime($msgTime);
		$this->msgTtl = ($msgTtl===NULL) ? NULL : $this->validateMsgTtl($msgTtl);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
		$this->infoHash = ($infoHash===NULL) ? NULL : $this->validateInfoHash($infoHash);
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

	public function getTargetPersonId($autoCreate = TRUE) {
		if ($this->targetPersonId===NULL && $autoCreate && ! isset($this->_overrides['targetPersonId']) ) {
			$this->targetPersonId = $this->createTargetPersonId();
		}
		return $this->targetPersonId;
	}
	
	protected function createTargetPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setTargetPersonId($targetPersonId) {
		$this->targetPersonId = $this->validateTargetPersonId($targetPersonId);
	}

	protected function validateTargetPersonId($targetPersonId) {
		if ( $targetPersonId === FALSE ) {
			$this->_overrides['targetPersonId'] = TRUE;
			return NULL;
		}

		if ( ! $targetPersonId instanceof \com\microsoft\wc\types\Guid  && ! is_null($targetPersonId) ) {
			$targetPersonId = new \com\microsoft\wc\types\Guid ($targetPersonId);
		}

		unset ($this->_overrides['targetPersonId']);
	
		return $targetPersonId;
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

	public function getAppId($autoCreate = TRUE) {
		if ($this->appId===NULL && $autoCreate && ! isset($this->_overrides['appId']) ) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof \com\microsoft\wc\types\Guid ) {
			$appId = new \com\microsoft\wc\types\Guid ($appId);
		}
	
		return $appId;
	}

	public function getAuthSession($autoCreate = TRUE) {
		if ($this->authSession===NULL && $autoCreate && ! isset($this->_overrides['authSession']) ) {
			$this->authSession = $this->createAuthSession();
		}
		return $this->authSession;
	}
	
	protected function createAuthSession() {
		return new \com\microsoft\wc\request\AuthenticatedSessionInfo();
	}

	public function setAuthSession($authSession) {
		$this->authSession = $this->validateAuthSession($authSession);
	}

	protected function validateAuthSession($authSession) {
		if ( ! $authSession instanceof \com\microsoft\wc\request\AuthenticatedSessionInfo ) {
			$authSession = new \com\microsoft\wc\request\AuthenticatedSessionInfo ($authSession);
		}
	
		return $authSession;
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new \com\microsoft\wc\types\Stringnwz64();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( $language === FALSE ) {
			$this->_overrides['language'] = TRUE;
			return NULL;
		}

		if ( ! $language instanceof \com\microsoft\wc\types\Stringnwz64  && ! is_null($language) ) {
			$language = new \com\microsoft\wc\types\Stringnwz64 ($language);
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
		return new \com\microsoft\wc\types\Stringnwz64();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( $country === FALSE ) {
			$this->_overrides['country'] = TRUE;
			return NULL;
		}

		if ( ! $country instanceof \com\microsoft\wc\types\Stringnwz64  && ! is_null($country) ) {
			$country = new \com\microsoft\wc\types\Stringnwz64 ($country);
		}

		unset ($this->_overrides['country']);
	
		return $country;
	}

	public function getCultureCode($autoCreate = TRUE) {
		if ($this->cultureCode===NULL && $autoCreate && ! isset($this->_overrides['cultureCode']) ) {
			$this->cultureCode = $this->createCultureCode();
		}
		return $this->cultureCode;
	}
	
	protected function createCultureCode() {
		return new \com\microsoft\wc\types\Stringnwz64();
	}

	public function setCultureCode($cultureCode) {
		$this->cultureCode = $this->validateCultureCode($cultureCode);
	}

	protected function validateCultureCode($cultureCode) {
		if ( $cultureCode === FALSE ) {
			$this->_overrides['cultureCode'] = TRUE;
			return NULL;
		}

		if ( ! $cultureCode instanceof \com\microsoft\wc\types\Stringnwz64  && ! is_null($cultureCode) ) {
			$cultureCode = new \com\microsoft\wc\types\Stringnwz64 ($cultureCode);
		}

		unset ($this->_overrides['cultureCode']);
	
		return $cultureCode;
	}

	public function getFinalXsl($autoCreate = TRUE) {
		if ($this->finalXsl===NULL && $autoCreate && ! isset($this->_overrides['finalXsl']) ) {
			$this->finalXsl = $this->createFinalXsl();
		}
		return $this->finalXsl;
	}
	
	protected function createFinalXsl() {
		return new \com\microsoft\wc\request\Xsl();
	}

	public function setFinalXsl($finalXsl) {
		$this->finalXsl = $this->validateFinalXsl($finalXsl);
	}

	protected function validateFinalXsl($finalXsl) {
		if ( $finalXsl === FALSE ) {
			$this->_overrides['finalXsl'] = TRUE;
			return NULL;
		}

		if ( ! $finalXsl instanceof \com\microsoft\wc\request\Xsl  && ! is_null($finalXsl) ) {
			$finalXsl = new \com\microsoft\wc\request\Xsl ($finalXsl);
		}

		unset ($this->_overrides['finalXsl']);
	
		return $finalXsl;
	}

	public function getMsgTime($autoCreate = TRUE) {
		if ($this->msgTime===NULL && $autoCreate && ! isset($this->_overrides['msgTime']) ) {
			$this->msgTime = $this->createMsgTime();
		}
		return $this->msgTime;
	}
	
	protected function createMsgTime() {
		return NULL;
	}

	public function setMsgTime($msgTime) {
		$this->msgTime = $this->validateMsgTime($msgTime);
	}

	protected function validateMsgTime($msgTime) {
		if (!is_string($msgTime)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'msgTime', 'string'));
		}
	
		return $msgTime;
	}

	public function getMsgTtl($autoCreate = TRUE) {
		if ($this->msgTtl===NULL && $autoCreate && ! isset($this->_overrides['msgTtl']) ) {
			$this->msgTtl = $this->createMsgTtl();
		}
		return $this->msgTtl;
	}
	
	protected function createMsgTtl() {
		return NULL;
	}

	public function setMsgTtl($msgTtl) {
		$this->msgTtl = $this->validateMsgTtl($msgTtl);
	}

	protected function validateMsgTtl($msgTtl) {
		$isValid = FALSE;
		if ( is_integer($msgTtl) ) {
			$isValid = TRUE;
		}
		else if ( $msgTtl == ($castVar = (integer) $msgTtl) ) {
			$isValid = TRUE;
			$msgTtl = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'msgTtl', 'integer'));
		}
	
		return $msgTtl;
	}

	public function getVersion($autoCreate = TRUE) {
		if ($this->version===NULL && $autoCreate && ! isset($this->_overrides['version']) ) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( ! $version instanceof \com\microsoft\wc\types\Stringnz ) {
			$version = new \com\microsoft\wc\types\Stringnz ($version);
		}
	
		return $version;
	}

	public function getInfoHash($autoCreate = TRUE) {
		if ($this->infoHash===NULL && $autoCreate && ! isset($this->_overrides['infoHash']) ) {
			$this->infoHash = $this->createInfoHash();
		}
		return $this->infoHash;
	}
	
	protected function createInfoHash() {
		return new \com\microsoft\wc\types\HashFinalized();
	}

	public function setInfoHash($infoHash) {
		$this->infoHash = $this->validateInfoHash($infoHash);
	}

	protected function validateInfoHash($infoHash) {
		if ( $infoHash === FALSE ) {
			$this->_overrides['infoHash'] = TRUE;
			return NULL;
		}

		if ( ! $infoHash instanceof \com\microsoft\wc\types\HashFinalized  && ! is_null($infoHash) ) {
			$infoHash = new \com\microsoft\wc\types\HashFinalized ($infoHash);
		}

		unset ($this->_overrides['infoHash']);
	
		return $infoHash;
	}
} // end class Header
