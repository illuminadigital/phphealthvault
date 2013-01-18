<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="PN")
 */
class PN extends \EN\EN {
	/**
	 * A name for a person. A sequence of name parts, such as given name or family name, prefix, suffix, etc. PN differs from EN because the qualifier type cannot include LS (Legal Status).
	 */

	public function __construct() {
	}
} // end class PN
