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

	public function getH() {
		if ($this->h===NULL) {
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

	public function getM() {
		if ($this->m===NULL) {
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

	public function getS() {
		if ($this->s===NULL) {
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
		if ( ! $s instanceof \com\microsoft\wc\dates\Second  && ! is_null($s) ) {
			$s = new \com\microsoft\wc\dates\Second ($s);
		}
	
		return $s;
	}

	public function getF() {
		if ($this->f===NULL) {
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
		if ( ! $f instanceof \com\microsoft\wc\dates\Millisecond  && ! is_null($f) ) {
			$f = new \com\microsoft\wc\dates\Millisecond ($f);
		}
	
		return $f;
	}
} // end class Time
