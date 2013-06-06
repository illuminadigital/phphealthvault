<?php
namespace DLS\Healthvault\Proxy\Type;

class ShortLengthValue extends LengthValue {
	protected static $lengthTypes;
	
	public function __construct() {
		if ( ! isset(self::$lengthTypes) ) {
			self::$lengthTypes = self::getPossibleTypes();
			
			// Remove
			foreach (array('km', 'mi', 'yd') as $type) {
				unset (self::$lengthTypes[$type]);
			}
			
			// Move to end
            foreach (array('m', 'in', 'cm') as $type) {
                $current = self::$lengthTypes[$type];
                unset (self::$lengthTypes[$type]);
                self::$lengthTypes[$type] = $current;
            }
		}
	}
	
	public static function getTypeOptions() {
		return self::$lengthTypes;
	}
}
