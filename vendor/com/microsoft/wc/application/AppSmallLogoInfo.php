<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\types\String255;
use com\microsoft\wc\application\CultureSpecificAppSmallLogo;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="AppSmallLogoInfo")
 */
class AppSmallLogoInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\CultureSpecificAppSmallLogo", collection="true", name="logo")
	 */
	protected $logo;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="content-type")
	 */
	protected $contentType;

	public function __construct($logo = NULL, $contentType = NULL) {
		$this->logo = ($logo===NULL) ? NULL : $this->validateLogo($logo);
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
	}

	public function getLogo() {
		if ($this->logo===NULL) {
			$this->logo = $this->createLogo();
		}
		return $this->logo;
	}
	
	protected function createLogo() {
		return array();
	}

	public function setLogo($logo) {
		$this->logo = $this->validateLogo($logo);
	}

	protected function validateLogo($logo) {
		if ( ! $logo instanceof CultureSpecificAppSmallLogo ) {
			$logo = new CultureSpecificAppSmallLogo ($logo);
		}
		$count = count($logo);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'logo', 1));
		}
		foreach ($logo as $entry) {
			if (!($entry instanceof CultureSpecificAppSmallLogo)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'logo', 'CultureSpecificAppSmallLogo'));
			}
		}
	
		return $logo;
	}

	public function addLogo($logo) {
		$this->logo[] = $logo;
	}

	public function getContentType() {
		if ($this->contentType===NULL) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new String255();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof String255 ) {
			$contentType = new String255 ($contentType);
		}
	
		return $contentType;
	}
} // end class AppSmallLogoInfo
