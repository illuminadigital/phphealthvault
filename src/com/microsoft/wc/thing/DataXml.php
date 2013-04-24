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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Common", name="common")
	 */
	protected $common;

	/**
	 * @XmlAttribute	(type="string", name="transform")
	 */
	protected $transform;

	public function __construct($any = NULL, $common = NULL, $transform = NULL) {
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
		$this->common = ($common===NULL) ? NULL : $this->validateCommon($common);
		$this->transform = ($transform===NULL) ? NULL : $this->validateTransform($transform);
	}

	public function getAny($autoCreate = TRUE) {
		if ($this->any===NULL && $autoCreate && ! isset($this->_overrides['any']) ) {
			$this->any = $this->createAny();
		}
		return $this->any;
	}
	
	protected function createAny() {
		return array();
	}

	public function setAny($any) {
		$this->any = $this->validateAny($any);
	}

	protected function validateAny($any) {
		$count = count($any);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'any', 0));
		}
		if ( ! empty($any) ) {
			foreach ($any as $entry) {
				if ( ! is_object($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
				}
			}
		}
	
		return $any;
	}

	public function addAny($any) {
		$this->any[] = $this->validateAnyType($any);
	}

	protected function validateAnyType($any) {
		if ( ! is_object($any) && ! is_null($any) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
		}
	
		return $any;
	}

	public function getCommon($autoCreate = TRUE) {
		if ($this->common===NULL && $autoCreate && ! isset($this->_overrides['common']) ) {
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
		if ( $common === FALSE ) {
			$this->_overrides['common'] = TRUE;
			return NULL;
		}

		if ( ! $common instanceof \com\microsoft\wc\thing\Common  && ! is_null($common) ) {
			$common = new \com\microsoft\wc\thing\Common ($common);
		}

		unset ($this->_overrides['common']);
	
		return $common;
	}

	public function getTransform($autoCreate = TRUE) {
		if ($this->transform===NULL && $autoCreate && ! isset($this->_overrides['transform']) ) {
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
