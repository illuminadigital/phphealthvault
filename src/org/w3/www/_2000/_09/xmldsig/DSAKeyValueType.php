<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="DSAKeyValueType")
 */
class DSAKeyValueType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="P")
	 */
	protected $p;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="Q")
	 */
	protected $q;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="G")
	 */
	protected $g;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="Y")
	 */
	protected $y;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="J")
	 */
	protected $j;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="Seed")
	 */
	protected $seed;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="PgenCounter")
	 */
	protected $pgenCounter;

	public function __construct($p = NULL, $q = NULL, $g = NULL, $y = NULL, $j = NULL, $seed = NULL, $pgenCounter = NULL) {
		$this->p = ($p===NULL) ? NULL : $this->validateP($p);
		$this->q = ($q===NULL) ? NULL : $this->validateQ($q);
		$this->g = ($g===NULL) ? NULL : $this->validateG($g);
		$this->y = ($y===NULL) ? NULL : $this->validateY($y);
		$this->j = ($j===NULL) ? NULL : $this->validateJ($j);
		$this->seed = ($seed===NULL) ? NULL : $this->validateSeed($seed);
		$this->pgenCounter = ($pgenCounter===NULL) ? NULL : $this->validatePgenCounter($pgenCounter);
	}

	public function getP($autoCreate = TRUE) {
		if ($this->p===NULL && $autoCreate && ! isset($this->_overrides['p']) ) {
			$this->p = $this->createP();
		}
		return $this->p;
	}
	
	protected function createP() {
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setP($p) {
		$this->p = $this->validateP($p);
	}

	protected function validateP($p) {
		if ( ! $p instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary ) {
			$p = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($p);
		}
	
		return $p;
	}

	public function getQ($autoCreate = TRUE) {
		if ($this->q===NULL && $autoCreate && ! isset($this->_overrides['q']) ) {
			$this->q = $this->createQ();
		}
		return $this->q;
	}
	
	protected function createQ() {
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setQ($q) {
		$this->q = $this->validateQ($q);
	}

	protected function validateQ($q) {
		if ( ! $q instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary ) {
			$q = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($q);
		}
	
		return $q;
	}

	public function getG($autoCreate = TRUE) {
		if ($this->g===NULL && $autoCreate && ! isset($this->_overrides['g']) ) {
			$this->g = $this->createG();
		}
		return $this->g;
	}
	
	protected function createG() {
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setG($g) {
		$this->g = $this->validateG($g);
	}

	protected function validateG($g) {
		if ( $g === FALSE ) {
			$this->_overrides['g'] = TRUE;
			return NULL;
		}

		if ( ! $g instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary  && ! is_null($g) ) {
			$g = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($g);
		}

		unset ($this->_overrides['g']);
	
		return $g;
	}

	public function getY($autoCreate = TRUE) {
		if ($this->y===NULL && $autoCreate && ! isset($this->_overrides['y']) ) {
			$this->y = $this->createY();
		}
		return $this->y;
	}
	
	protected function createY() {
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setY($y) {
		$this->y = $this->validateY($y);
	}

	protected function validateY($y) {
		if ( ! $y instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary ) {
			$y = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($y);
		}
	
		return $y;
	}

	public function getJ($autoCreate = TRUE) {
		if ($this->j===NULL && $autoCreate && ! isset($this->_overrides['j']) ) {
			$this->j = $this->createJ();
		}
		return $this->j;
	}
	
	protected function createJ() {
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setJ($j) {
		$this->j = $this->validateJ($j);
	}

	protected function validateJ($j) {
		if ( $j === FALSE ) {
			$this->_overrides['j'] = TRUE;
			return NULL;
		}

		if ( ! $j instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary  && ! is_null($j) ) {
			$j = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($j);
		}

		unset ($this->_overrides['j']);
	
		return $j;
	}

	public function getSeed($autoCreate = TRUE) {
		if ($this->seed===NULL && $autoCreate && ! isset($this->_overrides['seed']) ) {
			$this->seed = $this->createSeed();
		}
		return $this->seed;
	}
	
	protected function createSeed() {
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setSeed($seed) {
		$this->seed = $this->validateSeed($seed);
	}

	protected function validateSeed($seed) {
		if ( ! $seed instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary ) {
			$seed = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($seed);
		}
	
		return $seed;
	}

	public function getPgenCounter($autoCreate = TRUE) {
		if ($this->pgenCounter===NULL && $autoCreate && ! isset($this->_overrides['pgenCounter']) ) {
			$this->pgenCounter = $this->createPgenCounter();
		}
		return $this->pgenCounter;
	}
	
	protected function createPgenCounter() {
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setPgenCounter($pgenCounter) {
		$this->pgenCounter = $this->validatePgenCounter($pgenCounter);
	}

	protected function validatePgenCounter($pgenCounter) {
		if ( ! $pgenCounter instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary ) {
			$pgenCounter = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($pgenCounter);
		}
	
		return $pgenCounter;
	}
} // end class DSAKeyValueType
