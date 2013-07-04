<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Requirement")
 */
class Requirement {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="Name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="Method")
	 */
	protected $method;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Status", name="Status")
	 */
	protected $status;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="StatusDeterminationDate")
	 */
	protected $statusDeterminationDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($name = NULL, $method = NULL, $status = NULL, $statusDeterminationDate = NULL, $sifExtendedElements = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->method = ($method===NULL) ? NULL : $this->validateMethod($method);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->statusDeterminationDate = ($statusDeterminationDate===NULL) ? NULL : $this->validateStatusDeterminationDate($statusDeterminationDate);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return NULL;
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getMethod($autoCreate = TRUE) {
		if ($this->method===NULL && $autoCreate && ! isset($this->_overrides['method']) ) {
			$this->method = $this->createMethod();
		}
		return $this->method;
	}
	
	protected function createMethod() {
		return '';
	}

	public function setMethod($method) {
		$this->method = $this->validateMethod($method);
	}

	protected function validateMethod($method) {
		if ( ! is_string($method) && ! is_null($method) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'method', 'string'));
		}
	
		return $method;
	}

	public function getStatus($autoCreate = TRUE) {
		if ($this->status===NULL && $autoCreate && ! isset($this->_overrides['status']) ) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return NULL;
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
	
		return $status;
	}

	public function getStatusDeterminationDate($autoCreate = TRUE) {
		if ($this->statusDeterminationDate===NULL && $autoCreate && ! isset($this->_overrides['statusDeterminationDate']) ) {
			$this->statusDeterminationDate = $this->createStatusDeterminationDate();
		}
		return $this->statusDeterminationDate;
	}
	
	protected function createStatusDeterminationDate() {
		return NULL;
	}

	public function setStatusDeterminationDate($statusDeterminationDate) {
		$this->statusDeterminationDate = $this->validateStatusDeterminationDate($statusDeterminationDate);
	}

	protected function validateStatusDeterminationDate($statusDeterminationDate) {
	
		return $statusDeterminationDate;
	}

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}
} // end class Requirement
