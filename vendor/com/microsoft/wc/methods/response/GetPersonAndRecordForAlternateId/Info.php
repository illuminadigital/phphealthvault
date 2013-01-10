<?php
namespace com\microsoft\wc\methods\response\GetPersonAndRecordForAlternateId;

use com\microsoft\wc\types\PersonInfo;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetPersonAndRecordForAlternateId", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\PersonInfo", name="person-info")
	 */
	protected $personInfo;

	public function __construct($personInfo = NULL) {
		$this->personInfo = ($personInfo===NULL) ? NULL : $this->validatePersonInfo($personInfo);
	}

	public function getPersonInfo() {
		if ($this->personInfo===NULL) {
			$this->personInfo = $this->createPersonInfo();
		}
		return $this->personInfo;
	}
	
	protected function createPersonInfo() {
		return new PersonInfo();
	}

	public function setPersonInfo($personInfo) {
		$this->personInfo = $this->validatePersonInfo($personInfo);
	}

	protected function validatePersonInfo($personInfo) {
		if ( ! $personInfo instanceof PersonInfo ) {
			$personInfo = new PersonInfo ($personInfo);
		}
	
		return $personInfo;
	}
} // end class Info
