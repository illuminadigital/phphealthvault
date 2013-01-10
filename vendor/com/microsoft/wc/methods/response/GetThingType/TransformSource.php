<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlEntity	(xml="TransformSource")
 */
class TransformSource {
	/**
	 * The tag and XSL source for the transform.
	 * The transform source is XSL version 1.0 and uses msxml:script extensions in some cases. The source is XML encoded into the value of the element.
	 */

	/**
	 * @XmlAttribute	(type="string", name="tag")
	 */
	protected $tag;

	public function __construct($tag = NULL) {
		$this->tag = ($tag===NULL) ? NULL : $this->validateTag($tag);
	}

	public function getTag() {
		if ($this->tag===NULL) {
			$this->tag = $this->createTag();
		}
		return $this->tag;
	}
	
	protected function createTag() {
		return '';
	}

	public function setTag($tag) {
		$this->tag = $this->validateTag($tag);
	}

	protected function validateTag($tag) {
		if (!is_string($tag)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'tag', 'string'));
		}
	
		return $tag;
	}
} // end class TransformSource
