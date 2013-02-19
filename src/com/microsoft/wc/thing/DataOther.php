<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="DataOther")
 */
class DataOther {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="content-type")
	 */
	protected $contentType;

	/**
	 * @XmlAttribute	(type="string", name="content-encoding")
	 */
	protected $contentEncoding;

	public function __construct($value = NULL, $contentType = NULL, $contentEncoding = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
		$this->contentEncoding = ($contentEncoding===NULL) ? NULL : $this->validateContentEncoding($contentEncoding);
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

	public function getContentType() {
		if ($this->contentType===NULL) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new \com\microsoft\wc\types\Stringz1024();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof \com\microsoft\wc\types\Stringz1024  && ! is_null($contentType) ) {
			$contentType = new \com\microsoft\wc\types\Stringz1024 ($contentType);
		}
	
		return $contentType;
	}

	public function getContentEncoding() {
		if ($this->contentEncoding===NULL) {
			$this->contentEncoding = $this->createContentEncoding();
		}
		return $this->contentEncoding;
	}
	
	protected function createContentEncoding() {
		return new \com\microsoft\wc\types\Stringz1024();
	}

	public function setContentEncoding($contentEncoding) {
		$this->contentEncoding = $this->validateContentEncoding($contentEncoding);
	}

	protected function validateContentEncoding($contentEncoding) {
		if ( ! $contentEncoding instanceof \com\microsoft\wc\types\Stringz1024  && ! is_null($contentEncoding) ) {
			$contentEncoding = new \com\microsoft\wc\types\Stringz1024 ($contentEncoding);
		}
	
		return $contentEncoding;
	}
} // end class DataOther
