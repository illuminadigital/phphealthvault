<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SchoolContact")
 */
class SchoolContact {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PublishInDirectoryType", name="PublishInDirectory")
	 */
	protected $publishInDirectory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ContactInfo", name="ContactInfo")
	 */
	protected $contactInfo;

	public function __construct($publishInDirectory = NULL, $contactInfo = NULL) {
		$this->publishInDirectory = ($publishInDirectory===NULL) ? NULL : $this->validatePublishInDirectory($publishInDirectory);
		$this->contactInfo = ($contactInfo===NULL) ? NULL : $this->validateContactInfo($contactInfo);
	}

	public function getPublishInDirectory($autoCreate = TRUE) {
		if ($this->publishInDirectory===NULL && $autoCreate && ! isset($this->_overrides['publishInDirectory']) ) {
			$this->publishInDirectory = $this->createPublishInDirectory();
		}
		return $this->publishInDirectory;
	}
	
	protected function createPublishInDirectory() {
		return NULL;
	}

	public function setPublishInDirectory($publishInDirectory) {
		$this->publishInDirectory = $this->validatePublishInDirectory($publishInDirectory);
	}

	protected function validatePublishInDirectory($publishInDirectory) {
	
		return $publishInDirectory;
	}

	public function getContactInfo($autoCreate = TRUE) {
		if ($this->contactInfo===NULL && $autoCreate && ! isset($this->_overrides['contactInfo']) ) {
			$this->contactInfo = $this->createContactInfo();
		}
		return $this->contactInfo;
	}
	
	protected function createContactInfo() {
		return new \org\sifinfo\www\infrastructure\_2_x\ContactInfo();
	}

	public function setContactInfo($contactInfo) {
		$this->contactInfo = $this->validateContactInfo($contactInfo);
	}

	protected function validateContactInfo($contactInfo) {
		if ( ! $contactInfo instanceof \org\sifinfo\www\infrastructure\_2_x\ContactInfo ) {
			$contactInfo = new \org\sifinfo\www\infrastructure\_2_x\ContactInfo ($contactInfo);
		}
	
		return $contactInfo;
	}
} // end class SchoolContact
