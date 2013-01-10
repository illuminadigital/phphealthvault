<?php
namespace com\microsoft\wc\methods\response\AddApplication;

use com\microsoft\wc\types\Guid;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.AddApplication", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
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
		return new Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof Guid ) {
			$id = new Guid ($id);
		}
	
		return $id;
	}
} // end class Info
