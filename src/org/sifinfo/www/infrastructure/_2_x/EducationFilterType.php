<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="EducationFilterType")
 */
class EducationFilterType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MediaTypes", name="MediaTypes")
	 */
	protected $mediaTypes;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GradeLevelsType", name="GradeLevels")
	 */
	protected $gradeLevels;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SubjectAreas", name="SubjectAreas")
	 */
	protected $subjectAreas;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\InterestLevels", name="InterestLevels")
	 */
	protected $interestLevels;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LearningStandardItems", name="LearningStandardItems")
	 */
	protected $learningStandardItems;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevels", name="BloomsTaxonomyLevels")
	 */
	protected $bloomsTaxonomyLevels;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MultipleIntelligences", name="MultipleIntelligences")
	 */
	protected $multipleIntelligences;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\InstructionalStrategies", name="InstructionalStrategies")
	 */
	protected $instructionalStrategies;

	/**
	 * @XmlText	(type="string", name="Title")
	 */
	protected $title;

	/**
	 * @XmlText	(type="string", name="Summary")
	 */
	protected $summary;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LearningObjectives", name="LearningObjectives")
	 */
	protected $learningObjectives;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ResourceTypes", name="ResourceTypes")
	 */
	protected $resourceTypes;

	public function __construct($mediaTypes = NULL, $gradeLevels = NULL, $subjectAreas = NULL, $interestLevels = NULL, $learningStandardItems = NULL, $bloomsTaxonomyLevels = NULL, $multipleIntelligences = NULL, $instructionalStrategies = NULL, $title = NULL, $summary = NULL, $learningObjectives = NULL, $resourceTypes = NULL) {
		$this->mediaTypes = ($mediaTypes===NULL) ? NULL : $this->validateMediaTypes($mediaTypes);
		$this->gradeLevels = ($gradeLevels===NULL) ? NULL : $this->validateGradeLevels($gradeLevels);
		$this->subjectAreas = ($subjectAreas===NULL) ? NULL : $this->validateSubjectAreas($subjectAreas);
		$this->interestLevels = ($interestLevels===NULL) ? NULL : $this->validateInterestLevels($interestLevels);
		$this->learningStandardItems = ($learningStandardItems===NULL) ? NULL : $this->validateLearningStandardItems($learningStandardItems);
		$this->bloomsTaxonomyLevels = ($bloomsTaxonomyLevels===NULL) ? NULL : $this->validateBloomsTaxonomyLevels($bloomsTaxonomyLevels);
		$this->multipleIntelligences = ($multipleIntelligences===NULL) ? NULL : $this->validateMultipleIntelligences($multipleIntelligences);
		$this->instructionalStrategies = ($instructionalStrategies===NULL) ? NULL : $this->validateInstructionalStrategies($instructionalStrategies);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->summary = ($summary===NULL) ? NULL : $this->validateSummary($summary);
		$this->learningObjectives = ($learningObjectives===NULL) ? NULL : $this->validateLearningObjectives($learningObjectives);
		$this->resourceTypes = ($resourceTypes===NULL) ? NULL : $this->validateResourceTypes($resourceTypes);
	}

	public function getMediaTypes() {
		if ($this->mediaTypes===NULL) {
			$this->mediaTypes = $this->createMediaTypes();
		}
		return $this->mediaTypes;
	}
	
	protected function createMediaTypes() {
		return new \org\sifinfo\www\infrastructure\_2_x\MediaTypes();
	}

	public function setMediaTypes($mediaTypes) {
		$this->mediaTypes = $this->validateMediaTypes($mediaTypes);
	}

	protected function validateMediaTypes($mediaTypes) {
		if ( ! $mediaTypes instanceof \org\sifinfo\www\infrastructure\_2_x\MediaTypes  && ! is_null($mediaTypes) ) {
			$mediaTypes = new \org\sifinfo\www\infrastructure\_2_x\MediaTypes ($mediaTypes);
		}
	
		return $mediaTypes;
	}

	public function getGradeLevels() {
		if ($this->gradeLevels===NULL) {
			$this->gradeLevels = $this->createGradeLevels();
		}
		return $this->gradeLevels;
	}
	
	protected function createGradeLevels() {
		return new \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType();
	}

	public function setGradeLevels($gradeLevels) {
		$this->gradeLevels = $this->validateGradeLevels($gradeLevels);
	}

	protected function validateGradeLevels($gradeLevels) {
		if ( ! $gradeLevels instanceof \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType  && ! is_null($gradeLevels) ) {
			$gradeLevels = new \org\sifinfo\www\infrastructure\_2_x\GradeLevelsType ($gradeLevels);
		}
	
		return $gradeLevels;
	}

	public function getSubjectAreas() {
		if ($this->subjectAreas===NULL) {
			$this->subjectAreas = $this->createSubjectAreas();
		}
		return $this->subjectAreas;
	}
	
	protected function createSubjectAreas() {
		return new \org\sifinfo\www\infrastructure\_2_x\SubjectAreas();
	}

	public function setSubjectAreas($subjectAreas) {
		$this->subjectAreas = $this->validateSubjectAreas($subjectAreas);
	}

	protected function validateSubjectAreas($subjectAreas) {
		if ( ! $subjectAreas instanceof \org\sifinfo\www\infrastructure\_2_x\SubjectAreas  && ! is_null($subjectAreas) ) {
			$subjectAreas = new \org\sifinfo\www\infrastructure\_2_x\SubjectAreas ($subjectAreas);
		}
	
		return $subjectAreas;
	}

	public function getInterestLevels() {
		if ($this->interestLevels===NULL) {
			$this->interestLevels = $this->createInterestLevels();
		}
		return $this->interestLevels;
	}
	
	protected function createInterestLevels() {
		return new \org\sifinfo\www\infrastructure\_2_x\InterestLevels();
	}

	public function setInterestLevels($interestLevels) {
		$this->interestLevels = $this->validateInterestLevels($interestLevels);
	}

	protected function validateInterestLevels($interestLevels) {
		if ( ! $interestLevels instanceof \org\sifinfo\www\infrastructure\_2_x\InterestLevels  && ! is_null($interestLevels) ) {
			$interestLevels = new \org\sifinfo\www\infrastructure\_2_x\InterestLevels ($interestLevels);
		}
	
		return $interestLevels;
	}

	public function getLearningStandardItems() {
		if ($this->learningStandardItems===NULL) {
			$this->learningStandardItems = $this->createLearningStandardItems();
		}
		return $this->learningStandardItems;
	}
	
	protected function createLearningStandardItems() {
		return new \org\sifinfo\www\infrastructure\_2_x\LearningStandardItems();
	}

	public function setLearningStandardItems($learningStandardItems) {
		$this->learningStandardItems = $this->validateLearningStandardItems($learningStandardItems);
	}

	protected function validateLearningStandardItems($learningStandardItems) {
		if ( ! $learningStandardItems instanceof \org\sifinfo\www\infrastructure\_2_x\LearningStandardItems  && ! is_null($learningStandardItems) ) {
			$learningStandardItems = new \org\sifinfo\www\infrastructure\_2_x\LearningStandardItems ($learningStandardItems);
		}
	
		return $learningStandardItems;
	}

	public function getBloomsTaxonomyLevels() {
		if ($this->bloomsTaxonomyLevels===NULL) {
			$this->bloomsTaxonomyLevels = $this->createBloomsTaxonomyLevels();
		}
		return $this->bloomsTaxonomyLevels;
	}
	
	protected function createBloomsTaxonomyLevels() {
		return new \org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevels();
	}

	public function setBloomsTaxonomyLevels($bloomsTaxonomyLevels) {
		$this->bloomsTaxonomyLevels = $this->validateBloomsTaxonomyLevels($bloomsTaxonomyLevels);
	}

	protected function validateBloomsTaxonomyLevels($bloomsTaxonomyLevels) {
		if ( ! $bloomsTaxonomyLevels instanceof \org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevels  && ! is_null($bloomsTaxonomyLevels) ) {
			$bloomsTaxonomyLevels = new \org\sifinfo\www\infrastructure\_2_x\BloomsTaxonomyLevels ($bloomsTaxonomyLevels);
		}
	
		return $bloomsTaxonomyLevels;
	}

	public function getMultipleIntelligences() {
		if ($this->multipleIntelligences===NULL) {
			$this->multipleIntelligences = $this->createMultipleIntelligences();
		}
		return $this->multipleIntelligences;
	}
	
	protected function createMultipleIntelligences() {
		return new \org\sifinfo\www\infrastructure\_2_x\MultipleIntelligences();
	}

	public function setMultipleIntelligences($multipleIntelligences) {
		$this->multipleIntelligences = $this->validateMultipleIntelligences($multipleIntelligences);
	}

	protected function validateMultipleIntelligences($multipleIntelligences) {
		if ( ! $multipleIntelligences instanceof \org\sifinfo\www\infrastructure\_2_x\MultipleIntelligences  && ! is_null($multipleIntelligences) ) {
			$multipleIntelligences = new \org\sifinfo\www\infrastructure\_2_x\MultipleIntelligences ($multipleIntelligences);
		}
	
		return $multipleIntelligences;
	}

	public function getInstructionalStrategies() {
		if ($this->instructionalStrategies===NULL) {
			$this->instructionalStrategies = $this->createInstructionalStrategies();
		}
		return $this->instructionalStrategies;
	}
	
	protected function createInstructionalStrategies() {
		return new \org\sifinfo\www\infrastructure\_2_x\InstructionalStrategies();
	}

	public function setInstructionalStrategies($instructionalStrategies) {
		$this->instructionalStrategies = $this->validateInstructionalStrategies($instructionalStrategies);
	}

	protected function validateInstructionalStrategies($instructionalStrategies) {
		if ( ! $instructionalStrategies instanceof \org\sifinfo\www\infrastructure\_2_x\InstructionalStrategies  && ! is_null($instructionalStrategies) ) {
			$instructionalStrategies = new \org\sifinfo\www\infrastructure\_2_x\InstructionalStrategies ($instructionalStrategies);
		}
	
		return $instructionalStrategies;
	}

	public function getTitle() {
		if ($this->title===NULL) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return NULL;
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if ( ! is_string($title) && ! is_null($title) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'title', 'string'));
		}
	
		return $title;
	}

	public function getSummary() {
		if ($this->summary===NULL) {
			$this->summary = $this->createSummary();
		}
		return $this->summary;
	}
	
	protected function createSummary() {
		return '';
	}

	public function setSummary($summary) {
		$this->summary = $this->validateSummary($summary);
	}

	protected function validateSummary($summary) {
		if ( ! is_string($summary) && ! is_null($summary) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'summary', 'string'));
		}
	
		return $summary;
	}

	public function getLearningObjectives() {
		if ($this->learningObjectives===NULL) {
			$this->learningObjectives = $this->createLearningObjectives();
		}
		return $this->learningObjectives;
	}
	
	protected function createLearningObjectives() {
		return new \org\sifinfo\www\infrastructure\_2_x\LearningObjectives();
	}

	public function setLearningObjectives($learningObjectives) {
		$this->learningObjectives = $this->validateLearningObjectives($learningObjectives);
	}

	protected function validateLearningObjectives($learningObjectives) {
		if ( ! $learningObjectives instanceof \org\sifinfo\www\infrastructure\_2_x\LearningObjectives  && ! is_null($learningObjectives) ) {
			$learningObjectives = new \org\sifinfo\www\infrastructure\_2_x\LearningObjectives ($learningObjectives);
		}
	
		return $learningObjectives;
	}

	public function getResourceTypes() {
		if ($this->resourceTypes===NULL) {
			$this->resourceTypes = $this->createResourceTypes();
		}
		return $this->resourceTypes;
	}
	
	protected function createResourceTypes() {
		return new \org\sifinfo\www\infrastructure\_2_x\ResourceTypes();
	}

	public function setResourceTypes($resourceTypes) {
		$this->resourceTypes = $this->validateResourceTypes($resourceTypes);
	}

	protected function validateResourceTypes($resourceTypes) {
		if ( ! $resourceTypes instanceof \org\sifinfo\www\infrastructure\_2_x\ResourceTypes  && ! is_null($resourceTypes) ) {
			$resourceTypes = new \org\sifinfo\www\infrastructure\_2_x\ResourceTypes ($resourceTypes);
		}
	
		return $resourceTypes;
	}
} // end class EducationFilterType
