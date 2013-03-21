<?php
namespace com\microsoft\wc\methods\GetThings3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings3", prefix="")
 * })
 * @XmlEntity	(xml="BlobFilters")
 */
class BlobFilters {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\BlobFilterSpec", collection="true", name="blob-filter")
	 */
	protected $blobFilter;

	public function __construct($blobFilter = NULL) {
		$this->blobFilter = ($blobFilter===NULL) ? NULL : $this->validateBlobFilter($blobFilter);
	}

	public function getBlobFilter($autoCreate = TRUE) {
		if ($this->blobFilter===NULL && $autoCreate && ! isset($this->_overrides['blobFilter']) ) {
			$this->blobFilter = $this->createBlobFilter();
		}
		return $this->blobFilter;
	}
	
	protected function createBlobFilter() {
		return array();
	}

	public function setBlobFilter($blobFilter) {
		$this->blobFilter = $this->validateBlobFilter($blobFilter);
	}

	protected function validateBlobFilter($blobFilter) {
		if ( ! is_array ($blobFilter) ) {
			$blobFilter = array($blobFilter);
		}
		$count = count($blobFilter);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'blobFilter', 1));
		}
		foreach ($blobFilter as $entry) {
			if (!($entry instanceof BlobFilterSpec)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'blobFilter', 'BlobFilterSpec'));
			}
		}
	
		return $blobFilter;
	}

	public function addBlobFilter($blobFilter) {
		$this->blobFilter[] = $blobFilter;
	}
} // end class BlobFilters
