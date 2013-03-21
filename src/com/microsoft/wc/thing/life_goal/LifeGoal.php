<?php
namespace com\microsoft\wc\thing\life_goal;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.life-goal", prefix="")
 * })
 * @XmlEntity	(xml="life-goal")
 */
class LifeGoal extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * An unmeasurable "checklist" goal of the type you mightstick up on the fridge as a New Year's resolution.
	 * The effective-date implies the date on which this goalwas initiated.
	 */

	const ID = '609319bf-35cc-40a4-b9d7-1b329679baaa';
	const NAME = 'Life Goal';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Goal", name="goal-info")
	 */
	protected $goalInfo;

	public function __construct($description = NULL, $goalInfo = NULL) {
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->goalInfo = ($goalInfo===NULL) ? NULL : $this->validateGoalInfo($goalInfo);
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if (!is_string($description)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getGoalInfo($autoCreate = TRUE) {
		if ($this->goalInfo===NULL && $autoCreate && ! isset($this->_overrides['goalInfo']) ) {
			$this->goalInfo = $this->createGoalInfo();
		}
		return $this->goalInfo;
	}
	
	protected function createGoalInfo() {
		return new \com\microsoft\wc\thing\types\Goal();
	}

	public function setGoalInfo($goalInfo) {
		$this->goalInfo = $this->validateGoalInfo($goalInfo);
	}

	protected function validateGoalInfo($goalInfo) {
		if ( $goalInfo === FALSE ) {
			$this->_overrides['goalInfo'] = TRUE;
			return NULL;
		}

		if ( ! $goalInfo instanceof \com\microsoft\wc\thing\types\Goal  && ! is_null($goalInfo) ) {
			$goalInfo = new \com\microsoft\wc\thing\types\Goal ($goalInfo);
		}

		unset ($this->_overrides['goalInfo']);
	
		return $goalInfo;
	}
} // end class LifeGoal
