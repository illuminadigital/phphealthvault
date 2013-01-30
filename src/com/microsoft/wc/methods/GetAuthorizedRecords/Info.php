<?php
namespace com\microsoft\wc\methods\GetAuthorizedRecords;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetAuthorizedRecords", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="id")
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
		if ( ! is_array ($id) ) {
			$id = array($id);
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
} // end class Info
