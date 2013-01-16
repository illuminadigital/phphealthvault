<?php
namespace com\microsoft\wc\methods\GetValidGroupMembership;



/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="application-id")
	 */
	protected $applicationId;

	public function __construct($applicationId = NULL) {
		$this->applicationId = ($applicationId===NULL) ? NULL : $this->validateApplicationId($applicationId);
	}

	public function getApplicationId() {
		if ($this->applicationId===NULL) {
			$this->applicationId = $this->createApplicationId();
		}
		return $this->applicationId;
	}
	
	protected function createApplicationId() {
		return array();
	}

	public function setApplicationId($applicationId) {
		$this->applicationId = $this->validateApplicationId($applicationId);
	}

	protected function validateApplicationId($applicationId) {
		if ( ! $applicationId instanceof \com\microsoft\wc\types\Guid  && ! is_null($applicationId) ) {
			$applicationId = new \com\microsoft\wc\types\Guid ($applicationId);
		}
		$count = count($applicationId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'applicationId', 0));
		}
		foreach ($applicationId as $entry) {
			if (!($entry instanceof Guid)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'applicationId', 'guid'));
			}
		}
	
		return $applicationId;
	}

	public function addApplicationId($applicationId) {
		$this->applicationId[] = $applicationId;
	}
} // end class Info
