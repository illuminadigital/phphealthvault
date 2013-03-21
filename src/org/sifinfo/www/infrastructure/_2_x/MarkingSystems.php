<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MarkingSystems")
 */
class MarkingSystems {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MarkValueInfoData", collection="true", name="MarkValueInfoData")
	 */
	protected $markValueInfoData;

	public function __construct($markValueInfoData = NULL) {
		$this->markValueInfoData = ($markValueInfoData===NULL) ? NULL : $this->validateMarkValueInfoData($markValueInfoData);
	}

	public function getMarkValueInfoData($autoCreate = TRUE) {
		if ($this->markValueInfoData===NULL && $autoCreate && ! isset($this->_overrides['markValueInfoData']) ) {
			$this->markValueInfoData = $this->createMarkValueInfoData();
		}
		return $this->markValueInfoData;
	}
	
	protected function createMarkValueInfoData() {
		return array();
	}

	public function setMarkValueInfoData($markValueInfoData) {
		$this->markValueInfoData = $this->validateMarkValueInfoData($markValueInfoData);
	}

	protected function validateMarkValueInfoData($markValueInfoData) {
		if ( ! is_array ($markValueInfoData) ) {
			$markValueInfoData = array($markValueInfoData);
		}
		$count = count($markValueInfoData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'markValueInfoData', 1));
		}
		foreach ($markValueInfoData as $entry) {
			if (!($entry instanceof MarkValueInfoData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'markValueInfoData', 'MarkValueInfoData'));
			}
		}
	
		return $markValueInfoData;
	}

	public function addMarkValueInfoData($markValueInfoData) {
		$this->markValueInfoData[] = $markValueInfoData;
	}
} // end class MarkingSystems
