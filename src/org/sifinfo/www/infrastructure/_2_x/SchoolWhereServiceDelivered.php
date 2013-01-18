<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SchoolWhereServiceDelivered")
 */
class SchoolWhereServiceDelivered {
	/**
	 * The GUID of the school where the service is delivered.
	 */

	/**
	 * @XmlAttribute	(type="string", name="SIF_RefObject")
	 */
	protected $sifRefObject;

	public function __construct($sifRefObject = NULL) {
		$this->sifRefObject = ($sifRefObject===NULL) ? NULL : $this->validateSifRefObject($sifRefObject);
	}

	public function getSifRefObject() {
		if ($this->sifRefObject===NULL) {
			$this->sifRefObject = $this->createSifRefObject();
		}
		return $this->sifRefObject;
	}
	
	protected function createSifRefObject() {
		return NULL;
	}

	public function setSifRefObject($sifRefObject) {
		$this->sifRefObject = $this->validateSifRefObject($sifRefObject);
	}

	protected function validateSifRefObject($sifRefObject) {
		if (!is_string($sifRefObject)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifRefObject', 'string'));
		}
	
		return $sifRefObject;
	}
} // end class SchoolWhereServiceDelivered
