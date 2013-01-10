<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlRootEntity	(xml="ApplicationState")
 */
class ApplicationState {
	/**
	 */
	static protected $enumValue = array('Active' => 'The application is active and can be used to perform health data related activities, such as get and put of things, request authorization etc.', 'NeedsVerification' => 'NeedsVerification', 'Suspended' => 'The application was used in a fraudulent manor and can no longer be used.', 'Deleted' => 'The application has been deleted and can no longer be used to access any records.');

	/**
	 * @XmlValue	(type="string", name="ApplicationState")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'ApplicationState', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class ApplicationState
