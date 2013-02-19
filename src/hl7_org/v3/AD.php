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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.delimiter", name="delimiter")
	 */
	protected $delimiter;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.country", name="country")
	 */
	protected $country;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.state", name="state")
	 */
	protected $state;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.county", name="county")
	 */
	protected $county;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.city", name="city")
	 */
	protected $city;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.postalCode", name="postalCode")
	 */
	protected $postalCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetAddressLine", name="streetAddressLine")
	 */
	protected $streetAddressLine;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.houseNumber", name="houseNumber")
	 */
	protected $houseNumber;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.houseNumberNumeric", name="houseNumberNumeric")
	 */
	protected $houseNumberNumeric;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.direction", name="direction")
	 */
	protected $direction;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetName", name="streetName")
	 */
	protected $streetName;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetNameBase", name="streetNameBase")
	 */
	protected $streetNameBase;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.streetNameType", name="streetNameType")
	 */
	protected $streetNameType;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.additionalLocator", name="additionalLocator")
	 */
	protected $additionalLocator;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.unitID", name="unitID")
	 */
	protected $unitID;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.unitType", name="unitType")
	 */
	protected $unitType;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.careOf", name="careOf")
	 */
	protected $careOf;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.censusTract", name="censusTract")
	 */
	protected $censusTract;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryAddressLine", name="deliveryAddressLine")
	 */
	protected $deliveryAddressLine;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryInstallationType", name="deliveryInstallationType")
	 */
	protected $deliveryInstallationType;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryInstallationArea", name="deliveryInstallationArea")
	 */
	protected $deliveryInstallationArea;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryInstallationQualifier", name="deliveryInstallationQualifier")
	 */
	protected $deliveryInstallationQualifier;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryMode", name="deliveryMode")
	 */
	protected $deliveryMode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.deliveryModeIdentifier", name="deliveryModeIdentifier")
	 */
	protected $deliveryModeIdentifier;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.buildingNumberSuffix", name="buildingNumberSuffix")
	 */
	protected $buildingNumberSuffix;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.postBox", name="postBox")
	 */
	protected $postBox;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Adxp.precinct", name="precinct")
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

	public function getDelimiter() {
		if ($this->delimiter===NULL) {
			$this->delimiter = $this->createDelimiter();
		}
		return $this->delimiter;
	}
	
	protected function createDelimiter() {
		return NULL;
	}

	public function setDelimiter($delimiter) {
		$this->delimiter = $this->validateDelimiter($delimiter);
	}

	protected function validateDelimiter($delimiter) {
	
		return $delimiter;
	}

	public function getCountry() {
		if ($this->country===NULL) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return NULL;
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
	
		return $country;
	}

	public function getState() {
		if ($this->state===NULL) {
			$this->state = $this->createState();
		}
		return $this->state;
	}
	
	protected function createState() {
		return NULL;
	}

	public function setState($state) {
		$this->state = $this->validateState($state);
	}

	protected function validateState($state) {
	
		return $state;
	}

	public function getCounty() {
		if ($this->county===NULL) {
			$this->county = $this->createCounty();
		}
		return $this->county;
	}
	
	protected function createCounty() {
		return NULL;
	}

	public function setCounty($county) {
		$this->county = $this->validateCounty($county);
	}

	protected function validateCounty($county) {
	
		return $county;
	}

	public function getCity() {
		if ($this->city===NULL) {
			$this->city = $this->createCity();
		}
		return $this->city;
	}
	
	protected function createCity() {
		return NULL;
	}

	public function setCity($city) {
		$this->city = $this->validateCity($city);
	}

	protected function validateCity($city) {
	
		return $city;
	}

	public function getPostalCode() {
		if ($this->postalCode===NULL) {
			$this->postalCode = $this->createPostalCode();
		}
		return $this->postalCode;
	}
	
	protected function createPostalCode() {
		return NULL;
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $this->validatePostalCode($postalCode);
	}

	protected function validatePostalCode($postalCode) {
	
		return $postalCode;
	}

	public function getStreetAddressLine() {
		if ($this->streetAddressLine===NULL) {
			$this->streetAddressLine = $this->createStreetAddressLine();
		}
		return $this->streetAddressLine;
	}
	
	protected function createStreetAddressLine() {
		return NULL;
	}

	public function setStreetAddressLine($streetAddressLine) {
		$this->streetAddressLine = $this->validateStreetAddressLine($streetAddressLine);
	}

	protected function validateStreetAddressLine($streetAddressLine) {
	
		return $streetAddressLine;
	}

	public function getHouseNumber() {
		if ($this->houseNumber===NULL) {
			$this->houseNumber = $this->createHouseNumber();
		}
		return $this->houseNumber;
	}
	
	protected function createHouseNumber() {
		return NULL;
	}

	public function setHouseNumber($houseNumber) {
		$this->houseNumber = $this->validateHouseNumber($houseNumber);
	}

	protected function validateHouseNumber($houseNumber) {
	
		return $houseNumber;
	}

	public function getHouseNumberNumeric() {
		if ($this->houseNumberNumeric===NULL) {
			$this->houseNumberNumeric = $this->createHouseNumberNumeric();
		}
		return $this->houseNumberNumeric;
	}
	
	protected function createHouseNumberNumeric() {
		return NULL;
	}

	public function setHouseNumberNumeric($houseNumberNumeric) {
		$this->houseNumberNumeric = $this->validateHouseNumberNumeric($houseNumberNumeric);
	}

	protected function validateHouseNumberNumeric($houseNumberNumeric) {
	
		return $houseNumberNumeric;
	}

	public function getDirection() {
		if ($this->direction===NULL) {
			$this->direction = $this->createDirection();
		}
		return $this->direction;
	}
	
	protected function createDirection() {
		return NULL;
	}

	public function setDirection($direction) {
		$this->direction = $this->validateDirection($direction);
	}

	protected function validateDirection($direction) {
	
		return $direction;
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
	
		return $streetName;
	}

	public function getStreetNameBase() {
		if ($this->streetNameBase===NULL) {
			$this->streetNameBase = $this->createStreetNameBase();
		}
		return $this->streetNameBase;
	}
	
	protected function createStreetNameBase() {
		return NULL;
	}

	public function setStreetNameBase($streetNameBase) {
		$this->streetNameBase = $this->validateStreetNameBase($streetNameBase);
	}

	protected function validateStreetNameBase($streetNameBase) {
	
		return $streetNameBase;
	}

	public function getStreetNameType() {
		if ($this->streetNameType===NULL) {
			$this->streetNameType = $this->createStreetNameType();
		}
		return $this->streetNameType;
	}
	
	protected function createStreetNameType() {
		return NULL;
	}

	public function setStreetNameType($streetNameType) {
		$this->streetNameType = $this->validateStreetNameType($streetNameType);
	}

	protected function validateStreetNameType($streetNameType) {
	
		return $streetNameType;
	}

	public function getAdditionalLocator() {
		if ($this->additionalLocator===NULL) {
			$this->additionalLocator = $this->createAdditionalLocator();
		}
		return $this->additionalLocator;
	}
	
	protected function createAdditionalLocator() {
		return NULL;
	}

	public function setAdditionalLocator($additionalLocator) {
		$this->additionalLocator = $this->validateAdditionalLocator($additionalLocator);
	}

	protected function validateAdditionalLocator($additionalLocator) {
	
		return $additionalLocator;
	}

	public function getUnitID() {
		if ($this->unitID===NULL) {
			$this->unitID = $this->createUnitID();
		}
		return $this->unitID;
	}
	
	protected function createUnitID() {
		return NULL;
	}

	public function setUnitID($unitID) {
		$this->unitID = $this->validateUnitID($unitID);
	}

	protected function validateUnitID($unitID) {
	
		return $unitID;
	}

	public function getUnitType() {
		if ($this->unitType===NULL) {
			$this->unitType = $this->createUnitType();
		}
		return $this->unitType;
	}
	
	protected function createUnitType() {
		return NULL;
	}

	public function setUnitType($unitType) {
		$this->unitType = $this->validateUnitType($unitType);
	}

	protected function validateUnitType($unitType) {
	
		return $unitType;
	}

	public function getCareOf() {
		if ($this->careOf===NULL) {
			$this->careOf = $this->createCareOf();
		}
		return $this->careOf;
	}
	
	protected function createCareOf() {
		return NULL;
	}

	public function setCareOf($careOf) {
		$this->careOf = $this->validateCareOf($careOf);
	}

	protected function validateCareOf($careOf) {
	
		return $careOf;
	}

	public function getCensusTract() {
		if ($this->censusTract===NULL) {
			$this->censusTract = $this->createCensusTract();
		}
		return $this->censusTract;
	}
	
	protected function createCensusTract() {
		return NULL;
	}

	public function setCensusTract($censusTract) {
		$this->censusTract = $this->validateCensusTract($censusTract);
	}

	protected function validateCensusTract($censusTract) {
	
		return $censusTract;
	}

	public function getDeliveryAddressLine() {
		if ($this->deliveryAddressLine===NULL) {
			$this->deliveryAddressLine = $this->createDeliveryAddressLine();
		}
		return $this->deliveryAddressLine;
	}
	
	protected function createDeliveryAddressLine() {
		return NULL;
	}

	public function setDeliveryAddressLine($deliveryAddressLine) {
		$this->deliveryAddressLine = $this->validateDeliveryAddressLine($deliveryAddressLine);
	}

	protected function validateDeliveryAddressLine($deliveryAddressLine) {
	
		return $deliveryAddressLine;
	}

	public function getDeliveryInstallationType() {
		if ($this->deliveryInstallationType===NULL) {
			$this->deliveryInstallationType = $this->createDeliveryInstallationType();
		}
		return $this->deliveryInstallationType;
	}
	
	protected function createDeliveryInstallationType() {
		return NULL;
	}

	public function setDeliveryInstallationType($deliveryInstallationType) {
		$this->deliveryInstallationType = $this->validateDeliveryInstallationType($deliveryInstallationType);
	}

	protected function validateDeliveryInstallationType($deliveryInstallationType) {
	
		return $deliveryInstallationType;
	}

	public function getDeliveryInstallationArea() {
		if ($this->deliveryInstallationArea===NULL) {
			$this->deliveryInstallationArea = $this->createDeliveryInstallationArea();
		}
		return $this->deliveryInstallationArea;
	}
	
	protected function createDeliveryInstallationArea() {
		return NULL;
	}

	public function setDeliveryInstallationArea($deliveryInstallationArea) {
		$this->deliveryInstallationArea = $this->validateDeliveryInstallationArea($deliveryInstallationArea);
	}

	protected function validateDeliveryInstallationArea($deliveryInstallationArea) {
	
		return $deliveryInstallationArea;
	}

	public function getDeliveryInstallationQualifier() {
		if ($this->deliveryInstallationQualifier===NULL) {
			$this->deliveryInstallationQualifier = $this->createDeliveryInstallationQualifier();
		}
		return $this->deliveryInstallationQualifier;
	}
	
	protected function createDeliveryInstallationQualifier() {
		return NULL;
	}

	public function setDeliveryInstallationQualifier($deliveryInstallationQualifier) {
		$this->deliveryInstallationQualifier = $this->validateDeliveryInstallationQualifier($deliveryInstallationQualifier);
	}

	protected function validateDeliveryInstallationQualifier($deliveryInstallationQualifier) {
	
		return $deliveryInstallationQualifier;
	}

	public function getDeliveryMode() {
		if ($this->deliveryMode===NULL) {
			$this->deliveryMode = $this->createDeliveryMode();
		}
		return $this->deliveryMode;
	}
	
	protected function createDeliveryMode() {
		return NULL;
	}

	public function setDeliveryMode($deliveryMode) {
		$this->deliveryMode = $this->validateDeliveryMode($deliveryMode);
	}

	protected function validateDeliveryMode($deliveryMode) {
	
		return $deliveryMode;
	}

	public function getDeliveryModeIdentifier() {
		if ($this->deliveryModeIdentifier===NULL) {
			$this->deliveryModeIdentifier = $this->createDeliveryModeIdentifier();
		}
		return $this->deliveryModeIdentifier;
	}
	
	protected function createDeliveryModeIdentifier() {
		return NULL;
	}

	public function setDeliveryModeIdentifier($deliveryModeIdentifier) {
		$this->deliveryModeIdentifier = $this->validateDeliveryModeIdentifier($deliveryModeIdentifier);
	}

	protected function validateDeliveryModeIdentifier($deliveryModeIdentifier) {
	
		return $deliveryModeIdentifier;
	}

	public function getBuildingNumberSuffix() {
		if ($this->buildingNumberSuffix===NULL) {
			$this->buildingNumberSuffix = $this->createBuildingNumberSuffix();
		}
		return $this->buildingNumberSuffix;
	}
	
	protected function createBuildingNumberSuffix() {
		return NULL;
	}

	public function setBuildingNumberSuffix($buildingNumberSuffix) {
		$this->buildingNumberSuffix = $this->validateBuildingNumberSuffix($buildingNumberSuffix);
	}

	protected function validateBuildingNumberSuffix($buildingNumberSuffix) {
	
		return $buildingNumberSuffix;
	}

	public function getPostBox() {
		if ($this->postBox===NULL) {
			$this->postBox = $this->createPostBox();
		}
		return $this->postBox;
	}
	
	protected function createPostBox() {
		return NULL;
	}

	public function setPostBox($postBox) {
		$this->postBox = $this->validatePostBox($postBox);
	}

	protected function validatePostBox($postBox) {
	
		return $postBox;
	}

	public function getPrecinct() {
		if ($this->precinct===NULL) {
			$this->precinct = $this->createPrecinct();
		}
		return $this->precinct;
	}
	
	protected function createPrecinct() {
		return NULL;
	}

	public function setPrecinct($precinct) {
		$this->precinct = $this->validatePrecinct($precinct);
	}

	protected function validatePrecinct($precinct) {
	
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
