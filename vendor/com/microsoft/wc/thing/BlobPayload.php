<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\BlobPayloadItem;

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobPayloadItem", collection="true", name="blob")
	 */
	protected $blob;

	public function __construct($blob = NULL) {
		$this->blob = ($blob===NULL) ? NULL : $this->validateBlob($blob);
	}

	public function getBlob() {
		if ($this->blob===NULL) {
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
		if ( ! $blob instanceof BlobPayloadItem ) {
			$blob = new BlobPayloadItem ($blob);
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
