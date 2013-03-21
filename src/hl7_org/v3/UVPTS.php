<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="UVP_TS")
 */
class UVPTS extends \org\w3\www\_2001\XMLSchema\TS {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="probability")
	 */
	protected $probability;

	public function __construct($probability = NULL) {
		$this->probability = ($probability===NULL) ? NULL : $this->validateProbability($probability);
	}

	public function getProbability($autoCreate = TRUE) {
		if ($this->probability===NULL && $autoCreate && ! isset($this->_overrides['probability']) ) {
			$this->probability = $this->createProbability();
		}
		return $this->probability;
	}
	
	protected function createProbability() {
		return NULL;
	}

	public function setProbability($probability) {
		$this->probability = $this->validateProbability($probability);
	}

	protected function validateProbability($probability) {
	
		return $probability;
	}
} // end class UVPTS
