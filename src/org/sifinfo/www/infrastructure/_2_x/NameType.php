<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="NameType")
 */
class NameType extends BaseNameType {
	/**
	 * The Name element, which could belong to a student, staff member, contact, etc. This element or a form with asubset of Type values occurs within objectssuch as StudentPersonal, StudentContact, StaffPersonal, etc.
	 */

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($type = NULL) {
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}
} // end class NameType
