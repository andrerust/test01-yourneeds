<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Structure;

class LpiApiStructure extends AbstractApiStructure
{
	protected $structure = [
		[
			'name' => 'sb_v',
			'parse' => true,
			'description' => 'Selbstbeteiligung'
		],
		[
			'name' => 'srpriv_v',
			'parse' => true,
			'description' => 'Privater Bereich'
		],
		[
			'name' => 'vs_v',
			'parse' => true,
			'description' => 'Versicherungssumme Europaweit und Mittelmeeranliegerstaaten'
		],
		[
			'name' => 'ausland_v',
			'parse' => true,
			'description' => 'Beabsichtigen Sie längerfristige oder berufliche Aufenthalte im außereuropäischen Ausland?'
		],
		[
			'name' => 'vswelt_v',
			'parse' => true,
			'description' => 'Weltdeckung Deckungssumme'
		],
		[
			'name' => 'pinet_v',
			'parse' => true,
			'description' => 'Internet RS für private Nutzung'
		],
		[
			'name' => 'barb_v',
			'parse' => true,
			'description' => 'Arbeits-Rechtsschutz'
		],
		[
			'name' => 'vkfz_v',
			'parse' => true,
			'description' => 'Verkehrs-Rechtsschutz'
		],
		[
			'name' => 'vkfzvollj_v',
			'parse' => true,
			'description' => 'Fahrzeuge volljähriger Kinder'
		],
		[
			'name' => 'mselb_v',
			'parse' => true,
			'description' => 'RS als Eigentümer, Mieter oder Pächter einer selbstbewohnten Wohnung, einer Eigentumswohnung oder eines Einfamilienhauses'
		],
		[
			'name' => 'pstraf_v',
			'parse' => true,
			'description' => 'Straf-Rechtsschutz'
		],
		[
			'name' => 'ehe_v',
			'parse' => true,
			'description' => 'RS in Ehesachen'
		],
		[
			'name' => 'unterh_v',
			'parse' => true,
			'description' => 'Unterhalts RS'
		],
		[
			'name' => 'pvertrag_v',
			'parse' => true,
			'description' => 'Rechtsschutz im Vertrags- und Sachrecht'
		],

		[
			'name' => 'hotl_v',
			'parse' => true,
			'description' => 'Telefonische Anwaltsauskünfte für versicherte Risiken'
		],
		[
			'name' => 'pbetreu_v',
			'parse' => true,
			'description' => 'Betreuungs-Rechtsschutz, Vorsorgeverfügungen'
		],
		[
			'name' => 'medi_v',
			'parse' => true,
			'description' => 'Mediationsverfahren Anzahl und Höhe der Sitzungen'
		],
        [
            'name' => 'mselb_v',
            'parse' => true,
            'description' => 'Streitigkeiten Ihrer selbstgenutzten Wohneinheit egal ob gemietet oder Eigentum sind hierrüber versichert.'
        ]
	];
}