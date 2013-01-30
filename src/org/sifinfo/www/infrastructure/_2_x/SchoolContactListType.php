<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SchoolContactListType")
 */
class SchoolContactListType {
	/**
	 * A list of contact persons associated with a school.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolContact", collection="true", name="SchoolContact")
	 */
	protected $schoolContact;

	public function __construct($schoolContact = NULL) {
		$this->schoolContact = ($schoolContact===NULL) ? NULL : $this->validateSchoolContact($schoolContact);
	}

	public function getSchoolContact() {
		if ($this->schoolContact===NULL) {
			$this->schoolContact = $this->createSchoolContact();
		}
		return $this->schoolContact;
	}
	
	protected function createSchoolContact() {
		return array();
	}

	public function setSchoolContact($schoolContact) {
		$this->schoolContact = $this->validateSchoolContact($schoolContact);
	}

	protected function validateSchoolContact($schoolContact) {
		if ( ! is_array ($schoolContact) ) {
			$schoolContact = array($schoolContact);
		}
		$count = count($schoolContact);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'schoolContact', 1));
		}
		foreach ($schoolContact as $entry) {
			if (!($entry instanceof SchoolContact)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'schoolContact', 'SchoolContact'));
			}
		}
	
		return $schoolContact;
	}

	public function addSchoolContact($schoolContact) {
		$this->schoolContact[] = $schoolContact;
	}
} // end class SchoolContactListType
