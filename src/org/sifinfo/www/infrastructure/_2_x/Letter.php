<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Letter")
 */
class Letter {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ValidMark", collection="true", name="ValidMark")
	 */
	protected $validMark;

	public function __construct($validMark = NULL) {
		$this->validMark = ($validMark===NULL) ? NULL : $this->validateValidMark($validMark);
	}

	public function getValidMark() {
		if ($this->validMark===NULL) {
			$this->validMark = $this->createValidMark();
		}
		return $this->validMark;
	}
	
	protected function createValidMark() {
		return array();
	}

	public function setValidMark($validMark) {
		$this->validMark = $this->validateValidMark($validMark);
	}

	protected function validateValidMark($validMark) {
		if ( ! $validMark instanceof \org\sifinfo\www\infrastructure\_2_x\ValidMark ) {
			$validMark = new \org\sifinfo\www\infrastructure\_2_x\ValidMark ($validMark);
		}
		$count = count($validMark);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'validMark', 1));
		}
		foreach ($validMark as $entry) {
			if (!($entry instanceof ValidMark)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'validMark', 'ValidMark'));
			}
		}
	
		return $validMark;
	}

	public function addValidMark($validMark) {
		$this->validMark[] = $validMark;
	}
} // end class Letter
