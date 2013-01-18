<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="LearningStandardItems")
 */
class LearningStandardItems {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", collection="true", name="LearningStandardItemRefId")
	 */
	protected $learningStandardItemRefId;

	public function __construct($learningStandardItemRefId = NULL) {
		$this->learningStandardItemRefId = ($learningStandardItemRefId===NULL) ? NULL : $this->validateLearningStandardItemRefId($learningStandardItemRefId);
	}

	public function getLearningStandardItemRefId() {
		if ($this->learningStandardItemRefId===NULL) {
			$this->learningStandardItemRefId = $this->createLearningStandardItemRefId();
		}
		return $this->learningStandardItemRefId;
	}
	
	protected function createLearningStandardItemRefId() {
		return array();
	}

	public function setLearningStandardItemRefId($learningStandardItemRefId) {
		$this->learningStandardItemRefId = $this->validateLearningStandardItemRefId($learningStandardItemRefId);
	}

	protected function validateLearningStandardItemRefId($learningStandardItemRefId) {
		if ( ! $learningStandardItemRefId instanceof \org\sifinfo\www\infrastructure\_2_x\IdRefType ) {
			$learningStandardItemRefId = new \org\sifinfo\www\infrastructure\_2_x\IdRefType ($learningStandardItemRefId);
		}
		$count = count($learningStandardItemRefId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'learningStandardItemRefId', 1));
		}
		foreach ($learningStandardItemRefId as $entry) {
			if (!($entry instanceof IdRefType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'learningStandardItemRefId', 'IdRefType'));
			}
		}
	
		return $learningStandardItemRefId;
	}

	public function addLearningStandardItemRefId($learningStandardItemRefId) {
		$this->learningStandardItemRefId[] = $learningStandardItemRefId;
	}
} // end class LearningStandardItems
