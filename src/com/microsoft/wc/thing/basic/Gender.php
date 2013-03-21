<?php
namespace com\microsoft\wc\thing\basic;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.basic", prefix="")
 * })
 * @XmlEntity	(xml="gender")
 */
class Gender extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * The person's gender.
	 * [m]ale or [f]emale
	 */

	const ID = '3b3e6b16-eb69-483c-8d7e-dfe116ae6092';
	const NAME = 'Basic Demographic Information';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class Gender
