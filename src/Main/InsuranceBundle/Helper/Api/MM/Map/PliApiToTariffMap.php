<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Map;

class PliApiToTariffMap extends AbstractApiToTariffMap
{
	protected $map = [
		[
			'api' => 'vs_v',
			'tariff' => 'amountCoveredBodyInjury',
			'parse' => true
		],
		[
			'api' => 'vsv_v',
			'tariff' => 'amountCoveredFinancialDamage',
			'parse' => true
		],
		[
			'api' => 'vsm_v',
			'tariff' => 'amountCoveredRentalDamage',
			'parse' => true
		],
		[
			'api' => 'sb',
			'tariff' => 'retention',
			'parse' => true
		],
		[
			'api' => 'gargdv_v',
			'tariff' => 'bestPerfomanceGuarantee',
			'parse' => true
		],
		[
			'api' => 'arbfrei_v',
			'tariff' => 'eventOfUnemployment',
			'parse' => true
		],
		[
			'api' => 'lebensp_v',
			'tariff' => 'includePartner',
			'parse' => true
		],
		[
			'api' => 'gef_v',
			'tariff' => 'actsOfKindness',
			'parse' => true
		],
		[
			'api' => 'delikt_v',
			'tariff' => 'amountCoveredJungKids',
			'parse' => true
		],
		[
			'api' => 'fach_v',
			'tariff' => 'includeInternship',
			'parse' => true
		],
		[
			'api' => 'delikt_v',
			'tariff' => 'includeInternship',
			'parse' => true
		],
		[
			'api' => 'ehr_v',
			'tariff' => 'voluntaryWork',
			'parse' => true
		],
		[
			'api' => 'ausfall_v',
			'tariff' => 'badDeptLoss',
			'parse' => true
		],
		[
			'api' => 'inet_v',
			'tariff' => 'dataExchange',
			'parse' => true
		],
		[
			'api' => 'geli_v',
			'tariff' => 'damageToMovables',
			'parse' => true
		],
		[
			'api' => 'allm_v',
			'tariff' => 'gradualDamage',
			'parse' => true
		],
		[
			'api' => 'hausang_v',
			'tariff' => 'domesticServants',
			'parse' => true
		],
		[
			'api' => 'tagmu_v',
			'tariff' => 'childminderNonCommercial',
			'parse' => true
		],
		[
			'api' => 'bau_v',
			'tariff' => 'renovations',
			'parse' => true
		],
		[
			'api' => 'unbgru_v',
			'tariff' => 'undevelopedProperties',
			'parse' => true
		],
		[
			'api' => 'elt_v',
			'tariff' => 'withParentLivingInHouse',
			'parse' => true
		],
		[
			'api' => 'sv_v',
			'tariff' => 'lossOfPrivateKeys',
			'parse' => true
		],
		[
			'api' => 'svd_v',
			'tariff' => 'lossOfJobKeys',
			'parse' => true
		],
		[
			'api' => 'ew_v',
			'tariff' => 'ownResidentialHomeRentalOthers',
			'parse' => true
		],
		[
			'api' => 'efh_v',
			'tariff' => 'ownResidentialSingleFamilyHomeRentalOthers',
			'parse' => true
		],
		[
			'api' => 'sgwe_v',
			'tariff' => 'ownResidentialMultiFamilyHomeRentalOthers',
			'parse' => true
		],
		[
			'api' => 'fehau_v',
			'tariff' => 'rentedPropertiesNational',
			'parse' => true
		],
		[
			'api' => 'fewoa_v',
			'tariff' => 'rentedPropertiesEurope',
			'parse' => true
		],
		[
			'api' => 'oel_v',
			'tariff' => 'hasOilTankAboveGround',
			'parse' => true
		],
		[
			'api' => 'oelu_v',
			'tariff' => 'hasOilTankUnderGround',
			'parse' => true
		],
		[
			'api' => 'hund_v',
			'tariff' => 'shepherdingDogs',
			'parse' => true
		],
		[
			'api' => 'surf_v',
			'tariff' => 'surfboards',
			'parse' => true
		],
        [
            'api' => 'leiupd_v',
            'tariff' => 'bestPerfomanceGuarantee',
            'parse' => true
        ],
        [
            'api' => 'gargdv_v',
            'tariff' => 'conditionalUpdate',
            'parse' => true
        ]
	];
}
