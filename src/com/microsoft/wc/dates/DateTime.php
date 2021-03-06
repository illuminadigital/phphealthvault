<?php
namespace com\microsoft\wc\dates;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.dates", prefix="d")
 * })
 * @XmlEntity	(xml="date-time")
 */
class DateTime {
	/**
	 * date + time value, requires at least date
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Date", name="date")
	 */
	protected $date;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\Time", name="time")
	 */
	protected $time;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="tz")
	 */
	protected $tz;

	public function __construct($date = NULL, $time = NULL, $tz = NULL) {
		$this->date = ($date===NULL) ? NULL : $this->validateDate($date);
		$this->time = ($time===NULL) ? NULL : $this->validateTime($time);
		$this->tz = ($tz===NULL) ? NULL : $this->validateTz($tz);
	}

	public function getDate($autoCreate = TRUE) {
		if ($this->date===NULL && $autoCreate && ! isset($this->_overrides['date']) ) {
			$this->date = $this->createDate();
		}
		return $this->date;
	}
	
	protected function createDate() {
		return new \com\microsoft\wc\dates\Date();
	}

	public function setDate($date) {
		$this->date = $this->validateDate($date);
	}

	protected function validateDate($date) {
		if ( ! $date instanceof \com\microsoft\wc\dates\Date ) {
			$date = new \com\microsoft\wc\dates\Date ($date);
		}
	
		return $date;
	}

	public function getTime($autoCreate = TRUE) {
		if ($this->time===NULL && $autoCreate && ! isset($this->_overrides['time']) ) {
			$this->time = $this->createTime();
		}
		return $this->time;
	}
	
	protected function createTime() {
		return new \com\microsoft\wc\dates\Time();
	}

	public function setTime($time) {
		$this->time = $this->validateTime($time);
	}

	protected function validateTime($time) {
		if ( $time === FALSE ) {
			$this->_overrides['time'] = TRUE;
			return NULL;
		}

		if ( ! $time instanceof \com\microsoft\wc\dates\Time  && ! is_null($time) ) {
			$time = new \com\microsoft\wc\dates\Time ($time);
		}

		unset ($this->_overrides['time']);
	
		return $time;
	}

	public function getTz($autoCreate = TRUE) {
		if ($this->tz===NULL && $autoCreate && ! isset($this->_overrides['tz']) ) {
			$this->tz = $this->createTz();
		}
		return $this->tz;
	}
	
	protected function createTz() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setTz($tz) {
		$this->tz = $this->validateTz($tz);
	}

	protected function validateTz($tz) {
		if ( $tz === FALSE ) {
			$this->_overrides['tz'] = TRUE;
			return NULL;
		}

		if ( ! $tz instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($tz) ) {
			$tz = new \com\microsoft\wc\types\CodableValue ($tz);
		}

		unset ($this->_overrides['tz']);
	
		return $tz;
	}
} // end class DateTime
