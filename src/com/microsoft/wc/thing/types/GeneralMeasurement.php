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

	public function getDisplay() {
		if ($this->display===NULL) {
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

	public function getStructured() {
		if ($this->structured===NULL) {
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
		if ( ! is_array ($structured) && ! is_null($structured) ) {
			$structured = array($structured);
		}
		$count = count($structured);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'structured', 0));
		}
		foreach ($structured as $entry) {
			if (!($entry instanceof StructuredMeasurement)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'structured', 'structured-measurement'));
			}
		}
	
		return $structured;
	}

	public function addStructured($structured) {
		$this->structured[] = $structured;
	}
} // end class GeneralMeasurement
