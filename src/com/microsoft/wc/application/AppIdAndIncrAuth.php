<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="AppIdAndIncrAuth")
 */
class AppIdAndIncrAuth {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="incr-online-auth-xml")
	 */
	protected $incrOnlineAuthXml;

	/**
	 * @XmlText	(type="boolean", name="is-incr-online-auth-replace")
	 */
	protected $isIncrOnlineAuthReplace;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="incr-offline-auth-xml")
	 */
	protected $incrOfflineAuthXml;

	/**
	 * @XmlText	(type="boolean", name="is-incr-offline-auth-replace")
	 */
	protected $isIncrOfflineAuthReplace;

	public function __construct($id = NULL, $incrOnlineAuthXml = NULL, $isIncrOnlineAuthReplace = NULL, $incrOfflineAuthXml = NULL, $isIncrOfflineAuthReplace = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->incrOnlineAuthXml = ($incrOnlineAuthXml===NULL) ? NULL : $this->validateIncrOnlineAuthXml($incrOnlineAuthXml);
		$this->isIncrOnlineAuthReplace = ($isIncrOnlineAuthReplace===NULL) ? NULL : $this->validateIsIncrOnlineAuthReplace($isIncrOnlineAuthReplace);
		$this->incrOfflineAuthXml = ($incrOfflineAuthXml===NULL) ? NULL : $this->validateIncrOfflineAuthXml($incrOfflineAuthXml);
		$this->isIncrOfflineAuthReplace = ($isIncrOfflineAuthReplace===NULL) ? NULL : $this->validateIsIncrOfflineAuthReplace($isIncrOfflineAuthReplace);
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\Guid ) {
			$id = new \com\microsoft\wc\types\Guid ($id);
		}
	
		return $id;
	}

	public function getIncrOnlineAuthXml($autoCreate = TRUE) {
		if ($this->incrOnlineAuthXml===NULL && $autoCreate && ! isset($this->_overrides['incrOnlineAuthXml']) ) {
			$this->incrOnlineAuthXml = $this->createIncrOnlineAuthXml();
		}
		return $this->incrOnlineAuthXml;
	}
	
	protected function createIncrOnlineAuthXml() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setIncrOnlineAuthXml($incrOnlineAuthXml) {
		$this->incrOnlineAuthXml = $this->validateIncrOnlineAuthXml($incrOnlineAuthXml);
	}

	protected function validateIncrOnlineAuthXml($incrOnlineAuthXml) {
		if ( $incrOnlineAuthXml === FALSE ) {
			$this->_overrides['incrOnlineAuthXml'] = TRUE;
			return NULL;
		}

		if ( ! $incrOnlineAuthXml instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($incrOnlineAuthXml) ) {
			$incrOnlineAuthXml = new \com\microsoft\wc\auth\AuthXml ($incrOnlineAuthXml);
		}

		unset ($this->_overrides['incrOnlineAuthXml']);
	
		return $incrOnlineAuthXml;
	}

	public function getIsIncrOnlineAuthReplace($autoCreate = TRUE) {
		if ($this->isIncrOnlineAuthReplace===NULL && $autoCreate && ! isset($this->_overrides['isIncrOnlineAuthReplace']) ) {
			$this->isIncrOnlineAuthReplace = $this->createIsIncrOnlineAuthReplace();
		}
		return $this->isIncrOnlineAuthReplace;
	}
	
	protected function createIsIncrOnlineAuthReplace() {
		return FALSE;
	}

	public function setIsIncrOnlineAuthReplace($isIncrOnlineAuthReplace) {
		$this->isIncrOnlineAuthReplace = $this->validateIsIncrOnlineAuthReplace($isIncrOnlineAuthReplace);
	}

	protected function validateIsIncrOnlineAuthReplace($isIncrOnlineAuthReplace) {
		if ( ! is_bool($isIncrOnlineAuthReplace) && ! is_null($isIncrOnlineAuthReplace) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isIncrOnlineAuthReplace', 'boolean'));
		}
	
		return $isIncrOnlineAuthReplace;
	}

	public function getIncrOfflineAuthXml($autoCreate = TRUE) {
		if ($this->incrOfflineAuthXml===NULL && $autoCreate && ! isset($this->_overrides['incrOfflineAuthXml']) ) {
			$this->incrOfflineAuthXml = $this->createIncrOfflineAuthXml();
		}
		return $this->incrOfflineAuthXml;
	}
	
	protected function createIncrOfflineAuthXml() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setIncrOfflineAuthXml($incrOfflineAuthXml) {
		$this->incrOfflineAuthXml = $this->validateIncrOfflineAuthXml($incrOfflineAuthXml);
	}

	protected function validateIncrOfflineAuthXml($incrOfflineAuthXml) {
		if ( $incrOfflineAuthXml === FALSE ) {
			$this->_overrides['incrOfflineAuthXml'] = TRUE;
			return NULL;
		}

		if ( ! $incrOfflineAuthXml instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($incrOfflineAuthXml) ) {
			$incrOfflineAuthXml = new \com\microsoft\wc\auth\AuthXml ($incrOfflineAuthXml);
		}

		unset ($this->_overrides['incrOfflineAuthXml']);
	
		return $incrOfflineAuthXml;
	}

	public function getIsIncrOfflineAuthReplace($autoCreate = TRUE) {
		if ($this->isIncrOfflineAuthReplace===NULL && $autoCreate && ! isset($this->_overrides['isIncrOfflineAuthReplace']) ) {
			$this->isIncrOfflineAuthReplace = $this->createIsIncrOfflineAuthReplace();
		}
		return $this->isIncrOfflineAuthReplace;
	}
	
	protected function createIsIncrOfflineAuthReplace() {
		return FALSE;
	}

	public function setIsIncrOfflineAuthReplace($isIncrOfflineAuthReplace) {
		$this->isIncrOfflineAuthReplace = $this->validateIsIncrOfflineAuthReplace($isIncrOfflineAuthReplace);
	}

	protected function validateIsIncrOfflineAuthReplace($isIncrOfflineAuthReplace) {
		if ( ! is_bool($isIncrOfflineAuthReplace) && ! is_null($isIncrOfflineAuthReplace) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isIncrOfflineAuthReplace', 'boolean'));
		}
	
		return $isIncrOfflineAuthReplace;
	}
} // end class AppIdAndIncrAuth
