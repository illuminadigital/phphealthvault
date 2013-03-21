<?php
namespace com\microsoft\wc\thing\diabetic_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.diabetic-profile", prefix="")
 * })
 * @XmlEntity	(xml="TargetGlucoseZone")
 */
class TargetGlucoseZone {
	/**
	 * A glucose zone.
	 * A glucose zone defines a range of glucose measurementsA zone is defined by a lower and upper limit measured inglucose percentage or as a percentage of a person's maximum glucose value.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\diabetic_profile\ZoneBoundary", name="lower-bound")
	 */
	protected $lowerBound;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\diabetic_profile\ZoneBoundary", name="upper-bound")
	 */
	protected $upperBound;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	public function __construct($lowerBound = NULL, $upperBound = NULL, $name = NULL) {
		$this->lowerBound = ($lowerBound===NULL) ? NULL : $this->validateLowerBound($lowerBound);
		$this->upperBound = ($upperBound===NULL) ? NULL : $this->validateUpperBound($upperBound);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getLowerBound($autoCreate = TRUE) {
		if ($this->lowerBound===NULL && $autoCreate && ! isset($this->_overrides['lowerBound']) ) {
			$this->lowerBound = $this->createLowerBound();
		}
		return $this->lowerBound;
	}
	
	protected function createLowerBound() {
		return new \com\microsoft\wc\thing\diabetic_profile\ZoneBoundary();
	}

	public function setLowerBound($lowerBound) {
		$this->lowerBound = $this->validateLowerBound($lowerBound);
	}

	protected function validateLowerBound($lowerBound) {
		if ( ! $lowerBound instanceof \com\microsoft\wc\thing\diabetic_profile\ZoneBoundary ) {
			$lowerBound = new \com\microsoft\wc\thing\diabetic_profile\ZoneBoundary ($lowerBound);
		}
	
		return $lowerBound;
	}

	public function getUpperBound($autoCreate = TRUE) {
		if ($this->upperBound===NULL && $autoCreate && ! isset($this->_overrides['upperBound']) ) {
			$this->upperBound = $this->createUpperBound();
		}
		return $this->upperBound;
	}
	
	protected function createUpperBound() {
		return new \com\microsoft\wc\thing\diabetic_profile\ZoneBoundary();
	}

	public function setUpperBound($upperBound) {
		$this->upperBound = $this->validateUpperBound($upperBound);
	}

	protected function validateUpperBound($upperBound) {
		if ( ! $upperBound instanceof \com\microsoft\wc\thing\diabetic_profile\ZoneBoundary ) {
			$upperBound = new \com\microsoft\wc\thing\diabetic_profile\ZoneBoundary ($upperBound);
		}
	
		return $upperBound;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! is_string($name) && ! is_null($name) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}
} // end class TargetGlucoseZone
