<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="BlobHashAlgorithmParameters")
 */
class BlobHashAlgorithmParameters {
	/**
	 */

	/**
	 * @XmlText	(type="integer", name="block-size")
	 */
	protected $blockSize;

	public function __construct($blockSize = NULL) {
		$this->blockSize = ($blockSize===NULL) ? NULL : $this->validateBlockSize($blockSize);
	}

	public function getBlockSize() {
		if ($this->blockSize===NULL) {
			$this->blockSize = $this->createBlockSize();
		}
		return $this->blockSize;
	}
	
	protected function createBlockSize() {
		return NULL;
	}

	public function setBlockSize($blockSize) {
		$this->blockSize = $this->validateBlockSize($blockSize);
	}

	protected function validateBlockSize($blockSize) {
		if (!is_integer($blockSize)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blockSize', 'integer'));
		}
	
		return $blockSize;
	}
} // end class BlobHashAlgorithmParameters
