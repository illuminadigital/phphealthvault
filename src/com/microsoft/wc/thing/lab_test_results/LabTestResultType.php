<?php
namespace com\microsoft\wc\thing\lab_test_results;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.lab-test-results", prefix="")
 * })
 * @XmlEntity	(xml="lab-test-result-type")
 */
class LabTestResultType {
	/**
	 * A single laboratory test.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="substance")
	 */
	protected $substance;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="collection-method")
	 */
	protected $collectionMethod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="clinical-code")
	 */
	protected $clinicalCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\lab_test_results\LabTestResultValueType", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	/**
	 * @XmlText	(type="string", name="note")
	 */
	protected $note;

	public function __construct($when = NULL, $name = NULL, $substance = NULL, $collectionMethod = NULL, $clinicalCode = NULL, $value = NULL, $status = NULL, $note = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->substance = ($substance===NULL) ? NULL : $this->validateSubstance($substance);
		$this->collectionMethod = ($collectionMethod===NULL) ? NULL : $this->validateCollectionMethod($collectionMethod);
		$this->clinicalCode = ($clinicalCode===NULL) ? NULL : $this->validateClinicalCode($clinicalCode);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->note = ($note===NULL) ? NULL : $this->validateNote($note);
	}

	public function getWhen() {
		if ($this->when===NULL) {
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
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! is_string($name) && ! is_null($name) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
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
		if ( ! $substance instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($substance) ) {
			$substance = new \com\microsoft\wc\types\CodableValue ($substance);
		}
	
		return $substance;
	}

	public function getCollectionMethod() {
		if ($this->collectionMethod===NULL) {
			$this->collectionMethod = $this->createCollectionMethod();
		}
		return $this->collectionMethod;
	}
	
	protected function createCollectionMethod() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCollectionMethod($collectionMethod) {
		$this->collectionMethod = $this->validateCollectionMethod($collectionMethod);
	}

	protected function validateCollectionMethod($collectionMethod) {
		if ( ! $collectionMethod instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($collectionMethod) ) {
			$collectionMethod = new \com\microsoft\wc\types\CodableValue ($collectionMethod);
		}
	
		return $collectionMethod;
	}

	public function getClinicalCode() {
		if ($this->clinicalCode===NULL) {
			$this->clinicalCode = $this->createClinicalCode();
		}
		return $this->clinicalCode;
	}
	
	protected function createClinicalCode() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setClinicalCode($clinicalCode) {
		$this->clinicalCode = $this->validateClinicalCode($clinicalCode);
	}

	protected function validateClinicalCode($clinicalCode) {
		if ( ! $clinicalCode instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($clinicalCode) ) {
			$clinicalCode = new \com\microsoft\wc\types\CodableValue ($clinicalCode);
		}
	
		return $clinicalCode;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\lab_test_results\LabTestResultValueType();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\lab_test_results\LabTestResultValueType  && ! is_null($value) ) {
			$value = new \com\microsoft\wc\thing\lab_test_results\LabTestResultValueType ($value);
		}
	
		return $value;
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
		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}
	
		return $status;
	}

	public function getNote() {
		if ($this->note===NULL) {
			$this->note = $this->createNote();
		}
		return $this->note;
	}
	
	protected function createNote() {
		return '';
	}

	public function setNote($note) {
		$this->note = $this->validateNote($note);
	}

	protected function validateNote($note) {
		if ( ! is_string($note) && ! is_null($note) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'note', 'string'));
		}
	
		return $note;
	}
} // end class LabTestResultType
