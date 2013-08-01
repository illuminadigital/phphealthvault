<?php
namespace DLS\Healthvault\Proxy\Type;

abstract class WeightValue extends DisplayValue {
	
	protected static function getPossibleTypes() {
		return array(
            'stlb' => array(
                'name' => 'Stone-pounds',
                'label' => 'Stones',
                'major' => 'stone(s)',
                'minor' => 'pound(s)', 
                'minor_scale' => 1 / 14,
                'major_scale' => 6.35029
            ),
            'kg' => array(
                'name' => 'kilogram',
                'label' => 'Kilograms',
                'major' => 'kilogram(s)',
                'minor' => 'gram(s)',
                'minor_scale' => 0.001,
            ),
            'oz' => array(
                'name' => 'ounce',
                'label' => 'Ounces',
                'major' => 'ounce(s)',
                'major_scale' => 0.02835,
            ),
            'g' => array(
                'name' => 'gram',
                'label' => 'Grams',
                'major' => 'gram(s)',
                'major_scale' => 0.001,
            ),
            'lb' => array(
                'name' => 'pound',
                'label' => 'Pounds',
                'major' => 'pound(s)',
                'minor' => 'ounce(s)',
                'minor_scale' => 1 / 16,
                'major_scale' => 0.45359,
            ),
            'mcg' => array(
                'name' => 'microgram',
                'label' => 'Micrograms',
                'major' => 'microgram(s)',
                'major_scale' => 1e-9,
            ),
            'mg' => array(
                'name' => 'milligram',
                'label' => 'Milligrams',
                'major' => 'milligram(s)',
                'major_scale' => 1e-6,
            ),
		); 
	}
	
	public function setFromThingElement($thingElement) {
		$thingElement = parent::setFromThingElement($thingElement);
		
		if ( ! $thingElement ) {
			return $thingElement;
		}
		
		$units = $thingElement->getKg()->getValue();
		
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
		    $thingElement->getKg()->setValue($normalisedValue);
		}

        // This is to set the main hv value as something meaningful. Doesn't take into account the minor value but this will be changed when we start having one field for values anyway. In the mean time, our system should always rely on the normalised values to ensure we're accurate.
        $thingElement->getDisplay()->setValue($this->majorValue);

		return $thingElement;
	}
}
