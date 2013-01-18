<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="OtherIdType")
 */
class OtherIdType {
	/**
	 * An "other" identifier associated with a person. This element occurs in objects such as StudentPersonal andStaffPersonal, etc.
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
		return new \org\sifinfo\www\infrastructure\_2_x\NCES0147IdentificationSystemType();
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! $type instanceof \org\sifinfo\www\infrastructure\_2_x\NCES0147IdentificationSystemType ) {
			$type = new \org\sifinfo\www\infrastructure\_2_x\NCES0147IdentificationSystemType ($type);
		}
	
		return $type;
	}
} // end class OtherIdType
