<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\X509IssuerSerialType;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="X509DataType")
 */
class X509DataType {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\X509IssuerSerialType", name="X509IssuerSerial")
	 */
	protected $x509IssuerSerial;

	/**
	 * @XmlText	(type="string", name="X509SKI")
	 */
	protected $x509SKI;

	/**
	 * @XmlText	(type="string", name="X509SubjectName")
	 */
	protected $x509SubjectName;

	/**
	 * @XmlText	(type="string", name="X509Certificate")
	 */
	protected $x509Certificate;

	/**
	 * @XmlText	(type="string", name="X509CRL")
	 */
	protected $x509CRL;

	public function __construct($x509IssuerSerial = NULL, $x509SKI = NULL, $x509SubjectName = NULL, $x509Certificate = NULL, $x509CRL = NULL) {
		$this->x509IssuerSerial = ($x509IssuerSerial===NULL) ? NULL : $this->validateX509IssuerSerial($x509IssuerSerial);
		$this->x509SKI = ($x509SKI===NULL) ? NULL : $this->validateX509SKI($x509SKI);
		$this->x509SubjectName = ($x509SubjectName===NULL) ? NULL : $this->validateX509SubjectName($x509SubjectName);
		$this->x509Certificate = ($x509Certificate===NULL) ? NULL : $this->validateX509Certificate($x509Certificate);
		$this->x509CRL = ($x509CRL===NULL) ? NULL : $this->validateX509CRL($x509CRL);
	}

	public function getX509IssuerSerial() {
		if ($this->x509IssuerSerial===NULL) {
			$this->x509IssuerSerial = $this->createX509IssuerSerial();
		}
		return $this->x509IssuerSerial;
	}
	
	protected function createX509IssuerSerial() {
		return new X509IssuerSerialType();
	}

	public function setX509IssuerSerial($x509IssuerSerial) {
		$this->x509IssuerSerial = $this->validateX509IssuerSerial($x509IssuerSerial);
	}

	protected function validateX509IssuerSerial($x509IssuerSerial) {
		if ( ! $x509IssuerSerial instanceof X509IssuerSerialType ) {
			$x509IssuerSerial = new X509IssuerSerialType ($x509IssuerSerial);
		}
	
		return $x509IssuerSerial;
	}

	public function getX509SKI() {
		if ($this->x509SKI===NULL) {
			$this->x509SKI = $this->createX509SKI();
		}
		return $this->x509SKI;
	}
	
	protected function createX509SKI() {
		return NULL;
	}

	public function setX509SKI($x509SKI) {
		$this->x509SKI = $this->validateX509SKI($x509SKI);
	}

	protected function validateX509SKI($x509SKI) {
		if (!is_string($x509SKI)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'x509SKI', 'string'));
		}
	
		return $x509SKI;
	}

	public function getX509SubjectName() {
		if ($this->x509SubjectName===NULL) {
			$this->x509SubjectName = $this->createX509SubjectName();
		}
		return $this->x509SubjectName;
	}
	
	protected function createX509SubjectName() {
		return '';
	}

	public function setX509SubjectName($x509SubjectName) {
		$this->x509SubjectName = $this->validateX509SubjectName($x509SubjectName);
	}

	protected function validateX509SubjectName($x509SubjectName) {
		if (!is_string($x509SubjectName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'x509SubjectName', 'string'));
		}
	
		return $x509SubjectName;
	}

	public function getX509Certificate() {
		if ($this->x509Certificate===NULL) {
			$this->x509Certificate = $this->createX509Certificate();
		}
		return $this->x509Certificate;
	}
	
	protected function createX509Certificate() {
		return NULL;
	}

	public function setX509Certificate($x509Certificate) {
		$this->x509Certificate = $this->validateX509Certificate($x509Certificate);
	}

	protected function validateX509Certificate($x509Certificate) {
		if (!is_string($x509Certificate)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'x509Certificate', 'string'));
		}
	
		return $x509Certificate;
	}

	public function getX509CRL() {
		if ($this->x509CRL===NULL) {
			$this->x509CRL = $this->createX509CRL();
		}
		return $this->x509CRL;
	}
	
	protected function createX509CRL() {
		return NULL;
	}

	public function setX509CRL($x509CRL) {
		$this->x509CRL = $this->validateX509CRL($x509CRL);
	}

	protected function validateX509CRL($x509CRL) {
		if (!is_string($x509CRL)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'x509CRL', 'string'));
		}
	
		return $x509CRL;
	}
} // end class X509DataType
