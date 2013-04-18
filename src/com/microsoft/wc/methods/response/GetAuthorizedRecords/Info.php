<?php
namespace com\microsoft\wc\methods\response\GetAuthorizedRecords;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAuthorizedRecords", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Record", collection="true", name="record")
	 */
	protected $record;

	public function __construct($record = NULL) {
		$this->record = ($record===NULL) ? NULL : $this->validateRecord($record);
	}

	public function getRecord($autoCreate = TRUE) {
		if ($this->record===NULL && $autoCreate && ! isset($this->_overrides['record']) ) {
			$this->record = $this->createRecord();
		}
		return $this->record;
	}
	
	protected function createRecord() {
		return array();
	}

	public function setRecord($record) {
		$this->record = $this->validateRecord($record);
	}

	protected function validateRecord($record) {
		if ( $record === FALSE ) {
			$this->_overrides['record'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($record) && ! is_null($record) ) {
			$record = array($record);
		}

		unset ($this->_overrides['record']);
		$count = count($record);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'record', 0));
		}
		foreach ($record as $entry) {
			if (!($entry instanceof Record)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'record', 'Record'));
			}
		}
	
		return $record;
	}

	public function addRecord($record) {
		$this->record[] = $record;
	}
} // end class Info
