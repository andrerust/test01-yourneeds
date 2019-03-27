<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Structure;

class RbiApiStructure
{
	private $structure = [
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
			'name' => 'SB',
			'parse' => true,
			'description' => 'Selbstbeteiligung'
		],
		[
			'name' => 'garag_v',
			'parse' => true,
			'description' => 'Garagen außerhalb des Gebäudes'
		],
		[
			'name' => 'nebeng_v',
			'parse' => true,
			'description' => 'Nebengebäude ohne gewerbl. oder landw. Nutzung'
		],
		[
			'name' => 'vgef_v',
			'parse' => true,
			'description' => 'Versicherte Gefahren und Schäden'
		],
		[
			'name' => 'foto_v',
			'parse' => true,
			'description' => 'Photovoltaikanlagen'
		],
		[
			'name' => 'leiupd_v',
			'parse' => true,
			'description' => 'Künftige Leistungsverbesserungen gelten automatisch'
		],
		[
			'name' => 'miet_v',
			'parse' => true,
			'description' => 'Mietausfall für vermietete Räume'
		],
		[
			'name' => 'glas_v',
			'parse' => true,
			'description' => 'Gebäudeverglasung mitversichert'
		],
		[
			'name' => 'allg_v',
			'parse' => true,
			'description' => 'Allgefahrendeckung versichert'
		],
		[
			'name' => 'grob_v',
			'parse' => true,
			'description' => 'Fahrlaessigkeit'
		],
		[
			'name' => 'zui_v',
			'parse' => true,
			'description' => 'Wasserzuleitungs- und Heizungsrohre auf dem Versicherungsgrundstück, die nicht der Versorgung des versicherten Gebäudes dienen.'
		],
		[
			'name' => 'zua_v',
			'parse' => true,
			'description' => 'Wasserzuleitungs- und Heizungsrohre außerhalb des Versicherungsgrundstücks, die der Versorgung des versicherten Gebäudes dienen'
		],
		[
			'name' => 'rohr_v',
			'parse' => true,
			'description' => 'Rohrverstopfungen'
		],
		[
			'name' => 'klima_v',
			'parse' => true,
			'description' => 'Klima-/Wärmepumpen und Solaranlagen durch Rohrbruch'
		],



	];

	public function get()
	{
		return $this->structure;
	}
}