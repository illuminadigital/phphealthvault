<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlEntity	(xml="DSAKeyValueType")
 */
class DSAKeyValueType {
	/**
	 */

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

	public function getP() {
		if ($this->p===NULL) {
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

	public function getQ() {
		if ($this->q===NULL) {
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

	public function getG() {
		if ($this->g===NULL) {
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
		if ( ! $g instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary  && ! is_null($g) ) {
			$g = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($g);
		}
	
		return $g;
	}

	public function getY() {
		if ($this->y===NULL) {
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

	public function getJ() {
		if ($this->j===NULL) {
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
		if ( ! $j instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary  && ! is_null($j) ) {
			$j = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($j);
		}
	
		return $j;
	}

	public function getSeed() {
		if ($this->seed===NULL) {
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

	public function getPgenCounter() {
		if ($this->pgenCounter===NULL) {
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
