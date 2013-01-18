<?php
namespace com\microsoft\wc\thing\message;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.message", prefix="")
 * })
 * @XmlEntity	(xml="message-attachment")
 */
class MessageAttachment {
	/**
	 * An attachment to the message.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="blob-name")
	 */
	protected $blobName;

	/**
	 * @XmlText	(type="boolean", name="inline-display")
	 */
	protected $inlineDisplay;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="content-id")
	 */
	protected $contentId;

	public function __construct($name = NULL, $blobName = NULL, $inlineDisplay = NULL, $contentId = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->blobName = ($blobName===NULL) ? NULL : $this->validateBlobName($blobName);
		$this->inlineDisplay = ($inlineDisplay===NULL) ? NULL : $this->validateInlineDisplay($inlineDisplay);
		$this->contentId = ($contentId===NULL) ? NULL : $this->validateContentId($contentId);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\Stringnznw ) {
			$name = new \com\microsoft\wc\types\Stringnznw ($name);
		}
	
		return $name;
	}

	public function getBlobName() {
		if ($this->blobName===NULL) {
			$this->blobName = $this->createBlobName();
		}
		return $this->blobName;
	}
	
	protected function createBlobName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setBlobName($blobName) {
		$this->blobName = $this->validateBlobName($blobName);
	}

	protected function validateBlobName($blobName) {
		if ( ! $blobName instanceof \com\microsoft\wc\types\Stringnznw ) {
			$blobName = new \com\microsoft\wc\types\Stringnznw ($blobName);
		}
	
		return $blobName;
	}

	public function getInlineDisplay() {
		if ($this->inlineDisplay===NULL) {
			$this->inlineDisplay = $this->createInlineDisplay();
		}
		return $this->inlineDisplay;
	}
	
	protected function createInlineDisplay() {
		return FALSE;
	}

	public function setInlineDisplay($inlineDisplay) {
		$this->inlineDisplay = $this->validateInlineDisplay($inlineDisplay);
	}

	protected function validateInlineDisplay($inlineDisplay) {
		if (!is_bool($inlineDisplay)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'inlineDisplay', 'boolean'));
		}
	
		return $inlineDisplay;
	}

	public function getContentId() {
		if ($this->contentId===NULL) {
			$this->contentId = $this->createContentId();
		}
		return $this->contentId;
	}
	
	protected function createContentId() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setContentId($contentId) {
		$this->contentId = $this->validateContentId($contentId);
	}

	protected function validateContentId($contentId) {
		if ( ! $contentId instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($contentId) ) {
			$contentId = new \com\microsoft\wc\types\Stringnznw ($contentId);
		}
	
		return $contentId;
	}
} // end class MessageAttachment
