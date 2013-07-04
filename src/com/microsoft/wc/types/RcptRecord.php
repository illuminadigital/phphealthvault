<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="RcptRecord")
 */
class RcptRecord {
	/**
	 * Specifies that this message should be sent to custodians of the health record specified in the request envelope.
	 * The message will be sent to the email addresses of all the record custodians. The validated attribute determines whether the email addresses of the custodians must be validated. Any custodians not validated will be skipped. If the validated attribute is true and no custodians with validated email address are found, an error will be returned.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="boolean", name="validated")
	 */
	protected $validated;

	public function __construct($validated = NULL) {
		$this->validated = ($validated===NULL) ? NULL : $this->validateValidated($validated);
	}

	public function getValidated($autoCreate = TRUE) {
		if ($this->validated===NULL && $autoCreate && ! isset($this->_overrides['validated']) ) {
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
} // end class RcptRecord
