<?php
namespace com\microsoft\wc\thing\exercise;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.exercise", prefix="")
 * })
 * @XmlEntity	(xml="ExerciseSegment")
 */
class ExerciseSegment {
	/**
	 * Information pertaining to a portion of the overall exercise.
	 * This is typically used to store information about separate laps in a race or individual events withina triathlon.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="activity")
	 */
	protected $activity;

	/**
	 * @XmlText	(type="string", name="title")
	 */
	protected $title;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="distance")
	 */
	protected $distance;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="offset")
	 */
	protected $offset;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\exercise\StructuredNameValue", collection="true", name="detail")
	 */
	protected $detail;

	public function __construct($activity = NULL, $title = NULL, $distance = NULL, $duration = NULL, $offset = NULL, $detail = NULL) {
		$this->activity = ($activity===NULL) ? NULL : $this->validateActivity($activity);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->distance = ($distance===NULL) ? NULL : $this->validateDistance($distance);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->offset = ($offset===NULL) ? NULL : $this->validateOffset($offset);
		$this->detail = ($detail===NULL) ? NULL : $this->validateDetail($detail);
	}

	public function getActivity($autoCreate = TRUE) {
		if ($this->activity===NULL && $autoCreate && ! isset($this->_overrides['activity']) ) {
			$this->activity = $this->createActivity();
		}
		return $this->activity;
	}
	
	protected function createActivity() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setActivity($activity) {
		$this->activity = $this->validateActivity($activity);
	}

	protected function validateActivity($activity) {
		if ( ! $activity instanceof \com\microsoft\wc\types\CodableValue ) {
			$activity = new \com\microsoft\wc\types\CodableValue ($activity);
		}
	
		return $activity;
	}

	public function getTitle($autoCreate = TRUE) {
		if ($this->title===NULL && $autoCreate && ! isset($this->_overrides['title']) ) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return '';
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if ( ! is_string($title) && ! is_null($title) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'title', 'string'));
		}
	
		return $title;
	}

	public function getDistance($autoCreate = TRUE) {
		if ($this->distance===NULL && $autoCreate && ! isset($this->_overrides['distance']) ) {
			$this->distance = $this->createDistance();
		}
		return $this->distance;
	}
	
	protected function createDistance() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setDistance($distance) {
		$this->distance = $this->validateDistance($distance);
	}

	protected function validateDistance($distance) {
		if ( $distance === FALSE ) {
			$this->_overrides['distance'] = TRUE;
			return NULL;
		}

		if ( ! $distance instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($distance) ) {
			$distance = new \com\microsoft\wc\thing\types\LengthValue ($distance);
		}

		unset ($this->_overrides['distance']);
	
		return $distance;
	}

	public function getDuration($autoCreate = TRUE) {
		if ($this->duration===NULL && $autoCreate && ! isset($this->_overrides['duration']) ) {
			$this->duration = $this->createDuration();
		}
		return $this->duration;
	}
	
	protected function createDuration() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setDuration($duration) {
		$this->duration = $this->validateDuration($duration);
	}

	protected function validateDuration($duration) {
		if ( $duration === FALSE ) {
			$this->_overrides['duration'] = TRUE;
			return NULL;
		}

		if ( ! $duration instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($duration) ) {
			$duration = new \com\microsoft\wc\thing\types\PositiveDouble ($duration);
		}

		unset ($this->_overrides['duration']);
	
		return $duration;
	}

	public function getOffset($autoCreate = TRUE) {
		if ($this->offset===NULL && $autoCreate && ! isset($this->_overrides['offset']) ) {
			$this->offset = $this->createOffset();
		}
		return $this->offset;
	}
	
	protected function createOffset() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setOffset($offset) {
		$this->offset = $this->validateOffset($offset);
	}

	protected function validateOffset($offset) {
		if ( $offset === FALSE ) {
			$this->_overrides['offset'] = TRUE;
			return NULL;
		}

		if ( ! $offset instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($offset) ) {
			$offset = new \com\microsoft\wc\thing\types\NonNegativeDouble ($offset);
		}

		unset ($this->_overrides['offset']);
	
		return $offset;
	}

	public function getDetail($autoCreate = TRUE) {
		if ($this->detail===NULL && $autoCreate && ! isset($this->_overrides['detail']) ) {
			$this->detail = $this->createDetail();
		}
		return $this->detail;
	}
	
	protected function createDetail() {
		return array();
	}

	public function setDetail($detail) {
		$this->detail = $this->validateDetail($detail);
	}

	protected function validateDetail($detail) {
		if ( $detail === FALSE ) {
			$this->_overrides['detail'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($detail) && ! is_null($detail) ) {
			$detail = array($detail);
		}

		unset ($this->_overrides['detail']);
		$count = count($detail);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'detail', 0));
		}
		foreach ($detail as $entry) {
			if (!($entry instanceof StructuredNameValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'detail', 'StructuredNameValue'));
			}
		}
	
		return $detail;
	}

	public function addDetail($detail) {
		$this->detail[] = $detail;
	}
} // end class ExerciseSegment
