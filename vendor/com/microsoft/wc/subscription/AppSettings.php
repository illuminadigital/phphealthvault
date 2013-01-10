<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="AppSettings")
 */
class AppSettings {
	/**
	 * Application specific XML.
	 * An application can provide any XML which defines settings for the application for a particular person.
	 */

	public function __construct() {
	}
} // end class AppSettings
