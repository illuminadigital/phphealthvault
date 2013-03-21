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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="integer", name="block-size")
	 */
	protected $blockSize;

	public function __construct($blockSize = NULL) {
		$this->blockSize = ($blockSize===NULL) ? NULL : $this->validateBlockSize($blockSize);
	}

	public function getBlockSize($autoCreate = TRUE) {
		if ($this->blockSize===NULL && $autoCreate && ! isset($this->_overrides['blockSize']) ) {
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
		$isValid = FALSE;
		if ( is_integer($blockSize) ) {
			$isValid = TRUE;
		}
		else if ( is_null($blockSize) ) {
			$isValid = TRUE;
		}
		else if ( $blockSize == ($castVar = (integer) $blockSize) ) {
			$isValid = TRUE;
			$blockSize = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blockSize', 'integer'));
		}
	
		return $blockSize;
	}
} // end class BlobHashAlgorithmParameters
