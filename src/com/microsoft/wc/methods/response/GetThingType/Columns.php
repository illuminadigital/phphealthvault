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
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\Column", collection="true", name="column")
	 */
	protected $column;

	public function __construct($column = NULL) {
		$this->column = ($column===NULL) ? NULL : $this->validateColumn($column);
	}

	public function getColumn() {
		if ($this->column===NULL) {
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
		if ( ! is_array ($column) && ! is_null($column) ) {
			$column = array($column);
		}
		$count = count($column);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'column', 0));
		}
		foreach ($column as $entry) {
			if (!($entry instanceof Column)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'column', 'Column'));
			}
		}
	
		return $column;
	}

	public function addColumn($column) {
		$this->column[] = $column;
	}
} // end class Columns
