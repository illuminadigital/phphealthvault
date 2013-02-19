<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="TransformSource")
 */
class TransformSource {
	/**
	 * The tag and XSL source for the transform.
	 * The transform source is XSL version 1.0 and uses msxml:script extensions in some cases. The source is XML encoded into the value of the element.
	 */

	/**
	 * @XmlText	(type="string", name="value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="tag")
	 */
	protected $tag;

	public function __construct($value = NULL, $tag = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->tag = ($tag===NULL) ? NULL : $this->validateTag($tag);
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
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
