<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'AppBundle\\Form\\Message', 2 => 'AppBundle\\Form\\Project', 3 => 'AppBundle\\Form\\Type', 4 => 'Main\\UserBundle\\Form\\Address\\Admin', 5 => 'Main\\UserBundle\\Form\\Bank\\Admin', 6 => 'Main\\UserBundle\\Form', 7 => 'Main\\UserBundle\\Form\\User\\Admin', 8 => 'Main\\InsuranceBundle\\Form\\Company\\Admin', 9 => 'Main\\InsuranceBundle\\Form\\Contract', 10 => 'Main\\InsuranceBundle\\Form\\Tariff\\Admin', 11 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'AppBundle\\Form\\Message\\EditMessageFormType', 1 => 'AppBundle\\Form\\Project\\EditProjectFormType', 2 => 'AppBundle\\Form\\Type\\TagFormType', 3 => 'Main\\UserBundle\\Form\\Address\\Admin\\EditAddressFormType', 4 => 'Main\\UserBundle\\Form\\Address\\Admin\\NewAddressFormType', 5 => 'Main\\UserBundle\\Form\\Bank\\Admin\\EditBankFormType', 6 => 'Main\\UserBundle\\Form\\Bank\\Admin\\NewBankFormType', 7 => 'Main\\UserBundle\\Form\\LoginForm', 8 => 'Main\\UserBundle\\Form\\NewsletterFormType', 9 => 'Main\\UserBundle\\Form\\RegistrationForm', 10 => 'Main\\UserBundle\\Form\\User\\Admin\\EditUserFormType', 11 => 'Main\\UserBundle\\Form\\User\\Admin\\NewUserFormType', 12 => 'Main\\UserBundle\\Form\\UserRegistrationForm', 13 => 'Main\\InsuranceBundle\\Form\\Company\\Admin\\EditCompanyFormType', 14 => 'Main\\InsuranceBundle\\Form\\Company\\Admin\\NewCompanyFormType', 15 => 'Main\\InsuranceBundle\\Form\\Contract\\EditContractFormType', 16 => 'Main\\InsuranceBundle\\Form\\Tariff\\Admin\\EditTariffFormType', 17 => 'Main\\InsuranceBundle\\Form\\Tariff\\Admin\\NewTariffFormType', 18 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 19 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 20 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType'], [0 => 'AppBundle\\Form\\TypeExtension\\HelpFormExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 2 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 7 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser']);

$instance->setName('debug:form');

return $instance;
