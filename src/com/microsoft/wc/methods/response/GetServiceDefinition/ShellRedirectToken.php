<?php
namespace com\microsoft\wc\methods\response\GetServiceDefinition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetServiceDefinition", prefix="")
 * })
 * @XmlEntity	(xml="ShellRedirectToken")
 */
class ShellRedirectToken {
	/**
	 * A representation of the redirect information that can be supplied along with the Shell redirect url to access specific functionalities in the Shell.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="token")
	 */
	protected $token;

	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlText	(type="string", name="querystring-parameters")
	 */
	protected $querystringParameters;

	public function __construct($token = NULL, $description = NULL, $querystringParameters = NULL) {
		$this->token = ($token===NULL) ? NULL : $this->validateToken($token);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->querystringParameters = ($querystringParameters===NULL) ? NULL : $this->validateQuerystringParameters($querystringParameters);
	}

	public function getToken($autoCreate = TRUE) {
		if ($this->token===NULL && $autoCreate && ! isset($this->_overrides['token']) ) {
			$this->token = $this->createToken();
		}
		return $this->token;
	}
	
	protected function createToken() {
		return '';
	}

	public function setToken($token) {
		$this->token = $this->validateToken($token);
	}

	protected function validateToken($token) {
		if (!is_string($token)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'token', 'string'));
		}
	
		return $token;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if (!is_string($description)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getQuerystringParameters($autoCreate = TRUE) {
		if ($this->querystringParameters===NULL && $autoCreate && ! isset($this->_overrides['querystringParameters']) ) {
			$this->querystringParameters = $this->createQuerystringParameters();
		}
		return $this->querystringParameters;
	}
	
	protected function createQuerystringParameters() {
		return '';
	}

	public function setQuerystringParameters($querystringParameters) {
		$this->querystringParameters = $this->validateQuerystringParameters($querystringParameters);
	}

	protected function validateQuerystringParameters($querystringParameters) {
		if (!is_string($querystringParameters)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'querystringParameters', 'string'));
		}
	
		return $querystringParameters;
	}
} // end class ShellRedirectToken
