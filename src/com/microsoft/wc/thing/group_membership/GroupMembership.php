<?php
namespace com\microsoft\wc\thing\group_membership;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.group-membership", prefix="")
 * })
 * @XmlEntity	(xml="group-membership")
 */
class GroupMembership extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Memberships of the record owner.
	 */

	const ID = '66ac44c7-1d60-4e95-bb5b-d21490e91057';
	const NAME = 'Group Membership';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getMembership($autoCreate = TRUE) {
		if ($this->membership===NULL && $autoCreate && ! isset($this->_overrides['membership']) ) {
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
		if ( $membership === FALSE ) {
			$this->_overrides['membership'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($membership) && ! is_null($membership) ) {
			$membership = array($membership);
		}

		unset ($this->_overrides['membership']);
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

	public function getExpires($autoCreate = TRUE) {
		if ($this->expires===NULL && $autoCreate && ! isset($this->_overrides['expires']) ) {
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
		if ( $expires === FALSE ) {
			$this->_overrides['expires'] = TRUE;
			return NULL;
		}

		if ( ! $expires instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($expires) ) {
			$expires = new \com\microsoft\wc\dates\DateTime ($expires);
		}

		unset ($this->_overrides['expires']);
	
		return $expires;
	}
} // end class GroupMembership
