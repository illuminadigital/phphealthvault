<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="PGPDataType")
 */
class PGPDataType {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="PGPKeyID")
	 */
	protected $pGPKeyID;

	/**
	 * @XmlText	(type="string", name="PGPKeyPacket")
	 */
	protected $pGPKeyPacket;

	public function __construct($pGPKeyID = NULL, $pGPKeyPacket = NULL) {
		$this->pGPKeyID = ($pGPKeyID===NULL) ? NULL : $this->validatePGPKeyID($pGPKeyID);
		$this->pGPKeyPacket = ($pGPKeyPacket===NULL) ? NULL : $this->validatePGPKeyPacket($pGPKeyPacket);
	}

	public function getPGPKeyID() {
		if ($this->pGPKeyID===NULL) {
			$this->pGPKeyID = $this->createPGPKeyID();
		}
		return $this->pGPKeyID;
	}
	
	protected function createPGPKeyID() {
		return NULL;
	}

	public function setPGPKeyID($pGPKeyID) {
		$this->pGPKeyID = $this->validatePGPKeyID($pGPKeyID);
	}

	protected function validatePGPKeyID($pGPKeyID) {
		if (!is_string($pGPKeyID)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'pGPKeyID', 'string'));
		}
	
		return $pGPKeyID;
	}

	public function getPGPKeyPacket() {
		if ($this->pGPKeyPacket===NULL) {
			$this->pGPKeyPacket = $this->createPGPKeyPacket();
		}
		return $this->pGPKeyPacket;
	}
	
	protected function createPGPKeyPacket() {
		return NULL;
	}

	public function setPGPKeyPacket($pGPKeyPacket) {
		$this->pGPKeyPacket = $this->validatePGPKeyPacket($pGPKeyPacket);
	}

	protected function validatePGPKeyPacket($pGPKeyPacket) {
		if (!is_string($pGPKeyPacket)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'pGPKeyPacket', 'string'));
		}
	
		return $pGPKeyPacket;
	}
} // end class PGPDataType
