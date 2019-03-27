<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Structure;

class AliApiStructure extends AbstractApiStructure
{
	protected $structure = [
		[
			'name' => 'vsh_v',
			'parse' => true,
			'description' => 'Personen- und Sachschäden Hund'
		],
		[
			'name' => 'vsvh_v',
			'parse' => true,
			'description' => 'Vermögensschäden Hund'
		],
		[
			'name' => 'sbh_v',
			'parse' => true,
			'description' => 'Selbstbeteiligung im Schadenfall (Personen/ Sach/ Vermögensschäden) Hund'
		],
        [
            'name' => 'vsp_v',
            'parse' => true,
            'description' => 'Personen- und Sachschäden Pferd'
        ],
        [
            'name' => 'vsvp_v',
            'parse' => true,
            'description' => 'Vermögensschäden Pferd'
        ],
        [
            'name' => 'sbp_v',
            'parse' => true,
            'description' => 'Selbstbeteiligung im Schadenfall (Personen/ Sach/ Vermögensschäden) Pferd'
        ],
		[
			'name' => 'sportp_v',
			'parse' => true,
			'description' => 'Pferderennen'
		],
		[
			'name' => 'turnierp_v',
			'parse' => true,
			'description' => 'Schauvorführungen (Hund)'
		],
		[
			'name' => 'deckh_v',
			'parse' => true,
			'description' => 'Ungewollter Deckakt (Hund)'
		],
		[
			'name' => 'deckp_v',
			'parse' => true,
			'description' => 'Ungewollter Deckakt (Pferd)'
		],
		[
			'name' => 'flurp_v',
			'parse' => true,
			'description' => 'Flurschäden'
		],
		[
			'name' => 'welph_v',
			'parse' => true,
			'description' => 'Welpen'
		],
		[
			'name' => 'jungtp_v',
			'parse' => true,
			'description' => 'Jungtiere des Pferdes'
		],
		[
			'name' => 'figurh_v',
			'parse' => true,
			'description' => 'Figuranten'
		],
		[
			'name' => 'turnierh_v',
			'parse' => true,
			'description' => 'Turniere (Hund)'
		],
		[
			'name' => 'turnierp_v',
			'parse' => true,
			'description' => 'Turniere (Pferd)'
		],
        [
            'name' => 'ausfallh_v',
            'parse' => true,
            'description' => 'Ausfalldeckung (Hund)'
        ],
        [
            'name' => 'ausfallp_v',
            'parse' => true,
            'description' => 'Ausfalldeckung (Pferd)'
        ],
        [
            'name' => 'auslh_v',
            'parse' => true,
            'description' => 'Auslandsaufenthalt (Hund)'
        ],
        [
            'name' => 'auslp_v',
            'parse' => true,
            'description' => 'Auslandsaufenthalt (Pferd)'
        ],
        [
            'name' => 'fremdp_v',
            'parse' => true,
            'description' => 'Ein Fremdreiter macht Forderungen gegen Sie aufgrund eines Schadens geltend.'
        ],
        [
            'name' => 'reitbp_v',
            'parse' => true,
            'description' => 'Eine Reitbeteiligung macht Forderungen gegen Sie aufgrund eines Schadens geltend.'
        ]
	];
}