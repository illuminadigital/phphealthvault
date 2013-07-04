<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="EN")
 */
class EN extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * A name for a person, organization, place or thing. Asequence of name parts, such as given name or familyname, prefix, suffix, etc. Examples for entity namevalues are "Jim Bob Walton, Jr.", "Health Level Seven,Inc.", "Lake Tahoe", etc. An entity name may be as simpleas a character string or may consist of several entity nameparts, such as, "Jim", "Bob", "Walton", and "Jr.", "HealthLevel Seven" and "Inc.", "Lake" and "Tahoe".
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.delimiter", collection="true", name="delimiter")
	 */
	protected $delimiter;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.family", collection="true", name="family")
	 */
	protected $family;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.given", collection="true", name="given")
	 */
	protected $given;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.prefix", collection="true", name="prefix")
	 */
	protected $prefix;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\En.suffix", collection="true", name="suffix")
	 */
	protected $suffix;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLTS", name="validTime")
	 */
	protected $validTime;

	/**
	 * @XmlAttribute	(type="string", name="use")
	 */
	protected $use;

	public function __construct($delimiter = NULL, $family = NULL, $given = NULL, $prefix = NULL, $suffix = NULL, $validTime = NULL, $use = NULL) {
		$this->delimiter = ($delimiter===NULL) ? NULL : $this->validateDelimiter($delimiter);
		$this->family = ($family===NULL) ? NULL : $this->validateFamily($family);
		$this->given = ($given===NULL) ? NULL : $this->validateGiven($given);
		$this->prefix = ($prefix===NULL) ? NULL : $this->validatePrefix($prefix);
		$this->suffix = ($suffix===NULL) ? NULL : $this->validateSuffix($suffix);
		$this->validTime = ($validTime===NULL) ? NULL : $this->validateValidTime($validTime);
		$this->use = ($use===NULL) ? NULL : $this->validateUse($use);
	}

	public function getDelimiter($autoCreate = TRUE) {
		if ($this->delimiter===NULL && $autoCreate && ! isset($this->_overrides['delimiter']) ) {
			$this->delimiter = $this->createDelimiter();
		}
		return $this->delimiter;
	}
	
	protected function createDelimiter() {
		return array();
	}

	public function setDelimiter($delimiter) {
		$this->delimiter = $this->validateDelimiter($delimiter);
	}

	protected function validateDelimiter($delimiter) {
		$count = count($delimiter);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'delimiter', 0));
		}
		if ( ! empty($delimiter) ) {
			foreach ($delimiter as $entry) {
			}
		}
	
		return $delimiter;
	}

	public function addDelimiter($delimiter) {
		$this->delimiter[] = $this->validateDelimiterType($delimiter);
	}

	protected function validateDelimiterType($delimiter) {
	
		return $delimiter;
	}

	public function getFamily($autoCreate = TRUE) {
		if ($this->family===NULL && $autoCreate && ! isset($this->_overrides['family']) ) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return array();
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		$count = count($family);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'family', 0));
		}
		if ( ! empty($family) ) {
			foreach ($family as $entry) {
			}
		}
	
		return $family;
	}

	public function addFamily($family) {
		$this->family[] = $this->validateFamilyType($family);
	}

	protected function validateFamilyType($family) {
	
		return $family;
	}

	public function getGiven($autoCreate = TRUE) {
		if ($this->given===NULL && $autoCreate && ! isset($this->_overrides['given']) ) {
			$this->given = $this->createGiven();
		}
		return $this->given;
	}
	
	protected function createGiven() {
		return array();
	}

	public function setGiven($given) {
		$this->given = $this->validateGiven($given);
	}

	protected function validateGiven($given) {
		$count = count($given);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'given', 0));
		}
		if ( ! empty($given) ) {
			foreach ($given as $entry) {
			}
		}
	
		return $given;
	}

	public function addGiven($given) {
		$this->given[] = $this->validateGivenType($given);
	}

	protected function validateGivenType($given) {
	
		return $given;
	}

	public function getPrefix($autoCreate = TRUE) {
		if ($this->prefix===NULL && $autoCreate && ! isset($this->_overrides['prefix']) ) {
			$this->prefix = $this->createPrefix();
		}
		return $this->prefix;
	}
	
	protected function createPrefix() {
		return array();
	}

	public function setPrefix($prefix) {
		$this->prefix = $this->validatePrefix($prefix);
	}

	protected function validatePrefix($prefix) {
		$count = count($prefix);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'prefix', 0));
		}
		if ( ! empty($prefix) ) {
			foreach ($prefix as $entry) {
			}
		}
	
		return $prefix;
	}

	public function addPrefix($prefix) {
		$this->prefix[] = $this->validatePrefixType($prefix);
	}

	protected function validatePrefixType($prefix) {
	
		return $prefix;
	}

	public function getSuffix($autoCreate = TRUE) {
		if ($this->suffix===NULL && $autoCreate && ! isset($this->_overrides['suffix']) ) {
			$this->suffix = $this->createSuffix();
		}
		return $this->suffix;
	}
	
	protected function createSuffix() {
		return array();
	}

	public function setSuffix($suffix) {
		$this->suffix = $this->validateSuffix($suffix);
	}

	protected function validateSuffix($suffix) {
		$count = count($suffix);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'suffix', 0));
		}
		if ( ! empty($suffix) ) {
			foreach ($suffix as $entry) {
			}
		}
	
		return $suffix;
	}

	public function addSuffix($suffix) {
		$this->suffix[] = $this->validateSuffixType($suffix);
	}

	protected function validateSuffixType($suffix) {
	
		return $suffix;
	}

	public function getValidTime($autoCreate = TRUE) {
		if ($this->validTime===NULL && $autoCreate && ! isset($this->_overrides['validTime']) ) {
			$this->validTime = $this->createValidTime();
		}
		return $this->validTime;
	}
	
	protected function createValidTime() {
		return NULL;
	}

	public function setValidTime($validTime) {
		$this->validTime = $this->validateValidTime($validTime);
	}

	protected function validateValidTime($validTime) {
	
		return $validTime;
	}

	public function getUse($autoCreate = TRUE) {
		if ($this->use===NULL && $autoCreate && ! isset($this->_overrides['use']) ) {
			$this->use = $this->createUse();
		}
		return $this->use;
	}
	
	protected function createUse() {
		return NULL;
	}

	public function setUse($use) {
		$this->use = $this->validateUse($use);
	}

	protected function validateUse($use) {
	
		return $use;
	}
} // end class EN
