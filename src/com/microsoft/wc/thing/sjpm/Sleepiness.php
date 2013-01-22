<?php
namespace com\microsoft\wc\thing\sjpm;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.sjpm", prefix="")
 * })
 * @XmlEntity	(xml="sleepiness")
 */
class Sleepiness extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * How sleepy the person felt during the day.
	 * 1 = So sleepy had to struggle to stay awayduring much of the day,2 = Somewhat tired3 = Fairly alert4 = Wide awake
	 */

	const ID = '031F5706-7F1A-11DB-AD56-7BD355D89593';
	const NAME = 'Sleep Related Activity';

	public function __construct() {
	}
} // end class Sleepiness
