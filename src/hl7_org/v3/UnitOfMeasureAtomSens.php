<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="UnitOfMeasureAtomSens")
 */
class UnitOfMeasureAtomSens {
	/**
	 */
	static protected $enumValue = array('[APL\'U]' => '[APL\'U]', 'A' => 'A', 'Ao' => 'Ao', 'Bq' => 'Bq', '[beth\'U]' => '[beth\'U]', 'Bi' => 'Bi', '[bdsk\'U]' => '[bdsk\'U]', '[k]' => '[k]', '[Btu_39]' => '[Btu_39]', '[Btu_59]' => '[Btu_59]', '[Btu_60]' => '[Btu_60]', '[Btu_IT]' => '[Btu_IT]', '[Btu_m]' => '[Btu_m]', '[Btu_th]' => '[Btu_th]', '[Btu]' => '[Btu]', '[Cal]' => '[Cal]', '[Ch]' => '[Ch]', 'Ci' => 'Ci', '[dye\'U]' => '[dye\'U]', 'F' => 'F', '[GPL\'U]' => '[GPL\'U]', 'Gal' => 'Gal', 'G' => 'G', 'Gb' => 'Gb', 'Gy' => 'Gy', 'H' => 'H', 'Hz' => 'Hz', '[hnsf\'U]' => '[hnsf\'U]', 'J' => 'J', 'Ky' => 'Ky', '[ka\'U]' => '[ka\'U]', '[knk\'U]' => '[knk\'U]', 'Lmb' => 'Lmb', '[MPL\'U]' => '[MPL\'U]', '[mclg\'U]' => '[mclg\'U]', 'Mx' => 'Mx', 'N' => 'N', '[G]' => '[G]', 'Oe' => 'Oe', 'Ohm' => 'Ohm', 'Pa' => 'Pa', '[h]' => '[h]', 'P' => 'P', '[pca_pr]' => '[pca_pr]', '[pnt_pr]' => '[pnt_pr]', 'R' => 'R', 'S' => 'S', 'Sv' => 'Sv', '[smgy\'U]' => '[smgy\'U]', 'St' => 'St', '[S]' => '[S]', 'T' => 'T', '[todd\'U]' => '[todd\'U]', 'U' => 'U', '[USP\'U]' => '[USP\'U]', 'V' => 'V', 'W' => 'W', 'Wb' => 'Wb', '[g]' => '[g]', '[acr_br]' => '[acr_br]', '[acr_us]' => '[acr_us]', '[arb\'U]' => '[arb\'U]', 'ar' => 'ar', 'AU' => 'AU', 'atm' => 'atm', 'att' => 'att', 'bar' => 'bar', 'b' => 'b', '[bbl_us]' => '[bbl_us]', 'Bd' => 'Bd', 'B' => 'B', 'B[kW]' => 'B[kW]', 'B[uV]' => 'B[uV]', 'B[mV]' => 'B[mV]', 'B[SPL]' => 'B[SPL]', 'B[V]' => 'B[V]', 'B[W]' => 'B[W]', 'bit' => 'bit', 'bit_s' => 'bit_s', '[bf_i]' => '[bf_i]', '[bu_us]' => '[bu_us]', '[pk_br]' => '[pk_br]', 'By' => 'By', 'cal_[15]' => 'cal_[15]', 'cal_[20]' => 'cal_[20]', 'cal_IT' => 'cal_IT', 'cal_m' => 'cal_m', 'cal_th' => 'cal_th', 'cal' => 'cal', '[car_m]' => '[car_m]', '[car_Au]' => '[car_Au]', '[ch_br]' => '[ch_br]', '[ch_us]' => '[ch_us]', '[rch_us]' => '[rch_us]', '[cicero]' => '[cicero]', 'circ' => 'circ', '[cml_i]' => '[cml_i]', '[cr_i]' => '[cr_i]', '[crd_us]' => '[crd_us]', '[cft_i]' => '[cft_i]', '[cin_i]' => '[cin_i]', '[cyd_i]' => '[cyd_i]', '[cup_us]' => '[cup_us]', 'd' => 'd', 'deg' => 'deg', 'Cel' => 'Cel', '[degF]' => '[degF]', '[didot]' => '[didot]', '[diop]' => '[diop]', '[dr_av]' => '[dr_av]', '[dr_ap]' => '[dr_ap]', '[drp]' => '[drp]', '[dpt_us]' => '[dpt_us]', '[dqt_us]' => '[dqt_us]', 'dyn' => 'dyn', '[m_e]' => '[m_e]', 'eV' => 'eV', '[e]' => '[e]', 'eq' => 'eq', 'erg' => 'erg', '[fth_br]' => '[fth_br]', '[fth_i]' => '[fth_i]', '[fth_us]' => '[fth_us]', '[fdr_br]' => '[fdr_br]', '[fdr_us]' => '[fdr_us]', '[foz_br]' => '[foz_br]', '[foz_us]' => '[foz_us]', '[ft_br]' => '[ft_br]', '[ft_i]' => '[ft_i]', '[ft_us]' => '[ft_us]', '[rd_br]' => '[rd_br]', '[fur_us]' => '[fur_us]', '[gal_br]' => '[gal_br]', '[gal_us]' => '[gal_us]', '[gil_br]' => '[gil_br]', '[gil_us]' => '[gil_us]', 'gon' => 'gon', '[gr]' => '[gr]', 'g%' => 'g%', 'gf' => 'gf', '[hd_i]' => '[hd_i]', '[HPF]' => '[HPF]', 'h' => 'h', '[in_br]' => '[in_br]', '[in_i]' => '[in_i]', '[in_us]' => '[in_us]', '[in_i\'Hg]' => '[in_i\'Hg]', '[in_i\'H2O]' => '[in_i\'H2O]', '[iU]' => '[iU]', 'kat' => 'kat', '[kn_br]' => '[kn_br]', '[kn_i]' => '[kn_i]', '[ly]' => '[ly]', '[ligne]' => '[ligne]', '[lne]' => '[lne]', '[lk_br]' => '[lk_br]', '[lk_us]' => '[lk_us]', '[rlk_us]' => '[rlk_us]', 'l' => 'l', '[lcwt_av]' => '[lcwt_av]', '[lton_av]' => '[lton_av]', '[LPF]' => '[LPF]', 'lm' => 'lm', 'lx' => 'lx', '[mesh_i]' => '[mesh_i]', '[MET]' => '[MET]', 'm[Hg]' => 'm[Hg]', 'm[H2O]' => 'm[H2O]', '[mil_i]' => '[mil_i]', '[mil_us]' => '[mil_us]', '[mi_br]' => '[mi_br]', '[mi_us]' => '[mi_us]', '[min_br]' => '[min_br]', '[min_us]' => '[min_us]', '\'' => '\'', 'min' => 'min', 'mol' => 'mol', 'mo' => 'mo', 'mo_g' => 'mo_g', 'mo_j' => 'mo_j', 'mo_s' => 'mo_s', '[nmi_br]' => '[nmi_br]', '[nmi_i]' => '[nmi_i]', 'Np' => 'Np', 'osm' => 'osm', '[oz_ap]' => '[oz_ap]', '[oz_av]' => '[oz_av]', '[oz_tr]' => '[oz_tr]', '[pH]' => '[pH]', '[pc_br]' => '[pc_br]', 'pc' => 'pc', '[ppb]' => '[ppb]', '[ppm]' => '[ppm]', '[ppth]' => '[ppth]', '[pptr]' => '[pptr]', '[bu_br]' => '[bu_br]', '[pk_us]' => '[pk_us]', '[pwt_tr]' => '[pwt_tr]', '%' => '%', '[PRU]' => '[PRU]', '[mu_0]' => '[mu_0]', '[eps_0]' => '[eps_0]', 'ph' => 'ph', '[pca]' => '[pca]', '[pied]' => '[pied]', '[pt_br]' => '[pt_br]', '[pt_us]' => '[pt_us]', '[pnt]' => '[pnt]', '[pouce]' => '[pouce]', '[lb_ap]' => '[lb_ap]', '[lb_av]' => '[lb_av]', '[lb_tr]' => '[lb_tr]', '[lbf_av]' => '[lbf_av]', '[m_p]' => '[m_p]', '[psi]' => '[psi]', '[qt_br]' => '[qt_br]', '[qt_us]' => '[qt_us]', 'RAD' => 'RAD', 'REM' => 'REM', '[rd_us]' => '[rd_us]', '[sc_ap]' => '[sc_ap]', '\'\'' => '\'\'', '[sct]' => '[sct]', '[scwt_av]' => '[scwt_av]', '[ston_av]' => '[ston_av]', 'sph' => 'sph', '[sft_i]' => '[sft_i]', '[sin_i]' => '[sin_i]', '[smi_us]' => '[smi_us]', '[srd_us]' => '[srd_us]', '[syd_i]' => '[syd_i]', '[mi_i]' => '[mi_i]', 'st' => 'st', 'sb' => 'sb', '[stone_av]' => '[stone_av]', 'sr' => 'sr', '[tbs_us]' => '[tbs_us]', '[tsp_us]' => '[tsp_us]', '10*' => '10*', '[pi]' => '[pi]', 't' => 't', '[twp]' => '[twp]', '[tb\'U]' => '[tb\'U]', 'u' => 'u', '[c]' => '[c]', 'wk' => 'wk', '[gal_wi]' => '[gal_wi]', '[yd_br]' => '[yd_br]', '[yd_i]' => '[yd_i]', '[yd_us]' => '[yd_us]', 'a' => 'a', 'a_g' => 'a_g', 'a_j' => 'a_j', 'a_t' => 'a_t');

	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
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
		return new \hl7_org\v3\CS();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\CS ) {
			$value = new \hl7_org\v3\CS ($value);
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'UnitOfMeasureAtomSens', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class UnitOfMeasureAtomSens
