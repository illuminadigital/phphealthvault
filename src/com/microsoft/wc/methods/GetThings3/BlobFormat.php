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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\BlobFormatSpec", name="blob-format-spec")
	 */
	protected $blobFormatSpec;

	public function __construct($blobFormatSpec = NULL) {
		$this->blobFormatSpec = ($blobFormatSpec===NULL) ? NULL : $this->validateBlobFormatSpec($blobFormatSpec);
	}

	public function getBlobFormatSpec($autoCreate = TRUE) {
		if ($this->blobFormatSpec===NULL && $autoCreate && ! isset($this->_overrides['blobFormatSpec']) ) {
			$this->blobFormatSpec = $this->createBlobFormatSpec();
		}
		return $this->blobFormatSpec;
	}
	
	protected function createBlobFormatSpec() {
		return NULL;
	}

	public function setBlobFormatSpec($blobFormatSpec) {
		$this->blobFormatSpec = $this->validateBlobFormatSpec($blobFormatSpec);
	}

	protected function validateBlobFormatSpec($blobFormatSpec) {
	
		return $blobFormatSpec;
	}
} // end class BlobFormat
