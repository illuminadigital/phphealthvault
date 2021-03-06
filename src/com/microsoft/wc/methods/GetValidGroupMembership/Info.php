<?php
namespace com\microsoft\wc\methods\GetValidGroupMembership;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetValidGroupMembership", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="application-id")
	 */
	protected $applicationId;

	public function __construct($applicationId = NULL) {
		$this->applicationId = ($applicationId===NULL) ? NULL : $this->validateApplicationId($applicationId);
	}

	public function getApplicationId($autoCreate = TRUE) {
		if ($this->applicationId===NULL && $autoCreate && ! isset($this->_overrides['applicationId']) ) {
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
		if ( $applicationId === FALSE ) {
			$this->_overrides['applicationId'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($applicationId) && ! is_null($applicationId) ) {
			$applicationId = array($applicationId);
		}

		unset ($this->_overrides['applicationId']);
		$count = count($applicationId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'applicationId', 0));
		}
		if ( ! empty($applicationId) ) {
			foreach ($applicationId as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\Guid )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'applicationId', 'guid'));
				}
			}
		}
	
		return $applicationId;
	}

	public function addApplicationId($applicationId) {
		$this->applicationId[] = $applicationId;
	}
} // end class Info
