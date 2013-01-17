<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="Image")
 */
class Image {
	/**
	 * The image for the thing type.
	 * Images are base64 encoded into the value and the image type is specified as the "mime-type" attribute.
	 */

	/**
	 * @XmlAttribute	(type="string", name="mime-type")
	 */
	protected $mimeType;

	public function __construct($mimeType = NULL) {
		$this->mimeType = ($mimeType===NULL) ? NULL : $this->validateMimeType($mimeType);
	}

	public function getMimeType() {
		if ($this->mimeType===NULL) {
			$this->mimeType = $this->createMimeType();
		}
		return $this->mimeType;
	}
	
	protected function createMimeType() {
		return '';
	}

	public function setMimeType($mimeType) {
		$this->mimeType = $this->validateMimeType($mimeType);
	}

	protected function validateMimeType($mimeType) {
		if (!is_string($mimeType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mimeType', 'string'));
		}
	
		return $mimeType;
	}
} // end class Image
