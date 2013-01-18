<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="Organization")
 */
class Organization {
	/**
	 * Organization
	 * An organization entity.
	 * An entity such as a hospital, a pharmacy, or a doctor's office.
	 */

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Contact", name="contact")
	 */
	protected $contact;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="type")
	 */
	protected $type;

	/**
	 * @XmlText	(type="string", name="website")
	 */
	protected $website;

	public function __construct($name = NULL, $contact = NULL, $type = NULL, $website = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->contact = ($contact===NULL) ? NULL : $this->validateContact($contact);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->website = ($website===NULL) ? NULL : $this->validateWebsite($website);
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
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
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

	public function getWebsite() {
		if ($this->website===NULL) {
			$this->website = $this->createWebsite();
		}
		return $this->website;
	}
	
	protected function createWebsite() {
		return '';
	}

	public function setWebsite($website) {
		$this->website = $this->validateWebsite($website);
	}

	protected function validateWebsite($website) {
		if ( ! is_string($website) && ! is_null($website) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'website', 'string'));
		}
	
		return $website;
	}
} // end class Organization
