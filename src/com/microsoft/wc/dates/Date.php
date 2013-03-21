<?php
namespace com\microsoft\wc\dates;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.dates", prefix="d")
 * })
 * @XmlEntity	(xml="date")
 */
class Date {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Year", name="y")
	 */
	protected $y;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Month", name="m")
	 */
	protected $m;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Day", name="d")
	 */
	protected $d;

	public function __construct($y = NULL, $m = NULL, $d = NULL) {
		$this->y = ($y===NULL) ? NULL : $this->validateY($y);
		$this->m = ($m===NULL) ? NULL : $this->validateM($m);
		$this->d = ($d===NULL) ? NULL : $this->validateD($d);
	}

	public function getY($autoCreate = TRUE) {
		if ($this->y===NULL && $autoCreate && ! isset($this->_overrides['y']) ) {
			$this->y = $this->createY();
		}
		return $this->y;
	}
	
	protected function createY() {
		return new \com\microsoft\wc\dates\Year();
	}

	public function setY($y) {
		$this->y = $this->validateY($y);
	}

	protected function validateY($y) {
		if ( ! $y instanceof \com\microsoft\wc\dates\Year ) {
			$y = new \com\microsoft\wc\dates\Year ($y);
		}
	
		return $y;
	}

	public function getM($autoCreate = TRUE) {
		if ($this->m===NULL && $autoCreate && ! isset($this->_overrides['m']) ) {
			$this->m = $this->createM();
		}
		return $this->m;
	}
	
	protected function createM() {
		return new \com\microsoft\wc\dates\Month();
	}

	public function setM($m) {
		$this->m = $this->validateM($m);
	}

	protected function validateM($m) {
		if ( ! $m instanceof \com\microsoft\wc\dates\Month ) {
			$m = new \com\microsoft\wc\dates\Month ($m);
		}
	
		return $m;
	}

	public function getD($autoCreate = TRUE) {
		if ($this->d===NULL && $autoCreate && ! isset($this->_overrides['d']) ) {
			$this->d = $this->createD();
		}
		return $this->d;
	}
	
	protected function createD() {
		return new \com\microsoft\wc\dates\Day();
	}

	public function setD($d) {
		$this->d = $this->validateD($d);
	}

	protected function validateD($d) {
		if ( ! $d instanceof \com\microsoft\wc\dates\Day ) {
			$d = new \com\microsoft\wc\dates\Day ($d);
		}
	
		return $d;
	}
} // end class Date
