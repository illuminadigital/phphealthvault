<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MarkValueInfoData")
 */
class MarkValueInfoData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="Name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Percentage", name="Percentage")
	 */
	protected $percentage;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Numeric", name="Numeric")
	 */
	protected $numeric;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Letter", name="Letter")
	 */
	protected $letter;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Narrative", name="Narrative")
	 */
	protected $narrative;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	/**
	 * @XmlAttribute	(type="string", name="RefId")
	 */
	protected $refId;

	public function __construct($name = NULL, $percentage = NULL, $numeric = NULL, $letter = NULL, $narrative = NULL, $sifExtendedElements = NULL, $refId = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->percentage = ($percentage===NULL) ? NULL : $this->validatePercentage($percentage);
		$this->numeric = ($numeric===NULL) ? NULL : $this->validateNumeric($numeric);
		$this->letter = ($letter===NULL) ? NULL : $this->validateLetter($letter);
		$this->narrative = ($narrative===NULL) ? NULL : $this->validateNarrative($narrative);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->refId = ($refId===NULL) ? NULL : $this->validateRefId($refId);
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

	public function getPercentage($autoCreate = TRUE) {
		if ($this->percentage===NULL && $autoCreate && ! isset($this->_overrides['percentage']) ) {
			$this->percentage = $this->createPercentage();
		}
		return $this->percentage;
	}
	
	protected function createPercentage() {
		return new \org\sifinfo\www\infrastructure\_2_x\Percentage();
	}

	public function setPercentage($percentage) {
		$this->percentage = $this->validatePercentage($percentage);
	}

	protected function validatePercentage($percentage) {
		if ( $percentage === FALSE ) {
			$this->_overrides['percentage'] = TRUE;
			return NULL;
		}

		if ( ! $percentage instanceof \org\sifinfo\www\infrastructure\_2_x\Percentage  && ! is_null($percentage) ) {
			$percentage = new \org\sifinfo\www\infrastructure\_2_x\Percentage ($percentage);
		}

		unset ($this->_overrides['percentage']);
	
		return $percentage;
	}

	public function getNumeric($autoCreate = TRUE) {
		if ($this->numeric===NULL && $autoCreate && ! isset($this->_overrides['numeric']) ) {
			$this->numeric = $this->createNumeric();
		}
		return $this->numeric;
	}
	
	protected function createNumeric() {
		return new \org\sifinfo\www\infrastructure\_2_x\Numeric();
	}

	public function setNumeric($numeric) {
		$this->numeric = $this->validateNumeric($numeric);
	}

	protected function validateNumeric($numeric) {
		if ( $numeric === FALSE ) {
			$this->_overrides['numeric'] = TRUE;
			return NULL;
		}

		if ( ! $numeric instanceof \org\sifinfo\www\infrastructure\_2_x\Numeric  && ! is_null($numeric) ) {
			$numeric = new \org\sifinfo\www\infrastructure\_2_x\Numeric ($numeric);
		}

		unset ($this->_overrides['numeric']);
	
		return $numeric;
	}

	public function getLetter($autoCreate = TRUE) {
		if ($this->letter===NULL && $autoCreate && ! isset($this->_overrides['letter']) ) {
			$this->letter = $this->createLetter();
		}
		return $this->letter;
	}
	
	protected function createLetter() {
		return new \org\sifinfo\www\infrastructure\_2_x\Letter();
	}

	public function setLetter($letter) {
		$this->letter = $this->validateLetter($letter);
	}

	protected function validateLetter($letter) {
		if ( $letter === FALSE ) {
			$this->_overrides['letter'] = TRUE;
			return NULL;
		}

		if ( ! $letter instanceof \org\sifinfo\www\infrastructure\_2_x\Letter  && ! is_null($letter) ) {
			$letter = new \org\sifinfo\www\infrastructure\_2_x\Letter ($letter);
		}

		unset ($this->_overrides['letter']);
	
		return $letter;
	}

	public function getNarrative($autoCreate = TRUE) {
		if ($this->narrative===NULL && $autoCreate && ! isset($this->_overrides['narrative']) ) {
			$this->narrative = $this->createNarrative();
		}
		return $this->narrative;
	}
	
	protected function createNarrative() {
		return new \org\sifinfo\www\infrastructure\_2_x\Narrative();
	}

	public function setNarrative($narrative) {
		$this->narrative = $this->validateNarrative($narrative);
	}

	protected function validateNarrative($narrative) {
		if ( $narrative === FALSE ) {
			$this->_overrides['narrative'] = TRUE;
			return NULL;
		}

		if ( ! $narrative instanceof \org\sifinfo\www\infrastructure\_2_x\Narrative  && ! is_null($narrative) ) {
			$narrative = new \org\sifinfo\www\infrastructure\_2_x\Narrative ($narrative);
		}

		unset ($this->_overrides['narrative']);
	
		return $narrative;
	}

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}

	public function getRefId($autoCreate = TRUE) {
		if ($this->refId===NULL && $autoCreate && ! isset($this->_overrides['refId']) ) {
			$this->refId = $this->createRefId();
		}
		return $this->refId;
	}
	
	protected function createRefId() {
		return NULL;
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
	
		return $refId;
	}
} // end class MarkValueInfoData
