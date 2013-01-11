<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\Guid;

/**
 * @XmlEntity	(xml="guids")
 */
class Guids {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Guid", collection="true", name="id")
	 */
	protected $id;

	public function __construct($id = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return array();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof Guid ) {
			$id = new Guid ($id);
		}
		$count = count($id);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 1));
		}
		foreach ($id as $entry) {
			if (!($entry instanceof Guid)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'guid'));
			}
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $id;
	}
} // end class Guids
