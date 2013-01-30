<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="TimeElements")
 */
class TimeElements {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TimeElement", collection="true", name="TimeElement")
	 */
	protected $timeElement;

	public function __construct($timeElement = NULL) {
		$this->timeElement = ($timeElement===NULL) ? NULL : $this->validateTimeElement($timeElement);
	}

	public function getTimeElement() {
		if ($this->timeElement===NULL) {
			$this->timeElement = $this->createTimeElement();
		}
		return $this->timeElement;
	}
	
	protected function createTimeElement() {
		return array();
	}

	public function setTimeElement($timeElement) {
		$this->timeElement = $this->validateTimeElement($timeElement);
	}

	protected function validateTimeElement($timeElement) {
		if ( ! is_array ($timeElement) && ! is_null($timeElement) ) {
			$timeElement = array($timeElement);
		}
		$count = count($timeElement);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'timeElement', 0));
		}
		foreach ($timeElement as $entry) {
			if (!($entry instanceof TimeElement)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'timeElement', 'TimeElement'));
			}
		}
	
		return $timeElement;
	}

	public function addTimeElement($timeElement) {
		$this->timeElement[] = $timeElement;
	}
} // end class TimeElements
