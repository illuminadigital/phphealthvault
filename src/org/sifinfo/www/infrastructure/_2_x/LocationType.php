<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="LocationType")
 */
class LocationType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Token", name="LocationName")
	 */
	protected $locationName;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocationRefId", name="LocationRefId")
	 */
	protected $locationRefId;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($locationName = NULL, $locationRefId = NULL, $type = NULL) {
		$this->locationName = ($locationName===NULL) ? NULL : $this->validateLocationName($locationName);
		$this->locationRefId = ($locationRefId===NULL) ? NULL : $this->validateLocationRefId($locationRefId);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
	}

	public function getLocationName() {
		if ($this->locationName===NULL) {
			$this->locationName = $this->createLocationName();
		}
		return $this->locationName;
	}
	
	protected function createLocationName() {
		return NULL;
	}

	public function setLocationName($locationName) {
		$this->locationName = $this->validateLocationName($locationName);
	}

	protected function validateLocationName($locationName) {
		if ( ! is_token($locationName) && ! is_null($locationName) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'locationName', 'token'));
		}
	
		return $locationName;
	}

	public function getLocationRefId() {
		if ($this->locationRefId===NULL) {
			$this->locationRefId = $this->createLocationRefId();
		}
		return $this->locationRefId;
	}
	
	protected function createLocationRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\LocationRefId();
	}

	public function setLocationRefId($locationRefId) {
		$this->locationRefId = $this->validateLocationRefId($locationRefId);
	}

	protected function validateLocationRefId($locationRefId) {
		if ( ! $locationRefId instanceof \org\sifinfo\www\infrastructure\_2_x\LocationRefId  && ! is_null($locationRefId) ) {
			$locationRefId = new \org\sifinfo\www\infrastructure\_2_x\LocationRefId ($locationRefId);
		}
	
		return $locationRefId;
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! is_string($type) && ! is_null($type) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}
} // end class LocationType
