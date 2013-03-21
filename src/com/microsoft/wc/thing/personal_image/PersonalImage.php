<?php
namespace com\microsoft\wc\thing\personal_image;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.personal-image", prefix="")
 * })
 * @XmlEntity	(xml="personal-image")
 */
class PersonalImage extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * An image that represents the person.
	 * This type has no XML data associated with it. All datais stored as base64 encoded binary data in the "otherdata" section of the thing.
	 */

	const ID = 'a5294488-f865-4ce3-92fa-187cd3b58930';
	const NAME = 'Personal Image';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	public function __construct() {
	}
} // end class PersonalImage
