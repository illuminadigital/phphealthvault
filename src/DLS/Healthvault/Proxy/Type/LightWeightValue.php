<?php
namespace DLS\Healthvault\Proxy\Type;

class LightWeightValue extends WeightValue
{
    protected static $weightTypes;

    public function __construct() {
        if ( ! isset(self::$weightTypes) ) {
            self::$weightTypes = self::getPossibleTypes();
            	
            // Remove
            foreach (array('stlb') as $type) {
                unset (self::$weightTypes[$type]);
            }

            // Move to end
            foreach (array('kg') as $type) {
                $current = self::$weightTypes[$type]; 
                unset (self::$weightTypes[$type]);
                self::$weightTypes[$type] = $current;
            }
        }
    }

    public static function getTypeOptions() {
        return self::$weightTypes;
    }
}
