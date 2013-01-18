<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="BIN")
 */
class BIN extends \ANY\ANY {
	/**
	 * Binary data is a raw block of bits. Binary data is a protected type that MUST not be used outside the data type specification.
	 */

	/**
	 * @XmlAttribute	(type="string", name="representation")
	 */
	protected $representation;

	public function __construct($representation = NULL) {
		$this->representation = ($representation===NULL) ? NULL : $this->validateRepresentation($representation);
	}

	public function getRepresentation() {
		if ($this->representation===NULL) {
			$this->representation = $this->createRepresentation();
		}
		return $this->representation;
	}
	
	protected function createRepresentation() {
		return new \hl7_org\v3\BinaryDataEncoding();
	}

	public function setRepresentation($representation) {
		$this->representation = $this->validateRepresentation($representation);
	}

	protected function validateRepresentation($representation) {
		if ( ! $representation instanceof \hl7_org\v3\BinaryDataEncoding  && ! is_null($representation) ) {
			$representation = new \hl7_org\v3\BinaryDataEncoding ($representation);
		}
	
		return $representation;
	}
} // end class BIN
