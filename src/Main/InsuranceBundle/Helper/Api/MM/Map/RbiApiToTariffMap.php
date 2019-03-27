<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Map;

class RbiApiToTariffMap extends AbstractApiToTariffMap
{
	protected $map = [
		[
			'api' => 'SB',
			'tariff' => 'retention',
			'parse' => true
		],
		[
			'api' => 'garag_v',
			'tariff' => 'garageCount',
			'parse' => true
		],
		[
			'api' => 'nebeng_v',
			'tariff' => 'hasOutbuildings',
			'parse' => true
		],
		[
			'api' => 'vgef_v',
			'tariff' => 'elementary',
			'parse' => true
		],
		[
			'api' => 'foto_v',
			'tariff' => 'hasPhotovoltaic',
			'parse' => true
		],
		[
			'api' => 'graf_v',
			'tariff' => 'includeGraffiti',
			'parse' => true
		],
		[
			'api' => 'grob_v',
			'tariff' => 'includeCarelessness',
			'parse' => true
		],
		[
			'api' => 'leiupd_v',
			'tariff' => 'automaticBenefitImprovements',
			'parse' => true
		],
		[
			'api' => 'besch_v',
			'tariff' => 'includeDamagebyBreakIn',
			'parse' => true
		],
		[
			'api' => 'glas_v',
			'tariff' => 'includeGlas',
			'parse' => true
		],
		[
			'api' => 'allg_v',
			'tariff' => 'includeGlas',
			'parse' => true
		],
		[
			'api' => 'allg_v',
			'tariff' => 'includeAllDangers',
			'parse' => true
		],
		[
			'api' => 'zui_v',
			'tariff' => 'includeOnsideDrainagePipes',
			'parse' => true
		],
		[
			'api' => 'zua_v',
			'tariff' => 'includeOutsideDrainagePipes',
			'parse' => true
		],
		[
			'api' => 'rohr_v',
			'tariff' => 'includePipeBlockadeRemovement',
			'parse' => true
		],
		[
			'api' => 'klima_v',
			'tariff' => 'hasHeatPump',
			'parse' => true
		],
		[
			'api' => 'miet_v',
			'tariff' => 'protectionAgainsLossOfRent',
			'parse' => true
		],
	];
}
