<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Code")
 */
class Code extends \org\sifinfo\www\infrastructure\_2_x\NCES0768PrimaryDisabilityTypeType {
	/**
	 * Exceptionality description/code which identifies the exceptionality or areas of need of the student.Not all programs require identification of an exceptionality.If required for this program type, must have at least one element with ExceptionalityPriority value of Primary.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class Code
