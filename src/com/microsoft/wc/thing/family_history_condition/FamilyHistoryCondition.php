<?php
namespace com\microsoft\wc\thing\family_history_condition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.family-history-condition", prefix="")
 * })
 * @XmlEntity	(xml="family-history-condition")
 */
class FamilyHistoryCondition extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A condition of a relative.
	 * Note: Please use the family history type instead of this type.Stores a condition that a relative of the record-owner has.
	 */

	const ID = '6705549b-0e3d-474e-bfa7-8197ddd6786a';
	const NAME = 'Family History Condition';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Condition", name="condition")
	 */
	protected $condition;

	public function __construct($condition = NULL) {
		$this->condition = ($condition===NULL) ? NULL : $this->validateCondition($condition);
	}

	public function getCondition() {
		if ($this->condition===NULL) {
			$this->condition = $this->createCondition();
		}
		return $this->condition;
	}
	
	protected function createCondition() {
		return new \com\microsoft\wc\thing\types\Condition();
	}

	public function setCondition($condition) {
		$this->condition = $this->validateCondition($condition);
	}

	protected function validateCondition($condition) {
		if ( ! $condition instanceof \com\microsoft\wc\thing\types\Condition ) {
			$condition = new \com\microsoft\wc\thing\types\Condition ($condition);
		}
	
		return $condition;
	}
} // end class FamilyHistoryCondition
