<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="PersonInfo")
 */
class PersonInfo {
	/**
	 * Basic information about a person.
	 * Basic information about a person including their name, login name, email address, application specific settings, record selected for use by the application, and other records that are the person authorized the application to use.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="person-id")
	 */
	protected $personId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\AppSettings", name="app-settings")
	 */
	protected $appSettings;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="selected-record-id")
	 */
	protected $selectedRecordId;

	/**
	 * @XmlText	(type="boolean", name="more-records")
	 */
	protected $moreRecords;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Record", collection="true", name="record")
	 */
	protected $record;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Groups", name="groups")
	 */
	protected $groups;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Culture", name="preferred-culture")
	 */
	protected $preferredCulture;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Culture", name="preferred-uiculture")
	 */
	protected $preferredUiculture;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Location", name="location")
	 */
	protected $location;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\EffectiveRecordPermissionList", name="effective-record-permission-list")
	 */
	protected $effectiveRecordPermissionList;

	public function __construct($personId = NULL, $name = NULL, $appSettings = NULL, $selectedRecordId = NULL, $moreRecords = NULL, $record = NULL, $groups = NULL, $preferredCulture = NULL, $preferredUiculture = NULL, $location = NULL, $effectiveRecordPermissionList = NULL) {
		$this->personId = ($personId===NULL) ? NULL : $this->validatePersonId($personId);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->appSettings = ($appSettings===NULL) ? NULL : $this->validateAppSettings($appSettings);
		$this->selectedRecordId = ($selectedRecordId===NULL) ? NULL : $this->validateSelectedRecordId($selectedRecordId);
		$this->moreRecords = ($moreRecords===NULL) ? NULL : $this->validateMoreRecords($moreRecords);
		$this->record = ($record===NULL) ? NULL : $this->validateRecord($record);
		$this->groups = ($groups===NULL) ? NULL : $this->validateGroups($groups);
		$this->preferredCulture = ($preferredCulture===NULL) ? NULL : $this->validatePreferredCulture($preferredCulture);
		$this->preferredUiculture = ($preferredUiculture===NULL) ? NULL : $this->validatePreferredUiculture($preferredUiculture);
		$this->location = ($location===NULL) ? NULL : $this->validateLocation($location);
		$this->effectiveRecordPermissionList = ($effectiveRecordPermissionList===NULL) ? NULL : $this->validateEffectiveRecordPermissionList($effectiveRecordPermissionList);
	}

	public function getPersonId($autoCreate = TRUE) {
		if ($this->personId===NULL && $autoCreate && ! isset($this->_overrides['personId']) ) {
			$this->personId = $this->createPersonId();
		}
		return $this->personId;
	}
	
	protected function createPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setPersonId($personId) {
		$this->personId = $this->validatePersonId($personId);
	}

	protected function validatePersonId($personId) {
		if ( ! $personId instanceof \com\microsoft\wc\types\Guid ) {
			$personId = new \com\microsoft\wc\types\Guid ($personId);
		}
	
		return $personId;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\String255 ) {
			$name = new \com\microsoft\wc\types\String255 ($name);
		}
	
		return $name;
	}

	public function getAppSettings($autoCreate = TRUE) {
		if ($this->appSettings===NULL && $autoCreate && ! isset($this->_overrides['appSettings']) ) {
			$this->appSettings = $this->createAppSettings();
		}
		return $this->appSettings;
	}
	
	protected function createAppSettings() {
		return new \com\microsoft\wc\types\AppSettings();
	}

	public function setAppSettings($appSettings) {
		$this->appSettings = $this->validateAppSettings($appSettings);
	}

	protected function validateAppSettings($appSettings) {
		if ( $appSettings === FALSE ) {
			$this->_overrides['appSettings'] = TRUE;
			return NULL;
		}

		if ( ! $appSettings instanceof \com\microsoft\wc\types\AppSettings  && ! is_null($appSettings) ) {
			$appSettings = new \com\microsoft\wc\types\AppSettings ($appSettings);
		}

		unset ($this->_overrides['appSettings']);
	
		return $appSettings;
	}

	public function getSelectedRecordId($autoCreate = TRUE) {
		if ($this->selectedRecordId===NULL && $autoCreate && ! isset($this->_overrides['selectedRecordId']) ) {
			$this->selectedRecordId = $this->createSelectedRecordId();
		}
		return $this->selectedRecordId;
	}
	
	protected function createSelectedRecordId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setSelectedRecordId($selectedRecordId) {
		$this->selectedRecordId = $this->validateSelectedRecordId($selectedRecordId);
	}

	protected function validateSelectedRecordId($selectedRecordId) {
		if ( $selectedRecordId === FALSE ) {
			$this->_overrides['selectedRecordId'] = TRUE;
			return NULL;
		}

		if ( ! $selectedRecordId instanceof \com\microsoft\wc\types\Guid  && ! is_null($selectedRecordId) ) {
			$selectedRecordId = new \com\microsoft\wc\types\Guid ($selectedRecordId);
		}

		unset ($this->_overrides['selectedRecordId']);
	
		return $selectedRecordId;
	}

	public function getMoreRecords($autoCreate = TRUE) {
		if ($this->moreRecords===NULL && $autoCreate && ! isset($this->_overrides['moreRecords']) ) {
			$this->moreRecords = $this->createMoreRecords();
		}
		return $this->moreRecords;
	}
	
	protected function createMoreRecords() {
		return FALSE;
	}

	public function setMoreRecords($moreRecords) {
		$this->moreRecords = $this->validateMoreRecords($moreRecords);
	}

	protected function validateMoreRecords($moreRecords) {
		if ( ! is_bool($moreRecords) && ! is_null($moreRecords) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'moreRecords', 'boolean'));
		}
	
		return $moreRecords;
	}

	public function getRecord($autoCreate = TRUE) {
		if ($this->record===NULL && $autoCreate && ! isset($this->_overrides['record']) ) {
			$this->record = $this->createRecord();
		}
		return $this->record;
	}
	
	protected function createRecord() {
		return array();
	}

	public function setRecord($record) {
		$this->record = $this->validateRecord($record);
	}

	protected function validateRecord($record) {
		if ( $record === FALSE ) {
			$this->_overrides['record'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($record) && ! is_null($record) ) {
			$record = array($record);
		}

		unset ($this->_overrides['record']);
		$count = count($record);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'record', 0));
		}
		if ( ! empty($record) ) {
			foreach ($record as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\Record )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'record', 'Record'));
				}
			}
		}
	
		return $record;
	}

	public function addRecord($record) {
		$this->record[] = $record;
	}

	public function getGroups($autoCreate = TRUE) {
		if ($this->groups===NULL && $autoCreate && ! isset($this->_overrides['groups']) ) {
			$this->groups = $this->createGroups();
		}
		return $this->groups;
	}
	
	protected function createGroups() {
		return new \com\microsoft\wc\types\Groups();
	}

	public function setGroups($groups) {
		$this->groups = $this->validateGroups($groups);
	}

	protected function validateGroups($groups) {
		if ( $groups === FALSE ) {
			$this->_overrides['groups'] = TRUE;
			return NULL;
		}

		if ( ! $groups instanceof \com\microsoft\wc\types\Groups  && ! is_null($groups) ) {
			$groups = new \com\microsoft\wc\types\Groups ($groups);
		}

		unset ($this->_overrides['groups']);
	
		return $groups;
	}

	public function getPreferredCulture($autoCreate = TRUE) {
		if ($this->preferredCulture===NULL && $autoCreate && ! isset($this->_overrides['preferredCulture']) ) {
			$this->preferredCulture = $this->createPreferredCulture();
		}
		return $this->preferredCulture;
	}
	
	protected function createPreferredCulture() {
		return new \com\microsoft\wc\types\Culture();
	}

	public function setPreferredCulture($preferredCulture) {
		$this->preferredCulture = $this->validatePreferredCulture($preferredCulture);
	}

	protected function validatePreferredCulture($preferredCulture) {
		if ( $preferredCulture === FALSE ) {
			$this->_overrides['preferredCulture'] = TRUE;
			return NULL;
		}

		if ( ! $preferredCulture instanceof \com\microsoft\wc\types\Culture  && ! is_null($preferredCulture) ) {
			$preferredCulture = new \com\microsoft\wc\types\Culture ($preferredCulture);
		}

		unset ($this->_overrides['preferredCulture']);
	
		return $preferredCulture;
	}

	public function getPreferredUiculture($autoCreate = TRUE) {
		if ($this->preferredUiculture===NULL && $autoCreate && ! isset($this->_overrides['preferredUiculture']) ) {
			$this->preferredUiculture = $this->createPreferredUiculture();
		}
		return $this->preferredUiculture;
	}
	
	protected function createPreferredUiculture() {
		return new \com\microsoft\wc\types\Culture();
	}

	public function setPreferredUiculture($preferredUiculture) {
		$this->preferredUiculture = $this->validatePreferredUiculture($preferredUiculture);
	}

	protected function validatePreferredUiculture($preferredUiculture) {
		if ( $preferredUiculture === FALSE ) {
			$this->_overrides['preferredUiculture'] = TRUE;
			return NULL;
		}

		if ( ! $preferredUiculture instanceof \com\microsoft\wc\types\Culture  && ! is_null($preferredUiculture) ) {
			$preferredUiculture = new \com\microsoft\wc\types\Culture ($preferredUiculture);
		}

		unset ($this->_overrides['preferredUiculture']);
	
		return $preferredUiculture;
	}

	public function getLocation($autoCreate = TRUE) {
		if ($this->location===NULL && $autoCreate && ! isset($this->_overrides['location']) ) {
			$this->location = $this->createLocation();
		}
		return $this->location;
	}
	
	protected function createLocation() {
		return new \com\microsoft\wc\types\Location();
	}

	public function setLocation($location) {
		$this->location = $this->validateLocation($location);
	}

	protected function validateLocation($location) {
		if ( $location === FALSE ) {
			$this->_overrides['location'] = TRUE;
			return NULL;
		}

		if ( ! $location instanceof \com\microsoft\wc\types\Location  && ! is_null($location) ) {
			$location = new \com\microsoft\wc\types\Location ($location);
		}

		unset ($this->_overrides['location']);
	
		return $location;
	}

	public function getEffectiveRecordPermissionList($autoCreate = TRUE) {
		if ($this->effectiveRecordPermissionList===NULL && $autoCreate && ! isset($this->_overrides['effectiveRecordPermissionList']) ) {
			$this->effectiveRecordPermissionList = $this->createEffectiveRecordPermissionList();
		}
		return $this->effectiveRecordPermissionList;
	}
	
	protected function createEffectiveRecordPermissionList() {
		return new \com\microsoft\wc\types\EffectiveRecordPermissionList();
	}

	public function setEffectiveRecordPermissionList($effectiveRecordPermissionList) {
		$this->effectiveRecordPermissionList = $this->validateEffectiveRecordPermissionList($effectiveRecordPermissionList);
	}

	protected function validateEffectiveRecordPermissionList($effectiveRecordPermissionList) {
		if ( $effectiveRecordPermissionList === FALSE ) {
			$this->_overrides['effectiveRecordPermissionList'] = TRUE;
			return NULL;
		}

		if ( ! $effectiveRecordPermissionList instanceof \com\microsoft\wc\types\EffectiveRecordPermissionList  && ! is_null($effectiveRecordPermissionList) ) {
			$effectiveRecordPermissionList = new \com\microsoft\wc\types\EffectiveRecordPermissionList ($effectiveRecordPermissionList);
		}

		unset ($this->_overrides['effectiveRecordPermissionList']);
	
		return $effectiveRecordPermissionList;
	}
} // end class PersonInfo
