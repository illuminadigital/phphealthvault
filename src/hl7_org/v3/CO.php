<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="CO")
 */
class CO extends \CV\CV {
	/**
	 * Coded data, where the domain from which the codeset comes is ordered. The Coded Ordinal data type adds semantics related to ordering so that models that make use of such domains may introduce model elements that involve statements about the order of the terms in a domain.
	 */

	public function __construct() {
	}
} // end class CO
