<?php
namespace com\microsoft\wc\thing\concern;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.concern", prefix="")
 * })
 * @XmlEntity	(xml="concern")
 */
class Concern extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A concern that a person has about a condition or life issue.
	 * Concerns are more general than conditions, and are about the person's feelings. Examples include"concerned about managing a chronic condition", "family issues", "emotional issues", etc.
	 */

	const ID = 'AEA2E8F2-11DD-4A7D-AB43-1D58764EBC19';
	const NAME = 'Concern';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	public function __construct($description = NULL, $status = NULL) {
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! $description instanceof \com\microsoft\wc\types\CodableValue ) {
			$description = new \com\microsoft\wc\types\CodableValue ($description);
		}
	
		return $description;
	}

	public function getStatus($autoCreate = TRUE) {
		if ($this->status===NULL && $autoCreate && ! isset($this->_overrides['status']) ) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( $status === FALSE ) {
			$this->_overrides['status'] = TRUE;
			return NULL;
		}

		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}

		unset ($this->_overrides['status']);
	
		return $status;
	}
} // end class Concern
