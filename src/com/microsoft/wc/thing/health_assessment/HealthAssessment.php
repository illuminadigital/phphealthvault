<?php
namespace com\microsoft\wc\thing\health_assessment;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.health-assessment", prefix="")
 * })
 * @XmlEntity	(xml="health-assessment")
 */
class HealthAssessment extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Contains the results of a health assessment.
	 * Examples of health assessment include high blood pressure assessment and diabetes assessment.
	 */

	const ID = '58fd8ac4-6c47-41a3-94b2-478401f0e26c';
	const NAME = 'Health Assessment';

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
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="category")
	 */
	protected $category;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\health_assessment\Assessment", collection="true", name="result")
	 */
	protected $result;

	public function __construct($when = NULL, $name = NULL, $category = NULL, $result = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->category = ($category===NULL) ? NULL : $this->validateCategory($category);
		$this->result = ($result===NULL) ? NULL : $this->validateResult($result);
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
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getCategory($autoCreate = TRUE) {
		if ($this->category===NULL && $autoCreate && ! isset($this->_overrides['category']) ) {
			$this->category = $this->createCategory();
		}
		return $this->category;
	}
	
	protected function createCategory() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCategory($category) {
		$this->category = $this->validateCategory($category);
	}

	protected function validateCategory($category) {
		if ( ! $category instanceof \com\microsoft\wc\types\CodableValue ) {
			$category = new \com\microsoft\wc\types\CodableValue ($category);
		}
	
		return $category;
	}

	public function getResult($autoCreate = TRUE) {
		if ($this->result===NULL && $autoCreate && ! isset($this->_overrides['result']) ) {
			$this->result = $this->createResult();
		}
		return $this->result;
	}
	
	protected function createResult() {
		return array();
	}

	public function setResult($result) {
		$this->result = $this->validateResult($result);
	}

	protected function validateResult($result) {
		if ( ! is_array ($result) ) {
			$result = array($result);
		}
		$count = count($result);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'result', 1));
		}
		foreach ($result as $entry) {
			if (!($entry instanceof Assessment)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'result', 'Assessment'));
			}
		}
	
		return $result;
	}

	public function addResult($result) {
		$this->result[] = $result;
	}
} // end class HealthAssessment
