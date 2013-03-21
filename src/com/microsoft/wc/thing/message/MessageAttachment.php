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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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

	public function getBlobName($autoCreate = TRUE) {
		if ($this->blobName===NULL && $autoCreate && ! isset($this->_overrides['blobName']) ) {
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

	public function getInlineDisplay($autoCreate = TRUE) {
		if ($this->inlineDisplay===NULL && $autoCreate && ! isset($this->_overrides['inlineDisplay']) ) {
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

	public function getContentId($autoCreate = TRUE) {
		if ($this->contentId===NULL && $autoCreate && ! isset($this->_overrides['contentId']) ) {
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
		if ( $contentId === FALSE ) {
			$this->_overrides['contentId'] = TRUE;
			return NULL;
		}

		if ( ! $contentId instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($contentId) ) {
			$contentId = new \com\microsoft\wc\types\Stringnznw ($contentId);
		}

		unset ($this->_overrides['contentId']);
	
		return $contentId;
	}
} // end class MessageAttachment
