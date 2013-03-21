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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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

	public function getReaction($autoCreate = TRUE) {
		if ($this->reaction===NULL && $autoCreate && ! isset($this->_overrides['reaction']) ) {
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
		if ( $reaction === FALSE ) {
			$this->_overrides['reaction'] = TRUE;
			return NULL;
		}

		if ( ! $reaction instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($reaction) ) {
			$reaction = new \com\microsoft\wc\types\CodableValue ($reaction);
		}

		unset ($this->_overrides['reaction']);
	
		return $reaction;
	}

	public function getFirstObserved($autoCreate = TRUE) {
		if ($this->firstObserved===NULL && $autoCreate && ! isset($this->_overrides['firstObserved']) ) {
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
		if ( $firstObserved === FALSE ) {
			$this->_overrides['firstObserved'] = TRUE;
			return NULL;
		}

		if ( ! $firstObserved instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($firstObserved) ) {
			$firstObserved = new \com\microsoft\wc\dates\ApproxDateTime ($firstObserved);
		}

		unset ($this->_overrides['firstObserved']);
	
		return $firstObserved;
	}

	public function getAllergenType($autoCreate = TRUE) {
		if ($this->allergenType===NULL && $autoCreate && ! isset($this->_overrides['allergenType']) ) {
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
		if ( $allergenType === FALSE ) {
			$this->_overrides['allergenType'] = TRUE;
			return NULL;
		}

		if ( ! $allergenType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($allergenType) ) {
			$allergenType = new \com\microsoft\wc\types\CodableValue ($allergenType);
		}

		unset ($this->_overrides['allergenType']);
	
		return $allergenType;
	}

	public function getAllergenCode($autoCreate = TRUE) {
		if ($this->allergenCode===NULL && $autoCreate && ! isset($this->_overrides['allergenCode']) ) {
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
		if ( $allergenCode === FALSE ) {
			$this->_overrides['allergenCode'] = TRUE;
			return NULL;
		}

		if ( ! $allergenCode instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($allergenCode) ) {
			$allergenCode = new \com\microsoft\wc\types\CodableValue ($allergenCode);
		}

		unset ($this->_overrides['allergenCode']);
	
		return $allergenCode;
	}

	public function getTreatmentProvider($autoCreate = TRUE) {
		if ($this->treatmentProvider===NULL && $autoCreate && ! isset($this->_overrides['treatmentProvider']) ) {
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
		if ( $treatmentProvider === FALSE ) {
			$this->_overrides['treatmentProvider'] = TRUE;
			return NULL;
		}

		if ( ! $treatmentProvider instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($treatmentProvider) ) {
			$treatmentProvider = new \com\microsoft\wc\thing\types\Person ($treatmentProvider);
		}

		unset ($this->_overrides['treatmentProvider']);
	
		return $treatmentProvider;
	}

	public function getTreatment($autoCreate = TRUE) {
		if ($this->treatment===NULL && $autoCreate && ! isset($this->_overrides['treatment']) ) {
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
		if ( $treatment === FALSE ) {
			$this->_overrides['treatment'] = TRUE;
			return NULL;
		}

		if ( ! $treatment instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($treatment) ) {
			$treatment = new \com\microsoft\wc\types\CodableValue ($treatment);
		}

		unset ($this->_overrides['treatment']);
	
		return $treatment;
	}

	public function getIsNegated($autoCreate = TRUE) {
		if ($this->isNegated===NULL && $autoCreate && ! isset($this->_overrides['isNegated']) ) {
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
