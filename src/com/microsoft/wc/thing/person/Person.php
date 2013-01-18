<?php
namespace com\microsoft\wc\thing\person;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.person", prefix="")
 * })
 * @XmlEntity	(xml="person")
 */
class Person extends \com\microsoft\wc\types\Person {
	/**
	 * Information related to a contact.
	 * A contact may be an emergency contact, contact informationfor a doctor, lawyer, etc.
	 */

	public function __construct() {
	}
} // end class Person
