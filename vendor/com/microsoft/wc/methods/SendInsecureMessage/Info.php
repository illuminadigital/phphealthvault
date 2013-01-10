<?php
namespace com\microsoft\wc\methods\SendInsecureMessage;

use com\microsoft\wc\types\RcptRecord;
use com\microsoft\wc\types\RcptAddress;
use com\microsoft\wc\types\RcptPerson;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SendInsecureMessage", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\RcptAddress", collection="true", name="rcpt-address")
	 */
	protected $rcptAddress;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\RcptPerson", collection="true", name="rcpt-person")
	 */
	protected $rcptPerson;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\RcptRecord", name="rcpt-record")
	 */
	protected $rcptRecord;

	/**
	 * @XmlText	(type="string", name="subject")
	 */
	protected $subject;

	/**
	 * @XmlText	(type="string", name="text-body")
	 */
	protected $textBody;

	/**
	 * @XmlText	(type="string", name="html-body")
	 */
	protected $htmlBody;

	public function __construct($rcptAddress = NULL, $rcptPerson = NULL, $rcptRecord = NULL, $subject = NULL, $textBody = NULL, $htmlBody = NULL) {
		$this->rcptAddress = ($rcptAddress===NULL) ? NULL : $this->validateRcptAddress($rcptAddress);
		$this->rcptPerson = ($rcptPerson===NULL) ? NULL : $this->validateRcptPerson($rcptPerson);
		$this->rcptRecord = ($rcptRecord===NULL) ? NULL : $this->validateRcptRecord($rcptRecord);
		$this->subject = ($subject===NULL) ? NULL : $this->validateSubject($subject);
		$this->textBody = ($textBody===NULL) ? NULL : $this->validateTextBody($textBody);
		$this->htmlBody = ($htmlBody===NULL) ? NULL : $this->validateHtmlBody($htmlBody);
	}

	public function getRcptAddress() {
		if ($this->rcptAddress===NULL) {
			$this->rcptAddress = $this->createRcptAddress();
		}
		return $this->rcptAddress;
	}
	
	protected function createRcptAddress() {
		return array();
	}

	public function setRcptAddress($rcptAddress) {
		$this->rcptAddress = $this->validateRcptAddress($rcptAddress);
	}

	protected function validateRcptAddress($rcptAddress) {
		if ( ! $rcptAddress instanceof RcptAddress ) {
			$rcptAddress = new RcptAddress ($rcptAddress);
		}
		$count = count($rcptAddress);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'rcptAddress', 0));
		}
		foreach ($rcptAddress as $entry) {
			if (!($entry instanceof RcptAddress)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'rcptAddress', 'RcptAddress'));
			}
		}
	
		return $rcptAddress;
	}

	public function addRcptAddress($rcptAddress) {
		$this->rcptAddress[] = $rcptAddress;
	}

	public function getRcptPerson() {
		if ($this->rcptPerson===NULL) {
			$this->rcptPerson = $this->createRcptPerson();
		}
		return $this->rcptPerson;
	}
	
	protected function createRcptPerson() {
		return array();
	}

	public function setRcptPerson($rcptPerson) {
		$this->rcptPerson = $this->validateRcptPerson($rcptPerson);
	}

	protected function validateRcptPerson($rcptPerson) {
		if ( ! $rcptPerson instanceof RcptPerson ) {
			$rcptPerson = new RcptPerson ($rcptPerson);
		}
		$count = count($rcptPerson);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'rcptPerson', 0));
		}
		foreach ($rcptPerson as $entry) {
			if (!($entry instanceof RcptPerson)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'rcptPerson', 'RcptPerson'));
			}
		}
	
		return $rcptPerson;
	}

	public function addRcptPerson($rcptPerson) {
		$this->rcptPerson[] = $rcptPerson;
	}

	public function getRcptRecord() {
		if ($this->rcptRecord===NULL) {
			$this->rcptRecord = $this->createRcptRecord();
		}
		return $this->rcptRecord;
	}
	
	protected function createRcptRecord() {
		return new RcptRecord();
	}

	public function setRcptRecord($rcptRecord) {
		$this->rcptRecord = $this->validateRcptRecord($rcptRecord);
	}

	protected function validateRcptRecord($rcptRecord) {
		if ( ! $rcptRecord instanceof RcptRecord ) {
			$rcptRecord = new RcptRecord ($rcptRecord);
		}
	
		return $rcptRecord;
	}

	public function getSubject() {
		if ($this->subject===NULL) {
			$this->subject = $this->createSubject();
		}
		return $this->subject;
	}
	
	protected function createSubject() {
		return '';
	}

	public function setSubject($subject) {
		$this->subject = $this->validateSubject($subject);
	}

	protected function validateSubject($subject) {
		if (!is_string($subject)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'subject', 'string'));
		}
	
		return $subject;
	}

	public function getTextBody() {
		if ($this->textBody===NULL) {
			$this->textBody = $this->createTextBody();
		}
		return $this->textBody;
	}
	
	protected function createTextBody() {
		return '';
	}

	public function setTextBody($textBody) {
		$this->textBody = $this->validateTextBody($textBody);
	}

	protected function validateTextBody($textBody) {
		if (!is_string($textBody)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'textBody', 'string'));
		}
	
		return $textBody;
	}

	public function getHtmlBody() {
		if ($this->htmlBody===NULL) {
			$this->htmlBody = $this->createHtmlBody();
		}
		return $this->htmlBody;
	}
	
	protected function createHtmlBody() {
		return '';
	}

	public function setHtmlBody($htmlBody) {
		$this->htmlBody = $this->validateHtmlBody($htmlBody);
	}

	protected function validateHtmlBody($htmlBody) {
		if (!is_string($htmlBody)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'htmlBody', 'string'));
		}
	
		return $htmlBody;
	}
} // end class Info
