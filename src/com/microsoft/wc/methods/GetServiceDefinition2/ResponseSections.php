<?php
namespace com\microsoft\wc\methods\GetServiceDefinition2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="ResponseSections")
 */
class ResponseSections {
	/**
	 * Indicates which sections of the GetServiceDefinition response to return.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetServiceDefinition2\ResponseSection", collection="true", name="section")
	 */
	protected $section;

	public function __construct($section = NULL) {
		$this->section = ($section===NULL) ? NULL : $this->validateSection($section);
	}

	public function getSection($autoCreate = TRUE) {
		if ($this->section===NULL && $autoCreate && ! isset($this->_overrides['section']) ) {
			$this->section = $this->createSection();
		}
		return $this->section;
	}
	
	protected function createSection() {
		return array();
	}

	public function setSection($section) {
		$this->section = $this->validateSection($section);
	}

	protected function validateSection($section) {
		$count = count($section);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'section', 1));
		}
		foreach ($section as $entry) {
		}
	
		return $section;
	}

	public function addSection($section) {
		$this->section[] = $this->validateSectionType($section);
	}

	protected function validateSectionType($section) {
	
		return $section;
	}
} // end class ResponseSections
