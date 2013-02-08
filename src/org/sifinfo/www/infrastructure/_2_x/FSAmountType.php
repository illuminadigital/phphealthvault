<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="FSAmountType")
 */
class FSAmountType extends MonetaryAmountType {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	/**
	 * @XmlAttribute	(type="decimal", name="Credits")
	 */
	protected $credits;

	public function __construct($type = NULL, $credits = NULL) {
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->credits = ($credits===NULL) ? NULL : $this->validateCredits($credits);
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}

	public function getCredits() {
		if ($this->credits===NULL) {
			$this->credits = $this->createCredits();
		}
		return $this->credits;
	}
	
	protected function createCredits() {
		return NULL;
	}

	public function setCredits($credits) {
		$this->credits = $this->validateCredits($credits);
	}

	protected function validateCredits($credits) {
		if (!is_decimal($credits)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'credits', 'decimal'));
		}
	
		return $credits;
	}
} // end class FSAmountType
