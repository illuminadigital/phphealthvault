<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ExceptionalityCategory")
 */
class ExceptionalityCategory {
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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ExceptionalityPriority", name="ExceptionalityPriority")
	 */
	protected $exceptionalityPriority;

	public function __construct($code = NULL, $otherCodeList = NULL, $exceptionalityPriority = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->otherCodeList = ($otherCodeList===NULL) ? NULL : $this->validateOtherCodeList($otherCodeList);
		$this->exceptionalityPriority = ($exceptionalityPriority===NULL) ? NULL : $this->validateExceptionalityPriority($exceptionalityPriority);
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

	public function getExceptionalityPriority($autoCreate = TRUE) {
		if ($this->exceptionalityPriority===NULL && $autoCreate && ! isset($this->_overrides['exceptionalityPriority']) ) {
			$this->exceptionalityPriority = $this->createExceptionalityPriority();
		}
		return $this->exceptionalityPriority;
	}
	
	protected function createExceptionalityPriority() {
		return new \org\sifinfo\www\infrastructure\_2_x\ExceptionalityPriority();
	}

	public function setExceptionalityPriority($exceptionalityPriority) {
		$this->exceptionalityPriority = $this->validateExceptionalityPriority($exceptionalityPriority);
	}

	protected function validateExceptionalityPriority($exceptionalityPriority) {
		if ( ! $exceptionalityPriority instanceof \org\sifinfo\www\infrastructure\_2_x\ExceptionalityPriority ) {
			$exceptionalityPriority = new \org\sifinfo\www\infrastructure\_2_x\ExceptionalityPriority ($exceptionalityPriority);
		}
	
		return $exceptionalityPriority;
	}
} // end class ExceptionalityCategory
