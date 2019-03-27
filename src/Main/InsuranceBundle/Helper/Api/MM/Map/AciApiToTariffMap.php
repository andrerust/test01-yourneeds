<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Map;

class AciApiToTariffMap extends AbstractApiToTariffMap
{
	protected $map = [
        [
            'api' => 'grund',
            'tariff' => 'baseAmount',
            'parse' => true
        ],
		[
			'api' => 'khtg_v',
			'tariff' => 'dailyAccidentBenefit',
			'parse' => true
		],
		[
			'api' => 'rente',
			'tariff' => 'accidentPension',
			'parse' => true
		],
		[
			'api' => 'gtax_v',
			'tariff' => 'improvedLimbTax',
			'parse' => true
		],

		[
			'api' => 'knoch_v',
			'tariff' => 'haveBrokenBonesInsured',
			'parse' => true
		],
		[
			'api' => 'kraft_v',
			'tariff' => 'damageByEcessiveExertion',
			'parse' => true
		],
		[
			'api' => 'gift_v',
			'tariff' => 'poisonGases',
			'parse' => true
		],
		[
			'api' => 'nahr_v',
			'tariff' => 'poisonFood',
			'parse' => true
		],
		[
			'api' => 'stral_v',
			'tariff' => 'xRayDamage',
			'parse' => true
		],
		[
			'api' => 'tauch_v',
			'tariff' => 'divingDamages',
			'parse' => true
		],
		[
			'api' => 'zahn_v',
			'tariff' => 'dentalProthesis',
			'parse' => true
		],
		[
			'api' => 'mitw_v',
			'tariff' => 'involvementOfIllnesses',
			'parse' => true
		],
		[
			'api' => 'hahilf_v',
			'tariff' => 'domesticHelp',
			'parse' => true
		],
		[
			'api' => 'leiupd_v',
			'tariff' => 'automaticBenefitImprovements',
			'parse' => true
		],
		[
			'api' => 'alk_v',
			'tariff' => 'consciousnessThroughDrunkenness',
			'parse' => true
		],
		[
			'api' => 'insekt_v',
			'tariff' => 'insectBites',
			'parse' => true
		],
		[
			'api' => 'arb_v',
			'tariff' => 'unemployed',
			'parse' => true
		]
	];
}
