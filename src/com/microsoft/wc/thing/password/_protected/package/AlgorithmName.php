<?php
namespace com\microsoft\wc\thing\password\_protected\package;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.password.protected.package", prefix="")
 * })
 * @XmlEntity	(xml="algorithm-name")
 */
class AlgorithmName extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Algorithm used for the encryption.
	 */

	const ID = 'c9287326-bb43-4194-858c-8b60768f000f';
	const NAME = 'Password Protected Package';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class AlgorithmName
