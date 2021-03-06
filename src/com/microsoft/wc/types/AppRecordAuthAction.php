<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlRootEntity	(xml="AppRecordAuthAction")
 */
class AppRecordAuthAction {
	/**
	 */
	static protected $enumValue = array('AuthorizationRequired' => 'The application has never been authorized. The user must authorize this application.', 'ReauthorizationRequired' => 'The user must authorize this application.', 'ReauthorizationNotPossible' => 'It is not possible to reauthorize this application.', 'NoActionRequired' => 'No actions are required.', 'RecordLocationNotSupported' => 'The record location isn\'t supported by the application.');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="AppRecordAuthAction")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'AppRecordAuthAction', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class AppRecordAuthAction
