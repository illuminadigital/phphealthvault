<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="BlobPayload")
 */
class BlobPayload {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobPayloadItem", collection="true", name="blob")
	 */
	protected $blob;

	public function __construct($blob = NULL) {
		$this->blob = ($blob===NULL) ? NULL : $this->validateBlob($blob);
	}

	public function getBlob($autoCreate = TRUE) {
		if ($this->blob===NULL && $autoCreate && ! isset($this->_overrides['blob']) ) {
			$this->blob = $this->createBlob();
		}
		return $this->blob;
	}
	
	protected function createBlob() {
		return array();
	}

	public function setBlob($blob) {
		$this->blob = $this->validateBlob($blob);
	}

	protected function validateBlob($blob) {
		if ( ! is_array ($blob) ) {
			$blob = array($blob);
		}
		$count = count($blob);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'blob', 1));
		}
		foreach ($blob as $entry) {
			if (!($entry instanceof BlobPayloadItem)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'blob', 'BlobPayloadItem'));
			}
		}
	
		return $blob;
	}

	public function addBlob($blob) {
		$this->blob[] = $blob;
	}
} // end class BlobPayload
