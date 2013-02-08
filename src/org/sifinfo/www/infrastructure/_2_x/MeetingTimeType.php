<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MeetingTimeType")
 */
class MeetingTimeType {
	/**
	 * This element represents the meeting times and periods for a course, and occurs within objects such as SectionInfoand StudentSectionEnrollment.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="TimetableDay")
	 */
	protected $timetableDay;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="TimetablePeriod")
	 */
	protected $timetablePeriod;

	public function __construct($timetableDay = NULL, $timetablePeriod = NULL) {
		$this->timetableDay = ($timetableDay===NULL) ? NULL : $this->validateTimetableDay($timetableDay);
		$this->timetablePeriod = ($timetablePeriod===NULL) ? NULL : $this->validateTimetablePeriod($timetablePeriod);
	}

	public function getTimetableDay() {
		if ($this->timetableDay===NULL) {
			$this->timetableDay = $this->createTimetableDay();
		}
		return $this->timetableDay;
	}
	
	protected function createTimetableDay() {
		return NULL;
	}

	public function setTimetableDay($timetableDay) {
		$this->timetableDay = $this->validateTimetableDay($timetableDay);
	}

	protected function validateTimetableDay($timetableDay) {
		if ( ! is_normalizedString($timetableDay) && ! is_null($timetableDay) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'timetableDay', 'normalizedString'));
		}
	
		return $timetableDay;
	}

	public function getTimetablePeriod() {
		if ($this->timetablePeriod===NULL) {
			$this->timetablePeriod = $this->createTimetablePeriod();
		}
		return $this->timetablePeriod;
	}
	
	protected function createTimetablePeriod() {
		return NULL;
	}

	public function setTimetablePeriod($timetablePeriod) {
		$this->timetablePeriod = $this->validateTimetablePeriod($timetablePeriod);
	}

	protected function validateTimetablePeriod($timetablePeriod) {
		if ( ! is_normalizedString($timetablePeriod) && ! is_null($timetablePeriod) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'timetablePeriod', 'normalizedString'));
		}
	
		return $timetablePeriod;
	}
} // end class MeetingTimeType
