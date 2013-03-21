<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Narrative")
 */
class Narrative {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="integer", name="MaximumSize")
	 */
	protected $maximumSize;

	public function __construct($maximumSize = NULL) {
		$this->maximumSize = ($maximumSize===NULL) ? NULL : $this->validateMaximumSize($maximumSize);
	}

	public function getMaximumSize($autoCreate = TRUE) {
		if ($this->maximumSize===NULL && $autoCreate && ! isset($this->_overrides['maximumSize']) ) {
			$this->maximumSize = $this->createMaximumSize();
		}
		return $this->maximumSize;
	}
	
	protected function createMaximumSize() {
		return NULL;
	}

	public function setMaximumSize($maximumSize) {
		$this->maximumSize = $this->validateMaximumSize($maximumSize);
	}

	protected function validateMaximumSize($maximumSize) {
		$isValid = FALSE;
		if ( is_integer($maximumSize) ) {
			$isValid = TRUE;
		}
		else if ( is_null($maximumSize) ) {
			$isValid = TRUE;
		}
		else if ( $maximumSize == ($castVar = (integer) $maximumSize) ) {
			$isValid = TRUE;
			$maximumSize = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maximumSize', 'integer'));
		}
	
		return $maximumSize;
	}
} // end class Narrative
