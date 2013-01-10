<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\types\String255;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="RelatedThing")
 */
class RelatedThing {
	/**
	 * Defines a loose relationship between instances of things within a record.
	 * This relationship is completely application defined and maintained. HealthVault does nothing to ensure that related things exist or have a relationship back to this thing. An example usage for related-things are to use an annotation thing instance to make medical annotations for another thing type or to relate a file instance (like an MRI) to problem instance.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="thing-id")
	 */
	protected $thingId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="version-stamp")
	 */
	protected $versionStamp;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="client-thing-id")
	 */
	protected $clientThingId;

	/**
	 * @XmlText	(type="string", name="relationship-type")
	 */
	protected $relationshipType;

	public function __construct($thingId = NULL, $versionStamp = NULL, $clientThingId = NULL, $relationshipType = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
		$this->versionStamp = ($versionStamp===NULL) ? NULL : $this->validateVersionStamp($versionStamp);
		$this->clientThingId = ($clientThingId===NULL) ? NULL : $this->validateClientThingId($clientThingId);
		$this->relationshipType = ($relationshipType===NULL) ? NULL : $this->validateRelationshipType($relationshipType);
	}

	public function getThingId() {
		if ($this->thingId===NULL) {
			$this->thingId = $this->createThingId();
		}
		return $this->thingId;
	}
	
	protected function createThingId() {
		return new Guid();
	}

	public function setThingId($thingId) {
		$this->thingId = $this->validateThingId($thingId);
	}

	protected function validateThingId($thingId) {
		if ( ! $thingId instanceof Guid ) {
			$thingId = new Guid ($thingId);
		}
	
		return $thingId;
	}

	public function getVersionStamp() {
		if ($this->versionStamp===NULL) {
			$this->versionStamp = $this->createVersionStamp();
		}
		return $this->versionStamp;
	}
	
	protected function createVersionStamp() {
		return new Guid();
	}

	public function setVersionStamp($versionStamp) {
		$this->versionStamp = $this->validateVersionStamp($versionStamp);
	}

	protected function validateVersionStamp($versionStamp) {
		if ( ! $versionStamp instanceof Guid ) {
			$versionStamp = new Guid ($versionStamp);
		}
	
		return $versionStamp;
	}

	public function getClientThingId() {
		if ($this->clientThingId===NULL) {
			$this->clientThingId = $this->createClientThingId();
		}
		return $this->clientThingId;
	}
	
	protected function createClientThingId() {
		return new String255();
	}

	public function setClientThingId($clientThingId) {
		$this->clientThingId = $this->validateClientThingId($clientThingId);
	}

	protected function validateClientThingId($clientThingId) {
		if ( ! $clientThingId instanceof String255 ) {
			$clientThingId = new String255 ($clientThingId);
		}
	
		return $clientThingId;
	}

	public function getRelationshipType() {
		if ($this->relationshipType===NULL) {
			$this->relationshipType = $this->createRelationshipType();
		}
		return $this->relationshipType;
	}
	
	protected function createRelationshipType() {
		return '';
	}

	public function setRelationshipType($relationshipType) {
		$this->relationshipType = $this->validateRelationshipType($relationshipType);
	}

	protected function validateRelationshipType($relationshipType) {
		if (!is_string($relationshipType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'relationshipType', 'string'));
		}
	
		return $relationshipType;
	}
} // end class RelatedThing
