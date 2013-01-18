<?php
namespace com\microsoft\wc\thing\status;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.status", prefix="")
 * })
 * @XmlEntity	(xml="status")
 */
class Status extends \com\microsoft\wc\thing\Thing {
	/**
	 * Stores status information about a specific health record item.
	 * Each status is related to one or more health record items which are storedas related items.For example, the HealthVault Shell creates a status item to indicate that a CCR or CCD document has been reconciled, and that document is linked using a related item.
	 */

	const ID = 'd33a32b2-00de-43b8-9f2a-c4c7e9f580ec';
	const NAME = 'Status';

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

	public function getStatusType() {
		if ($this->statusType===NULL) {
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

	public function getText() {
		if ($this->text===NULL) {
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
		if ( ! $text instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($text) ) {
			$text = new \com\microsoft\wc\types\Stringnznw ($text);
		}
	
		return $text;
	}
} // end class Status
