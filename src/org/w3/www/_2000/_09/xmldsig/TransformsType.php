<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="TransformsType")
 */
class TransformsType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\Transform", collection="true", name="Transform")
	 */
	protected $transform;

	public function __construct($transform = NULL) {
		$this->transform = ($transform===NULL) ? NULL : $this->validateTransform($transform);
	}

	public function getTransform() {
		if ($this->transform===NULL) {
			$this->transform = $this->createTransform();
		}
		return $this->transform;
	}
	
	protected function createTransform() {
		return array();
	}

	public function setTransform($transform) {
		$this->transform = $this->validateTransform($transform);
	}

	protected function validateTransform($transform) {
		if ( ! $transform instanceof \org\w3\www\_2000\_09\xmldsig\Transform ) {
			$transform = new \org\w3\www\_2000\_09\xmldsig\Transform ($transform);
		}
		$count = count($transform);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'transform', 1));
		}
		foreach ($transform as $entry) {
			if (!($entry instanceof Transform)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'transform', 'Transform'));
			}
		}
	
		return $transform;
	}

	public function addTransform($transform) {
		$this->transform[] = $transform;
	}
} // end class TransformsType