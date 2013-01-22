<?php
namespace com\microsoft\wc\thing\healthcare_proxy;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.healthcare-proxy", prefix="")
 * })
 * @XmlEntity	(xml="healthcare-proxy")
 */
class HealthcareProxy extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a healthcare proxy.
	 * This thing type describes the healthcare proxy of a person.
	 */

	const ID = '7EA47715-CBA4-47F0-99D2-EB0A9FB4A85C';
	const NAME = 'HealthCare Proxy';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="proxy")
	 */
	protected $proxy;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="alternate")
	 */
	protected $alternate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="primary-witness")
	 */
	protected $primaryWitness;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="secondary-witness")
	 */
	protected $secondaryWitness;

	/**
	 * @XmlText	(type="string", name="content")
	 */
	protected $content;

	public function __construct($when = NULL, $proxy = NULL, $alternate = NULL, $primaryWitness = NULL, $secondaryWitness = NULL, $content = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->proxy = ($proxy===NULL) ? NULL : $this->validateProxy($proxy);
		$this->alternate = ($alternate===NULL) ? NULL : $this->validateAlternate($alternate);
		$this->primaryWitness = ($primaryWitness===NULL) ? NULL : $this->validatePrimaryWitness($primaryWitness);
		$this->secondaryWitness = ($secondaryWitness===NULL) ? NULL : $this->validateSecondaryWitness($secondaryWitness);
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
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

	public function getProxy() {
		if ($this->proxy===NULL) {
			$this->proxy = $this->createProxy();
		}
		return $this->proxy;
	}
	
	protected function createProxy() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setProxy($proxy) {
		$this->proxy = $this->validateProxy($proxy);
	}

	protected function validateProxy($proxy) {
		if ( ! $proxy instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($proxy) ) {
			$proxy = new \com\microsoft\wc\thing\types\Person ($proxy);
		}
	
		return $proxy;
	}

	public function getAlternate() {
		if ($this->alternate===NULL) {
			$this->alternate = $this->createAlternate();
		}
		return $this->alternate;
	}
	
	protected function createAlternate() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setAlternate($alternate) {
		$this->alternate = $this->validateAlternate($alternate);
	}

	protected function validateAlternate($alternate) {
		if ( ! $alternate instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($alternate) ) {
			$alternate = new \com\microsoft\wc\thing\types\Person ($alternate);
		}
	
		return $alternate;
	}

	public function getPrimaryWitness() {
		if ($this->primaryWitness===NULL) {
			$this->primaryWitness = $this->createPrimaryWitness();
		}
		return $this->primaryWitness;
	}
	
	protected function createPrimaryWitness() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setPrimaryWitness($primaryWitness) {
		$this->primaryWitness = $this->validatePrimaryWitness($primaryWitness);
	}

	protected function validatePrimaryWitness($primaryWitness) {
		if ( ! $primaryWitness instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($primaryWitness) ) {
			$primaryWitness = new \com\microsoft\wc\thing\types\Person ($primaryWitness);
		}
	
		return $primaryWitness;
	}

	public function getSecondaryWitness() {
		if ($this->secondaryWitness===NULL) {
			$this->secondaryWitness = $this->createSecondaryWitness();
		}
		return $this->secondaryWitness;
	}
	
	protected function createSecondaryWitness() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setSecondaryWitness($secondaryWitness) {
		$this->secondaryWitness = $this->validateSecondaryWitness($secondaryWitness);
	}

	protected function validateSecondaryWitness($secondaryWitness) {
		if ( ! $secondaryWitness instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($secondaryWitness) ) {
			$secondaryWitness = new \com\microsoft\wc\thing\types\Person ($secondaryWitness);
		}
	
		return $secondaryWitness;
	}

	public function getContent() {
		if ($this->content===NULL) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return '';
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		if ( ! is_string($content) && ! is_null($content) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'content', 'string'));
		}
	
		return $content;
	}
} // end class HealthcareProxy
