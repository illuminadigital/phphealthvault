<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="InfoXml")
 */
class InfoXml {
	/**
	 * Contains important auxillary information that can be used for operations such as unit conversions.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	public function __construct($any = NULL) {
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
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
		foreach ($any as $entry) {
			if ( ! is_object($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
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
} // end class InfoXml
