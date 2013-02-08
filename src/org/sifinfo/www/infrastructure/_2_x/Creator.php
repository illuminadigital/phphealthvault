<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Creator")
 */
class Creator {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="ID")
	 */
	protected $iD;

	public function __construct($name = NULL, $iD = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return NULL;
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_normalizedString($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'normalizedString'));
		}
	
		return $name;
	}

	public function getID() {
		if ($this->iD===NULL) {
			$this->iD = $this->createID();
		}
		return $this->iD;
	}
	
	protected function createID() {
		return NULL;
	}

	public function setID($iD) {
		$this->iD = $this->validateID($iD);
	}

	protected function validateID($iD) {
		if (!is_normalizedString($iD)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'iD', 'normalizedString'));
		}
	
		return $iD;
	}
} // end class Creator
