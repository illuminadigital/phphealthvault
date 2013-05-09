<?php
namespace com\microsoft\wc\thing\peak_flow;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.peak-flow", prefix="")
 * })
 * @XmlEntity	(xml="peak-flow")
 */
class PeakFlow extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A peak flow measurement.
	 * Peak flow measures are typically collected on a daily basis by patients to track theirlung function.
	 */

	const ID = '5d8419af-90f0-4875-a370-0f881c18f6b3';
	const NAME = 'Peak Flow Measurement';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\FlowValue", name="pef")
	 */
	protected $pef;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\VolumeValue", name="fev1")
	 */
	protected $fev1;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\VolumeValue", name="fev6")
	 */
	protected $fev6;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="measurement-flags")
	 */
	protected $measurementFlags;

	public function __construct($when = NULL, $pef = NULL, $fev1 = NULL, $fev6 = NULL, $measurementFlags = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->pef = ($pef===NULL) ? NULL : $this->validatePef($pef);
		$this->fev1 = ($fev1===NULL) ? NULL : $this->validateFev1($fev1);
		$this->fev6 = ($fev6===NULL) ? NULL : $this->validateFev6($fev6);
		$this->measurementFlags = ($measurementFlags===NULL) ? NULL : $this->validateMeasurementFlags($measurementFlags);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getPef($autoCreate = TRUE) {
		if ($this->pef===NULL && $autoCreate && ! isset($this->_overrides['pef']) ) {
			$this->pef = $this->createPef();
		}
		return $this->pef;
	}
	
	protected function createPef() {
		return new \com\microsoft\wc\thing\types\FlowValue();
	}

	public function setPef($pef) {
		$this->pef = $this->validatePef($pef);
	}

	protected function validatePef($pef) {
		if ( $pef === FALSE ) {
			$this->_overrides['pef'] = TRUE;
			return NULL;
		}

		if ( ! $pef instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($pef) ) {
			$pef = new \com\microsoft\wc\thing\types\FlowValue ($pef);
		}

		unset ($this->_overrides['pef']);
	
		return $pef;
	}

	public function getFev1($autoCreate = TRUE) {
		if ($this->fev1===NULL && $autoCreate && ! isset($this->_overrides['fev1']) ) {
			$this->fev1 = $this->createFev1();
		}
		return $this->fev1;
	}
	
	protected function createFev1() {
		return new \com\microsoft\wc\thing\types\VolumeValue();
	}

	public function setFev1($fev1) {
		$this->fev1 = $this->validateFev1($fev1);
	}

	protected function validateFev1($fev1) {
		if ( $fev1 === FALSE ) {
			$this->_overrides['fev1'] = TRUE;
			return NULL;
		}

		if ( ! $fev1 instanceof \com\microsoft\wc\thing\types\VolumeValue  && ! is_null($fev1) ) {
			$fev1 = new \com\microsoft\wc\thing\types\VolumeValue ($fev1);
		}

		unset ($this->_overrides['fev1']);
	
		return $fev1;
	}

	public function getFev6($autoCreate = TRUE) {
		if ($this->fev6===NULL && $autoCreate && ! isset($this->_overrides['fev6']) ) {
			$this->fev6 = $this->createFev6();
		}
		return $this->fev6;
	}
	
	protected function createFev6() {
		return new \com\microsoft\wc\thing\types\VolumeValue();
	}

	public function setFev6($fev6) {
		$this->fev6 = $this->validateFev6($fev6);
	}

	protected function validateFev6($fev6) {
		if ( $fev6 === FALSE ) {
			$this->_overrides['fev6'] = TRUE;
			return NULL;
		}

		if ( ! $fev6 instanceof \com\microsoft\wc\thing\types\VolumeValue  && ! is_null($fev6) ) {
			$fev6 = new \com\microsoft\wc\thing\types\VolumeValue ($fev6);
		}

		unset ($this->_overrides['fev6']);
	
		return $fev6;
	}

	public function getMeasurementFlags($autoCreate = TRUE) {
		if ($this->measurementFlags===NULL && $autoCreate && ! isset($this->_overrides['measurementFlags']) ) {
			$this->measurementFlags = $this->createMeasurementFlags();
		}
		return $this->measurementFlags;
	}
	
	protected function createMeasurementFlags() {
		return array();
	}

	public function setMeasurementFlags($measurementFlags) {
		$this->measurementFlags = $this->validateMeasurementFlags($measurementFlags);
	}

	protected function validateMeasurementFlags($measurementFlags) {
		if ( $measurementFlags === FALSE ) {
			$this->_overrides['measurementFlags'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($measurementFlags) && ! is_null($measurementFlags) ) {
			$measurementFlags = array($measurementFlags);
		}

		unset ($this->_overrides['measurementFlags']);
		$count = count($measurementFlags);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'measurementFlags', 0));
		}
		if ( ! empty($measurementFlags) ) {
			foreach ($measurementFlags as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\CodableValue )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'measurementFlags', 'codable-value'));
				}
			}
		}
	
		return $measurementFlags;
	}

	public function addMeasurementFlags($measurementFlags) {
		$this->measurementFlags[] = $measurementFlags;
	}
} // end class PeakFlow
