<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="Column")
 */
class Column {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="tag")
	 */
	protected $tag;

	/**
	 * @XmlAttribute	(type="string", name="label")
	 */
	protected $label;

	/**
	 * @XmlAttribute	(type="string", name="type")
	 */
	protected $type;

	/**
	 * @XmlAttribute	(type="integer", name="width")
	 */
	protected $width;

	/**
	 * @XmlAttribute	(type="boolean", name="visible")
	 */
	protected $visible;

	public function __construct($tag = NULL, $label = NULL, $type = NULL, $width = NULL, $visible = NULL) {
		$this->tag = ($tag===NULL) ? NULL : $this->validateTag($tag);
		$this->label = ($label===NULL) ? NULL : $this->validateLabel($label);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->width = ($width===NULL) ? NULL : $this->validateWidth($width);
		$this->visible = ($visible===NULL) ? NULL : $this->validateVisible($visible);
	}

	public function getTag($autoCreate = TRUE) {
		if ($this->tag===NULL && $autoCreate && ! isset($this->_overrides['tag']) ) {
			$this->tag = $this->createTag();
		}
		return $this->tag;
	}
	
	protected function createTag() {
		return '';
	}

	public function setTag($tag) {
		$this->tag = $this->validateTag($tag);
	}

	protected function validateTag($tag) {
		if (!is_string($tag)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'tag', 'string'));
		}
	
		return $tag;
	}

	public function getLabel($autoCreate = TRUE) {
		if ($this->label===NULL && $autoCreate && ! isset($this->_overrides['label']) ) {
			$this->label = $this->createLabel();
		}
		return $this->label;
	}
	
	protected function createLabel() {
		return '';
	}

	public function setLabel($label) {
		$this->label = $this->validateLabel($label);
	}

	protected function validateLabel($label) {
		if (!is_string($label)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'label', 'string'));
		}
	
		return $label;
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return '';
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}

	public function getWidth($autoCreate = TRUE) {
		if ($this->width===NULL && $autoCreate && ! isset($this->_overrides['width']) ) {
			$this->width = $this->createWidth();
		}
		return $this->width;
	}
	
	protected function createWidth() {
		return NULL;
	}

	public function setWidth($width) {
		$this->width = $this->validateWidth($width);
	}

	protected function validateWidth($width) {
		$isValid = FALSE;
		if ( is_integer($width) ) {
			$isValid = TRUE;
		}
		else if ( $width == ($castVar = (integer) $width) ) {
			$isValid = TRUE;
			$width = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'width', 'integer'));
		}
	
		return $width;
	}

	public function getVisible($autoCreate = TRUE) {
		if ($this->visible===NULL && $autoCreate && ! isset($this->_overrides['visible']) ) {
			$this->visible = $this->createVisible();
		}
		return $this->visible;
	}
	
	protected function createVisible() {
		return FALSE;
	}

	public function setVisible($visible) {
		$this->visible = $this->validateVisible($visible);
	}

	protected function validateVisible($visible) {
		if ( ! is_bool($visible) && ! is_null($visible) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'visible', 'boolean'));
		}
	
		return $visible;
	}
} // end class Column
