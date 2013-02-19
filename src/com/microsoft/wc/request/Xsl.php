<?php
namespace com\microsoft\wc\request;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.request", prefix="")
 * })
 * @XmlEntity	(xml="Xsl")
 */
class Xsl {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="Xsl")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="content-type")
	 */
	protected $contentType;

	public function __construct($value = NULL, $contentType = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
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
		return new \com\microsoft\wc\types\String128();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof \com\microsoft\wc\types\String128  && ! is_null($contentType) ) {
			$contentType = new \com\microsoft\wc\types\String128 ($contentType);
		}
	
		return $contentType;
	}
} // end class Xsl
