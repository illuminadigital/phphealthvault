<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="InfoXml")
 */
class InfoXml {
	/**
	 * Code item specific blob that contains auxillary information about the code item.
	 * This can be for instance, information on how to convert a value from one measurement unit to another, or nutritional information of a food item.
	 */

	public function __construct() {
	}
} // end class InfoXml
