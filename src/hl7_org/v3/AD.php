<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="AD")
 */
class AD extends \ANY\ANY {
	/**
	 * Mailing and home or office addresses. A sequence of address parts, such as street or post office Box, city, postal code, country, etc.
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.delimiter", name="delimiter")
	 */
	protected $delimiter;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.country", name="country")
	 */
	protected $country;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.state", name="state")
	 */
	protected $state;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.county", name="county")
	 */
	protected $county;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.city", name="city")
	 */
	protected $city;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.postalCode", name="postalCode")
	 */
	protected $postalCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.streetAddressLine", name="streetAddressLine")
	 */
	protected $streetAddressLine;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.houseNumber", name="houseNumber")
	 */
	protected $houseNumber;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.houseNumberNumeric", name="houseNumberNumeric")
	 */
	protected $houseNumberNumeric;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.direction", name="direction")
	 */
	protected $direction;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.streetName", name="streetName")
	 */
	protected $streetName;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.streetNameBase", name="streetNameBase")
	 */
	protected $streetNameBase;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.streetNameType", name="streetNameType")
	 */
	protected $streetNameType;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.additionalLocator", name="additionalLocator")
	 */
	protected $additionalLocator;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.unitID", name="unitID")
	 */
	protected $unitID;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.unitType", name="unitType")
	 */
	protected $unitType;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.careOf", name="careOf")
	 */
	protected $careOf;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.censusTract", name="censusTract")
	 */
	protected $censusTract;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.deliveryAddressLine", name="deliveryAddressLine")
	 */
	protected $deliveryAddressLine;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.deliveryInstallationType", name="deliveryInstallationType")
	 */
	protected $deliveryInstallationType;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.deliveryInstallationArea", name="deliveryInstallationArea")
	 */
	protected $deliveryInstallationArea;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.deliveryInstallationQualifier", name="deliveryInstallationQualifier")
	 */
	protected $deliveryInstallationQualifier;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.deliveryMode", name="deliveryMode")
	 */
	protected $deliveryMode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.deliveryModeIdentifier", name="deliveryModeIdentifier")
	 */
	protected $deliveryModeIdentifier;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.buildingNumberSuffix", name="buildingNumberSuffix")
	 */
	protected $buildingNumberSuffix;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.postBox", name="postBox")
	 */
	protected $postBox;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Adxp.precinct", name="precinct")
	 */
	protected $precinct;

