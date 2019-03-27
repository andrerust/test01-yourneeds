<?php

namespace Main\InsuranceBundle\Helper\Mapping\Tariff;

class LpiTariffStructure extends AbstractTariffStructure
{
    protected $structure = [
        [
            'name' => 'address',
            'mapName' => 'address',
            'resultText' => 'Ort',
            'visibleInResult' => true,
            'doMap' => false
        ],
        [
            'name' => 'privateSector',
            'mapName' => 'privateSector',
            'resultText' => 'Privater Bereich',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'amount',
            'mapName' => 'amount',
            'resultText' => 'Deckungssumme',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'worldwide',
            'mapName' => 'worldwide',
            'resultText' => 'Weltdeckung Deckungssumme',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'workAndJob',
            'mapName' => 'workAndJob',
            'resultText' => 'Arbeits-Rechtsschutz',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'trafficLawProtection',
            'mapName' => 'trafficLawProtection',
            'resultText' => 'Verkehrs-Rechtsschutz',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'trafficLawProtectionWithFamily',
            'mapName' => 'trafficLawProtectionWithFamily',
            'resultText' => 'Fahrzeuge volljähriger Kinder',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'extendedCriminalLegalProtection',
            'mapName' => 'extendedCriminalLegalProtection',
            'resultText' => 'Straf-Rechtsschutz',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'matrimonialMatters',
            'mapName' => 'matrimonialMatters',
            'resultText' => 'RS in Ehesachen',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'alimonyMatters',
            'mapName' => 'alimonyMatters',
            'resultText' => 'Unterhalts RS',
            'visibleInResult' => true,
            'doMap' => true
        ],
        
        [
            'name' => 'contractProtection',
            'mapName' => 'contractProtection',
            'resultText' => 'Rechtsschutz im Vertrags- und Sachrecht',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'freeInitialTelephoneConsultation',
            'mapName' => 'freeInitialTelephoneConsultation',
            'resultText' => 'Telefonische Anwaltsauskünfte für versicherte Risiken',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'patientCertificate',
            'mapName' => 'patientCertificate',
            'visibleInResult' => true,
            'resultText' => 'Betreuungs-Rechtsschutz, Vorsorgeverfügungen',
            'doMap' => true
        ],
        [
            'name' => 'mediation',
            'mapName' => 'mediation',
            'resultText' => 'Mediationsverfahren Anzahl und Höhe der Sitzungen',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'patentCertificate',
            'mapName' => 'patentCertificate',
            'resultText' => 'Betreuungs-Rechtsschutz, Vorsorgeverfügungen',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'patentCertificate',
            'mapName' => 'patentCertificate',
            'resultText' => 'Betreuungs-Rechtsschutz, Vorsorgeverfügungen',
            'visibleInResult' => true,
            'doMap' => true
        ],
        [
            'name' => 'rentedFlatsSelf',
            'mapName' => 'rentedFlatsSelf',
            'resultText' => 'Streitigkeiten Ihrer selbstgenutzten Wohneinheit egal ob gemietet oder Eigentum sind hierrüber versichert.',
            'visibleInResult' => true,
            'doMap' => true
        ]
    ];
}