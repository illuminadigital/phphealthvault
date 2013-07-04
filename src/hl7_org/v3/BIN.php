<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="BIN")
 */
class BIN extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * Binary data is a raw block of bits. Binary data is aprotected type that MUST not be used outside the datatype specification.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="representation")
	 */
	protected $representation;

	public function __construct($representation = NULL) {
		$this->representation = ($representation===NULL) ? NULL : $this->validateRepresentation($representation);
	}

	public function getRepresentation($autoCreate = TRUE) {
		if ($this->representation===NULL && $autoCreate && ! isset($this->_overrides['representation']) ) {
			$this->representation = $this->createRepresentation();
		}
		return $this->representation;
	}
	
	protected function createRepresentation() {
		return NULL;
	}

	public function setRepresentation($representation) {
		$this->representation = $this->validateRepresentation($representation);
	}

	protected function validateRepresentation($representation) {
	
		return $representation;
	}
} // end class BIN
