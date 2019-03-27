<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
        'admin_import_addresses' => [[], ['_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminImportAddressesAction'], [], [['text', '/admin/import/addresses']], [], []],
        'admin_import_dogbreeds' => [[], ['_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminImportMMDogBreedsAction'], [], [['text', '/admin/import/dogbreeds']], [], []],
        'admin_import_jobs' => [[], ['_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminImportMMJobsAction'], [], [['text', '/admin/import/jobs']], [], []],
        'admin_home' => [[], ['_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminHomeAction'], [], [['text', '/admin/home']], [], []],
        'admin_dashboard' => [[], ['_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminDashboardAction'], [], [['text', '/admin']], [], []],
        'api_address_input_load' => [['input'], ['_controller' => 'Main\\AdminBundle\\Controller\\Api\\AddressImportController::loadApiJobInputAction'], [], [['text', '/load'], ['variable', '/', '[^/]++', 'input'], ['text', '/api/address']], [], []],
        'api_dogbreeds_input_load' => [['input'], ['input' => 'all', '_controller' => 'Main\\AdminBundle\\Controller\\Api\\AnimalDogBreedImportController::loadApiJobInputAction'], [], [['text', '/load'], ['variable', '/', '[^/]++', 'input'], ['text', '/api/dogbreeds']], [], []],
        'api_job_input_load' => [['input'], ['input' => 'all', '_controller' => 'Main\\AdminBundle\\Controller\\Api\\JobGroupImportController::loadApiJobInputAction'], [], [['text', '/load'], ['variable', '/', '[^/]++', 'input'], ['text', '/api/job']], [], []],
        'api_survey_questions_load' => [[], ['_controller' => 'Main\\AdminBundle\\Controller\\Api\\QuestionLoadController::loadQuestionsAction'], [], [['text', '/api/survey/questions/load']], [], []],
        'admin_tariff_new_finish' => [['type'], ['id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffIdNewFinishAction'], ['id' => '\\d+'], [['text', '/finish'], ['variable', '/', '[^/]++', 'type'], ['text', '/admin/tariff11/new']], [], []],
        'admin_tariff_new' => [['type'], ['id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffNewAction'], ['id' => '\\d+'], [['variable', '/', '[^/]++', 'type'], ['text', '/admin/tariff11/new']], [], []],
        'admin_tariff_id_edit_finish' => [['id'], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffIdEditFinishAction'], ['id' => '\\d+'], [['text', '/edit/finish'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/tariff11']], [], []],
        'admin_tariff_edit' => [['id'], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffEditAction'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/tariff11']], [], []],
        'admin_tariff_id' => [['id'], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffAction'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/admin/tariff11']], [], []],
        'admin_tariffs_type' => [['type'], ['type' => 'pli', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffsAction'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/admin/tariffs11']], [], []],
        'admin_tariffs11' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffsAction'], [], [['text', '/admin/tariffs11']], [], []],
        'admin_company_new' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompanyNewAction'], [], [['text', '/admin/company/new']], [], []],
        'admin_company_edit' => [['id'], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompanyEditAction'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/company']], [], []],
        'admin_company' => [['id'], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompanyAction'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/admin/company']], [], []],
        'admin_companies' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompaniesAction'], [], [['text', '/admin/companies']], [], []],
        'survey_edit_helptexts_save' => [['type'], ['_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyElementsSaveAction'], [], [['text', '/edit/helptexts/save'], ['variable', '/', '[^/]++', 'type'], ['text', '/survey']], [], []],
        'survey_edit_helptexts' => [['type'], ['_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyHelptextsAction'], [], [['text', '/edit/helptexts'], ['variable', '/', '[^/]++', 'type'], ['text', '/survey']], [], []],
        'survey_edit_overview' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::chooseSurveyAction'], [], [['text', '/survey/edit/overview']], [], []],
        'admin_user_id_type_result' => [['id', 'type'], ['id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminTariffDecisionResultAction'], ['id' => '\\d+'], [['text', '/result'], ['variable', '/', '[^/]++', 'type'], ['text', '/type'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/user']], [], []],
        'admin_user_id_type_finish' => [['id', 'type'], ['id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminUserIdTypeFinishAction'], ['id' => '\\d+'], [['text', '/finish'], ['variable', '/', '[^/]++', 'type'], ['text', '/type'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/user']], [], []],
        'admin_tariffs_decide_id_c' => [['id'], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminTariffDecisionCalculatorJsonAction'], ['id' => '\\d+'], [['text', '/c'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/tariff/decide']], [], []],
        'admin_user_id_type_survey' => [['id', 'type'], ['id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminUserSurveyTypeDecision'], ['id' => '\\d+'], [['variable', '/', '[^/]++', 'type'], ['text', '/type'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/user']], [], []],
        'admin_user_id_decide_type' => [['id'], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminTariffDecisionAction'], ['id' => '\\d+'], [['text', '/decide'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/user']], [], []],
        'damage_builder' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyDamageBuilderAction'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/builder/survey/damage']], [], []],
        'survey_tariff_builder' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyTariffBuilderAction'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/builder/survey']], [], []],
        'manager_survey_type_result' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Api\\TariffDeliveryApiController::managerSurveyTypeResultAction'], [], [['text', '/result'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/survey']], [], []],
        'contract_new_mail' => [['cId'], ['cId' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::contractNewMailAction'], [], [['text', '/mail'], ['variable', '/', '[^/]++', 'cId'], ['text', '/manager/contract']], [], []],
        'contract_new' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::contractNewAction'], [], [['text', '/manager/contract/new']], [], []],
        'contract_edit' => [['cid'], ['id' => 0, 'aId' => 0, 'cid' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::contractEditAction'], ['id' => '\\d+', 'aid' => '\\d+'], [['text', '/edit'], ['variable', '/', '[^/]++', 'cid'], ['text', '/manager/contract']], [], []],
        'contract_read' => [['id'], ['cId' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::managerContractReadAction'], ['id' => '\\d+', 'cId' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/manager/contract']], [], []],
        'contracts' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::managerContractsAction'], [], [['text', '/manager/contracts']], [], []],
        'damage_type_report_save.en' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageReportDoUploadAction', '_locale' => 'en', '_canonical_route' => 'damage_type_report_save'], [], [['text', '/report/save'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/damage']], [], []],
        'damage_type_report_save.de' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageReportDoUploadAction', '_locale' => 'de', '_canonical_route' => 'damage_type_report_save'], [], [['text', '/report/speichern'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/damage']], [], []],
        'damage_type_report' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageDecisionSurveyAction'], [], [['text', '/report'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/damage']], [], []],
        'damage_type_decision' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageDecisionAction'], [], [['text', '/manager/damage/decision']], [], []],
        'manager_damage_report_send' => [['id'], ['id' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageResultPdfSendAction'], [], [['text', '/send'], ['variable', '/', '[^/]++', 'id'], ['text', '/manager/damage']], [], []],
        'manager_damage_report_download' => [['id'], ['id' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageResultPdfDownloadAction'], [], [['text', '/download'], ['variable', '/', '[^/]++', 'id'], ['text', '/manager/damage']], [], []],
        'show_damages' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damagesAction'], [], [['text', '/manager/damages']], [], []],
        'test_damage_type_report_save.en' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageReportDoUploadAction', '_locale' => 'en', '_canonical_route' => 'test_damage_type_report_save'], [], [['text', '/report/save'], ['variable', '/', '[^/]++', 'type'], ['text', '/test/manager/damage']], [], []],
        'test_damage_type_report_save.de' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageReportDoUploadAction', '_locale' => 'de', '_canonical_route' => 'test_damage_type_report_save'], [], [['text', '/report/speichern'], ['variable', '/', '[^/]++', 'type'], ['text', '/test/manager/damage']], [], []],
        'test_damage_type_report' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageDecisionSurveyAction'], [], [['text', '/report'], ['variable', '/', '[^/]++', 'type'], ['text', '/test/manager/damage']], [], []],
        'test_damage_type_decision' => [[], ['_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageDecisionAction'], [], [['text', '/test/manager/damage/decision']], [], []],
        'test_show_damages' => [[], ['id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damagesAction'], ['id' => '\\d+'], [['text', '/test/manager/damages']], [], []],
        'test_damage_builder' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestSurveyController::adminSurveyDamageBuilderAction'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/test/builder/survey/damage']], [], []],
        'test_survey_tariff_builder' => [['type'], ['type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestSurveyController::adminSurveyTariffBuilderAction'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/test/builder/survey/tariff']], [], []],
        'get_pet_activities' => [['id'], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ActivityController::getPetActivitiesAction'], ['id' => '\\d+'], [['text', '/activities'], ['variable', '/', '\\d+', 'id'], ['text', '/pet']], [], []],
        'benefitplus_partner_save' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\BenefitController::documentUploadSaveAction'], [], [['text', '/benefitplus/partner/save']], [], []],
        'benefitplus_partner' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\BenefitController::benefitPartnerAction'], [], [['text', '/benefitplus/partner']], [], []],
        'benefitplus_greetings' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\BenefitController::benefitGreetingsAction'], [], [['text', '/benefitplus/greetings']], [], []],
        'manager_edit' => [['id'], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::editManagerAction'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/manager']], [], []],
        'manager_show_result' => [['type', 'tariffId'], ['type' => '', 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::managerTypeShowApplicationAction'], [], [['variable', '/', '[^/]++', 'tariffId'], ['text', '/result'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager']], [], []],
        'manager_choose_payment_save' => [['type', 'tariffId', 'payment'], ['id' => 0, 'type' => '', 'payment' => null, 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::savePaymentAction'], ['id' => '\\d+'], [['text', '/save'], ['variable', '/', '[^/]++', 'payment'], ['text', '/payment'], ['variable', '/', '[^/]++', 'tariffId'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/choose']], [], []],
        'manager_choose_payment' => [['type', 'tariffId'], ['id' => 0, 'type' => '', 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::choosePaymentAction'], ['id' => '\\d+'], [['text', '/payment'], ['variable', '/', '[^/]++', 'tariffId'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/choose']], [], []],
        'manager_survey_type_save' => [['type'], ['type' => '', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::surveyTypeSaveAction'], [], [['text', '/save'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/survey']], [], []],
        'manager_survey_type' => [['type'], ['type' => '', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::surveyTypeDoAction'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/manager/survey']], [], []],
        'manager_choose_survey' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::chooseSurveyAction'], [], [['text', '/manager/choose/survey']], [], []],
        'manager_personal_data' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::personalDataAction'], [], [['text', '/manager/personal']], [], []],
        'manager_profile_help' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::profileHelpAction'], [], [['text', '/manager/profile/help']], [], []],
        'manager_profile_check' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::profileCheckAction'], [], [['text', '/manager/profile/check']], [], []],
        'manager_profile' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::profileAction'], [], [['text', '/manager/profile']], [], []],
        'manager_greetings' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::greetingsAction'], [], [['text', '/manager/greetings']], [], []],
        'mandate_sign_save' => [['id'], ['id' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::signMandateSaveAction'], [], [['text', '/sign/save'], ['variable', '/', '[^/]++', 'id'], ['text', '/manager/mandate']], [], []],
        'manager_mandate_sign' => [['type', 'id'], ['id' => null, 'type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::signMandateAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/contract'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/mandate-sign']], [], []],
        'manager_sign_mandate_save' => [['type', 'tariffId'], ['type' => null, 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateSaveAction'], [], [['variable', '/', '[^/]++', 'tariffId'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/mandate/save']], [], []],
        'manager_contract_sign_mandate_save' => [['type'], ['type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateSaveAction'], [], [['text', '/sign/mandate/save'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/contract']], [], []],
        'manager_sign_mandate' => [['type', 'tariffId'], ['type' => null, 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateAction'], [], [['variable', '/', '[^/]++', 'tariffId'], ['variable', '/', '[^/]++', 'type'], ['text', '/manager/sign/mandate']], [], []],
        'manager_contract_sign_mandate' => [['id', 'type'], ['id' => null, 'type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateAction'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/sign/mandate'], ['variable', '/', '[^/]++', 'id'], ['text', '/manager/contract']], [], []],
        'new_login_mail' => [['id'], ['id' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginNewMailAction'], [], [['text', '/mail'], ['variable', '/', '[^/]++', 'id'], ['text', '/login']], [], []],
        'login_check' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginCheckAction'], [], [['text', '/login_check']], [], []],
        'security_forgot_password' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::forgotPasswordAction'], [], [['text', '/forgot']], [], []],
        'verification_code' => [['code'], ['code' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginVerificationAction'], [], [['variable', '/', '[^/]++', 'code'], ['text', '/verification']], [], []],
        'security_login_waiting' => [['id'], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginWaitingAction'], [], [['text', '/waiting'], ['variable', '/', '[^/]++', 'id'], ['text', '/login']], [], []],
        'security_login' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginAction'], [], [['text', '/login']], [], []],
        'security_login_verification' => [['code'], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginAction'], [], [['variable', '/', '[^/]++', 'code'], ['text', '/verification']], [], []],
        'security_relogin' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::relogoutAction'], [], [['text', '/relogin']], [], []],
        'security_logout' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::logoutAction'], [], [['text', '/logout']], [], []],
        'manager_address_new' => [[], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::managerAddressNewAction'], ['id' => '\\d+'], [['text', '/address/new']], [], []],
        'manager_address_edit' => [['id'], ['id' => 0, 'aId' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::managerAddressEditAction'], ['id' => '\\d+', 'aid' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/address']], [], []],
        'admin_address_delete' => [['id'], ['id' => 0, 'aId' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::addressDeleteAction'], ['id' => '\\d+', 'aid' => '\\d+'], [['text', '/delete'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/address']], [], []],
        'admin_address_new' => [['type', 'sourceId'], ['id' => 0, 'type' => null, 'sourceId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::addressNewAction'], ['id' => '\\d+'], [['text', '/new'], ['variable', '/', '[^/]++', 'sourceId'], ['variable', '/', '[^/]++', 'type'], ['text', '/admin/address']], [], []],
        'admin_address_edit' => [['id', 'type'], ['id' => 0, 'aId' => 0, 'type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::addressEditAction'], ['id' => '\\d+', 'aid' => '\\d+'], [['text', '/edit'], ['variable', '/', '[^/]++', 'type'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/address']], [], []],
        'admin_manager_new' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserNewAction'], [], [['text', '/admin/manager/new']], [], []],
        'admin_manager_edit' => [['id'], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserEditAction'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/manager']], [], []],
        'admin_manager_decide_type' => [['id'], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminManagerDecideTypeAction'], ['id' => '\\d+'], [['text', '/decide'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/manager']], [], []],
        'admin_manager_activities' => [['id'], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserActivitiesAction'], ['id' => '\\d+'], [['text', '/activities'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/manager']], [], []],
        'admin_manager' => [['id'], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserAction'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/admin/manager']], [], []],
        'admin_managers' => [[], ['_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUsersAction'], [], [['text', '/admin/managers']], [], []],
        'manager_bank_new' => [[], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::bankAccountNewAction'], ['id' => '\\d+'], [['text', '/manager/bank/new']], [], []],
        'manager_bank_edit' => [['id'], ['id' => 0, 'aId' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::bankAccountEditAction'], ['id' => '\\d+', 'bid' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/manager/bank']], [], []],
        'admin_user_id_bank_new' => [['id'], ['id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::adminBankNewAction'], ['id' => '\\d+'], [['text', '/bank/new'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/user']], [], []],
        'admin_user_id_bank_bid_edit' => [['id', 'bid'], ['id' => 0, 'aId' => 0, 'bid' => null, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::adminBankEditAction'], ['id' => '\\d+', 'bid' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'bid'], ['text', '/bank'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/user']], [], []],
        'document_upload_save' => [[], ['_controller' => 'AppBundle\\Controller\\DocumentController::documentUploadSaveAction'], [], [['text', '/manager/document/upload/save']], [], []],
        'manager_document_upload' => [[], ['_controller' => 'AppBundle\\Controller\\DocumentController::documentUploadAction'], [], [['text', '/manager/document/upload']], [], []],
        'document_send' => [['id'], ['id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::damageResultPdfSendAction'], [], [['text', '/send'], ['variable', '/', '[^/]++', 'id'], ['text', '/document']], [], []],
        'document_download' => [['id'], ['id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::damageResultPdfDownloadAction'], [], [['text', '/download'], ['variable', '/', '[^/]++', 'id'], ['text', '/document']], [], []],
        'manager_document_download' => [['pathId', 'documentName'], ['pathId' => null, 'documentName' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::managerDocumentDownloadAction'], [], [['variable', '/', '[^/]++', 'documentName'], ['text', '/document/download'], ['variable', '/', '[^/]++', 'pathId'], ['text', '/manager']], [], []],
        'manager_type_damage_report_download' => [['id', 'type'], ['id' => null, 'type' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::damageResultPdfAction'], [], [['text', '/download'], ['variable', '/', '[^/]++', 'type'], ['text', '/damage/type'], ['variable', '/', '[^/]++', 'id'], ['text', '/manager']], [], []],
        'admin_decision_result_pdf_mandate' => [['id'], ['id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::pdfResultMandateAction'], [], [['text', '/result/pdf/mandate'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/decision']], [], []],
        'admin_decision_result_pdf_a' => [['id'], ['id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::pdfResultPdfAAction'], [], [['text', '/result/pdf/a'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/decision']], [], []],
        'üage_not_found' => [[], ['_controller' => 'AppBundle\\Controller\\ExceptionController::pageNotFoundAction'], [], [['text', '/pageNotFounD']], [], []],
        'faq_new_save' => [[], ['_controller' => 'AppBundle\\Controller\\HelpController::faqSaveNewAction'], [], [['text', '/faq/new/save']], [], []],
        'faq_edit_save' => [['id'], ['_controller' => 'AppBundle\\Controller\\HelpController::faqSaveEditAction'], [], [['text', '/edit/save'], ['variable', '/', '[^/]++', 'id'], ['text', '/faq']], [], []],
        'faq_edit' => [[], ['_controller' => 'AppBundle\\Controller\\HelpController::faqHelpAction'], [], [['text', '/faq/edit']], [], []],
        'faqs_show' => [[], ['_controller' => 'AppBundle\\Controller\\HelpController::faqsShowAction'], [], [['text', '/faqs']], [], []],
        'page_iframe' => [[], ['_controller' => 'AppBundle\\Controller\\MainController::iframeAction'], [], [['text', '/iframe']], [], []],
        'homepage' => [[], ['_controller' => 'AppBundle\\Controller\\MainController::homepageAction'], [], [['text', '/']], [], []],
        'page_ombudsman' => [[], ['_controller' => 'AppBundle\\Controller\\MainController::pageOmbudsmanAction'], [], [['text', '/ombudsman']], [], []],
        'page_imprint' => [[], ['_controller' => 'AppBundle\\Controller\\MainController::imprintAction'], [], [['text', '/imprint']], [], []],
        'page_privacypolicy' => [[], ['_controller' => 'AppBundle\\Controller\\MainController::privacyPolicyAction'], [], [['text', '/privacypolicy']], [], []],
        'manager_message_read' => [['id'], ['_controller' => 'AppBundle\\Controller\\MessageController::messageAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/manager/message']], [], []],
        'manager_messages' => [[], ['_controller' => 'AppBundle\\Controller\\MessageController::messagesAction'], [], [['text', '/manager/messages']], [], []],
        'news' => [[], ['_controller' => 'AppBundle\\Controller\\NewsController::helpFaqAction'], [], [['text', '/news']], [], []],
        'manager_projects' => [[], ['_controller' => 'AppBundle\\Controller\\ProjectController::projectsAction'], [], [['text', '/manager/projects']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
