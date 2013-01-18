<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="ED")
 */
class ED extends \BIN\BIN {
	/**
	 * Data that is primarily intended for human interpretation or for further machine processing is outside the scope of HL7. This includes unformatted or formatted written language, multimedia data, or structured information as defined by a different standard (e.g., XML-signatures.) Instead of the data itself, an ED may contain only a reference (see TEL.) Note that the ST data type is a specialization of the ED data type when the ED media type is text/plain.
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\TEL", name="reference")
	 */
	protected $reference;

	/**
	 * @XmlElement	(type="\hl7_org\v3\Thumbnail", name="thumbnail")
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

	public function getReference() {
		if ($this->reference===NULL) {
			$this->reference = $this->createReference();
		}
		return $this->reference;
	}
	
	protected function createReference() {
		return new \hl7_org\v3\TEL();
	}

	public function setReference($reference) {
		$this->reference = $this->validateReference($reference);
	}

	protected function validateReference($reference) {
		if ( ! $reference instanceof \hl7_org\v3\TEL  && ! is_null($reference) ) {
			$reference = new \hl7_org\v3\TEL ($reference);
		}
	
		return $reference;
	}

	public function getThumbnail() {
		if ($this->thumbnail===NULL) {
			$this->thumbnail = $this->createThumbnail();
		}
		return $this->thumbnail;
	}
	
	protected function createThumbnail() {
		return new \hl7_org\v3\Thumbnail();
	}

	public function setThumbnail($thumbnail) {
		$this->thumbnail = $this->validateThumbnail($thumbnail);
	}

	protected function validateThumbnail($thumbnail) {
		if ( ! $thumbnail instanceof \hl7_org\v3\Thumbnail  && ! is_null($thumbnail) ) {
			$thumbnail = new \hl7_org\v3\Thumbnail ($thumbnail);
		}
	
		return $thumbnail;
	}

	public function getMediaType() {
		if ($this->mediaType===NULL) {
			$this->mediaType = $this->createMediaType();
		}
		return $this->mediaType;
	}
	
	protected function createMediaType() {
		return new \hl7_org\v3\Cs();
	}

	public function setMediaType($mediaType) {
		$this->mediaType = $this->validateMediaType($mediaType);
	}

	protected function validateMediaType($mediaType) {
		if ( ! $mediaType instanceof \hl7_org\v3\Cs  && ! is_null($mediaType) ) {
			$mediaType = new \hl7_org\v3\Cs ($mediaType);
		}
	
		return $mediaType;
	}

	public function getLanguage() {
		if ($this->language===NULL) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new \hl7_org\v3\Cs();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( ! $language instanceof \hl7_org\v3\Cs  && ! is_null($language) ) {
			$language = new \hl7_org\v3\Cs ($language);
		}
	
		return $language;
	}

	public function getCompression() {
		if ($this->compression===NULL) {
			$this->compression = $this->createCompression();
		}
		return $this->compression;
	}
	
	protected function createCompression() {
		return new \hl7_org\v3\CompressionAlgorithm();
	}

	public function setCompression($compression) {
		$this->compression = $this->validateCompression($compression);
	}

	protected function validateCompression($compression) {
		if ( ! $compression instanceof \hl7_org\v3\CompressionAlgorithm  && ! is_null($compression) ) {
			$compression = new \hl7_org\v3\CompressionAlgorithm ($compression);
		}
	
		return $compression;
	}

	public function getIntegrityCheck() {
		if ($this->integrityCheck===NULL) {
			$this->integrityCheck = $this->createIntegrityCheck();
		}
		return $this->integrityCheck;
	}
	
	protected function createIntegrityCheck() {
		return new \hl7_org\v3\Bin();
	}

	public function setIntegrityCheck($integrityCheck) {
		$this->integrityCheck = $this->validateIntegrityCheck($integrityCheck);
	}

	protected function validateIntegrityCheck($integrityCheck) {
		if ( ! $integrityCheck instanceof \hl7_org\v3\Bin  && ! is_null($integrityCheck) ) {
			$integrityCheck = new \hl7_org\v3\Bin ($integrityCheck);
		}
	
		return $integrityCheck;
	}

	public function getIntegrityCheckAlgorithm() {
		if ($this->integrityCheckAlgorithm===NULL) {
			$this->integrityCheckAlgorithm = $this->createIntegrityCheckAlgorithm();
		}
		return $this->integrityCheckAlgorithm;
	}
	
	protected function createIntegrityCheckAlgorithm() {
		return new \hl7_org\v3\IntegrityCheckAlgorithm();
	}

	public function setIntegrityCheckAlgorithm($integrityCheckAlgorithm) {
		$this->integrityCheckAlgorithm = $this->validateIntegrityCheckAlgorithm($integrityCheckAlgorithm);
	}

	protected function validateIntegrityCheckAlgorithm($integrityCheckAlgorithm) {
		if ( ! $integrityCheckAlgorithm instanceof \hl7_org\v3\IntegrityCheckAlgorithm  && ! is_null($integrityCheckAlgorithm) ) {
			$integrityCheckAlgorithm = new \hl7_org\v3\IntegrityCheckAlgorithm ($integrityCheckAlgorithm);
		}
	
		return $integrityCheckAlgorithm;
	}
} // end class ED
