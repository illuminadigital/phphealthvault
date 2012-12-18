<?php
namespace DLS\Healthvault\Entity\Request;

/**
 * @XmlEntity
 */
class MethodRequest {
	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\HMACFinalized", name="auth")
	 */
	protected $auth;

	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Type\Header")
	 */
	protected $header;

	/**
	 * @XmlElement(type="DLS\Healthvault\Entity\Request\InfoRequest")
	 */
	protected $info;
	
	
	public function setAuth(DLS\Healthvault\Entity\Type\HMACFinalized $auth)
	{
		$this->auth = $auth;
	}
	
	public function getAuth()
	{
		return $this->auth;
	}
	
	public function setHeader(DLS\Healthvault\Entity\Type\Header $header)
	{
		$this->header = $header;
	}
	
	public function getHeader()
	{
		return $this->header;
	}
	
	public function setInfo(DLS\Healthvault\Entity\Request\InfoRequest $info)
	{
		$this->info = $info;
	}
	
	public function getInfo()
	{
		return $this->info;
	}
}
