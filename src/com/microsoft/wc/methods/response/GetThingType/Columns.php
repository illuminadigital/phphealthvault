<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="Columns")
 */
class Columns {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\Column", collection="true", name="column")
	 */
	protected $column;

	public function __construct($column = NULL) {
		$this->column = ($column===NULL) ? NULL : $this->validateColumn($column);
	}

	public function getColumn($autoCreate = TRUE) {
		if ($this->column===NULL && $autoCreate && ! isset($this->_overrides['column']) ) {
			$this->column = $this->createColumn();
		}
		return $this->column;
	}
	
	protected function createColumn() {
		return array();
	}

	public function setColumn($column) {
		$this->column = $this->validateColumn($column);
	}

	protected function validateColumn($column) {
		if ( $column === FALSE ) {
			$this->_overrides['column'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($column) && ! is_null($column) ) {
			$column = array($column);
		}

		unset ($this->_overrides['column']);
		$count = count($column);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'column', 0));
		}
		if ( ! empty($column) ) {
			foreach ($column as $entry) {
				if (!($entry instanceof Column)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'column', 'Column'));
				}
			}
		}
	
		return $column;
	}

	public function addColumn($column) {
		$this->column[] = $column;
	}
} // end class Columns
