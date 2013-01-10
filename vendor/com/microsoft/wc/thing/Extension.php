<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="extension")
 */
class Extension {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="source")
	 */
	protected $source;

	/**
	 * @XmlAttribute	(type="string", name="ver")
	 */
	protected $ver;

	/**
	 * @XmlAttribute	(type="string", name="logo")
	 */
	protected $logo;

	/**
	 * @XmlAttribute	(type="string", name="xsl")
	 */
	protected $xsl;

	public function __construct($source = NULL, $ver = NULL, $logo = NULL, $xsl = NULL) {
		$this->source = ($source===NULL) ? NULL : $this->validateSource($source);
		$this->ver = ($ver===NULL) ? NULL : $this->validateVer($ver);
		$this->logo = ($logo===NULL) ? NULL : $this->validateLogo($logo);
		$this->xsl = ($xsl===NULL) ? NULL : $this->validateXsl($xsl);
	}

	public function getSource() {
		if ($this->source===NULL) {
			$this->source = $this->createSource();
		}
		return $this->source;
	}
	
	protected function createSource() {
		return '';
	}

	public function setSource($source) {
		$this->source = $this->validateSource($source);
	}

	protected function validateSource($source) {
		if (!is_string($source)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'source', 'string'));
		}
	
		return $source;
	}

	public function getVer() {
		if ($this->ver===NULL) {
			$this->ver = $this->createVer();
		}
		return $this->ver;
	}
	
	protected function createVer() {
		return '';
	}

	public function setVer($ver) {
		$this->ver = $this->validateVer($ver);
	}

	protected function validateVer($ver) {
		if (!is_string($ver)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'ver', 'string'));
		}
	
		return $ver;
	}

	public function getLogo() {
		if ($this->logo===NULL) {
			$this->logo = $this->createLogo();
		}
		return $this->logo;
	}
	
	protected function createLogo() {
		return '';
	}

	public function setLogo($logo) {
		$this->logo = $this->validateLogo($logo);
	}

	protected function validateLogo($logo) {
		if (!is_string($logo)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'logo', 'string'));
		}
	
		return $logo;
	}

	public function getXsl() {
		if ($this->xsl===NULL) {
			$this->xsl = $this->createXsl();
		}
		return $this->xsl;
	}
	
	protected function createXsl() {
		return '';
	}

	public function setXsl($xsl) {
		$this->xsl = $this->validateXsl($xsl);
	}

	protected function validateXsl($xsl) {
		if (!is_string($xsl)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xsl', 'string'));
		}
	
		return $xsl;
	}
} // end class Extension
