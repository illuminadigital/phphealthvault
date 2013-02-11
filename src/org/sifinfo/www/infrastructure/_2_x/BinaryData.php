<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="BinaryData")
 */
class BinaryData {
	/**
	 * Contains the base64Binary encoding of binary or text data not encoded in UTF-8.
	 */

	/**
	 * @XmlAttribute	(type="string", name="MIMEType")
	 */
	protected $mIMEType;

	/**
	 * @XmlAttribute	(type="string", name="FileName")
	 */
	protected $fileName;

	/**
	 * @XmlAttribute	(type="string", name="Description")
	 */
	protected $description;

	public function __construct($mIMEType = NULL, $fileName = NULL, $description = NULL) {
		$this->mIMEType = ($mIMEType===NULL) ? NULL : $this->validateMIMEType($mIMEType);
		$this->fileName = ($fileName===NULL) ? NULL : $this->validateFileName($fileName);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
	}

	public function getMIMEType() {
		if ($this->mIMEType===NULL) {
			$this->mIMEType = $this->createMIMEType();
		}
		return $this->mIMEType;
	}
	
	protected function createMIMEType() {
		return NULL;
	}

	public function setMIMEType($mIMEType) {
		$this->mIMEType = $this->validateMIMEType($mIMEType);
	}

	protected function validateMIMEType($mIMEType) {
		if (!is_string($mIMEType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mIMEType', 'string'));
		}
	
		return $mIMEType;
	}

	public function getFileName() {
		if ($this->fileName===NULL) {
			$this->fileName = $this->createFileName();
		}
		return $this->fileName;
	}
	
	protected function createFileName() {
		return NULL;
	}

	public function setFileName($fileName) {
		$this->fileName = $this->validateFileName($fileName);
	}

	protected function validateFileName($fileName) {
		if ( ! is_string($fileName) && ! is_null($fileName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'fileName', 'string'));
		}
	
		return $fileName;
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return NULL;
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}
} // end class BinaryData
