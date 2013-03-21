<?php
namespace com\microsoft\wc\thing\aerobic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.aerobic-profile", prefix="")
 * })
 * @XmlEntity	(xml="MaxVO2")
 */
class MaxVO2 {
	/**
	 * The maximum capacity of person to transport and utilize oxygen during incremental exercise.
	 * VO2 max can be measured as either an absoluteamount of oxygen utilized, or as an amountthat is relative to the person's body weight.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="absolute")
	 */
	protected $absolute;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="relative")
	 */
	protected $relative;

	public function __construct($absolute = NULL, $relative = NULL) {
		$this->absolute = ($absolute===NULL) ? NULL : $this->validateAbsolute($absolute);
		$this->relative = ($relative===NULL) ? NULL : $this->validateRelative($relative);
	}

	public function getAbsolute($autoCreate = TRUE) {
		if ($this->absolute===NULL && $autoCreate && ! isset($this->_overrides['absolute']) ) {
			$this->absolute = $this->createAbsolute();
		}
		return $this->absolute;
	}
	
	protected function createAbsolute() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setAbsolute($absolute) {
		$this->absolute = $this->validateAbsolute($absolute);
	}

	protected function validateAbsolute($absolute) {
		if ( $absolute === FALSE ) {
			$this->_overrides['absolute'] = TRUE;
			return NULL;
		}

		if ( ! $absolute instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($absolute) ) {
			$absolute = new \com\microsoft\wc\thing\types\PositiveDouble ($absolute);
		}

		unset ($this->_overrides['absolute']);
	
		return $absolute;
	}

	public function getRelative($autoCreate = TRUE) {
		if ($this->relative===NULL && $autoCreate && ! isset($this->_overrides['relative']) ) {
			$this->relative = $this->createRelative();
		}
		return $this->relative;
	}
	
	protected function createRelative() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setRelative($relative) {
		$this->relative = $this->validateRelative($relative);
	}

	protected function validateRelative($relative) {
		if ( $relative === FALSE ) {
			$this->_overrides['relative'] = TRUE;
			return NULL;
		}

		if ( ! $relative instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($relative) ) {
			$relative = new \com\microsoft\wc\thing\types\PositiveDouble ($relative);
		}

		unset ($this->_overrides['relative']);
	
		return $relative;
	}
} // end class MaxVO2
