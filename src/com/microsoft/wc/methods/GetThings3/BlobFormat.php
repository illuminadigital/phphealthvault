<?php
namespace com\microsoft\wc\methods\GetThings3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings3", prefix="")
 * })
 * @XmlEntity	(xml="blob-format")
 */
class BlobFormat {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\BlobFormatSpec", name="blob-format-spec")
	 */
	protected $blobFormatSpec;

	public function __construct($blobFormatSpec = NULL) {
		$this->blobFormatSpec = ($blobFormatSpec===NULL) ? NULL : $this->validateBlobFormatSpec($blobFormatSpec);
	}

	public function getBlobFormatSpec() {
		if ($this->blobFormatSpec===NULL) {
			$this->blobFormatSpec = $this->createBlobFormatSpec();
		}
		return $this->blobFormatSpec;
	}
	
	protected function createBlobFormatSpec() {
		return new \com\microsoft\wc\methods\GetThings3\BlobFormatSpec();
	}

	public function setBlobFormatSpec($blobFormatSpec) {
		$this->blobFormatSpec = $this->validateBlobFormatSpec($blobFormatSpec);
	}

	protected function validateBlobFormatSpec($blobFormatSpec) {
		if ( ! $blobFormatSpec instanceof \com\microsoft\wc\methods\GetThings3\BlobFormatSpec ) {
			$blobFormatSpec = new \com\microsoft\wc\methods\GetThings3\BlobFormatSpec ($blobFormatSpec);
		}
	
		return $blobFormatSpec;
	}
} // end class BlobFormat
