<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0557JobClassificationType")
 */
class NCES0557JobClassificationType {
	/**
	 */
	static protected $enumValue = array('0100' => 'Official-administrative', '0101' => 'Administrative/supervisory/ancillary services officer', '0102' => 'Board of education/school board/board of trustees member', '0103' => 'Commandant of cadets', '0104' => 'Dean/dean of instructions/dean of students/dean of boys/dean of girls/dean of student activities', '0105' => 'Deputy/associate/vice-/assistant principal', '0106' => 'Deputy/associate/assistant superintendent/commissioner', '0107' => 'Executive assistant-Performs professional activities assisting an executive officer in directing and managing the functions of a school or system.', '0108' => 'Instructional program director/coordinator/consultant', '0109' => 'Manager', '0110' => 'Non-instructional program director/coordinator/consultant', '0111' => 'Ombudsperson', '0112' => 'Principal/headmaster/headmistress/head of school', '0113' => 'School president', '0114' => 'School site council member', '0115' => 'Superintendent/commissioner', '0200' => 'Professional-educational', '0201' => 'Athletic coach', '0202' => 'Behavioral management specialist', '0203' => 'Counselor', '0204' => 'Curriculum specialist', '0205' => 'Education diagnostician', '0206' => 'Librarian/media consultant', '0207' => 'Remedial specialist', '0208' => 'Student activity advisor/non-athletic coach', '0209' => 'Student teacher', '0210' => 'Teacher', '0211' => 'Teacher trainer', '0212' => 'Teaching intern', '0213' => 'Resource teacher', '0300' => 'Professional-other', '0301' => 'Accountant', '0302' => 'Accreditation officer', '0303' => 'Administrative intern', '0304' => 'Admissions officer', '0305' => 'Analyst', '0306' => 'Architect', '0307' => 'Athletic trainer', '0308' => 'Attendance officer', '0309' => 'Audiologist', '0310' => 'Auditor', '0311' => 'Benefits specialist', '0312' => 'Campus minister/chaplain (clergy or layperson)', '0313' => 'Caseworker', '0314' => 'Computer programmer', '0315' => 'Computer systems analyst', '0316' => 'Curator and archivist', '0317' => 'Dental hygienist', '0318' => 'Dentist', '0319' => 'Dietitian/nutritionist', '0320' => 'Engineer', '0321' => 'Evaluator', '0322' => 'Family/community support coordinator', '0323' => 'Financial aid officer', '0324' => 'Functional application support specialist', '0325' => 'Grant developer', '0326' => 'Historian', '0327' => 'Internal auditor', '0328' => 'Interpreter', '0329' => 'Lawyer', '0330' => 'Legislative liaison', '0331' => 'Negotiator', '0332' => 'Network administrator', '0333' => 'Nurse Practitioner', '0334' => 'Occupational therapist', '0335' => 'Ophthalmologist', '0336' => 'Optometrist', '0337' => 'Personnel officer/specialist', '0338' => 'Physical therapist', '0339' => 'Physician', '0340' => 'Physician assistant', '0341' => 'Planning specialist', '0342' => 'Psychiatrist', '0343' => 'Psychologist', '0344' => 'Public relations/informational services officer', '0345' => 'Recreational therapist', '0346' => 'Recreation worker', '0347' => 'Registered nurse', '0348' => 'Registrar', '0349' => 'Rehabilitation counselor', '0350' => 'Research and development specialist', '0351' => 'Respiratory therapist', '0352' => 'Social worker', '0353' => 'Speech pathologist/therapist', '0354' => 'Staff developer/teacher trainer', '0355' => 'Statistician', '0356' => 'Student personnel officer', '0357' => 'Tax assessor/collector', '0358' => 'Transition coordinator', '0359' => 'Translator', '0360' => 'Volunteer coordinator', '0361' => 'Work study coordinator', '0362' => 'Writer/editor', '0363' => 'Mediator/intervention specialist', '0400' => 'Paraprofessionals', '0401' => 'Assistant counselor', '0402' => 'Bilingual aide', '0403' => 'Bilingual special education aide', '0404' => 'Career aide', '0405' => 'Child care giver', '0406' => 'Computer aide', '0407' => 'Extra-curricular activity aide', '0408' => 'Financial aid specialist', '0409' => 'Monitor/prefect', '0410' => 'Library aide', '0411' => 'Media center aide', '0412' => 'Psychologist assistant', '0413' => 'Teaching/classroom aide', '0414' => 'Teaching assistant', '0415' => 'Tutor', '0500' => 'Technical', '0501' => 'Audiometrist', '0502' => 'Computer technician', '0503' => 'Drafter', '0504' => 'Engineering aide', '0505' => 'Graphic artist', '0506' => 'Inspector', '0507' => 'Licensed practical nurse', '0508' => 'Media technologist', '0509' => 'Photographer', '0510' => 'Psychometrist', '0511' => 'Purchasing agent', '0512' => 'Speech language technician', '0513' => 'Supervisor', '0600' => 'Office/clerical/administrative support', '0601' => 'Bookkeeping/accounting/auditing clerk', '0602' => 'Cashier', '0603' => 'Computer operator', '0604' => 'Data entry clerk', '0605' => 'Dispatcher', '0606' => 'Duplicating/photocopying assistant', '0607' => 'Electrical and electronic repairers', '0608' => 'File clerk', '0609' => 'General office clerk', '0610' => 'Mail clerk', '0611' => 'Messenger', '0612' => 'Office manager', '0613' => 'Receptionist', '0614' => 'Records clerk', '0615' => 'Secretary', '0616' => 'Stenographer', '0617' => 'Stores/supplies handler', '0618' => 'Switchboard/PBX operator', '0619' => 'Typist and wordprocessor', '0700' => 'Crafts and trades', '0701' => 'Brick mason', '0702' => 'Carpenter', '0703' => 'Cement mason', '0704' => 'Electrician', '0705' => 'HVAC mechanic', '0706' => 'Locksmith', '0707' => 'Maintenance repairers/general utility', '0708' => 'Painter and paperhanger', '0709' => 'Plasterer', '0710' => 'Plumber', '0711' => 'Printer', '0712' => 'Vehicle mechanic', '0800' => 'Operative', '0801' => 'Bus driver', '0802' => 'Other vehicle operator', '0900' => 'Laborer', '0901' => 'Construction laborer', '0902' => 'Freight, stock, and materials handlers', '0903' => 'Garbage collector', '0904' => 'Gardener', '0905' => 'Groundskeeper', '0906' => 'Garage/parking-lot attendant', '0907' => 'Vehicle washer/equipment cleaner', '1000' => 'Service work', '1001' => 'Bus monitor/crossing guard', '1002' => 'Child care worker', '1003' => 'Cook/food preparer', '1004' => 'Custodian', '1005' => 'Dietary technician', '1006' => 'Elevator operator', '1007' => 'Facilities maintenance worker', '1008' => 'Food service assistant', '1009' => 'Police officer', '1010' => 'Resident/dormitory supervisor', '1011' => 'Security guard', '1012' => 'Extended day-care provider', '9999' => 'Other');

	/**
	 * @XmlValue	(type="string", name="NCES0557JobClassificationType")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0557JobClassificationType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0557JobClassificationType
