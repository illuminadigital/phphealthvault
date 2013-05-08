<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="Shell")
 */
class Shell {
	/**
	 * Information about the Microsoft HealthVault Shell.
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

	/**
	 * @XmlText	(type="string", name="redirect-url")
	 */
	protected $redirectUrl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\ShellRedirectToken", collection="true", name="redirect-token")
	 */
	protected $redirectToken;

	public function __construct($url = NULL, $redirectUrl = NULL, $redirectToken = NULL) {
		$this->url = ($url===NULL) ? NULL : $this->validateUrl($url);
		$this->redirectUrl = ($redirectUrl===NULL) ? NULL : $this->validateRedirectUrl($redirectUrl);
		$this->redirectToken = ($redirectToken===NULL) ? NULL : $this->validateRedirectToken($redirectToken);
	}

	public function getUrl($autoCreate = TRUE) {
		if ($this->url===NULL && $autoCreate && ! isset($this->_overrides['url']) ) {
			$this->url = $this->createUrl();
		}
		return $this->url;
	}
	
	protected function createUrl() {
		return '';
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

	public function getRedirectUrl($autoCreate = TRUE) {
		if ($this->redirectUrl===NULL && $autoCreate && ! isset($this->_overrides['redirectUrl']) ) {
			$this->redirectUrl = $this->createRedirectUrl();
		}
		return $this->redirectUrl;
	}
	
	protected function createRedirectUrl() {
		return '';
	}

	public function setRedirectUrl($redirectUrl) {
		$this->redirectUrl = $this->validateRedirectUrl($redirectUrl);
	}

	protected function validateRedirectUrl($redirectUrl) {
		if (!is_string($redirectUrl)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'redirectUrl', 'string'));
		}
	
		return $redirectUrl;
	}

	public function getRedirectToken($autoCreate = TRUE) {
		if ($this->redirectToken===NULL && $autoCreate && ! isset($this->_overrides['redirectToken']) ) {
			$this->redirectToken = $this->createRedirectToken();
		}
		return $this->redirectToken;
	}
	
	protected function createRedirectToken() {
		return array();
	}

	public function setRedirectToken($redirectToken) {
		$this->redirectToken = $this->validateRedirectToken($redirectToken);
	}

	protected function validateRedirectToken($redirectToken) {
		if ( $redirectToken === FALSE ) {
			$this->_overrides['redirectToken'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($redirectToken) && ! is_null($redirectToken) ) {
			$redirectToken = array($redirectToken);
		}

		unset ($this->_overrides['redirectToken']);
		$count = count($redirectToken);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'redirectToken', 0));
		}
		if ( ! empty($redirectToken) ) {
			foreach ($redirectToken as $entry) {
				if (!($entry instanceof \com\microsoft\wc\methods\response\GetServiceDefinition2\ShellRedirectToken )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'redirectToken', 'ShellRedirectToken'));
				}
			}
		}
	
		return $redirectToken;
	}

	public function addRedirectToken($redirectToken) {
		$this->redirectToken[] = $redirectToken;
	}
} // end class Shell
