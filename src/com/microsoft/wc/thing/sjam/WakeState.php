<?php
namespace com\microsoft\wc\thing\sjam;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.sjam", prefix="")
 * })
 * @XmlEntity	(xml="wake-state")
 */
class WakeState extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * An evaluation of how the person felt when they got up in the morning.
	 * 1 = Wide awake,2 = Awake but a little tired,3 = Sleepy
	 */

	const ID = '11C52484-7F1A-11DB-AEAC-87D355D89593';
	const NAME = 'Sleep Session';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class WakeState
