<?php
namespace com\microsoft\wc\thing\application_data_reference;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.application-data-reference", prefix="")
 * })
 * @XmlEntity	(xml="application-data-reference")
 */
class ApplicationDataReference extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information that can be used by an application to render content from anotherapplication.
	 */

	const ID = '9ad2a94f-c6a4-4d78-8b50-75b65be0e250';
	const NAME = 'Application Data Reference';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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

	public function getRenderFilename($autoCreate = TRUE) {
		if ($this->renderFilename===NULL && $autoCreate && ! isset($this->_overrides['renderFilename']) ) {
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
		if ( $renderFilename === FALSE ) {
			$this->_overrides['renderFilename'] = TRUE;
			return NULL;
		}

		if ( ! $renderFilename instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($renderFilename) ) {
			$renderFilename = new \com\microsoft\wc\types\Stringnz ($renderFilename);
		}

		unset ($this->_overrides['renderFilename']);
	
		return $renderFilename;
	}

	public function getPublicUrl($autoCreate = TRUE) {
		if ($this->publicUrl===NULL && $autoCreate && ! isset($this->_overrides['publicUrl']) ) {
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
		if ( $publicUrl === FALSE ) {
			$this->_overrides['publicUrl'] = TRUE;
			return NULL;
		}

		if ( ! $publicUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($publicUrl) ) {
			$publicUrl = new \com\microsoft\wc\types\Stringnz ($publicUrl);
		}

		unset ($this->_overrides['publicUrl']);
	
		return $publicUrl;
	}

	public function getConfigurationUrl($autoCreate = TRUE) {
		if ($this->configurationUrl===NULL && $autoCreate && ! isset($this->_overrides['configurationUrl']) ) {
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
		if ( $configurationUrl === FALSE ) {
			$this->_overrides['configurationUrl'] = TRUE;
			return NULL;
		}

		if ( ! $configurationUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($configurationUrl) ) {
			$configurationUrl = new \com\microsoft\wc\types\Stringnz ($configurationUrl);
		}

		unset ($this->_overrides['configurationUrl']);
	
		return $configurationUrl;
	}

	public function getOpenQueryId($autoCreate = TRUE) {
		if ($this->openQueryId===NULL && $autoCreate && ! isset($this->_overrides['openQueryId']) ) {
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
		if ( $openQueryId === FALSE ) {
			$this->_overrides['openQueryId'] = TRUE;
			return NULL;
		}

		if ( ! $openQueryId instanceof \com\microsoft\wc\types\Guid  && ! is_null($openQueryId) ) {
			$openQueryId = new \com\microsoft\wc\types\Guid ($openQueryId);
		}

		unset ($this->_overrides['openQueryId']);
	
		return $openQueryId;
	}

	public function getApplicationDataUrl($autoCreate = TRUE) {
		if ($this->applicationDataUrl===NULL && $autoCreate && ! isset($this->_overrides['applicationDataUrl']) ) {
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
		if ( $applicationDataUrl === FALSE ) {
			$this->_overrides['applicationDataUrl'] = TRUE;
			return NULL;
		}

		if ( ! $applicationDataUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($applicationDataUrl) ) {
			$applicationDataUrl = new \com\microsoft\wc\types\Stringnz ($applicationDataUrl);
		}

		unset ($this->_overrides['applicationDataUrl']);
	
		return $applicationDataUrl;
	}
} // end class ApplicationDataReference
