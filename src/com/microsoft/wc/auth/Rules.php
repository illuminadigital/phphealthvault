<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="Rules")
 */
class Rules {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Rule", collection="true", name="rule")
	 */
	protected $rule;

	public function __construct($rule = NULL) {
		$this->rule = ($rule===NULL) ? NULL : $this->validateRule($rule);
	}

	public function getRule() {
		if ($this->rule===NULL) {
			$this->rule = $this->createRule();
		}
		return $this->rule;
	}
	
	protected function createRule() {
		return array();
	}

	public function setRule($rule) {
		$this->rule = $this->validateRule($rule);
	}

	protected function validateRule($rule) {
		if ( ! $rule instanceof \com\microsoft\wc\auth\Rule  && ! is_null($rule) ) {
			$rule = new \com\microsoft\wc\auth\Rule ($rule);
		}
		$count = count($rule);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'rule', 0));
		}
		foreach ($rule as $entry) {
			if (!($entry instanceof Rule)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'rule', 'Rule'));
			}
		}
	
		return $rule;
	}

	public function addRule($rule) {
		$this->rule[] = $rule;
	}
} // end class Rules
