<?php
namespace DLS\Healthvault\Proxy\Type;

class LongLengthValue extends LengthValue {
	protected static $lengthTypes;
	
	public function __construct() {
		parent::__construct();
		
		if ( ! isset(self::$lengthTypes) ) {
			self::$lengthTypes = self::getPossibleTypes();
			
			foreach (array('cm', 'ft', 'in') as $type) {
				unset (self::$lengthTypes[$type]);
			}
		}
	}
	
	public static function getTypeOptions() {
		return self::lengthTypes;
	}
}
