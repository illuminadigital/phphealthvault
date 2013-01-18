<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0609RelationshipToStudentType")
 */
class NCES0609RelationshipToStudentType {
	/**
	 */
	static protected $enumValue = array('5006' => 'Adopted Daughter', '1747' => 'Adopted son', '1749' => 'Adoptive parents', '1750' => 'Advisor', '1751' => 'Agency representative', '1720' => 'Aunt', '1721' => 'Brother, half', '1722' => 'Brother, natural/adoptive', '1723' => 'Brother, step', '1752' => 'Brother-in-law', '1753' => 'Court appointed guardian', '1724' => 'Cousin', '1725' => 'Daughter', '1754' => 'Daughter-in-law', '1755' => 'Dependent', '1552' => 'Employer', '1759' => 'Family member', '1760' => 'Father\'s significant other', '1726' => 'Father, foster', '1727' => 'Father, natural/adoptive', '1728' => 'Father, step', '1761' => 'Father-in-law', '1762' => 'Fiancé', '1763' => 'Fiancée', '1757' => 'Former husband', '1758' => 'Former wife', '1764' => 'Foster daughter', '1765' => 'Foster parent', '1766' => 'Foster son', '1729' => 'Friend', '1767' => 'Granddaughter', '1730' => 'Grandfather', '1731' => 'Grandmother', '1769' => 'Grandson', '1770' => 'Great aunt', '1771' => 'Great uncle', '1732' => 'Husband', '1772' => 'Life partner', '1773' => 'Life partner of parent', '1774' => 'Minister or priest', '1775' => 'Mother\'s significant other', '1734' => 'Mother, foster', '1735' => 'Mother, natural/adoptive', '1736' => 'Mother, step', '1776' => 'Mother-in-law', '1737' => 'Nephew', '1738' => 'Niece', '9998' => 'None', '9999' => 'Other', '1777' => 'Partner', '1778' => 'Partner of parent', '1779' => 'Probation officer', '1739' => 'Significant other', '1740' => 'Sister, half', '1741' => 'Sister, natural/adoptive', '1742' => 'Sister, step', '1780' => 'Sister-in-law', '1743' => 'Son', '1781' => 'Son-in-law', '4987' => 'Stepdaughter', '1782' => 'Stepson', '1744' => 'Uncle', '1745' => 'Ward', '1746' => 'Wife');

	/**
	 * @XmlValue	(type="string", name="NCES0609RelationshipToStudentType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0609RelationshipToStudentType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0609RelationshipToStudentType
