<?php
namespace com\microsoft\wc\methods\SendInsecureMessage;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getRcptAddress($autoCreate = TRUE) {
		if ($this->rcptAddress===NULL && $autoCreate && ! isset($this->_overrides['rcptAddress']) ) {
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
		if ( $rcptAddress === FALSE ) {
			$this->_overrides['rcptAddress'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($rcptAddress) && ! is_null($rcptAddress) ) {
			$rcptAddress = array($rcptAddress);
		}

		unset ($this->_overrides['rcptAddress']);
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

	public function getRcptPerson($autoCreate = TRUE) {
		if ($this->rcptPerson===NULL && $autoCreate && ! isset($this->_overrides['rcptPerson']) ) {
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
		if ( $rcptPerson === FALSE ) {
			$this->_overrides['rcptPerson'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($rcptPerson) && ! is_null($rcptPerson) ) {
			$rcptPerson = array($rcptPerson);
		}

		unset ($this->_overrides['rcptPerson']);
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

	public function getRcptRecord($autoCreate = TRUE) {
		if ($this->rcptRecord===NULL && $autoCreate && ! isset($this->_overrides['rcptRecord']) ) {
			$this->rcptRecord = $this->createRcptRecord();
		}
		return $this->rcptRecord;
	}
	
	protected function createRcptRecord() {
		return new \com\microsoft\wc\types\RcptRecord();
	}

	public function setRcptRecord($rcptRecord) {
		$this->rcptRecord = $this->validateRcptRecord($rcptRecord);
	}

	protected function validateRcptRecord($rcptRecord) {
		if ( $rcptRecord === FALSE ) {
			$this->_overrides['rcptRecord'] = TRUE;
			return NULL;
		}

		if ( ! $rcptRecord instanceof \com\microsoft\wc\types\RcptRecord  && ! is_null($rcptRecord) ) {
			$rcptRecord = new \com\microsoft\wc\types\RcptRecord ($rcptRecord);
		}

		unset ($this->_overrides['rcptRecord']);
	
		return $rcptRecord;
	}

	public function getSubject($autoCreate = TRUE) {
		if ($this->subject===NULL && $autoCreate && ! isset($this->_overrides['subject']) ) {
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

	public function getTextBody($autoCreate = TRUE) {
		if ($this->textBody===NULL && $autoCreate && ! isset($this->_overrides['textBody']) ) {
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
		if ( ! is_string($textBody) && ! is_null($textBody) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'textBody', 'string'));
		}
	
		return $textBody;
	}

	public function getHtmlBody($autoCreate = TRUE) {
		if ($this->htmlBody===NULL && $autoCreate && ! isset($this->_overrides['htmlBody']) ) {
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
		if ( ! is_string($htmlBody) && ! is_null($htmlBody) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'htmlBody', 'string'));
		}
	
		return $htmlBody;
	}
} // end class Info
