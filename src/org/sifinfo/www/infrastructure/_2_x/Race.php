<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Race")
 */
class Race {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Code", name="Code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherCodeListType", name="OtherCodeList")
	 */
	protected $otherCodeList;

	/**
	 * @XmlText	(type="float", name="Proportion")
	 */
	protected $proportion;

	public function __construct($code = NULL, $otherCodeList = NULL, $proportion = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->otherCodeList = ($otherCodeList===NULL) ? NULL : $this->validateOtherCodeList($otherCodeList);
		$this->proportion = ($proportion===NULL) ? NULL : $this->validateProportion($proportion);
	}

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return new \org\sifinfo\www\infrastructure\_2_x\Code();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! $code instanceof \org\sifinfo\www\infrastructure\_2_x\Code ) {
			$code = new \org\sifinfo\www\infrastructure\_2_x\Code ($code);
		}
	
		return $code;
	}

	public function getOtherCodeList($autoCreate = TRUE) {
		if ($this->otherCodeList===NULL && $autoCreate && ! isset($this->_overrides['otherCodeList']) ) {
			$this->otherCodeList = $this->createOtherCodeList();
		}
		return $this->otherCodeList;
	}
	
	protected function createOtherCodeList() {
		return new \org\sifinfo\www\infrastructure\_2_x\OtherCodeListType();
	}

	public function setOtherCodeList($otherCodeList) {
		$this->otherCodeList = $this->validateOtherCodeList($otherCodeList);
	}

	protected function validateOtherCodeList($otherCodeList) {
		if ( $otherCodeList === FALSE ) {
			$this->_overrides['otherCodeList'] = TRUE;
			return NULL;
		}

		if ( ! $otherCodeList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherCodeListType  && ! is_null($otherCodeList) ) {
			$otherCodeList = new \org\sifinfo\www\infrastructure\_2_x\OtherCodeListType ($otherCodeList);
		}

		unset ($this->_overrides['otherCodeList']);
	
		return $otherCodeList;
	}

	public function getProportion($autoCreate = TRUE) {
		if ($this->proportion===NULL && $autoCreate && ! isset($this->_overrides['proportion']) ) {
			$this->proportion = $this->createProportion();
		}
		return $this->proportion;
	}
	
	protected function createProportion() {
		return NULL;
	}

	public function setProportion($proportion) {
		$this->proportion = $this->validateProportion($proportion);
	}

	protected function validateProportion($proportion) {
		$isValid = FALSE;
		if ( is_float($proportion) ) {
			$isValid = TRUE;
		}
		else if ( is_null($proportion) ) {
			$isValid = TRUE;
		}
		else if ( $proportion == ($castVar = (float) $proportion) ) {
			$isValid = TRUE;
			$proportion = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'proportion', 'float'));
		}
	
		return $proportion;
	}
} // end class Race
