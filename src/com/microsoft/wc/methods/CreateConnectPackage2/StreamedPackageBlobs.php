<?php
namespace com\microsoft\wc\methods\CreateConnectPackage2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.CreateConnectPackage2", prefix="")
 * })
 * @XmlEntity	(xml="StreamedPackageBlobs")
 */
class StreamedPackageBlobs {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", collection="true", name="blob-in-package-ref-url")
	 */
	protected $blobInPackageRefUrl;

	public function __construct($blobInPackageRefUrl = NULL) {
		$this->blobInPackageRefUrl = ($blobInPackageRefUrl===NULL) ? NULL : $this->validateBlobInPackageRefUrl($blobInPackageRefUrl);
	}

	public function getBlobInPackageRefUrl($autoCreate = TRUE) {
		if ($this->blobInPackageRefUrl===NULL && $autoCreate && ! isset($this->_overrides['blobInPackageRefUrl']) ) {
			$this->blobInPackageRefUrl = $this->createBlobInPackageRefUrl();
		}
		return $this->blobInPackageRefUrl;
	}
	
	protected function createBlobInPackageRefUrl() {
		return array();
	}

	public function setBlobInPackageRefUrl($blobInPackageRefUrl) {
		$this->blobInPackageRefUrl = $this->validateBlobInPackageRefUrl($blobInPackageRefUrl);
	}

	protected function validateBlobInPackageRefUrl($blobInPackageRefUrl) {
		$count = count($blobInPackageRefUrl);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'blobInPackageRefUrl', 1));
		}
		foreach ($blobInPackageRefUrl as $entry) {
			if (!is_string($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'blobInPackageRefUrl', 'string'));
			}
		}
	
		return $blobInPackageRefUrl;
	}

	public function addBlobInPackageRefUrl($blobInPackageRefUrl) {
		$this->blobInPackageRefUrl[] = $this->validateBlobInPackageRefUrlType($blobInPackageRefUrl);
	}

	protected function validateBlobInPackageRefUrlType($blobInPackageRefUrl) {
		if (!is_string($blobInPackageRefUrl)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blobInPackageRefUrl', 'string'));
		}
	
		return $blobInPackageRefUrl;
	}
} // end class StreamedPackageBlobs
