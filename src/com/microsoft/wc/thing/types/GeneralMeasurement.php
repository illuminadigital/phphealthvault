<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="general-measurement")
 */
class GeneralMeasurement {
	/**
	 * GeneralMeasurement
	 * A coded measurement and a display representation.
	 * Examples include 30 cc, 500 mg, 15 liters, 30 inches, etc.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="display")
	 */
	protected $display;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\StructuredMeasurement", collection="true", name="structured")
	 */
	protected $structured;

	public function __construct($display = NULL, $structured = NULL) {
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
		$this->structured = ($structured===NULL) ? NULL : $this->validateStructured($structured);
	}

	public function getDisplay($autoCreate = TRUE) {
		if ($this->display===NULL && $autoCreate && ! isset($this->_overrides['display']) ) {
			$this->display = $this->createDisplay();
		}
		return $this->display;
	}
	
	protected function createDisplay() {
		return '';
	}

	public function setDisplay($display) {
		$this->display = $this->validateDisplay($display);
	}

	protected function validateDisplay($display) {
		if (!is_string($display)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'display', 'string'));
		}
	
		return $display;
	}

	public function getStructured($autoCreate = TRUE) {
		if ($this->structured===NULL && $autoCreate && ! isset($this->_overrides['structured']) ) {
			$this->structured = $this->createStructured();
		}
		return $this->structured;
	}
	
	protected function createStructured() {
		return array();
	}

	public function setStructured($structured) {
		$this->structured = $this->validateStructured($structured);
	}

	protected function validateStructured($structured) {
		if ( $structured === FALSE ) {
			$this->_overrides['structured'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($structured) && ! is_null($structured) ) {
			$structured = array($structured);
		}

		unset ($this->_overrides['structured']);
		$count = count($structured);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'structured', 0));
		}
		if ( ! empty($structured) ) {
			foreach ($structured as $entry) {
				if (!($entry instanceof StructuredMeasurement)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'structured', 'structured-measurement'));
				}
			}
		}
	
		return $structured;
	}

	public function addStructured($structured) {
		$this->structured[] = $structured;
	}
} // end class GeneralMeasurement
