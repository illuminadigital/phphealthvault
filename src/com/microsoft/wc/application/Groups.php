<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\Group;

/**
 * @XmlEntity	(xml="Groups")
 */
class Groups {
	/**
	 * Contains a list of the groups a person is a member of.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\Group", collection="true", name="group")
	 */
	protected $group;

	public function __construct($group = NULL) {
		$this->group = ($group===NULL) ? NULL : $this->validateGroup($group);
	}

	public function getGroup() {
		if ($this->group===NULL) {
			$this->group = $this->createGroup();
		}
		return $this->group;
	}
	
	protected function createGroup() {
		return array();
	}

	public function setGroup($group) {
		$this->group = $this->validateGroup($group);
	}

	protected function validateGroup($group) {
		if ( ! $group instanceof Group ) {
			$group = new Group ($group);
		}
		$count = count($group);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'group', 1));
		}
		foreach ($group as $entry) {
			if (!($entry instanceof Group)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'group', 'Group'));
			}
		}
	
		return $group;
	}

	public function addGroup($group) {
		$this->group[] = $group;
	}
} // end class Groups
