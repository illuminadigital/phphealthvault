<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition2", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\Platform", name="platform")
	 */
	protected $platform;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\Shell", name="shell")
	 */
	protected $shell;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\XmlMethod", collection="true", name="xml-method")
	 */
	protected $xmlMethod;

	/**
	 * @XmlText	(type="string", collection="true", name="common-schema")
	 */
	protected $commonSchema;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetServiceDefinition2\InstanceList", name="instances")
	 */
	protected $instances;

	/**
	 * @XmlText	(type="string", name="updated-date")
	 */
	protected $updatedDate;

	public function __construct($platform = NULL, $shell = NULL, $xmlMethod = NULL, $commonSchema = NULL, $instances = NULL, $updatedDate = NULL) {
		$this->platform = ($platform===NULL) ? NULL : $this->validatePlatform($platform);
		$this->shell = ($shell===NULL) ? NULL : $this->validateShell($shell);
		$this->xmlMethod = ($xmlMethod===NULL) ? NULL : $this->validateXmlMethod($xmlMethod);
		$this->commonSchema = ($commonSchema===NULL) ? NULL : $this->validateCommonSchema($commonSchema);
		$this->instances = ($instances===NULL) ? NULL : $this->validateInstances($instances);
		$this->updatedDate = ($updatedDate===NULL) ? NULL : $this->validateUpdatedDate($updatedDate);
	}

	public function getPlatform($autoCreate = TRUE) {
		if ($this->platform===NULL && $autoCreate && ! isset($this->_overrides['platform']) ) {
			$this->platform = $this->createPlatform();
		}
		return $this->platform;
	}
	
	protected function createPlatform() {
		return new \com\microsoft\wc\methods\response\GetServiceDefinition2\Platform();
	}

	public function setPlatform($platform) {
		$this->platform = $this->validatePlatform($platform);
	}

	protected function validatePlatform($platform) {
		if ( $platform === FALSE ) {
			$this->_overrides['platform'] = TRUE;
			return NULL;
		}

		if ( ! $platform instanceof \com\microsoft\wc\methods\response\GetServiceDefinition2\Platform  && ! is_null($platform) ) {
			$platform = new \com\microsoft\wc\methods\response\GetServiceDefinition2\Platform ($platform);
		}

		unset ($this->_overrides['platform']);
	
		return $platform;
	}

	public function getShell($autoCreate = TRUE) {
		if ($this->shell===NULL && $autoCreate && ! isset($this->_overrides['shell']) ) {
			$this->shell = $this->createShell();
		}
		return $this->shell;
	}
	
	protected function createShell() {
		return new \com\microsoft\wc\methods\response\GetServiceDefinition2\Shell();
	}

	public function setShell($shell) {
		$this->shell = $this->validateShell($shell);
	}

	protected function validateShell($shell) {
		if ( $shell === FALSE ) {
			$this->_overrides['shell'] = TRUE;
			return NULL;
		}

		if ( ! $shell instanceof \com\microsoft\wc\methods\response\GetServiceDefinition2\Shell  && ! is_null($shell) ) {
			$shell = new \com\microsoft\wc\methods\response\GetServiceDefinition2\Shell ($shell);
		}

		unset ($this->_overrides['shell']);
	
		return $shell;
	}

	public function getXmlMethod($autoCreate = TRUE) {
		if ($this->xmlMethod===NULL && $autoCreate && ! isset($this->_overrides['xmlMethod']) ) {
			$this->xmlMethod = $this->createXmlMethod();
		}
		return $this->xmlMethod;
	}
	
	protected function createXmlMethod() {
		return array();
	}

	public function setXmlMethod($xmlMethod) {
		$this->xmlMethod = $this->validateXmlMethod($xmlMethod);
	}

	protected function validateXmlMethod($xmlMethod) {
		if ( $xmlMethod === FALSE ) {
			$this->_overrides['xmlMethod'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($xmlMethod) && ! is_null($xmlMethod) ) {
			$xmlMethod = array($xmlMethod);
		}

		unset ($this->_overrides['xmlMethod']);
		$count = count($xmlMethod);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'xmlMethod', 0));
		}
		if ( ! empty($xmlMethod) ) {
			foreach ($xmlMethod as $entry) {
				if (!($entry instanceof \com\microsoft\wc\methods\response\GetServiceDefinition2\XmlMethod )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'xmlMethod', 'XmlMethod'));
				}
			}
		}
	
		return $xmlMethod;
	}

	public function addXmlMethod($xmlMethod) {
		$this->xmlMethod[] = $xmlMethod;
	}

	public function getCommonSchema($autoCreate = TRUE) {
		if ($this->commonSchema===NULL && $autoCreate && ! isset($this->_overrides['commonSchema']) ) {
			$this->commonSchema = $this->createCommonSchema();
		}
		return $this->commonSchema;
	}
	
	protected function createCommonSchema() {
		return array();
	}

	public function setCommonSchema($commonSchema) {
		$this->commonSchema = $this->validateCommonSchema($commonSchema);
	}

	protected function validateCommonSchema($commonSchema) {
		$count = count($commonSchema);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'commonSchema', 0));
		}
		if ( ! empty($commonSchema) ) {
			foreach ($commonSchema as $entry) {
				if ( ! is_string($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'commonSchema', 'string'));
				}
			}
		}
	
		return $commonSchema;
	}

	public function addCommonSchema($commonSchema) {
		$this->commonSchema[] = $this->validateCommonSchemaType($commonSchema);
	}

	protected function validateCommonSchemaType($commonSchema) {
		if ( ! is_string($commonSchema) && ! is_null($commonSchema) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'commonSchema', 'string'));
		}
	
		return $commonSchema;
	}

	public function getInstances($autoCreate = TRUE) {
		if ($this->instances===NULL && $autoCreate && ! isset($this->_overrides['instances']) ) {
			$this->instances = $this->createInstances();
		}
		return $this->instances;
	}
	
	protected function createInstances() {
		return new \com\microsoft\wc\methods\response\GetServiceDefinition2\InstanceList();
	}

	public function setInstances($instances) {
		$this->instances = $this->validateInstances($instances);
	}

	protected function validateInstances($instances) {
		if ( $instances === FALSE ) {
			$this->_overrides['instances'] = TRUE;
			return NULL;
		}

		if ( ! $instances instanceof \com\microsoft\wc\methods\response\GetServiceDefinition2\InstanceList  && ! is_null($instances) ) {
			$instances = new \com\microsoft\wc\methods\response\GetServiceDefinition2\InstanceList ($instances);
		}

		unset ($this->_overrides['instances']);
	
		return $instances;
	}

	public function getUpdatedDate($autoCreate = TRUE) {
		if ($this->updatedDate===NULL && $autoCreate && ! isset($this->_overrides['updatedDate']) ) {
			$this->updatedDate = $this->createUpdatedDate();
		}
		return $this->updatedDate;
	}
	
	protected function createUpdatedDate() {
		return NULL;
	}

	public function setUpdatedDate($updatedDate) {
		$this->updatedDate = $this->validateUpdatedDate($updatedDate);
	}

	protected function validateUpdatedDate($updatedDate) {
		if ( ! is_string($updatedDate) && ! is_null($updatedDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updatedDate', 'string'));
		}
	
		return $updatedDate;
	}
} // end class Info
