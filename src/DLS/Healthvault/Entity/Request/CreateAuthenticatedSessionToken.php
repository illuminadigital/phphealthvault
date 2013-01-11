<?php
namespace DLS\Healthvault\Entity\Request;

use DLS\Healthvault\Entity\Type\AuthTokenInfo;

/**
 * @XmlNamespace(url="urn:com.microsoft.wc.methods.CreateAuthenticatedSessionToken")
 */
class CreateAuthenticatedSessionToken {
	/**
	 * XmlElement(type="DLS\Healthvault\Entity\Type\AuthTokenInfo", name="auth-info")
	 */
	protected $authInfo;
	
	public function setAuthInfo($authTokenInfo)
	{
		$this->authInfo = $authTokenInfo;
	}
	
	public function getAuthInfo()
	{
		if ( ! isset($this->authInfo) )
		{
			$this->authInfo = new AuthTokenInfo();
		}
		
		return $this->authInfo;
	}
}
