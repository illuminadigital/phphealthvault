<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ExceptionalityCategoriesType")
 */
class ExceptionalityCategoriesType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ExceptionalityCategory", collection="true", name="ExceptionalityCategory")
	 */
	protected $exceptionalityCategory;

	public function __construct($exceptionalityCategory = NULL) {
		$this->exceptionalityCategory = ($exceptionalityCategory===NULL) ? NULL : $this->validateExceptionalityCategory($exceptionalityCategory);
	}

	public function getExceptionalityCategory() {
		if ($this->exceptionalityCategory===NULL) {
			$this->exceptionalityCategory = $this->createExceptionalityCategory();
		}
		return $this->exceptionalityCategory;
	}
	
	protected function createExceptionalityCategory() {
		return array();
	}

	public function setExceptionalityCategory($exceptionalityCategory) {
		$this->exceptionalityCategory = $this->validateExceptionalityCategory($exceptionalityCategory);
	}

	protected function validateExceptionalityCategory($exceptionalityCategory) {
		if ( ! is_array ($exceptionalityCategory) ) {
			$exceptionalityCategory = array($exceptionalityCategory);
		}
		$count = count($exceptionalityCategory);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'exceptionalityCategory', 1));
		}
		foreach ($exceptionalityCategory as $entry) {
			if (!($entry instanceof ExceptionalityCategory)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'exceptionalityCategory', 'ExceptionalityCategory'));
			}
		}
	
		return $exceptionalityCategory;
	}

	public function addExceptionalityCategory($exceptionalityCategory) {
		$this->exceptionalityCategory[] = $exceptionalityCategory;
	}
} // end class ExceptionalityCategoriesType
