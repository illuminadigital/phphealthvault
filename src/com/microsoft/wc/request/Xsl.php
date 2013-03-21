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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
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

	public function getContentType($autoCreate = TRUE) {
		if ($this->contentType===NULL && $autoCreate && ! isset($this->_overrides['contentType']) ) {
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
		if ( $contentType === FALSE ) {
			$this->_overrides['contentType'] = TRUE;
			return NULL;
		}

		if ( ! $contentType instanceof \com\microsoft\wc\types\String128  && ! is_null($contentType) ) {
			$contentType = new \com\microsoft\wc\types\String128 ($contentType);
		}

		unset ($this->_overrides['contentType']);
	
		return $contentType;
	}
} // end class Xsl
