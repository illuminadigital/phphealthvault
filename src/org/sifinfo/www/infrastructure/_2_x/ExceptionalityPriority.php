<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ExceptionalityPriority")
 */
class ExceptionalityPriority {
	/**
	 * Identifies priority of the exceptionality. "Primary" is the first and is required even if only one exceptionality is specified. "Secondary", etc. are of lower priority. Primary, Secondary, and Tertiary must be specified before "Additional" is used.
	 */

	public function __construct() {
	}
} // end class ExceptionalityPriority
