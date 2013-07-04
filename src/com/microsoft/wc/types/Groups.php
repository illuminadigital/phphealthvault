<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="Groups")
 */
class Groups {
	/**
	 * Contains a list of the groups a person is a member of.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Group", collection="true", name="group")
	 */
	protected $group;

	public function __construct($group = NULL) {
		$this->group = ($group===NULL) ? NULL : $this->validateGroup($group);
	}

	public function getGroup($autoCreate = TRUE) {
		if ($this->group===NULL && $autoCreate && ! isset($this->_overrides['group']) ) {
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
		if ( ! is_array ($group) ) {
			$group = array($group);
		}
		$count = count($group);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'group', 1));
		}
		foreach ($group as $entry) {
			if (!($entry instanceof \com\microsoft\wc\types\Group )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'group', 'Group'));
			}
		}
	
		return $group;
	}

	public function addGroup($group) {
		$this->group[] = $group;
	}
} // end class Groups
