<?php
namespace com\microsoft\wc\request;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\request\AuthenticatedSessionInfo;
use com\microsoft\wc\types\Iso6391;
use com\microsoft\wc\types\Iso3166;
use com\microsoft\wc\request\Xsl;
use com\microsoft\wc\types\Version;
use com\microsoft\wc\types\HashFinalized;

/**
 * @XmlEntity	(xml="Header")
 */
class Header {
	/**
	 */

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
	 * @XmlElement	(type="\com\microsoft\wc\types\Iso6391", name="language")
	 */
	protected $language;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Iso3166", name="country")
	 */
	protected $country;

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
	 * @XmlElement	(type="\com\microsoft\wc\types\Version", name="version")
	 */
	protected $version;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HashFinalized", name="info-hash")
	 */
	protected $infoHash;

	public function __construct($method = NULL, $methodVersion = NULL, $targetPersonId = NULL, $recordId = NULL, $appId = NULL, $authSession = NULL, $language = NULL, $country = NULL, $finalXsl = NULL, $msgTime = NULL, $msgTtl = NULL, $version = NULL, $infoHash = NULL) {
		$this->method = ($method===NULL) ? NULL : $this->validateMethod($method);
		$this->methodVersion = ($methodVersion===NULL) ? NULL : $this->validateMethodVersion($methodVersion);
		$this->targetPersonId = ($targetPersonId===NULL) ? NULL : $this->validateTargetPersonId($targetPersonId);
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->authSession = ($authSession===NULL) ? NULL : $this->validateAuthSession($authSession);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->finalXsl = ($finalXsl===NULL) ? NULL : $this->validateFinalXsl($finalXsl);
		$this->msgTime = ($msgTime===NULL) ? NULL : $this->validateMsgTime($msgTime);
		$this->msgTtl = ($msgTtl===NULL) ? NULL : $this->validateMsgTtl($msgTtl);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
		$this->infoHash = ($infoHash===NULL) ? NULL : $this->validateInfoHash($infoHash);
	}

	public function getMethod() {
		if ($this->method===NULL) {
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

	public function getMethodVersion() {
		if ($this->methodVersion===NULL) {
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
		if (!is_integer($methodVersion)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'methodVersion', 'integer'));
		}
	
		return $methodVersion;
	}

	public function getTargetPersonId() {
		if ($this->targetPersonId===NULL) {
			$this->targetPersonId = $this->createTargetPersonId();
		}
		return $this->targetPersonId;
	}
	
	protected function createTargetPersonId() {
		return new Guid();
	}

	public function setTargetPersonId($targetPersonId) {
		$this->targetPersonId = $this->validateTargetPersonId($targetPersonId);
	}

	protected function validateTargetPersonId($targetPersonId) {
		if ( ! $targetPersonId instanceof Guid  && ! is_null($targetPersonId) ) {
			$targetPersonId = new Guid ($targetPersonId);
		}
	
		return $targetPersonId;
	}

	public function getRecordId() {
		if ($this->recordId===NULL) {
			$this->recordId = $this->createRecordId();
		}
		return $this->recordId;
	}
	
	protected function createRecordId() {
		return new Guid();
	}

	public function setRecordId($recordId) {
		$this->recordId = $this->validateRecordId($recordId);
	}

	protected function validateRecordId($recordId) {
		if ( ! $recordId instanceof Guid  && ! is_null($recordId) ) {
			$recordId = new Guid ($recordId);
		}
	
		return $recordId;
	}

	public function getAppId() {
		if ($this->appId===NULL) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new Guid();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof Guid ) {
			$appId = new Guid ($appId);
		}
	
		return $appId;
	}

	public function getAuthSession() {
		if ($this->authSession===NULL) {
			$this->authSession = $this->createAuthSession();
		}
		return $this->authSession;
	}
	
	protected function createAuthSession() {
		return new AuthenticatedSessionInfo();
	}

	public function setAuthSession($authSession) {
		$this->authSession = $this->validateAuthSession($authSession);
	}

	protected function validateAuthSession($authSession) {
		if ( ! $authSession instanceof AuthenticatedSessionInfo ) {
			$authSession = new AuthenticatedSessionInfo ($authSession);
		}
	
		return $authSession;
	}

	public function getLanguage() {
		if ($this->language===NULL) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new Iso6391();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( ! $language instanceof Iso6391  && ! is_null($language) ) {
			$language = new Iso6391 ($language);
		}
	
		return $language;
	}

	public function getCountry() {
		if ($this->country===NULL) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new Iso3166();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( ! $country instanceof Iso3166  && ! is_null($country) ) {
			$country = new Iso3166 ($country);
		}
	
		return $country;
	}

	public function getFinalXsl() {
		if ($this->finalXsl===NULL) {
			$this->finalXsl = $this->createFinalXsl();
		}
		return $this->finalXsl;
	}
	
	protected function createFinalXsl() {
		return new Xsl();
	}

	public function setFinalXsl($finalXsl) {
		$this->finalXsl = $this->validateFinalXsl($finalXsl);
	}

	protected function validateFinalXsl($finalXsl) {
		if ( ! $finalXsl instanceof Xsl  && ! is_null($finalXsl) ) {
			$finalXsl = new Xsl ($finalXsl);
		}
	
		return $finalXsl;
	}

	public function getMsgTime() {
		if ($this->msgTime===NULL) {
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

	public function getMsgTtl() {
		if ($this->msgTtl===NULL) {
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
		if (!is_integer($msgTtl)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'msgTtl', 'integer'));
		}
	
		return $msgTtl;
	}

	public function getVersion() {
		if ($this->version===NULL) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return new Version();
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( ! $version instanceof Version ) {
			$version = new Version ($version);
		}
	
		return $version;
	}

	public function getInfoHash() {
		if ($this->infoHash===NULL) {
			$this->infoHash = $this->createInfoHash();
		}
		return $this->infoHash;
	}
	
	protected function createInfoHash() {
		return new HashFinalized();
	}

	public function setInfoHash($infoHash) {
		$this->infoHash = $this->validateInfoHash($infoHash);
	}

	protected function validateInfoHash($infoHash) {
		if ( ! $infoHash instanceof HashFinalized  && ! is_null($infoHash) ) {
			$infoHash = new HashFinalized ($infoHash);
		}
	
		return $infoHash;
	}
} // end class Header
