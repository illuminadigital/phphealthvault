<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\auth\AuthXml;

/**
 * @XmlEntity	(xml="AppIdAndIncrAuth")
 */
class AppIdAndIncrAuth {
	/**
	 */

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

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof Guid ) {
			$id = new Guid ($id);
		}
	
		return $id;
	}

	public function getIncrOnlineAuthXml() {
		if ($this->incrOnlineAuthXml===NULL) {
			$this->incrOnlineAuthXml = $this->createIncrOnlineAuthXml();
		}
		return $this->incrOnlineAuthXml;
	}
	
	protected function createIncrOnlineAuthXml() {
		return new AuthXml();
	}

	public function setIncrOnlineAuthXml($incrOnlineAuthXml) {
		$this->incrOnlineAuthXml = $this->validateIncrOnlineAuthXml($incrOnlineAuthXml);
	}

	protected function validateIncrOnlineAuthXml($incrOnlineAuthXml) {
		if ( ! $incrOnlineAuthXml instanceof AuthXml  && ! is_null($incrOnlineAuthXml) ) {
			$incrOnlineAuthXml = new AuthXml ($incrOnlineAuthXml);
		}
	
		return $incrOnlineAuthXml;
	}

	public function getIsIncrOnlineAuthReplace() {
		if ($this->isIncrOnlineAuthReplace===NULL) {
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

	public function getIncrOfflineAuthXml() {
		if ($this->incrOfflineAuthXml===NULL) {
			$this->incrOfflineAuthXml = $this->createIncrOfflineAuthXml();
		}
		return $this->incrOfflineAuthXml;
	}
	
	protected function createIncrOfflineAuthXml() {
		return new AuthXml();
	}

	public function setIncrOfflineAuthXml($incrOfflineAuthXml) {
		$this->incrOfflineAuthXml = $this->validateIncrOfflineAuthXml($incrOfflineAuthXml);
	}

	protected function validateIncrOfflineAuthXml($incrOfflineAuthXml) {
		if ( ! $incrOfflineAuthXml instanceof AuthXml  && ! is_null($incrOfflineAuthXml) ) {
			$incrOfflineAuthXml = new AuthXml ($incrOfflineAuthXml);
		}
	
		return $incrOfflineAuthXml;
	}

	public function getIsIncrOfflineAuthReplace() {
		if ($this->isIncrOfflineAuthReplace===NULL) {
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
