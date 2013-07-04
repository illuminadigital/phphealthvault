<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="PN")
 */
class PN extends \org\w3\www\_2001\XMLSchema\EN {
	/**
	 * A name for a person. A sequence of name parts, such asgiven name or family name, prefix, suffix, etc. PN differsfrom EN because the qualifier type cannot include LS(Legal Status).
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class PN
