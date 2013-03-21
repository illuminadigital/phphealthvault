<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="AD")
 */
class AD extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * Mailing and home or office addresses. A sequence of address parts, such as street or post office Box, city, postal code, country, etc.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.delimiter", collection="true", name="delimiter")
	 */
	protected $delimiter;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.country", collection="true", name="country")
	 */
	protected $country;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.state", collection="true", name="state")
	 */
	protected $state;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.county", collection="true", name="county")
	 */
	protected $county;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.city", collection="true", name="city")
	 */
	protected $city;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.postalCode", collection="true", name="postalCode")
	 */
	protected $postalCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetAddressLine", collection="true", name="streetAddressLine")
	 */
	protected $streetAddressLine;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.houseNumber", collection="true", name="houseNumber")
	 */
	protected $houseNumber;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.houseNumberNumeric", collection="true", name="houseNumberNumeric")
	 */
	protected $houseNumberNumeric;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.direction", collection="true", name="direction")
	 */
	protected $direction;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetName", collection="true", name="streetName")
	 */
	protected $streetName;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetNameBase", collection="true", name="streetNameBase")
	 */
	protected $streetNameBase;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetNameType", collection="true", name="streetNameType")
	 */
	protected $streetNameType;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.additionalLocator", collection="true", name="additionalLocator")
	 */
	protected $additionalLocator;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.unitID", collection="true", name="unitID")
	 */
	protected $unitID;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.unitType", collection="true", name="unitType")
	 */
	protected $unitType;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.careOf", collection="true", name="careOf")
	 */
	protected $careOf;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.censusTract", collection="true", name="censusTract")
	 */
	protected $censusTract;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryAddressLine", collection="true", name="deliveryAddressLine")
	 */
	protected $deliveryAddressLine;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryInstallationType", collection="true", name="deliveryInstallationType")
	 */
	protected $deliveryInstallationType;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryInstallationArea", collection="true", name="deliveryInstallationArea")
	 */
	protected $deliveryInstallationArea;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryInstallationQualifier", collection="true", name="deliveryInstallationQualifier")
	 */
	protected $deliveryInstallationQualifier;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryMode", collection="true", name="deliveryMode")
	 */
	protected $deliveryMode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryModeIdentifier", collection="true", name="deliveryModeIdentifier")
	 */
	protected $deliveryModeIdentifier;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.buildingNumberSuffix", collection="true", name="buildingNumberSuffix")
	 */
	protected $buildingNumberSuffix;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.postBox", collection="true", name="postBox")
	 */
	protected $postBox;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.precinct", collection="true", name="precinct")
	 */
	protected $precinct;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\SXCMTS", collection="true", name="useablePeriod")
	 */
	protected $useablePeriod;

	/**
	 * @XmlAttribute	(type="string", name="use")
	 */
	protected $use;

	/**
	 * @XmlAttribute	(type="string", name="isNotOrdered")
	 */
	protected $isNotOrdered;

	public function __construct($delimiter = NULL, $country = NULL, $state = NULL, $county = NULL, $city = NULL, $postalCode = NULL, $streetAddressLine = NULL, $houseNumber = NULL, $houseNumberNumeric = NULL, $direction = NULL, $streetName = NULL, $streetNameBase = NULL, $streetNameType = NULL, $additionalLocator = NULL, $unitID = NULL, $unitType = NULL, $careOf = NULL, $censusTract = NULL, $deliveryAddressLine = NULL, $deliveryInstallationType = NULL, $deliveryInstallationArea = NULL, $deliveryInstallationQualifier = NULL, $deliveryMode = NULL, $deliveryModeIdentifier = NULL, $buildingNumberSuffix = NULL, $postBox = NULL, $precinct = NULL, $useablePeriod = NULL, $use = NULL, $isNotOrdered = NULL) {
		$this->delimiter = ($delimiter===NULL) ? NULL : $this->validateDelimiter($delimiter);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->state = ($state===NULL) ? NULL : $this->validateState($state);
		$this->county = ($county===NULL) ? NULL : $this->validateCounty($county);
		$this->city = ($city===NULL) ? NULL : $this->validateCity($city);
		$this->postalCode = ($postalCode===NULL) ? NULL : $this->validatePostalCode($postalCode);
		$this->streetAddressLine = ($streetAddressLine===NULL) ? NULL : $this->validateStreetAddressLine($streetAddressLine);
		$this->houseNumber = ($houseNumber===NULL) ? NULL : $this->validateHouseNumber($houseNumber);
		$this->houseNumberNumeric = ($houseNumberNumeric===NULL) ? NULL : $this->validateHouseNumberNumeric($houseNumberNumeric);
		$this->direction = ($direction===NULL) ? NULL : $this->validateDirection($direction);
		$this->streetName = ($streetName===NULL) ? NULL : $this->validateStreetName($streetName);
		$this->streetNameBase = ($streetNameBase===NULL) ? NULL : $this->validateStreetNameBase($streetNameBase);
		$this->streetNameType = ($streetNameType===NULL) ? NULL : $this->validateStreetNameType($streetNameType);
		$this->additionalLocator = ($additionalLocator===NULL) ? NULL : $this->validateAdditionalLocator($additionalLocator);
		$this->unitID = ($unitID===NULL) ? NULL : $this->validateUnitID($unitID);
		$this->unitType = ($unitType===NULL) ? NULL : $this->validateUnitType($unitType);
		$this->careOf = ($careOf===NULL) ? NULL : $this->validateCareOf($careOf);
		$this->censusTract = ($censusTract===NULL) ? NULL : $this->validateCensusTract($censusTract);
		$this->deliveryAddressLine = ($deliveryAddressLine===NULL) ? NULL : $this->validateDeliveryAddressLine($deliveryAddressLine);
		$this->deliveryInstallationType = ($deliveryInstallationType===NULL) ? NULL : $this->validateDeliveryInstallationType($deliveryInstallationType);
		$this->deliveryInstallationArea = ($deliveryInstallationArea===NULL) ? NULL : $this->validateDeliveryInstallationArea($deliveryInstallationArea);
		$this->deliveryInstallationQualifier = ($deliveryInstallationQualifier===NULL) ? NULL : $this->validateDeliveryInstallationQualifier($deliveryInstallationQualifier);
		$this->deliveryMode = ($deliveryMode===NULL) ? NULL : $this->validateDeliveryMode($deliveryMode);
		$this->deliveryModeIdentifier = ($deliveryModeIdentifier===NULL) ? NULL : $this->validateDeliveryModeIdentifier($deliveryModeIdentifier);
		$this->buildingNumberSuffix = ($buildingNumberSuffix===NULL) ? NULL : $this->validateBuildingNumberSuffix($buildingNumberSuffix);
		$this->postBox = ($postBox===NULL) ? NULL : $this->validatePostBox($postBox);
		$this->precinct = ($precinct===NULL) ? NULL : $this->validatePrecinct($precinct);
		$this->useablePeriod = ($useablePeriod===NULL) ? NULL : $this->validateUseablePeriod($useablePeriod);
		$this->use = ($use===NULL) ? NULL : $this->validateUse($use);
		$this->isNotOrdered = ($isNotOrdered===NULL) ? NULL : $this->validateIsNotOrdered($isNotOrdered);
	}

	public function getDelimiter($autoCreate = TRUE) {
		if ($this->delimiter===NULL && $autoCreate && ! isset($this->_overrides['delimiter']) ) {
			$this->delimiter = $this->createDelimiter();
		}
		return $this->delimiter;
	}
	
	protected function createDelimiter() {
		return array();
	}

	public function setDelimiter($delimiter) {
		$this->delimiter = $this->validateDelimiter($delimiter);
	}

	protected function validateDelimiter($delimiter) {
		$count = count($delimiter);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'delimiter', 0));
		}
		foreach ($delimiter as $entry) {
		}
	
		return $delimiter;
	}

	public function addDelimiter($delimiter) {
		$this->delimiter[] = $this->validateDelimiterType($delimiter);
	}

	protected function validateDelimiterType($delimiter) {
	
		return $delimiter;
	}

	public function getCountry($autoCreate = TRUE) {
		if ($this->country===NULL && $autoCreate && ! isset($this->_overrides['country']) ) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return array();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		$count = count($country);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'country', 0));
		}
		foreach ($country as $entry) {
		}
	
		return $country;
	}

	public function addCountry($country) {
		$this->country[] = $this->validateCountryType($country);
	}

	protected function validateCountryType($country) {
	
		return $country;
	}

	public function getState($autoCreate = TRUE) {
		if ($this->state===NULL && $autoCreate && ! isset($this->_overrides['state']) ) {
			$this->state = $this->createState();
		}
		return $this->state;
	}
	
	protected function createState() {
		return array();
	}

	public function setState($state) {
		$this->state = $this->validateState($state);
	}

	protected function validateState($state) {
		$count = count($state);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'state', 0));
		}
		foreach ($state as $entry) {
		}
	
		return $state;
	}

	public function addState($state) {
		$this->state[] = $this->validateStateType($state);
	}

	protected function validateStateType($state) {
	
		return $state;
	}

	public function getCounty($autoCreate = TRUE) {
		if ($this->county===NULL && $autoCreate && ! isset($this->_overrides['county']) ) {
			$this->county = $this->createCounty();
		}
		return $this->county;
	}
	
	protected function createCounty() {
		return array();
	}

	public function setCounty($county) {
		$this->county = $this->validateCounty($county);
	}

	protected function validateCounty($county) {
		$count = count($county);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'county', 0));
		}
		foreach ($county as $entry) {
		}
	
		return $county;
	}

	public function addCounty($county) {
		$this->county[] = $this->validateCountyType($county);
	}

	protected function validateCountyType($county) {
	
		return $county;
	}

	public function getCity($autoCreate = TRUE) {
		if ($this->city===NULL && $autoCreate && ! isset($this->_overrides['city']) ) {
			$this->city = $this->createCity();
		}
		return $this->city;
	}
	
	protected function createCity() {
		return array();
	}

	public function setCity($city) {
		$this->city = $this->validateCity($city);
	}

	protected function validateCity($city) {
		$count = count($city);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'city', 0));
		}
		foreach ($city as $entry) {
		}
	
		return $city;
	}

	public function addCity($city) {
		$this->city[] = $this->validateCityType($city);
	}

	protected function validateCityType($city) {
	
		return $city;
	}

	public function getPostalCode($autoCreate = TRUE) {
		if ($this->postalCode===NULL && $autoCreate && ! isset($this->_overrides['postalCode']) ) {
			$this->postalCode = $this->createPostalCode();
		}
		return $this->postalCode;
	}
	
	protected function createPostalCode() {
		return array();
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $this->validatePostalCode($postalCode);
	}

	protected function validatePostalCode($postalCode) {
		$count = count($postalCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'postalCode', 0));
		}
		foreach ($postalCode as $entry) {
		}
	
		return $postalCode;
	}

	public function addPostalCode($postalCode) {
		$this->postalCode[] = $this->validatePostalCodeType($postalCode);
	}

	protected function validatePostalCodeType($postalCode) {
	
		return $postalCode;
	}

	public function getStreetAddressLine($autoCreate = TRUE) {
		if ($this->streetAddressLine===NULL && $autoCreate && ! isset($this->_overrides['streetAddressLine']) ) {
			$this->streetAddressLine = $this->createStreetAddressLine();
		}
		return $this->streetAddressLine;
	}
	
	protected function createStreetAddressLine() {
		return array();
	}

	public function setStreetAddressLine($streetAddressLine) {
		$this->streetAddressLine = $this->validateStreetAddressLine($streetAddressLine);
	}

	protected function validateStreetAddressLine($streetAddressLine) {
		$count = count($streetAddressLine);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'streetAddressLine', 0));
		}
		foreach ($streetAddressLine as $entry) {
		}
	
		return $streetAddressLine;
	}

	public function addStreetAddressLine($streetAddressLine) {
		$this->streetAddressLine[] = $this->validateStreetAddressLineType($streetAddressLine);
	}

	protected function validateStreetAddressLineType($streetAddressLine) {
	
		return $streetAddressLine;
	}

	public function getHouseNumber($autoCreate = TRUE) {
		if ($this->houseNumber===NULL && $autoCreate && ! isset($this->_overrides['houseNumber']) ) {
			$this->houseNumber = $this->createHouseNumber();
		}
		return $this->houseNumber;
	}
	
	protected function createHouseNumber() {
		return array();
	}

	public function setHouseNumber($houseNumber) {
		$this->houseNumber = $this->validateHouseNumber($houseNumber);
	}

	protected function validateHouseNumber($houseNumber) {
		$count = count($houseNumber);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'houseNumber', 0));
		}
		foreach ($houseNumber as $entry) {
		}
	
		return $houseNumber;
	}

	public function addHouseNumber($houseNumber) {
		$this->houseNumber[] = $this->validateHouseNumberType($houseNumber);
	}

	protected function validateHouseNumberType($houseNumber) {
	
		return $houseNumber;
	}

	public function getHouseNumberNumeric($autoCreate = TRUE) {
		if ($this->houseNumberNumeric===NULL && $autoCreate && ! isset($this->_overrides['houseNumberNumeric']) ) {
			$this->houseNumberNumeric = $this->createHouseNumberNumeric();
		}
		return $this->houseNumberNumeric;
	}
	
	protected function createHouseNumberNumeric() {
		return array();
	}

	public function setHouseNumberNumeric($houseNumberNumeric) {
		$this->houseNumberNumeric = $this->validateHouseNumberNumeric($houseNumberNumeric);
	}

	protected function validateHouseNumberNumeric($houseNumberNumeric) {
		$count = count($houseNumberNumeric);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'houseNumberNumeric', 0));
		}
		foreach ($houseNumberNumeric as $entry) {
		}
	
		return $houseNumberNumeric;
	}

	public function addHouseNumberNumeric($houseNumberNumeric) {
		$this->houseNumberNumeric[] = $this->validateHouseNumberNumericType($houseNumberNumeric);
	}

	protected function validateHouseNumberNumericType($houseNumberNumeric) {
	
		return $houseNumberNumeric;
	}

	public function getDirection($autoCreate = TRUE) {
		if ($this->direction===NULL && $autoCreate && ! isset($this->_overrides['direction']) ) {
			$this->direction = $this->createDirection();
		}
		return $this->direction;
	}
	
	protected function createDirection() {
		return array();
	}

	public function setDirection($direction) {
		$this->direction = $this->validateDirection($direction);
	}

	protected function validateDirection($direction) {
		$count = count($direction);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'direction', 0));
		}
		foreach ($direction as $entry) {
		}
	
		return $direction;
	}

	public function addDirection($direction) {
		$this->direction[] = $this->validateDirectionType($direction);
	}

	protected function validateDirectionType($direction) {
	
		return $direction;
	}

	public function getStreetName($autoCreate = TRUE) {
		if ($this->streetName===NULL && $autoCreate && ! isset($this->_overrides['streetName']) ) {
			$this->streetName = $this->createStreetName();
		}
		return $this->streetName;
	}
	
	protected function createStreetName() {
		return array();
	}

	public function setStreetName($streetName) {
		$this->streetName = $this->validateStreetName($streetName);
	}

	protected function validateStreetName($streetName) {
		$count = count($streetName);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'streetName', 0));
		}
		foreach ($streetName as $entry) {
		}
	
		return $streetName;
	}

	public function addStreetName($streetName) {
		$this->streetName[] = $this->validateStreetNameType($streetName);
	}

	protected function validateStreetNameType($streetName) {
	
		return $streetName;
	}

	public function getStreetNameBase($autoCreate = TRUE) {
		if ($this->streetNameBase===NULL && $autoCreate && ! isset($this->_overrides['streetNameBase']) ) {
			$this->streetNameBase = $this->createStreetNameBase();
		}
		return $this->streetNameBase;
	}
	
	protected function createStreetNameBase() {
		return array();
	}

	public function setStreetNameBase($streetNameBase) {
		$this->streetNameBase = $this->validateStreetNameBase($streetNameBase);
	}

	protected function validateStreetNameBase($streetNameBase) {
		$count = count($streetNameBase);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'streetNameBase', 0));
		}
		foreach ($streetNameBase as $entry) {
		}
	
		return $streetNameBase;
	}

	public function addStreetNameBase($streetNameBase) {
		$this->streetNameBase[] = $this->validateStreetNameBaseType($streetNameBase);
	}

	protected function validateStreetNameBaseType($streetNameBase) {
	
		return $streetNameBase;
	}

	public function getStreetNameType($autoCreate = TRUE) {
		if ($this->streetNameType===NULL && $autoCreate && ! isset($this->_overrides['streetNameType']) ) {
			$this->streetNameType = $this->createStreetNameType();
		}
		return $this->streetNameType;
	}
	
	protected function createStreetNameType() {
		return array();
	}

	public function setStreetNameType($streetNameType) {
		$this->streetNameType = $this->validateStreetNameType($streetNameType);
	}

	protected function validateStreetNameType($streetNameType) {
		$count = count($streetNameType);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'streetNameType', 0));
		}
		foreach ($streetNameType as $entry) {
		}
	
		return $streetNameType;
	}

	public function addStreetNameType($streetNameType) {
		$this->streetNameType[] = $this->validateStreetNameTypeType($streetNameType);
	}

	protected function validateStreetNameTypeType($streetNameType) {
	
		return $streetNameType;
	}

	public function getAdditionalLocator($autoCreate = TRUE) {
		if ($this->additionalLocator===NULL && $autoCreate && ! isset($this->_overrides['additionalLocator']) ) {
			$this->additionalLocator = $this->createAdditionalLocator();
		}
		return $this->additionalLocator;
	}
	
	protected function createAdditionalLocator() {
		return array();
	}

	public function setAdditionalLocator($additionalLocator) {
		$this->additionalLocator = $this->validateAdditionalLocator($additionalLocator);
	}

	protected function validateAdditionalLocator($additionalLocator) {
		$count = count($additionalLocator);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'additionalLocator', 0));
		}
		foreach ($additionalLocator as $entry) {
		}
	
		return $additionalLocator;
	}

	public function addAdditionalLocator($additionalLocator) {
		$this->additionalLocator[] = $this->validateAdditionalLocatorType($additionalLocator);
	}

	protected function validateAdditionalLocatorType($additionalLocator) {
	
		return $additionalLocator;
	}

	public function getUnitID($autoCreate = TRUE) {
		if ($this->unitID===NULL && $autoCreate && ! isset($this->_overrides['unitID']) ) {
			$this->unitID = $this->createUnitID();
		}
		return $this->unitID;
	}
	
	protected function createUnitID() {
		return array();
	}

	public function setUnitID($unitID) {
		$this->unitID = $this->validateUnitID($unitID);
	}

	protected function validateUnitID($unitID) {
		$count = count($unitID);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'unitID', 0));
		}
		foreach ($unitID as $entry) {
		}
	
		return $unitID;
	}

	public function addUnitID($unitID) {
		$this->unitID[] = $this->validateUnitIDType($unitID);
	}

	protected function validateUnitIDType($unitID) {
	
		return $unitID;
	}

	public function getUnitType($autoCreate = TRUE) {
		if ($this->unitType===NULL && $autoCreate && ! isset($this->_overrides['unitType']) ) {
			$this->unitType = $this->createUnitType();
		}
		return $this->unitType;
	}
	
	protected function createUnitType() {
		return array();
	}

	public function setUnitType($unitType) {
		$this->unitType = $this->validateUnitType($unitType);
	}

	protected function validateUnitType($unitType) {
		$count = count($unitType);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'unitType', 0));
		}
		foreach ($unitType as $entry) {
		}
	
		return $unitType;
	}

	public function addUnitType($unitType) {
		$this->unitType[] = $this->validateUnitTypeType($unitType);
	}

	protected function validateUnitTypeType($unitType) {
	
		return $unitType;
	}

	public function getCareOf($autoCreate = TRUE) {
		if ($this->careOf===NULL && $autoCreate && ! isset($this->_overrides['careOf']) ) {
			$this->careOf = $this->createCareOf();
		}
		return $this->careOf;
	}
	
	protected function createCareOf() {
		return array();
	}

	public function setCareOf($careOf) {
		$this->careOf = $this->validateCareOf($careOf);
	}

	protected function validateCareOf($careOf) {
		$count = count($careOf);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'careOf', 0));
		}
		foreach ($careOf as $entry) {
		}
	
		return $careOf;
	}

	public function addCareOf($careOf) {
		$this->careOf[] = $this->validateCareOfType($careOf);
	}

	protected function validateCareOfType($careOf) {
	
		return $careOf;
	}

	public function getCensusTract($autoCreate = TRUE) {
		if ($this->censusTract===NULL && $autoCreate && ! isset($this->_overrides['censusTract']) ) {
			$this->censusTract = $this->createCensusTract();
		}
		return $this->censusTract;
	}
	
	protected function createCensusTract() {
		return array();
	}

	public function setCensusTract($censusTract) {
		$this->censusTract = $this->validateCensusTract($censusTract);
	}

	protected function validateCensusTract($censusTract) {
		$count = count($censusTract);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'censusTract', 0));
		}
		foreach ($censusTract as $entry) {
		}
	
		return $censusTract;
	}

	public function addCensusTract($censusTract) {
		$this->censusTract[] = $this->validateCensusTractType($censusTract);
	}

	protected function validateCensusTractType($censusTract) {
	
		return $censusTract;
	}

	public function getDeliveryAddressLine($autoCreate = TRUE) {
		if ($this->deliveryAddressLine===NULL && $autoCreate && ! isset($this->_overrides['deliveryAddressLine']) ) {
			$this->deliveryAddressLine = $this->createDeliveryAddressLine();
		}
		return $this->deliveryAddressLine;
	}
	
	protected function createDeliveryAddressLine() {
		return array();
	}

	public function setDeliveryAddressLine($deliveryAddressLine) {
		$this->deliveryAddressLine = $this->validateDeliveryAddressLine($deliveryAddressLine);
	}

	protected function validateDeliveryAddressLine($deliveryAddressLine) {
		$count = count($deliveryAddressLine);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'deliveryAddressLine', 0));
		}
		foreach ($deliveryAddressLine as $entry) {
		}
	
		return $deliveryAddressLine;
	}

	public function addDeliveryAddressLine($deliveryAddressLine) {
		$this->deliveryAddressLine[] = $this->validateDeliveryAddressLineType($deliveryAddressLine);
	}

	protected function validateDeliveryAddressLineType($deliveryAddressLine) {
	
		return $deliveryAddressLine;
	}

	public function getDeliveryInstallationType($autoCreate = TRUE) {
		if ($this->deliveryInstallationType===NULL && $autoCreate && ! isset($this->_overrides['deliveryInstallationType']) ) {
			$this->deliveryInstallationType = $this->createDeliveryInstallationType();
		}
		return $this->deliveryInstallationType;
	}
	
	protected function createDeliveryInstallationType() {
		return array();
	}

	public function setDeliveryInstallationType($deliveryInstallationType) {
		$this->deliveryInstallationType = $this->validateDeliveryInstallationType($deliveryInstallationType);
	}

	protected function validateDeliveryInstallationType($deliveryInstallationType) {
		$count = count($deliveryInstallationType);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'deliveryInstallationType', 0));
		}
		foreach ($deliveryInstallationType as $entry) {
		}
	
		return $deliveryInstallationType;
	}

	public function addDeliveryInstallationType($deliveryInstallationType) {
		$this->deliveryInstallationType[] = $this->validateDeliveryInstallationTypeType($deliveryInstallationType);
	}

	protected function validateDeliveryInstallationTypeType($deliveryInstallationType) {
	
		return $deliveryInstallationType;
	}

	public function getDeliveryInstallationArea($autoCreate = TRUE) {
		if ($this->deliveryInstallationArea===NULL && $autoCreate && ! isset($this->_overrides['deliveryInstallationArea']) ) {
			$this->deliveryInstallationArea = $this->createDeliveryInstallationArea();
		}
		return $this->deliveryInstallationArea;
	}
	
	protected function createDeliveryInstallationArea() {
		return array();
	}

	public function setDeliveryInstallationArea($deliveryInstallationArea) {
		$this->deliveryInstallationArea = $this->validateDeliveryInstallationArea($deliveryInstallationArea);
	}

	protected function validateDeliveryInstallationArea($deliveryInstallationArea) {
		$count = count($deliveryInstallationArea);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'deliveryInstallationArea', 0));
		}
		foreach ($deliveryInstallationArea as $entry) {
		}
	
		return $deliveryInstallationArea;
	}

	public function addDeliveryInstallationArea($deliveryInstallationArea) {
		$this->deliveryInstallationArea[] = $this->validateDeliveryInstallationAreaType($deliveryInstallationArea);
	}

	protected function validateDeliveryInstallationAreaType($deliveryInstallationArea) {
	
		return $deliveryInstallationArea;
	}

	public function getDeliveryInstallationQualifier($autoCreate = TRUE) {
		if ($this->deliveryInstallationQualifier===NULL && $autoCreate && ! isset($this->_overrides['deliveryInstallationQualifier']) ) {
			$this->deliveryInstallationQualifier = $this->createDeliveryInstallationQualifier();
		}
		return $this->deliveryInstallationQualifier;
	}
	
	protected function createDeliveryInstallationQualifier() {
		return array();
	}

	public function setDeliveryInstallationQualifier($deliveryInstallationQualifier) {
		$this->deliveryInstallationQualifier = $this->validateDeliveryInstallationQualifier($deliveryInstallationQualifier);
	}

	protected function validateDeliveryInstallationQualifier($deliveryInstallationQualifier) {
		$count = count($deliveryInstallationQualifier);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'deliveryInstallationQualifier', 0));
		}
		foreach ($deliveryInstallationQualifier as $entry) {
		}
	
		return $deliveryInstallationQualifier;
	}

	public function addDeliveryInstallationQualifier($deliveryInstallationQualifier) {
		$this->deliveryInstallationQualifier[] = $this->validateDeliveryInstallationQualifierType($deliveryInstallationQualifier);
	}

	protected function validateDeliveryInstallationQualifierType($deliveryInstallationQualifier) {
	
		return $deliveryInstallationQualifier;
	}

	public function getDeliveryMode($autoCreate = TRUE) {
		if ($this->deliveryMode===NULL && $autoCreate && ! isset($this->_overrides['deliveryMode']) ) {
			$this->deliveryMode = $this->createDeliveryMode();
		}
		return $this->deliveryMode;
	}
	
	protected function createDeliveryMode() {
		return array();
	}

	public function setDeliveryMode($deliveryMode) {
		$this->deliveryMode = $this->validateDeliveryMode($deliveryMode);
	}

	protected function validateDeliveryMode($deliveryMode) {
		$count = count($deliveryMode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'deliveryMode', 0));
		}
		foreach ($deliveryMode as $entry) {
		}
	
		return $deliveryMode;
	}

	public function addDeliveryMode($deliveryMode) {
		$this->deliveryMode[] = $this->validateDeliveryModeType($deliveryMode);
	}

	protected function validateDeliveryModeType($deliveryMode) {
	
		return $deliveryMode;
	}

	public function getDeliveryModeIdentifier($autoCreate = TRUE) {
		if ($this->deliveryModeIdentifier===NULL && $autoCreate && ! isset($this->_overrides['deliveryModeIdentifier']) ) {
			$this->deliveryModeIdentifier = $this->createDeliveryModeIdentifier();
		}
		return $this->deliveryModeIdentifier;
	}
	
	protected function createDeliveryModeIdentifier() {
		return array();
	}

	public function setDeliveryModeIdentifier($deliveryModeIdentifier) {
		$this->deliveryModeIdentifier = $this->validateDeliveryModeIdentifier($deliveryModeIdentifier);
	}

	protected function validateDeliveryModeIdentifier($deliveryModeIdentifier) {
		$count = count($deliveryModeIdentifier);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'deliveryModeIdentifier', 0));
		}
		foreach ($deliveryModeIdentifier as $entry) {
		}
	
		return $deliveryModeIdentifier;
	}

	public function addDeliveryModeIdentifier($deliveryModeIdentifier) {
		$this->deliveryModeIdentifier[] = $this->validateDeliveryModeIdentifierType($deliveryModeIdentifier);
	}

	protected function validateDeliveryModeIdentifierType($deliveryModeIdentifier) {
	
		return $deliveryModeIdentifier;
	}

	public function getBuildingNumberSuffix($autoCreate = TRUE) {
		if ($this->buildingNumberSuffix===NULL && $autoCreate && ! isset($this->_overrides['buildingNumberSuffix']) ) {
			$this->buildingNumberSuffix = $this->createBuildingNumberSuffix();
		}
		return $this->buildingNumberSuffix;
	}
	
	protected function createBuildingNumberSuffix() {
		return array();
	}

	public function setBuildingNumberSuffix($buildingNumberSuffix) {
		$this->buildingNumberSuffix = $this->validateBuildingNumberSuffix($buildingNumberSuffix);
	}

	protected function validateBuildingNumberSuffix($buildingNumberSuffix) {
		$count = count($buildingNumberSuffix);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'buildingNumberSuffix', 0));
		}
		foreach ($buildingNumberSuffix as $entry) {
		}
	
		return $buildingNumberSuffix;
	}

	public function addBuildingNumberSuffix($buildingNumberSuffix) {
		$this->buildingNumberSuffix[] = $this->validateBuildingNumberSuffixType($buildingNumberSuffix);
	}

	protected function validateBuildingNumberSuffixType($buildingNumberSuffix) {
	
		return $buildingNumberSuffix;
	}

	public function getPostBox($autoCreate = TRUE) {
		if ($this->postBox===NULL && $autoCreate && ! isset($this->_overrides['postBox']) ) {
			$this->postBox = $this->createPostBox();
		}
		return $this->postBox;
	}
	
	protected function createPostBox() {
		return array();
	}

	public function setPostBox($postBox) {
		$this->postBox = $this->validatePostBox($postBox);
	}

	protected function validatePostBox($postBox) {
		$count = count($postBox);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'postBox', 0));
		}
		foreach ($postBox as $entry) {
		}
	
		return $postBox;
	}

	public function addPostBox($postBox) {
		$this->postBox[] = $this->validatePostBoxType($postBox);
	}

	protected function validatePostBoxType($postBox) {
	
		return $postBox;
	}

	public function getPrecinct($autoCreate = TRUE) {
		if ($this->precinct===NULL && $autoCreate && ! isset($this->_overrides['precinct']) ) {
			$this->precinct = $this->createPrecinct();
		}
		return $this->precinct;
	}
	
	protected function createPrecinct() {
		return array();
	}

	public function setPrecinct($precinct) {
		$this->precinct = $this->validatePrecinct($precinct);
	}

	protected function validatePrecinct($precinct) {
		$count = count($precinct);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'precinct', 0));
		}
		foreach ($precinct as $entry) {
		}
	
		return $precinct;
	}

	public function addPrecinct($precinct) {
		$this->precinct[] = $this->validatePrecinctType($precinct);
	}

	protected function validatePrecinctType($precinct) {
	
		return $precinct;
	}

	public function getUseablePeriod($autoCreate = TRUE) {
		if ($this->useablePeriod===NULL && $autoCreate && ! isset($this->_overrides['useablePeriod']) ) {
			$this->useablePeriod = $this->createUseablePeriod();
		}
		return $this->useablePeriod;
	}
	
	protected function createUseablePeriod() {
		return array();
	}

	public function setUseablePeriod($useablePeriod) {
		$this->useablePeriod = $this->validateUseablePeriod($useablePeriod);
	}

	protected function validateUseablePeriod($useablePeriod) {
		$count = count($useablePeriod);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'useablePeriod', 0));
		}
		foreach ($useablePeriod as $entry) {
		}
	
		return $useablePeriod;
	}

	public function addUseablePeriod($useablePeriod) {
		$this->useablePeriod[] = $this->validateUseablePeriodType($useablePeriod);
	}

	protected function validateUseablePeriodType($useablePeriod) {
	
		return $useablePeriod;
	}

	public function getUse($autoCreate = TRUE) {
		if ($this->use===NULL && $autoCreate && ! isset($this->_overrides['use']) ) {
			$this->use = $this->createUse();
		}
		return $this->use;
	}
	
	protected function createUse() {
		return NULL;
	}

	public function setUse($use) {
		$this->use = $this->validateUse($use);
	}

	protected function validateUse($use) {
	
		return $use;
	}

	public function getIsNotOrdered($autoCreate = TRUE) {
		if ($this->isNotOrdered===NULL && $autoCreate && ! isset($this->_overrides['isNotOrdered']) ) {
			$this->isNotOrdered = $this->createIsNotOrdered();
		}
		return $this->isNotOrdered;
	}
	
	protected function createIsNotOrdered() {
		return NULL;
	}

	public function setIsNotOrdered($isNotOrdered) {
		$this->isNotOrdered = $this->validateIsNotOrdered($isNotOrdered);
	}

	protected function validateIsNotOrdered($isNotOrdered) {
	
		return $isNotOrdered;
	}
} // end class AD
