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
	 * @XmlAttribute	(type="string", name="probability")
	 */
	protected $probability;

	public function __construct($probability = NULL) {
		$this->probability = ($probability===NULL) ? NULL : $this->validateProbability($probability);
	}

	public function getProbability() {
		if ($this->probability===NULL) {
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
