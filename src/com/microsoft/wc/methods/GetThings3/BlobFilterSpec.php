<?php
namespace com\microsoft\wc\methods\GetThings3;



/**
 * @XmlEntity	(xml="BlobFilterSpec")
 */
class BlobFilterSpec {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnwz64", name="blob-name")
	 */
	protected $blobName;

	public function __construct($blobName = NULL) {
		$this->blobName = ($blobName===NULL) ? NULL : $this->validateBlobName($blobName);
	}

	public function getBlobName() {
		if ($this->blobName===NULL) {
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
