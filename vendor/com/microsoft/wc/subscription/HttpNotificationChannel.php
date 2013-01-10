<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="HttpNotificationChannel")
 */
class HttpNotificationChannel {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="url")
	 */
	protected $url;

	public function __construct($url = NULL) {
		$this->url = ($url===NULL) ? NULL : $this->validateUrl($url);
	}

	public function getUrl() {
		if ($this->url===NULL) {
			$this->url = $this->createUrl();
		}
		return $this->url;
	}
	
	protected function createUrl() {
		return NULL;
	}

	public function setUrl($url) {
		$this->url = $this->validateUrl($url);
	}

	protected function validateUrl($url) {
		if (!is_string($url)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'url', 'string'));
		}
	
		return $url;
	}
} // end class HttpNotificationChannel
