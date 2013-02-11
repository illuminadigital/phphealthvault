<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Street")
 */
class Street {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="Line1")
	 */
	protected $line1;

	/**
	 * @XmlText	(type="string", name="Line2")
	 */
	protected $line2;

	/**
	 * @XmlText	(type="string", name="Line3")
	 */
	protected $line3;

	/**
	 * @XmlText	(type="string", name="Complex")
	 */
	protected $complex;

	/**
	 * @XmlText	(type="string", name="StreetNumber")
	 */
	protected $streetNumber;

	/**
	 * @XmlText	(type="string", name="StreetPrefix")
	 */
	protected $streetPrefix;

	/**
	 * @XmlText	(type="string", name="StreetName")
	 */
	protected $streetName;

	/**
	 * @XmlText	(type="string", name="StreetType")
	 */
	protected $streetType;

	/**
	 * @XmlText	(type="string", name="StreetSuffix")
	 */
	protected $streetSuffix;

	/**
	 * @XmlText	(type="string", name="ApartmentType")
	 */
	protected $apartmentType;

	/**
	 * @XmlText	(type="string", name="ApartmentNumberPrefix")
	 */
	protected $apartmentNumberPrefix;

	/**
	 * @XmlText	(type="string", name="ApartmentNumber")
	 */
	protected $apartmentNumber;

	/**
	 * @XmlText	(type="string", name="ApartmentNumberSuffix")
	 */
	protected $apartmentNumberSuffix;

	public function __construct($line1 = NULL, $line2 = NULL, $line3 = NULL, $complex = NULL, $streetNumber = NULL, $streetPrefix = NULL, $streetName = NULL, $streetType = NULL, $streetSuffix = NULL, $apartmentType = NULL, $apartmentNumberPrefix = NULL, $apartmentNumber = NULL, $apartmentNumberSuffix = NULL) {
		$this->line1 = ($line1===NULL) ? NULL : $this->validateLine1($line1);
		$this->line2 = ($line2===NULL) ? NULL : $this->validateLine2($line2);
		$this->line3 = ($line3===NULL) ? NULL : $this->validateLine3($line3);
		$this->complex = ($complex===NULL) ? NULL : $this->validateComplex($complex);
		$this->streetNumber = ($streetNumber===NULL) ? NULL : $this->validateStreetNumber($streetNumber);
		$this->streetPrefix = ($streetPrefix===NULL) ? NULL : $this->validateStreetPrefix($streetPrefix);
		$this->streetName = ($streetName===NULL) ? NULL : $this->validateStreetName($streetName);
		$this->streetType = ($streetType===NULL) ? NULL : $this->validateStreetType($streetType);
		$this->streetSuffix = ($streetSuffix===NULL) ? NULL : $this->validateStreetSuffix($streetSuffix);
		$this->apartmentType = ($apartmentType===NULL) ? NULL : $this->validateApartmentType($apartmentType);
		$this->apartmentNumberPrefix = ($apartmentNumberPrefix===NULL) ? NULL : $this->validateApartmentNumberPrefix($apartmentNumberPrefix);
		$this->apartmentNumber = ($apartmentNumber===NULL) ? NULL : $this->validateApartmentNumber($apartmentNumber);
		$this->apartmentNumberSuffix = ($apartmentNumberSuffix===NULL) ? NULL : $this->validateApartmentNumberSuffix($apartmentNumberSuffix);
	}

	public function getLine1() {
		if ($this->line1===NULL) {
			$this->line1 = $this->createLine1();
		}
		return $this->line1;
	}
	
	protected function createLine1() {
		return NULL;
	}

	public function setLine1($line1) {
		$this->line1 = $this->validateLine1($line1);
	}

	protected function validateLine1($line1) {
		if (!is_string($line1)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'line1', 'string'));
		}
	
		return $line1;
	}

	public function getLine2() {
		if ($this->line2===NULL) {
			$this->line2 = $this->createLine2();
		}
		return $this->line2;
	}
	
	protected function createLine2() {
		return NULL;
	}

	public function setLine2($line2) {
		$this->line2 = $this->validateLine2($line2);
	}

	protected function validateLine2($line2) {
		if ( ! is_string($line2) && ! is_null($line2) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'line2', 'string'));
		}
	
		return $line2;
	}

	public function getLine3() {
		if ($this->line3===NULL) {
			$this->line3 = $this->createLine3();
		}
		return $this->line3;
	}
	
	protected function createLine3() {
		return NULL;
	}

	public function setLine3($line3) {
		$this->line3 = $this->validateLine3($line3);
	}

	protected function validateLine3($line3) {
		if ( ! is_string($line3) && ! is_null($line3) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'line3', 'string'));
		}
	
		return $line3;
	}

	public function getComplex() {
		if ($this->complex===NULL) {
			$this->complex = $this->createComplex();
		}
		return $this->complex;
	}
	
	protected function createComplex() {
		return NULL;
	}

	public function setComplex($complex) {
		$this->complex = $this->validateComplex($complex);
	}

	protected function validateComplex($complex) {
		if ( ! is_string($complex) && ! is_null($complex) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'complex', 'string'));
		}
	
		return $complex;
	}

	public function getStreetNumber() {
		if ($this->streetNumber===NULL) {
			$this->streetNumber = $this->createStreetNumber();
		}
		return $this->streetNumber;
	}
	
	protected function createStreetNumber() {
		return NULL;
	}

	public function setStreetNumber($streetNumber) {
		$this->streetNumber = $this->validateStreetNumber($streetNumber);
	}

	protected function validateStreetNumber($streetNumber) {
		if ( ! is_string($streetNumber) && ! is_null($streetNumber) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'streetNumber', 'string'));
		}
	
		return $streetNumber;
	}

	public function getStreetPrefix() {
		if ($this->streetPrefix===NULL) {
			$this->streetPrefix = $this->createStreetPrefix();
		}
		return $this->streetPrefix;
	}
	
	protected function createStreetPrefix() {
		return NULL;
	}

	public function setStreetPrefix($streetPrefix) {
		$this->streetPrefix = $this->validateStreetPrefix($streetPrefix);
	}

	protected function validateStreetPrefix($streetPrefix) {
		if ( ! is_string($streetPrefix) && ! is_null($streetPrefix) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'streetPrefix', 'string'));
		}
	
		return $streetPrefix;
	}

	public function getStreetName() {
		if ($this->streetName===NULL) {
			$this->streetName = $this->createStreetName();
		}
		return $this->streetName;
	}
	
	protected function createStreetName() {
		return NULL;
	}

	public function setStreetName($streetName) {
		$this->streetName = $this->validateStreetName($streetName);
	}

	protected function validateStreetName($streetName) {
		if ( ! is_string($streetName) && ! is_null($streetName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'streetName', 'string'));
		}
	
		return $streetName;
	}

	public function getStreetType() {
		if ($this->streetType===NULL) {
			$this->streetType = $this->createStreetType();
		}
		return $this->streetType;
	}
	
	protected function createStreetType() {
		return NULL;
	}

	public function setStreetType($streetType) {
		$this->streetType = $this->validateStreetType($streetType);
	}

	protected function validateStreetType($streetType) {
		if ( ! is_string($streetType) && ! is_null($streetType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'streetType', 'string'));
		}
	
		return $streetType;
	}

	public function getStreetSuffix() {
		if ($this->streetSuffix===NULL) {
			$this->streetSuffix = $this->createStreetSuffix();
		}
		return $this->streetSuffix;
	}
	
	protected function createStreetSuffix() {
		return NULL;
	}

	public function setStreetSuffix($streetSuffix) {
		$this->streetSuffix = $this->validateStreetSuffix($streetSuffix);
	}

	protected function validateStreetSuffix($streetSuffix) {
		if ( ! is_string($streetSuffix) && ! is_null($streetSuffix) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'streetSuffix', 'string'));
		}
	
		return $streetSuffix;
	}

	public function getApartmentType() {
		if ($this->apartmentType===NULL) {
			$this->apartmentType = $this->createApartmentType();
		}
		return $this->apartmentType;
	}
	
	protected function createApartmentType() {
		return NULL;
	}

	public function setApartmentType($apartmentType) {
		$this->apartmentType = $this->validateApartmentType($apartmentType);
	}

	protected function validateApartmentType($apartmentType) {
		if ( ! is_string($apartmentType) && ! is_null($apartmentType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'apartmentType', 'string'));
		}
	
		return $apartmentType;
	}

	public function getApartmentNumberPrefix() {
		if ($this->apartmentNumberPrefix===NULL) {
			$this->apartmentNumberPrefix = $this->createApartmentNumberPrefix();
		}
		return $this->apartmentNumberPrefix;
	}
	
	protected function createApartmentNumberPrefix() {
		return NULL;
	}

	public function setApartmentNumberPrefix($apartmentNumberPrefix) {
		$this->apartmentNumberPrefix = $this->validateApartmentNumberPrefix($apartmentNumberPrefix);
	}

	protected function validateApartmentNumberPrefix($apartmentNumberPrefix) {
		if ( ! is_string($apartmentNumberPrefix) && ! is_null($apartmentNumberPrefix) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'apartmentNumberPrefix', 'string'));
		}
	
		return $apartmentNumberPrefix;
	}

	public function getApartmentNumber() {
		if ($this->apartmentNumber===NULL) {
			$this->apartmentNumber = $this->createApartmentNumber();
		}
		return $this->apartmentNumber;
	}
	
	protected function createApartmentNumber() {
		return NULL;
	}

	public function setApartmentNumber($apartmentNumber) {
		$this->apartmentNumber = $this->validateApartmentNumber($apartmentNumber);
	}

	protected function validateApartmentNumber($apartmentNumber) {
		if ( ! is_string($apartmentNumber) && ! is_null($apartmentNumber) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'apartmentNumber', 'string'));
		}
	
		return $apartmentNumber;
	}

	public function getApartmentNumberSuffix() {
		if ($this->apartmentNumberSuffix===NULL) {
			$this->apartmentNumberSuffix = $this->createApartmentNumberSuffix();
		}
		return $this->apartmentNumberSuffix;
	}
	
	protected function createApartmentNumberSuffix() {
		return NULL;
	}

	public function setApartmentNumberSuffix($apartmentNumberSuffix) {
		$this->apartmentNumberSuffix = $this->validateApartmentNumberSuffix($apartmentNumberSuffix);
	}

	protected function validateApartmentNumberSuffix($apartmentNumberSuffix) {
		if ( ! is_string($apartmentNumberSuffix) && ! is_null($apartmentNumberSuffix) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'apartmentNumberSuffix', 'string'));
		}
	
		return $apartmentNumberSuffix;
	}
} // end class Street
