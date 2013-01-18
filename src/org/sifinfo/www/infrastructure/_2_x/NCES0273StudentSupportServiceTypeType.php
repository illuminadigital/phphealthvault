<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0273StudentSupportServiceTypeType")
 */
class NCES0273StudentSupportServiceTypeType {
	/**
	 */
	static protected $enumValue = array('0290' => 'Adaptive physical education', '0291' => 'Art therapy', '0292' => 'Assistive technology services', '0293' => 'Audiological services', '0295' => 'Children\'s protective services', '0334' => 'Developmental childcare program', '0297' => 'Early intervention services', '0298' => 'Educational therapy', '0299' => 'Family counseling', '0333' => 'Family training, counseling, and home visits', '0300' => 'Free school meals programs', '0302' => 'Guidance counseling', '0303' => 'Health care', '0304' => 'Interpretation for the hearing impaired', '0332' => 'Medical services only for diagnostic or evaluation purposes', '0305' => 'Mental health counseling', '0306' => 'Music therapy', '0308' => 'Note-taking assistance', '0335' => 'Nursing service', '0336' => 'Nutrition services', '0309' => 'Occupational therapy', '0310' => 'Orientation and mobility services', '9999' => 'Other', '0311' => 'Parenting skills assistance', '0312' => 'Peer services', '0313' => 'Physical therapy', '0331' => 'Psychological services', '0314' => 'Reader service', '0315' => 'Recreation service', '0316' => 'Reduced price school meals programs', '0318' => 'Rehabilitation counseling services', '0319' => 'School clothing', '0320' => 'School health nursing services', '0294' => 'Service coordination (case management services)', '0337' => 'Social work services', '0321' => 'Special transportation', '0322' => 'Speech-language therapy', '0323' => 'Study skills assistance', '0324' => 'Substance abuse education/prevention', '0325' => 'Teen/adolescent family planning', '0326' => 'Test assistance', '0327' => 'Translating/interpreting', '0329' => 'Tutoring services', '0330' => 'Vision services');

	/**
	 * @XmlValue	(type="string", name="NCES0273StudentSupportServiceTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0273StudentSupportServiceTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0273StudentSupportServiceTypeType
