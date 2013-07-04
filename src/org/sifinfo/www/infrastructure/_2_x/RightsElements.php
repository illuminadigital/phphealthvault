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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\RightsElement", collection="true", name="RightsElement")
	 */
	protected $rightsElement;

	public function __construct($rightsElement = NULL) {
		$this->rightsElement = ($rightsElement===NULL) ? NULL : $this->validateRightsElement($rightsElement);
	}

	public function getRightsElement($autoCreate = TRUE) {
		if ($this->rightsElement===NULL && $autoCreate && ! isset($this->_overrides['rightsElement']) ) {
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
		$count = count($rightsElement);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'rightsElement', 0));
		}
		if ( ! empty($rightsElement) ) {
			foreach ($rightsElement as $entry) {
				if ( ! is_RightsElement($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'rightsElement', 'RightsElement'));
				}
			}
		}
	
		return $rightsElement;
	}

	public function addRightsElement($rightsElement) {
		$this->rightsElement[] = $this->validateRightsElementType($rightsElement);
	}

	protected function validateRightsElementType($rightsElement) {
		if ( ! is_RightsElement($rightsElement) && ! is_null($rightsElement) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'rightsElement', 'RightsElement'));
		}
	
		return $rightsElement;
	}
} // end class RightsElements
