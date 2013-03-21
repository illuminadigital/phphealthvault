<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MediaTypes")
 */
class MediaTypes {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", collection="true", name="MediaType")
	 */
	protected $mediaType;

	public function __construct($mediaType = NULL) {
		$this->mediaType = ($mediaType===NULL) ? NULL : $this->validateMediaType($mediaType);
	}

	public function getMediaType($autoCreate = TRUE) {
		if ($this->mediaType===NULL && $autoCreate && ! isset($this->_overrides['mediaType']) ) {
			$this->mediaType = $this->createMediaType();
		}
		return $this->mediaType;
	}
	
	protected function createMediaType() {
		return array();
	}

	public function setMediaType($mediaType) {
		$this->mediaType = $this->validateMediaType($mediaType);
	}

	protected function validateMediaType($mediaType) {
		$count = count($mediaType);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'mediaType', 1));
		}
		foreach ($mediaType as $entry) {
			if (!is_string($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'mediaType', 'string'));
			}
		}
	
		return $mediaType;
	}

	public function addMediaType($mediaType) {
		$this->mediaType[] = $this->validateMediaTypeType($mediaType);
	}

	protected function validateMediaTypeType($mediaType) {
		if (!is_string($mediaType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mediaType', 'string'));
		}
	
		return $mediaType;
	}
} // end class MediaTypes
