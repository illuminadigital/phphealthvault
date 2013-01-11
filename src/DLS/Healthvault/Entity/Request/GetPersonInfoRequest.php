<?php
namespace DLS\Healthvault\Entity\Request;

/**
 * @XmlEntity
 */
class GetPersonInfoRequest extends InfoRequest {
	/**
	 * Whether or not to include the groups that the person is a member of
	 * 
	 * @XmlText(type="boolean", name="group-membership")
	 */
	protected $groupMembership = NULL;


	public function setGroupMembership($state)
	{
		$this->groupMembership = (bool) $state;
		
		return $this;
	}
	
	public function getGroupMembership()
	{
		if (isset($this->groupMembership)) {
			return $this->groupMembership;
		}
		// else
		return FALSE;
	}
}
