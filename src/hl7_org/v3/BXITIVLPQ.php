<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="BXIT_IVL_PQ")
 */
class BXITIVLPQ extends \org\w3\www\_2001\XMLSchema\IVLPQ {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="integer", name="qty")
	 */
	protected $qty;

	public function __construct($qty = NULL) {
		$this->qty = ($qty===NULL) ? NULL : $this->validateQty($qty);
	}

	public function getQty($autoCreate = TRUE) {
		if ($this->qty===NULL && $autoCreate && ! isset($this->_overrides['qty']) ) {
			$this->qty = $this->createQty();
		}
		return $this->qty;
	}
	
	protected function createQty() {
		return 0;
	}

	public function setQty($qty) {
		$this->qty = $this->validateQty($qty);
	}

	protected function validateQty($qty) {
	
		return $qty;
	}
} // end class BXITIVLPQ
