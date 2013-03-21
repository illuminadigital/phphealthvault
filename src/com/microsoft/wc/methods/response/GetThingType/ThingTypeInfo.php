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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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

	public function getUncreatable($autoCreate = TRUE) {
		if ($this->uncreatable===NULL && $autoCreate && ! isset($this->_overrides['uncreatable']) ) {
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

	public function getImmutable($autoCreate = TRUE) {
		if ($this->immutable===NULL && $autoCreate && ! isset($this->_overrides['immutable']) ) {
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

	public function getSingleton($autoCreate = TRUE) {
		if ($this->singleton===NULL && $autoCreate && ! isset($this->_overrides['singleton']) ) {
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

	public function getXsd($autoCreate = TRUE) {
		if ($this->xsd===NULL && $autoCreate && ! isset($this->_overrides['xsd']) ) {
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

	public function getColumns($autoCreate = TRUE) {
		if ($this->columns===NULL && $autoCreate && ! isset($this->_overrides['columns']) ) {
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
		if ( $columns === FALSE ) {
			$this->_overrides['columns'] = TRUE;
			return NULL;
		}

		if ( ! $columns instanceof \com\microsoft\wc\methods\response\GetThingType\Columns  && ! is_null($columns) ) {
			$columns = new \com\microsoft\wc\methods\response\GetThingType\Columns ($columns);
		}

		unset ($this->_overrides['columns']);
	
		return $columns;
	}

	public function getTransforms($autoCreate = TRUE) {
		if ($this->transforms===NULL && $autoCreate && ! isset($this->_overrides['transforms']) ) {
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
		if ( $transforms === FALSE ) {
			$this->_overrides['transforms'] = TRUE;
			return NULL;
		}

		if ( ! $transforms instanceof \com\microsoft\wc\methods\response\GetThingType\Transforms  && ! is_null($transforms) ) {
			$transforms = new \com\microsoft\wc\methods\response\GetThingType\Transforms ($transforms);
		}

		unset ($this->_overrides['transforms']);
	
		return $transforms;
	}

	public function getTransformSource($autoCreate = TRUE) {
		if ($this->transformSource===NULL && $autoCreate && ! isset($this->_overrides['transformSource']) ) {
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
		if ( $transformSource === FALSE ) {
			$this->_overrides['transformSource'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($transformSource) && ! is_null($transformSource) ) {
			$transformSource = array($transformSource);
		}

		unset ($this->_overrides['transformSource']);
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

	public function getImage($autoCreate = TRUE) {
		if ($this->image===NULL && $autoCreate && ! isset($this->_overrides['image']) ) {
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
		if ( $image === FALSE ) {
			$this->_overrides['image'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($image) && ! is_null($image) ) {
			$image = array($image);
		}

		unset ($this->_overrides['image']);
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

	public function getVersions($autoCreate = TRUE) {
		if ($this->versions===NULL && $autoCreate && ! isset($this->_overrides['versions']) ) {
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
		if ( $versions === FALSE ) {
			$this->_overrides['versions'] = TRUE;
			return NULL;
		}

		if ( ! $versions instanceof \com\microsoft\wc\methods\response\GetThingType\Versions  && ! is_null($versions) ) {
			$versions = new \com\microsoft\wc\methods\response\GetThingType\Versions ($versions);
		}

		unset ($this->_overrides['versions']);
	
		return $versions;
	}

	public function getEffectiveDateXpath($autoCreate = TRUE) {
		if ($this->effectiveDateXpath===NULL && $autoCreate && ! isset($this->_overrides['effectiveDateXpath']) ) {
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
