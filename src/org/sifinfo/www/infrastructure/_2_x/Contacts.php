<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Contacts")
 */
class Contacts {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Contact", collection="true", name="Contact")
	 */
	protected $contact;

	public function __construct($contact = NULL) {
		$this->contact = ($contact===NULL) ? NULL : $this->validateContact($contact);
	}

	public function getContact() {
		if ($this->contact===NULL) {
			$this->contact = $this->createContact();
		}
		return $this->contact;
	}
	
	protected function createContact() {
		return array();
	}

	public function setContact($contact) {
		$this->contact = $this->validateContact($contact);
	}

	protected function validateContact($contact) {
		if ( ! is_array ($contact) && ! is_null($contact) ) {
			$contact = array($contact);
		}
		$count = count($contact);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'contact', 0));
		}
		foreach ($contact as $entry) {
			if (!($entry instanceof Contact)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'contact', 'Contact'));
			}
		}
	
		return $contact;
	}

	public function addContact($contact) {
		$this->contact[] = $contact;
	}
} // end class Contacts
