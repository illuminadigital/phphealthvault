<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="sample-set")
 */
class SampleSet {
	/**
	 * SampleSet
	 * Defines a sample set.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="base-time")
	 */
	protected $baseTime;

	/**
	 * @XmlText	(type="string", name="sample-unit")
	 */
	protected $sampleUnit;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="sample-unit-code")
	 */
	protected $sampleUnitCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Sample", collection="true", name="sample")
	 */
	protected $sample;

	public function __construct($baseTime = NULL, $sampleUnit = NULL, $sampleUnitCode = NULL, $sample = NULL) {
		$this->baseTime = ($baseTime===NULL) ? NULL : $this->validateBaseTime($baseTime);
		$this->sampleUnit = ($sampleUnit===NULL) ? NULL : $this->validateSampleUnit($sampleUnit);
		$this->sampleUnitCode = ($sampleUnitCode===NULL) ? NULL : $this->validateSampleUnitCode($sampleUnitCode);
		$this->sample = ($sample===NULL) ? NULL : $this->validateSample($sample);
	}

	public function getBaseTime() {
		if ($this->baseTime===NULL) {
			$this->baseTime = $this->createBaseTime();
		}
		return $this->baseTime;
	}
	
	protected function createBaseTime() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setBaseTime($baseTime) {
		$this->baseTime = $this->validateBaseTime($baseTime);
	}

	protected function validateBaseTime($baseTime) {
		if ( ! $baseTime instanceof \com\microsoft\wc\dates\DateTime ) {
			$baseTime = new \com\microsoft\wc\dates\DateTime ($baseTime);
		}
	
		return $baseTime;
	}

	public function getSampleUnit() {
		if ($this->sampleUnit===NULL) {
			$this->sampleUnit = $this->createSampleUnit();
		}
		return $this->sampleUnit;
	}
	
	protected function createSampleUnit() {
		return '';
	}

	public function setSampleUnit($sampleUnit) {
		$this->sampleUnit = $this->validateSampleUnit($sampleUnit);
	}

	protected function validateSampleUnit($sampleUnit) {
		if (!is_string($sampleUnit)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sampleUnit', 'string'));
		}
	
		return $sampleUnit;
	}

	public function getSampleUnitCode() {
		if ($this->sampleUnitCode===NULL) {
			$this->sampleUnitCode = $this->createSampleUnitCode();
		}
		return $this->sampleUnitCode;
	}
	
	protected function createSampleUnitCode() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSampleUnitCode($sampleUnitCode) {
		$this->sampleUnitCode = $this->validateSampleUnitCode($sampleUnitCode);
	}

	protected function validateSampleUnitCode($sampleUnitCode) {
		if ( ! $sampleUnitCode instanceof \com\microsoft\wc\types\CodableValue ) {
			$sampleUnitCode = new \com\microsoft\wc\types\CodableValue ($sampleUnitCode);
		}
	
		return $sampleUnitCode;
	}

	public function getSample() {
		if ($this->sample===NULL) {
			$this->sample = $this->createSample();
		}
		return $this->sample;
	}
	
	protected function createSample() {
		return array();
	}

	public function setSample($sample) {
		$this->sample = $this->validateSample($sample);
	}

	protected function validateSample($sample) {
		if ( ! is_array ($sample) && ! is_null($sample) ) {
			$sample = array($sample);
		}
		$count = count($sample);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sample', 0));
		}
		foreach ($sample as $entry) {
			if (!($entry instanceof Sample)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'sample', 'sample'));
			}
		}
	
		return $sample;
	}

	public function addSample($sample) {
		$this->sample[] = $sample;
	}
} // end class SampleSet
