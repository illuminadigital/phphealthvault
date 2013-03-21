<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="IndirectTime")
 */
class IndirectTime {
	/**
	 * Number of units of time per session NOT spent directly providing the service to the student but rather spent providing consultation services to someone related to the student (e.g. parent, a general ed teacher, a new service provider, etc.).
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="UnitOfMeasure")
	 */
	protected $unitOfMeasure;

	public function __construct($unitOfMeasure = NULL) {
		$this->unitOfMeasure = ($unitOfMeasure===NULL) ? NULL : $this->validateUnitOfMeasure($unitOfMeasure);
	}

	public function getUnitOfMeasure($autoCreate = TRUE) {
		if ($this->unitOfMeasure===NULL && $autoCreate && ! isset($this->_overrides['unitOfMeasure']) ) {
			$this->unitOfMeasure = $this->createUnitOfMeasure();
		}
		return $this->unitOfMeasure;
	}
	
	protected function createUnitOfMeasure() {
		return NULL;
	}

	public function setUnitOfMeasure($unitOfMeasure) {
		$this->unitOfMeasure = $this->validateUnitOfMeasure($unitOfMeasure);
	}

	protected function validateUnitOfMeasure($unitOfMeasure) {
		if (!is_string($unitOfMeasure)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'unitOfMeasure', 'string'));
		}
	
		return $unitOfMeasure;
	}
} // end class IndirectTime
