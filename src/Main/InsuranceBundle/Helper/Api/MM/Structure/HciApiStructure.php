<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Structure;

class HciApiStructure extends AbstractApiStructure
{
	protected $structure = [
		[
			'name' => 'selbst',
			'parse' => true,
			'description' => 'Selbstbeteiligung'
		],
		[
			'name' => 'verssumme',
			'parse' => true,
			'description' => 'Manuell angegebene - Diese Summe erhalten Sie maximal bei einem Schaden. Die Entschädigung wird zum Neuwert gezahlt.'
		],
		[
			'name' => 'vsempf_v',
			'parse' => true,
			'description' => 'Empfohlene VS pro qm Wohnfläche'
		],
		[
			'name' => 'glas_v',
			'parse' => true,
			'description' => 'Glasversicherung'
		],
		[
			'name' => 'ele_v',
			'parse' => true,
			'description' => 'Überschwemmung'
		],
		[
			'name' => 'rad_v',
			'parse' => true,
			'description' => 'Fahrraddiebstahl'
		],
		[
			'name' => 'grob_v',
			'parse' => true,
			'description' => 'Grobe Fahrlässigkeit'
		],
		[
			'name' => 'tier_v',
			'parse' => true,
			'description' => 'Haustiere'
		],
		[
			'name' => 'arb_v',
			'parse' => true,
			'description' => 'Sachen im häuslichen Arbeitszimmer'
		],
		[
			'name' => '	hot_v',
			'parse' => true,
			'description' => 'Hotelkosten im Schadenfall'
		],
		[
			'name' => 'reise_v',
			'parse' => true,
			'description' => 'Rückreisekosten aus dem Urlaub'
		],
		[
			'name' => 'dkfz_v',
			'parse' => true,
			'description' => 'Diebstahl aus verschlossenen KFZ'
		],
		[
			'name' => 'dataret_v',
			'parse' => true,
			'description' => 'Datenrettungskosten'
		],
		[
			'name' => 'ues_v',
			'parse' => true,
			'description' => 'Überspannungsschäden durch Blitz'
		],
		[
			'name' => 'seng_v',
			'parse' => true,
			'description' => 'Sengschäden'
		],
		[
			'name' => 'waver_v',
			'parse' => true,
			'description' => 'Wasserverlust infolge Rohrbruch'
		],
		[
			'name' => 'ebike_v',
			'parse' => true,
			'description' => 'E-Bikes oder Pedelecs'
		],
		[
			'name' => 'geli_v',
			'parse' => true,
			'description' => 'Gemietete, geliehene Sachen'
		],
		[
			'name' => 'dgar_v',
			'parse' => true,
			'description' => 'theftOfGardenFurniture'
		],
		[
			'name' => 'trick_v',
			'parse' => true,
			'description' => 'Trickdiebstahl'
		],
		[
			'name' => 'leiupd_v',
			'parse' => true,
			'description' => 'Künftige Leistungsverbesserungen gelten automatisch'
		]
	];
}