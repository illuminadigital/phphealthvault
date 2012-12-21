<?php
namespace DLS\Healthvault\Entity\Type;

/**
 * @XmlEntity
 */
class HashFinalized {
	/**
	 * @XmlValue(type="string")
	 */
	protected $value = NULL;
	 
	public function setValue($value)
	{
		$this->value = $value;
	}
}