<?php
namespace com\microsoft\wc\methods\GetThings3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings3", prefix="")
 * })
 * @XmlRootEntity	(xml="ThingSectionSpec2")
 */
class ThingSectionSpec2 {
	/**
	 */
	static protected $enumValue = array('core' => 'Specifies the core parts of the thing. The core includes thing-id, version-stamp, type-id, eff-date, thing-state, flags.', 'audits' => 'Specifies the auditing section of the thing. The audit section includes the updated element.', 'effectivepermissions' => 'Specifies the effection permissions the caller has on the thing. The effective permissions section includes the eff-permissions xml.', 'digitalsignatures' => 'Specifies the digital signautures on the thing. The digital signatures section includes the signature xml, which contains any digital signatures on the returned thing. That digital signature includes a key and a cryptographic hash which can be used to verify that the contents of the thing have not changed since the time it was signed.', 'tags' => 'Specifies the tags on the thing. The tags section includes the tags xml which is a string element that contains comma separated list of tags.', 'blobpayload' => 'Specifies the blob payload section of the thing. ');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="ThingSectionSpec2")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'ThingSectionSpec2', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class ThingSectionSpec2
