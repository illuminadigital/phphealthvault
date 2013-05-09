<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Names")
 */
class Names {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Name", collection="true", name="Name")
	 */
	protected $name;

	public function __construct($name = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return array();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( $name === FALSE ) {
			$this->_overrides['name'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($name) && ! is_null($name) ) {
			$name = array($name);
		}

		unset ($this->_overrides['name']);
		$count = count($name);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 0));
		}
		if ( ! empty($name) ) {
			foreach ($name as $entry) {
				if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Name )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'Name'));
				}
			}
		}
	
		return $name;
	}

	public function addName($name) {
		$this->name[] = $name;
	}
} // end class Names
