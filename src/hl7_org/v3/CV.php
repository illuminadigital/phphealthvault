<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="CV")
 */
class CV extends \org\w3\www\_2001\XMLSchema\CE {
	/**
	 * Coded data, consists of a code, display name, code system, and original text. Used when a single code value must be sent.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class CV
