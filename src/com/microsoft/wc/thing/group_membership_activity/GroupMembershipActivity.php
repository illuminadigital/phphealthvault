<?php
namespace com\microsoft\wc\thing\group_membership_activity;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.group-membership-activity", prefix="")
 * })
 * @XmlEntity	(xml="group-membership-activity")
 */
class GroupMembershipActivity extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Describes an activity related to group membership.
	 */

	const ID = 'e75fa095-31ed-4b30-b5f7-463963b5e734';
	const NAME = 'Group Membership Activity';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodedValue", name="activity")
	 */
	protected $activity;

	/**
	 * @XmlText	(type="string", name="activity-info")
	 */
	protected $activityInfo;

	public function __construct($when = NULL, $activity = NULL, $activityInfo = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->activity = ($activity===NULL) ? NULL : $this->validateActivity($activity);
		$this->activityInfo = ($activityInfo===NULL) ? NULL : $this->validateActivityInfo($activityInfo);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getActivity($autoCreate = TRUE) {
		if ($this->activity===NULL && $autoCreate && ! isset($this->_overrides['activity']) ) {
			$this->activity = $this->createActivity();
		}
		return $this->activity;
	}
	
	protected function createActivity() {
		return new \com\microsoft\wc\types\CodedValue();
	}

	public function setActivity($activity) {
		$this->activity = $this->validateActivity($activity);
	}

	protected function validateActivity($activity) {
		if ( ! $activity instanceof \com\microsoft\wc\types\CodedValue ) {
			$activity = new \com\microsoft\wc\types\CodedValue ($activity);
		}
	
		return $activity;
	}

	public function getActivityInfo($autoCreate = TRUE) {
		if ($this->activityInfo===NULL && $autoCreate && ! isset($this->_overrides['activityInfo']) ) {
			$this->activityInfo = $this->createActivityInfo();
		}
		return $this->activityInfo;
	}
	
	protected function createActivityInfo() {
		return '';
	}

	public function setActivityInfo($activityInfo) {
		$this->activityInfo = $this->validateActivityInfo($activityInfo);
	}

	protected function validateActivityInfo($activityInfo) {
		if ( ! is_string($activityInfo) && ! is_null($activityInfo) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'activityInfo', 'string'));
		}
	
		return $activityInfo;
	}
} // end class GroupMembershipActivity
