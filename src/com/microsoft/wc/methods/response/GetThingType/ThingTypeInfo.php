<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="ThingTypeInfo")
 */
class ThingTypeInfo {
	/**
	 * Describes the information related to a thing type
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
	 */
	protected $id;

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="boolean", name="uncreatable")
	 */
	protected $uncreatable;

	/**
	 * @XmlText	(type="boolean", name="immutable")
	 */
	protected $immutable;

	/**
	 * @XmlText	(type="boolean", name="singleton")
	 */
	protected $singleton;

	/**
	 * @XmlText	(type="string", name="xsd")
	 */
	protected $xsd;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\Columns", name="columns")
	 */
	protected $columns;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\Transforms", name="transforms")
	 */
	protected $transforms;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\TransformSource", collection="true", name="transform-source")
	 */
	protected $transformSource;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\Image", collection="true", name="image")
	 */
	protected $image;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\Versions", name="versions")
	 */
	protected $versions;

	/**
	 * @XmlText	(type="string", name="effective-date-xpath")
	 */
	protected $effectiveDateXpath;

	public function __construct($id = NULL, $name = NULL, $uncreatable = NULL, $immutable = NULL, $singleton = NULL, $xsd = NULL, $columns = NULL, $transforms = NULL, $transformSource = NULL, $image = NULL, $versions = NULL, $effectiveDateXpath = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->uncreatable = ($uncreatable===NULL) ? NULL : $this->validateUncreatable($uncreatable);
		$this->immutable = ($immutable===NULL) ? NULL : $this->validateImmutable($immutable);
		$this->singleton = ($singleton===NULL) ? NULL : $this->validateSingleton($singleton);
		$this->xsd = ($xsd===NULL) ? NULL : $this->validateXsd($xsd);
		$this->columns = ($columns===NULL) ? NULL : $this->validateColumns($columns);
		$this->transforms = ($transforms===NULL) ? NULL : $this->validateTransforms($transforms);
		$this->transformSource = ($transformSource===NULL) ? NULL : $this->validateTransformSource($transformSource);
		$this->image = ($image===NULL) ? NULL : $this->validateImage($image);
		$this->versions = ($versions===NULL) ? NULL : $this->validateVersions($versions);
		$this->effectiveDateXpath = ($effectiveDateXpath===NULL) ? NULL : $this->validateEffectiveDateXpath($effectiveDateXpath);
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\Guid ) {
			$id = new \com\microsoft\wc\types\Guid ($id);
		}
	
		return $id;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getUncreatable() {
		if ($this->uncreatable===NULL) {
			$this->uncreatable = $this->createUncreatable();
		}
		return $this->uncreatable;
	}
	
	protected function createUncreatable() {
		return FALSE;
	}

	public function setUncreatable($uncreatable) {
		$this->uncreatable = $this->validateUncreatable($uncreatable);
	}

	protected function validateUncreatable($uncreatable) {
		if ( ! is_bool($uncreatable) && ! is_null($uncreatable) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'uncreatable', 'boolean'));
		}
	
		return $uncreatable;
	}

	public function getImmutable() {
		if ($this->immutable===NULL) {
			$this->immutable = $this->createImmutable();
		}
		return $this->immutable;
	}
	
	protected function createImmutable() {
		return FALSE;
	}

	public function setImmutable($immutable) {
		$this->immutable = $this->validateImmutable($immutable);
	}

	protected function validateImmutable($immutable) {
		if ( ! is_bool($immutable) && ! is_null($immutable) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'immutable', 'boolean'));
		}
	
		return $immutable;
	}

	public function getSingleton() {
		if ($this->singleton===NULL) {
			$this->singleton = $this->createSingleton();
		}
		return $this->singleton;
	}
	
	protected function createSingleton() {
		return FALSE;
	}

	public function setSingleton($singleton) {
		$this->singleton = $this->validateSingleton($singleton);
	}

	protected function validateSingleton($singleton) {
		if ( ! is_bool($singleton) && ! is_null($singleton) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'singleton', 'boolean'));
		}
	
		return $singleton;
	}

	public function getXsd() {
		if ($this->xsd===NULL) {
			$this->xsd = $this->createXsd();
		}
		return $this->xsd;
	}
	
	protected function createXsd() {
		return '';
	}

	public function setXsd($xsd) {
		$this->xsd = $this->validateXsd($xsd);
	}

	protected function validateXsd($xsd) {
		if ( ! is_string($xsd) && ! is_null($xsd) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xsd', 'string'));
		}
	
		return $xsd;
	}

	public function getColumns() {
		if ($this->columns===NULL) {
			$this->columns = $this->createColumns();
		}
		return $this->columns;
	}
	
	protected function createColumns() {
		return new \com\microsoft\wc\methods\response\GetThingType\Columns();
	}

	public function setColumns($columns) {
		$this->columns = $this->validateColumns($columns);
	}

	protected function validateColumns($columns) {
		if ( ! $columns instanceof \com\microsoft\wc\methods\response\GetThingType\Columns  && ! is_null($columns) ) {
			$columns = new \com\microsoft\wc\methods\response\GetThingType\Columns ($columns);
		}
	
		return $columns;
	}

	public function getTransforms() {
		if ($this->transforms===NULL) {
			$this->transforms = $this->createTransforms();
		}
		return $this->transforms;
	}
	
	protected function createTransforms() {
		return new \com\microsoft\wc\methods\response\GetThingType\Transforms();
	}

	public function setTransforms($transforms) {
		$this->transforms = $this->validateTransforms($transforms);
	}

	protected function validateTransforms($transforms) {
		if ( ! $transforms instanceof \com\microsoft\wc\methods\response\GetThingType\Transforms  && ! is_null($transforms) ) {
			$transforms = new \com\microsoft\wc\methods\response\GetThingType\Transforms ($transforms);
		}
	
		return $transforms;
	}

	public function getTransformSource() {
		if ($this->transformSource===NULL) {
			$this->transformSource = $this->createTransformSource();
		}
		return $this->transformSource;
	}
	
	protected function createTransformSource() {
		return array();
	}

	public function setTransformSource($transformSource) {
		$this->transformSource = $this->validateTransformSource($transformSource);
	}

	protected function validateTransformSource($transformSource) {
		if ( ! $transformSource instanceof \com\microsoft\wc\methods\response\GetThingType\TransformSource  && ! is_null($transformSource) ) {
			$transformSource = new \com\microsoft\wc\methods\response\GetThingType\TransformSource ($transformSource);
		}
		$count = count($transformSource);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'transformSource', 0));
		}
		foreach ($transformSource as $entry) {
			if (!($entry instanceof TransformSource)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'transformSource', 'TransformSource'));
			}
		}
	
		return $transformSource;
	}

	public function addTransformSource($transformSource) {
		$this->transformSource[] = $transformSource;
	}

	public function getImage() {
		if ($this->image===NULL) {
			$this->image = $this->createImage();
		}
		return $this->image;
	}
	
	protected function createImage() {
		return array();
	}

	public function setImage($image) {
		$this->image = $this->validateImage($image);
	}

	protected function validateImage($image) {
		if ( ! $image instanceof \com\microsoft\wc\methods\response\GetThingType\Image  && ! is_null($image) ) {
			$image = new \com\microsoft\wc\methods\response\GetThingType\Image ($image);
		}
		$count = count($image);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'image', 0));
		}
		foreach ($image as $entry) {
			if (!($entry instanceof Image)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'image', 'Image'));
			}
		}
	
		return $image;
	}

	public function addImage($image) {
		$this->image[] = $image;
	}

	public function getVersions() {
		if ($this->versions===NULL) {
			$this->versions = $this->createVersions();
		}
		return $this->versions;
	}
	
	protected function createVersions() {
		return new \com\microsoft\wc\methods\response\GetThingType\Versions();
	}

	public function setVersions($versions) {
		$this->versions = $this->validateVersions($versions);
	}

	protected function validateVersions($versions) {
		if ( ! $versions instanceof \com\microsoft\wc\methods\response\GetThingType\Versions  && ! is_null($versions) ) {
			$versions = new \com\microsoft\wc\methods\response\GetThingType\Versions ($versions);
		}
	
		return $versions;
	}

	public function getEffectiveDateXpath() {
		if ($this->effectiveDateXpath===NULL) {
			$this->effectiveDateXpath = $this->createEffectiveDateXpath();
		}
		return $this->effectiveDateXpath;
	}
	
	protected function createEffectiveDateXpath() {
		return '';
	}

	public function setEffectiveDateXpath($effectiveDateXpath) {
		$this->effectiveDateXpath = $this->validateEffectiveDateXpath($effectiveDateXpath);
	}

	protected function validateEffectiveDateXpath($effectiveDateXpath) {
		if ( ! is_string($effectiveDateXpath) && ! is_null($effectiveDateXpath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effectiveDateXpath', 'string'));
		}
	
		return $effectiveDateXpath;
	}
} // end class ThingTypeInfo
