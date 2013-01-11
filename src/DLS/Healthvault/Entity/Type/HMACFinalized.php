<?php
namespace DLS\Healthvault\Entity\Type;

/**
 * @XmlEntity
 */
class HMACFinalized {
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\HMACData", name="hmac-data")
	 */
	protected $hmacData;
	
	public function getHmacData()
	{
		if ( empty($this->hmacData) )
		{
			$this->hmacData = new HMACData();
		}
		
		return $this->hmacData;
	}
}