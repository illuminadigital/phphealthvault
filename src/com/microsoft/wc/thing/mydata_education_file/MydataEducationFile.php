<?php
namespace com\microsoft\wc\thing\mydata_education_file;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.mydata-education-file", prefix="")
 * })
 * @XmlEntity	(xml="mydata-education-file")
 */
class MydataEducationFile extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines the schema for a MyData education file which can be uploaded toMicrosoft HealthVault.
	 * This data type is intended to store the U.S. Department of Education'sMyData initiative documents. For more information about theMyData initiative see: http://www.ed.gov/edblogs/technology/mydata/
	 */

	const ID = '9df1163d-eae1-405e-8a66-8aaf19bd5fc7';
	const NAME = 'MyData Education File';

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
} // end class MydataEducationFile
