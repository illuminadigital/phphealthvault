<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="SignatureData")
 */
class SignatureData {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\HealthVaultThingSignatureMethod", name="hv-signature-method")
	 */
	protected $hvSignatureMethod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobSignatureInfo", name="blob-signature-info")
	 */
	protected $blobSignatureInfo;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="algorithm-tag")
	 */
	protected $algorithmTag;

	public function __construct($hvSignatureMethod = NULL, $blobSignatureInfo = NULL, $algorithmTag = NULL) {
		$this->hvSignatureMethod = ($hvSignatureMethod===NULL) ? NULL : $this->validateHvSignatureMethod($hvSignatureMethod);
		$this->blobSignatureInfo = ($blobSignatureInfo===NULL) ? NULL : $this->validateBlobSignatureInfo($blobSignatureInfo);
		$this->algorithmTag = ($algorithmTag===NULL) ? NULL : $this->validateAlgorithmTag($algorithmTag);
	}

	public function getHvSignatureMethod() {
		if ($this->hvSignatureMethod===NULL) {
			$this->hvSignatureMethod = $this->createHvSignatureMethod();
		}
		return $this->hvSignatureMethod;
	}
	
	protected function createHvSignatureMethod() {
		return new \com\microsoft\wc\thing\HealthVaultThingSignatureMethod();
	}

	public function setHvSignatureMethod($hvSignatureMethod) {
		$this->hvSignatureMethod = $this->validateHvSignatureMethod($hvSignatureMethod);
	}

	protected function validateHvSignatureMethod($hvSignatureMethod) {
		if ( ! $hvSignatureMethod instanceof \com\microsoft\wc\thing\HealthVaultThingSignatureMethod ) {
			$hvSignatureMethod = new \com\microsoft\wc\thing\HealthVaultThingSignatureMethod ($hvSignatureMethod);
		}
	
		return $hvSignatureMethod;
	}

	public function getBlobSignatureInfo() {
		if ($this->blobSignatureInfo===NULL) {
			$this->blobSignatureInfo = $this->createBlobSignatureInfo();
		}
		return $this->blobSignatureInfo;
	}
	
	protected function createBlobSignatureInfo() {
		return new \com\microsoft\wc\thing\BlobSignatureInfo();
	}

	public function setBlobSignatureInfo($blobSignatureInfo) {
		$this->blobSignatureInfo = $this->validateBlobSignatureInfo($blobSignatureInfo);
	}

	protected function validateBlobSignatureInfo($blobSignatureInfo) {
		if ( ! $blobSignatureInfo instanceof \com\microsoft\wc\thing\BlobSignatureInfo  && ! is_null($blobSignatureInfo) ) {
			$blobSignatureInfo = new \com\microsoft\wc\thing\BlobSignatureInfo ($blobSignatureInfo);
		}
	
		return $blobSignatureInfo;
	}

	public function getAlgorithmTag() {
		if ($this->algorithmTag===NULL) {
			$this->algorithmTag = $this->createAlgorithmTag();
		}
		return $this->algorithmTag;
	}
	
	protected function createAlgorithmTag() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setAlgorithmTag($algorithmTag) {
		$this->algorithmTag = $this->validateAlgorithmTag($algorithmTag);
	}

	protected function validateAlgorithmTag($algorithmTag) {
		if ( ! $algorithmTag instanceof \com\microsoft\wc\types\Stringnznw ) {
			$algorithmTag = new \com\microsoft\wc\types\Stringnznw ($algorithmTag);
		}
	
		return $algorithmTag;
	}
} // end class SignatureData
