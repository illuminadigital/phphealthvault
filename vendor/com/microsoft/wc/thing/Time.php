<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\Hour;
use com\microsoft\wc\thing\Minute;
use com\microsoft\wc\thing\Second;
use com\microsoft\wc\thing\Millisecond;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="time")
 */
class Time {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Hour", name="h")
	 */
	protected $h;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Minute", name="m")
	 */
	protected $m;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Second", name="s")
	 */
	protected $s;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Millisecond", name="f")
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
		return new Hour();
	}

	public function setH($h) {
		$this->h = $this->validateH($h);
	}

	protected function validateH($h) {
		if ( ! $h instanceof Hour ) {
			$h = new Hour ($h);
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
		return new Minute();
	}

	public function setM($m) {
		$this->m = $this->validateM($m);
	}

	protected function validateM($m) {
		if ( ! $m instanceof Minute ) {
			$m = new Minute ($m);
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
		return new Second();
	}

	public function setS($s) {
		$this->s = $this->validateS($s);
	}

	protected function validateS($s) {
		if ( ! $s instanceof Second ) {
			$s = new Second ($s);
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
		return new Millisecond();
	}

	public function setF($f) {
		$this->f = $this->validateF($f);
	}

	protected function validateF($f) {
		if ( ! $f instanceof Millisecond ) {
			$f = new Millisecond ($f);
		}
	
		return $f;
	}
} // end class Time
