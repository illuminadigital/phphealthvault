<?php
namespace com\microsoft\wc\methods\response\SaveOpenQuery;



use com\microsoft\wc\types\OpenQueryInfo;
/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.SaveOpenQuery", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\types\OpenQueryInfo {
	/**
	 * The information describing the saved OpenQuery.
	 * This information is used to invoke an OpenQuery after it is saved.
	 */

	public function __construct() {
	}
} // end class Info
