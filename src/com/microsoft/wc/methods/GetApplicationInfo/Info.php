<?php
namespace com\microsoft\wc\methods\GetApplicationInfo;



/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 */

	/**
	 * @XmlText	(type="boolean", name="all-languages")
	 */
	protected $allLanguages;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="child-app-id")
	 */
	protected $childAppId;

	public function __construct($allLanguages = NULL, $childAppId = NULL) {
		$this->allLanguages = ($allLanguages===NULL) ? NULL : $this->validateAllLanguages($allLanguages);
		$this->childAppId = ($childAppId===NULL) ? NULL : $this->validateChildAppId($childAppId);
	}

	public function getAllLanguages() {
		if ($this->allLanguages===NULL) {
			$this->allLanguages = $this->createAllLanguages();
		}
		return $this->allLanguages;
	}
	
	protected function createAllLanguages() {
		return FALSE;
	}

	public function setAllLanguages($allLanguages) {
		$this->allLanguages = $this->validateAllLanguages($allLanguages);
	}

	protected function validateAllLanguages($allLanguages) {
		if ( ! is_bool($allLanguages) && ! is_null($allLanguages) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'allLanguages', 'boolean'));
		}
	
		return $allLanguages;
	}

	public function getChildAppId() {
		if ($this->childAppId===NULL) {
			$this->childAppId = $this->createChildAppId();
		}
		return $this->childAppId;
	}
	
	protected function createChildAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setChildAppId($childAppId) {
		$this->childAppId = $this->validateChildAppId($childAppId);
	}

	protected function validateChildAppId($childAppId) {
		if ( ! $childAppId instanceof \com\microsoft\wc\types\Guid  && ! is_null($childAppId) ) {
			$childAppId = new \com\microsoft\wc\types\Guid ($childAppId);
		}
	
		return $childAppId;
	}
} // end class Info
