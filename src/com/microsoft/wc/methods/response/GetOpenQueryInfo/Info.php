<?php
namespace com\microsoft\wc\methods\response\GetOpenQueryInfo;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetOpenQueryInfo", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\types\OpenQueryInfo {
	/**
	 * The information describing the saved OpenQuery.
	 * This information is used to invoke an OpenQuery after it is saved.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class Info
