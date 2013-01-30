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

	public function getActivity() {
		if ($this->activity===NULL) {
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

	public function getTitle() {
		if ($this->title===NULL) {
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

	public function getDistance() {
		if ($this->distance===NULL) {
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
		if ( ! $distance instanceof \com\microsoft\wc\thing\types\LengthValue  && ! is_null($distance) ) {
			$distance = new \com\microsoft\wc\thing\types\LengthValue ($distance);
		}
	
		return $distance;
	}

	public function getDuration() {
		if ($this->duration===NULL) {
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
		if ( ! $duration instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($duration) ) {
			$duration = new \com\microsoft\wc\thing\types\PositiveDouble ($duration);
		}
	
		return $duration;
	}

	public function getOffset() {
		if ($this->offset===NULL) {
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
		if ( ! $offset instanceof \com\microsoft\wc\thing\types\NonNegativeDouble  && ! is_null($offset) ) {
			$offset = new \com\microsoft\wc\thing\types\NonNegativeDouble ($offset);
		}
	
		return $offset;
	}

	public function getDetail() {
		if ($this->detail===NULL) {
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
		if ( ! is_array ($detail) && ! is_null($detail) ) {
			$detail = array($detail);
		}
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
