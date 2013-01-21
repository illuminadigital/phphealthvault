<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ElectronicIdListType")
 */
class ElectronicIdListType {
	/**
	 * A list of electronic identifiers associated with an entity.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ElectronicId", collection="true", name="ElectronicId")
	 */
	protected $electronicId;

	public function __construct($electronicId = NULL) {
		$this->electronicId = ($electronicId===NULL) ? NULL : $this->validateElectronicId($electronicId);
	}

	public function getElectronicId() {
		if ($this->electronicId===NULL) {
			$this->electronicId = $this->createElectronicId();
		}
		return $this->electronicId;
	}
	
	protected function createElectronicId() {
		return array();
	}

	public function setElectronicId($electronicId) {
		$this->electronicId = $this->validateElectronicId($electronicId);
	}

	protected function validateElectronicId($electronicId) {
		if ( ! $electronicId instanceof \org\sifinfo\www\infrastructure\_2_x\ElectronicId ) {
			$electronicId = new \org\sifinfo\www\infrastructure\_2_x\ElectronicId ($electronicId);
		}
		$count = count($electronicId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'electronicId', 1));
		}
		foreach ($electronicId as $entry) {
			if (!($entry instanceof ElectronicId)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'electronicId', 'ElectronicId'));
			}
		}
	
		return $electronicId;
	}

	public function addElectronicId($electronicId) {
		$this->electronicId[] = $electronicId;
	}
} // end class ElectronicIdListType
