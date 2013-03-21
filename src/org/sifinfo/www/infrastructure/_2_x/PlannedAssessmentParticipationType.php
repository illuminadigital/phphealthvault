<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="PlannedAssessmentParticipationType")
 */
class PlannedAssessmentParticipationType {
	/**
	 * The student's planned level of participation in statewide assessments.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="PlannedAssessmentParticipationType")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="Codeset")
	 */
	protected $codeset;

	public function __construct($value = NULL, $codeset = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->codeset = ($codeset===NULL) ? NULL : $this->validateCodeset($codeset);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}

	public function getCodeset($autoCreate = TRUE) {
		if ($this->codeset===NULL && $autoCreate && ! isset($this->_overrides['codeset']) ) {
			$this->codeset = $this->createCodeset();
		}
		return $this->codeset;
	}
	
	protected function createCodeset() {
		return NULL;
	}

	public function setCodeset($codeset) {
		$this->codeset = $this->validateCodeset($codeset);
	}

	protected function validateCodeset($codeset) {
		if (!is_string($codeset)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'codeset', 'string'));
		}
	
		return $codeset;
	}
} // end class PlannedAssessmentParticipationType
