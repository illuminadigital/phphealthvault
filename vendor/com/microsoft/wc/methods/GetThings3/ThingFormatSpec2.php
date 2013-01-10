<?php
namespace com\microsoft\wc\methods\GetThings3;

use com\microsoft\wc\methods\GetThings3\BlobPayloadRequest;
use com\microsoft\wc\methods\GetThings3\ThingSectionSpec2;
use com\microsoft\wc\types\Guid;

/**
 * @XmlEntity	(xml="ThingFormatSpec2")
 */
class ThingFormatSpec2 {
	/**
	 * Specifies how the results are returned.
	 * The section element specifies which sections are returned. The xml element specifies how the actual thing data is formatted.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\ThingSectionSpec2", collection="true", name="section")
	 */
	protected $section;

	/**
	 * @XmlText	(type="string", collection="true", name="xml")
	 */
	protected $xml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="type-version-format")
	 */
	protected $typeVersionFormat;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\BlobPayloadRequest", name="blob-payload-request")
	 */
	protected $blobPayloadRequest;

	public function __construct($section = NULL, $xml = NULL, $typeVersionFormat = NULL, $blobPayloadRequest = NULL) {
		$this->section = ($section===NULL) ? NULL : $this->validateSection($section);
		$this->xml = ($xml===NULL) ? NULL : $this->validateXml($xml);
		$this->typeVersionFormat = ($typeVersionFormat===NULL) ? NULL : $this->validateTypeVersionFormat($typeVersionFormat);
		$this->blobPayloadRequest = ($blobPayloadRequest===NULL) ? NULL : $this->validateBlobPayloadRequest($blobPayloadRequest);
	}

	public function getSection() {
		if ($this->section===NULL) {
			$this->section = $this->createSection();
		}
		return $this->section;
	}
	
	protected function createSection() {
		return array();
	}

	public function setSection($section) {
		$this->section = $this->validateSection($section);
	}

	protected function validateSection($section) {
		if ( ! $section instanceof ThingSectionSpec2  && ! is_null($section) ) {
			$section = new ThingSectionSpec2 ($section);
		}
		$count = count($section);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'section', 0));
		}
		foreach ($section as $entry) {
			if (!($entry instanceof ThingSectionSpec2)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'section', 'ThingSectionSpec2'));
			}
		}
	
		return $section;
	}

	public function addSection($section) {
		$this->section[] = $section;
	}

	public function getXml() {
		if ($this->xml===NULL) {
			$this->xml = $this->createXml();
		}
		return $this->xml;
	}
	
	protected function createXml() {
		return array();
	}

	public function setXml($xml) {
		$this->xml = $this->validateXml($xml);
	}

	protected function validateXml($xml) {
		$count = count($xml);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'xml', 0));
		}
		foreach ($xml as $entry) {
			if ( ! is_string($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'xml', 'string'));
			}
		}
	
		return $xml;
	}

	public function addXml($xml) {
		$this->xml[] = $this->validateXmlType($xml);
	}

	protected function validateXmlType($xml) {
		if ( ! is_string($xml) && ! is_null($xml) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xml', 'string'));
		}
	
		return $xml;
	}

	public function getTypeVersionFormat() {
		if ($this->typeVersionFormat===NULL) {
			$this->typeVersionFormat = $this->createTypeVersionFormat();
		}
		return $this->typeVersionFormat;
	}
	
	protected function createTypeVersionFormat() {
		return array();
	}

	public function setTypeVersionFormat($typeVersionFormat) {
		$this->typeVersionFormat = $this->validateTypeVersionFormat($typeVersionFormat);
	}

	protected function validateTypeVersionFormat($typeVersionFormat) {
		if ( ! $typeVersionFormat instanceof Guid  && ! is_null($typeVersionFormat) ) {
			$typeVersionFormat = new Guid ($typeVersionFormat);
		}
		$count = count($typeVersionFormat);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'typeVersionFormat', 0));
		}
		foreach ($typeVersionFormat as $entry) {
			if (!($entry instanceof Guid)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'typeVersionFormat', 'guid'));
			}
		}
	
		return $typeVersionFormat;
	}

	public function addTypeVersionFormat($typeVersionFormat) {
		$this->typeVersionFormat[] = $typeVersionFormat;
	}

	public function getBlobPayloadRequest() {
		if ($this->blobPayloadRequest===NULL) {
			$this->blobPayloadRequest = $this->createBlobPayloadRequest();
		}
		return $this->blobPayloadRequest;
	}
	
	protected function createBlobPayloadRequest() {
		return new BlobPayloadRequest();
	}

	public function setBlobPayloadRequest($blobPayloadRequest) {
		$this->blobPayloadRequest = $this->validateBlobPayloadRequest($blobPayloadRequest);
	}

	protected function validateBlobPayloadRequest($blobPayloadRequest) {
		if ( ! $blobPayloadRequest instanceof BlobPayloadRequest  && ! is_null($blobPayloadRequest) ) {
			$blobPayloadRequest = new BlobPayloadRequest ($blobPayloadRequest);
		}
	
		return $blobPayloadRequest;
	}
} // end class ThingFormatSpec2
