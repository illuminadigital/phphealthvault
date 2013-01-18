<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="CV")
 */
class CV extends CE {
	/**
	 * Coded data, consists of a code, display name, code system, and original text. Used when a single code value must be sent.
	 */

	public function __construct() {
	}
} // end class CV
