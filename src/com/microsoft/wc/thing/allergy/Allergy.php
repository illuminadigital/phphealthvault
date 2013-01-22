<?php
namespace com\microsoft\wc\thing\allergy;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.allergy", prefix="")
 * })
 * @XmlEntity	(xml="allergy")
 */
class Allergy extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to an allergy.
	 * This thing type describes an allergy a person has. Theallergic-episode type defines an occurrence of that episode resulting in symptoms.
	 */

	const ID = '52bf9104-2c5e-4f1f-a66d-552ebcc53df7';
	const NAME = 'Allergy';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="reaction")
	 */
	protected $reaction;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="first-observed")
	 */
	protected $firstObserved;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="allergen-type")
	 */
	protected $allergenType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="allergen-code")
	 */
	protected $allergenCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="treatment-provider")
	 */
	protected $treatmentProvider;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="treatment")
	 */
	protected $treatment;

	/**
	 * @XmlText	(type="boolean", name="is-negated")
	 */
	protected $isNegated;

	public function __construct($name = NULL, $reaction = NULL, $firstObserved = NULL, $allergenType = NULL, $allergenCode = NULL, $treatmentProvider = NULL, $treatment = NULL, $isNegated = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->reaction = ($reaction===NULL) ? NULL : $this->validateReaction($reaction);
		$this->firstObserved = ($firstObserved===NULL) ? NULL : $this->validateFirstObserved($firstObserved);
		$this->allergenType = ($allergenType===NULL) ? NULL : $this->validateAllergenType($allergenType);
		$this->allergenCode = ($allergenCode===NULL) ? NULL : $this->validateAllergenCode($allergenCode);
		$this->treatmentProvider = ($treatmentProvider===NULL) ? NULL : $this->validateTreatmentProvider($treatmentProvider);
		$this->treatment = ($treatment===NULL) ? NULL : $this->validateTreatment($treatment);
		$this->isNegated = ($isNegated===NULL) ? NULL : $this->validateIsNegated($isNegated);
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

	public function getFirstObserved() {
		if ($this->firstObserved===NULL) {
			$this->firstObserved = $this->createFirstObserved();
		}
		return $this->firstObserved;
	}
	
	protected function createFirstObserved() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setFirstObserved($firstObserved) {
		$this->firstObserved = $this->validateFirstObserved($firstObserved);
	}

	protected function validateFirstObserved($firstObserved) {
		if ( ! $firstObserved instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($firstObserved) ) {
			$firstObserved = new \com\microsoft\wc\dates\ApproxDateTime ($firstObserved);
		}
	
		return $firstObserved;
	}

	public function getAllergenType() {
		if ($this->allergenType===NULL) {
			$this->allergenType = $this->createAllergenType();
		}
		return $this->allergenType;
	}
	
	protected function createAllergenType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setAllergenType($allergenType) {
		$this->allergenType = $this->validateAllergenType($allergenType);
	}

	protected function validateAllergenType($allergenType) {
		if ( ! $allergenType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($allergenType) ) {
			$allergenType = new \com\microsoft\wc\types\CodableValue ($allergenType);
		}
	
		return $allergenType;
	}

	public function getAllergenCode() {
		if ($this->allergenCode===NULL) {
			$this->allergenCode = $this->createAllergenCode();
		}
		return $this->allergenCode;
	}
	
	protected function createAllergenCode() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setAllergenCode($allergenCode) {
		$this->allergenCode = $this->validateAllergenCode($allergenCode);
	}

	protected function validateAllergenCode($allergenCode) {
		if ( ! $allergenCode instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($allergenCode) ) {
			$allergenCode = new \com\microsoft\wc\types\CodableValue ($allergenCode);
		}
	
		return $allergenCode;
	}

	public function getTreatmentProvider() {
		if ($this->treatmentProvider===NULL) {
			$this->treatmentProvider = $this->createTreatmentProvider();
		}
		return $this->treatmentProvider;
	}
	
	protected function createTreatmentProvider() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setTreatmentProvider($treatmentProvider) {
		$this->treatmentProvider = $this->validateTreatmentProvider($treatmentProvider);
	}

	protected function validateTreatmentProvider($treatmentProvider) {
		if ( ! $treatmentProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($treatmentProvider) ) {
			$treatmentProvider = new \com\microsoft\wc\thing\types\Person ($treatmentProvider);
		}
	
		return $treatmentProvider;
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

	public function getIsNegated() {
		if ($this->isNegated===NULL) {
			$this->isNegated = $this->createIsNegated();
		}
		return $this->isNegated;
	}
	
	protected function createIsNegated() {
		return FALSE;
	}

	public function setIsNegated($isNegated) {
		$this->isNegated = $this->validateIsNegated($isNegated);
	}

	protected function validateIsNegated($isNegated) {
		if ( ! is_bool($isNegated) && ! is_null($isNegated) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isNegated', 'boolean'));
		}
	
		return $isNegated;
	}
} // end class Allergy
