<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="Transforms")
 */
class Transforms {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", collection="true", name="tag")
	 */
	protected $tag;

	public function __construct($tag = NULL) {
		$this->tag = ($tag===NULL) ? NULL : $this->validateTag($tag);
	}

	public function getTag($autoCreate = TRUE) {
		if ($this->tag===NULL && $autoCreate && ! isset($this->_overrides['tag']) ) {
			$this->tag = $this->createTag();
		}
		return $this->tag;
	}
	
	protected function createTag() {
		return array();
	}

	public function setTag($tag) {
		$this->tag = $this->validateTag($tag);
	}

	protected function validateTag($tag) {
		$count = count($tag);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'tag', 0));
		}
		foreach ($tag as $entry) {
			if ( ! is_string($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'tag', 'string'));
			}
		}
	
		return $tag;
	}

	public function addTag($tag) {
		$this->tag[] = $this->validateTagType($tag);
	}

	protected function validateTagType($tag) {
		if ( ! is_string($tag) && ! is_null($tag) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'tag', 'string'));
		}
	
		return $tag;
	}
} // end class Transforms
