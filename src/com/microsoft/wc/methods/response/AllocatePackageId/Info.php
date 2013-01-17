<?php
namespace com\microsoft\wc\methods\response\AllocatePackageId;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.AllocatePackageId", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlText	(type="string", name="identity-code")
	 */
	protected $identityCode;

	public function __construct($identityCode = NULL) {
		$this->identityCode = ($identityCode===NULL) ? NULL : $this->validateIdentityCode($identityCode);
	}

	public function getIdentityCode() {
		if ($this->identityCode===NULL) {
			$this->identityCode = $this->createIdentityCode();
		}
		return $this->identityCode;
	}
	
	protected function createIdentityCode() {
		return '';
	}

	public function setIdentityCode($identityCode) {
		$this->identityCode = $this->validateIdentityCode($identityCode);
	}

	protected function validateIdentityCode($identityCode) {
		if (!is_string($identityCode)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'identityCode', 'string'));
		}
	
		return $identityCode;
	}
} // end class Info
