<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="TotalServiceDuration")
 */
class TotalServiceDuration {
	/**
	 * Total of the direct and indirect time as it relates to the FrequencyTime; e.g., DirectTime 60 + IndirectTime 30 = 90.
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
} // end class TotalServiceDuration
