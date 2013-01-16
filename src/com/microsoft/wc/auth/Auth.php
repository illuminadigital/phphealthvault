<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlEntity	(xml="Auth")
 */
class Auth {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Rules", name="rules")
	 */
	protected $rules;

	public function __construct($rules = NULL) {
		$this->rules = ($rules===NULL) ? NULL : $this->validateRules($rules);
	}

	public function getRules() {
		if ($this->rules===NULL) {
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
		if ( ! $rules instanceof \com\microsoft\wc\auth\Rules  && ! is_null($rules) ) {
			$rules = new \com\microsoft\wc\auth\Rules ($rules);
		}
	
		return $rules;
	}
} // end class Auth
