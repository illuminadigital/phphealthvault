<?php
namespace com\microsoft\wc\thing\genetic_snp_result;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.genetic-snp-result", prefix="")
 * })
 * @XmlEntity	(xml="genetic-snp-results")
 */
class GeneticSnpResults extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Stores a collection of results of a SNP genetic test.
	 * The SNP data is stored in the other-data section of the object, and mustbe fetched by specifying HealthItemRecordSections.OtherData.The format of the other-data section is the HealthVault comma-separated format.Within the comma-separated data, each SNP is encoded as follows:[refSNP id],[strand orientation],[result],[assay id],[start position],[end position]Where:refSNP id: identifier from NCBI dbSNP database.strand orientation: "+" encodes top, "-" encodes bottom.result: the result of the test.assay id: Platform-dependent id.start position: Start position on the chromosome.end position: End position on the chromosome.Example: rs1891906,-,GT,SNP_C-315533,940106,940107
	 */

	const ID = '9d006053-116c-43cc-9554-e0cda43558cb';
	const NAME = 'Genetic SNP Result';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="genome-build")
	 */
	protected $genomeBuild;

	/**
	 * @XmlText	(type="string", name="chromosome")
	 */
	protected $chromosome;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="numbering-scheme")
	 */
	protected $numberingScheme;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="ordered-by")
	 */
	protected $orderedBy;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="test-provider")
	 */
	protected $testProvider;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="laboratory-name")
	 */
	protected $laboratoryName;

	/**
	 * @XmlText	(type="string", name="annotation-version")
	 */
	protected $annotationVersion;

	/**
	 * @XmlText	(type="string", name="dbSNP-build ")
	 */
	protected $dbsnpBuild ;

	/**
	 * @XmlText	(type="string", name="platform")
	 */
	protected $platform;

	public function __construct($when = NULL, $genomeBuild = NULL, $chromosome = NULL, $numberingScheme = NULL, $orderedBy = NULL, $testProvider = NULL, $laboratoryName = NULL, $annotationVersion = NULL, $dbsnpBuild  = NULL, $platform = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->genomeBuild = ($genomeBuild===NULL) ? NULL : $this->validateGenomeBuild($genomeBuild);
		$this->chromosome = ($chromosome===NULL) ? NULL : $this->validateChromosome($chromosome);
		$this->numberingScheme = ($numberingScheme===NULL) ? NULL : $this->validateNumberingScheme($numberingScheme);
		$this->orderedBy = ($orderedBy===NULL) ? NULL : $this->validateOrderedBy($orderedBy);
		$this->testProvider = ($testProvider===NULL) ? NULL : $this->validateTestProvider($testProvider);
		$this->laboratoryName = ($laboratoryName===NULL) ? NULL : $this->validateLaboratoryName($laboratoryName);
		$this->annotationVersion = ($annotationVersion===NULL) ? NULL : $this->validateAnnotationVersion($annotationVersion);
		$this->dbsnpBuild  = ($dbsnpBuild ===NULL) ? NULL : $this->validateDbsnpBuild ($dbsnpBuild );
		$this->platform = ($platform===NULL) ? NULL : $this->validatePlatform($platform);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getGenomeBuild($autoCreate = TRUE) {
		if ($this->genomeBuild===NULL && $autoCreate && ! isset($this->_overrides['genomeBuild']) ) {
			$this->genomeBuild = $this->createGenomeBuild();
		}
		return $this->genomeBuild;
	}
	
	protected function createGenomeBuild() {
		return '';
	}

	public function setGenomeBuild($genomeBuild) {
		$this->genomeBuild = $this->validateGenomeBuild($genomeBuild);
	}

	protected function validateGenomeBuild($genomeBuild) {
		if (!is_string($genomeBuild)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'genomeBuild', 'string'));
		}
	
		return $genomeBuild;
	}

	public function getChromosome($autoCreate = TRUE) {
		if ($this->chromosome===NULL && $autoCreate && ! isset($this->_overrides['chromosome']) ) {
			$this->chromosome = $this->createChromosome();
		}
		return $this->chromosome;
	}
	
	protected function createChromosome() {
		return '';
	}

	public function setChromosome($chromosome) {
		$this->chromosome = $this->validateChromosome($chromosome);
	}

	protected function validateChromosome($chromosome) {
		if (!is_string($chromosome)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'chromosome', 'string'));
		}
	
		return $chromosome;
	}

	public function getNumberingScheme($autoCreate = TRUE) {
		if ($this->numberingScheme===NULL && $autoCreate && ! isset($this->_overrides['numberingScheme']) ) {
			$this->numberingScheme = $this->createNumberingScheme();
		}
		return $this->numberingScheme;
	}
	
	protected function createNumberingScheme() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setNumberingScheme($numberingScheme) {
		$this->numberingScheme = $this->validateNumberingScheme($numberingScheme);
	}

	protected function validateNumberingScheme($numberingScheme) {
		if ( ! $numberingScheme instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$numberingScheme = new \com\microsoft\wc\thing\types\NonNegativeInt ($numberingScheme);
		}
	
		return $numberingScheme;
	}

	public function getOrderedBy($autoCreate = TRUE) {
		if ($this->orderedBy===NULL && $autoCreate && ! isset($this->_overrides['orderedBy']) ) {
			$this->orderedBy = $this->createOrderedBy();
		}
		return $this->orderedBy;
	}
	
	protected function createOrderedBy() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setOrderedBy($orderedBy) {
		$this->orderedBy = $this->validateOrderedBy($orderedBy);
	}

	protected function validateOrderedBy($orderedBy) {
		if ( $orderedBy === FALSE ) {
			$this->_overrides['orderedBy'] = TRUE;
			return NULL;
		}

		if ( ! $orderedBy instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($orderedBy) ) {
			$orderedBy = new \com\microsoft\wc\thing\types\Organization ($orderedBy);
		}

		unset ($this->_overrides['orderedBy']);
	
		return $orderedBy;
	}

	public function getTestProvider($autoCreate = TRUE) {
		if ($this->testProvider===NULL && $autoCreate && ! isset($this->_overrides['testProvider']) ) {
			$this->testProvider = $this->createTestProvider();
		}
		return $this->testProvider;
	}
	
	protected function createTestProvider() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setTestProvider($testProvider) {
		$this->testProvider = $this->validateTestProvider($testProvider);
	}

	protected function validateTestProvider($testProvider) {
		if ( $testProvider === FALSE ) {
			$this->_overrides['testProvider'] = TRUE;
			return NULL;
		}

		if ( ! $testProvider instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($testProvider) ) {
			$testProvider = new \com\microsoft\wc\thing\types\Organization ($testProvider);
		}

		unset ($this->_overrides['testProvider']);
	
		return $testProvider;
	}

	public function getLaboratoryName($autoCreate = TRUE) {
		if ($this->laboratoryName===NULL && $autoCreate && ! isset($this->_overrides['laboratoryName']) ) {
			$this->laboratoryName = $this->createLaboratoryName();
		}
		return $this->laboratoryName;
	}
	
	protected function createLaboratoryName() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setLaboratoryName($laboratoryName) {
		$this->laboratoryName = $this->validateLaboratoryName($laboratoryName);
	}

	protected function validateLaboratoryName($laboratoryName) {
		if ( $laboratoryName === FALSE ) {
			$this->_overrides['laboratoryName'] = TRUE;
			return NULL;
		}

		if ( ! $laboratoryName instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($laboratoryName) ) {
			$laboratoryName = new \com\microsoft\wc\thing\types\Organization ($laboratoryName);
		}

		unset ($this->_overrides['laboratoryName']);
	
		return $laboratoryName;
	}

	public function getAnnotationVersion($autoCreate = TRUE) {
		if ($this->annotationVersion===NULL && $autoCreate && ! isset($this->_overrides['annotationVersion']) ) {
			$this->annotationVersion = $this->createAnnotationVersion();
		}
		return $this->annotationVersion;
	}
	
	protected function createAnnotationVersion() {
		return '';
	}

	public function setAnnotationVersion($annotationVersion) {
		$this->annotationVersion = $this->validateAnnotationVersion($annotationVersion);
	}

	protected function validateAnnotationVersion($annotationVersion) {
		if ( ! is_string($annotationVersion) && ! is_null($annotationVersion) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'annotationVersion', 'string'));
		}
	
		return $annotationVersion;
	}

	public function getDbsnpBuild ($autoCreate = TRUE) {
		if ($this->dbsnpBuild ===NULL && $autoCreate && ! isset($this->_overrides['dbsnpBuild ']) ) {
			$this->dbsnpBuild  = $this->createDbsnpBuild ();
		}
		return $this->dbsnpBuild ;
	}
	
	protected function createDbsnpBuild () {
		return '';
	}

	public function setDbsnpBuild ($dbsnpBuild ) {
		$this->dbsnpBuild  = $this->validateDbsnpBuild ($dbsnpBuild );
	}

	protected function validateDbsnpBuild ($dbsnpBuild ) {
		if ( ! is_string($dbsnpBuild ) && ! is_null($dbsnpBuild ) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dbsnpBuild ', 'string'));
		}
	
		return $dbsnpBuild ;
	}

	public function getPlatform($autoCreate = TRUE) {
		if ($this->platform===NULL && $autoCreate && ! isset($this->_overrides['platform']) ) {
			$this->platform = $this->createPlatform();
		}
		return $this->platform;
	}
	
	protected function createPlatform() {
		return '';
	}

	public function setPlatform($platform) {
		$this->platform = $this->validatePlatform($platform);
	}

	protected function validatePlatform($platform) {
		if ( ! is_string($platform) && ! is_null($platform) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'platform', 'string'));
		}
	
		return $platform;
	}
} // end class GeneticSnpResults
