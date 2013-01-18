<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Language")
 */
class Language {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NISOZ3953LanguageCodesType", name="Code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherCodeListType", name="OtherCodeList")
	 */
	protected $otherCodeList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0327LanguageTypeType", name="LanguageType")
	 */
	protected $languageType;

	/**
	 * @XmlText	(type="string", name="Dialect")
	 */
	protected $dialect;

	public function __construct($code = NULL, $otherCodeList = NULL, $languageType = NULL, $dialect = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->otherCodeList = ($otherCodeList===NULL) ? NULL : $this->validateOtherCodeList($otherCodeList);
		$this->languageType = ($languageType===NULL) ? NULL : $this->validateLanguageType($languageType);
		$this->dialect = ($dialect===NULL) ? NULL : $this->validateDialect($dialect);
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return new \org\sifinfo\www\infrastructure\_2_x\NISOZ3953LanguageCodesType();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! $code instanceof \org\sifinfo\www\infrastructure\_2_x\NISOZ3953LanguageCodesType ) {
			$code = new \org\sifinfo\www\infrastructure\_2_x\NISOZ3953LanguageCodesType ($code);
		}
	
		return $code;
	}

	public function getOtherCodeList() {
		if ($this->otherCodeList===NULL) {
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
		if ( ! $otherCodeList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherCodeListType  && ! is_null($otherCodeList) ) {
			$otherCodeList = new \org\sifinfo\www\infrastructure\_2_x\OtherCodeListType ($otherCodeList);
		}
	
		return $otherCodeList;
	}

	public function getLanguageType() {
		if ($this->languageType===NULL) {
			$this->languageType = $this->createLanguageType();
		}
		return $this->languageType;
	}
	
	protected function createLanguageType() {
		return new \org\sifinfo\www\infrastructure\_2_x\NCES0327LanguageTypeType();
	}

	public function setLanguageType($languageType) {
		$this->languageType = $this->validateLanguageType($languageType);
	}

	protected function validateLanguageType($languageType) {
		if ( ! $languageType instanceof \org\sifinfo\www\infrastructure\_2_x\NCES0327LanguageTypeType  && ! is_null($languageType) ) {
			$languageType = new \org\sifinfo\www\infrastructure\_2_x\NCES0327LanguageTypeType ($languageType);
		}
	
		return $languageType;
	}

	public function getDialect() {
		if ($this->dialect===NULL) {
			$this->dialect = $this->createDialect();
		}
		return $this->dialect;
	}
	
	protected function createDialect() {
		return NULL;
	}

	public function setDialect($dialect) {
		$this->dialect = $this->validateDialect($dialect);
	}

	protected function validateDialect($dialect) {
		if ( ! is_string($dialect) && ! is_null($dialect) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dialect', 'string'));
		}
	
		return $dialect;
	}
} // end class Language
