<?php
namespace DLS\Healthvault\Entity\Type;

/**
 * @XmlEntity
 */
class DateTime {
	/*
	 * @XmlText(type=datetime)
	 */
	protected $value = NULL;
	
	public function setValue($value)
	{
		$this->value = $value;
	}
	
	public function getValue()
	{
		return $this->value;
	}
	
	public function __toString()
	{
		return $this->getValue();
	}
}