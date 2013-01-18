<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SpanGaps")
 */
class SpanGaps {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SpanGap", collection="true", name="SpanGap")
	 */
	protected $spanGap;

	public function __construct($spanGap = NULL) {
		$this->spanGap = ($spanGap===NULL) ? NULL : $this->validateSpanGap($spanGap);
	}

	public function getSpanGap() {
		if ($this->spanGap===NULL) {
			$this->spanGap = $this->createSpanGap();
		}
		return $this->spanGap;
	}
	
	protected function createSpanGap() {
		return array();
	}

	public function setSpanGap($spanGap) {
		$this->spanGap = $this->validateSpanGap($spanGap);
	}

	protected function validateSpanGap($spanGap) {
		if ( ! $spanGap instanceof \org\sifinfo\www\infrastructure\_2_x\SpanGap  && ! is_null($spanGap) ) {
			$spanGap = new \org\sifinfo\www\infrastructure\_2_x\SpanGap ($spanGap);
		}
		$count = count($spanGap);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'spanGap', 0));
		}
		foreach ($spanGap as $entry) {
			if (!($entry instanceof SpanGap)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'spanGap', 'SpanGap'));
			}
		}
	
		return $spanGap;
	}

	public function addSpanGap($spanGap) {
		$this->spanGap[] = $spanGap;
	}
} // end class SpanGaps
