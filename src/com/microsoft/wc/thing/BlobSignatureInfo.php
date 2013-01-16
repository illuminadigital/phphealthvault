<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlEntity	(xml="BlobSignatureInfo")
 */
class BlobSignatureInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\CreateConnectPackage2\Item", collection="true", name="item")
	 */
	protected $item;

	public function __construct($item = NULL) {
		$this->item = ($item===NULL) ? NULL : $this->validateItem($item);
	}

	public function getItem() {
		if ($this->item===NULL) {
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
		$count = count($item);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'item', 1));
		}
		foreach ($item as $entry) {
			if (!is_item($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'item', 'item'));
			}
		}
	
		return $item;
	}

	public function addItem($item) {
		$this->item[] = $this->validateItemType($item);
	}

	protected function validateItemType($item) {
		if (!is_item($item)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'item', 'item'));
		}
	
		return $item;
	}
} // end class BlobSignatureInfo
