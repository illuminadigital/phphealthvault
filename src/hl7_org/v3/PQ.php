<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="PQ")
 */
class PQ extends \QTY\QTY {
	/**
	 * A dimensioned quantity expressing the result of a measurement act.
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\PQR", collection="true", name="translation")
	 */
	protected $translation;

	/**
	 * @XmlAttribute	(type="string", name="value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="unit")
	 */
	protected $unit;

	public function __construct($translation = NULL, $value = NULL, $unit = NULL) {
		$this->translation = ($translation===NULL) ? NULL : $this->validateTranslation($translation);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->unit = ($unit===NULL) ? NULL : $this->validateUnit($unit);
	}

	public function getTranslation() {
		if ($this->translation===NULL) {
			$this->translation = $this->createTranslation();
		}
		return $this->translation;
	}
	
	protected function createTranslation() {
		return array();
	}

	public function setTranslation($translation) {
		$this->translation = $this->validateTranslation($translation);
	}

	protected function validateTranslation($translation) {
		if ( ! is_array ($translation) && ! is_null($translation) ) {
			$translation = array($translation);
		}
		$count = count($translation);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'translation', 0));
		}
		foreach ($translation as $entry) {
			if (!($entry instanceof PQR)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'translation', 'PQR'));
			}
		}
	
		return $translation;
	}

	public function addTranslation($translation) {
		$this->translation[] = $translation;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
	
		return $value;
	}

	public function getUnit() {
		if ($this->unit===NULL) {
			$this->unit = $this->createUnit();
		}
		return $this->unit;
	}
	
	protected function createUnit() {
		return NULL;
	}

	public function setUnit($unit) {
		$this->unit = $this->validateUnit($unit);
	}

	protected function validateUnit($unit) {
	
		return $unit;
	}
} // end class PQ
