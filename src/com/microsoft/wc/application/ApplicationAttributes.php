<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="ApplicationAttributes")
 */
class ApplicationAttributes {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", collection="true", name="app-attribute")
	 */
	protected $appAttribute;

	public function __construct($appAttribute = NULL) {
		$this->appAttribute = ($appAttribute===NULL) ? NULL : $this->validateAppAttribute($appAttribute);
	}

	public function getAppAttribute() {
		if ($this->appAttribute===NULL) {
			$this->appAttribute = $this->createAppAttribute();
		}
		return $this->appAttribute;
	}
	
	protected function createAppAttribute() {
		return array();
	}

	public function setAppAttribute($appAttribute) {
		$this->appAttribute = $this->validateAppAttribute($appAttribute);
	}

	protected function validateAppAttribute($appAttribute) {
		if ( ! is_array ($appAttribute) ) {
			$appAttribute = array($appAttribute);
		}
		$count = count($appAttribute);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'appAttribute', 1));
		}
		if ($count > 20) {
			throw new \Exception(sprintf('Supplied %s array has more than the required number (%d) of entries.', 'appAttribute', 20));
		}
		foreach ($appAttribute as $entry) {
			if (!($entry instanceof Stringnz)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'appAttribute', 'stringnz'));
			}
		}
	
		return $appAttribute;
	}

	public function addAppAttribute($appAttribute) {
		$this->appAttribute[] = $appAttribute;
	}
} // end class ApplicationAttributes
