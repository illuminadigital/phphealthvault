<?php
namespace com\microsoft\wc\thing\emotion;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.emotion", prefix="")
 * })
 * @XmlEntity	(xml="emotion")
 */
class Emotion extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A subjective record of an emotional state.
	 */

	const ID = '4b7971d6-e427-427d-bf2c-2fbcf76606b3';
	const NAME = 'Emotional State';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\OneToFive", name="mood")
	 */
	protected $mood;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\OneToFive", name="stress")
	 */
	protected $stress;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\OneToFive", name="wellbeing")
	 */
	protected $wellbeing;

	public function __construct($when = NULL, $mood = NULL, $stress = NULL, $wellbeing = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->mood = ($mood===NULL) ? NULL : $this->validateMood($mood);
		$this->stress = ($stress===NULL) ? NULL : $this->validateStress($stress);
		$this->wellbeing = ($wellbeing===NULL) ? NULL : $this->validateWellbeing($wellbeing);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getMood() {
		if ($this->mood===NULL) {
			$this->mood = $this->createMood();
		}
		return $this->mood;
	}
	
	protected function createMood() {
		return new \com\microsoft\wc\thing\types\OneToFive();
	}

	public function setMood($mood) {
		$this->mood = $this->validateMood($mood);
	}

	protected function validateMood($mood) {
		if ( ! $mood instanceof \com\microsoft\wc\thing\types\OneToFive  && ! is_null($mood) ) {
			$mood = new \com\microsoft\wc\thing\types\OneToFive ($mood);
		}
	
		return $mood;
	}

	public function getStress() {
		if ($this->stress===NULL) {
			$this->stress = $this->createStress();
		}
		return $this->stress;
	}
	
	protected function createStress() {
		return new \com\microsoft\wc\thing\types\OneToFive();
	}

	public function setStress($stress) {
		$this->stress = $this->validateStress($stress);
	}

	protected function validateStress($stress) {
		if ( ! $stress instanceof \com\microsoft\wc\thing\types\OneToFive  && ! is_null($stress) ) {
			$stress = new \com\microsoft\wc\thing\types\OneToFive ($stress);
		}
	
		return $stress;
	}

	public function getWellbeing() {
		if ($this->wellbeing===NULL) {
			$this->wellbeing = $this->createWellbeing();
		}
		return $this->wellbeing;
	}
	
	protected function createWellbeing() {
		return new \com\microsoft\wc\thing\types\OneToFive();
	}

	public function setWellbeing($wellbeing) {
		$this->wellbeing = $this->validateWellbeing($wellbeing);
	}

	protected function validateWellbeing($wellbeing) {
		if ( ! $wellbeing instanceof \com\microsoft\wc\thing\types\OneToFive  && ! is_null($wellbeing) ) {
			$wellbeing = new \com\microsoft\wc\thing\types\OneToFive ($wellbeing);
		}
	
		return $wellbeing;
	}
} // end class Emotion
