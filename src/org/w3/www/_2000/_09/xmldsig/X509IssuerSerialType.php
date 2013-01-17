<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="X509IssuerSerialType")
 */
class X509IssuerSerialType {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="X509IssuerName")
	 */
	protected $x509IssuerName;

	/**
	 * @XmlText	(type="integer", name="X509SerialNumber")
	 */
	protected $x509SerialNumber;

	public function __construct($x509IssuerName = NULL, $x509SerialNumber = NULL) {
		$this->x509IssuerName = ($x509IssuerName===NULL) ? NULL : $this->validateX509IssuerName($x509IssuerName);
		$this->x509SerialNumber = ($x509SerialNumber===NULL) ? NULL : $this->validateX509SerialNumber($x509SerialNumber);
	}

	public function getX509IssuerName() {
		if ($this->x509IssuerName===NULL) {
			$this->x509IssuerName = $this->createX509IssuerName();
		}
		return $this->x509IssuerName;
	}
	
	protected function createX509IssuerName() {
		return '';
	}

	public function setX509IssuerName($x509IssuerName) {
		$this->x509IssuerName = $this->validateX509IssuerName($x509IssuerName);
	}

	protected function validateX509IssuerName($x509IssuerName) {
		if (!is_string($x509IssuerName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'x509IssuerName', 'string'));
		}
	
		return $x509IssuerName;
	}

	public function getX509SerialNumber() {
		if ($this->x509SerialNumber===NULL) {
			$this->x509SerialNumber = $this->createX509SerialNumber();
		}
		return $this->x509SerialNumber;
	}
	
	protected function createX509SerialNumber() {
		return 0;
	}

	public function setX509SerialNumber($x509SerialNumber) {
		$this->x509SerialNumber = $this->validateX509SerialNumber($x509SerialNumber);
	}

	protected function validateX509SerialNumber($x509SerialNumber) {
		if (!is_integer($x509SerialNumber)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'x509SerialNumber', 'integer'));
		}
	
		return $x509SerialNumber;
	}
} // end class X509IssuerSerialType
