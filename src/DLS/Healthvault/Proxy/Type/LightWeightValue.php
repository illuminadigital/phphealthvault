<?php
namespace DLS\Healthvault\Proxy\Type;

class LightWeightValue extends WeightValue
{
    protected static $weightTypes;

    public function __construct() {
        if ( ! isset(self::$weightTypes) ) {
            self::$weightTypes = self::getPossibleTypes();
            	
            foreach (array('stlb', 'kg') as $type) {
                unset (self::$weightTypes[$type]);
            }
        }
    }

    public static function getTypeOptions() {
        return self::$weightTypes;
    }
}
