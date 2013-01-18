<?php
namespace com\microsoft\wc\thing\allergic_episode;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.allergic-episode", prefix="")
 * })
 * @XmlEntity	(xml="allergic-episode")
 */
class AllergicEpisode extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to a single instance of an allergicreaction.
	 */

	const ID = 'd65ad514-c492-4b59-bd05-f3f6cb43ceb3';
	const NAME = 'Allergic Episode';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="reaction")
	 */
	protected $reaction;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="treatment")
	 */
	protected $treatment;

	public function __construct($when = NULL, $name = NULL, $reaction = NULL, $treatment = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->reaction = ($reaction===NULL) ? NULL : $this->validateReaction($reaction);
		$this->treatment = ($treatment===NULL) ? NULL : $this->validateTreatment($treatment);
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

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
	}

	public function getReaction() {
		if ($this->reaction===NULL) {
			$this->reaction = $this->createReaction();
		}
		return $this->reaction;
	}
	
	protected function createReaction() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setReaction($reaction) {
		$this->reaction = $this->validateReaction($reaction);
	}

	protected function validateReaction($reaction) {
		if ( ! $reaction instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($reaction) ) {
			$reaction = new \com\microsoft\wc\types\CodableValue ($reaction);
		}
	
		return $reaction;
	}

	public function getTreatment() {
		if ($this->treatment===NULL) {
			$this->treatment = $this->createTreatment();
		}
		return $this->treatment;
	}
	
	protected function createTreatment() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setTreatment($treatment) {
		$this->treatment = $this->validateTreatment($treatment);
	}

	protected function validateTreatment($treatment) {
		if ( ! $treatment instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($treatment) ) {
			$treatment = new \com\microsoft\wc\types\CodableValue ($treatment);
		}
	
		return $treatment;
	}
} // end class AllergicEpisode
