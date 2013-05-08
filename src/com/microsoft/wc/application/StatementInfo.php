<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="StatementInfo")
 */
class StatementInfo {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\CultureSpecificStatement", collection="true", name="statement")
	 */
	protected $statement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="content-type")
	 */
	protected $contentType;

	public function __construct($statement = NULL, $contentType = NULL) {
		$this->statement = ($statement===NULL) ? NULL : $this->validateStatement($statement);
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
	}

	public function getStatement($autoCreate = TRUE) {
		if ($this->statement===NULL && $autoCreate && ! isset($this->_overrides['statement']) ) {
			$this->statement = $this->createStatement();
		}
		return $this->statement;
	}
	
	protected function createStatement() {
		return array();
	}

	public function setStatement($statement) {
		$this->statement = $this->validateStatement($statement);
	}

	protected function validateStatement($statement) {
		if ( ! is_array ($statement) ) {
			$statement = array($statement);
		}
		$count = count($statement);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'statement', 1));
		}
		foreach ($statement as $entry) {
			if (!($entry instanceof \com\microsoft\wc\application\CultureSpecificStatement )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'statement', 'CultureSpecificStatement'));
			}
		}
	
		return $statement;
	}

	public function addStatement($statement) {
		$this->statement[] = $statement;
	}

	public function getContentType($autoCreate = TRUE) {
		if ($this->contentType===NULL && $autoCreate && ! isset($this->_overrides['contentType']) ) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof \com\microsoft\wc\types\String255 ) {
			$contentType = new \com\microsoft\wc\types\String255 ($contentType);
		}
	
		return $contentType;
	}
} // end class StatementInfo
