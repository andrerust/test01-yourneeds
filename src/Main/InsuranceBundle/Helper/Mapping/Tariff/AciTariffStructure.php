<?php
namespace Main\InsuranceBundle\Helper\Mapping\Tariff;

class AciTariffStructure extends AbstractTariffStructure
{
	protected $structure = [
        [
            'name' => 'baseAmount',
            'mapName' => 'baseAmount',
            'resultText' => 'Grundsumme',
            'visibleInResult' => true,
            'doMap' => true
        ],
		[
			'name' => 'dailyAccidentBenefit',
			'mapName' => 'dailyAccidentBenefit',
			'resultText' => 'Krankenhaustagegeld (falls beantragt)',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'accidentPension',
			'mapName' => 'accidentPension',
			'resultText' => 'Unfallrente ab 50% in Höhe von',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'improvedLimbTax',
			'mapName' => 'improvedLimbTax',
			'resultText' => 'Verbesserte Gliedertaxe',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'haveBrokenBonesInsured',
			'mapName' => 'haveBrokenBonesInsured',
			'resultText' => 'Knochenbruch als Sofort Einmalleistung',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'damageByEcessiveExertion',
			'mapName' => 'damageByEcessiveExertion',
			'resultText' => 'Erhöhte Kraftanstrengung',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'poisonGases',
			'mapName' => 'poisonGases',
			'resultText' => 'Gase / Dämpfe',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'poisonFood',
			'mapName' => 'poisonFood',
			'resultText' => 'Nahrungsmittelvergiftungen',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'xRayDamage',
			'mapName' => 'xRayDamage',
			'resultText' => 'Strahlenschäden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'divingDamages',
			'mapName' => 'divingDamages',
			'resultText' => 'Tauchtypische Gesundheitsschädigungen',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'dentalProthesis',
			'mapName' => 'dentalProthesis',
			'resultText' => 'Zahnersatz infolge Unfall',
			'visibleInResult' => true,
			'doMap' => true,
		],
		[
			'name' => 'involvementOfIllnesses',
			'mapName' => 'involvementOfIllnesses',
			'resultText' => 'Anrechnung der Mitwirkung von Krankheiten/Gebrechen bei Unfällen',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'domesticHelp',
			'mapName' => 'domesticHelp',
			'resultText' => 'Haushaltshilfe',
			'visibleInResult' => true
		],

		[
			'name' => 'automaticBenefitImprovements',
			'mapName' => 'automaticBenefitImprovements',
			'resultText' => 'Leistungsverbesserungen gelten zukünftig automatisch',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'consciousnessThroughDrunkenness',
			'mapName' => 'consciousnessThroughDrunkenness',
			'resultText' => 'Alkoholklausel',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'insectBites',
			'mapName' => 'insectBites',
			'resultText' => 'Insektenstiche',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'unemployed',
			'mapName' => 'unemployed',
			'resultText' => 'Arbeitslosigkeit',
			'doMap' => true,
			'visibleInResult' => true
		]
	];
}