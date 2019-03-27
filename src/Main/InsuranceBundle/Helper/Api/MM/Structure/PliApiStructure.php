<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Structure;

class PliApiStructure extends AbstractApiStructure
{
	protected $structure = [
		[
			'name' => 'vs_v',
			'parse' => true,
			'description' => 'Mindest-Versicherungssumme Personen/Sachschaeden'
		],
		[
			'name' => 'vsv_v',
			'parse' => true,
			'description' => 'Mindest-Versicherungssumme fuer Vermoegensschaeden'
		],
		[
			'name' => 'vsm_v',
			'parse' => true,
			'description' => 'Mietsachschäden'
		],
		[
			'name' => 'sb',
			'parse' => true,
			'description' => 'Selbstbeteiligung im Schadenfall'
		],
		[
			'name' => 'gargdv_v',
			'parse' => true,
			'description' => 'Leistungsgarantie gegenüber Musterbedingungen des GDV'
		],
		[
			'name' => 'arbfrei_v',
			'parse' => true,
			'description' => 'Prämienbefreiung bei Arbeitslosigkeit'
		],
		[
			'name' => 'lebensp_v',
			'parse' => true,
			'description' => 'Ehegatte oder Lebenspartner (wenn im Haushalt lebend)'
		],
		[
			'name' => 'gef_v',
			'parse' => true,
			'description' => 'Gefälligkeitsschäden'
		],
		[
			'name' => 'fach_v',
			'parse' => true,
			'description' => 'Fachpraktischer Unterricht (Laborarbeiten)'
		],
		[
			'name' => 'delikt_v',
			'parse' => true,
			'description' => 'Deliktunfähige Kinder'
		],
		[
			'name' => 'ehr_v',
			'parse' => true,
			'description' => 'Ehrenamtliche Tätigkeiten'
		],
		[
			'name' => 'ausfall_v',
			'parse' => true,
			'description' => 'Ausfalldeckung (Forderungsausfall)'
		],
		[
			'name' => 'inet_v',
			'parse' => true,
			'description' => 'Schaeden durch elektronischen Datenaustausch/Internetnutzung'
		],
		[
			'name' => 'geli_v',
			'parse' => true,
			'description' => 'Gemietete, geliehene Sachen'
		],
		[
			'name' => 'allm_v',
			'parse' => true,
			'description' => 'Allmählichkeitsschäden'
		],
		[
			'name' => 'hausang_v',
			'parse' => true,
			'description' => 'Hausangestellte im Rahmen ihrer Tätigkeit, (Schäden an Dritten)'
		],
		[
			'name' => 'tagmu_v',
			'parse' => true,
			'description' => 'Tagesmutter, unentgeltliche Tätigkeit'
		],
		[
			'name' => 'bau_v',
			'parse' => true,
			'description' => 'Bauherrenhaftpflicht am Haus oder Grundstück'
		],
		[
			'name' => 'unbgru_v',
			'parse' => true,
			'description' => 'Unbebaute Grundstücke'
		],
		[
			'name' => 'elt_v',
			'parse' => true,
			'description' => 'Alleinstehendes Elternteil im Haushalt lebend'
		],
		[
			'name' => 'sv_v',
			'parse' => true,
			'description' => 'Schlüsselverlust, fremder privater Schlüssel (Mietwohnung)'
		],
		[
			'name' => 'svd_v',
			'parse' => true,
			'description' => 'Schlüsselverlust von fremden Dienstschlüsseln'
		],
		[
			'name' => 'ew_v',
			'parse' => true,
			'description' => 'Eigentumswohnungen in Deutschland, vermietet'
		],
		[
			'name' => 'efh_v',
			'parse' => true,
			'description' => 'Einfamilienhaus selbstgenutzt, Haus- und Grundbesitzerhaftpflicht'
		],
		[
			'name' => 'sgwe_v',
			'parse' => true,
			'description' => 'Mehrfamilienhaus selbstgenutzt, Haus- und Grundbesitzerhaftpflicht'
		],
		[
			'name' => 'fehau_v',
			'parse' => true,
			'description' => 'Vermietung eines Ferienhauses'
		],
		[
			'name' => 'fewoa_v',
			'parse' => true,
			'description' => 'Wohnung / Ferienwohnung / Ferienhaus im europ. Ausland ohne Vermietung'
		],
		[
			'name' => 'oel_v',
			'parse' => true,
			'description' => 'Heizöltank oberirdisch'
		],
		[
			'name' => 'oelu_v',
			'parse' => true,
			'description' => 'Heizöltank unterirdisch'
		],
		[
			'name' => 'hund_v',
			'parse' => true,
			'description' => 'Hüten fremder Hunde (nicht gewerbsmäßig und keine Kampfhunde)'
		],
		[
			'name' => 'surf_v',
			'parse' => true,
			'description' => 'Eigene Surfbretter'
		],
        [
            'name' => 'leiupd_v',
            'parse' => true,
            'description' => 'Künftige Leistungsverbesserungen gelten automatisch'
        ],
        [
            'name' => 'gargdv_v',
            'parse' => true,
            'description' => 'Leistungsgarantie gegenüber Musterbedingungen des GDV'
        ]
	];
}
