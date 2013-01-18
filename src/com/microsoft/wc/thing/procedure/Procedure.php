<?php
namespace com\microsoft\wc\thing\procedure;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.procedure", prefix="")
 * })
 * @XmlEntity	(xml="procedure")
 */
class Procedure extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to a procedure.
	 * Note: Please use the new version of this data type instead of this version.This thing type describes the procedure results of a person.
	 */

	const ID = '0A5F9A43-DC88-4E9F-890F-1F9159B76E7B';
	const NAME = 'Procedure';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="title")
	 */
	protected $title;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="primary-provider")
	 */
	protected $primaryProvider;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="anatomic-location")
	 */
	protected $anatomicLocation;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="secondary-provider")
	 */
	protected $secondaryProvider;

	public function __construct($when = NULL, $title = NULL, $primaryProvider = NULL, $anatomicLocation = NULL, $secondaryProvider = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->primaryProvider = ($primaryProvider===NULL) ? NULL : $this->validatePrimaryProvider($primaryProvider);
		$this->anatomicLocation = ($anatomicLocation===NULL) ? NULL : $this->validateAnatomicLocation($anatomicLocation);
		$this->secondaryProvider = ($secondaryProvider===NULL) ? NULL : $this->validateSecondaryProvider($secondaryProvider);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getTitle() {
		if ($this->title===NULL) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if ( ! $title instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($title) ) {
			$title = new \com\microsoft\wc\types\CodableValue ($title);
		}
	
		return $title;
	}

	public function getPrimaryProvider() {
		if ($this->primaryProvider===NULL) {
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
		if ( ! $primaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($primaryProvider) ) {
			$primaryProvider = new \com\microsoft\wc\thing\types\Person ($primaryProvider);
		}
	
		return $primaryProvider;
	}

	public function getAnatomicLocation() {
		if ($this->anatomicLocation===NULL) {
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
		if ( ! $anatomicLocation instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($anatomicLocation) ) {
			$anatomicLocation = new \com\microsoft\wc\types\CodableValue ($anatomicLocation);
		}
	
		return $anatomicLocation;
	}

	public function getSecondaryProvider() {
		if ($this->secondaryProvider===NULL) {
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
		if ( ! $secondaryProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($secondaryProvider) ) {
			$secondaryProvider = new \com\microsoft\wc\thing\types\Person ($secondaryProvider);
		}
	
		return $secondaryProvider;
	}
} // end class Procedure
