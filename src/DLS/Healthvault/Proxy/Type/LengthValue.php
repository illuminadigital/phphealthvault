<?php
namespace DLS\Healthvault\Proxy\Type;

abstract class LengthValue extends DisplayConvertibleValue {
	
	protected static function getPossibleTypes() {
		return array(
			'm' => array(
				'name' => 'meters',
				'label' => 'Metres',
		        'major' => 'metre(s)',
				'minor' => 'centimetre(s)',
				'minor_scale' => 0.01,
			),
			'km' => array(
				'name' => 'kilometers',
				'label' => 'Kilometres',
		        'major' => 'kilometre(s)',
				'minor' => 'metre(s)',
				'minor_scale' => 0.001,
				'major_scale' => 1/0.001,
			),
			'mi' => array(
				'name' => 'miles',
				'label' => 'Miles',
		        'major' => 'mile(s)',
				'minor' => 'yard(s)',
				'minor_scale' => 0.0005682,
				'major_scale' => 1/0.000621371192,
			),
			'yd' => array(
				'name' => 'yards',
				'label' => 'Yards',
		        'major' => 'yard(s)',
				'minor' => 'feet(s)',
				'minor_scale' => 0.3333,
				'major_scale' => 0.9144,
			),
			'cm' => array(
				'name' => 'centimeters',
				'label' => 'Centimetres',
		        'major' => 'centimetre(s)',
				'minor' => 'millimetre(s)',
				'minor_scale' => 0.1,
				'major_scale' => 0.01,
			),
			'ft' => array(
				'name' => 'feet',
				'label' => 'Feet',
		        'major' => 'feet',
				'minor' => 'inch(es)',
				'minor_scale' => 0.8333,
				'major_scale' => 0.3048,
			),
			'in' => array(
				'name' => 'inches',
				'label' => 'Inches',
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
		
		$units = $thingElement->getM()->getValue();
		
        $this->setFromNormalisedUnits($units);

		return $thingElement;
	}
	
	public function updateToThingElement($thingElement) {
		$thingElement = parent::updateToThingElement($thingElement);
		
		if ( ! $thingElement ) {
			return $thingElement;
		}

		$normalisedValue = $thingElement->getDisplay()->getValue();
		if ( isset($normalisedValue) ) {
		    $thingElement->getM()->setValue($normalisedValue);
		}

        // This is to set the main hv value as something meaningful. Doesn't take into account the minor value but this will be changed when we start having one field for values anyway. In the mean time, our system should always rely on the normalised values to ensure we're accurate.
        $thingElement->getDisplay()->setValue($this->majorValue);

        return $thingElement;
	}
}
