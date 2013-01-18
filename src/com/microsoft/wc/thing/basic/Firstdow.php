<?php
namespace com\microsoft\wc\thing\basic;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.basic", prefix="")
 * })
 * @XmlEntity	(xml="firstdow")
 */
class Firstdow extends \com\microsoft\wc\thing\Thing {
	/**
	 * The users preferred first day of the week.
	 * The user can define which day of the weekthey want calendars and weekly computationsto start with. 1 = Sunday2 = Monday3 = Tuesday4 = Wednesday5 = Thursday6 = Friday7 = Saturday
	 */

	const ID = '3b3e6b16-eb69-483c-8d7e-dfe116ae6092';
	const NAME = 'Basic Demographic Information';

	public function __construct() {
	}
} // end class Firstdow
