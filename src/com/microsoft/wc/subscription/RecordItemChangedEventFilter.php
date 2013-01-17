<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="RecordItemChangedEventFilter")
 */
class RecordItemChangedEventFilter {
	/**
	 * Defines the criteria when the event will fire.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\TypeIds", name="type-ids")
	 */
	protected $typeIds;

	public function __construct($typeIds = NULL) {
		$this->typeIds = ($typeIds===NULL) ? NULL : $this->validateTypeIds($typeIds);
	}

	public function getTypeIds() {
		if ($this->typeIds===NULL) {
			$this->typeIds = $this->createTypeIds();
		}
		return $this->typeIds;
	}
	
	protected function createTypeIds() {
		return new \com\microsoft\wc\subscription\TypeIds();
	}

	public function setTypeIds($typeIds) {
		$this->typeIds = $this->validateTypeIds($typeIds);
	}

	protected function validateTypeIds($typeIds) {
		if ( ! $typeIds instanceof \com\microsoft\wc\subscription\TypeIds ) {
			$typeIds = new \com\microsoft\wc\subscription\TypeIds ($typeIds);
		}
	
		return $typeIds;
	}
} // end class RecordItemChangedEventFilter
