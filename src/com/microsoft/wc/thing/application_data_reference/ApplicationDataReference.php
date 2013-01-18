<?php
namespace com\microsoft\wc\thing\application_data_reference;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.application-data-reference", prefix="")
 * })
 * @XmlEntity	(xml="application-data-reference")
 */
class ApplicationDataReference extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information that can be used by an application to render content from anotherapplication.
	 */

	const ID = '9ad2a94f-c6a4-4d78-8b50-75b65be0e250';
	const NAME = 'Application Data Reference';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="render-filename")
	 */
	protected $renderFilename;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="public-url")
	 */
	protected $publicUrl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="configuration-url")
	 */
	protected $configurationUrl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="open-query-id")
	 */
	protected $openQueryId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="application-data-url")
	 */
	protected $applicationDataUrl;

	public function __construct($name = NULL, $renderFilename = NULL, $publicUrl = NULL, $configurationUrl = NULL, $openQueryId = NULL, $applicationDataUrl = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->renderFilename = ($renderFilename===NULL) ? NULL : $this->validateRenderFilename($renderFilename);
		$this->publicUrl = ($publicUrl===NULL) ? NULL : $this->validatePublicUrl($publicUrl);
		$this->configurationUrl = ($configurationUrl===NULL) ? NULL : $this->validateConfigurationUrl($configurationUrl);
		$this->openQueryId = ($openQueryId===NULL) ? NULL : $this->validateOpenQueryId($openQueryId);
		$this->applicationDataUrl = ($applicationDataUrl===NULL) ? NULL : $this->validateApplicationDataUrl($applicationDataUrl);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\Stringnz ) {
			$name = new \com\microsoft\wc\types\Stringnz ($name);
		}
	
		return $name;
	}

	public function getRenderFilename() {
		if ($this->renderFilename===NULL) {
			$this->renderFilename = $this->createRenderFilename();
		}
		return $this->renderFilename;
	}
	
	protected function createRenderFilename() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setRenderFilename($renderFilename) {
		$this->renderFilename = $this->validateRenderFilename($renderFilename);
	}

	protected function validateRenderFilename($renderFilename) {
		if ( ! $renderFilename instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($renderFilename) ) {
			$renderFilename = new \com\microsoft\wc\types\Stringnz ($renderFilename);
		}
	
		return $renderFilename;
	}

	public function getPublicUrl() {
		if ($this->publicUrl===NULL) {
			$this->publicUrl = $this->createPublicUrl();
		}
		return $this->publicUrl;
	}
	
	protected function createPublicUrl() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setPublicUrl($publicUrl) {
		$this->publicUrl = $this->validatePublicUrl($publicUrl);
	}

	protected function validatePublicUrl($publicUrl) {
		if ( ! $publicUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($publicUrl) ) {
			$publicUrl = new \com\microsoft\wc\types\Stringnz ($publicUrl);
		}
	
		return $publicUrl;
	}

	public function getConfigurationUrl() {
		if ($this->configurationUrl===NULL) {
			$this->configurationUrl = $this->createConfigurationUrl();
		}
		return $this->configurationUrl;
	}
	
	protected function createConfigurationUrl() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setConfigurationUrl($configurationUrl) {
		$this->configurationUrl = $this->validateConfigurationUrl($configurationUrl);
	}

	protected function validateConfigurationUrl($configurationUrl) {
		if ( ! $configurationUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($configurationUrl) ) {
			$configurationUrl = new \com\microsoft\wc\types\Stringnz ($configurationUrl);
		}
	
		return $configurationUrl;
	}

	public function getOpenQueryId() {
		if ($this->openQueryId===NULL) {
			$this->openQueryId = $this->createOpenQueryId();
		}
		return $this->openQueryId;
	}
	
	protected function createOpenQueryId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setOpenQueryId($openQueryId) {
		$this->openQueryId = $this->validateOpenQueryId($openQueryId);
	}

	protected function validateOpenQueryId($openQueryId) {
		if ( ! $openQueryId instanceof \com\microsoft\wc\types\Guid  && ! is_null($openQueryId) ) {
			$openQueryId = new \com\microsoft\wc\types\Guid ($openQueryId);
		}
	
		return $openQueryId;
	}

	public function getApplicationDataUrl() {
		if ($this->applicationDataUrl===NULL) {
			$this->applicationDataUrl = $this->createApplicationDataUrl();
		}
		return $this->applicationDataUrl;
	}
	
	protected function createApplicationDataUrl() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setApplicationDataUrl($applicationDataUrl) {
		$this->applicationDataUrl = $this->validateApplicationDataUrl($applicationDataUrl);
	}

	protected function validateApplicationDataUrl($applicationDataUrl) {
		if ( ! $applicationDataUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($applicationDataUrl) ) {
			$applicationDataUrl = new \com\microsoft\wc\types\Stringnz ($applicationDataUrl);
		}
	
		return $applicationDataUrl;
	}
} // end class ApplicationDataReference
