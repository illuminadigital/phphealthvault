<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="DataXml")
 */
class DataXml {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Common", name="common")
	 */
	protected $common;

	/**
	 * @XmlAttribute	(type="string", name="transform")
	 */
	protected $transform;

	public function __construct($common = NULL, $transform = NULL) {
		$this->common = ($common===NULL) ? NULL : $this->validateCommon($common);
		$this->transform = ($transform===NULL) ? NULL : $this->validateTransform($transform);
	}

	public function getCommon() {
		if ($this->common===NULL) {
			$this->common = $this->createCommon();
		}
		return $this->common;
	}
	
	protected function createCommon() {
		return new \com\microsoft\wc\thing\Common();
	}

	public function setCommon($common) {
		$this->common = $this->validateCommon($common);
	}

	protected function validateCommon($common) {
		if ( ! $common instanceof \com\microsoft\wc\thing\Common  && ! is_null($common) ) {
			$common = new \com\microsoft\wc\thing\Common ($common);
		}
	
		return $common;
	}

	public function getTransform() {
		if ($this->transform===NULL) {
			$this->transform = $this->createTransform();
		}
		return $this->transform;
	}
	
	protected function createTransform() {
		return '';
	}

	public function setTransform($transform) {
		$this->transform = $this->validateTransform($transform);
	}

	protected function validateTransform($transform) {
		if ( ! is_string($transform) && ! is_null($transform) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'transform', 'string'));
		}
	
		return $transform;
	}
} // end class DataXml
