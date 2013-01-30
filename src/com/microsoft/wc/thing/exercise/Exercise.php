<?php
namespace com\microsoft\wc\thing\exercise;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.exercise", prefix="")
 * })
 * @XmlEntity	(xml="exercise")
 */
class Exercise extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Records the completion of an exercise.
	 * Sample data - such as heartrate values collected at intervals during the exercise - arestored using the exercise sample type. All samples for an exercise should be added to the relateditems collection for the exercise. The exercise type is an update to the aerobic exercise session type, and there are certaincomplexities to supporting existing data. See "Using the Exercise Type"for more information.
	 */

	const ID = '85a21ddb-db20-4c65-8d30-33c899ccf612';
	const NAME = 'Exercise';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\exercise\StructuredNameValue", collection="true", name="detail")
	 */
	protected $detail;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\exercise\ExerciseSegment", collection="true", name="segment")
	 */
	protected $segment;

	public function __construct($when = NULL, $activity = NULL, $title = NULL, $distance = NULL, $duration = NULL, $detail = NULL, $segment = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->activity = ($activity===NULL) ? NULL : $this->validateActivity($activity);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->distance = ($distance===NULL) ? NULL : $this->validateDistance($distance);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->detail = ($detail===NULL) ? NULL : $this->validateDetail($detail);
		$this->segment = ($segment===NULL) ? NULL : $this->validateSegment($segment);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
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

	public function getSegment() {
		if ($this->segment===NULL) {
			$this->segment = $this->createSegment();
		}
		return $this->segment;
	}
	
	protected function createSegment() {
		return array();
	}

	public function setSegment($segment) {
		$this->segment = $this->validateSegment($segment);
	}

	protected function validateSegment($segment) {
		if ( ! is_array ($segment) && ! is_null($segment) ) {
			$segment = array($segment);
		}
		$count = count($segment);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'segment', 0));
		}
		foreach ($segment as $entry) {
			if (!($entry instanceof ExerciseSegment)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'segment', 'ExerciseSegment'));
			}
		}
	
		return $segment;
	}

	public function addSegment($segment) {
		$this->segment[] = $segment;
	}
} // end class Exercise
