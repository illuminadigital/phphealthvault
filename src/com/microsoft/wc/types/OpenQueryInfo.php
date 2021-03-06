<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="OpenQueryInfo")
 */
class OpenQueryInfo {
	/**
	 * Information describing a saved OpenQuery.
	 * This information is used to invoke an OpenQuery after it is saved.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="query-id")
	 */
	protected $queryId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="app-name")
	 */
	protected $appName;

	/**
	 * @XmlText	(type="string", name="date-created")
	 */
	protected $dateCreated;

	/**
	 * @XmlText	(type="string", name="expires-date")
	 */
	protected $expiresDate;

	/**
	 * @XmlText	(type="boolean", name="pin-required")
	 */
	protected $pinRequired;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128", name="note")
	 */
	protected $note;

	public function __construct($queryId = NULL, $appName = NULL, $dateCreated = NULL, $expiresDate = NULL, $pinRequired = NULL, $note = NULL) {
		$this->queryId = ($queryId===NULL) ? NULL : $this->validateQueryId($queryId);
		$this->appName = ($appName===NULL) ? NULL : $this->validateAppName($appName);
		$this->dateCreated = ($dateCreated===NULL) ? NULL : $this->validateDateCreated($dateCreated);
		$this->expiresDate = ($expiresDate===NULL) ? NULL : $this->validateExpiresDate($expiresDate);
		$this->pinRequired = ($pinRequired===NULL) ? NULL : $this->validatePinRequired($pinRequired);
		$this->note = ($note===NULL) ? NULL : $this->validateNote($note);
	}

	public function getQueryId($autoCreate = TRUE) {
		if ($this->queryId===NULL && $autoCreate && ! isset($this->_overrides['queryId']) ) {
			$this->queryId = $this->createQueryId();
		}
		return $this->queryId;
	}
	
	protected function createQueryId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setQueryId($queryId) {
		$this->queryId = $this->validateQueryId($queryId);
	}

	protected function validateQueryId($queryId) {
		if ( ! $queryId instanceof \com\microsoft\wc\types\Guid ) {
			$queryId = new \com\microsoft\wc\types\Guid ($queryId);
		}
	
		return $queryId;
	}

	public function getAppName($autoCreate = TRUE) {
		if ($this->appName===NULL && $autoCreate && ! isset($this->_overrides['appName']) ) {
			$this->appName = $this->createAppName();
		}
		return $this->appName;
	}
	
	protected function createAppName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setAppName($appName) {
		$this->appName = $this->validateAppName($appName);
	}

	protected function validateAppName($appName) {
		if ( ! $appName instanceof \com\microsoft\wc\types\String255 ) {
			$appName = new \com\microsoft\wc\types\String255 ($appName);
		}
	
		return $appName;
	}

	public function getDateCreated($autoCreate = TRUE) {
		if ($this->dateCreated===NULL && $autoCreate && ! isset($this->_overrides['dateCreated']) ) {
			$this->dateCreated = $this->createDateCreated();
		}
		return $this->dateCreated;
	}
	
	protected function createDateCreated() {
		return NULL;
	}

	public function setDateCreated($dateCreated) {
		$this->dateCreated = $this->validateDateCreated($dateCreated);
	}

	protected function validateDateCreated($dateCreated) {
		if (!is_string($dateCreated)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateCreated', 'string'));
		}
	
		return $dateCreated;
	}

	public function getExpiresDate($autoCreate = TRUE) {
		if ($this->expiresDate===NULL && $autoCreate && ! isset($this->_overrides['expiresDate']) ) {
			$this->expiresDate = $this->createExpiresDate();
		}
		return $this->expiresDate;
	}
	
	protected function createExpiresDate() {
		return NULL;
	}

	public function setExpiresDate($expiresDate) {
		$this->expiresDate = $this->validateExpiresDate($expiresDate);
	}

	protected function validateExpiresDate($expiresDate) {
		if ( ! is_string($expiresDate) && ! is_null($expiresDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'expiresDate', 'string'));
		}
	
		return $expiresDate;
	}

	public function getPinRequired($autoCreate = TRUE) {
		if ($this->pinRequired===NULL && $autoCreate && ! isset($this->_overrides['pinRequired']) ) {
			$this->pinRequired = $this->createPinRequired();
		}
		return $this->pinRequired;
	}
	
	protected function createPinRequired() {
		return FALSE;
	}

	public function setPinRequired($pinRequired) {
		$this->pinRequired = $this->validatePinRequired($pinRequired);
	}

	protected function validatePinRequired($pinRequired) {
		if (!is_bool($pinRequired)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'pinRequired', 'boolean'));
		}
	
		return $pinRequired;
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
} // end class OpenQueryInfo
