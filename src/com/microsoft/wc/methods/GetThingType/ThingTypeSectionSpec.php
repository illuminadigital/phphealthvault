<?php
namespace com\microsoft\wc\methods\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThingType", prefix="")
 * })
 * @XmlRootEntity	(xml="ThingTypeSectionSpec")
 */
class ThingTypeSectionSpec {
	/**
	 */
	static protected $enumValue = array('core' => 'The essential information about the thing type should be returned.', 'xsd' => 'The schema of the thing type should be returned.', 'columns' => 'Columns used by the thing type should be returned.', 'transforms' => 'The transforms supported by the thing type should be returned.', 'transformsource' => 'The transforms and their XSL source supported by the thing type should be returned.', 'versions' => 'The versions of the thing type should be returned.', 'effectivedatexpath' => 'The effective date XPath of the thing type should be returned. The effective date XPath allows obtaining the node which will contain the thing\'s effective date value, since this is different for each thing type.');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="ThingTypeSectionSpec")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'ThingTypeSectionSpec', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class ThingTypeSectionSpec
