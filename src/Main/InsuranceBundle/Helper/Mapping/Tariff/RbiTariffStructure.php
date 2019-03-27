<?php
namespace Main\InsuranceBundle\Helper\Mapping\Tariff;

class RbiTariffStructure extends AbstractTariffStructure
{
	protected $structure = [
		[
			'name' => 'address',
			'mapName' => 'address',
			'resultText' => 'Adresse',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'isHistoricalMonument',
			'mapName' => 'isHistoricalMonument',
			'visibleInResult' => true,
			'resultText' => 'Glas mitversichert',
			'doMap' => true,
			'parse' => true,
			'json' => true
		],
		[
			'name' => 'livingHow',
			'mapName' => 'livingHow',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'livingHowConstructionClass',
			'mapName' => 'livingHowConstructionClass',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'roofType',
			'mapName' => 'roofType',
			'visibleInResult' => true,
			'resultText' => 'Glas mitversichert',
			'doMap' => true
		],
		[
			'name' => 'topFloorConverted',
			'resultText' => 'Glas mitversichert',
			'mapName' => 'topFloorConverted',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'visibleInResult' => true,
			'mapName' => 'unitCount',
			'doMap' => true,
			'resultText' => 'Glas mitversichert',
			'parse' => true,
			'json' => true
		],
		[
			'name' => 'howManySquareMetersAttic',
			'mapName' => 'howManySquareMetersAttic',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'howManySquareMetersOtherFloors',
			'mapName' => 'howManySquareMetersOtherFloors',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasCellar',
			'mapName' => 'hasCellar',
			'visibleInResult' => true, 'doMap' => true,
			'resultText' => 'Glas mitversichert',
			'parse' => true,
			'json' => true
		],
		[
			'name' => 'yearOfConstruction',
			'mapName' => 'yearOfConstruction',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'isRenovated',
			'mapName' => 'isRenovated',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovatedRoof',
			'mapName' => 'renovatedRoof',
			'visibleInResult' => true,
			'doMap' => true,
			'resultText' => 'Glas mitversichert',
			'parse' => true,
			'json' => true
		],
		[
			'name' => 'renovatedRoofYear',
			'mapName' => 'renovatedRoofYear',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovatedHeater',
			'mapName' => 'renovatedHeater',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovatedHeaterYear',
			'mapName' => 'renovatedHeaterYear',
			'visibleInResult' => true,
			'doMap' => true,
			'resultText' => 'Glas mitversichert',
			'parse' => true,
			'json' => true
		],
		[
			'name' => 'renovatedWaterSanitary',
			'mapName' => 'renovatedWaterSanitary',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovatedWaterSanitaryYear',
			'mapName' => 'renovatedWaterSanitaryYear',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovatedElectronics',
			'mapName' => 'renovatedElectronics',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovatedElectronicsYear',
			'mapName' => 'renovatedElectronicsYear',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'renovatedHeaterYear',
			'mapName' => 'renovatedHeaterYear',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'equipmentUpgrade',
			'mapName' => 'equipmentUpgrade',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasGarage',
			'mapName' => 'hasGarage',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'garageCount',
			'mapName' => 'garageCount',
			'resultText' => 'Garagen außerhalb des Gebäudes',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasOutbuildings',
			'mapName' => 'hasOutbuildings',
			'resultText' => 'Nebengebäude ohne gewerbl. oder landw. Nutzung',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'elementary',
			'mapName' => 'elementary',
			'resultText' => 'Versicherte Gefahren und Schäden',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeOnsideDrainagePipes',
			'mapName' => 'includeOnsideDrainagePipes',
			'resultText' => 'Wasserzuleitungs- und Heizungsrohre auf dem Versicherungsgrundstück, die nicht der Versorgung des versicherten Gebäudes dienen.',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeOutsideDrainagePipes',
			'mapName' => 'includeOutsideDrainagePipes',
			'resultText' => 'Wasserzuleitungs- und Heizungsrohre außerhalb des Versicherungsgrundstücks, die der Versorgung des versicherten Gebäudes dienen',
			'visibleInResult' => true,
			'doMap' => true,
		],
		[
			'name' => 'hasCarport',
			'mapName' => 'hasCarport',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'carportCount',
			'mapName' => 'carportCount',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'outbuildingsExist',
			'mapName' => 'outbuildingsExist',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'outbuildingSquareMeters',
			'mapName' => 'outbuildingSquareMeters',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'elementary',
			'mapName' => 'elementary',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeAllDangers',
			'mapName' => 'includeAllDangers',
			'resultText' => 'Allgefahrendeckung versichert',
			'visibleInResult' => true,
			'doMap' => true
		],

		[
			'name' => 'includeGlas',
			'mapName' => 'includeGlas',
			'resultText' => 'Gebäudeverglasung mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeCarelessness',
			'mapName' => 'includeCarelessness',
			'resultText' => 'Grobe Fahrlässigkeit',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasHeatPump',
			'mapName' => 'hasHeatPump',
			'resultText' => 'Klima-/Wärmepumpen und Solaranlagen durch Rohrbruch',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasPhotovoltaic',
			'mapName' => 'hasPhotovoltaic',
			'resultText' => 'Photovoltaikanlagen',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeGraffiti',
			'mapName' => 'includeGraffiti',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeDamagebyBreakIn',
			'mapName' => 'includeDamagebyBreakIn',
			'resultText' => 'Gebäudebeschädigungen durch unbefugte Dritte ',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includeOutsideDrainagePipes',
			'mapName' => 'includeOutsideDrainagePipes',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'includePipeBlockadeRemovement',
			'mapName' => 'includePipeBlockadeRemovement',
			'resultText' => 'Rohrverstopfungen',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'protectionAgainsLossOfRent',
			'mapName' => 'protectionAgainsLossOfRent',
			'resultText' => 'Mietausfall für vermietete Räume',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'automaticBenefitImprovements',
			'mapName' => 'automaticBenefitImprovements',
			'resultText' => 'Künftige Leistungsverbesserungen gelten automatisch',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'hasLastFiveYearsHomeownerInsurance',
			'mapName' => 'hasLastFiveYearsHomeownerInsurance',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'numberOfPreviousCases',
			'mapName' => 'numberOfPreviousCases',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'numberOfPreviousCasesCount',
			'mapName' => 'numberOfPreviousCasesCount',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'shellFireInsurance',
			'mapName' => 'shellFireInsurance',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'shellFireInsuranceTimeInterval',
			'mapName' => 'shellFireInsuranceTimeInterval',
			'resultText' => 'Glas mitversichert',
			'visibleInResult' => true,
			'doMap' => true
		]
	];
}