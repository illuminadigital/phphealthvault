<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlEntity	(xml="Column")
 */
class Column {
	/**
	 */

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

	public function getTag() {
		if ($this->tag===NULL) {
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

	public function getLabel() {
		if ($this->label===NULL) {
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

	public function getType() {
		if ($this->type===NULL) {
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

	public function getWidth() {
		if ($this->width===NULL) {
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
		if (!is_integer($width)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'width', 'integer'));
		}
	
		return $width;
	}

	public function getVisible() {
		if ($this->visible===NULL) {
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
