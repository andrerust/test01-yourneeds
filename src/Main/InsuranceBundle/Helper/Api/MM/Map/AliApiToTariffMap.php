<?php

namespace Main\InsuranceBundle\Helper\Api\MM\Map;

class AliApiToTariffMap extends AbstractApiToTariffMap
{
    protected $map = [
        [
            'api' => 'vsh_v',
            'tariff' => 'amountCoveredDog',
            'parse' => true
        ],
        [
            'api' => 'vsvh_v',
            'tariff' => 'amountCoveredFinancialDog',
            'parse' => true
        ],
        [
            'api' => 'sbh_v',
            'tariff' => 'retentionDog',
            'parse' => true
        ],
        [
            'api' => 'vsp_v',
            'tariff' => 'amountCoveredHorse',
            'parse' => true
        ],
        [
            'api' => 'vsvp_v',
            'tariff' => 'amountCoveredFinancialHorse',
            'parse' => true
        ],
        [
            'api' => 'sbp_v',
            'tariff' => 'retentionHorse',
            'parse' => true
        ],
        [
            'api' => 'sportp_v',
            'tariff' => 'sportp_v',
            'parse' => true
        ],
        [
            'api' => 'turnierp_v',
            'tariff' => 'turnierp_v',
            'parse' => true
        ],
        [
            'api' => 'deckh_v',
            'tariff' => 'deckh_v',
            'parse' => true
        ],
        [
            'api' => 'deckp_v',
            'tariff' => 'deckp_v',
            'parse' => true
        ],
        [
            'api' => 'flurp_v',
            'tariff' => 'flurp_v',
            'parse' => true
        ],
        [
            'api' => 'welph_v',
            'tariff' => 'puppiesProtection',
            'parse' => true
        ],
        [
            'api' => 'jungtp_v',
            'tariff' => 'jungtp_v',
            'parse' => true
        ],
        [
            'api' => 'figurh_v',
            'tariff' => 'figurh_v',
            'parse' => true
        ],
        [
            'api' => 'turnierh_v',
            'tariff' => 'turnierh_v',
            'parse' => true
        ],
        [
            'api' => 'turnierp_v',
            'tariff' => 'turnierp_v',
            'parse' => true
        ],
        [
            'api' => 'ausfallh_v',
            'tariff' => 'ausfallh_v',
            'parse' => true
        ],
        [
            'api' => 'ausfallp_v',
            'tariff' => 'ausfallp_v',
            'parse' => true
        ],
        [
            'api' => 'auslh_v',
            'tariff' => 'auslh_v',
            'parse' => true
        ],
        [
            'api' => 'ausfallp_v',
            'tariff' => 'ausfallp_v',
            'parse' => true
        ],
        [
            'api' => 'fremdp_v',
            'tariff' => 'fremdp_v',
            'parse' => true
        ],
        [
            'api' => 'reitbp_v',
            'tariff' => 'reitbp_v',
            'parse' => true
        ]
    ];
    
}
