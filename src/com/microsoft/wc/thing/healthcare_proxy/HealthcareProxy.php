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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
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

	public function getProxy($autoCreate = TRUE) {
		if ($this->proxy===NULL && $autoCreate && ! isset($this->_overrides['proxy']) ) {
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
		if ( $proxy === FALSE ) {
			$this->_overrides['proxy'] = TRUE;
			return NULL;
		}

		if ( ! $proxy instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($proxy) ) {
			$proxy = new \com\microsoft\wc\thing\types\Person ($proxy);
		}

		unset ($this->_overrides['proxy']);
	
		return $proxy;
	}

	public function getAlternate($autoCreate = TRUE) {
		if ($this->alternate===NULL && $autoCreate && ! isset($this->_overrides['alternate']) ) {
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
		if ( $alternate === FALSE ) {
			$this->_overrides['alternate'] = TRUE;
			return NULL;
		}

		if ( ! $alternate instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($alternate) ) {
			$alternate = new \com\microsoft\wc\thing\types\Person ($alternate);
		}

		unset ($this->_overrides['alternate']);
	
		return $alternate;
	}

	public function getPrimaryWitness($autoCreate = TRUE) {
		if ($this->primaryWitness===NULL && $autoCreate && ! isset($this->_overrides['primaryWitness']) ) {
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
		if ( $primaryWitness === FALSE ) {
			$this->_overrides['primaryWitness'] = TRUE;
			return NULL;
		}

		if ( ! $primaryWitness instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($primaryWitness) ) {
			$primaryWitness = new \com\microsoft\wc\thing\types\Person ($primaryWitness);
		}

		unset ($this->_overrides['primaryWitness']);
	
		return $primaryWitness;
	}

	public function getSecondaryWitness($autoCreate = TRUE) {
		if ($this->secondaryWitness===NULL && $autoCreate && ! isset($this->_overrides['secondaryWitness']) ) {
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
		if ( $secondaryWitness === FALSE ) {
			$this->_overrides['secondaryWitness'] = TRUE;
			return NULL;
		}

		if ( ! $secondaryWitness instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($secondaryWitness) ) {
			$secondaryWitness = new \com\microsoft\wc\thing\types\Person ($secondaryWitness);
		}

		unset ($this->_overrides['secondaryWitness']);
	
		return $secondaryWitness;
	}

	public function getContent($autoCreate = TRUE) {
		if ($this->content===NULL && $autoCreate && ! isset($this->_overrides['content']) ) {
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
