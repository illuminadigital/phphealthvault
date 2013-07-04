<?php
namespace com\microsoft\wc\thing\problem;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.problem", prefix="")
 * })
 * @XmlEntity	(xml="importance")
 */
class Importance extends \com\microsoft\wc\thing\types\PositiveInt {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class Importance
