<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="DirectTime")
 */
class DirectTime {
	/**
	 * Number of units of time per session spent directly providing the service to the student.
	 */

	/**
	 * @XmlAttribute	(type="string", name="UnitOfMeasure")
	 */
	protected $unitOfMeasure;

	public function __construct($unitOfMeasure = NULL) {
		$this->unitOfMeasure = ($unitOfMeasure===NULL) ? NULL : $this->validateUnitOfMeasure($unitOfMeasure);
	}

	public function getUnitOfMeasure() {
		if ($this->unitOfMeasure===NULL) {
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
} // end class DirectTime
