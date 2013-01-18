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
		if ( ! $translation instanceof \hl7_org\v3\PQR  && ! is_null($translation) ) {
			$translation = new \hl7_org\v3\PQR ($translation);
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
		return new \hl7_org\v3\Real();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\Real  && ! is_null($value) ) {
			$value = new \hl7_org\v3\Real ($value);
		}
	
		return $value;
	}

	public function getUnit() {
		if ($this->unit===NULL) {
			$this->unit = $this->createUnit();
		}
		return $this->unit;
	}
	
	protected function createUnit() {
		return new \hl7_org\v3\Cs();
	}

	public function setUnit($unit) {
		$this->unit = $this->validateUnit($unit);
	}

	protected function validateUnit($unit) {
		if ( ! $unit instanceof \hl7_org\v3\Cs  && ! is_null($unit) ) {
			$unit = new \hl7_org\v3\Cs ($unit);
		}
	
		return $unit;
	}
} // end class PQ
