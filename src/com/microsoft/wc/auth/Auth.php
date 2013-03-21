<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="Auth")
 */
class Auth {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Rules", name="rules")
	 */
	protected $rules;

	public function __construct($rules = NULL) {
		$this->rules = ($rules===NULL) ? NULL : $this->validateRules($rules);
	}

	public function getRules($autoCreate = TRUE) {
		if ($this->rules===NULL && $autoCreate && ! isset($this->_overrides['rules']) ) {
			$this->rules = $this->createRules();
		}
		return $this->rules;
	}
	
	protected function createRules() {
		return new \com\microsoft\wc\auth\Rules();
	}

	public function setRules($rules) {
		$this->rules = $this->validateRules($rules);
	}

	protected function validateRules($rules) {
		if ( $rules === FALSE ) {
			$this->_overrides['rules'] = TRUE;
			return NULL;
		}

		if ( ! $rules instanceof \com\microsoft\wc\auth\Rules  && ! is_null($rules) ) {
			$rules = new \com\microsoft\wc\auth\Rules ($rules);
		}

		unset ($this->_overrides['rules']);
	
		return $rules;
	}
} // end class Auth
