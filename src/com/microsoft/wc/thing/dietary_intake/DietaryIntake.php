<?php
namespace com\microsoft\wc\thing\dietary_intake;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.dietary-intake", prefix="")
 * })
 * @XmlEntity	(xml="dietary-intake")
 */
class DietaryIntake extends \com\microsoft\wc\thing\dietary_intake\DietaryIntake {
	/**
	 * The amount of dietary nutrients and minerals consumed.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class DietaryIntake
