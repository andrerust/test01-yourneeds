<?php
namespace Main\InsuranceBundle\Helper\Damage;

use Psr\Log\LoggerInterface;

class AciDamageReportHelper extends AbstractDamageReportHelper
{
    protected $mandatoryParameters = [
        'dateOfDamage' => '00.00.0000',
        'damageLocation' => 'nicht angegeben',
        'kindOfAccident' => 'freetime',
        'hasPoliceRegistration' => 'no',
        'policeRegistrationNumber' => 'nicht angegeben',
        'personOfCause' => 'nicht angegeben',
        'personOfCauseBirthdate' => 'nicht angegeben',
        'personOfCauseStreet' => 'nicht angegeben',
        'personOfCauseZip' => 'nicht angegeben',
        'personOfCauseCity' => 'nicht angegeben',
        'hasMedicalTreatmentByDoctor' => 'nicht angegeben',
        'medicalTreatmentByDoctorDateTime' => 'nicht angegeben',
        'medicalTreatmentByDoctorAddress' => 'nicht angegeben',
        'hasMedicalTreatmentByHospital' => 'nicht angegeben',
        'medicalTreatmentByHospitalDateFrom' => 'nicht angegeben',
        'medicalTreatmentByHospitalDateUntil' => 'nicht angegeben',
        'medicalTreatmentByHospitalAddress' => 'nicht angegeben',
        'praeDisturbanceOfConsciousness' => 'no',
        'praeDrugs' => 'no',
        'praeDrugsBloodSample' => 'no',
        'praeInvalidity' => 'no',
        'praeDamagedBodyParts' => 'nicht angegeben',
        'damageContactNumber' => 'nicht angegeben',
        'damageDescription' => 'nicht angegeben'
    ];
}