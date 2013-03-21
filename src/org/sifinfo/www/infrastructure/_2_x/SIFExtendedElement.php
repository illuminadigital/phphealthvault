<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SIF_ExtendedElement")
 */
class SIFExtendedElement {
	/**
	 * A name/value pair, the name being contained in the Name attribute, the value being the element content.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="Name")
	 */
	protected $name;

	/**
	 * @XmlAttribute	(type="string", name="SIF_Action")
	 */
	protected $sifAction;

	public function __construct($name = NULL, $sifAction = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->sifAction = ($sifAction===NULL) ? NULL : $this->validateSifAction($sifAction);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return NULL;
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
} // end class SIFExtendedElement
