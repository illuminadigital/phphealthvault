<?php
namespace com\microsoft\wc\thing\basic;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.basic", prefix="")
 * })
 * @XmlEntity	(xml="birthyear")
 */
class Birthyear extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * The year the person was born.
	 * A year between 1000 and 3000.
	 */

	const ID = '3b3e6b16-eb69-483c-8d7e-dfe116ae6092';
	const NAME = 'Basic Demographic Information';

	public function __construct() {
	}
} // end class Birthyear
