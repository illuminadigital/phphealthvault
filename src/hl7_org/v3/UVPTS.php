<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="UVP_TS")
 */
class UVPTS extends \TS\TS {
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
		return new \hl7_org\v3\Probability();
	}

	public function setProbability($probability) {
		$this->probability = $this->validateProbability($probability);
	}

	protected function validateProbability($probability) {
		if ( ! $probability instanceof \hl7_org\v3\Probability  && ! is_null($probability) ) {
			$probability = new \hl7_org\v3\Probability ($probability);
		}
	
		return $probability;
	}
} // end class UVPTS
