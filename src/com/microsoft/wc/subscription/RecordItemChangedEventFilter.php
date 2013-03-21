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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\TypeIds", name="type-ids")
	 */
	protected $typeIds;

	public function __construct($typeIds = NULL) {
		$this->typeIds = ($typeIds===NULL) ? NULL : $this->validateTypeIds($typeIds);
	}

	public function getTypeIds($autoCreate = TRUE) {
		if ($this->typeIds===NULL && $autoCreate && ! isset($this->_overrides['typeIds']) ) {
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
