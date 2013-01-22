<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="BXIT_CD")
 */
class BXITCD extends \CD\CD {
	/**
	 */

	/**
	 * @XmlAttribute	(type="integer", name="qty")
	 */
	protected $qty;

	public function __construct($qty = NULL) {
		$this->qty = ($qty===NULL) ? NULL : $this->validateQty($qty);
	}

	public function getQty() {
		if ($this->qty===NULL) {
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
} // end class BXITCD
