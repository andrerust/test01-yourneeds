<?php

namespace Main\InsuranceBundle\Helper\Mapping\Tariff;

class AliTariffStructure extends AbstractTariffStructure
{
    protected $structure = [
        [
            'name' => 'amountCoveredDog',
            'mapName' => 'amountCoveredDog',
            'resultText' => 'Personen- und Sachschäden Hund',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'amountCoveredFinancialDog',
            'mapName' => 'amountCoveredFinancialDog',
            'resultText' => 'Vermögensschäden Hund',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'retentionDog',
            'mapName' => 'retentionDog',
            'resultText' => 'Selbstbeteiligung Hund',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'amountCoveredHorse',
            'mapName' => 'amountCoveredHorse',
            'resultText' => 'Personen- und Sachschäden Pferd',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'amountCoveredFinancialHorse',
            'mapName' => 'amountCoveredFinancialHorse',
            'resultText' => 'Vermögensschäden Pferd',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'retentionHorse',
            'mapName' => 'retentionHorse',
            'resultText' => 'Selbstbeteiligung Pferd',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'sportp_v',
            'mapName' => 'sportp_v',
            'resultText' => 'Pferderennen',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'turnierp_v',
            'mapName' => 'turnierp_v',
            'resultText' => 'Schauvorführungen (Hund)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'deckh_v',
            'mapName' => 'deckh_v',
            'resultText' => 'Ungewollter Deckakt (Hund)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'deckp_v',
            'mapName' => 'deckp_v',
            'resultText' => 'Ungewollter Deckakt (Pferd)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'flurp_v',
            'mapName' => 'flurp_v',
            'resultText' => 'Flurschäden',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'puppiesProtection',
            'mapName' => 'puppiesProtection',
            'resultText' => 'Welpen',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'jungtp_v',
            'mapName' => 'jungtp_v',
            'resultText' => 'Jungtiere des Pferdes',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        
        [
            'name' => 'figurh_v',
            'mapName' => 'figurh_v',
            'resultText' => 'Figuranten',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'turnierh_v',
            'mapName' => 'turnierh_v',
            'resultText' => 'Turniere (Hund)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'turnierp_v',
            'mapName' => 'turnierp_v',
            'resultText' => 'Turniere (Pferd)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'ausfallh_v',
            'mapName' => 'ausfallh_v',
            'resultText' => 'Ausfalldeckung (Hund)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'ausfallp_v',
            'mapName' => 'ausfallp_v',
            'resultText' => 'Ausfalldeckung (Pferd)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'auslh_v',
            'mapName' => 'auslh_v',
            'resultText' => 'Auslandsaufenthalt (Hund)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'dog'
        ],
        [
            'name' => 'auslp_v',
            'mapName' => 'auslp_v',
            'resultText' => 'Auslandsaufenthalt (Pferd)',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'fremdp_v',
            'mapName' => 'fremdp_v',
            'resultText' => 'Ein Fremdreiter macht Forderungen gegen Sie aufgrund eines Schadens geltend.',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ],
        [
            'name' => 'reitbp_v',
            'mapName' => 'reitbp_v',
            'resultText' => 'Eine Reitbeteiligung macht Forderungen gegen Sie aufgrund eines Schadens geltend.',
            'visibleInResult' => true,
            'doMap' => true,
            'animalType' => 'horse'
        ]
    ];
}