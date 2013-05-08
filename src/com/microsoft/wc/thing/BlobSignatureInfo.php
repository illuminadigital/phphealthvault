<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="BlobSignatureInfo")
 */
class BlobSignatureInfo {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\CreateConnectPackage2\Item", collection="true", name="item")
	 */
	protected $item;

	public function __construct($item = NULL) {
		$this->item = ($item===NULL) ? NULL : $this->validateItem($item);
	}

	public function getItem($autoCreate = TRUE) {
		if ($this->item===NULL && $autoCreate && ! isset($this->_overrides['item']) ) {
			$this->item = $this->createItem();
		}
		return $this->item;
	}
	
	protected function createItem() {
		return array();
	}

	public function setItem($item) {
		$this->item = $this->validateItem($item);
	}

	protected function validateItem($item) {
		if ( ! is_array ($item) ) {
			$item = array($item);
		}
		$count = count($item);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'item', 1));
		}
		foreach ($item as $entry) {
			if (!($entry instanceof \com\microsoft\wc\methods\CreateConnectPackage2\Item )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'item', 'item'));
			}
		}
	
		return $item;
	}

	public function addItem($item) {
		$this->item[] = $item;
	}
} // end class BlobSignatureInfo
