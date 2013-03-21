<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="Audit")
 */
class Audit {
	/**
	 * Represents an audit trail of creations or updates or deletes to information in the Health service.
	 * The audit records when the operation happened, by which application, and by which person.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="timestamp")
	 */
	protected $timestamp;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\GuidAndName", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\GuidAndName", name="person-id")
	 */
	protected $personId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\GuidAndName", name="impersonator-id")
	 */
	protected $impersonatorId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\AccessAvenue", name="access-avenue")
	 */
	protected $accessAvenue;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\AuditAction", name="audit-action")
	 */
	protected $auditAction;

	public function __construct($timestamp = NULL, $appId = NULL, $personId = NULL, $impersonatorId = NULL, $accessAvenue = NULL, $auditAction = NULL) {
		$this->timestamp = ($timestamp===NULL) ? NULL : $this->validateTimestamp($timestamp);
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->personId = ($personId===NULL) ? NULL : $this->validatePersonId($personId);
		$this->impersonatorId = ($impersonatorId===NULL) ? NULL : $this->validateImpersonatorId($impersonatorId);
		$this->accessAvenue = ($accessAvenue===NULL) ? NULL : $this->validateAccessAvenue($accessAvenue);
		$this->auditAction = ($auditAction===NULL) ? NULL : $this->validateAuditAction($auditAction);
	}

	public function getTimestamp($autoCreate = TRUE) {
		if ($this->timestamp===NULL && $autoCreate && ! isset($this->_overrides['timestamp']) ) {
			$this->timestamp = $this->createTimestamp();
		}
		return $this->timestamp;
	}
	
	protected function createTimestamp() {
		return NULL;
	}

	public function setTimestamp($timestamp) {
		$this->timestamp = $this->validateTimestamp($timestamp);
	}

	protected function validateTimestamp($timestamp) {
		if (!is_string($timestamp)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'timestamp', 'string'));
		}
	
		return $timestamp;
	}

	public function getAppId($autoCreate = TRUE) {
		if ($this->appId===NULL && $autoCreate && ! isset($this->_overrides['appId']) ) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new \com\microsoft\wc\thing\GuidAndName();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof \com\microsoft\wc\thing\GuidAndName ) {
			$appId = new \com\microsoft\wc\thing\GuidAndName ($appId);
		}
	
		return $appId;
	}

	public function getPersonId($autoCreate = TRUE) {
		if ($this->personId===NULL && $autoCreate && ! isset($this->_overrides['personId']) ) {
			$this->personId = $this->createPersonId();
		}
		return $this->personId;
	}
	
	protected function createPersonId() {
		return new \com\microsoft\wc\thing\GuidAndName();
	}

	public function setPersonId($personId) {
		$this->personId = $this->validatePersonId($personId);
	}

	protected function validatePersonId($personId) {
		if ( ! $personId instanceof \com\microsoft\wc\thing\GuidAndName ) {
			$personId = new \com\microsoft\wc\thing\GuidAndName ($personId);
		}
	
		return $personId;
	}

	public function getImpersonatorId($autoCreate = TRUE) {
		if ($this->impersonatorId===NULL && $autoCreate && ! isset($this->_overrides['impersonatorId']) ) {
			$this->impersonatorId = $this->createImpersonatorId();
		}
		return $this->impersonatorId;
	}
	
	protected function createImpersonatorId() {
		return new \com\microsoft\wc\thing\GuidAndName();
	}

	public function setImpersonatorId($impersonatorId) {
		$this->impersonatorId = $this->validateImpersonatorId($impersonatorId);
	}

	protected function validateImpersonatorId($impersonatorId) {
		if ( $impersonatorId === FALSE ) {
			$this->_overrides['impersonatorId'] = TRUE;
			return NULL;
		}

		if ( ! $impersonatorId instanceof \com\microsoft\wc\thing\GuidAndName  && ! is_null($impersonatorId) ) {
			$impersonatorId = new \com\microsoft\wc\thing\GuidAndName ($impersonatorId);
		}

		unset ($this->_overrides['impersonatorId']);
	
		return $impersonatorId;
	}

	public function getAccessAvenue($autoCreate = TRUE) {
		if ($this->accessAvenue===NULL && $autoCreate && ! isset($this->_overrides['accessAvenue']) ) {
			$this->accessAvenue = $this->createAccessAvenue();
		}
		return $this->accessAvenue;
	}
	
	protected function createAccessAvenue() {
		return new \com\microsoft\wc\thing\AccessAvenue();
	}

	public function setAccessAvenue($accessAvenue) {
		$this->accessAvenue = $this->validateAccessAvenue($accessAvenue);
	}

	protected function validateAccessAvenue($accessAvenue) {
		if ( $accessAvenue === FALSE ) {
			$this->_overrides['accessAvenue'] = TRUE;
			return NULL;
		}

		if ( ! $accessAvenue instanceof \com\microsoft\wc\thing\AccessAvenue  && ! is_null($accessAvenue) ) {
			$accessAvenue = new \com\microsoft\wc\thing\AccessAvenue ($accessAvenue);
		}

		unset ($this->_overrides['accessAvenue']);
	
		return $accessAvenue;
	}

	public function getAuditAction($autoCreate = TRUE) {
		if ($this->auditAction===NULL && $autoCreate && ! isset($this->_overrides['auditAction']) ) {
			$this->auditAction = $this->createAuditAction();
		}
		return $this->auditAction;
	}
	
	protected function createAuditAction() {
		return new \com\microsoft\wc\thing\AuditAction();
	}

	public function setAuditAction($auditAction) {
		$this->auditAction = $this->validateAuditAction($auditAction);
	}

	protected function validateAuditAction($auditAction) {
		if ( ! $auditAction instanceof \com\microsoft\wc\thing\AuditAction ) {
			$auditAction = new \com\microsoft\wc\thing\AuditAction ($auditAction);
		}
	
		return $auditAction;
	}
} // end class Audit
