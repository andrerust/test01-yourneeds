<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Map;

class HciApiToTariffMap extends AbstractApiToTariffMap
{
	protected $map = [
		[
			'api' => 'selbst',
			'tariff' => 'retention',
			'parse' => true
		],
		[
			'api' => 'verssumme',
			'tariff' => 'calculateSum',
			'parse' => true
		],
		[
			'api' => 'vsempf_v',
			'tariff' => 'calculateSumBySquareMeters',
			'parse' => true
		],
		[
			'api' => 'glas_v',
			'tariff' => 'ceramicHob',
			'parse' => true
		],
		[
			'api' => 'ele_v',
			'tariff' => 'floodingAndEarthquakes',
			'parse' => true
		],
		[
			'api' => 'rad_v',
			'tariff' => 'bicycleTheft',
			'parse' => true
		],
		[
			'api' => 'grob_v',
			'tariff' => 'damagesCausedByGrossNegligence',
			'parse' => true
		],
		[
			'api' => 'tier_v',
			'tariff' => 'includeAnimals',
			'parse' => true
		],
		[
			'api' => 'arb_v',
			'tariff' => 'homeOfficeDamage',
			'parse' => true
		],
		[
			'api' => 'hot_v',
			'tariff' => 'hotelCosts',
			'parse' => true
		],
		[
			'api' => 'reise_v',
			'tariff' => 'returnTravelCosts',
			'parse' => true
		],
		[
			'api' => 'dkfz_v',
			'tariff' => 'carTheft',
			'parse' => true
		],
		[
			'api' => 'dataret_v',
			'tariff' => 'dataRescue',
			'parse' => true
		],
		[
			'api' => 'ues_v',
			'tariff' => 'surgeDamage',
			'parse' => true
		],
		[
			'api' => 'seng_v',
			'tariff' => 'singeingDamage',
			'parse' => true
		],
		[
			'api' => 'waver_v',
			'tariff' => 'waterLossDueBurstPipes',
			'parse' => true
		],
		[
			'api' => 'dgar_v',
			'tariff' => 'theftOfGardenFurniture',
			'parse' => true
		],
		[
			'api' => 'trick_v',
			'tariff' => 'pickpocketing',
			'parse' => true
		],
		[
			'api' => 'leiupd_v',
			'tariff' => 'automaticBenefitImprovements',
			'parse' => true
		]
	];
}
