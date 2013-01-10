<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\String255;
use com\microsoft\wc\application\Guid;
use com\microsoft\wc\application\EmailAddress;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="Group")
 */
class Group {
	/**
	 * Defines a group to which on or more people may be a member.
	 * Groups are used for security purposes. They make it easier to grant access rights to a Microsoft HealthVault web service method, authorize people to a record, or grant access rights to particular data in a health record. They are not meant to be used as distribution lists for email or other forms of communication. For example, all the doctors at a particular clinic may belong to a group to which an individual may grant permission to see medications in their health record.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\String255", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\Guid", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\EmailAddress", name="contact-email")
	 */
	protected $contactEmail;

	public function __construct($name = NULL, $id = NULL, $contactEmail = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->contactEmail = ($contactEmail===NULL) ? NULL : $this->validateContactEmail($contactEmail);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new String255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof String255 ) {
			$name = new String255 ($name);
		}
	
		return $name;
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof Guid ) {
			$id = new Guid ($id);
		}
	
		return $id;
	}

	public function getContactEmail() {
		if ($this->contactEmail===NULL) {
			$this->contactEmail = $this->createContactEmail();
		}
		return $this->contactEmail;
	}
	
	protected function createContactEmail() {
		return new EmailAddress();
	}

	public function setContactEmail($contactEmail) {
		$this->contactEmail = $this->validateContactEmail($contactEmail);
	}

	protected function validateContactEmail($contactEmail) {
		if ( ! $contactEmail instanceof EmailAddress ) {
			$contactEmail = new EmailAddress ($contactEmail);
		}
	
		return $contactEmail;
	}
} // end class Group
