<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="QTY")
 */
class QTY extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * is an abstract generalizationfor all data types (1) whose value set has an orderrelation (less-or-equal) and (2) where difference isdefined in all of the data type's totally ordered valuesubsets. The quantity type abstraction is needed indefining certain other types, such as the interval andthe probability distribution.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class QTY
