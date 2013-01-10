<?php
namespace com\microsoft\wc\methods\SendInsecureMessageFromApplication;

use com\microsoft\wc\types\String255;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SendInsecureMessageFromApplication", prefix="")
 * })
 * @XmlEntity	(xml="FromMailbox")
 */
class FromMailbox {
	/**
	 * This specifies a mailbox within the application that is sending the message.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="mailbox-name")
	 */
	protected $mailboxName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="name")
	 */
	protected $name;

	public function __construct($mailboxName = NULL, $name = NULL) {
		$this->mailboxName = ($mailboxName===NULL) ? NULL : $this->validateMailboxName($mailboxName);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getMailboxName() {
		if ($this->mailboxName===NULL) {
			$this->mailboxName = $this->createMailboxName();
		}
		return $this->mailboxName;
	}
	
	protected function createMailboxName() {
		return new String255();
	}

	public function setMailboxName($mailboxName) {
		$this->mailboxName = $this->validateMailboxName($mailboxName);
	}

	protected function validateMailboxName($mailboxName) {
		if ( ! $mailboxName instanceof String255 ) {
			$mailboxName = new String255 ($mailboxName);
		}
	
		return $mailboxName;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new String255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof String255 ) {
			$name = new String255 ($name);
		}
	
		return $name;
	}
} // end class FromMailbox
