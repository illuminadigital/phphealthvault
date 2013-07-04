<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="PhoneNumber")
 */
class PhoneNumber {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="SIF_Action")
	 */
	protected $sifAction;

	public function __construct($sifAction = NULL) {
		$this->sifAction = ($sifAction===NULL) ? NULL : $this->validateSifAction($sifAction);
	}

	public function getSifAction($autoCreate = TRUE) {
		if ($this->sifAction===NULL && $autoCreate && ! isset($this->_overrides['sifAction']) ) {
			$this->sifAction = $this->createSifAction();
		}
		return $this->sifAction;
	}
	
	protected function createSifAction() {
		return NULL;
	}

	public function setSifAction($sifAction) {
		$this->sifAction = $this->validateSifAction($sifAction);
	}

	protected function validateSifAction($sifAction) {
		if ( ! is_string($sifAction) && ! is_null($sifAction) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifAction', 'string'));
		}
	
		return $sifAction;
	}
} // end class PhoneNumber
