<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\types\Stringz512;
use com\microsoft\wc\types\String255;
use com\microsoft\wc\thing\Extension;
use com\microsoft\wc\thing\RelatedThing;

/**
 * @XmlEntity	(xml="common")
 */
class Common {
	/**
	 */

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

	public function getSource() {
		if ($this->source===NULL) {
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

	public function getNote() {
		if ($this->note===NULL) {
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

	public function getTags() {
		if ($this->tags===NULL) {
			$this->tags = $this->createTags();
		}
		return $this->tags;
	}
	
	protected function createTags() {
		return new Stringz512();
	}

	public function setTags($tags) {
		$this->tags = $this->validateTags($tags);
	}

	protected function validateTags($tags) {
		if ( ! $tags instanceof Stringz512  && ! is_null($tags) ) {
			$tags = new Stringz512 ($tags);
		}
	
		return $tags;
	}

	public function getExtension() {
		if ($this->extension===NULL) {
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
		if ( ! $extension instanceof Extension  && ! is_null($extension) ) {
			$extension = new Extension ($extension);
		}
		$count = count($extension);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'extension', 0));
		}
		foreach ($extension as $entry) {
			if (!($entry instanceof Extension)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'extension', 'extension'));
			}
		}
	
		return $extension;
	}

	public function addExtension($extension) {
		$this->extension[] = $extension;
	}

	public function getRelatedThing() {
		if ($this->relatedThing===NULL) {
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
		if ( ! $relatedThing instanceof RelatedThing  && ! is_null($relatedThing) ) {
			$relatedThing = new RelatedThing ($relatedThing);
		}
		$count = count($relatedThing);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'relatedThing', 0));
		}
		foreach ($relatedThing as $entry) {
			if (!($entry instanceof RelatedThing)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'relatedThing', 'RelatedThing'));
			}
		}
	
		return $relatedThing;
	}

	public function addRelatedThing($relatedThing) {
		$this->relatedThing[] = $relatedThing;
	}

	public function getClientThingId() {
		if ($this->clientThingId===NULL) {
			$this->clientThingId = $this->createClientThingId();
		}
		return $this->clientThingId;
	}
	
	protected function createClientThingId() {
		return new String255();
	}

	public function setClientThingId($clientThingId) {
		$this->clientThingId = $this->validateClientThingId($clientThingId);
	}

	protected function validateClientThingId($clientThingId) {
		if ( ! $clientThingId instanceof String255  && ! is_null($clientThingId) ) {
			$clientThingId = new String255 ($clientThingId);
		}
	
		return $clientThingId;
	}
} // end class Common
