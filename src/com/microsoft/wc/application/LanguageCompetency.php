<?php
namespace com\microsoft\wc\application;




/**
 * @XmlEntity	(xml="LanguageCompetency")
 */
class LanguageCompetency extends Iso6391 {
	/**
	 */

	/**
	 * @XmlAttribute	(type="boolean", name="is-primary")
	 */
	protected $isPrimary;

	public function __construct($isPrimary = NULL) {
		$this->isPrimary = ($isPrimary===NULL) ? NULL : $this->validateIsPrimary($isPrimary);
	}

	public function getIsPrimary() {
		if ($this->isPrimary===NULL) {
			$this->isPrimary = $this->createIsPrimary();
		}
		return $this->isPrimary;
	}
	
	protected function createIsPrimary() {
		return FALSE;
	}

	public function setIsPrimary($isPrimary) {
		$this->isPrimary = $this->validateIsPrimary($isPrimary);
	}

	protected function validateIsPrimary($isPrimary) {
		if ( ! is_bool($isPrimary) && ! is_null($isPrimary) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isPrimary', 'boolean'));
		}
	
		return $isPrimary;
	}
} // end class LanguageCompetency
