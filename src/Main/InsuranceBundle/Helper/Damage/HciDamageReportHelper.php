<?php
namespace Main\InsuranceBundle\Helper\Damage;

use Psr\Log\LoggerInterface;

class HciDamageReportHelper extends AbstractDamageReportHelper
{
    protected $mandatoryParameters = [
        'dateOfDamage' => '00.00.0000',
        'damageLocation' => 'nicht angegeben',
        'damageType' => '',
        'caseObject' => 'nicht angegeben',
        'damageValue' => 'nicht angegeben',
        'hasPoliceRegistration' => '',
        'policeRegistrationNumber' => 'nicht angegeben',
        'damageDescription' => 'nicht angegeben',
        'damageContactNumber' => 'nicht angegeben'
    ];

}