	/**
	 * @XmlElement	(type="\hl7_org\v3\SXCMTS", collection="true", name="useablePeriod")
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

	public function getDelimiter() {
		if ($this->delimiter===NULL) {
			$this->delimiter = $this->createDelimiter();
		}
		return $this->delimiter;
	}
	
	protected function createDelimiter() {
		return new \hl7_org\v3\Adxp.delimiter();
	}

	public function setDelimiter($delimiter) {
		$this->delimiter = $this->validateDelimiter($delimiter);
	}

	protected function validateDelimiter($delimiter) {
		if ( ! $delimiter instanceof \hl7_org\v3\Adxp.delimiter ) {
			$delimiter = new \hl7_org\v3\Adxp.delimiter ($delimiter);
		}
	
		return $delimiter;
	}

	public function getCountry() {
		if ($this->country===NULL) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new \hl7_org\v3\Adxp.country();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( ! $country instanceof \hl7_org\v3\Adxp.country ) {
			$country = new \hl7_org\v3\Adxp.country ($country);
		}
	
		return $country;
	}

	public function getState() {
		if ($this->state===NULL) {
			$this->state = $this->createState();
		}
		return $this->state;
	}
	
	protected function createState() {
		return new \hl7_org\v3\Adxp.state();
	}

	public function setState($state) {
		$this->state = $this->validateState($state);
	}

	protected function validateState($state) {
		if ( ! $state instanceof \hl7_org\v3\Adxp.state ) {
			$state = new \hl7_org\v3\Adxp.state ($state);
		}
	
		return $state;
	}

	public function getCounty() {
		if ($this->county===NULL) {
			$this->county = $this->createCounty();
		}
		return $this->county;
	}
	
	protected function createCounty() {
		return new \hl7_org\v3\Adxp.county();
	}

	public function setCounty($county) {
		$this->county = $this->validateCounty($county);
	}

	protected function validateCounty($county) {
		if ( ! $county instanceof \hl7_org\v3\Adxp.county ) {
			$county = new \hl7_org\v3\Adxp.county ($county);
		}
	
		return $county;
	}

	public function getCity() {
		if ($this->city===NULL) {
			$this->city = $this->createCity();
		}
		return $this->city;
	}
	
	protected function createCity() {
		return new \hl7_org\v3\Adxp.city();
	}

	public function setCity($city) {
		$this->city = $this->validateCity($city);
	}

	protected function validateCity($city) {
		if ( ! $city instanceof \hl7_org\v3\Adxp.city ) {
			$city = new \hl7_org\v3\Adxp.city ($city);
		}
	
		return $city;
	}

	public function getPostalCode() {
		if ($this->postalCode===NULL) {
			$this->postalCode = $this->createPostalCode();
		}
		return $this->postalCode;
	}
	
	protected function createPostalCode() {
		return new \hl7_org\v3\Adxp.postalCode();
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $this->validatePostalCode($postalCode);
	}

	protected function validatePostalCode($postalCode) {
		if ( ! $postalCode instanceof \hl7_org\v3\Adxp.postalCode ) {
			$postalCode = new \hl7_org\v3\Adxp.postalCode ($postalCode);
		}
	
		return $postalCode;
	}

	public function getStreetAddressLine() {
		if ($this->streetAddressLine===NULL) {
			$this->streetAddressLine = $this->createStreetAddressLine();
		}
		return $this->streetAddressLine;
	}
	
	protected function createStreetAddressLine() {
		return new \hl7_org\v3\Adxp.streetAddressLine();
	}

	public function setStreetAddressLine($streetAddressLine) {
		$this->streetAddressLine = $this->validateStreetAddressLine($streetAddressLine);
	}

	protected function validateStreetAddressLine($streetAddressLine) {
		if ( ! $streetAddressLine instanceof \hl7_org\v3\Adxp.streetAddressLine ) {
			$streetAddressLine = new \hl7_org\v3\Adxp.streetAddressLine ($streetAddressLine);
		}
	
		return $streetAddressLine;
	}

	public function getHouseNumber() {
		if ($this->houseNumber===NULL) {
			$this->houseNumber = $this->createHouseNumber();
		}
		return $this->houseNumber;
	}
	
	protected function createHouseNumber() {
		return new \hl7_org\v3\Adxp.houseNumber();
	}

	public function setHouseNumber($houseNumber) {
		$this->houseNumber = $this->validateHouseNumber($houseNumber);
	}

	protected function validateHouseNumber($houseNumber) {
		if ( ! $houseNumber instanceof \hl7_org\v3\Adxp.houseNumber ) {
			$houseNumber = new \hl7_org\v3\Adxp.houseNumber ($houseNumber);
		}
	
		return $houseNumber;
	}

	public function getHouseNumberNumeric() {
		if ($this->houseNumberNumeric===NULL) {
			$this->houseNumberNumeric = $this->createHouseNumberNumeric();
		}
		return $this->houseNumberNumeric;
	}
	
	protected function createHouseNumberNumeric() {
		return new \hl7_org\v3\Adxp.houseNumberNumeric();
	}

	public function setHouseNumberNumeric($houseNumberNumeric) {
		$this->houseNumberNumeric = $this->validateHouseNumberNumeric($houseNumberNumeric);
	}

	protected function validateHouseNumberNumeric($houseNumberNumeric) {
		if ( ! $houseNumberNumeric instanceof \hl7_org\v3\Adxp.houseNumberNumeric ) {
			$houseNumberNumeric = new \hl7_org\v3\Adxp.houseNumberNumeric ($houseNumberNumeric);
		}
	
		return $houseNumberNumeric;
	}

	public function getDirection() {
		if ($this->direction===NULL) {
			$this->direction = $this->createDirection();
		}
		return $this->direction;
	}
	
	protected function createDirection() {
		return new \hl7_org\v3\Adxp.direction();
	}

	public function setDirection($direction) {
		$this->direction = $this->validateDirection($direction);
	}

	protected function validateDirection($direction) {
		if ( ! $direction instanceof \hl7_org\v3\Adxp.direction ) {
			$direction = new \hl7_org\v3\Adxp.direction ($direction);
		}
	
		return $direction;
	}

	public function getStreetName() {
		if ($this->streetName===NULL) {
			$this->streetName = $this->createStreetName();
		}
		return $this->streetName;
	}
	
	protected function createStreetName() {
		return new \hl7_org\v3\Adxp.streetName();
	}

	public function setStreetName($streetName) {
		$this->streetName = $this->validateStreetName($streetName);
	}

	protected function validateStreetName($streetName) {
		if ( ! $streetName instanceof \hl7_org\v3\Adxp.streetName ) {
			$streetName = new \hl7_org\v3\Adxp.streetName ($streetName);
		}
	
		return $streetName;
	}

	public function getStreetNameBase() {
		if ($this->streetNameBase===NULL) {
			$this->streetNameBase = $this->createStreetNameBase();
		}
		return $this->streetNameBase;
	}
	
	protected function createStreetNameBase() {
		return new \hl7_org\v3\Adxp.streetNameBase();
	}

	public function setStreetNameBase($streetNameBase) {
		$this->streetNameBase = $this->validateStreetNameBase($streetNameBase);
	}

	protected function validateStreetNameBase($streetNameBase) {
		if ( ! $streetNameBase instanceof \hl7_org\v3\Adxp.streetNameBase ) {
			$streetNameBase = new \hl7_org\v3\Adxp.streetNameBase ($streetNameBase);
		}
	
		return $streetNameBase;
	}

	public function getStreetNameType() {
		if ($this->streetNameType===NULL) {
			$this->streetNameType = $this->createStreetNameType();
		}
		return $this->streetNameType;
	}
	
	protected function createStreetNameType() {
		return new \hl7_org\v3\Adxp.streetNameType();
	}

	public function setStreetNameType($streetNameType) {
		$this->streetNameType = $this->validateStreetNameType($streetNameType);
	}

	protected function validateStreetNameType($streetNameType) {
		if ( ! $streetNameType instanceof \hl7_org\v3\Adxp.streetNameType ) {
			$streetNameType = new \hl7_org\v3\Adxp.streetNameType ($streetNameType);
		}
	
		return $streetNameType;
	}

	public function getAdditionalLocator() {
		if ($this->additionalLocator===NULL) {
			$this->additionalLocator = $this->createAdditionalLocator();
		}
		return $this->additionalLocator;
	}
	
	protected function createAdditionalLocator() {
		return new \hl7_org\v3\Adxp.additionalLocator();
	}

	public function setAdditionalLocator($additionalLocator) {
		$this->additionalLocator = $this->validateAdditionalLocator($additionalLocator);
	}

	protected function validateAdditionalLocator($additionalLocator) {
		if ( ! $additionalLocator instanceof \hl7_org\v3\Adxp.additionalLocator ) {
			$additionalLocator = new \hl7_org\v3\Adxp.additionalLocator ($additionalLocator);
		}
	
		return $additionalLocator;
	}

	public function getUnitID() {
		if ($this->unitID===NULL) {
			$this->unitID = $this->createUnitID();
		}
		return $this->unitID;
	}
	
	protected function createUnitID() {
		return new \hl7_org\v3\Adxp.unitID();
	}

	public function setUnitID($unitID) {
		$this->unitID = $this->validateUnitID($unitID);
	}

	protected function validateUnitID($unitID) {
		if ( ! $unitID instanceof \hl7_org\v3\Adxp.unitID ) {
			$unitID = new \hl7_org\v3\Adxp.unitID ($unitID);
		}
	
		return $unitID;
	}

	public function getUnitType() {
		if ($this->unitType===NULL) {
			$this->unitType = $this->createUnitType();
		}
		return $this->unitType;
	}
	
	protected function createUnitType() {
		return new \hl7_org\v3\Adxp.unitType();
	}

	public function setUnitType($unitType) {
		$this->unitType = $this->validateUnitType($unitType);
	}

	protected function validateUnitType($unitType) {
		if ( ! $unitType instanceof \hl7_org\v3\Adxp.unitType ) {
			$unitType = new \hl7_org\v3\Adxp.unitType ($unitType);
		}
	
		return $unitType;
	}

	public function getCareOf() {
		if ($this->careOf===NULL) {
			$this->careOf = $this->createCareOf();
		}
		return $this->careOf;
	}
	
	protected function createCareOf() {
		return new \hl7_org\v3\Adxp.careOf();
	}

	public function setCareOf($careOf) {
		$this->careOf = $this->validateCareOf($careOf);
	}

	protected function validateCareOf($careOf) {
		if ( ! $careOf instanceof \hl7_org\v3\Adxp.careOf ) {
			$careOf = new \hl7_org\v3\Adxp.careOf ($careOf);
		}
	
		return $careOf;
	}

	public function getCensusTract() {
		if ($this->censusTract===NULL) {
			$this->censusTract = $this->createCensusTract();
		}
		return $this->censusTract;
	}
	
	protected function createCensusTract() {
		return new \hl7_org\v3\Adxp.censusTract();
	}

	public function setCensusTract($censusTract) {
		$this->censusTract = $this->validateCensusTract($censusTract);
	}

	protected function validateCensusTract($censusTract) {
		if ( ! $censusTract instanceof \hl7_org\v3\Adxp.censusTract ) {
			$censusTract = new \hl7_org\v3\Adxp.censusTract ($censusTract);
		}
	
		return $censusTract;
	}

	public function getDeliveryAddressLine() {
		if ($this->deliveryAddressLine===NULL) {
			$this->deliveryAddressLine = $this->createDeliveryAddressLine();
		}
		return $this->deliveryAddressLine;
	}
	
	protected function createDeliveryAddressLine() {
		return new \hl7_org\v3\Adxp.deliveryAddressLine();
	}

	public function setDeliveryAddressLine($deliveryAddressLine) {
		$this->deliveryAddressLine = $this->validateDeliveryAddressLine($deliveryAddressLine);
	}

	protected function validateDeliveryAddressLine($deliveryAddressLine) {
		if ( ! $deliveryAddressLine instanceof \hl7_org\v3\Adxp.deliveryAddressLine ) {
			$deliveryAddressLine = new \hl7_org\v3\Adxp.deliveryAddressLine ($deliveryAddressLine);
		}
	
		return $deliveryAddressLine;
	}

	public function getDeliveryInstallationType() {
		if ($this->deliveryInstallationType===NULL) {
			$this->deliveryInstallationType = $this->createDeliveryInstallationType();
		}
		return $this->deliveryInstallationType;
	}
	
	protected function createDeliveryInstallationType() {
		return new \hl7_org\v3\Adxp.deliveryInstallationType();
	}

	public function setDeliveryInstallationType($deliveryInstallationType) {
		$this->deliveryInstallationType = $this->validateDeliveryInstallationType($deliveryInstallationType);
	}

	protected function validateDeliveryInstallationType($deliveryInstallationType) {
		if ( ! $deliveryInstallationType instanceof \hl7_org\v3\Adxp.deliveryInstallationType ) {
			$deliveryInstallationType = new \hl7_org\v3\Adxp.deliveryInstallationType ($deliveryInstallationType);
		}
	
		return $deliveryInstallationType;
	}

	public function getDeliveryInstallationArea() {
		if ($this->deliveryInstallationArea===NULL) {
			$this->deliveryInstallationArea = $this->createDeliveryInstallationArea();
		}
		return $this->deliveryInstallationArea;
	}
	
	protected function createDeliveryInstallationArea() {
		return new \hl7_org\v3\Adxp.deliveryInstallationArea();
	}

	public function setDeliveryInstallationArea($deliveryInstallationArea) {
		$this->deliveryInstallationArea = $this->validateDeliveryInstallationArea($deliveryInstallationArea);
	}

	protected function validateDeliveryInstallationArea($deliveryInstallationArea) {
		if ( ! $deliveryInstallationArea instanceof \hl7_org\v3\Adxp.deliveryInstallationArea ) {
			$deliveryInstallationArea = new \hl7_org\v3\Adxp.deliveryInstallationArea ($deliveryInstallationArea);
		}
	
		return $deliveryInstallationArea;
	}

	public function getDeliveryInstallationQualifier() {
		if ($this->deliveryInstallationQualifier===NULL) {
			$this->deliveryInstallationQualifier = $this->createDeliveryInstallationQualifier();
		}
		return $this->deliveryInstallationQualifier;
	}
	
	protected function createDeliveryInstallationQualifier() {
		return new \hl7_org\v3\Adxp.deliveryInstallationQualifier();
	}

	public function setDeliveryInstallationQualifier($deliveryInstallationQualifier) {
		$this->deliveryInstallationQualifier = $this->validateDeliveryInstallationQualifier($deliveryInstallationQualifier);
	}

	protected function validateDeliveryInstallationQualifier($deliveryInstallationQualifier) {
		if ( ! $deliveryInstallationQualifier instanceof \hl7_org\v3\Adxp.deliveryInstallationQualifier ) {
			$deliveryInstallationQualifier = new \hl7_org\v3\Adxp.deliveryInstallationQualifier ($deliveryInstallationQualifier);
		}
	
		return $deliveryInstallationQualifier;
	}

	public function getDeliveryMode() {
		if ($this->deliveryMode===NULL) {
			$this->deliveryMode = $this->createDeliveryMode();
		}
		return $this->deliveryMode;
	}
	
	protected function createDeliveryMode() {
		return new \hl7_org\v3\Adxp.deliveryMode();
	}

	public function setDeliveryMode($deliveryMode) {
		$this->deliveryMode = $this->validateDeliveryMode($deliveryMode);
	}

	protected function validateDeliveryMode($deliveryMode) {
		if ( ! $deliveryMode instanceof \hl7_org\v3\Adxp.deliveryMode ) {
			$deliveryMode = new \hl7_org\v3\Adxp.deliveryMode ($deliveryMode);
		}
	
		return $deliveryMode;
	}

	public function getDeliveryModeIdentifier() {
		if ($this->deliveryModeIdentifier===NULL) {
			$this->deliveryModeIdentifier = $this->createDeliveryModeIdentifier();
		}
		return $this->deliveryModeIdentifier;
	}
	
	protected function createDeliveryModeIdentifier() {
		return new \hl7_org\v3\Adxp.deliveryModeIdentifier();
	}

	public function setDeliveryModeIdentifier($deliveryModeIdentifier) {
		$this->deliveryModeIdentifier = $this->validateDeliveryModeIdentifier($deliveryModeIdentifier);
	}

	protected function validateDeliveryModeIdentifier($deliveryModeIdentifier) {
		if ( ! $deliveryModeIdentifier instanceof \hl7_org\v3\Adxp.deliveryModeIdentifier ) {
			$deliveryModeIdentifier = new \hl7_org\v3\Adxp.deliveryModeIdentifier ($deliveryModeIdentifier);
		}
	
		return $deliveryModeIdentifier;
	}

	public function getBuildingNumberSuffix() {
		if ($this->buildingNumberSuffix===NULL) {
			$this->buildingNumberSuffix = $this->createBuildingNumberSuffix();
		}
		return $this->buildingNumberSuffix;
	}
	
	protected function createBuildingNumberSuffix() {
		return new \hl7_org\v3\Adxp.buildingNumberSuffix();
	}

	public function setBuildingNumberSuffix($buildingNumberSuffix) {
		$this->buildingNumberSuffix = $this->validateBuildingNumberSuffix($buildingNumberSuffix);
	}

	protected function validateBuildingNumberSuffix($buildingNumberSuffix) {
		if ( ! $buildingNumberSuffix instanceof \hl7_org\v3\Adxp.buildingNumberSuffix ) {
			$buildingNumberSuffix = new \hl7_org\v3\Adxp.buildingNumberSuffix ($buildingNumberSuffix);
		}
	
		return $buildingNumberSuffix;
	}

	public function getPostBox() {
		if ($this->postBox===NULL) {
			$this->postBox = $this->createPostBox();
		}
		return $this->postBox;
	}
	
	protected function createPostBox() {
		return new \hl7_org\v3\Adxp.postBox();
	}

	public function setPostBox($postBox) {
		$this->postBox = $this->validatePostBox($postBox);
	}

	protected function validatePostBox($postBox) {
		if ( ! $postBox instanceof \hl7_org\v3\Adxp.postBox ) {
			$postBox = new \hl7_org\v3\Adxp.postBox ($postBox);
		}
	
		return $postBox;
	}

	public function getPrecinct() {
		if ($this->precinct===NULL) {
			$this->precinct = $this->createPrecinct();
		}
		return $this->precinct;
	}
	
	protected function createPrecinct() {
		return new \hl7_org\v3\Adxp.precinct();
	}

	public function setPrecinct($precinct) {
		$this->precinct = $this->validatePrecinct($precinct);
	}

	protected function validatePrecinct($precinct) {
		if ( ! $precinct instanceof \hl7_org\v3\Adxp.precinct ) {
			$precinct = new \hl7_org\v3\Adxp.precinct ($precinct);
		}
	
		return $precinct;
	}

	public function getUseablePeriod() {
		if ($this->useablePeriod===NULL) {
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
		if ( ! is_array ($useablePeriod) && ! is_null($useablePeriod) ) {
			$useablePeriod = array($useablePeriod);
		}
		$count = count($useablePeriod);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'useablePeriod', 0));
		}
		foreach ($useablePeriod as $entry) {
			if (!($entry instanceof SXCMTS)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'useablePeriod', 'SXCM_TS'));
			}
		}
	
		return $useablePeriod;
	}

	public function addUseablePeriod($useablePeriod) {
		$this->useablePeriod[] = $useablePeriod;
	}

	public function getUse() {
		if ($this->use===NULL) {
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

	public function getIsNotOrdered() {
		if ($this->isNotOrdered===NULL) {
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
