<?php
namespace com\microsoft\wc\thing;




/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="GuidAndName")
 */
class GuidAndName extends Guid {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	public function __construct($name = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}
} // end class GuidAndName
