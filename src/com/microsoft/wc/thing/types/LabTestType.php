<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="lab-test-type")
 */
class LabTestType {
	/**
	 * LabTestType
	 * A laboratory test component, including the lab result value details.
	 * This type is used to define components without a larger clinical laboratory report.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
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
	 * @XmlText	(type="string", name="abbreviation")
	 */
	protected $abbreviation;

	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LabResultType", name="result")
	 */
	protected $result;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	public function __construct($when = NULL, $name = NULL, $substance = NULL, $collectionMethod = NULL, $abbreviation = NULL, $description = NULL, $code = NULL, $result = NULL, $status = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->substance = ($substance===NULL) ? NULL : $this->validateSubstance($substance);
		$this->collectionMethod = ($collectionMethod===NULL) ? NULL : $this->validateCollectionMethod($collectionMethod);
		$this->abbreviation = ($abbreviation===NULL) ? NULL : $this->validateAbbreviation($abbreviation);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->result = ($result===NULL) ? NULL : $this->validateResult($result);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
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

	public function getAbbreviation() {
		if ($this->abbreviation===NULL) {
			$this->abbreviation = $this->createAbbreviation();
		}
		return $this->abbreviation;
	}
	
	protected function createAbbreviation() {
		return '';
	}

	public function setAbbreviation($abbreviation) {
		$this->abbreviation = $this->validateAbbreviation($abbreviation);
	}

	protected function validateAbbreviation($abbreviation) {
		if ( ! is_string($abbreviation) && ! is_null($abbreviation) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'abbreviation', 'string'));
		}
	
		return $abbreviation;
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return array();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! is_array ($code) && ! is_null($code) ) {
			$code = array($code);
		}
		$count = count($code);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'code', 0));
		}
		foreach ($code as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'codable-value'));
			}
		}
	
		return $code;
	}

	public function addCode($code) {
		$this->code[] = $code;
	}

	public function getResult() {
		if ($this->result===NULL) {
			$this->result = $this->createResult();
		}
		return $this->result;
	}
	
	protected function createResult() {
		return new \com\microsoft\wc\thing\types\LabResultType();
	}

	public function setResult($result) {
		$this->result = $this->validateResult($result);
	}

	protected function validateResult($result) {
		if ( ! $result instanceof \com\microsoft\wc\thing\types\LabResultType  && ! is_null($result) ) {
			$result = new \com\microsoft\wc\thing\types\LabResultType ($result);
		}
	
		return $result;
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
} // end class LabTestType
