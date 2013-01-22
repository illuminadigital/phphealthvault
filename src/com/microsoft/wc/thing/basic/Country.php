<?php
namespace com\microsoft\wc\thing\basic;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.basic", prefix="")
 * })
 * @XmlEntity	(xml="country")
 */
class Country extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * The country of residence as an ISO-3166two character code.
	 */

	const ID = 'bf516a61-5252-4c28-a979-27f45f62f78d';
	const NAME = 'Basic Demographic Information';

	public function __construct() {
	}
} // end class Country
