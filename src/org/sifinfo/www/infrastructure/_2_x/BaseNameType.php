<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="BaseNameType")
 */
class BaseNameType {
	/**
	 * Base type, without attributes, for Name elements, primarily to allow structure to be leveraged with different Type attribute values.
	 */

	/**
	 * @XmlText	(type="string", name="Prefix")
	 */
	protected $prefix;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LastName", name="LastName")
	 */
	protected $lastName;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FirstName", name="FirstName")
	 */
	protected $firstName;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MiddleNameType", name="MiddleName")
	 */
	protected $middleName;

	/**
	 * @XmlText	(type="string", name="Suffix")
	 */
	protected $suffix;

	/**
	 * @XmlText	(type="string", name="PreferredName")
	 */
	protected $preferredName;

	/**
	 * @XmlText	(type="string", name="SortName")
	 */
	protected $sortName;

	/**
	 * @XmlText	(type="string", name="FullName")
	 */
	protected $fullName;

	public function __construct($prefix = NULL, $lastName = NULL, $firstName = NULL, $middleName = NULL, $suffix = NULL, $preferredName = NULL, $sortName = NULL, $fullName = NULL) {
		$this->prefix = ($prefix===NULL) ? NULL : $this->validatePrefix($prefix);
		$this->lastName = ($lastName===NULL) ? NULL : $this->validateLastName($lastName);
		$this->firstName = ($firstName===NULL) ? NULL : $this->validateFirstName($firstName);
		$this->middleName = ($middleName===NULL) ? NULL : $this->validateMiddleName($middleName);
		$this->suffix = ($suffix===NULL) ? NULL : $this->validateSuffix($suffix);
		$this->preferredName = ($preferredName===NULL) ? NULL : $this->validatePreferredName($preferredName);
		$this->sortName = ($sortName===NULL) ? NULL : $this->validateSortName($sortName);
		$this->fullName = ($fullName===NULL) ? NULL : $this->validateFullName($fullName);
	}

	public function getPrefix() {
		if ($this->prefix===NULL) {
			$this->prefix = $this->createPrefix();
		}
		return $this->prefix;
	}
	
	protected function createPrefix() {
		return NULL;
	}

	public function setPrefix($prefix) {
		$this->prefix = $this->validatePrefix($prefix);
	}

	protected function validatePrefix($prefix) {
		if ( ! is_string($prefix) && ! is_null($prefix) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'prefix', 'string'));
		}
	
		return $prefix;
	}

	public function getLastName() {
		if ($this->lastName===NULL) {
			$this->lastName = $this->createLastName();
		}
		return $this->lastName;
	}
	
	protected function createLastName() {
		return new \org\sifinfo\www\infrastructure\_2_x\LastName();
	}

	public function setLastName($lastName) {
		$this->lastName = $this->validateLastName($lastName);
	}

	protected function validateLastName($lastName) {
		if ( ! $lastName instanceof \org\sifinfo\www\infrastructure\_2_x\LastName ) {
			$lastName = new \org\sifinfo\www\infrastructure\_2_x\LastName ($lastName);
		}
	
		return $lastName;
	}

	public function getFirstName() {
		if ($this->firstName===NULL) {
			$this->firstName = $this->createFirstName();
		}
		return $this->firstName;
	}
	
	protected function createFirstName() {
		return new \org\sifinfo\www\infrastructure\_2_x\FirstName();
	}

	public function setFirstName($firstName) {
		$this->firstName = $this->validateFirstName($firstName);
	}

	protected function validateFirstName($firstName) {
		if ( ! $firstName instanceof \org\sifinfo\www\infrastructure\_2_x\FirstName ) {
			$firstName = new \org\sifinfo\www\infrastructure\_2_x\FirstName ($firstName);
		}
	
		return $firstName;
	}

	public function getMiddleName() {
		if ($this->middleName===NULL) {
			$this->middleName = $this->createMiddleName();
		}
		return $this->middleName;
	}
	
	protected function createMiddleName() {
		return new \org\sifinfo\www\infrastructure\_2_x\MiddleNameType();
	}

	public function setMiddleName($middleName) {
		$this->middleName = $this->validateMiddleName($middleName);
	}

	protected function validateMiddleName($middleName) {
		if ( ! $middleName instanceof \org\sifinfo\www\infrastructure\_2_x\MiddleNameType  && ! is_null($middleName) ) {
			$middleName = new \org\sifinfo\www\infrastructure\_2_x\MiddleNameType ($middleName);
		}
	
		return $middleName;
	}

	public function getSuffix() {
		if ($this->suffix===NULL) {
			$this->suffix = $this->createSuffix();
		}
		return $this->suffix;
	}
	
	protected function createSuffix() {
		return NULL;
	}

	public function setSuffix($suffix) {
		$this->suffix = $this->validateSuffix($suffix);
	}

	protected function validateSuffix($suffix) {
		if ( ! is_string($suffix) && ! is_null($suffix) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'suffix', 'string'));
		}
	
		return $suffix;
	}

	public function getPreferredName() {
		if ($this->preferredName===NULL) {
			$this->preferredName = $this->createPreferredName();
		}
		return $this->preferredName;
	}
	
	protected function createPreferredName() {
		return NULL;
	}

	public function setPreferredName($preferredName) {
		$this->preferredName = $this->validatePreferredName($preferredName);
	}

	protected function validatePreferredName($preferredName) {
		if ( ! is_string($preferredName) && ! is_null($preferredName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'preferredName', 'string'));
		}
	
		return $preferredName;
	}

	public function getSortName() {
		if ($this->sortName===NULL) {
			$this->sortName = $this->createSortName();
		}
		return $this->sortName;
	}
	
	protected function createSortName() {
		return NULL;
	}

	public function setSortName($sortName) {
		$this->sortName = $this->validateSortName($sortName);
	}

	protected function validateSortName($sortName) {
		if ( ! is_string($sortName) && ! is_null($sortName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sortName', 'string'));
		}
	
		return $sortName;
	}

	public function getFullName() {
		if ($this->fullName===NULL) {
			$this->fullName = $this->createFullName();
		}
		return $this->fullName;
	}
	
	protected function createFullName() {
		return NULL;
	}

	public function setFullName($fullName) {
		$this->fullName = $this->validateFullName($fullName);
	}

	protected function validateFullName($fullName) {
		if ( ! is_string($fullName) && ! is_null($fullName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'fullName', 'string'));
		}
	
		return $fullName;
	}
} // end class BaseNameType
