<?php
namespace com\microsoft\wc\methods\response\GetThings3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThings3", prefix="")
 * })
 * @XmlEntity	(xml="item")
 */
class Item {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobInfo", name="blob-info")
	 */
	protected $blobInfo;

	public function __construct($blobInfo = NULL) {
		$this->blobInfo = ($blobInfo===NULL) ? NULL : $this->validateBlobInfo($blobInfo);
	}

	public function getBlobInfo($autoCreate = TRUE) {
		if ($this->blobInfo===NULL && $autoCreate && ! isset($this->_overrides['blobInfo']) ) {
			$this->blobInfo = $this->createBlobInfo();
		}
		return $this->blobInfo;
	}
	
	protected function createBlobInfo() {
		return new \com\microsoft\wc\thing\BlobInfo();
	}

	public function setBlobInfo($blobInfo) {
		$this->blobInfo = $this->validateBlobInfo($blobInfo);
	}

	protected function validateBlobInfo($blobInfo) {
		if ( ! $blobInfo instanceof \com\microsoft\wc\thing\BlobInfo ) {
			$blobInfo = new \com\microsoft\wc\thing\BlobInfo ($blobInfo);
		}
	
		return $blobInfo;
	}
} // end class Item
