<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="ED")
 */
class ED extends \org\w3\www\_2001\XMLSchema\BIN {
	/**
	 * Data that is primarily intended for human interpretationor for further machine processing is outside the scope ofHL7. This includes unformatted or formatted written language,multimedia data, or structured information as defined by adifferent standard (e.g., XML-signatures.) Instead of thedata itself, an ED may containonly a reference (see TEL.) Notethat the ST data type is aspecialization ofwhen the is text/plain.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\TEL", name="reference")
	 */
	protected $reference;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\Thumbnail", name="thumbnail")
	 */
	protected $thumbnail;

	/**
	 * @XmlAttribute	(type="string", name="mediaType")
	 */
	protected $mediaType;

	/**
	 * @XmlAttribute	(type="string", name="language")
	 */
	protected $language;

	/**
	 * @XmlAttribute	(type="string", name="compression")
	 */
	protected $compression;

	/**
	 * @XmlAttribute	(type="string", name="integrityCheck")
	 */
	protected $integrityCheck;

	/**
	 * @XmlAttribute	(type="string", name="integrityCheckAlgorithm")
	 */
	protected $integrityCheckAlgorithm;

	public function __construct($reference = NULL, $thumbnail = NULL, $mediaType = NULL, $language = NULL, $compression = NULL, $integrityCheck = NULL, $integrityCheckAlgorithm = NULL) {
		$this->reference = ($reference===NULL) ? NULL : $this->validateReference($reference);
		$this->thumbnail = ($thumbnail===NULL) ? NULL : $this->validateThumbnail($thumbnail);
		$this->mediaType = ($mediaType===NULL) ? NULL : $this->validateMediaType($mediaType);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->compression = ($compression===NULL) ? NULL : $this->validateCompression($compression);
		$this->integrityCheck = ($integrityCheck===NULL) ? NULL : $this->validateIntegrityCheck($integrityCheck);
		$this->integrityCheckAlgorithm = ($integrityCheckAlgorithm===NULL) ? NULL : $this->validateIntegrityCheckAlgorithm($integrityCheckAlgorithm);
	}

	public function getReference($autoCreate = TRUE) {
		if ($this->reference===NULL && $autoCreate && ! isset($this->_overrides['reference']) ) {
			$this->reference = $this->createReference();
		}
		return $this->reference;
	}
	
	protected function createReference() {
		return NULL;
	}

	public function setReference($reference) {
		$this->reference = $this->validateReference($reference);
	}

	protected function validateReference($reference) {
	
		return $reference;
	}

	public function getThumbnail($autoCreate = TRUE) {
		if ($this->thumbnail===NULL && $autoCreate && ! isset($this->_overrides['thumbnail']) ) {
			$this->thumbnail = $this->createThumbnail();
		}
		return $this->thumbnail;
	}
	
	protected function createThumbnail() {
		return NULL;
	}

	public function setThumbnail($thumbnail) {
		$this->thumbnail = $this->validateThumbnail($thumbnail);
	}

	protected function validateThumbnail($thumbnail) {
	
		return $thumbnail;
	}

	public function getMediaType($autoCreate = TRUE) {
		if ($this->mediaType===NULL && $autoCreate && ! isset($this->_overrides['mediaType']) ) {
			$this->mediaType = $this->createMediaType();
		}
		return $this->mediaType;
	}
	
	protected function createMediaType() {
		return NULL;
	}

	public function setMediaType($mediaType) {
		$this->mediaType = $this->validateMediaType($mediaType);
	}

	protected function validateMediaType($mediaType) {
	
		return $mediaType;
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return NULL;
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
	
		return $language;
	}

	public function getCompression($autoCreate = TRUE) {
		if ($this->compression===NULL && $autoCreate && ! isset($this->_overrides['compression']) ) {
			$this->compression = $this->createCompression();
		}
		return $this->compression;
	}
	
	protected function createCompression() {
		return NULL;
	}

	public function setCompression($compression) {
		$this->compression = $this->validateCompression($compression);
	}

	protected function validateCompression($compression) {
	
		return $compression;
	}

	public function getIntegrityCheck($autoCreate = TRUE) {
		if ($this->integrityCheck===NULL && $autoCreate && ! isset($this->_overrides['integrityCheck']) ) {
			$this->integrityCheck = $this->createIntegrityCheck();
		}
		return $this->integrityCheck;
	}
	
	protected function createIntegrityCheck() {
		return NULL;
	}

	public function setIntegrityCheck($integrityCheck) {
		$this->integrityCheck = $this->validateIntegrityCheck($integrityCheck);
	}

	protected function validateIntegrityCheck($integrityCheck) {
	
		return $integrityCheck;
	}

	public function getIntegrityCheckAlgorithm($autoCreate = TRUE) {
		if ($this->integrityCheckAlgorithm===NULL && $autoCreate && ! isset($this->_overrides['integrityCheckAlgorithm']) ) {
			$this->integrityCheckAlgorithm = $this->createIntegrityCheckAlgorithm();
		}
		return $this->integrityCheckAlgorithm;
	}
	
	protected function createIntegrityCheckAlgorithm() {
		return NULL;
	}

	public function setIntegrityCheckAlgorithm($integrityCheckAlgorithm) {
		$this->integrityCheckAlgorithm = $this->validateIntegrityCheckAlgorithm($integrityCheckAlgorithm);
	}

	protected function validateIntegrityCheckAlgorithm($integrityCheckAlgorithm) {
	
		return $integrityCheckAlgorithm;
	}
} // end class ED
