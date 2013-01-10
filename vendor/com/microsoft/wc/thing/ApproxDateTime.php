<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\StructuredApproxDate;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="approx-date-time")
 */
class ApproxDateTime {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\StructuredApproxDate", name="structured")
	 */
	protected $structured;

	/**
	 * @XmlText	(type="string", name="descriptive")
	 */
	protected $descriptive;

	public function __construct($structured = NULL, $descriptive = NULL) {
		$this->structured = ($structured===NULL) ? NULL : $this->validateStructured($structured);
		$this->descriptive = ($descriptive===NULL) ? NULL : $this->validateDescriptive($descriptive);
	}

	public function getStructured() {
		if ($this->structured===NULL) {
			$this->structured = $this->createStructured();
		}
		return $this->structured;
	}
	
	protected function createStructured() {
		return new StructuredApproxDate();
	}

	public function setStructured($structured) {
		$this->structured = $this->validateStructured($structured);
	}

	protected function validateStructured($structured) {
		if ( ! $structured instanceof StructuredApproxDate ) {
			$structured = new StructuredApproxDate ($structured);
		}
	
		return $structured;
	}

	public function getDescriptive() {
		if ($this->descriptive===NULL) {
			$this->descriptive = $this->createDescriptive();
		}
		return $this->descriptive;
	}
	
	protected function createDescriptive() {
		return '';
	}

	public function setDescriptive($descriptive) {
		$this->descriptive = $this->validateDescriptive($descriptive);
	}

	protected function validateDescriptive($descriptive) {
		if (!is_string($descriptive)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'descriptive', 'string'));
		}
	
		return $descriptive;
	}
} // end class ApproxDateTime
