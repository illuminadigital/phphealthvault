<?php
namespace DLS\Healthvault\Proxy\Type;

abstract class LengthValue extends DisplayValue {
	
	protected static function getPossibleTypes() {
		return array(
			'm' => array(
				'name' => 'Metres',
				'major' => 'metre(s)',
				'minor' => 'centimetre(s)',
				'minor_scale' => 0.01,
			),
			'km' => array(
				'name' => 'Kilometres',
				'major' => 'kilometre(s)',
				'minor' => 'metre(s)',
				'minor_scale' => 1,
				'major_scale' => 1000,
			),
			'mi' => array(
				'name' => 'Miles',
				'major' => 'mile(s)',
				'minor' => 'yard(s)',
				'minor_scale' => 1,
				'major_scale' => 1609.344,
			),
			'yd' => array(
				'name' => 'Yards',
				'major' => 'yard(s)',
				'minor' => 'feet(s)',
				'minor_scale' => 0.3333,
				'major_scale' => 0.9144,
			),
			'cm' => array(
				'name' => 'Centimetres',
				'major' => 'centimetre(s)',
				'minor' => 'millimetre(s)',
				'minor_scale' => 0.1,
				'major_scale' => 0.01,
			),
			'ft' => array(
				'name' => 'Feet',
				'major' => 'feet',
				'minor' => 'inch(es)',
				'minor_scale' => 0.8333,
				'major_scale' => 0.3048,
			),
			'in' => array(
				'name' => 'Inches',
				'major' => 'inch(es)',
				'major_scale' => 0.0254,
			)
		); 
	}
	
	public function setFromThingElement($thingElement) {
		$thingElement = parent::setFromThingElement($thingElement);
		
		if ( ! $thingElement ) {
			return $thingElement;
		}
		
		$units = $thingElement->getM();
		
		if ( empty($this->majorUnits) ) {
			$this->setFromNormalisedUnits($units);
		}
		
		return $thingElement;
	}
	
	public function updateToThingElement($thingElement) {
		$thingElement = parent::updateToThingElement($thingElement);
		
		if ( ! $thingElement ) {
			return $thingElement;
		}
		
		$thingElement->getM()->setValue($this->getNormalisedValue());
		
		return $thingElement;
	}
}
