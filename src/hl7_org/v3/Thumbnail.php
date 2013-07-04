<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="thumbnail")
 */
class Thumbnail extends \org\w3\www\_2001\XMLSchema\ED {
	/**
	 * A thumbnail is an abbreviated rendition of the fulldata. A thumbnail requires significantly fewerresources than the full data, while still maintainingsome distinctive similarity with the full data. Athumbnail is typically used with by-referenceencapsulated data. It allows a user to select datamore efficiently before actually downloading throughthe reference.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class Thumbnail
