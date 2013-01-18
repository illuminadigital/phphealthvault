<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="person")
 */
class Person {
	/**
	 * PersonItem
	 * Information related to a contact.
	 * A contact may be an emergency contact, contact informationfor a doctor, lawyer, etc.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Name", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="organization")
	 */
	protected $organization;

	/**
	 * @XmlText	(type="string", name="professional-training")
	 */
	protected $professionalTraining;

	/**
	 * @XmlText	(type="string", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Contact", name="contact")
	 */
	protected $contact;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="type")
	 */
	protected $type;

	public function __construct($name = NULL, $organization = NULL, $professionalTraining = NULL, $id = NULL, $contact = NULL, $type = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->organization = ($organization===NULL) ? NULL : $this->validateOrganization($organization);
		$this->professionalTraining = ($professionalTraining===NULL) ? NULL : $this->validateProfessionalTraining($professionalTraining);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->contact = ($contact===NULL) ? NULL : $this->validateContact($contact);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
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
		if ( ! $name instanceof \com\microsoft\wc\thing\types\Name ) {
			$name = new \com\microsoft\wc\thing\types\Name ($name);
		}
	
		return $name;
	}

	public function getOrganization() {
		if ($this->organization===NULL) {
			$this->organization = $this->createOrganization();
		}
		return $this->organization;
	}
	
	protected function createOrganization() {
		return '';
	}

	public function setOrganization($organization) {
		$this->organization = $this->validateOrganization($organization);
	}

	protected function validateOrganization($organization) {
		if ( ! is_string($organization) && ! is_null($organization) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'organization', 'string'));
		}
	
		return $organization;
	}

	public function getProfessionalTraining() {
		if ($this->professionalTraining===NULL) {
			$this->professionalTraining = $this->createProfessionalTraining();
		}
		return $this->professionalTraining;
	}
	
	protected function createProfessionalTraining() {
		return '';
	}

	public function setProfessionalTraining($professionalTraining) {
		$this->professionalTraining = $this->validateProfessionalTraining($professionalTraining);
	}

	protected function validateProfessionalTraining($professionalTraining) {
		if ( ! is_string($professionalTraining) && ! is_null($professionalTraining) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'professionalTraining', 'string'));
		}
	
		return $professionalTraining;
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return '';
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! is_string($id) && ! is_null($id) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'string'));
		}
	
		return $id;
	}

	public function getContact() {
		if ($this->contact===NULL) {
			$this->contact = $this->createContact();
		}
		return $this->contact;
	}
	
	protected function createContact() {
		return new \com\microsoft\wc\thing\types\Contact();
	}

	public function setContact($contact) {
		$this->contact = $this->validateContact($contact);
	}

	protected function validateContact($contact) {
		if ( ! $contact instanceof \com\microsoft\wc\thing\types\Contact  && ! is_null($contact) ) {
			$contact = new \com\microsoft\wc\thing\types\Contact ($contact);
		}
	
		return $contact;
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! $type instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($type) ) {
			$type = new \com\microsoft\wc\types\CodableValue ($type);
		}
	
		return $type;
	}
} // end class Person
