<?php
namespace DLS\Healthvault\Entity\Type;

/**
 * @XmlEntity()
 */
class Header {

	/**
	 * @XmlText(type="string", required=true)
	 */
	protected $method;
	
	/**
	 * @XmlText(type="integer", required=true, name="method-version")
	 */
	protected $methodVersion;
	
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\Guid", name="target-person-id") 
	 */
	protected $targetPerson;
	
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\Guid", name="record-id")
	 */
	protected $recordId;
	
	/* Choice: 1 off */
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\Guid", name="app-id") 
	 */
	protected $applicationId;
	
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\AuthenticatedSessionInfo", name="auth-session")
	 */
	protected $authSession;
	/* /Choice */
	
	/**
	 * Should be ISO639-1
	 * @XmlText(type="string") 
	 */
	protected $language;
	
	/**
	 * Should be ISO3166
	 * @XmlText(type="string")
	 */
	protected $country;
	
	/**
	 * @XmlText(type="string", name="final-xsl")
	 */
	protected $finalXsl;
	
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\DateTime", name="msg-time")
	 */
	protected $messageTime;
	
	/**
	 * @XmlText(type="integer", name="msg-ttl")
	 */
	protected $messageTimeToLive;
	
	/**
	 * Should be Version
	 * @XmlText(type="string")
	 */
	protected $version;
	
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\HashFinalized", name="info-hash")
	 */
	protected $hash;
	
	
	public function setMethod($method)
	{
		$this->method = $method;
	}
	
	public function setMethodVersion($version)
	{
		$this->methodVersion = $version;
	}
	
	public function setVersion($version)
	{
		$this->version = $version;
	}
	
	public function getHash()
	{
		if (empty($this->hash))
		{
			$this->hash = new HashFinalized();
		}
		
		return $this->hash;
	}
}
