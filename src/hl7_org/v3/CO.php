<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="CO")
 */
class CO extends \org\w3\www\_2001\XMLSchema\CV {
	/**
	 * Coded data, where the domain from which the codeset comesis ordered. The Coded Ordinal data type adds semanticsrelated to ordering so that models that make use of suchdomains may introduce model elements that involve statementsabout the order of the terms in a domain.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class CO
