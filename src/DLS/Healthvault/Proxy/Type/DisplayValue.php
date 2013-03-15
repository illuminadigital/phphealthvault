<?php
namespace DLS\Healthvault\Proxy\Type;

abstract class DisplayValue {

	/**
	 * @var double
	 */
	protected $normalisedValue;
	
	/**
	 * 
	 * @var double
	 */
	protected $majorValue;

	/**
	 * 
	 * @var double
	 */
	protected $minorValue;

	/**
	 * 
	 * @var string
	 */
	protected $unitsCode;
	
	abstract public static function reallyGetTypeOptions();
	
	public static function getTypeOptions() {
        $calledClass = get_called_class();
    
        if (is_callable(array($calledClass, 'reallyGetTypeOptions'))) {
            return call_user_func(array($calledClass, 'reallyGetTypeOptions'));
        }
    
        return array();
	}

	public static function getTypeOptionChoices() {
		return array_keys(self::getTypeOptions());
	}

	
	public function getMajorValue() {
		return $this->majorValue;
	}

	public function setMajorValue($majorValue) {
		$this->majorValue = $majorValue;
	}

	public function getMinorValue() {
		return $this->minorValue;
	}

	public function setMinorValue($minorValue) {
		$this->minorValue = $minorValue;
	}

	public function getNormalisedValue() {
		return $this->normalisedValue;
	}

	public function setNormalisedValue($normalisedValue) {
		$this->normalisedValue = $normalisedValue;
	}

	protected function getSelectedTypeData() {
		$typeOptions = self::getTypeOptions();
		
		if (isset($typeOptions[$this->unitsCode])) {
			return $typeOptions[$this->unitsCode];
		}
		// else
		return NULL;
	}
	
	public function getUnits() {
		$thisType = $this->getSelectedTypeData();
		
		if ( ! $thisType) {
			// Assume the major value is normalised and complete
			return $this->getMajorValue();
		} 
		// else
		$units = ($this->minorValue * $thisType['minor_scale']) + $this->majorValue;
		if (isset($thisType['major_scale']) && $thisType['major_scale'] != 1) {
			$units = $units * $thisType['major_scale'];
		}
		return $units;
	}
	
	public function getDisplayValue() {
		$thisType = $this->getSelectedTypeData();
		
		if ( ! $thisType) {
			return $this->majorValue;
		} else {
			return self::getValueString($this->majorValue, $this->minorValue, $thisType);
		}
	}
	
	public static function getValueString($majorValue, $minorValue, $typeData) {
		$majorName = $typeData['major'];
		$minorName = $typeData['minor'];
		
		$text = sprintf('%d %s', $majorValue, $majorName);
		if ($minorValue != 0) {
			$text .= sprintf(' %d %s', $minorValue, $minorName);
		}
		
		return $text;
	}
	
	public function setFromNormalisedUnits($units) {
		$thisType = $this->getSelectedTypeData();
		
		if ( ! $thisType) {
			// Assume the units value is normalised and complete
			$this->majorValue = $units;
			$this->minorValue = 0;
		} else {
			$convertedUnits = (isset($thisType['major_scale']) ? $units / $thisType['major_scale'] : $units);
			$this->majorValue = (int) $convertedUnits;
			$this->minorValue = ($convertedUnits - $this->majorValue) / $thisType['minor_scale'];
		}
	}
	
	public function setFromUnits($units) {
		$thisType = $this->getSelectedTypeData();
		
		if ( ! $thisType) {
			// Assume the units value is normalised and complete
			$this->majorValue = $units;
			$this->minorValue = 0;
		} else {
			$this->majorValue = (int) $units;
			$this->minorValue = ($units - $this->majorValue) / $thisType['minor_scale'];
		}
	}
	
	public function setFromThingElement($thingElement) {
		$display = $thingElement->getDisplay();
		
		if (empty($display)) {
			return FALSE;
		}
		
		$unitsCode = $display->getUnitsCode();
		$units = $display->getUnits();
		
		if ( ! empty($unitsCode) && $this>getSelectedTypeData($unitsCode) )
		{
			$this->unitsCode = $unitsCode;
		} else if ( ! empty($units) && ($unitsCode = $this->getCodeForTypeName($units)) ) {
			$this->unitsCode = $unitsCode;
		} else {
			$this->unitsCode = NULL;
		}

		$units = $display->getUnits();
		
		if ( isset($units) ) {
			$this->setFromUnits($value);
		} else {
			$this->setFromUnits($display->getValue());
		}
		
		// We can't set the normalised value. The outer code needs to
		
		return $thingElement;
	}
	
	public function updateToThingElement($thingElement) {
		$display = $thingElement->getDisplay();
		
		if ( empty($display) ) {
			return FALSE;
		}
	}
	
	public function getSelectedUnitData($unitCode = NULL) {
		$data = self::getTypeOptions();
		
		if (isset($data[$unitCode])) {
			return $data[$unitCode];
		}
		// else
		return NULL;
	}
	
	public function getCodeForTypeName($name) {
		$data = self::getTypeOptions();

		foreach ($data as $code => $datum) {
			if (isset($datum['name']) && $datum['name'] == $name) {
				return $code;
			}
		}
		
		return NULL;
	}
}
