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
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="name")
	 */
	protected $name;

	public function __construct($name = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getName() {
		if ($this->name===NULL) {
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
