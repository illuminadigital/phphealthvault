<?php
namespace com\microsoft\wc\thing\education_document;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.education-document", prefix="")
 * })
 * @XmlEntity	(xml="education-document")
 */
class EducationDocument extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines the schema for an education document which can be uploaded toMicrosoft HealthVault.
	 * The Education Document type is intended to store documents related toa student's education such as assignments and exams.
	 */

	const ID = '0AA6A4C7-CEF5-46EA-970E-206C8402DCCB';
	const NAME = 'Education Document';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="name")
	 */
	protected $name;

	public function __construct($name = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\String255nw();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\String255nw ) {
			$name = new \com\microsoft\wc\types\String255nw ($name);
		}
	
		return $name;
	}
} // end class EducationDocument
