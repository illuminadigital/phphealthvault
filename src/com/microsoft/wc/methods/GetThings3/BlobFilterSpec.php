<?php
namespace com\microsoft\wc\methods\GetThings3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings3", prefix="")
 * })
 * @XmlEntity	(xml="BlobFilterSpec")
 */
class BlobFilterSpec {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnwz64", name="blob-name")
	 */
	protected $blobName;

	public function __construct($blobName = NULL) {
		$this->blobName = ($blobName===NULL) ? NULL : $this->validateBlobName($blobName);
	}

	public function getBlobName($autoCreate = TRUE) {
		if ($this->blobName===NULL && $autoCreate && ! isset($this->_overrides['blobName']) ) {
			$this->blobName = $this->createBlobName();
		}
		return $this->blobName;
	}
	
	protected function createBlobName() {
		return new \com\microsoft\wc\types\Stringnwz64();
	}

	public function setBlobName($blobName) {
		$this->blobName = $this->validateBlobName($blobName);
	}

	protected function validateBlobName($blobName) {
		if ( ! $blobName instanceof \com\microsoft\wc\types\Stringnwz64 ) {
			$blobName = new \com\microsoft\wc\types\Stringnwz64 ($blobName);
		}
	
		return $blobName;
	}
} // end class BlobFilterSpec
