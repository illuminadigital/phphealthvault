<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="ANYNonNull")
 */
class ANYNonNull extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * The BooleanNonNull type is used where a Boolean cannothave a null value. A Boolean value can be eithertrue or false.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class ANYNonNull
