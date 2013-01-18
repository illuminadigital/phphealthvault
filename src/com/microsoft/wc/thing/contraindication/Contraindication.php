<?php
namespace com\microsoft\wc\thing\contraindication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.contraindication", prefix="")
 * })
 * @XmlEntity	(xml="contraindication")
 */
class Contraindication extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to an contraindication.
	 * This thing type is used to store substances (such as food or drugs) that interacts badly with a specific condition or drugs a patient is already taking.
	 */

	const ID = '046d0ad7-6d7f-4bfd-afd4-4192ca2e913d';
	const NAME = 'Contraindication';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="substance")
	 */
	protected $substance;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="source")
	 */
	protected $source;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="documenter")
	 */
	protected $documenter;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="documented-date")
	 */
	protected $documentedDate;

	public function __construct($substance = NULL, $status = NULL, $source = NULL, $documenter = NULL, $documentedDate = NULL) {
		$this->substance = ($substance===NULL) ? NULL : $this->validateSubstance($substance);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->source = ($source===NULL) ? NULL : $this->validateSource($source);
		$this->documenter = ($documenter===NULL) ? NULL : $this->validateDocumenter($documenter);
		$this->documentedDate = ($documentedDate===NULL) ? NULL : $this->validateDocumentedDate($documentedDate);
	}

	public function getSubstance() {
		if ($this->substance===NULL) {
			$this->substance = $this->createSubstance();
		}
		return $this->substance;
	}
	
	protected function createSubstance() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSubstance($substance) {
		$this->substance = $this->validateSubstance($substance);
	}

	protected function validateSubstance($substance) {
		if ( ! $substance instanceof \com\microsoft\wc\types\CodableValue ) {
			$substance = new \com\microsoft\wc\types\CodableValue ($substance);
		}
	
		return $substance;
	}

	public function getStatus() {
		if ($this->status===NULL) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}
	
		return $status;
	}

	public function getSource() {
		if ($this->source===NULL) {
			$this->source = $this->createSource();
		}
		return $this->source;
	}
	
	protected function createSource() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSource($source) {
		$this->source = $this->validateSource($source);
	}

	protected function validateSource($source) {
		if ( ! $source instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($source) ) {
			$source = new \com\microsoft\wc\types\CodableValue ($source);
		}
	
		return $source;
	}

	public function getDocumenter() {
		if ($this->documenter===NULL) {
			$this->documenter = $this->createDocumenter();
		}
		return $this->documenter;
	}
	
	protected function createDocumenter() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setDocumenter($documenter) {
		$this->documenter = $this->validateDocumenter($documenter);
	}

	protected function validateDocumenter($documenter) {
		if ( ! $documenter instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($documenter) ) {
			$documenter = new \com\microsoft\wc\thing\types\Person ($documenter);
		}
	
		return $documenter;
	}

	public function getDocumentedDate() {
		if ($this->documentedDate===NULL) {
			$this->documentedDate = $this->createDocumentedDate();
		}
		return $this->documentedDate;
	}
	
	protected function createDocumentedDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDocumentedDate($documentedDate) {
		$this->documentedDate = $this->validateDocumentedDate($documentedDate);
	}

	protected function validateDocumentedDate($documentedDate) {
		if ( ! $documentedDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($documentedDate) ) {
			$documentedDate = new \com\microsoft\wc\dates\ApproxDateTime ($documentedDate);
		}
	
		return $documentedDate;
	}
} // end class Contraindication
