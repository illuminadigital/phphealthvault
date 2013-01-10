<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\Sig;
use com\microsoft\wc\application\AppServerCredInfo;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="AppServerCred")
 */
class AppServerCred {
	/**
	 * Application server credential that is used when an application is identifying itself for subsequent calls to Microsoft HealthVault.
	 * This credential type requires that the content element be signed using the application's private key.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\Sig", name="sig")
	 */
	protected $sig;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\AppServerCredInfo", name="content")
	 */
	protected $content;

	public function __construct($sig = NULL, $content = NULL) {
		$this->sig = ($sig===NULL) ? NULL : $this->validateSig($sig);
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
	}

	public function getSig() {
		if ($this->sig===NULL) {
			$this->sig = $this->createSig();
		}
		return $this->sig;
	}
	
	protected function createSig() {
		return new Sig();
	}

	public function setSig($sig) {
		$this->sig = $this->validateSig($sig);
	}

	protected function validateSig($sig) {
		if ( ! $sig instanceof Sig ) {
			$sig = new Sig ($sig);
		}
	
		return $sig;
	}

	public function getContent() {
		if ($this->content===NULL) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return new AppServerCredInfo();
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		if ( ! $content instanceof AppServerCredInfo ) {
			$content = new AppServerCredInfo ($content);
		}
	
		return $content;
	}
} // end class AppServerCred
