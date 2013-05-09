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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SpanGap", collection="true", name="SpanGap")
	 */
	protected $spanGap;

	public function __construct($spanGap = NULL) {
		$this->spanGap = ($spanGap===NULL) ? NULL : $this->validateSpanGap($spanGap);
	}

	public function getSpanGap($autoCreate = TRUE) {
		if ($this->spanGap===NULL && $autoCreate && ! isset($this->_overrides['spanGap']) ) {
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
		if ( $spanGap === FALSE ) {
			$this->_overrides['spanGap'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($spanGap) && ! is_null($spanGap) ) {
			$spanGap = array($spanGap);
		}

		unset ($this->_overrides['spanGap']);
		$count = count($spanGap);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'spanGap', 0));
		}
		if ( ! empty($spanGap) ) {
			foreach ($spanGap as $entry) {
				if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\SpanGap )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'spanGap', 'SpanGap'));
				}
			}
		}
	
		return $spanGap;
	}

	public function addSpanGap($spanGap) {
		$this->spanGap[] = $spanGap;
	}
} // end class SpanGaps
