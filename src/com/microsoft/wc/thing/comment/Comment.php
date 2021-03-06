<?php
namespace com\microsoft\wc\thing\comment;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.comment", prefix="")
 * })
 * @XmlEntity	(xml="comment")
 */
class Comment extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A comment associated with another data item.
	 */

	const ID = '9f4e0fcd-10d7-416d-855a-90514ce2016b';
	const NAME = 'comment';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="content")
	 */
	protected $content;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="category")
	 */
	protected $category;

	public function __construct($when = NULL, $content = NULL, $category = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
		$this->category = ($category===NULL) ? NULL : $this->validateCategory($category);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getContent($autoCreate = TRUE) {
		if ($this->content===NULL && $autoCreate && ! isset($this->_overrides['content']) ) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		if ( ! $content instanceof \com\microsoft\wc\types\Stringnznw ) {
			$content = new \com\microsoft\wc\types\Stringnznw ($content);
		}
	
		return $content;
	}

	public function getCategory($autoCreate = TRUE) {
		if ($this->category===NULL && $autoCreate && ! isset($this->_overrides['category']) ) {
			$this->category = $this->createCategory();
		}
		return $this->category;
	}
	
	protected function createCategory() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCategory($category) {
		$this->category = $this->validateCategory($category);
	}

	protected function validateCategory($category) {
		if ( $category === FALSE ) {
			$this->_overrides['category'] = TRUE;
			return NULL;
		}

		if ( ! $category instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($category) ) {
			$category = new \com\microsoft\wc\types\CodableValue ($category);
		}

		unset ($this->_overrides['category']);
	
		return $category;
	}
} // end class Comment
