<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="RTO")
 */
class RTO extends \org\w3\www\_2001\XMLSchema\RTOQTYQTY {
	/**
	 * A quantity constructed as the quotient of a numeratorquantity divided by a denominator quantity. Commonfactors in the numerator and denominator are notautomatically cancelled out. supports titers(e.g., "1:128") and other quantities produced bylaboratories that truly represent ratios. Ratios arenot simply "structured numerics", particularly bloodpressure measurements (e.g. "120/60") are not ratios.In many cases REAL should be used insteadof .
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class RTO
