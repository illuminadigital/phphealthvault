<?php
namespace com\microsoft\wc\thing\status;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.status", prefix="")
 * })
 * @XmlEntity	(xml="status")
 */
class Status extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Stores status information about a specific health record item.
	 * Each status is related to one or more health record items which are storedas related items.For example, the HealthVault Shell creates a status item to indicate that a CCR or CCD document has been reconciled, and that document is linked using a related item.
	 */

	const ID = 'd33a32b2-00de-43b8-9f2a-c4c7e9f580ec';
	const NAME = 'Status';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status-type")
	 */
	protected $statusType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="text")
	 */
	protected $text;

	public function __construct($statusType = NULL, $text = NULL) {
		$this->statusType = ($statusType===NULL) ? NULL : $this->validateStatusType($statusType);
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
	}

	public function getStatusType($autoCreate = TRUE) {
		if ($this->statusType===NULL && $autoCreate && ! isset($this->_overrides['statusType']) ) {
			$this->statusType = $this->createStatusType();
		}
		return $this->statusType;
	}
	
	protected function createStatusType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatusType($statusType) {
		$this->statusType = $this->validateStatusType($statusType);
	}

	protected function validateStatusType($statusType) {
		if ( ! $statusType instanceof \com\microsoft\wc\types\CodableValue ) {
			$statusType = new \com\microsoft\wc\types\CodableValue ($statusType);
		}
	
		return $statusType;
	}

	public function getText($autoCreate = TRUE) {
		if ($this->text===NULL && $autoCreate && ! isset($this->_overrides['text']) ) {
			$this->text = $this->createText();
		}
		return $this->text;
	}
	
	protected function createText() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setText($text) {
		$this->text = $this->validateText($text);
	}

	protected function validateText($text) {
		if ( $text === FALSE ) {
			$this->_overrides['text'] = TRUE;
			return NULL;
		}

		if ( ! $text instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($text) ) {
			$text = new \com\microsoft\wc\types\Stringnznw ($text);
		}

		unset ($this->_overrides['text']);
	
		return $text;
	}
} // end class Status
