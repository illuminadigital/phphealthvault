<?php
namespace com\microsoft\wc\thing\problem;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.problem", prefix="")
 * })
 * @XmlEntity	(xml="importance")
 */
class Importance extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 */

	const ID = '5E2C027E-3417-4CFC-BD10-5A6F2E91AD23';
	const NAME = 'Medical Problem';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class Importance
