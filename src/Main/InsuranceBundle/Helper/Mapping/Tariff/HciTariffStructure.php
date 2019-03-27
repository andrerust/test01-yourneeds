<?php
namespace Main\InsuranceBundle\Helper\Mapping\Tariff;

class HciTariffStructure extends AbstractTariffStructure
{
	protected $structure = [
		[
			'name' => 'calculateSum',
			'mapName' => 'calculateSum',
			'resultText' => 'Versicherungsssumme',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'calculateSumBySquareMeters',
			'mapName' => 'calculateSumBySquareMeters',
			'resultText' => 'Empfohlene VS pro qm Wohnfläche',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'ceramicHob',
			'mapName' => 'ceramicHob',
			'resultText' => 'Glasbruch',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'floodingAndEarthquakes',
			'mapName' => 'floodingAndEarthquakes',
			'resultText' => 'Elementarschäden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'bicycleTheft',
			'mapName' => 'bicycleTheft',
			'resultText' => 'Fahrraddiebstahl',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'damagesCausedByGrossNegligence',
			'mapName' => 'damagesCausedByGrossNegligence',
			'resultText' => 'Grobe Fahrlässigkeit',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeAnimals',
			'mapName' => 'includeAnimals',
			'resultText' => 'Haustiere',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'homeOfficeDamage',
			'mapName' => 'homeOfficeDamage',
			'resultText' => 'Sachen im häuslichen Arbeitszimmer',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hotelCosts',
			'mapName' => 'hotelCosts',
			'resultText' => 'Hotelkostenübernahme',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'returnTravelCosts',
			'mapName' => 'returnTravelCosts',
			'resultText' => 'Rückreisekosten aus dem Urlaub',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'carTheft',
			'mapName' => 'carTheft',
			'resultText' => 'Diebstahl aus verschlossenen KFZ',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'dataRescue',
			'mapName' => 'dataRescue',
			'resultText' => 'Datenrettungskosten',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'surgeDamage',
			'mapName' => 'surgeDamage',
			'resultText' => 'Überspannungsschäden durch Blitz',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'singeingDamage',
			'mapName' => 'singeingDamage',
			'resultText' => 'Sengschäden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'waterLossDueBurstPipes',
			'mapName' => 'waterLossDueBurstPipes',
			'resultText' => 'Wasserverlust infolge Rohrbruch',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'theftOfGardenFurniture',
			'mapName' => 'theftOfGardenFurniture',
			'resultText' => 'Diebstahl von Gartenmöbeln',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'pickpocketing',
			'mapName' => 'pickpocketing ',
			'resultText' => 'Trickdiebstahl',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'automaticBenefitImprovements',
			'mapName' => 'automaticBenefitImprovements ',
			'resultText' => 'Künftige Leistungsverbesserungen gelten automatisch',
			'visibleInResult' => true,
			'doMap' => true
		],
	];
}