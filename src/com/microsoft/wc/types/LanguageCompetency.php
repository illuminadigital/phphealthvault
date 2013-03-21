<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="LanguageCompetency")
 */
class LanguageCompetency extends \com\microsoft\wc\types\Iso6391 {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="boolean", name="is-primary")
	 */
	protected $isPrimary;

	public function __construct($isPrimary = NULL) {
		$this->isPrimary = ($isPrimary===NULL) ? NULL : $this->validateIsPrimary($isPrimary);
	}

	public function getIsPrimary($autoCreate = TRUE) {
		if ($this->isPrimary===NULL && $autoCreate && ! isset($this->_overrides['isPrimary']) ) {
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
