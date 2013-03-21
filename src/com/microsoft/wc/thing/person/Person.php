<?php
namespace com\microsoft\wc\thing\person;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.person", prefix="")
 * })
 * @XmlEntity	(xml="person")
 */
class Person extends \com\microsoft\wc\thing\types\Person {
	/**
	 * Information related to a contact.
	 * A contact may be an emergency contact, contact informationfor a doctor, lawyer, etc.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class Person
