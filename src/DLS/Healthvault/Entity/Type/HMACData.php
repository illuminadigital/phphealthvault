<?php
namespace DLS\Healthvault\Entity\Type;

/**
 * @XmlEntity()
 */
class HMACData {
	/**
	 * @XmlAttribute(type="string", name="algName")
	 */
	protected $algorithmName;
	
	/**
	 * @XmlValue(type="string")
	 */
	protected $value;
	
	public function setValue($hmacData)
	{
		$this->value = $hmacData;
	}
	
	public function getValue()
	{
		return $this->value;
	}

	public function setAlgorithmName($algorithm)
	{
		$this->algorithmName = $algorithm;
	}
	
	public function getAlgorithmName()
	{
		return $this->algorithmName;
	}
}
