<?php
namespace com\microsoft\wc\thing\message;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.message", prefix="")
 * })
 * @XmlEntity	(xml="message")
 */
class Message extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * The Message type is used to store a multipart message, including message text and attachments.
	 * The message is stored in two forms.The "FullMessage" blob contains the message in the native format.The text of the message is available in the blobs denoted by the 'html-blob-name" and"text-blob-name" element. Any attachments to the message are described in the "attachments"element. The data stored is intended to be compatible with the SendMail Multipart MIME format
	 */

	const ID = '72dc49e1-1486-4634-b651-ef560ed051e5';
	const NAME = 'Message';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\message\MessageHeaderItem", collection="true", name="headers")
	 */
	protected $headers;

	/**
	 * @XmlText	(type="integer", name="size")
	 */
	protected $size;

	/**
	 * @XmlText	(type="string", name="summary")
	 */
	protected $summary;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="html-blob-name")
	 */
	protected $htmlBlobName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="text-blob-name")
	 */
	protected $textBlobName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\message\MessageAttachment", collection="true", name="attachments")
	 */
	protected $attachments;

	public function __construct($when = NULL, $headers = NULL, $size = NULL, $summary = NULL, $htmlBlobName = NULL, $textBlobName = NULL, $attachments = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->headers = ($headers===NULL) ? NULL : $this->validateHeaders($headers);
		$this->size = ($size===NULL) ? NULL : $this->validateSize($size);
		$this->summary = ($summary===NULL) ? NULL : $this->validateSummary($summary);
		$this->htmlBlobName = ($htmlBlobName===NULL) ? NULL : $this->validateHtmlBlobName($htmlBlobName);
		$this->textBlobName = ($textBlobName===NULL) ? NULL : $this->validateTextBlobName($textBlobName);
		$this->attachments = ($attachments===NULL) ? NULL : $this->validateAttachments($attachments);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getHeaders($autoCreate = TRUE) {
		if ($this->headers===NULL && $autoCreate && ! isset($this->_overrides['headers']) ) {
			$this->headers = $this->createHeaders();
		}
		return $this->headers;
	}
	
	protected function createHeaders() {
		return array();
	}

	public function setHeaders($headers) {
		$this->headers = $this->validateHeaders($headers);
	}

	protected function validateHeaders($headers) {
		if ( $headers === FALSE ) {
			$this->_overrides['headers'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($headers) && ! is_null($headers) ) {
			$headers = array($headers);
		}

		unset ($this->_overrides['headers']);
		$count = count($headers);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'headers', 0));
		}
		if ( ! empty($headers) ) {
			foreach ($headers as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\message\MessageHeaderItem )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'headers', 'message-header-item'));
				}
			}
		}
	
		return $headers;
	}

	public function addHeaders($headers) {
		$this->headers[] = $headers;
	}

	public function getSize($autoCreate = TRUE) {
		if ($this->size===NULL && $autoCreate && ! isset($this->_overrides['size']) ) {
			$this->size = $this->createSize();
		}
		return $this->size;
	}
	
	protected function createSize() {
		return NULL;
	}

	public function setSize($size) {
		$this->size = $this->validateSize($size);
	}

	protected function validateSize($size) {
		$isValid = FALSE;
		if ( is_integer($size) ) {
			$isValid = TRUE;
		}
		else if ( $size == ($castVar = (integer) $size) ) {
			$isValid = TRUE;
			$size = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'size', 'integer'));
		}
	
		return $size;
	}

	public function getSummary($autoCreate = TRUE) {
		if ($this->summary===NULL && $autoCreate && ! isset($this->_overrides['summary']) ) {
			$this->summary = $this->createSummary();
		}
		return $this->summary;
	}
	
	protected function createSummary() {
		return '';
	}

	public function setSummary($summary) {
		$this->summary = $this->validateSummary($summary);
	}

	protected function validateSummary($summary) {
		if ( ! is_string($summary) && ! is_null($summary) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'summary', 'string'));
		}
	
		return $summary;
	}

	public function getHtmlBlobName($autoCreate = TRUE) {
		if ($this->htmlBlobName===NULL && $autoCreate && ! isset($this->_overrides['htmlBlobName']) ) {
			$this->htmlBlobName = $this->createHtmlBlobName();
		}
		return $this->htmlBlobName;
	}
	
	protected function createHtmlBlobName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setHtmlBlobName($htmlBlobName) {
		$this->htmlBlobName = $this->validateHtmlBlobName($htmlBlobName);
	}

	protected function validateHtmlBlobName($htmlBlobName) {
		if ( $htmlBlobName === FALSE ) {
			$this->_overrides['htmlBlobName'] = TRUE;
			return NULL;
		}

		if ( ! $htmlBlobName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($htmlBlobName) ) {
			$htmlBlobName = new \com\microsoft\wc\types\Stringnznw ($htmlBlobName);
		}

		unset ($this->_overrides['htmlBlobName']);
	
		return $htmlBlobName;
	}

	public function getTextBlobName($autoCreate = TRUE) {
		if ($this->textBlobName===NULL && $autoCreate && ! isset($this->_overrides['textBlobName']) ) {
			$this->textBlobName = $this->createTextBlobName();
		}
		return $this->textBlobName;
	}
	
	protected function createTextBlobName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setTextBlobName($textBlobName) {
		$this->textBlobName = $this->validateTextBlobName($textBlobName);
	}

	protected function validateTextBlobName($textBlobName) {
		if ( $textBlobName === FALSE ) {
			$this->_overrides['textBlobName'] = TRUE;
			return NULL;
		}

		if ( ! $textBlobName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($textBlobName) ) {
			$textBlobName = new \com\microsoft\wc\types\Stringnznw ($textBlobName);
		}

		unset ($this->_overrides['textBlobName']);
	
		return $textBlobName;
	}

	public function getAttachments($autoCreate = TRUE) {
		if ($this->attachments===NULL && $autoCreate && ! isset($this->_overrides['attachments']) ) {
			$this->attachments = $this->createAttachments();
		}
		return $this->attachments;
	}
	
	protected function createAttachments() {
		return array();
	}

	public function setAttachments($attachments) {
		$this->attachments = $this->validateAttachments($attachments);
	}

	protected function validateAttachments($attachments) {
		if ( $attachments === FALSE ) {
			$this->_overrides['attachments'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($attachments) && ! is_null($attachments) ) {
			$attachments = array($attachments);
		}

		unset ($this->_overrides['attachments']);
		$count = count($attachments);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'attachments', 0));
		}
		if ( ! empty($attachments) ) {
			foreach ($attachments as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\message\MessageAttachment )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'attachments', 'message-attachment'));
				}
			}
		}
	
		return $attachments;
	}

	public function addAttachments($attachments) {
		$this->attachments[] = $attachments;
	}
} // end class Message
