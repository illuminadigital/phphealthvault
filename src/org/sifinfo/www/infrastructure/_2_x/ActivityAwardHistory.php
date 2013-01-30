<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ActivityAwardHistory")
 */
class ActivityAwardHistory {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ActivityAward", collection="true", name="ActivityAward")
	 */
	protected $activityAward;

	public function __construct($activityAward = NULL) {
		$this->activityAward = ($activityAward===NULL) ? NULL : $this->validateActivityAward($activityAward);
	}

	public function getActivityAward() {
		if ($this->activityAward===NULL) {
			$this->activityAward = $this->createActivityAward();
		}
		return $this->activityAward;
	}
	
	protected function createActivityAward() {
		return array();
	}

	public function setActivityAward($activityAward) {
		$this->activityAward = $this->validateActivityAward($activityAward);
	}

	protected function validateActivityAward($activityAward) {
		if ( ! is_array ($activityAward) ) {
			$activityAward = array($activityAward);
		}
		$count = count($activityAward);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'activityAward', 1));
		}
		foreach ($activityAward as $entry) {
			if (!($entry instanceof ActivityAward)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'activityAward', 'ActivityAward'));
			}
		}
	
		return $activityAward;
	}

	public function addActivityAward($activityAward) {
		$this->activityAward[] = $activityAward;
	}
} // end class ActivityAwardHistory
