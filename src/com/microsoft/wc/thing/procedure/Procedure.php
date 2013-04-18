<?php
namespace com\microsoft\wc\thing\procedure;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.procedure", prefix="")
 * })
 * @XmlEntity	(xml="procedure")
 */
class Procedure extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a procedure.
	 */

	const ID = 'df4db479-a1ba-42a2-8714-2b083b88150f';
	const NAME = 'Procedure';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="anatomic-location")
	 */
	protected $anatomicLocation;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="primary-provider")
	 */
	protected $primaryProvider;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="secondary-provider")
	 */
	protected $secondaryProvider;

	public function __construct($when = NULL, $name = NULL, $anatomicLocation = NULL, $primaryProvider = NULL, $secondaryProvider = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->anatomicLocation = ($anatomicLocation===NULL) ? NULL : $this->validateAnatomicLocation($anatomicLocation);
		$this->primaryProvider = ($primaryProvider===NULL) ? NULL : $this->validatePrimaryProvider($primaryProvider);
		$this->secondaryProvider = ($secondaryProvider===NULL) ? NULL : $this->validateSecondaryProvider($secondaryProvider);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( $when === FALSE ) {
			$this->_overrides['when'] = TRUE;
			return NULL;
		}

		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}

		unset ($this->_overrides['when']);
	
		return $when;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
	}

	public function getAnatomicLocation($autoCreate = TRUE) {
		if ($this->anatomicLocation===NULL && $autoCreate && ! isset($this->_overrides['anatomicLocation']) ) {
			$this->anatomicLocation = $this->createAnatomicLocation();
		}
		return $this->anatomicLocation;
	}
	
	protected function createAnatomicLocation() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setAnatomicLocation($anatomicLocation) {
		$this->anatomicLocation = $this->validateAnatomicLocation($anatomicLocation);
	}

	protected function validateAnatomicLocation($anatomicLocation) {
		if ( $anatomicLocation === FALSE ) {
			$this->_overrides['anatomicLocation'] = TRUE;
			return NULL;
		}

		if ( ! $anatomicLocation instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($anatomicLocation) ) {
			$anatomicLocation = new \com\microsoft\wc\types\CodableValue ($anatomicLocation);
		}

		unset ($this->_overrides['anatomicLocation']);
	
		return $anatomicLocation;
	}

	public function getPrimaryProvider($autoCreate = TRUE) {
		if ($this->primaryProvider===NULL && $autoCreate && ! isset($this->_overrides['primaryProvider']) ) {
			$this->primaryProvider = $this->createPrimaryProvider();
		}
		return $this->primaryProvider;
	}
	
	protected function createPrimaryProvider() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setPrimaryProvider($primaryProvider) {
		$this->primaryProvider = $this->validatePrimaryProvider($primaryProvider);
	}

	protected function validatePrimaryProvider($primaryProvider) {
		if ( $primaryProvider === FALSE ) {
			$this->_overrides['primaryProvider'] = TRUE;
			return NULL;
		}

		if ( ! $primaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($primaryProvider) ) {
			$primaryProvider = new \com\microsoft\wc\thing\types\Person ($primaryProvider);
		}

		unset ($this->_overrides['primaryProvider']);
	
		return $primaryProvider;
	}

	public function getSecondaryProvider($autoCreate = TRUE) {
		if ($this->secondaryProvider===NULL && $autoCreate && ! isset($this->_overrides['secondaryProvider']) ) {
			$this->secondaryProvider = $this->createSecondaryProvider();
		}
		return $this->secondaryProvider;
	}
	
	protected function createSecondaryProvider() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setSecondaryProvider($secondaryProvider) {
		$this->secondaryProvider = $this->validateSecondaryProvider($secondaryProvider);
	}

	protected function validateSecondaryProvider($secondaryProvider) {
		if ( $secondaryProvider === FALSE ) {
			$this->_overrides['secondaryProvider'] = TRUE;
			return NULL;
		}

		if ( ! $secondaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($secondaryProvider) ) {
			$secondaryProvider = new \com\microsoft\wc\thing\types\Person ($secondaryProvider);
		}

		unset ($this->_overrides['secondaryProvider']);
	
		return $secondaryProvider;
	}
} // end class Procedure
