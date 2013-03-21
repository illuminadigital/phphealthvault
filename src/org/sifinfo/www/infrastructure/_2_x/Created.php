<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Created")
 */
class Created {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="DateTime")
	 */
	protected $dateTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Creators", name="Creators")
	 */
	protected $creators;

	public function __construct($dateTime = NULL, $creators = NULL) {
		$this->dateTime = ($dateTime===NULL) ? NULL : $this->validateDateTime($dateTime);
		$this->creators = ($creators===NULL) ? NULL : $this->validateCreators($creators);
	}

	public function getDateTime($autoCreate = TRUE) {
		if ($this->dateTime===NULL && $autoCreate && ! isset($this->_overrides['dateTime']) ) {
			$this->dateTime = $this->createDateTime();
		}
		return $this->dateTime;
	}
	
	protected function createDateTime() {
		return NULL;
	}

	public function setDateTime($dateTime) {
		$this->dateTime = $this->validateDateTime($dateTime);
	}

	protected function validateDateTime($dateTime) {
		if (!is_string($dateTime)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateTime', 'string'));
		}
	
		return $dateTime;
	}

	public function getCreators($autoCreate = TRUE) {
		if ($this->creators===NULL && $autoCreate && ! isset($this->_overrides['creators']) ) {
			$this->creators = $this->createCreators();
		}
		return $this->creators;
	}
	
	protected function createCreators() {
		return new \org\sifinfo\www\infrastructure\_2_x\Creators();
	}

	public function setCreators($creators) {
		$this->creators = $this->validateCreators($creators);
	}

	protected function validateCreators($creators) {
		if ( $creators === FALSE ) {
			$this->_overrides['creators'] = TRUE;
			return NULL;
		}

		if ( ! $creators instanceof \org\sifinfo\www\infrastructure\_2_x\Creators  && ! is_null($creators) ) {
			$creators = new \org\sifinfo\www\infrastructure\_2_x\Creators ($creators);
		}

		unset ($this->_overrides['creators']);
	
		return $creators;
	}
} // end class Created
