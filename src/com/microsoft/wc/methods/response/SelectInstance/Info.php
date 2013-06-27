<?php
namespace com\microsoft\wc\methods\response\SelectInstance;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.SelectInstance", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Instance", name="selected-instance")
	 */
	protected $selectedInstance;

	public function __construct($selectedInstance = NULL) {
		$this->selectedInstance = ($selectedInstance===NULL) ? NULL : $this->validateSelectedInstance($selectedInstance);
	}

	public function getSelectedInstance($autoCreate = TRUE) {
		if ($this->selectedInstance===NULL && $autoCreate && ! isset($this->_overrides['selectedInstance']) ) {
			$this->selectedInstance = $this->createSelectedInstance();
		}
		return $this->selectedInstance;
	}
	
	protected function createSelectedInstance() {
		return new \com\microsoft\wc\types\Instance();
	}

	public function setSelectedInstance($selectedInstance) {
		$this->selectedInstance = $this->validateSelectedInstance($selectedInstance);
	}

	protected function validateSelectedInstance($selectedInstance) {
		if ( $selectedInstance === FALSE ) {
			$this->_overrides['selectedInstance'] = TRUE;
			return NULL;
		}

		if ( ! $selectedInstance instanceof \com\microsoft\wc\types\Instance  && ! is_null($selectedInstance) ) {
			$selectedInstance = new \com\microsoft\wc\types\Instance ($selectedInstance);
		}

		unset ($this->_overrides['selectedInstance']);
	
		return $selectedInstance;
	}
} // end class Info
