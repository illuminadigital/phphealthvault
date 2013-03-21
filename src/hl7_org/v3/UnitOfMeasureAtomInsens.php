<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="UnitOfMeasureAtomInsens")
 */
class UnitOfMeasureAtomInsens {
	/**
	 */
	static protected $enumValue = array('[APL\'U]' => '[APL\'U]', 'A' => 'A', 'AO' => 'AO', 'BQ' => 'BQ', '[BETH\'U]' => '[BETH\'U]', 'BI' => 'BI', '[BDSK\'U]' => '[BDSK\'U]', '[K]' => '[K]', '[BTU_39]' => '[BTU_39]', '[BTU_59]' => '[BTU_59]', '[BTU_60]' => '[BTU_60]', '[BTU_IT]' => '[BTU_IT]', '[BTU_M]' => '[BTU_M]', '[BTU_TH]' => '[BTU_TH]', '[BTU]' => '[BTU]', '[CAL]' => '[CAL]', '[CH]' => '[CH]', 'CI' => 'CI', '[DYE\'U]' => '[DYE\'U]', 'F' => 'F', '[GPL\'U]' => '[GPL\'U]', 'GL' => 'GL', 'GS' => 'GS', 'GB' => 'GB', 'GY' => 'GY', 'H' => 'H', 'HZ' => 'HZ', '[HNSF\'U]' => '[HNSF\'U]', 'J' => 'J', 'KY' => 'KY', '[KA\'U]' => '[KA\'U]', '[KNK\'U]' => '[KNK\'U]', 'LMB' => 'LMB', '[MPL\'U]' => '[MPL\'U]', '[MCLG\'U]' => '[MCLG\'U]', 'MX' => 'MX', 'N' => 'N', '[GC]' => '[GC]', 'OE' => 'OE', 'OHM' => 'OHM', 'PAL' => 'PAL', '[H]' => '[H]', 'P' => 'P', '[PCA_PR]' => '[PCA_PR]', '[PNT_PR]' => '[PNT_PR]', 'ROE' => 'ROE', 'SIE' => 'SIE', 'SV' => 'SV', '[SMGY\'U]' => '[SMGY\'U]', 'ST' => 'ST', '[S]' => '[S]', 'T' => 'T', '[TODD\'U]' => '[TODD\'U]', 'U' => 'U', '[USP\'U]' => '[USP\'U]', 'V' => 'V', 'W' => 'W', 'WB' => 'WB', '[G]' => '[G]', '[ACR_BR]' => '[ACR_BR]', '[ACR_US]' => '[ACR_US]', '[ARB\'U]' => '[ARB\'U]', 'AR' => 'AR', 'ASU' => 'ASU', 'ATM' => 'ATM', 'ATT' => 'ATT', 'BAR' => 'BAR', 'BRN' => 'BRN', '[BBL_US]' => '[BBL_US]', 'BD' => 'BD', 'B' => 'B', 'B[KW]' => 'B[KW]', 'B[UV]' => 'B[UV]', 'B[MV]' => 'B[MV]', 'B[SPL]' => 'B[SPL]', 'B[V]' => 'B[V]', 'B[W]' => 'B[W]', 'BIT' => 'BIT', 'BIT_S' => 'BIT_S', '[BF_I]' => '[BF_I]', '[BU_US]' => '[BU_US]', '[PK_BR]' => '[PK_BR]', 'BY' => 'BY', 'CAL_[15]' => 'CAL_[15]', 'CAL_[20]' => 'CAL_[20]', 'CAL_IT' => 'CAL_IT', 'CAL_M' => 'CAL_M', 'CAL_TH' => 'CAL_TH', 'CAL' => 'CAL', '[CAR_M]' => '[CAR_M]', '[CAR_AU]' => '[CAR_AU]', '[CH_BR]' => '[CH_BR]', '[CH_US]' => '[CH_US]', '[RCH_US]' => '[RCH_US]', '[CICERO]' => '[CICERO]', 'CIRC' => 'CIRC', '[CML_I]' => '[CML_I]', '[CR_I]' => '[CR_I]', '[CRD_US]' => '[CRD_US]', '[CFT_I]' => '[CFT_I]', '[CIN_I]' => '[CIN_I]', '[CYD_I]' => '[CYD_I]', '[CUP_US]' => '[CUP_US]', 'D' => 'D', 'DEG' => 'DEG', 'CEL' => 'CEL', '[DEGF]' => '[DEGF]', '[DIDOT]' => '[DIDOT]', '[DIOP]' => '[DIOP]', '[DR_AV]' => '[DR_AV]', '[DR_AP]' => '[DR_AP]', '[DRP]' => '[DRP]', '[DPT_US]' => '[DPT_US]', '[DQT_US]' => '[DQT_US]', 'DYN' => 'DYN', '[M_E]' => '[M_E]', 'EV' => 'EV', '[E]' => '[E]', 'EQ' => 'EQ', 'ERG' => 'ERG', '[FTH_BR]' => '[FTH_BR]', '[FTH_I]' => '[FTH_I]', '[FTH_US]' => '[FTH_US]', '[FDR_BR]' => '[FDR_BR]', '[FDR_US]' => '[FDR_US]', '[FOZ_BR]' => '[FOZ_BR]', '[FOZ_US]' => '[FOZ_US]', '[FT_BR]' => '[FT_BR]', '[FT_I]' => '[FT_I]', '[FT_US]' => '[FT_US]', '[RD_BR]' => '[RD_BR]', '[FUR_US]' => '[FUR_US]', '[GAL_BR]' => '[GAL_BR]', '[GAL_US]' => '[GAL_US]', '[GIL_BR]' => '[GIL_BR]', '[GIL_US]' => '[GIL_US]', 'GON' => 'GON', '[GR]' => '[GR]', 'G%' => 'G%', 'GF' => 'GF', '[HD_I]' => '[HD_I]', '[HPF]' => '[HPF]', 'HR' => 'HR', '[IN_BR]' => '[IN_BR]', '[IN_I]' => '[IN_I]', '[IN_US]' => '[IN_US]', '[IN_I\'HG]' => '[IN_I\'HG]', '[IN_I\'H2O]' => '[IN_I\'H2O]', '[IU]' => '[IU]', 'KAT' => 'KAT', '[KN_BR]' => '[KN_BR]', '[KN_I]' => '[KN_I]', '[LY]' => '[LY]', '[LIGNE]' => '[LIGNE]', '[LNE]' => '[LNE]', '[LK_BR]' => '[LK_BR]', '[LK_US]' => '[LK_US]', '[RLK_US]' => '[RLK_US]', 'L' => 'L', '[LCWT_AV]' => '[LCWT_AV]', '[LTON_AV]' => '[LTON_AV]', '[LPF]' => '[LPF]', 'LM' => 'LM', 'LX' => 'LX', '[MESH_I]' => '[MESH_I]', '[MET]' => '[MET]', 'M[HG]' => 'M[HG]', 'M[H2O]' => 'M[H2O]', '[MIL_I]' => '[MIL_I]', '[MIL_US]' => '[MIL_US]', '[MI_BR]' => '[MI_BR]', '[MI_US]' => '[MI_US]', '[MIN_BR]' => '[MIN_BR]', '[MIN_US]' => '[MIN_US]', '\'' => '\'', 'MIN' => 'MIN', 'MOL' => 'MOL', 'MO' => 'MO', 'MO_G' => 'MO_G', 'MO_J' => 'MO_J', 'MO_S' => 'MO_S', '[NMI_BR]' => '[NMI_BR]', '[NMI_I]' => '[NMI_I]', 'NEP' => 'NEP', 'OSM' => 'OSM', '[OZ_AP]' => '[OZ_AP]', '[OZ_AV]' => '[OZ_AV]', '[OZ_TR]' => '[OZ_TR]', '[PH]' => '[PH]', '[PC_BR]' => '[PC_BR]', 'PRS' => 'PRS', '[PPB]' => '[PPB]', '[PPM]' => '[PPM]', '[PPTH]' => '[PPTH]', '[PPTR]' => '[PPTR]', '[BU_BR]' => '[BU_BR]', '[PK_US]' => '[PK_US]', '[PWT_TR]' => '[PWT_TR]', '%' => '%', '[PRU]' => '[PRU]', '[MU_0]' => '[MU_0]', '[EPS_0]' => '[EPS_0]', 'PHT' => 'PHT', '[PCA]' => '[PCA]', '[PIED]' => '[PIED]', '[PT_BR]' => '[PT_BR]', '[PT_US]' => '[PT_US]', '[PNT]' => '[PNT]', '[POUCE]' => '[POUCE]', '[LB_AP]' => '[LB_AP]', '[LB_AV]' => '[LB_AV]', '[LB_TR]' => '[LB_TR]', '[LBF_AV]' => '[LBF_AV]', '[M_P]' => '[M_P]', '[PSI]' => '[PSI]', '[QT_BR]' => '[QT_BR]', '[QT_US]' => '[QT_US]', '[RAD]' => '[RAD]', '[REM]' => '[REM]', '[RD_US]' => '[RD_US]', '[SC_AP]' => '[SC_AP]', '\'\'' => '\'\'', '[SCT]' => '[SCT]', '[SCWT_AV]' => '[SCWT_AV]', '[STON_AV]' => '[STON_AV]', 'SPH' => 'SPH', '[SFT_I]' => '[SFT_I]', '[SIN_I]' => '[SIN_I]', '[SMI_US]' => '[SMI_US]', '[SRD_US]' => '[SRD_US]', '[SYD_I]' => '[SYD_I]', '[MI_I]' => '[MI_I]', 'STR' => 'STR', 'SB' => 'SB', '[STONE_AV]' => '[STONE_AV]', 'SR' => 'SR', '[TBS_US]' => '[TBS_US]', '[TSP_US]' => '[TSP_US]', '10*' => '10*', '[PI]' => '[PI]', 'TNE' => 'TNE', '[TWP]' => '[TWP]', '[TB\'U]' => '[TB\'U]', 'AMU' => 'AMU', '[C]' => '[C]', 'WK' => 'WK', '[GAL_WI]' => '[GAL_WI]', '[YD_BR]' => '[YD_BR]', '[YD_I]' => '[YD_I]', '[YD_US]' => '[YD_US]', 'ANN' => 'ANN', 'ANN_G' => 'ANN_G', 'ANN_J' => 'ANN_J', 'ANN_T' => 'ANN_T');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'UnitOfMeasureAtomInsens', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class UnitOfMeasureAtomInsens
