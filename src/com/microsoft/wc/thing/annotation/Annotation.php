<?php
namespace com\microsoft\wc\thing\annotation;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.annotation", prefix="")
 * })
 * @XmlEntity	(xml="annotation")
 */
class Annotation extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a medical annotation.
	 * This thing type describes the medical annotation results of a person.
	 */

	const ID = '7AB3E662-CC5B-4BE2-BF38-78F8AAD5B161';
	const NAME = 'Medical Annotation';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="content")
	 */
	protected $content;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="author")
	 */
	protected $author;

	/**
	 * @XmlText	(type="string", name="classification")
	 */
	protected $classification;

	/**
	 * @XmlText	(type="string", name="index")
	 */
	protected $index;

	/**
	 * @XmlText	(type="string", name="version")
	 */
	protected $version;

	public function __construct($when = NULL, $content = NULL, $author = NULL, $classification = NULL, $index = NULL, $version = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
		$this->author = ($author===NULL) ? NULL : $this->validateAuthor($author);
		$this->classification = ($classification===NULL) ? NULL : $this->validateClassification($classification);
		$this->index = ($index===NULL) ? NULL : $this->validateIndex($index);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
	}

	public function getWhen() {
		if ($this->when===NULL) {
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

	public function getContent() {
		if ($this->content===NULL) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return '';
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		if ( ! is_string($content) && ! is_null($content) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'content', 'string'));
		}
	
		return $content;
	}

	public function getAuthor() {
		if ($this->author===NULL) {
			$this->author = $this->createAuthor();
		}
		return $this->author;
	}
	
	protected function createAuthor() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setAuthor($author) {
		$this->author = $this->validateAuthor($author);
	}

	protected function validateAuthor($author) {
		if ( ! $author instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($author) ) {
			$author = new \com\microsoft\wc\thing\types\Person ($author);
		}
	
		return $author;
	}

	public function getClassification() {
		if ($this->classification===NULL) {
			$this->classification = $this->createClassification();
		}
		return $this->classification;
	}
	
	protected function createClassification() {
		return '';
	}

	public function setClassification($classification) {
		$this->classification = $this->validateClassification($classification);
	}

	protected function validateClassification($classification) {
		if ( ! is_string($classification) && ! is_null($classification) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'classification', 'string'));
		}
	
		return $classification;
	}

	public function getIndex() {
		if ($this->index===NULL) {
			$this->index = $this->createIndex();
		}
		return $this->index;
	}
	
	protected function createIndex() {
		return '';
	}

	public function setIndex($index) {
		$this->index = $this->validateIndex($index);
	}

	protected function validateIndex($index) {
		if ( ! is_string($index) && ! is_null($index) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'index', 'string'));
		}
	
		return $index;
	}

	public function getVersion() {
		if ($this->version===NULL) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return '';
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( ! is_string($version) && ! is_null($version) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'version', 'string'));
		}
	
		return $version;
	}
} // end class Annotation
