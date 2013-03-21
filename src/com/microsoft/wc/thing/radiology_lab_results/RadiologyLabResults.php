<?php
namespace com\microsoft\wc\thing\radiology_lab_results;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.radiology-lab-results", prefix="")
 * })
 * @XmlEntity	(xml="radiology-lab-results")
 */
class RadiologyLabResults extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a radiology lab-results.
	 * This thing type describes the radiology lab results a person has.
	 */

	const ID = 'E4911BD3-61BF-4E10-AE78-9C574B888B8F';
	const NAME = 'Radiology Lab Result';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="title")
	 */
	protected $title;

	/**
	 * @XmlText	(type="string", name="anatomic-site")
	 */
	protected $anatomicSite;

	/**
	 * @XmlText	(type="string", name="result-text")
	 */
	protected $resultText;

	public function __construct($when = NULL, $title = NULL, $anatomicSite = NULL, $resultText = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->anatomicSite = ($anatomicSite===NULL) ? NULL : $this->validateAnatomicSite($anatomicSite);
		$this->resultText = ($resultText===NULL) ? NULL : $this->validateResultText($resultText);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
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

	public function getTitle($autoCreate = TRUE) {
		if ($this->title===NULL && $autoCreate && ! isset($this->_overrides['title']) ) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return '';
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if ( ! is_string($title) && ! is_null($title) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'title', 'string'));
		}
	
		return $title;
	}

	public function getAnatomicSite($autoCreate = TRUE) {
		if ($this->anatomicSite===NULL && $autoCreate && ! isset($this->_overrides['anatomicSite']) ) {
			$this->anatomicSite = $this->createAnatomicSite();
		}
		return $this->anatomicSite;
	}
	
	protected function createAnatomicSite() {
		return '';
	}

	public function setAnatomicSite($anatomicSite) {
		$this->anatomicSite = $this->validateAnatomicSite($anatomicSite);
	}

	protected function validateAnatomicSite($anatomicSite) {
		if ( ! is_string($anatomicSite) && ! is_null($anatomicSite) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'anatomicSite', 'string'));
		}
	
		return $anatomicSite;
	}

	public function getResultText($autoCreate = TRUE) {
		if ($this->resultText===NULL && $autoCreate && ! isset($this->_overrides['resultText']) ) {
			$this->resultText = $this->createResultText();
		}
		return $this->resultText;
	}
	
	protected function createResultText() {
		return '';
	}

	public function setResultText($resultText) {
		$this->resultText = $this->validateResultText($resultText);
	}

	protected function validateResultText($resultText) {
		if ( ! is_string($resultText) && ! is_null($resultText) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'resultText', 'string'));
		}
	
		return $resultText;
	}
} // end class RadiologyLabResults
