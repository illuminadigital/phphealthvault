<?php
namespace com\microsoft\wc\types;

use com\microsoft\wc\types\CultureSpecificExtensionItem;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="CultureSpecificExtensionItems")
 */
class CultureSpecificExtensionItems {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificExtensionItem", collection="true", name="extension-item")
	 */
	protected $extensionItem;

	public function __construct($extensionItem = NULL) {
		$this->extensionItem = ($extensionItem===NULL) ? NULL : $this->validateExtensionItem($extensionItem);
	}

	public function getExtensionItem() {
		if ($this->extensionItem===NULL) {
			$this->extensionItem = $this->createExtensionItem();
		}
		return $this->extensionItem;
	}
	
	protected function createExtensionItem() {
		return array();
	}

	public function setExtensionItem($extensionItem) {
		$this->extensionItem = $this->validateExtensionItem($extensionItem);
	}

	protected function validateExtensionItem($extensionItem) {
		if ( ! $extensionItem instanceof CultureSpecificExtensionItem ) {
			$extensionItem = new CultureSpecificExtensionItem ($extensionItem);
		}
		$count = count($extensionItem);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'extensionItem', 1));
		}
		foreach ($extensionItem as $entry) {
			if (!($entry instanceof CultureSpecificExtensionItem)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'extensionItem', 'CultureSpecificExtensionItem'));
			}
		}
	
		return $extensionItem;
	}

	public function addExtensionItem($extensionItem) {
		$this->extensionItem[] = $extensionItem;
	}
} // end class CultureSpecificExtensionItems
