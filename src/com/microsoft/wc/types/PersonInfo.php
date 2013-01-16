<?php
namespace com\microsoft\wc\types;



/**
 * @XmlEntity	(xml="PersonInfo")
 */
class PersonInfo {
	/**
	 * Basic information about a person.
	 * Basic information about a person including their name, login name, email address, application specific settings, record selected for use by the application, and other records that are the person authorized the application to use.
	 */

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

	public function __construct($personId = NULL, $name = NULL, $appSettings = NULL, $selectedRecordId = NULL, $moreRecords = NULL, $record = NULL, $groups = NULL, $preferredCulture = NULL, $preferredUiculture = NULL, $location = NULL) {
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
	}

	public function getPersonId() {
		if ($this->personId===NULL) {
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

	public function getName() {
		if ($this->name===NULL) {
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

	public function getAppSettings() {
		if ($this->appSettings===NULL) {
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
		if ( ! $appSettings instanceof \com\microsoft\wc\types\AppSettings  && ! is_null($appSettings) ) {
			$appSettings = new \com\microsoft\wc\types\AppSettings ($appSettings);
		}
	
		return $appSettings;
	}

	public function getSelectedRecordId() {
		if ($this->selectedRecordId===NULL) {
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
		if ( ! $selectedRecordId instanceof \com\microsoft\wc\types\Guid  && ! is_null($selectedRecordId) ) {
			$selectedRecordId = new \com\microsoft\wc\types\Guid ($selectedRecordId);
		}
	
		return $selectedRecordId;
	}

	public function getMoreRecords() {
		if ($this->moreRecords===NULL) {
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

	public function getRecord() {
		if ($this->record===NULL) {
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
		if ( ! $record instanceof \com\microsoft\wc\types\Record  && ! is_null($record) ) {
			$record = new \com\microsoft\wc\types\Record ($record);
		}
		$count = count($record);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'record', 0));
		}
		foreach ($record as $entry) {
			if (!($entry instanceof Record)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'record', 'Record'));
			}
		}
	
		return $record;
	}

	public function addRecord($record) {
		$this->record[] = $record;
	}

	public function getGroups() {
		if ($this->groups===NULL) {
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
		if ( ! $groups instanceof \com\microsoft\wc\types\Groups  && ! is_null($groups) ) {
			$groups = new \com\microsoft\wc\types\Groups ($groups);
		}
	
		return $groups;
	}

	public function getPreferredCulture() {
		if ($this->preferredCulture===NULL) {
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
		if ( ! $preferredCulture instanceof \com\microsoft\wc\types\Culture  && ! is_null($preferredCulture) ) {
			$preferredCulture = new \com\microsoft\wc\types\Culture ($preferredCulture);
		}
	
		return $preferredCulture;
	}

	public function getPreferredUiculture() {
		if ($this->preferredUiculture===NULL) {
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
		if ( ! $preferredUiculture instanceof \com\microsoft\wc\types\Culture  && ! is_null($preferredUiculture) ) {
			$preferredUiculture = new \com\microsoft\wc\types\Culture ($preferredUiculture);
		}
	
		return $preferredUiculture;
	}

	public function getLocation() {
		if ($this->location===NULL) {
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
		if ( ! $location instanceof \com\microsoft\wc\types\Location  && ! is_null($location) ) {
			$location = new \com\microsoft\wc\types\Location ($location);
		}
	
		return $location;
	}
} // end class PersonInfo
