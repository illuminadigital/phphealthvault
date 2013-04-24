<?php
namespace com\microsoft\wc\thing\family_history;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.family-history", prefix="")
 * })
 * @XmlEntity	(xml="family-history")
 */
class FamilyHistory extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A condition of a relative.
	 * Stores a condition that a relative of the record-owner has.To create a family tree, use the relationship-types vocabularyto code both directions of the parent/child relationship betweenone family member and another. These codes are stored asrelated items for both parent and child data instances.The flexibity of having both condition and relative be optionalallows applications to give the users the ability to just put inthe details they know at the time they want to create the tree.If they just know the name of the relative, or a particular conditionthat’s all it takes to get a new instance started.
	 */

	const ID = '4a04fcc8-19c1-4d59-a8c7-2031a03f21de';
	const NAME = 'Family History';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Condition", collection="true", name="condition")
	 */
	protected $condition;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\family_history\FamilyHistoryRelative", name="relative")
	 */
	protected $relative;

	public function __construct($condition = NULL, $relative = NULL) {
		$this->condition = ($condition===NULL) ? NULL : $this->validateCondition($condition);
		$this->relative = ($relative===NULL) ? NULL : $this->validateRelative($relative);
	}

	public function getCondition($autoCreate = TRUE) {
		if ($this->condition===NULL && $autoCreate && ! isset($this->_overrides['condition']) ) {
			$this->condition = $this->createCondition();
		}
		return $this->condition;
	}
	
	protected function createCondition() {
		return array();
	}

	public function setCondition($condition) {
		$this->condition = $this->validateCondition($condition);
	}

	protected function validateCondition($condition) {
		if ( $condition === FALSE ) {
			$this->_overrides['condition'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($condition) && ! is_null($condition) ) {
			$condition = array($condition);
		}

		unset ($this->_overrides['condition']);
		$count = count($condition);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'condition', 0));
		}
		if ( ! empty($condition) ) {
			foreach ($condition as $entry) {
				if (!($entry instanceof Condition)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'condition', 'condition'));
				}
			}
		}
	
		return $condition;
	}

	public function addCondition($condition) {
		$this->condition[] = $condition;
	}

	public function getRelative($autoCreate = TRUE) {
		if ($this->relative===NULL && $autoCreate && ! isset($this->_overrides['relative']) ) {
			$this->relative = $this->createRelative();
		}
		return $this->relative;
	}
	
	protected function createRelative() {
		return new \com\microsoft\wc\thing\family_history\FamilyHistoryRelative();
	}

	public function setRelative($relative) {
		$this->relative = $this->validateRelative($relative);
	}

	protected function validateRelative($relative) {
		if ( $relative === FALSE ) {
			$this->_overrides['relative'] = TRUE;
			return NULL;
		}

		if ( ! $relative instanceof \com\microsoft\wc\thing\family_history\FamilyHistoryRelative  && ! is_null($relative) ) {
			$relative = new \com\microsoft\wc\thing\family_history\FamilyHistoryRelative ($relative);
		}

		unset ($this->_overrides['relative']);
	
		return $relative;
	}
} // end class FamilyHistory
