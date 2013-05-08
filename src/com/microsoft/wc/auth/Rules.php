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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Rule", collection="true", name="rule")
	 */
	protected $rule;

	public function __construct($rule = NULL) {
		$this->rule = ($rule===NULL) ? NULL : $this->validateRule($rule);
	}

	public function getRule($autoCreate = TRUE) {
		if ($this->rule===NULL && $autoCreate && ! isset($this->_overrides['rule']) ) {
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
		if ( $rule === FALSE ) {
			$this->_overrides['rule'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($rule) && ! is_null($rule) ) {
			$rule = array($rule);
		}

		unset ($this->_overrides['rule']);
		$count = count($rule);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'rule', 0));
		}
		if ( ! empty($rule) ) {
			foreach ($rule as $entry) {
				if (!($entry instanceof \com\microsoft\wc\auth\Rule )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'rule', 'Rule'));
				}
			}
		}
	
		return $rule;
	}

	public function addRule($rule) {
		$this->rule[] = $rule;
	}
} // end class Rules
