<?php
namespace com\microsoft\wc\thing\group_membership;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.group-membership", prefix="")
 * })
 * @XmlEntity	(xml="group-membership")
 */
class GroupMembership extends \com\microsoft\wc\thing\Thing {
	/**
	 * Memberships of the record owner.
	 */

	const ID = '66ac44c7-1d60-4e95-bb5b-d21490e91057';
	const NAME = 'Group Membership';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\GroupMembershipType", collection="true", name="membership")
	 */
	protected $membership;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="expires")
	 */
	protected $expires;

	public function __construct($membership = NULL, $expires = NULL) {
		$this->membership = ($membership===NULL) ? NULL : $this->validateMembership($membership);
		$this->expires = ($expires===NULL) ? NULL : $this->validateExpires($expires);
	}

	public function getMembership() {
		if ($this->membership===NULL) {
			$this->membership = $this->createMembership();
		}
		return $this->membership;
	}
	
	protected function createMembership() {
		return array();
	}

	public function setMembership($membership) {
		$this->membership = $this->validateMembership($membership);
	}

	protected function validateMembership($membership) {
		if ( ! $membership instanceof \com\microsoft\wc\thing\types\GroupMembershipType  && ! is_null($membership) ) {
			$membership = new \com\microsoft\wc\thing\types\GroupMembershipType ($membership);
		}
		$count = count($membership);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'membership', 0));
		}
		foreach ($membership as $entry) {
			if (!($entry instanceof GroupMembershipType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'membership', 'group-membership-type'));
			}
		}
	
		return $membership;
	}

	public function addMembership($membership) {
		$this->membership[] = $membership;
	}

	public function getExpires() {
		if ($this->expires===NULL) {
			$this->expires = $this->createExpires();
		}
		return $this->expires;
	}
	
	protected function createExpires() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setExpires($expires) {
		$this->expires = $this->validateExpires($expires);
	}

	protected function validateExpires($expires) {
		if ( ! $expires instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($expires) ) {
			$expires = new \com\microsoft\wc\dates\DateTime ($expires);
		}
	
		return $expires;
	}
} // end class GroupMembership
