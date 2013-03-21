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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	/**
	 * @XmlAttribute	(type="float", name="Credits")
	 */
	protected $credits;

	public function __construct($type = NULL, $credits = NULL) {
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->credits = ($credits===NULL) ? NULL : $this->validateCredits($credits);
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
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

	public function getCredits($autoCreate = TRUE) {
		if ($this->credits===NULL && $autoCreate && ! isset($this->_overrides['credits']) ) {
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
		$isValid = FALSE;
		if ( is_float($credits) ) {
			$isValid = TRUE;
		}
		else if ( $credits == ($castVar = (float) $credits) ) {
			$isValid = TRUE;
			$credits = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'credits', 'float'));
		}
	
		return $credits;
	}
} // end class FSAmountType
