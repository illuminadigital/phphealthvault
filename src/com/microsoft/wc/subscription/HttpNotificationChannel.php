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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="url")
	 */
	protected $url;

	public function __construct($url = NULL) {
		$this->url = ($url===NULL) ? NULL : $this->validateUrl($url);
	}

	public function getUrl($autoCreate = TRUE) {
		if ($this->url===NULL && $autoCreate && ! isset($this->_overrides['url']) ) {
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
