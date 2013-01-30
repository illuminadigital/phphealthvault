<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="EmailListType")
 */
class EmailListType {
	/**
	 * A list of e-mail addresses associated with an individual.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Email", collection="true", name="Email")
	 */
	protected $email;

	public function __construct($email = NULL) {
		$this->email = ($email===NULL) ? NULL : $this->validateEmail($email);
	}

	public function getEmail() {
		if ($this->email===NULL) {
			$this->email = $this->createEmail();
		}
		return $this->email;
	}
	
	protected function createEmail() {
		return array();
	}

	public function setEmail($email) {
		$this->email = $this->validateEmail($email);
	}

	protected function validateEmail($email) {
		if ( ! is_array ($email) ) {
			$email = array($email);
		}
		$count = count($email);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'email', 1));
		}
		foreach ($email as $entry) {
			if (!($entry instanceof Email)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'email', 'Email'));
			}
		}
	
		return $email;
	}

	public function addEmail($email) {
		$this->email[] = $email;
	}
} // end class EmailListType
