<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin/import/addresses' => [[['_route' => 'admin_import_addresses', '_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminImportAddressesAction'], null, null, null, false, false, null]],
            '/admin/import/dogbreeds' => [[['_route' => 'admin_import_dogbreeds', '_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminImportMMDogBreedsAction'], null, null, null, false, false, null]],
            '/admin/import/jobs' => [[['_route' => 'admin_import_jobs', '_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminImportMMJobsAction'], null, null, null, false, false, null]],
            '/admin/home' => [[['_route' => 'admin_home', '_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminHomeAction'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'Main\\AdminBundle\\Controller\\AdminController::adminDashboardAction'], null, null, null, false, false, null]],
            '/api/survey/questions/load' => [[['_route' => 'api_survey_questions_load', '_controller' => 'Main\\AdminBundle\\Controller\\Api\\QuestionLoadController::loadQuestionsAction'], null, ['PUT' => 0], null, false, false, null]],
            '/admin/company/new' => [[['_route' => 'admin_company_new', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompanyNewAction'], null, null, null, false, false, null]],
            '/admin/companies' => [[['_route' => 'admin_companies', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompaniesAction'], null, null, null, false, false, null]],
            '/survey/edit/overview' => [[['_route' => 'survey_edit_overview', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::chooseSurveyAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/contract/new' => [[['_route' => 'contract_new', '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::contractNewAction'], null, null, null, false, false, null]],
            '/manager/contracts' => [[['_route' => 'contracts', '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::managerContractsAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/damage/decision' => [[['_route' => 'damage_type_decision', '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageDecisionAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/damages' => [[['_route' => 'show_damages', '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damagesAction'], null, null, null, false, false, null]],
            '/test/manager/damage/decision' => [[['_route' => 'test_damage_type_decision', '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageDecisionAction'], null, ['GET' => 0], null, false, false, null]],
            '/test/manager/damages' => [[['_route' => 'test_show_damages', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damagesAction'], null, ['GET' => 0], null, false, false, null]],
            '/benefitplus/partner/save' => [[['_route' => 'benefitplus_partner_save', '_controller' => 'Main\\UserBundle\\Controller\\Web\\BenefitController::documentUploadSaveAction'], null, ['PUT' => 0], null, false, false, null]],
            '/benefitplus/partner' => [[['_route' => 'benefitplus_partner', '_controller' => 'Main\\UserBundle\\Controller\\Web\\BenefitController::benefitPartnerAction'], null, ['GET' => 0], null, false, false, null]],
            '/benefitplus/greetings' => [[['_route' => 'benefitplus_greetings', '_controller' => 'Main\\UserBundle\\Controller\\Web\\BenefitController::benefitGreetingsAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/choose/survey' => [[['_route' => 'manager_choose_survey', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::chooseSurveyAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/personal' => [[['_route' => 'manager_personal_data', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::personalDataAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/profile/help' => [[['_route' => 'manager_profile_help', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::profileHelpAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/profile/check' => [[['_route' => 'manager_profile_check', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::profileCheckAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/profile' => [[['_route' => 'manager_profile', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::profileAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/greetings' => [[['_route' => 'manager_greetings', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::greetingsAction'], null, ['GET' => 0], null, false, false, null]],
            '/login_check' => [[['_route' => 'login_check', '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginCheckAction'], null, null, null, false, false, null]],
            '/forgot' => [[['_route' => 'security_forgot_password', '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::forgotPasswordAction'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'security_login', '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginAction'], null, null, null, false, false, null]],
            '/relogin' => [[['_route' => 'security_relogin', '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::relogoutAction'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'security_logout', '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::logoutAction'], null, null, null, false, false, null]],
            '/address/new' => [[['_route' => 'manager_address_new', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::managerAddressNewAction'], null, null, null, false, false, null]],
            '/admin/manager/new' => [[['_route' => 'admin_manager_new', '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserNewAction'], null, null, null, false, false, null]],
            '/admin/managers' => [[['_route' => 'admin_managers', '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUsersAction'], null, ['GET' => 0], null, false, false, null]],
            '/manager/bank/new' => [[['_route' => 'manager_bank_new', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::bankAccountNewAction'], null, null, null, false, false, null]],
            '/manager/document/upload/save' => [[['_route' => 'document_upload_save', '_controller' => 'AppBundle\\Controller\\DocumentController::documentUploadSaveAction'], null, ['PUT' => 0], null, false, false, null]],
            '/manager/document/upload' => [[['_route' => 'manager_document_upload', '_controller' => 'AppBundle\\Controller\\DocumentController::documentUploadAction'], null, ['GET' => 0], null, false, false, null]],
            '/pageNotFounD' => [[['_route' => 'üage_not_found', '_controller' => 'AppBundle\\Controller\\ExceptionController::pageNotFoundAction'], null, null, null, false, false, null]],
            '/faq/new/save' => [[['_route' => 'faq_new_save', '_controller' => 'AppBundle\\Controller\\HelpController::faqSaveNewAction'], null, null, null, false, false, null]],
            '/faq/edit' => [[['_route' => 'faq_edit', '_controller' => 'AppBundle\\Controller\\HelpController::faqHelpAction'], null, ['GET' => 0], null, false, false, null]],
            '/faqs' => [[['_route' => 'faqs_show', '_controller' => 'AppBundle\\Controller\\HelpController::faqsShowAction'], null, ['GET' => 0], null, false, false, null]],
            '/iframe' => [[['_route' => 'page_iframe', '_controller' => 'AppBundle\\Controller\\MainController::iframeAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'homepage', '_controller' => 'AppBundle\\Controller\\MainController::homepageAction'], null, null, null, false, false, null]],
            '/ombudsman' => [[['_route' => 'page_ombudsman', '_controller' => 'AppBundle\\Controller\\MainController::pageOmbudsmanAction'], null, null, null, false, false, null]],
            '/imprint' => [[['_route' => 'page_imprint', '_controller' => 'AppBundle\\Controller\\MainController::imprintAction'], null, null, null, false, false, null]],
            '/privacypolicy' => [[['_route' => 'page_privacypolicy', '_controller' => 'AppBundle\\Controller\\MainController::privacyPolicyAction'], null, null, null, false, false, null]],
            '/manager/messages' => [[['_route' => 'manager_messages', '_controller' => 'AppBundle\\Controller\\MessageController::messagesAction'], null, null, null, false, false, null]],
            '/news' => [[['_route' => 'news', '_controller' => 'AppBundle\\Controller\\NewsController::helpFaqAction'], null, null, null, false, false, null]],
            '/manager/projects' => [[['_route' => 'manager_projects', '_controller' => 'AppBundle\\Controller\\ProjectController::projectsAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/a(?'
                        .'|pi/(?'
                            .'|address/([^/]++)/load(*:74)'
                            .'|dogbreeds/([^/]++)/load(*:104)'
                            .'|job/([^/]++)/load(*:129)'
                        .')'
                        .'|d(?'
                            .'|min/(?'
                                .'|tariff(?'
                                    .'|11(?'
                                        .'|/(?'
                                            .'|new(?'
                                                .'|/([^/]++)/finish(*:189)'
                                                .'|(?:/([^/]++))?(*:211)'
                                            .')'
                                            .'|(\\d+)/edit/finish(*:237)'
                                            .'|(\\d+)/edit(*:255)'
                                        .')'
                                        .'|(?:/(\\d+))?(*:275)'
                                    .')'
                                    .'|s11(?'
                                        .'|(?:/([^/]++))?(*:304)'
                                        .'|(*:312)'
                                    .')'
                                    .'|/decide/(\\d+)/c(*:336)'
                                .')'
                                .'|company(?'
                                    .'|/(\\d+)/edit(*:366)'
                                    .'|(?:/(\\d+))?(*:385)'
                                .')'
                                .'|user/(?'
                                    .'|(\\d+)/type/([^/]++)/result(*:428)'
                                    .'|(\\d+)/type/([^/]++)/finish(*:462)'
                                    .'|(\\d+)/type(?:/([^/]++))?(*:494)'
                                    .'|(\\d+)/decide(*:514)'
                                    .'|(\\d+)/bank/new(*:536)'
                                    .'|(\\d+)/bank/(\\d+)/edit(*:565)'
                                .')'
                                .'|address/(?'
                                    .'|(\\d+)/delete(*:597)'
                                    .'|([^/]++)/([^/]++)/new(*:626)'
                                    .'|(\\d+)/([^/]++)/edit(*:653)'
                                .')'
                                .'|manager(?'
                                    .'|/(?'
                                        .'|(\\d+)/edit(*:686)'
                                        .'|(\\d+)/decide(*:706)'
                                        .'|(\\d+)/activities(*:730)'
                                    .')'
                                    .'|(?:/(\\d+))?(*:750)'
                                .')'
                                .'|decision/([^/]++)/result/pdf/(?'
                                    .'|mandate(*:798)'
                                    .'|a(*:807)'
                                .')'
                            .')'
                            .'|dress/(\\d+)/edit(*:833)'
                        .')'
                    .')'
                    .'|/survey/([^/]++)/edit/helptexts(?'
                        .'|/save(*:882)'
                        .'|(*:890)'
                    .')'
                    .'|/builder/survey(?'
                        .'|/damage(?:/([^/]++))?(*:938)'
                        .'|(?:/([^/]++))?(*:960)'
                    .')'
                    .'|/manager/(?'
                        .'|survey/([^/]++)/result(*:1003)'
                        .'|contract/(?'
                            .'|([^/]++)/(?'
                                .'|mail(*:1040)'
                                .'|edit(*:1053)'
                            .')'
                            .'|(\\d+)(*:1068)'
                        .')'
                        .'|damage/([^/]++)/(?'
                            .'|report(?'
                                .'|/s(?'
                                    .'|ave(*:1114)'
                                    .'|peichern(*:1131)'
                                .')'
                                .'|(*:1141)'
                            .')'
                            .'|send(*:1155)'
                            .'|download(*:1172)'
                        .')'
                        .'|(\\d+)/edit(*:1192)'
                        .'|([^/]++)/result(?:/([^/]++))?(*:1230)'
                        .'|c(?'
                            .'|hoose/([^/]++)/([^/]++)/payment(?'
                                .'|/([^/]++)/save(*:1291)'
                                .'|(*:1300)'
                            .')'
                            .'|ontract/([^/]++)/sign/mandate(?'
                                .'|/save(*:1347)'
                                .'|(?:/([^/]++))?(*:1370)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|urvey(?'
                                .'|/([^/]++)/save(*:1407)'
                                .'|(?:/([^/]++))?(*:1430)'
                            .')'
                            .'|ign/mandate(?:/([^/]++)(?:/([^/]++))?)?(*:1479)'
                        .')'
                        .'|mandate(?'
                            .'|/(?'
                                .'|([^/]++)/sign/save(*:1521)'
                                .'|save(?:/([^/]++)(?:/([^/]++))?)?(*:1562)'
                            .')'
                            .'|\\-sign/([^/]++)/contract(?:/([^/]++))?(*:1610)'
                        .')'
                        .'|bank/(\\d+)/edit(*:1635)'
                        .'|([^/]++)/d(?'
                            .'|ocument/download(?:/([^/]++))?(*:1687)'
                            .'|amage/type/([^/]++)/download(*:1724)'
                        .')'
                        .'|message/([^/]++)(*:1750)'
                    .')'
                    .'|/test/(?'
                        .'|manager/damage/([^/]++)/report(?'
                            .'|/s(?'
                                .'|ave(*:1810)'
                                .'|peichern(*:1827)'
                            .')'
                            .'|(*:1837)'
                        .')'
                        .'|builder/survey/(?'
                            .'|damage(?:/([^/]++))?(*:1885)'
                            .'|tariff(?:/([^/]++))?(*:1914)'
                        .')'
                    .')'
                    .'|/pet/(\\d+)/activities(*:1946)'
                    .'|/login/([^/]++)/(?'
                        .'|mail(*:1978)'
                        .'|waiting(*:1994)'
                    .')'
                    .'|/verification(?'
                        .'|(?:/([^/]++))?(*:2034)'
                        .'|/([^/]++)(*:2052)'
                    .')'
                    .'|/document/([^/]++)/(?'
                        .'|send(*:2088)'
                        .'|download(*:2105)'
                    .')'
                    .'|/faq/([^/]++)/edit/save(*:2138)'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            74 => [[['_route' => 'api_address_input_load', '_controller' => 'Main\\AdminBundle\\Controller\\Api\\AddressImportController::loadApiJobInputAction'], ['input'], ['PUT' => 0], null, false, false, null]],
            104 => [[['_route' => 'api_dogbreeds_input_load', 'input' => 'all', '_controller' => 'Main\\AdminBundle\\Controller\\Api\\AnimalDogBreedImportController::loadApiJobInputAction'], ['input'], ['PUT' => 0], null, false, false, null]],
            129 => [[['_route' => 'api_job_input_load', 'input' => 'all', '_controller' => 'Main\\AdminBundle\\Controller\\Api\\JobGroupImportController::loadApiJobInputAction'], ['input'], ['PUT' => 0], null, false, false, null]],
            189 => [[['_route' => 'admin_tariff_new_finish', 'id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffIdNewFinishAction'], ['type'], ['PUT' => 0], null, false, false, null]],
            211 => [[['_route' => 'admin_tariff_new', 'id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffNewAction'], ['type'], null, null, false, true, null]],
            237 => [[['_route' => 'admin_tariff_id_edit_finish', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffIdEditFinishAction'], ['id'], ['PUT' => 0], null, false, false, null]],
            255 => [[['_route' => 'admin_tariff_edit', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffEditAction'], ['id'], null, null, false, false, null]],
            275 => [[['_route' => 'admin_tariff_id', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffAction'], ['id'], null, null, false, true, null]],
            304 => [[['_route' => 'admin_tariffs_type', 'type' => 'pli', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffsAction'], ['type'], null, null, false, true, null]],
            312 => [[['_route' => 'admin_tariffs11', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController::adminTariffsAction'], [], null, null, false, false, null]],
            336 => [[['_route' => 'admin_tariffs_decide_id_c', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminTariffDecisionCalculatorJsonAction'], ['id'], null, null, false, false, null]],
            366 => [[['_route' => 'admin_company_edit', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompanyEditAction'], ['id'], null, null, false, false, null]],
            385 => [[['_route' => 'admin_company', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\CompanyController::adminCompanyAction'], ['id'], null, null, false, true, null]],
            428 => [[['_route' => 'admin_user_id_type_result', 'id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminTariffDecisionResultAction'], ['id', 'type'], ['GET' => 0], null, false, false, null]],
            462 => [[['_route' => 'admin_user_id_type_finish', 'id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminUserIdTypeFinishAction'], ['id', 'type'], ['PUT' => 0], null, false, false, null]],
            494 => [[['_route' => 'admin_user_id_type_survey', 'id' => 0, 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminUserSurveyTypeDecision'], ['id', 'type'], null, null, false, true, null]],
            514 => [[['_route' => 'admin_user_id_decide_type', 'id' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminTariffDecisionAction'], ['id'], null, null, false, false, null]],
            536 => [[['_route' => 'admin_user_id_bank_new', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::adminBankNewAction'], ['id'], null, null, false, false, null]],
            565 => [[['_route' => 'admin_user_id_bank_bid_edit', 'id' => 0, 'aId' => 0, 'bid' => null, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::adminBankEditAction'], ['id', 'bid'], null, null, false, false, null]],
            597 => [[['_route' => 'admin_address_delete', 'id' => 0, 'aId' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::addressDeleteAction'], ['id'], null, null, false, false, null]],
            626 => [[['_route' => 'admin_address_new', 'id' => 0, 'type' => null, 'sourceId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::addressNewAction'], ['type', 'sourceId'], null, null, false, false, null]],
            653 => [[['_route' => 'admin_address_edit', 'id' => 0, 'aId' => 0, 'type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::addressEditAction'], ['id', 'type'], null, null, false, false, null]],
            686 => [[['_route' => 'admin_manager_edit', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserEditAction'], ['id'], null, null, false, false, null]],
            706 => [[['_route' => 'admin_manager_decide_type', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminManagerDecideTypeAction'], ['id'], null, null, false, false, null]],
            730 => [[['_route' => 'admin_manager_activities', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserActivitiesAction'], ['id'], null, null, false, false, null]],
            750 => [[['_route' => 'admin_manager', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AdminUserController::adminUserAction'], ['id'], ['GET' => 0], null, false, true, null]],
            798 => [[['_route' => 'admin_decision_result_pdf_mandate', 'id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::pdfResultMandateAction'], ['id'], null, null, false, false, null]],
            807 => [[['_route' => 'admin_decision_result_pdf_a', 'id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::pdfResultPdfAAction'], ['id'], null, null, false, false, null]],
            833 => [[['_route' => 'manager_address_edit', 'id' => 0, 'aId' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\AddressController::managerAddressEditAction'], ['id'], null, null, false, false, null]],
            882 => [[['_route' => 'survey_edit_helptexts_save', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyElementsSaveAction'], ['type'], null, null, false, false, null]],
            890 => [[['_route' => 'survey_edit_helptexts', '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyHelptextsAction'], ['type'], ['GET' => 0], null, false, false, null]],
            938 => [[['_route' => 'damage_builder', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyDamageBuilderAction'], ['type'], ['GET' => 0], null, false, true, null]],
            960 => [[['_route' => 'survey_tariff_builder', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Admin\\SurveyController::adminSurveyTariffBuilderAction'], ['type'], ['GET' => 0], null, false, true, null]],
            1003 => [[['_route' => 'manager_survey_type_result', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Api\\TariffDeliveryApiController::managerSurveyTypeResultAction'], ['type'], ['GET' => 0], null, false, false, null]],
            1040 => [[['_route' => 'contract_new_mail', 'cId' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::contractNewMailAction'], ['cId'], ['GET' => 0], null, false, false, null]],
            1053 => [[['_route' => 'contract_edit', 'id' => 0, 'aId' => 0, 'cid' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::contractEditAction'], ['cid'], null, null, false, false, null]],
            1068 => [[['_route' => 'contract_read', 'cId' => 0, '_controller' => 'Main\\InsuranceBundle\\Controller\\ContractController::managerContractReadAction'], ['id'], ['GET' => 0], null, false, true, null]],
            1114 => [[['_route' => 'damage_type_report_save', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageReportDoUploadAction', '_locale' => 'en'], ['type'], ['PUT' => 0], null, false, false, null]],
            1131 => [[['_route' => 'damage_type_report_save', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageReportDoUploadAction', '_locale' => 'de'], ['type'], ['PUT' => 0], null, false, false, null]],
            1141 => [[['_route' => 'damage_type_report', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageDecisionSurveyAction'], ['type'], ['GET' => 0], null, false, false, null]],
            1155 => [[['_route' => 'manager_damage_report_send', 'id' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageResultPdfSendAction'], ['id'], ['GET' => 0], null, false, false, null]],
            1172 => [[['_route' => 'manager_damage_report_download', 'id' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\DamageReportController::damageResultPdfDownloadAction'], ['id'], null, null, false, false, null]],
            1192 => [[['_route' => 'manager_edit', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::editManagerAction'], ['id'], null, null, false, false, null]],
            1230 => [[['_route' => 'manager_show_result', 'type' => '', 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::managerTypeShowApplicationAction'], ['type', 'tariffId'], ['PUT' => 0, 'GET' => 1], null, false, true, null]],
            1291 => [[['_route' => 'manager_choose_payment_save', 'id' => 0, 'type' => '', 'payment' => null, 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::savePaymentAction'], ['type', 'tariffId', 'payment'], ['GET' => 0], null, false, false, null]],
            1300 => [[['_route' => 'manager_choose_payment', 'id' => 0, 'type' => '', 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::choosePaymentAction'], ['type', 'tariffId'], ['GET' => 0], null, false, false, null]],
            1347 => [[['_route' => 'manager_contract_sign_mandate_save', 'type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateSaveAction'], ['type'], ['PUT' => 0, 'GET' => 1], null, false, false, null]],
            1370 => [[['_route' => 'manager_contract_sign_mandate', 'id' => null, 'type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateAction'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
            1407 => [[['_route' => 'manager_survey_type_save', 'type' => '', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::surveyTypeSaveAction'], ['type'], ['PUT' => 0], null, false, false, null]],
            1430 => [[['_route' => 'manager_survey_type', 'type' => '', '_controller' => 'Main\\UserBundle\\Controller\\Web\\ManagerController::surveyTypeDoAction'], ['type'], ['GET' => 0], null, false, true, null]],
            1479 => [[['_route' => 'manager_sign_mandate', 'type' => null, 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateAction'], ['type', 'tariffId'], ['GET' => 0], null, false, true, null]],
            1521 => [[['_route' => 'mandate_sign_save', 'id' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::signMandateSaveAction'], ['id'], ['PUT' => 0], null, false, false, null]],
            1562 => [[['_route' => 'manager_sign_mandate_save', 'type' => null, 'tariffId' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::managerSignMandateSaveAction'], ['type', 'tariffId'], ['PUT' => 0, 'GET' => 1], null, false, true, null]],
            1610 => [[['_route' => 'manager_mandate_sign', 'id' => null, 'type' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\MandateController::signMandateAction'], ['type', 'id'], ['GET' => 0], null, false, true, null]],
            1635 => [[['_route' => 'manager_bank_edit', 'id' => 0, 'aId' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Admin\\BankController::bankAccountEditAction'], ['id'], null, null, false, false, null]],
            1687 => [[['_route' => 'manager_document_download', 'pathId' => null, 'documentName' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::managerDocumentDownloadAction'], ['pathId', 'documentName'], null, null, false, true, null]],
            1724 => [[['_route' => 'manager_type_damage_report_download', 'id' => null, 'type' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::damageResultPdfAction'], ['id', 'type'], null, null, false, false, null]],
            1750 => [[['_route' => 'manager_message_read', '_controller' => 'AppBundle\\Controller\\MessageController::messageAction'], ['id'], null, null, false, true, null]],
            1810 => [[['_route' => 'test_damage_type_report_save', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageReportDoUploadAction', '_locale' => 'en'], ['type'], ['PUT' => 0], null, false, false, null]],
            1827 => [[['_route' => 'test_damage_type_report_save', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageReportDoUploadAction', '_locale' => 'de'], ['type'], ['PUT' => 0], null, false, false, null]],
            1837 => [[['_route' => 'test_damage_type_report', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController::damageDecisionSurveyAction'], ['type'], ['GET' => 0], null, false, false, null]],
            1885 => [[['_route' => 'test_damage_builder', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestSurveyController::adminSurveyDamageBuilderAction'], ['type'], ['GET' => 0], null, false, true, null]],
            1914 => [[['_route' => 'test_survey_tariff_builder', 'type' => null, '_controller' => 'Main\\InsuranceBundle\\Controller\\Test\\TestSurveyController::adminSurveyTariffBuilderAction'], ['type'], ['GET' => 0], null, false, true, null]],
            1946 => [[['_route' => 'get_pet_activities', 'id' => 0, '_controller' => 'Main\\UserBundle\\Controller\\Web\\ActivityController::getPetActivitiesAction'], ['id'], null, null, false, false, null]],
            1978 => [[['_route' => 'new_login_mail', 'id' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginNewMailAction'], ['id'], null, null, false, false, null]],
            1994 => [[['_route' => 'security_login_waiting', '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginWaitingAction'], ['id'], null, null, false, false, null]],
            2034 => [[['_route' => 'verification_code', 'code' => null, '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginVerificationAction'], ['code'], null, null, false, true, null]],
            2052 => [[['_route' => 'security_login_verification', '_controller' => 'Main\\UserBundle\\Controller\\Web\\SecurityController::loginAction'], ['code'], null, null, false, true, null]],
            2088 => [[['_route' => 'document_send', 'id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::damageResultPdfSendAction'], ['id'], ['GET' => 0], null, false, false, null]],
            2105 => [[['_route' => 'document_download', 'id' => null, '_controller' => 'AppBundle\\Controller\\DocumentController::damageResultPdfDownloadAction'], ['id'], null, null, false, false, null]],
            2138 => [[['_route' => 'faq_edit_save', '_controller' => 'AppBundle\\Controller\\HelpController::faqSaveEditAction'], ['id'], null, null, false, false, null]],
        ];
    }
}
