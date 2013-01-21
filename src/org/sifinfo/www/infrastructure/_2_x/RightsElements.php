<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="RightsElements")
 */
class RightsElements {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\RightsElement", collection="true", name="RightsElement")
	 */
	protected $rightsElement;

	public function __construct($rightsElement = NULL) {
		$this->rightsElement = ($rightsElement===NULL) ? NULL : $this->validateRightsElement($rightsElement);
	}

	public function getRightsElement() {
		if ($this->rightsElement===NULL) {
			$this->rightsElement = $this->createRightsElement();
		}
		return $this->rightsElement;
	}
	
	protected function createRightsElement() {
		return array();
	}

	public function setRightsElement($rightsElement) {
		$this->rightsElement = $this->validateRightsElement($rightsElement);
	}

	protected function validateRightsElement($rightsElement) {
		if ( ! $rightsElement instanceof \org\sifinfo\www\infrastructure\_2_x\RightsElement  && ! is_null($rightsElement) ) {
			$rightsElement = new \org\sifinfo\www\infrastructure\_2_x\RightsElement ($rightsElement);
		}
		$count = count($rightsElement);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'rightsElement', 0));
		}
		foreach ($rightsElement as $entry) {
			if (!($entry instanceof RightsElement)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'rightsElement', 'RightsElement'));
			}
		}
	
		return $rightsElement;
	}

	public function addRightsElement($rightsElement) {
		$this->rightsElement[] = $rightsElement;
	}
} // end class RightsElements
