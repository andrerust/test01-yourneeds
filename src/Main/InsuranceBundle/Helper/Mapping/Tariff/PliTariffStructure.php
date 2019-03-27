<?php
namespace Main\InsuranceBundle\Helper\Mapping\Tariff;

class PliTariffStructure extends AbstractTariffStructure
{
	protected $structure = [
		[
			'name' => 'amountCoveredBodyInjury',
			'mapName' => 'amountCoveredBodyInjury',
			'resultText' => 'Mindest-Versicherungssumme Personen/Sachschaeden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'amountCoveredFinancialDamage',
			'mapName' => 'amountCoveredFinancialDamage',
			'resultText' => 'Mindest-Versicherungssumme fuer Vermoegensschaeden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'amountCoveredRentalDamage',
			'mapName' => 'amountCoveredRentalDamage',
			'resultText' => 'Mietsachschäden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'bestPerfomanceGuarantee',
			'mapName' => 'bestPerfomanceGuarantee',
			'resultText' => 'Leistungsgarantie gegenüber Musterbedingungen des GDV',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'eventOfUnemployment',
			'mapName' => 'eventOfUnemployment',
			'resultText' => 'Prämienbefreiung bei Arbeitslosigkeit',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'amountCoveredJungKids',
			'mapName' => 'amountCoveredJungKids',
			'resultText' => 'Deliktunfähige Kinder',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includePartner',
			'mapName' => 'includePartner',
			'resultText' => 'Ehegatte oder Lebenspartner (wenn im Haushalt lebend)',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'actsOfKindness',
			'mapName' => 'actsOfKindness',
			'resultText' => 'Gefälligkeitsschäden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'voluntaryWork',
			'mapName' => 'voluntaryWork',
			'resultText' => 'Ehrenamtliche Tätigkeiten',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'badDeptLoss',
			'mapName' => 'badDeptLoss',
			'resultText' => 'Ehegatte oder Lebenspartner (wenn im Haushalt lebend)',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'dataExchange',
			'mapName' => 'dataExchange',
			'resultText' => 'Schaeden durch elektronischen Datenaustausch/Internetnutzung',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'damageToMovables',
			'mapName' => 'damageToMovables',
			'resultText' => 'Gemietete, geliehene Sachen',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'gradualDamage',
			'mapName' => 'gradualDamage',
			'resultText' => 'Allmählichkeitsschäden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'domesticServants',
			'mapName' => 'domesticServants',
			'resultText' => 'Hausangestellte im Rahmen ihrer Tätigkeit, (Schäden an Dritten)',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'childminderNonCommercial',
			'mapName' => 'childminderNonCommercial',
			'resultText' => 'Tagesmutter, unentgeltliche Tätigkeit',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovations',
			'mapName' => 'renovations',
			'resultText' => 'Bauherrenhaftpflicht am Haus oder Grundstück',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'undevelopedProperties',
			'mapName' => 'undevelopedProperties',
			'resultText' => 'Unbebaute Grundstücke',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'withParentLivingInHouse',
			'mapName' => 'withParentLivingInHouse',
			'resultText' => 'Alleinstehendes Elternteil im Haushalt lebend',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'lossOfPrivateKeys',
			'mapName' => 'lossOfPrivateKeys',
			'resultText' => 'Schlüsselverlust, fremder privater Schlüssel (Mietwohnung)',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'lossOfJobKeys',
			'mapName' => 'lossOfJobKeys',
			'resultText' => 'Schlüsselverlust von fremden Dienstschlüsseln',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'ownResidentialHomeRentalOthers',
			'mapName' => 'ownResidentialHomeRentalOthers',
			'resultText' => 'Eigentumswohnungen in Deutschland, vermietet',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'ownResidentialSingleFamilyHomeRentalOthers',
			'mapName' => 'ownResidentialSingleFamilyHomeRentalOthers',
			'resultText' => 'Einfamilienhaus selbstgenutzt, Haus- und Grundbesitzerhaftpflicht',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'ownResidentialMultiFamilyHomeRentalOthers',
			'mapName' => 'ownResidentialMultiFamilyHomeRentalOthers',
			'resultText' => 'Mehrfamilienhaus selbstgenutzt, Haus- und Grundbesitzerhaftpflicht',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'rentedPropertiesAbroad',
			'mapName' => 'rentedPropertiesAbroad',
			'resultText' => 'Vermietung eines Ferienhauses',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'rentedPropertiesNational',
			'mapName' => 'rentedPropertiesNational',
			'resultText' => 'Vermietung eines Ferienhauses',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'rentedPropertiesEurope',
			'mapName' => 'rentedPropertiesEurope',
			'resultText' => 'Wohnung / Ferienwohnung / Ferienhaus im europ. Ausland ohne Vermietung',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasOilTankAboveGround',
			'mapName' => 'hasOilTankAboveGround',
			'resultText' => 'Heizöltank oberirdisch',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasOilTankUnderGround',
			'mapName' => 'hasOilTankUnderGround',
			'resultText' => 'Heizöltank unterirdisch',
			'visibleInResult' => true,
			'doMap' => true
		],

		[
			'name' => 'shepherdingDogs',
			'mapName' => 'shepherdingDogs',
			'resultText' => 'Hüten fremder Hunde (nicht gewerbsmäßig und keine Kampfhunde)',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'surfboards',
			'mapName' => 'surfboards',
			'resultText' => 'Eigene Surfbretter',
			'visibleInResult' => true,
			'doMap' => true
		],
        [
            'name' => 'bestPerfomanceGuarantee',
            'mapName' => 'bestPerfomanceGuarantee',
            'resultText' => 'Künftige Leistungsverbesserungen gelten automatisch',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'conditionalUpdate',
            'mapName' => 'conditionalUpdate',
            'resultText' => 'Leistungsgarantie gegenüber Musterbedingungen des GDV',
            'visibleInResult' => true,
            'doMap' => true
        ]
	];
}