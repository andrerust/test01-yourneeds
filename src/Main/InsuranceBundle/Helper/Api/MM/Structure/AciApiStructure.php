<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Structure;

class AciApiStructure extends AbstractApiStructure
{
	protected $structure = [
        [
            'name' => 'grund',
            'parse' => true,
            'description' => 'Grundsumme'
        ],
		[
			'name' => 'khtg_v',
			'parse' => true,
			'description' => 'Krankenhaustagegeld'
		],
		[
			'name' => 'gtax_v',
			'parse' => true,
			'description' => 'Verbesserte Gliedertaxe'
		],
		[
			'name' => 'knoch_v',
			'parse' => true,
			'description' => 'Knochenbruch'
		],
		[
			'name' => 'rente',
			'parse' => true,
			'description' => 'Unfall-Rente'
		],
		[
			'name' => 'kraft_v',
			'parse' => true,
			'description' => 'Erhöhte Kraftanstrengung'
		],
		[
			'name' => 'gift_v',
			'parse' => true,
			'description' => 'Vergiftung Gase/Dämpfe'
		],
		[
			'name' => 'nahr_v',
			'parse' => true,
			'description' => 'Nachrungsmittelvergiftung'
		],
		[
			'name' => 'stral_v',
			'parse' => true,
			'description' => 'Strahlenschäden'
		],
		[
			'name' => 'tauch_v',
			'parse' => true,
			'description' => 'Tauchtypische Gesundheitsschädigungen'
		],
		[
			'name' => 'zahn_v',
			'parse' => true,
			'description' => 'Zahnersatz infolge Unfall'
		],
		[
			'name' => 'mitw_v',
			'parse' => true,
			'description' => 'Anrechnung der Mitwirkung von Krankheiten/Gebrechen bei Unfällen'
		],
		[
			'name' => 'hahilf_v',
			'parse' => true,
			'description' => 'Haushaltshilfe'
		],
		[
			'name' => 'leiupd_v',
			'parse' => true,
			'description' => 'Leistungsverbesserungen gelten zukünftig automatisch'
		],
		[
			'name' => 'alk_v',
			'parse' => true,
			'description' => 'Alkoholklausel'
		],
		[
			'name' => 'insekt_v',
			'parse' => true,
			'description' => 'Insektenstich'
		],
		[
			'name' => 'arb_v',
			'parse' => true,
			'description' => 'Arbeitslosigkeit'
		]
	];
}