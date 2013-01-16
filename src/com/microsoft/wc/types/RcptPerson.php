<?php
namespace com\microsoft\wc\types;



/**
 * @XmlEntity	(xml="RcptPerson")
 */
class RcptPerson extends \com\microsoft\wc\types\Guid {
	/**
	 * Represents a message recipient who is identified by a a unique Microsoft Health account identifier.
	 * The validated attribute determines whether the email address must first be validated by the account owner. If the validated attribute is true and the email address hasn't been validated then an error will be returned.
	 */

	/**
	 * @XmlAttribute	(type="boolean", name="validated")
	 */
	protected $validated;

	public function __construct($validated = NULL) {
		$this->validated = ($validated===NULL) ? NULL : $this->validateValidated($validated);
	}

	public function getValidated() {
		if ($this->validated===NULL) {
			$this->validated = $this->createValidated();
		}
		return $this->validated;
	}
	
	protected function createValidated() {
		return FALSE;
	}

	public function setValidated($validated) {
		$this->validated = $this->validateValidated($validated);
	}

	protected function validateValidated($validated) {
		if (!is_bool($validated)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'validated', 'boolean'));
		}
	
		return $validated;
	}
} // end class RcptPerson
