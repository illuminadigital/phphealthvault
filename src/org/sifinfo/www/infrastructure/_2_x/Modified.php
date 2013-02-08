<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Modified")
 */
class Modified {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="By")
	 */
	protected $by;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DateTime", name="DateTime")
	 */
	protected $dateTime;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\String", name="Description")
	 */
	protected $description;

	public function __construct($by = NULL, $dateTime = NULL, $description = NULL) {
		$this->by = ($by===NULL) ? NULL : $this->validateBy($by);
		$this->dateTime = ($dateTime===NULL) ? NULL : $this->validateDateTime($dateTime);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
	}

	public function getBy() {
		if ($this->by===NULL) {
			$this->by = $this->createBy();
		}
		return $this->by;
	}
	
	protected function createBy() {
		return NULL;
	}

	public function setBy($by) {
		$this->by = $this->validateBy($by);
	}

	protected function validateBy($by) {
		if (!is_normalizedString($by)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'by', 'normalizedString'));
		}
	
		return $by;
	}

	public function getDateTime() {
		if ($this->dateTime===NULL) {
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
		if (!is_dateTime($dateTime)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateTime', 'dateTime'));
		}
	
		return $dateTime;
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}
} // end class Modified
