<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-team")
 */
class CareTeam {
	/**
	 * Team of people associated with the care plan.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", collection="true", name="person")
	 */
	protected $person;

	public function __construct($person = NULL) {
		$this->person = ($person===NULL) ? NULL : $this->validatePerson($person);
	}

	public function getPerson($autoCreate = TRUE) {
		if ($this->person===NULL && $autoCreate && ! isset($this->_overrides['person']) ) {
			$this->person = $this->createPerson();
		}
		return $this->person;
	}
	
	protected function createPerson() {
		return array();
	}

	public function setPerson($person) {
		$this->person = $this->validatePerson($person);
	}

	protected function validatePerson($person) {
		if ( ! is_array ($person) ) {
			$person = array($person);
		}
		$count = count($person);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'person', 1));
		}
		foreach ($person as $entry) {
			if (!($entry instanceof Person)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'person', 'person'));
			}
		}
	
		return $person;
	}

	public function addPerson($person) {
		$this->person[] = $person;
	}
} // end class CareTeam
