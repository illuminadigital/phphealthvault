<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\types\String255;
use com\microsoft\wc\application\CultureSpecificStatement;

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

	public function getStatement() {
		if ($this->statement===NULL) {
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
		if ( ! $statement instanceof CultureSpecificStatement ) {
			$statement = new CultureSpecificStatement ($statement);
		}
		$count = count($statement);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'statement', 1));
		}
		foreach ($statement as $entry) {
			if (!($entry instanceof CultureSpecificStatement)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'statement', 'CultureSpecificStatement'));
			}
		}
	
		return $statement;
	}

	public function addStatement($statement) {
		$this->statement[] = $statement;
	}

	public function getContentType() {
		if ($this->contentType===NULL) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new String255();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof String255 ) {
			$contentType = new String255 ($contentType);
		}
	
		return $contentType;
	}
} // end class StatementInfo
