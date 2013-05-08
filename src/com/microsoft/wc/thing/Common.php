<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="common")
 */
class Common {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="source")
	 */
	protected $source;

	/**
	 * @XmlText	(type="string", name="note")
	 */
	protected $note;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz512", name="tags")
	 */
	protected $tags;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Extension", collection="true", name="extension")
	 */
	protected $extension;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\RelatedThing", collection="true", name="related-thing")
	 */
	protected $relatedThing;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="client-thing-id")
	 */
	protected $clientThingId;

	public function __construct($source = NULL, $note = NULL, $tags = NULL, $extension = NULL, $relatedThing = NULL, $clientThingId = NULL) {
		$this->source = ($source===NULL) ? NULL : $this->validateSource($source);
		$this->note = ($note===NULL) ? NULL : $this->validateNote($note);
		$this->tags = ($tags===NULL) ? NULL : $this->validateTags($tags);
		$this->extension = ($extension===NULL) ? NULL : $this->validateExtension($extension);
		$this->relatedThing = ($relatedThing===NULL) ? NULL : $this->validateRelatedThing($relatedThing);
		$this->clientThingId = ($clientThingId===NULL) ? NULL : $this->validateClientThingId($clientThingId);
	}

	public function getSource($autoCreate = TRUE) {
		if ($this->source===NULL && $autoCreate && ! isset($this->_overrides['source']) ) {
			$this->source = $this->createSource();
		}
		return $this->source;
	}
	
	protected function createSource() {
		return '';
	}

	public function setSource($source) {
		$this->source = $this->validateSource($source);
	}

	protected function validateSource($source) {
		if ( ! is_string($source) && ! is_null($source) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'source', 'string'));
		}
	
		return $source;
	}

	public function getNote($autoCreate = TRUE) {
		if ($this->note===NULL && $autoCreate && ! isset($this->_overrides['note']) ) {
			$this->note = $this->createNote();
		}
		return $this->note;
	}
	
	protected function createNote() {
		return '';
	}

	public function setNote($note) {
		$this->note = $this->validateNote($note);
	}

	protected function validateNote($note) {
		if ( ! is_string($note) && ! is_null($note) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'note', 'string'));
		}
	
		return $note;
	}

	public function getTags($autoCreate = TRUE) {
		if ($this->tags===NULL && $autoCreate && ! isset($this->_overrides['tags']) ) {
			$this->tags = $this->createTags();
		}
		return $this->tags;
	}
	
	protected function createTags() {
		return new \com\microsoft\wc\types\Stringz512();
	}

	public function setTags($tags) {
		$this->tags = $this->validateTags($tags);
	}

	protected function validateTags($tags) {
		if ( $tags === FALSE ) {
			$this->_overrides['tags'] = TRUE;
			return NULL;
		}

		if ( ! $tags instanceof \com\microsoft\wc\types\Stringz512  && ! is_null($tags) ) {
			$tags = new \com\microsoft\wc\types\Stringz512 ($tags);
		}

		unset ($this->_overrides['tags']);
	
		return $tags;
	}

	public function getExtension($autoCreate = TRUE) {
		if ($this->extension===NULL && $autoCreate && ! isset($this->_overrides['extension']) ) {
			$this->extension = $this->createExtension();
		}
		return $this->extension;
	}
	
	protected function createExtension() {
		return array();
	}

	public function setExtension($extension) {
		$this->extension = $this->validateExtension($extension);
	}

	protected function validateExtension($extension) {
		if ( $extension === FALSE ) {
			$this->_overrides['extension'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($extension) && ! is_null($extension) ) {
			$extension = array($extension);
		}

		unset ($this->_overrides['extension']);
		$count = count($extension);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'extension', 0));
		}
		if ( ! empty($extension) ) {
			foreach ($extension as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\Extension )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'extension', 'extension'));
				}
			}
		}
	
		return $extension;
	}

	public function addExtension($extension) {
		$this->extension[] = $extension;
	}

	public function getRelatedThing($autoCreate = TRUE) {
		if ($this->relatedThing===NULL && $autoCreate && ! isset($this->_overrides['relatedThing']) ) {
			$this->relatedThing = $this->createRelatedThing();
		}
		return $this->relatedThing;
	}
	
	protected function createRelatedThing() {
		return array();
	}

	public function setRelatedThing($relatedThing) {
		$this->relatedThing = $this->validateRelatedThing($relatedThing);
	}

	protected function validateRelatedThing($relatedThing) {
		if ( $relatedThing === FALSE ) {
			$this->_overrides['relatedThing'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($relatedThing) && ! is_null($relatedThing) ) {
			$relatedThing = array($relatedThing);
		}

		unset ($this->_overrides['relatedThing']);
		$count = count($relatedThing);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'relatedThing', 0));
		}
		if ( ! empty($relatedThing) ) {
			foreach ($relatedThing as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\RelatedThing )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'relatedThing', 'RelatedThing'));
				}
			}
		}
	
		return $relatedThing;
	}

	public function addRelatedThing($relatedThing) {
		$this->relatedThing[] = $relatedThing;
	}

	public function getClientThingId($autoCreate = TRUE) {
		if ($this->clientThingId===NULL && $autoCreate && ! isset($this->_overrides['clientThingId']) ) {
			$this->clientThingId = $this->createClientThingId();
		}
		return $this->clientThingId;
	}
	
	protected function createClientThingId() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setClientThingId($clientThingId) {
		$this->clientThingId = $this->validateClientThingId($clientThingId);
	}

	protected function validateClientThingId($clientThingId) {
		if ( $clientThingId === FALSE ) {
			$this->_overrides['clientThingId'] = TRUE;
			return NULL;
		}

		if ( ! $clientThingId instanceof \com\microsoft\wc\types\String255  && ! is_null($clientThingId) ) {
			$clientThingId = new \com\microsoft\wc\types\String255 ($clientThingId);
		}

		unset ($this->_overrides['clientThingId']);
	
		return $clientThingId;
	}
} // end class Common
