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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AnyURI", name="URL")
	 */
	protected $uRL;

	/**
	 * @XmlAttribute	(type="token", name="MIMEType")
	 */
	protected $mIMEType;

	/**
	 * @XmlAttribute	(type="token", name="Description")
	 */
	protected $description;

	public function __construct($uRL = NULL, $mIMEType = NULL, $description = NULL) {
		$this->uRL = ($uRL===NULL) ? NULL : $this->validateURL($uRL);
		$this->mIMEType = ($mIMEType===NULL) ? NULL : $this->validateMIMEType($mIMEType);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
	}

	public function getURL() {
		if ($this->uRL===NULL) {
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
		if (!is_anyURI($uRL)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'uRL', 'anyURI'));
		}
	
		return $uRL;
	}

	public function getMIMEType() {
		if ($this->mIMEType===NULL) {
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
		if (!is_token($mIMEType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mIMEType', 'token'));
		}
	
		return $mIMEType;
	}

	public function getDescription() {
		if ($this->description===NULL) {
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
		if ( ! is_token($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'token'));
		}
	
		return $description;
	}
} // end class Reference
