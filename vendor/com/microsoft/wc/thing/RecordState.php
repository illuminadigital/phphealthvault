<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlRootEntity	(xml="RecordState")
 */
class RecordState {
	/**
	 */
	static protected $enumValue = array('Active' => 'The authorization is active and the authenticated person can access the record with as much rights as was granted to the person.', 'ReadOnly' => 'The authorization is in question and the authenticated person can read data in the record but cannot write to the record even if they were previously granted write privileges.', 'Suspended' => 'The authorization was used in a fraudulent manor and can no longer be used. In most cases attempts to use a suspended record will result in INVALID_RECORD_STATE being returned from the method.', 'Deleted' => 'The record authorization has been deleted and can no longer be used to access the record. In most cases attempts to use a deleted record will result in INVALID_RECORD_STATE being returned from the method.');

	/**
	 * @XmlValue	(type="string", name="RecordState")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue() {
		if ($this->value===NULL) {
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'RecordState', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class RecordState
