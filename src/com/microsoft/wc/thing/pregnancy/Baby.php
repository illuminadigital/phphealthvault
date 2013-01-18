<?php
namespace com\microsoft\wc\thing\pregnancy;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.pregnancy", prefix="")
 * })
 * @XmlEntity	(xml="Baby")
 */
class Baby {
	/**
	 * Details about the baby.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Name", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="gender")
	 */
	protected $gender;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="weight")
	 */
	protected $weight;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="length")
	 */
	protected $length;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="head-circumference")
	 */
	protected $headCircumference;

	/**
	 * @XmlText	(type="string", name="note")
	 */
	protected $note;

	public function __construct($name = NULL, $gender = NULL, $weight = NULL, $length = NULL, $headCircumference = NULL, $note = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->gender = ($gender===NULL) ? NULL : $this->validateGender($gender);
		$this->weight = ($weight===NULL) ? NULL : $this->validateWeight($weight);
		$this->length = ($length===NULL) ? NULL : $this->validateLength($length);
		$this->headCircumference = ($headCircumference===NULL) ? NULL : $this->validateHeadCircumference($headCircumference);
		$this->note = ($note===NULL) ? NULL : $this->validateNote($note);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\thing\types\Name();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\thing\types\Name  && ! is_null($name) ) {
			$name = new \com\microsoft\wc\thing\types\Name ($name);
		}
	
		return $name;
	}

	public function getGender() {
		if ($this->gender===NULL) {
			$this->gender = $this->createGender();
		}
		return $this->gender;
	}
	
	protected function createGender() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setGender($gender) {
		$this->gender = $this->validateGender($gender);
	}

	protected function validateGender($gender) {
		if ( ! $gender instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($gender) ) {
			$gender = new \com\microsoft\wc\types\CodableValue ($gender);
		}
	
		return $gender;
	}

	public function getWeight() {
		if ($this->weight===NULL) {
			$this->weight = $this->createWeight();
		}
		return $this->weight;
	}
	
	protected function createWeight() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setWeight($weight) {
		$this->weight = $this->validateWeight($weight);
	}

	protected function validateWeight($weight) {
		if ( ! $weight instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($weight) ) {
			$weight = new \com\microsoft\wc\thing\types\WeightValue ($weight);
		}
	
		return $weight;
	}

	public function getLength() {
		if ($this->length===NULL) {
			$this->length = $this->createLength();
		}
		return $this->length;
	}
	
	protected function createLength() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setLength($length) {
		$this->length = $this->validateLength($length);
	}

	protected function validateLength($length) {
		if ( ! $length instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($length) ) {
			$length = new \com\microsoft\wc\thing\types\LengthValue ($length);
		}
	
		return $length;
	}

	public function getHeadCircumference() {
		if ($this->headCircumference===NULL) {
			$this->headCircumference = $this->createHeadCircumference();
		}
		return $this->headCircumference;
	}
	
	protected function createHeadCircumference() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setHeadCircumference($headCircumference) {
		$this->headCircumference = $this->validateHeadCircumference($headCircumference);
	}

	protected function validateHeadCircumference($headCircumference) {
		if ( ! $headCircumference instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($headCircumference) ) {
			$headCircumference = new \com\microsoft\wc\thing\types\LengthValue ($headCircumference);
		}
	
		return $headCircumference;
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
} // end class Baby
