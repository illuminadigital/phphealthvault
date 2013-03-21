<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="AppServerCred")
 */
class AppServerCred {
	/**
	 * Application server credential that is used when an application is identifying itself for subsequent calls to Microsoft HealthVault.
	 * This credential type requires that the content element be signed using the application's private key.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Sig", name="sig")
	 */
	protected $sig;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\AppServerCredInfo", name="content")
	 */
	protected $content;

	public function __construct($sig = NULL, $content = NULL) {
		$this->sig = ($sig===NULL) ? NULL : $this->validateSig($sig);
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
	}

	public function getSig($autoCreate = TRUE) {
		if ($this->sig===NULL && $autoCreate && ! isset($this->_overrides['sig']) ) {
			$this->sig = $this->createSig();
		}
		return $this->sig;
	}
	
	protected function createSig() {
		return new \com\microsoft\wc\types\Sig();
	}

	public function setSig($sig) {
		$this->sig = $this->validateSig($sig);
	}

	protected function validateSig($sig) {
		if ( ! $sig instanceof \com\microsoft\wc\types\Sig ) {
			$sig = new \com\microsoft\wc\types\Sig ($sig);
		}
	
		return $sig;
	}

	public function getContent($autoCreate = TRUE) {
		if ($this->content===NULL && $autoCreate && ! isset($this->_overrides['content']) ) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return new \com\microsoft\wc\types\AppServerCredInfo();
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		if ( ! $content instanceof \com\microsoft\wc\types\AppServerCredInfo ) {
			$content = new \com\microsoft\wc\types\AppServerCredInfo ($content);
		}
	
		return $content;
	}
} // end class AppServerCred
