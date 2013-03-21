<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Reference")
 */
class Reference {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="URL")
	 */
	protected $uRL;

	/**
	 * @XmlAttribute	(type="string", name="MIMEType")
	 */
	protected $mIMEType;

	/**
	 * @XmlAttribute	(type="string", name="Description")
	 */
	protected $description;

	public function __construct($uRL = NULL, $mIMEType = NULL, $description = NULL) {
		$this->uRL = ($uRL===NULL) ? NULL : $this->validateURL($uRL);
		$this->mIMEType = ($mIMEType===NULL) ? NULL : $this->validateMIMEType($mIMEType);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
	}

	public function getURL($autoCreate = TRUE) {
		if ($this->uRL===NULL && $autoCreate && ! isset($this->_overrides['uRL']) ) {
			$this->uRL = $this->createURL();
		}
		return $this->uRL;
	}
	
	protected function createURL() {
		return NULL;
	}

	public function setURL($uRL) {
		$this->uRL = $this->validateURL($uRL);
	}

	protected function validateURL($uRL) {
		if (!is_string($uRL)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'uRL', 'string'));
		}
	
		return $uRL;
	}

	public function getMIMEType($autoCreate = TRUE) {
		if ($this->mIMEType===NULL && $autoCreate && ! isset($this->_overrides['mIMEType']) ) {
			$this->mIMEType = $this->createMIMEType();
		}
		return $this->mIMEType;
	}
	
	protected function createMIMEType() {
		return NULL;
	}

	public function setMIMEType($mIMEType) {
		$this->mIMEType = $this->validateMIMEType($mIMEType);
	}

	protected function validateMIMEType($mIMEType) {
		if (!is_string($mIMEType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mIMEType', 'string'));
		}
	
		return $mIMEType;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return NULL;
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}
} // end class Reference
