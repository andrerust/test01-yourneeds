<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Structure;

class AbstractApiStructure
{
	protected $structure = [];
	protected $abstractStructure = [
		[
			'name' => 'ges',
			'parse' => true,
			'description' => 'Name der Gesellschaft'
		],
		[
			'name' => 'tar',
			'parse' => true,
			'description' => 'Name des Tarifes'
		],
		[
			'name' => 'tarifnr',
			'parse' => true,
			'description' => 'letzte ID des Tarifes, nummerischer Wert'
		],
		[
			'name' => 'tarifnrtemp',
			'parse' => true,
			'description' => 'eindeutige ID des Tarifes, nummerischer Wert, tmp'
		],
		[
			'name' => 'ges_kurz',
			'parse' => true,
			'description' => 'Kurzname Gesellschaft'
		],
		[
			'name' => 'laufzeit',
			'parse' => true,
			'description' => 'Laufzeit des Vertrages'
		],
		[
			'name' => 'beitrag',
			'parse' => true,
			'description' => 'EUR mit Komma'
		],
		[
			'name' => 'zw_erlaubt',
			'parse' => true,
			'description' => 'Laufzeit des Vertrages'
		],
		[
			'name' => 'zw_aufschlag',
			'parse' => true,
			'description' => 'EUR mit Komma'
		],
		[
			'name' => 'tar_punkte',
			'parse' => true,
			'description' => 'Bewertung Tarif, nummerischer Wert'
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
			'description' => 'Knochenbruch als Sofort Einmalleistung'
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

	public function get()
	{
		return array_merge($this->abstractStructure, $this->structure);
	}
}