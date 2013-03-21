<?php
namespace com\microsoft\wc\dates;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.dates", prefix="d")
 * })
 * @XmlEntity	(xml="time")
 */
class Time {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Hour", name="h")
	 */
	protected $h;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Minute", name="m")
	 */
	protected $m;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Second", name="s")
	 */
	protected $s;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Millisecond", name="f")
	 */
	protected $f;

	public function __construct($h = NULL, $m = NULL, $s = NULL, $f = NULL) {
		$this->h = ($h===NULL) ? NULL : $this->validateH($h);
		$this->m = ($m===NULL) ? NULL : $this->validateM($m);
		$this->s = ($s===NULL) ? NULL : $this->validateS($s);
		$this->f = ($f===NULL) ? NULL : $this->validateF($f);
	}

	public function getH($autoCreate = TRUE) {
		if ($this->h===NULL && $autoCreate && ! isset($this->_overrides['h']) ) {
			$this->h = $this->createH();
		}
		return $this->h;
	}
	
	protected function createH() {
		return new \com\microsoft\wc\dates\Hour();
	}

	public function setH($h) {
		$this->h = $this->validateH($h);
	}

	protected function validateH($h) {
		if ( ! $h instanceof \com\microsoft\wc\dates\Hour ) {
			$h = new \com\microsoft\wc\dates\Hour ($h);
		}
	
		return $h;
	}

	public function getM($autoCreate = TRUE) {
		if ($this->m===NULL && $autoCreate && ! isset($this->_overrides['m']) ) {
			$this->m = $this->createM();
		}
		return $this->m;
	}
	
	protected function createM() {
		return new \com\microsoft\wc\dates\Minute();
	}

	public function setM($m) {
		$this->m = $this->validateM($m);
	}

	protected function validateM($m) {
		if ( ! $m instanceof \com\microsoft\wc\dates\Minute ) {
			$m = new \com\microsoft\wc\dates\Minute ($m);
		}
	
		return $m;
	}

	public function getS($autoCreate = TRUE) {
		if ($this->s===NULL && $autoCreate && ! isset($this->_overrides['s']) ) {
			$this->s = $this->createS();
		}
		return $this->s;
	}
	
	protected function createS() {
		return new \com\microsoft\wc\dates\Second();
	}

	public function setS($s) {
		$this->s = $this->validateS($s);
	}

	protected function validateS($s) {
		if ( $s === FALSE ) {
			$this->_overrides['s'] = TRUE;
			return NULL;
		}

		if ( ! $s instanceof \com\microsoft\wc\dates\Second  && ! is_null($s) ) {
			$s = new \com\microsoft\wc\dates\Second ($s);
		}

		unset ($this->_overrides['s']);
	
		return $s;
	}

	public function getF($autoCreate = TRUE) {
		if ($this->f===NULL && $autoCreate && ! isset($this->_overrides['f']) ) {
			$this->f = $this->createF();
		}
		return $this->f;
	}
	
	protected function createF() {
		return new \com\microsoft\wc\dates\Millisecond();
	}

	public function setF($f) {
		$this->f = $this->validateF($f);
	}

	protected function validateF($f) {
		if ( $f === FALSE ) {
			$this->_overrides['f'] = TRUE;
			return NULL;
		}

		if ( ! $f instanceof \com\microsoft\wc\dates\Millisecond  && ! is_null($f) ) {
			$f = new \com\microsoft\wc\dates\Millisecond ($f);
		}

		unset ($this->_overrides['f']);
	
		return $f;
	}
} // end class Time
