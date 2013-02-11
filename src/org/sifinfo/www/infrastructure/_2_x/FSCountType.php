<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="FSCountType")
 */
class FSCountType {
	/**
	 * Reports aggregate counts and, optionally, received funds for individual combinations of student or staff meal status and meal type.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MealStatusType", name="MealStatus")
	 */
	protected $mealStatus;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EarnedStatusType", name="EarnedStatus")
	 */
	protected $earnedStatus;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MealTypeType", name="MealType")
	 */
	protected $mealType;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FSAmountType", name="Amount")
	 */
	protected $amount;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType", name="Tax")
	 */
	protected $tax;

	/**
	 * @XmlText	(type="float", name="Value")
	 */
	protected $value;

	public function __construct($mealStatus = NULL, $earnedStatus = NULL, $mealType = NULL, $amount = NULL, $tax = NULL, $value = NULL) {
		$this->mealStatus = ($mealStatus===NULL) ? NULL : $this->validateMealStatus($mealStatus);
		$this->earnedStatus = ($earnedStatus===NULL) ? NULL : $this->validateEarnedStatus($earnedStatus);
		$this->mealType = ($mealType===NULL) ? NULL : $this->validateMealType($mealType);
		$this->amount = ($amount===NULL) ? NULL : $this->validateAmount($amount);
		$this->tax = ($tax===NULL) ? NULL : $this->validateTax($tax);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getMealStatus() {
		if ($this->mealStatus===NULL) {
			$this->mealStatus = $this->createMealStatus();
		}
		return $this->mealStatus;
	}
	
	protected function createMealStatus() {
		return new \org\sifinfo\www\infrastructure\_2_x\MealStatusType();
	}

	public function setMealStatus($mealStatus) {
		$this->mealStatus = $this->validateMealStatus($mealStatus);
	}

	protected function validateMealStatus($mealStatus) {
		if ( ! $mealStatus instanceof \org\sifinfo\www\infrastructure\_2_x\MealStatusType  && ! is_null($mealStatus) ) {
			$mealStatus = new \org\sifinfo\www\infrastructure\_2_x\MealStatusType ($mealStatus);
		}
	
		return $mealStatus;
	}

	public function getEarnedStatus() {
		if ($this->earnedStatus===NULL) {
			$this->earnedStatus = $this->createEarnedStatus();
		}
		return $this->earnedStatus;
	}
	
	protected function createEarnedStatus() {
		return new \org\sifinfo\www\infrastructure\_2_x\EarnedStatusType();
	}

	public function setEarnedStatus($earnedStatus) {
		$this->earnedStatus = $this->validateEarnedStatus($earnedStatus);
	}

	protected function validateEarnedStatus($earnedStatus) {
		if ( ! $earnedStatus instanceof \org\sifinfo\www\infrastructure\_2_x\EarnedStatusType  && ! is_null($earnedStatus) ) {
			$earnedStatus = new \org\sifinfo\www\infrastructure\_2_x\EarnedStatusType ($earnedStatus);
		}
	
		return $earnedStatus;
	}

	public function getMealType() {
		if ($this->mealType===NULL) {
			$this->mealType = $this->createMealType();
		}
		return $this->mealType;
	}
	
	protected function createMealType() {
		return NULL;
	}

	public function setMealType($mealType) {
		$this->mealType = $this->validateMealType($mealType);
	}

	protected function validateMealType($mealType) {
	
		return $mealType;
	}

	public function getAmount() {
		if ($this->amount===NULL) {
			$this->amount = $this->createAmount();
		}
		return $this->amount;
	}
	
	protected function createAmount() {
		return new \org\sifinfo\www\infrastructure\_2_x\FSAmountType();
	}

	public function setAmount($amount) {
		$this->amount = $this->validateAmount($amount);
	}

	protected function validateAmount($amount) {
		if ( ! $amount instanceof \org\sifinfo\www\infrastructure\_2_x\FSAmountType  && ! is_null($amount) ) {
			$amount = new \org\sifinfo\www\infrastructure\_2_x\FSAmountType ($amount);
		}
	
		return $amount;
	}

	public function getTax() {
		if ($this->tax===NULL) {
			$this->tax = $this->createTax();
		}
		return $this->tax;
	}
	
	protected function createTax() {
		return new \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType();
	}

	public function setTax($tax) {
		$this->tax = $this->validateTax($tax);
	}

	protected function validateTax($tax) {
		if ( ! $tax instanceof \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType  && ! is_null($tax) ) {
			$tax = new \org\sifinfo\www\infrastructure\_2_x\MonetaryAmountType ($tax);
		}
	
		return $tax;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_float($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
		}
	
		return $value;
	}
} // end class FSCountType
