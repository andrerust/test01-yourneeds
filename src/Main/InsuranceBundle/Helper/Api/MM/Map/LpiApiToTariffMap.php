<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Map;

class LpiApiToTariffMap extends AbstractApiToTariffMap
{
	protected $map = [
		[
			'api' => 'sb_v',
			'tariff' => 'retention',
			'parse' => true
		],
		[
			'api' => 'srpriv_v',
			'tariff' => 'privateSector',
			'parse' => true
		],
		[
			'api' => 'vs_v',
			'tariff' => 'amount',
			'parse' => true
		],
		[
			'api' => 'vswelt_v',
			'tariff' => 'worldwide',
			'parse' => true
		],
		[
			'api' => 'pinet_v',
			'tariff' => 'internetLaw',
			'parse' => true
		],
		[
			'api' => 'barb_v',
			'tariff' => 'workAndJob',
			'parse' => true
		],
		[
			'api' => 'vkfz_v',
			'tariff' => 'trafficLawProtection',
			'parse' => true
		],
		[
			'api' => 'vkfzvollj_v',
			'tariff' => 'trafficLawProtectionWithFamily',
			'parse' => true
		],
		[
			'api' => 'pstraf_v',
			'tariff' => 'extendedCriminalLegalProtection',
			'parse' => true
		],
		[
			'api' => 'ehe_v',
			'tariff' => 'matrimonialMatters',
			'parse' => true
		],
		[
			'api' => 'unterh_v',
			'tariff' => 'alimonyMatters',
			'parse' => true
		],
		[
			'api' => 'pvertrag_v',
			'tariff' => 'Rechtsschutz im Vertrags- und Sachrecht',
			'parse' => true
		],
		[
			'api' => 'hotl_v',
			'tariff' => 'freeInitialTelephoneConsultation',
			'parse' => true
		],
		[
			'api' => 'pbetreu_v',
			'tariff' => 'patentCertificate',
			'parse' => true
		],
		[
			'api' => 'medi_v',
			'tariff' => 'mediation',
			'parse' => true
		],
        [
            'api' => 'mselb_v',
            'tariff' => 'rentedFlatsSelf',
            'parse' => true
        ]
	];
}
