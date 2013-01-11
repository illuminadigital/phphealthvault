<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\Year;
use com\microsoft\wc\thing\Month;
use com\microsoft\wc\thing\Day;

/**
 * @XmlEntity	(xml="approx-date")
 */
class ApproxDate {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Year", name="y")
	 */
	protected $y;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Month", name="m")
	 */
	protected $m;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Day", name="d")
	 */
	protected $d;

	public function __construct($y = NULL, $m = NULL, $d = NULL) {
		$this->y = ($y===NULL) ? NULL : $this->validateY($y);
		$this->m = ($m===NULL) ? NULL : $this->validateM($m);
		$this->d = ($d===NULL) ? NULL : $this->validateD($d);
	}

	public function getY() {
		if ($this->y===NULL) {
			$this->y = $this->createY();
		}
		return $this->y;
	}
	
	protected function createY() {
		return new Year();
	}

	public function setY($y) {
		$this->y = $this->validateY($y);
	}

	protected function validateY($y) {
		if ( ! $y instanceof Year ) {
			$y = new Year ($y);
		}
	
		return $y;
	}

	public function getM() {
		if ($this->m===NULL) {
			$this->m = $this->createM();
		}
		return $this->m;
	}
	
	protected function createM() {
		return new Month();
	}

	public function setM($m) {
		$this->m = $this->validateM($m);
	}

	protected function validateM($m) {
		if ( ! $m instanceof Month  && ! is_null($m) ) {
			$m = new Month ($m);
		}
	
		return $m;
	}

	public function getD() {
		if ($this->d===NULL) {
			$this->d = $this->createD();
		}
		return $this->d;
	}
	
	protected function createD() {
		return new Day();
	}

	public function setD($d) {
		$this->d = $this->validateD($d);
	}

	protected function validateD($d) {
		if ( ! $d instanceof Day  && ! is_null($d) ) {
			$d = new Day ($d);
		}
	
		return $d;
	}
} // end class ApproxDate
