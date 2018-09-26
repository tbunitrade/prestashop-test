<?php

namespace ContainerTbb0hqs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'prestashop.core.api.stockmovement.controller' => 'prestashop.core.api.stockMovement.controller',
            'prestashop.core.api.stockmovement.repository' => 'prestashop.core.api.stockMovement.repository',
            'prestashop.twig.extension.dataformatter' => 'prestashop.twig.extension.dataFormatter',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'assets._version__default' => 'getAssets_VersionDefaultService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'csa_guzzle.data_collector.guzzle' => 'getCsaGuzzle_DataCollector_GuzzleService',
            'csa_guzzle.subscriber.debug' => 'getCsaGuzzle_Subscriber_DebugService',
            'csa_guzzle.twig.extension' => 'getCsaGuzzle_Twig_ExtensionService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'fragment.listener' => 'getFragment_ListenerService',
            'framework_extra_bundle.argument_name_convertor' => 'getFrameworkExtraBundle_ArgumentNameConvertorService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'guzzle.cache' => 'getGuzzle_CacheService',
            'http_kernel' => 'getHttpKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.console_very_verbose' => 'getMonolog_Handler_ConsoleVeryVerboseService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'prestashop.adapter.data_provider.module' => 'getPrestashop_Adapter_DataProvider_ModuleService',
            'prestashop.adapter.legacy.block.helper.subscriber' => 'getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.legacy.hook.subscriber' => 'getPrestashop_Adapter_Legacy_Hook_SubscriberService',
            'prestashop.adapter.legacy.logger' => 'getPrestashop_Adapter_Legacy_LoggerService',
            'prestashop.adapter.middleware.ssl' => 'getPrestashop_Adapter_Middleware_SslService',
            'prestashop.adapter.security.admin' => 'getPrestashop_Adapter_Security_AdminService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.demo_mode_enabled.listener' => 'getPrestashop_DemoModeEnabled_ListenerService',
            'prestashop.dispatcher.legacy_hooks.subscriber' => 'getPrestashop_Dispatcher_LegacyHooks_SubscriberService',
            'prestashop.handler.log' => 'getPrestashop_Handler_LogService',
            'prestashop.hook.dispatcher' => 'getPrestashop_Hook_DispatcherService',
            'prestashop.hooks_registry' => 'getPrestashop_HooksRegistryService',
            'prestashop.security.admin.provider' => 'getPrestashop_Security_Admin_ProviderService',
            'prestashop.tokenized_url_listener' => 'getPrestashop_TokenizedUrlListenerService',
            'prestashop.twig.extension.admin' => 'getPrestashop_Twig_Extension_AdminService',
            'prestashop.twig.extension.data_formatter' => 'getPrestashop_Twig_Extension_DataFormatterService',
            'prestashop.twig.extension.hook' => 'getPrestashop_Twig_Extension_HookService',
            'prestashop.twig.extension.layout' => 'getPrestashop_Twig_Extension_LayoutService',
            'prestashop.twig.extension.stringloader' => 'getPrestashop_Twig_Extension_StringloaderService',
            'prestashop.twig.extension.translation' => 'getPrestashop_Twig_Extension_TranslationService',
            'prestashop.twig.modules.loader' => 'getPrestashop_Twig_Modules_LoaderService',
            'prestashop.user_locale.listener' => 'getPrestashop_UserLocale_ListenerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_locator.sr6ctxe' => 'getServiceLocator_Sr6ctxeService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation_tools.translation.node_visitor' => 'getTranslationTools_Translation_NodeVisitorService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->fileMap = array(
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'config.resource.self_checking_resource_checker' => 'getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'csa_guzzle.cache.adapter.doctrine' => 'getCsaGuzzle_Cache_Adapter_DoctrineService.php',
            'csa_guzzle.cache_warmer.description' => 'getCsaGuzzle_CacheWarmer_DescriptionService.php',
            'csa_guzzle.client.addons_api' => 'getCsaGuzzle_Client_AddonsApiService.php',
            'csa_guzzle.client_factory' => 'getCsaGuzzle_ClientFactoryService.php',
            'csa_guzzle.description_factory' => 'getCsaGuzzle_DescriptionFactoryService.php',
            'csa_guzzle.description_loader' => 'getCsaGuzzle_DescriptionLoaderService.php',
            'csa_guzzle.description_loader.resolver' => 'getCsaGuzzle_DescriptionLoader_ResolverService.php',
            'csa_guzzle.subscriber.cache' => 'getCsaGuzzle_Subscriber_CacheService.php',
            'csa_guzzle.subscriber.stopwatch' => 'getCsaGuzzle_Subscriber_StopwatchService.php',
            'debug.dump_listener' => 'getDebug_DumpListenerService.php',
            'debug.file_link_formatter.url_format' => 'getDebug_FileLinkFormatter_UrlFormatService.php',
            'dependency_injection.config.container_parameters_resource_checker' => 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache.provider' => 'getDoctrine_Cache_ProviderService.php',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService.php',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.proxy_cache_warmer' => 'getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.registry' => 'getForm_RegistryService.php',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => 'getForm_ServerParamsService.php',
            'form.type.admininistration.general' => 'getForm_Type_Admininistration_GeneralService.php',
            'form.type.administration.notification' => 'getForm_Type_Administration_NotificationService.php',
            'form.type.administration.upload_quota' => 'getForm_Type_Administration_UploadQuotaService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.customer_preferences.general' => 'getForm_Type_CustomerPreferences_GeneralService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.date_picker' => 'getForm_Type_DatePickerService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.entity' => 'getForm_Type_EntityService.php',
            'form.type.extension.money' => 'getForm_Type_Extension_MoneyService.php',
            'form.type.extension.text' => 'getForm_Type_Extension_TextService.php',
            'form.type.extension.textarea' => 'getForm_Type_Extension_TextareaService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.import.import' => 'getForm_Type_Import_ImportService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.maintenance.general' => 'getForm_Type_Maintenance_GeneralService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.performance.caching' => 'getForm_Type_Performance_CachingService.php',
            'form.type.performance.ccc' => 'getForm_Type_Performance_CccService.php',
            'form.type.performance.debug_mode' => 'getForm_Type_Performance_DebugModeService.php',
            'form.type.performance.media_servers' => 'getForm_Type_Performance_MediaServersService.php',
            'form.type.performance.memcache_servers' => 'getForm_Type_Performance_MemcacheServersService.php',
            'form.type.performance.optional_features' => 'getForm_Type_Performance_OptionalFeaturesService.php',
            'form.type.performance.smarty' => 'getForm_Type_Performance_SmartyService.php',
            'form.type.product.attachment' => 'getForm_Type_Product_AttachmentService.php',
            'form.type.product.categories_tree' => 'getForm_Type_Product_CategoriesTreeService.php',
            'form.type.product.combination' => 'getForm_Type_Product_CombinationService.php',
            'form.type.product.combination_bulk' => 'getForm_Type_Product_CombinationBulkService.php',
            'form.type.product.custom_field' => 'getForm_Type_Product_CustomFieldService.php',
            'form.type.product.feature' => 'getForm_Type_Product_FeatureService.php',
            'form.type.product.information' => 'getForm_Type_Product_InformationService.php',
            'form.type.product.options' => 'getForm_Type_Product_OptionsService.php',
            'form.type.product.price' => 'getForm_Type_Product_PriceService.php',
            'form.type.product.quantity' => 'getForm_Type_Product_QuantityService.php',
            'form.type.product.seo' => 'getForm_Type_Product_SeoService.php',
            'form.type.product.shipping' => 'getForm_Type_Product_ShippingService.php',
            'form.type.product.simple_category' => 'getForm_Type_Product_SimpleCategoryService.php',
            'form.type.product.specific_price' => 'getForm_Type_Product_SpecificPriceService.php',
            'form.type.product.supplier_combination' => 'getForm_Type_Product_SupplierCombinationService.php',
            'form.type.product.translate' => 'getForm_Type_Product_TranslateService.php',
            'form.type.product.virtual' => 'getForm_Type_Product_VirtualService.php',
            'form.type.product.warehouse_combination' => 'getForm_Type_Product_WarehouseCombinationService.php',
            'form.type.product_preferences.general' => 'getForm_Type_ProductPreferences_GeneralService.php',
            'form.type.product_preferences.stock' => 'getForm_Type_ProductPreferences_StockService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.shop_parameters.general' => 'getForm_Type_ShopParameters_GeneralService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.typeahead.customer' => 'getForm_Type_Typeahead_CustomerService.php',
            'form.type.typeahead.product' => 'getForm_Type_Typeahead_ProductService.php',
            'form.type.typeahead.product_pack' => 'getForm_Type_Typeahead_ProductPackService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'main.warmer.cache_warmer' => 'getMain_Warmer_CacheWarmerService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService.php',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService.php',
            'prestashop.access_denied.listener' => 'getPrestashop_AccessDenied_ListenerService.php',
            'prestashop.adapter.admin.controller.attribute_generator' => 'getPrestashop_Adapter_Admin_Controller_AttributeGeneratorService.php',
            'prestashop.adapter.admin.controller.category' => 'getPrestashop_Adapter_Admin_Controller_CategoryService.php',
            'prestashop.adapter.admin.wrapper.product' => 'getPrestashop_Adapter_Admin_Wrapper_ProductService.php',
            'prestashop.adapter.administration.form_handler' => 'getPrestashop_Adapter_Administration_FormHandlerService.php',
            'prestashop.adapter.administration.form_provider' => 'getPrestashop_Adapter_Administration_FormProviderService.php',
            'prestashop.adapter.cache_clearer' => 'getPrestashop_Adapter_CacheClearerService.php',
            'prestashop.adapter.caching.configuration' => 'getPrestashop_Adapter_Caching_ConfigurationService.php',
            'prestashop.adapter.ccc.configuration' => 'getPrestashop_Adapter_Ccc_ConfigurationService.php',
            'prestashop.adapter.check_missing_files' => 'getPrestashop_Adapter_CheckMissingFilesService.php',
            'prestashop.adapter.check_requirements' => 'getPrestashop_Adapter_CheckRequirementsService.php',
            'prestashop.adapter.combination_feature' => 'getPrestashop_Adapter_CombinationFeatureService.php',
            'prestashop.adapter.customer.customer_configuration' => 'getPrestashop_Adapter_Customer_CustomerConfigurationService.php',
            'prestashop.adapter.data_provider.attachment' => 'getPrestashop_Adapter_DataProvider_AttachmentService.php',
            'prestashop.adapter.data_provider.attribute' => 'getPrestashop_Adapter_DataProvider_AttributeService.php',
            'prestashop.adapter.data_provider.carrier' => 'getPrestashop_Adapter_DataProvider_CarrierService.php',
            'prestashop.adapter.data_provider.category' => 'getPrestashop_Adapter_DataProvider_CategoryService.php',
            'prestashop.adapter.data_provider.combination' => 'getPrestashop_Adapter_DataProvider_CombinationService.php',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService.php',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService.php',
            'prestashop.adapter.data_provider.customer' => 'getPrestashop_Adapter_DataProvider_CustomerService.php',
            'prestashop.adapter.data_provider.feature' => 'getPrestashop_Adapter_DataProvider_FeatureService.php',
            'prestashop.adapter.data_provider.group' => 'getPrestashop_Adapter_DataProvider_GroupService.php',
            'prestashop.adapter.data_provider.manufacturer' => 'getPrestashop_Adapter_DataProvider_ManufacturerService.php',
            'prestashop.adapter.data_provider.pack' => 'getPrestashop_Adapter_DataProvider_PackService.php',
            'prestashop.adapter.data_provider.product' => 'getPrestashop_Adapter_DataProvider_ProductService.php',
            'prestashop.adapter.data_provider.supplier' => 'getPrestashop_Adapter_DataProvider_SupplierService.php',
            'prestashop.adapter.data_provider.tax' => 'getPrestashop_Adapter_DataProvider_TaxService.php',
            'prestashop.adapter.data_provider.warehouse' => 'getPrestashop_Adapter_DataProvider_WarehouseService.php',
            'prestashop.adapter.debug_mode' => 'getPrestashop_Adapter_DebugModeService.php',
            'prestashop.adapter.debug_mode.configuration' => 'getPrestashop_Adapter_DebugMode_ConfigurationService.php',
            'prestashop.adapter.feature.feature' => 'getPrestashop_Adapter_Feature_FeatureService.php',
            'prestashop.adapter.formatter.price' => 'getPrestashop_Adapter_Formatter_PriceService.php',
            'prestashop.adapter.general.configuration' => 'getPrestashop_Adapter_General_ConfigurationService.php',
            'prestashop.adapter.group.feature' => 'getPrestashop_Adapter_Group_FeatureService.php',
            'prestashop.adapter.hosting_information' => 'getPrestashop_Adapter_HostingInformationService.php',
            'prestashop.adapter.image_manager' => 'getPrestashop_Adapter_ImageManagerService.php',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService.php',
            'prestashop.adapter.logs.configuration' => 'getPrestashop_Adapter_Logs_ConfigurationService.php',
            'prestashop.adapter.logs.form_handler' => 'getPrestashop_Adapter_Logs_FormHandlerService.php',
            'prestashop.adapter.logs.form_provider' => 'getPrestashop_Adapter_Logs_FormProviderService.php',
            'prestashop.adapter.mailing_information' => 'getPrestashop_Adapter_MailingInformationService.php',
            'prestashop.adapter.maintenance.configuration' => 'getPrestashop_Adapter_Maintenance_ConfigurationService.php',
            'prestashop.adapter.maintenance.form_handler' => 'getPrestashop_Adapter_Maintenance_FormHandlerService.php',
            'prestashop.adapter.maintenance.form_provider' => 'getPrestashop_Adapter_Maintenance_FormProviderService.php',
            'prestashop.adapter.media_servers.configuration' => 'getPrestashop_Adapter_MediaServers_ConfigurationService.php',
            'prestashop.adapter.memcache_server.manager' => 'getPrestashop_Adapter_MemcacheServer_ManagerService.php',
            'prestashop.adapter.module.prestatrust.checker' => 'getPrestashop_Adapter_Module_Prestatrust_CheckerService.php',
            'prestashop.adapter.module.prestatrust.eventsubscriber' => 'getPrestashop_Adapter_Module_Prestatrust_EventsubscriberService.php',
            'prestashop.adapter.module.self_configurator' => 'getPrestashop_Adapter_Module_SelfConfiguratorService.php',
            'prestashop.adapter.module.tab.eventsubscriber' => 'getPrestashop_Adapter_Module_Tab_EventsubscriberService.php',
            'prestashop.adapter.module.tab.register' => 'getPrestashop_Adapter_Module_Tab_RegisterService.php',
            'prestashop.adapter.module.tab.unregister' => 'getPrestashop_Adapter_Module_Tab_UnregisterService.php',
            'prestashop.adapter.notifications.configuration' => 'getPrestashop_Adapter_Notifications_ConfigurationService.php',
            'prestashop.adapter.optional_features.configuration' => 'getPrestashop_Adapter_OptionalFeatures_ConfigurationService.php',
            'prestashop.adapter.performance.form_handler' => 'getPrestashop_Adapter_Performance_FormHandlerService.php',
            'prestashop.adapter.performance.form_provider' => 'getPrestashop_Adapter_Performance_FormProviderService.php',
            'prestashop.adapter.php_parameters' => 'getPrestashop_Adapter_PhpParametersService.php',
            'prestashop.adapter.preferences.configuration' => 'getPrestashop_Adapter_Preferences_ConfigurationService.php',
            'prestashop.adapter.preferences.form_handler' => 'getPrestashop_Adapter_Preferences_FormHandlerService.php',
            'prestashop.adapter.preferences.form_provider' => 'getPrestashop_Adapter_Preferences_FormProviderService.php',
            'prestashop.adapter.presenter.module' => 'getPrestashop_Adapter_Presenter_ModuleService.php',
            'prestashop.adapter.product_general.configuration' => 'getPrestashop_Adapter_ProductGeneral_ConfigurationService.php',
            'prestashop.adapter.product_page.configuration' => 'getPrestashop_Adapter_ProductPage_ConfigurationService.php',
            'prestashop.adapter.product_pagination.configuration' => 'getPrestashop_Adapter_ProductPagination_ConfigurationService.php',
            'prestashop.adapter.product_stock.configuration' => 'getPrestashop_Adapter_ProductStock_ConfigurationService.php',
            'prestashop.adapter.shop.context' => 'getPrestashop_Adapter_Shop_ContextService.php',
            'prestashop.adapter.shop_information' => 'getPrestashop_Adapter_ShopInformationService.php',
            'prestashop.adapter.smarty_cache.configuration' => 'getPrestashop_Adapter_SmartyCache_ConfigurationService.php',
            'prestashop.adapter.system_information' => 'getPrestashop_Adapter_SystemInformationService.php',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService.php',
            'prestashop.adapter.upload_quota.configuration' => 'getPrestashop_Adapter_UploadQuota_ConfigurationService.php',
            'prestashop.addons.client_api' => 'getPrestashop_Addons_ClientApiService.php',
            'prestashop.admin.customer_preferences.data_provider' => 'getPrestashop_Admin_CustomerPreferences_DataProviderService.php',
            'prestashop.admin.customer_preferences.form_handler' => 'getPrestashop_Admin_CustomerPreferences_FormHandlerService.php',
            'prestashop.admin.import.form_builder' => 'getPrestashop_Admin_Import_FormBuilderService.php',
            'prestashop.admin.import.form_data_provider' => 'getPrestashop_Admin_Import_FormDataProviderService.php',
            'prestashop.admin.import.form_handler' => 'getPrestashop_Admin_Import_FormHandlerService.php',
            'prestashop.admin.product_preferences.data_provider' => 'getPrestashop_Admin_ProductPreferences_DataProviderService.php',
            'prestashop.admin.product_preferences.form_handler' => 'getPrestashop_Admin_ProductPreferences_FormHandlerService.php',
            'prestashop.cache.refresh' => 'getPrestashop_Cache_RefreshService.php',
            'prestashop.categories_provider' => 'getPrestashop_CategoriesProviderService.php',
            'prestashop.compiler.smarty.template' => 'getPrestashop_Compiler_Smarty_TemplateService.php',
            'prestashop.core.addon.theme.exporter' => 'getPrestashop_Core_Addon_Theme_ExporterService.php',
            'prestashop.core.addon.theme.repository' => 'getPrestashop_Core_Addon_Theme_RepositoryService.php',
            'prestashop.core.admin.data_provider.addons_interface' => 'getPrestashop_Core_Admin_DataProvider_AddonsInterfaceService.php',
            'prestashop.core.admin.data_provider.module_interface' => 'getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService.php',
            'prestashop.core.admin.data_provider.product_interface' => 'getPrestashop_Core_Admin_DataProvider_ProductInterfaceService.php',
            'prestashop.core.admin.data_updater.product_interface' => 'getPrestashop_Core_Admin_DataUpdater_ProductInterfaceService.php',
            'prestashop.core.admin.lang.repository' => 'getPrestashop_Core_Admin_Lang_RepositoryService.php',
            'prestashop.core.admin.log.repository' => 'getPrestashop_Core_Admin_Log_RepositoryService.php',
            'prestashop.core.admin.module.repository' => 'getPrestashop_Core_Admin_Module_RepositoryService.php',
            'prestashop.core.admin.page_preference_interface' => 'getPrestashop_Core_Admin_PagePreferenceInterfaceService.php',
            'prestashop.core.admin.search_parameters' => 'getPrestashop_Core_Admin_SearchParametersService.php',
            'prestashop.core.admin.tab.repository' => 'getPrestashop_Core_Admin_Tab_RepositoryService.php',
            'prestashop.core.admin.translation.repository' => 'getPrestashop_Core_Admin_Translation_RepositoryService.php',
            'prestashop.core.admin.url_generator' => 'getPrestashop_Core_Admin_UrlGeneratorService.php',
            'prestashop.core.admin.url_generator_factory' => 'getPrestashop_Core_Admin_UrlGeneratorFactoryService.php',
            'prestashop.core.admin.url_generator_legacy' => 'getPrestashop_Core_Admin_UrlGeneratorLegacyService.php',
            'prestashop.core.api.attribute.controller' => 'getPrestashop_Core_Api_Attribute_ControllerService.php',
            'prestashop.core.api.category.controller' => 'getPrestashop_Core_Api_Category_ControllerService.php',
            'prestashop.core.api.category.repository' => 'getPrestashop_Core_Api_Category_RepositoryService.php',
            'prestashop.core.api.feature.controller' => 'getPrestashop_Core_Api_Feature_ControllerService.php',
            'prestashop.core.api.feature_attribute.repository' => 'getPrestashop_Core_Api_FeatureAttribute_RepositoryService.php',
            'prestashop.core.api.i18n.controller' => 'getPrestashop_Core_Api_I18n_ControllerService.php',
            'prestashop.core.api.manufacturer.controller' => 'getPrestashop_Core_Api_Manufacturer_ControllerService.php',
            'prestashop.core.api.manufacturer.repository' => 'getPrestashop_Core_Api_Manufacturer_RepositoryService.php',
            'prestashop.core.api.query_stock_movement_params_collection' => 'getPrestashop_Core_Api_QueryStockMovementParamsCollectionService.php',
            'prestashop.core.api.query_stock_params_collection' => 'getPrestashop_Core_Api_QueryStockParamsCollectionService.php',
            'prestashop.core.api.query_translation_params_collection' => 'getPrestashop_Core_Api_QueryTranslationParamsCollectionService.php',
            'prestashop.core.api.stock.controller' => 'getPrestashop_Core_Api_Stock_ControllerService.php',
            'prestashop.core.api.stock.movements_collection' => 'getPrestashop_Core_Api_Stock_MovementsCollectionService.php',
            'prestashop.core.api.stock.repository' => 'getPrestashop_Core_Api_Stock_RepositoryService.php',
            'prestashop.core.api.stock_movement.controller' => 'getPrestashop_Core_Api_StockMovement_ControllerService.php',
            'prestashop.core.api.stock_movement.repository' => 'getPrestashop_Core_Api_StockMovement_RepositoryService.php',
            'prestashop.core.api.supplier.controller' => 'getPrestashop_Core_Api_Supplier_ControllerService.php',
            'prestashop.core.api.supplier.repository' => 'getPrestashop_Core_Api_Supplier_RepositoryService.php',
            'prestashop.core.api.translation.controller' => 'getPrestashop_Core_Api_Translation_ControllerService.php',
            'prestashop.core.configuration.ini_configuration' => 'getPrestashop_Core_Configuration_IniConfigurationService.php',
            'prestashop.core.data_provider.stock_interface' => 'getPrestashop_Core_DataProvider_StockInterfaceService.php',
            'prestashop.core.import.dir' => 'getPrestashop_Core_Import_DirService.php',
            'prestashop.core.import.file_finder' => 'getPrestashop_Core_Import_FileFinderService.php',
            'prestashop.core.import.file_removal' => 'getPrestashop_Core_Import_FileRemovalService.php',
            'prestashop.core.import.file_uploader' => 'getPrestashop_Core_Import_FileUploaderService.php',
            'prestashop.core.module.updater' => 'getPrestashop_Core_Module_UpdaterService.php',
            'prestashop.data_provider.modules.recommended' => 'getPrestashop_DataProvider_Modules_RecommendedService.php',
            'prestashop.dumper.xliff' => 'getPrestashop_Dumper_XliffService.php',
            'prestashop.hook.finder' => 'getPrestashop_Hook_FinderService.php',
            'prestashop.module.manager' => 'getPrestashop_Module_ManagerService.php',
            'prestashop.module.zip.manager' => 'getPrestashop_Module_Zip_ManagerService.php',
            'prestashop.module_kernel.repository' => 'getPrestashop_ModuleKernel_RepositoryService.php',
            'prestashop.multishop_command_listener' => 'getPrestashop_MultishopCommandListenerService.php',
            'prestashop.router' => 'getPrestashop_RouterService.php',
            'prestashop.security.role.dynamic_role_hierarchy' => 'getPrestashop_Security_Role_DynamicRoleHierarchyService.php',
            'prestashop.security.voter.product' => 'getPrestashop_Security_Voter_ProductService.php',
            'prestashop.service.product' => 'getPrestashop_Service_ProductService.php',
            'prestashop.service.translation' => 'getPrestashop_Service_TranslationService.php',
            'prestashop.smarty' => 'getPrestashop_SmartyService.php',
            'prestashop.translation.api.international' => 'getPrestashop_Translation_Api_InternationalService.php',
            'prestashop.translation.api.stock' => 'getPrestashop_Translation_Api_StockService.php',
            'prestashop.translation.backoffice_provider' => 'getPrestashop_Translation_BackofficeProviderService.php',
            'prestashop.translation.chainextractor' => 'getPrestashop_Translation_ChainextractorService.php',
            'prestashop.translation.database_loader' => 'getPrestashop_Translation_DatabaseLoaderService.php',
            'prestashop.translation.dumper.xliff' => 'getPrestashop_Translation_Dumper_XliffService.php',
            'prestashop.translation.extractor.crowdin.php' => 'getPrestashop_Translation_Extractor_Crowdin_PhpService.php',
            'prestashop.translation.extractor.php' => 'getPrestashop_Translation_Extractor_PhpService.php',
            'prestashop.translation.extractor.smarty' => 'getPrestashop_Translation_Extractor_SmartyService.php',
            'prestashop.translation.extractor.twig' => 'getPrestashop_Translation_Extractor_TwigService.php',
            'prestashop.translation.frontoffice_provider' => 'getPrestashop_Translation_FrontofficeProviderService.php',
            'prestashop.translation.mails' => 'getPrestashop_Translation_MailsService.php',
            'prestashop.translation.manager.original_string_manager' => 'getPrestashop_Translation_Manager_OriginalStringManagerService.php',
            'prestashop.translation.manager.translation_manager' => 'getPrestashop_Translation_Manager_TranslationManagerService.php',
            'prestashop.translation.module_provider' => 'getPrestashop_Translation_ModuleProviderService.php',
            'prestashop.translation.modules_provider' => 'getPrestashop_Translation_ModulesProviderService.php',
            'prestashop.translation.others_provider' => 'getPrestashop_Translation_OthersProviderService.php',
            'prestashop.translation.parser.crowdin_php_parser' => 'getPrestashop_Translation_Parser_CrowdinPhpParserService.php',
            'prestashop.translation.search_provider' => 'getPrestashop_Translation_SearchProviderService.php',
            'prestashop.translation.theme.exporter' => 'getPrestashop_Translation_Theme_ExporterService.php',
            'prestashop.translation.theme_extractor' => 'getPrestashop_Translation_ThemeExtractorService.php',
            'prestashop.translation.theme_provider' => 'getPrestashop_Translation_ThemeProviderService.php',
            'prestashop.translation.theme_translations_factory' => 'getPrestashop_Translation_ThemeTranslationsFactoryService.php',
            'prestashop.translation.translations_factory' => 'getPrestashop_Translation_TranslationsFactoryService.php',
            'prestashop.user_provider' => 'getPrestashop_UserProviderService.php',
            'prestashop.utils.zip_manager' => 'getPrestashop_Utils_ZipManagerService.php',
            'property_accessor' => 'getPropertyAccessorService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.simple_role_voter' => 'getSecurity_Access_SimpleRoleVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.main' => 'getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication.session_strategy.main' => 'getSecurity_Authentication_SessionStrategy_MainService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.zfhj2lw' => 'getSecurity_RequestMatcher_Zfhj2lwService.php',
            'security.user.provider.concrete.in_memory' => 'getSecurity_User_Provider_Concrete_InMemoryService.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService.php',
            'serializer' => 'getSerializerService.php',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService.php',
            'serializer.mapping.cache_warmer' => 'getSerializer_Mapping_CacheWarmerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'templating' => 'getTemplatingService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.finder' => 'getTemplating_FinderService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
            'web_server.command.server_log' => 'getWebServer_Command_ServerLogService.php',
            'web_server.command.server_run' => 'getWebServer_Command_ServerRunService.php',
            'web_server.command.server_start' => 'getWebServer_Command_ServerStartService.php',
            'web_server.command.server_status' => 'getWebServer_Command_ServerStatusService.php',
            'web_server.command.server_stop' => 'getWebServer_Command_ServerStopService.php',
        );
        $this->privates = array(
            'csa_guzzle.default_cache_adapter' => true,
            'monolog.handler.legacy' => true,
            'prestashop.core.api.stockMovement.controller' => true,
            'prestashop.core.api.stockMovement.repository' => true,
            'prestashop.twig.extension.dataFormatter' => true,
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets._version__default' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'csa_guzzle.cache.adapter.doctrine' => true,
            'csa_guzzle.cache_warmer.description' => true,
            'csa_guzzle.client.addons_api' => true,
            'csa_guzzle.client_factory' => true,
            'csa_guzzle.data_collector.guzzle' => true,
            'csa_guzzle.description_factory' => true,
            'csa_guzzle.description_loader' => true,
            'csa_guzzle.description_loader.resolver' => true,
            'csa_guzzle.subscriber.cache' => true,
            'csa_guzzle.subscriber.debug' => true,
            'csa_guzzle.subscriber.stopwatch' => true,
            'csa_guzzle.twig.extension' => true,
            'data_collector.form' => true,
            'data_collector.form.extractor' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'data_collector.translation' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.dump_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.file_link_formatter.url_format' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.entity' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.doctrine' => true,
            'form.type_guesser.validator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.argument_name_convertor' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.handler.console' => true,
            'monolog.handler.console_very_verbose' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.templating' => true,
            'monolog.logger.translation' => true,
            'monolog.processor.psr_log_message' => true,
            'prestashop.compiler.smarty.template' => true,
            'prestashop.core.configuration.ini_configuration' => true,
            'prestashop.core.import.dir' => true,
            'prestashop.core.import.file_finder' => true,
            'prestashop.core.import.file_removal' => true,
            'prestashop.core.import.file_uploader' => true,
            'prestashop.dumper.xliff' => true,
            'prestashop.security.voter.product' => true,
            'prestashop.smarty' => true,
            'prestashop.translation.chainextractor' => true,
            'prestashop.translation.extractor.crowdin.php' => true,
            'prestashop.translation.extractor.php' => true,
            'prestashop.translation.extractor.smarty' => true,
            'prestashop.translation.extractor.twig' => true,
            'prestashop.translation.manager.original_string_manager' => true,
            'prestashop.translation.manager.translation_manager' => true,
            'prestashop.translation.parser.crowdin_php_parser' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.simple_role_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.session_strategy.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.main' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.zfhj2lw' => true,
            'security.role_hierarchy' => true,
            'security.user.provider.concrete.in_memory' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'serializer.mapping.cache.symfony' => true,
            'serializer.mapping.cache_warmer' => true,
            'service_locator.sr6ctxe' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translation_tools.translation.node_visitor' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'var_dumper.cli_dumper' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
            'web_server.command.server_log' => true,
            'web_server.command.server_run' => true,
            'web_server.command.server_start' => true,
            'web_server.command.server_status' => true,
            'web_server.command.server_stop' => true,
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'csa_guzzle.default_cache_adapter' => 'guzzle.cache',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'monolog.handler.legacy' => 'prestashop.handler.log',
            'prestashop.core.api.stockMovement.controller' => 'prestashop.core.api.stock_movement.controller',
            'prestashop.core.api.stockMovement.repository' => 'prestashop.core.api.stock_movement.repository',
            'prestashop.twig.extension.dataFormatter' => 'prestashop.twig.extension.data_formatter',
            'ps.theme_translations_factory' => 'prestashop.translation.theme_translations_factory',
            'ps.translations_factory' => 'prestashop.translation.translations_factory',
            'router' => 'prestashop.router',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('uJTvgC1urn', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('0I66lYqezr', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->getMonolog_Logger_DoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener()) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array())) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => '', 'dbname' => 'prestashopnoski', 'user' => 'u_prestashT', 'password' => 'UUTu3GNz', 'charset' => 'UTF8', 'driverOptions' => array(1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))'), 'serverVersion' => 5.0999999999999996, 'defaultTableOptions' => array()), $b, $c, array('enum' => 'string'));
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, array(0 => ($this->targetDirs[3].'/src/PrestaShopBundle/Entity'))), 'PrestaShopBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('PrestaShopBundle' => 'PrestaShopBundle\\Entity'));
        $b->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()) && false ?: '_'});
        $b->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()) && false ?: '_'});
        $b->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()) && false ?: '_'});
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(${($_ = isset($this->services['prestashop.database.naming_strategy']) ? $this->services['prestashop.database.naming_strategy'] : $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('os_')) && false ?: '_'});
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)) && false ?: '_'});
        $b->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(${($_ = isset($this->services['service_locator.sr6ctxe']) ? $this->services['service_locator.sr6ctxe'] : $this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}));
        $b->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $b);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_ed78abfed3866f827efeb686a1dca1041a6f5a0ce873549e87e6bd262ca3e0c5');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_ed78abfed3866f827efeb686a1dca1041a6f5a0ce873549e87e6bd262ca3e0c5');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_ed78abfed3866f827efeb686a1dca1041a6f5a0ce873549e87e6bd262ca3e0c5');

        return $instance;
    }

    /**
     * Gets the public 'guzzle.cache' service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter
     */
    protected function getGuzzle_CacheService()
    {
        return new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter(${($_ = isset($this->services['doctrine.cache.provider']) ? $this->services['doctrine.cache.provider'] : $this->services['doctrine.cache.provider'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/doctrine'))) && false ?: '_'}, 300);
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.module' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_ModuleService()
    {
        $this->services['prestashop.adapter.data_provider.module'] = $instance = new \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider(${($_ = isset($this->services['prestashop.adapter.legacy.logger']) ? $this->services['prestashop.adapter.legacy.logger'] : $this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger()) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});

        $instance->setEmployeeId(((${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}->getContext()->employee) ? (${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}->getContext()->employee->id) : (0)));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.block.helper.subscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber
     */
    protected function getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.block.helper.subscriber'] = new \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.hook.subscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber
     */
    protected function getPrestashop_Adapter_Legacy_Hook_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.hook.subscriber'] = new \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.logger' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyLogger
     */
    protected function getPrestashop_Adapter_Legacy_LoggerService()
    {
        return $this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger();
    }

    /**
     * Gets the public 'prestashop.adapter.middleware.ssl' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware
     */
    protected function getPrestashop_Adapter_Middleware_SslService()
    {
        return $this->services['prestashop.adapter.middleware.ssl'] = new \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware();
    }

    /**
     * Gets the public 'prestashop.adapter.security.admin' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\Admin
     */
    protected function getPrestashop_Adapter_Security_AdminService()
    {
        return $this->services['prestashop.adapter.security.admin'] = new \PrestaShop\PrestaShop\Adapter\Security\Admin(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.security.admin.provider']) ? $this->services['prestashop.security.admin.provider'] : $this->getPrestashop_Security_Admin_ProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('os_');
    }

    /**
     * Gets the public 'prestashop.demo_mode_enabled.listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\DemoModeEnabledListener
     */
    protected function getPrestashop_DemoModeEnabled_ListenerService()
    {
        return $this->services['prestashop.demo_mode_enabled.listener'] = new \PrestaShopBundle\EventListener\DemoModeEnabledListener(${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'}->getBoolean("_PS_MODE_DEMO_"));
    }

    /**
     * Gets the public 'prestashop.dispatcher.legacy_hooks.subscriber' shared service.
     *
     * @return \PrestaShopBundle\EventListener\ActionDispatcherLegacyHooksSubscriber
     */
    protected function getPrestashop_Dispatcher_LegacyHooks_SubscriberService()
    {
        return $this->services['prestashop.dispatcher.legacy_hooks.subscriber'] = new \PrestaShopBundle\EventListener\ActionDispatcherLegacyHooksSubscriber(${($_ = isset($this->services['prestashop.hook.dispatcher']) ? $this->services['prestashop.hook.dispatcher'] : $this->getPrestashop_Hook_DispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.handler.log' shared service.
     *
     * @return \PrestaShopBundle\Service\Log\LogHandler
     */
    protected function getPrestashop_Handler_LogService()
    {
        return $this->services['prestashop.handler.log'] = new \PrestaShopBundle\Service\Log\LogHandler($this);
    }

    /**
     * Gets the public 'prestashop.hook.dispatcher' shared service.
     *
     * @return \PrestaShopBundle\Service\Hook\HookDispatcher
     */
    protected function getPrestashop_Hook_DispatcherService()
    {
        $this->services['prestashop.hook.dispatcher'] = $instance = new \PrestaShopBundle\Service\Hook\HookDispatcher();

        $instance->addSubscriber(${($_ = isset($this->services['prestashop.adapter.legacy.hook.subscriber']) ? $this->services['prestashop.adapter.legacy.hook.subscriber'] : $this->services['prestashop.adapter.legacy.hook.subscriber'] = new \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber()) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['prestashop.adapter.legacy.block.helper.subscriber']) ? $this->services['prestashop.adapter.legacy.block.helper.subscriber'] : $this->services['prestashop.adapter.legacy.block.helper.subscriber'] = new \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.hooks_registry' shared service.
     *
     * @return \PrestaShopBundle\DataCollector\HookRegistry
     */
    protected function getPrestashop_HooksRegistryService()
    {
        return $this->services['prestashop.hooks_registry'] = new \PrestaShopBundle\DataCollector\HookRegistry();
    }

    /**
     * Gets the public 'prestashop.security.admin.provider' shared service.
     *
     * @return \PrestaShopBundle\Security\Admin\EmployeeProvider
     */
    protected function getPrestashop_Security_Admin_ProviderService()
    {
        return $this->services['prestashop.security.admin.provider'] = new \PrestaShopBundle\Security\Admin\EmployeeProvider(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.tokenized_url_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\TokenizedUrlsListener
     */
    protected function getPrestashop_TokenizedUrlListenerService()
    {
        return $this->services['prestashop.tokenized_url_listener'] = new \PrestaShopBundle\EventListener\TokenizedUrlsListener(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->getSecurity_Csrf_TokenManagerService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.user_provider']) ? $this->services['prestashop.user_provider'] : $this->load('getPrestashop_UserProviderService.php')) && false ?: '_'}->getUsername(), ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.twig.extension.admin' shared service.
     *
     * @return \PrestaShopBundle\Twig\AdminExtension
     */
    protected function getPrestashop_Twig_Extension_AdminService()
    {
        return $this->services['prestashop.twig.extension.admin'] = new \PrestaShopBundle\Twig\AdminExtension(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, $this);
    }

    /**
     * Gets the public 'prestashop.twig.extension.data_formatter' shared service.
     *
     * @return \PrestaShopBundle\Twig\DataFormatterExtension
     */
    protected function getPrestashop_Twig_Extension_DataFormatterService()
    {
        return $this->services['prestashop.twig.extension.data_formatter'] = new \PrestaShopBundle\Twig\DataFormatterExtension();
    }

    /**
     * Gets the public 'prestashop.twig.extension.hook' shared service.
     *
     * @return \PrestaShopBundle\Twig\HookExtension
     */
    protected function getPrestashop_Twig_Extension_HookService()
    {
        return $this->services['prestashop.twig.extension.hook'] = new \PrestaShopBundle\Twig\HookExtension(${($_ = isset($this->services['prestashop.hook.dispatcher']) ? $this->services['prestashop.hook.dispatcher'] : $this->getPrestashop_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.module']) ? $this->services['prestashop.adapter.data_provider.module'] : $this->getPrestashop_Adapter_DataProvider_ModuleService()) && false ?: '_'}, ((${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}->getContext()->employee) ? (${($_ = isset($this->services['prestashop.core.admin.module.repository']) ? $this->services['prestashop.core.admin.module.repository'] : $this->load('getPrestashop_Core_Admin_Module_RepositoryService.php')) && false ?: '_'}) : (null)));
    }

    /**
     * Gets the public 'prestashop.twig.extension.layout' shared service.
     *
     * @return \PrestaShopBundle\Twig\LayoutExtension
     */
    protected function getPrestashop_Twig_Extension_LayoutService()
    {
        return $this->services['prestashop.twig.extension.layout'] = new \PrestaShopBundle\Twig\LayoutExtension(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}, 'dev');
    }

    /**
     * Gets the public 'prestashop.twig.extension.stringloader' shared service.
     *
     * @return \Twig_Extension_StringLoader
     */
    protected function getPrestashop_Twig_Extension_StringloaderService()
    {
        return $this->services['prestashop.twig.extension.stringloader'] = new \Twig_Extension_StringLoader();
    }

    /**
     * Gets the public 'prestashop.twig.extension.translation' shared service.
     *
     * @return \PrestaShopBundle\Twig\TranslationsExtension
     */
    protected function getPrestashop_Twig_Extension_TranslationService()
    {
        $this->services['prestashop.twig.extension.translation'] = $instance = new \PrestaShopBundle\Twig\TranslationsExtension($this, ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'});

        $instance->logger = ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'};
        $instance->translator = ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'};

        return $instance;
    }

    /**
     * Gets the public 'prestashop.twig.modules.loader' shared service.
     *
     * @return \PrestaShopBundle\Twig\Locator\ModuleTemplateLoader
     */
    protected function getPrestashop_Twig_Modules_LoaderService()
    {
        return $this->services['prestashop.twig.modules.loader'] = new \PrestaShopBundle\Twig\Locator\ModuleTemplateLoader(array('PrestaShop' => '', 'Product' => '/Admin/Product', 'Twig' => '/Admin/TwigTemplateForm', 'AdvancedParameters' => '/Admin/Configure/AdvancedParameters', 'ShopParameters' => '/Admin/Configure/ShopParameters'), ${($_ = isset($this->services['prestashop.module_kernel.repository']) ? $this->services['prestashop.module_kernel.repository'] : $this->load('getPrestashop_ModuleKernel_RepositoryService.php')) && false ?: '_'}->getActiveModulesPaths());
    }

    /**
     * Gets the public 'prestashop.user_locale.listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\UserLocaleListener
     */
    protected function getPrestashop_UserLocale_ListenerService()
    {
        return $this->services['prestashop.user_locale.listener'] = new \PrestaShopBundle\EventListener\UserLocaleListener(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'});
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector('PrestaShop', ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'}->get("_PS_VERSION_"));
        $e->setKernel($b);

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->getDataCollector_TranslationService()) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->getDataCollector_DumpService()) && false ?: '_'});
        $instance->add(new \PrestaShopBundle\DataCollector\HookDataCollector(${($_ = isset($this->services['prestashop.hooks_registry']) ? $this->services['prestashop.hooks_registry'] : $this->services['prestashop.hooks_registry'] = new \PrestaShopBundle\DataCollector\HookRegistry()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['csa_guzzle.data_collector.guzzle']) ? $this->services['csa_guzzle.data_collector.guzzle'] : $this->getCsaGuzzle_DataCollector_GuzzleService()) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->getSession_Storage_NativeService()) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \PrestaShopBundle\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \PrestaShopBundle\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->getMonolog_Logger_TranslationService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, array('autoescape' => 'name', 'debug' => true, 'strict_variables' => true, 'form_themes' => $this->parameters['twig.form.resources'], 'paths' => array(($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/Product') => 'Product', ($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm') => 'Twig', ($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters') => 'AdvancedParameters', ($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters') => 'ShopParameters'), 'exception_controller' => 'twig.controller.exception:showAction', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/app/templates'), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['translation_tools.translation.node_visitor']) ? $this->services['translation_tools.translation.node_visitor'] : $this->services['translation_tools.translation.node_visitor'] = new \PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, $d));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['prestashop.twig.extension.stringloader']) ? $this->services['prestashop.twig.extension.stringloader'] : $this->services['prestashop.twig.extension.stringloader'] = new \Twig_Extension_StringLoader()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['prestashop.twig.extension.layout']) ? $this->services['prestashop.twig.extension.layout'] : $this->getPrestashop_Twig_Extension_LayoutService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['prestashop.twig.extension.translation']) ? $this->services['prestashop.twig.extension.translation'] : $this->getPrestashop_Twig_Extension_TranslationService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['prestashop.twig.extension.data_formatter']) ? $this->services['prestashop.twig.extension.data_formatter'] : $this->services['prestashop.twig.extension.data_formatter'] = new \PrestaShopBundle\Twig\DataFormatterExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['prestashop.twig.extension.admin']) ? $this->services['prestashop.twig.extension.admin'] : $this->getPrestashop_Twig_Extension_AdminService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['prestashop.twig.extension.hook']) ? $this->services['prestashop.twig.extension.hook'] : $this->getPrestashop_Twig_Extension_HookService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['csa_guzzle.twig.extension']) ? $this->services['csa_guzzle.twig.extension'] : $this->services['csa_guzzle.twig.extension'] = new \Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }))));
        $instance->addGlobal('webpack_server', false);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->getValidator_BuilderService()) && false ?: '_'}->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'assets._version__default' shared service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy
     */
    protected function getAssets_VersionDefaultService()
    {
        return $this->services['assets._version__default'] = new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.7.0', '%s?%s');
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', ${($_ = isset($this->services['assets._version__default']) ? $this->services['assets._version__default'] : $this->getAssets_VersionDefaultService()) && false ?: '_'}, ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), array());
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('5h63hLfuDx', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('bdug1r4vHT', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('fpXxu468Kf', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : $this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : $this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'csa_guzzle.data_collector.guzzle' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\DataCollector\GuzzleCollector
     */
    protected function getCsaGuzzle_DataCollector_GuzzleService()
    {
        return $this->services['csa_guzzle.data_collector.guzzle'] = new \Csa\Bundle\GuzzleBundle\DataCollector\GuzzleCollector(${($_ = isset($this->services['csa_guzzle.subscriber.debug']) ? $this->services['csa_guzzle.subscriber.debug'] : $this->services['csa_guzzle.subscriber.debug'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\DebugSubscriber()) && false ?: '_'}, 65536);
    }

    /**
     * Gets the private 'csa_guzzle.subscriber.debug' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\DebugSubscriber
     */
    protected function getCsaGuzzle_Subscriber_DebugService()
    {
        return $this->services['csa_guzzle.subscriber.debug'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\DebugSubscriber();
    }

    /**
     * Gets the private 'csa_guzzle.twig.extension' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension
     */
    protected function getCsaGuzzle_Twig_ExtensionService()
    {
        return $this->services['csa_guzzle.twig.extension'] = new \Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension();
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor()) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'}, new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.adapter.security.admin']) ? $this->services['prestashop.adapter.security.admin'] : $this->getPrestashop_Adapter_Security_AdminService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.access_denied.listener']) ? $this->services['prestashop.access_denied.listener'] : $this->load('getPrestashop_AccessDenied_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.demo_mode_enabled.listener']) ? $this->services['prestashop.demo_mode_enabled.listener'] : $this->getPrestashop_DemoModeEnabled_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.user_locale.listener']) ? $this->services['prestashop.user_locale.listener'] : $this->getPrestashop_UserLocale_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 15);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.adapter.middleware.ssl']) ? $this->services['prestashop.adapter.middleware.ssl'] : $this->services['prestashop.adapter.middleware.ssl'] = new \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.tokenized_url_listener']) ? $this->services['prestashop.tokenized_url_listener'] : $this->getPrestashop_TokenizedUrlListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.multishop_command_listener']) ? $this->services['prestashop.multishop_command_listener'] : $this->load('getPrestashop_MultishopCommandListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleCommand'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console_very_verbose']) ? $this->services['monolog.handler.console_very_verbose'] : $this->getMonolog_Handler_ConsoleVeryVerboseService()) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console_very_verbose']) ? $this->services['monolog.handler.console_very_verbose'] : $this->getMonolog_Handler_ConsoleVeryVerboseService()) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('module.download', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.adapter.module.prestatrust.eventsubscriber']) ? $this->services['prestashop.adapter.module.prestatrust.eventsubscriber'] : $this->load('getPrestashop_Adapter_Module_Prestatrust_EventsubscriberService.php')) && false ?: '_'};
        }, 1 => 'onNewModule'), 0);
        $instance->addListener('module.install', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.adapter.module.tab.eventsubscriber']) ? $this->services['prestashop.adapter.module.tab.eventsubscriber'] : $this->load('getPrestashop_Adapter_Module_Tab_EventsubscriberService.php')) && false ?: '_'};
        }, 1 => 'onModuleInstall'), 0);
        $instance->addListener('module.uninstall', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.adapter.module.tab.eventsubscriber']) ? $this->services['prestashop.adapter.module.tab.eventsubscriber'] : $this->load('getPrestashop_Adapter_Module_Tab_EventsubscriberService.php')) && false ?: '_'};
        }, 1 => 'onModuleUninstall'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.dispatcher.legacy_hooks.subscriber']) ? $this->services['prestashop.dispatcher.legacy_hooks.subscriber'] : $this->getPrestashop_Dispatcher_LegacyHooks_SubscriberService()) && false ?: '_'};
        }, 1 => 'callActionDispatcherBeforeHook'), 100);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['prestashop.dispatcher.legacy_hooks.subscriber']) ? $this->services['prestashop.dispatcher.legacy_hooks.subscriber'] : $this->getPrestashop_Dispatcher_LegacyHooks_SubscriberService()) && false ?: '_'};
        }, 1 => 'callActionDispatcherAfterHook'), 255);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->load('getDebug_DumpListenerService.php')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ($this->targetDirs[3].'/app'), function () {
            return ${($_ = isset($this->services['debug.file_link_formatter.url_format']) ? $this->services['debug.file_link_formatter.url_format'] : $this->load('getDebug_FileLinkFormatter_UrlFormatService.php')) && false ?: '_'};
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.simple_role_voter']) ? $this->services['security.access.simple_role_voter'] : $this->services['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['prestashop.security.voter.product']) ? $this->services['prestashop.security.voter.product'] : $this->services['prestashop.security.voter.product'] = new \PrestaShopBundle\Security\Voter\PageVoter()) && false ?: '_'};
        }, 4), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')));
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('zv1997GhjixOanMRw2UYYiEsAdI7nKa41GuvgkYkI9KBTQC5JUqf3Fi5')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->services['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'});
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'ru-RU', ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['prestashop.handler.log']) ? $this->services['prestashop.handler.log'] : $this->services['prestashop.handler.log'] = new \PrestaShopBundle\Service\Log\LogHandler($this)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 200, 128 => 100, 16 => 400, 32 => 300, 256 => 100));

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console_very_verbose' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        $this->services['monolog.handler.console_very_verbose'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 250, 128 => 250, 256 => 100, 16 => 400, 32 => 300));

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console_very_verbose']) ? $this->services['monolog.handler.console_very_verbose'] : $this->getMonolog_Handler_ConsoleVeryVerboseService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, ($this->targetDirs[3].'/app'), true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))) && false ?: '_'};
        }, 1), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load('getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load('getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.zfhj2lw']) ? $this->services['security.request_matcher.zfhj2lw'] : $this->services['security.request_matcher.zfhj2lw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')) && false ?: '_'};
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'service_locator.sr6ctxe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_Sr6ctxeService()
    {
        return $this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array());
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0')) && false ?: '_'});
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'translation_tools.translation.node_visitor' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor
     */
    protected function getTranslationTools_Translation_NodeVisitorService()
    {
        return $this->services['translation_tools.translation.node_visitor'] = new \PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor();
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \PrestaShopBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \PrestaShopBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('prestashop.translation.database_loader' => function () {
            return ${($_ = isset($this->services['prestashop.translation.database_loader']) ? $this->services['prestashop.translation.database_loader'] : $this->load('getPrestashop_Translation_DatabaseLoaderService.php')) && false ?: '_'};
        }, 'translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()) && false ?: '_'};
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'ru-RU', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json'), 'prestashop.translation.database_loader' => array(0 => 'db')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')), 'tl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'en-US' => array(0 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminActions.en-US.xlf'), 1 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminAdvparametersFeature.en-US.xlf'), 2 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminAdvparametersHelp.en-US.xlf'), 3 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminAdvparametersNotification.en-US.xlf'), 4 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminCatalogFeature.en-US.xlf'), 5 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminCatalogHelp.en-US.xlf'), 6 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminCatalogNotification.en-US.xlf'), 7 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminDashboardFeature.en-US.xlf'), 8 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminDashboardHelp.en-US.xlf'), 9 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminDashboardNotification.en-US.xlf'), 10 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminDesignFeature.en-US.xlf'), 11 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminDesignHelp.en-US.xlf'), 12 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminDesignNotification.en-US.xlf'), 13 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminGlobal.en-US.xlf'), 14 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminGlobalError.en-US.xlf'), 15 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminInternationalFeature.en-US.xlf'), 16 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminInternationalHelp.en-US.xlf'), 17 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminInternationalNotification.en-US.xlf'), 18 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminLoginFeature.en-US.xlf'), 19 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminLoginNotification.en-US.xlf'), 20 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminModulesFeature.en-US.xlf'), 21 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminModulesHelp.en-US.xlf'), 22 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminModulesNotification.en-US.xlf'), 23 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNavigationFooter.en-US.xlf'), 24 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNavigationHeader.en-US.xlf'), 25 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNavigationMenu.en-US.xlf'), 26 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNavigationNotification.en-US.xlf'), 27 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNavigationSearch.en-US.xlf'), 28 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNotificationsError.en-US.xlf'), 29 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNotificationsInfo.en-US.xlf'), 30 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNotificationsSuccess.en-US.xlf'), 31 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminNotificationsWarning.en-US.xlf'), 32 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminOrderscustomersFeature.en-US.xlf'), 33 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminOrderscustomersHelp.en-US.xlf'), 34 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminOrderscustomersNotification.en-US.xlf'), 35 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminPaymentFeature.en-US.xlf'), 36 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminPaymentHelp.en-US.xlf'), 37 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminPaymentNotification.en-US.xlf'), 38 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminShippingFeature.en-US.xlf'), 39 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminShippingHelp.en-US.xlf'), 40 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminShippingNotification.en-US.xlf'), 41 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminShopparametersFeature.en-US.xlf'), 42 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminShopparametersHelp.en-US.xlf'), 43 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminShopparametersNotification.en-US.xlf'), 44 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminStatsFeature.en-US.xlf'), 45 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminStatsHelp.en-US.xlf'), 46 => ($this->targetDirs[3].'/app/Resources/translations/en-US/AdminStatsNotification.en-US.xlf'), 47 => ($this->targetDirs[3].'/app/Resources/translations/en-US/EmailsBody.en-US.xlf'), 48 => ($this->targetDirs[3].'/app/Resources/translations/en-US/EmailsSubject.en-US.xlf'), 49 => ($this->targetDirs[3].'/app/Resources/translations/en-US/Install.en-US.xlf'), 50 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesAdvertisingAdmin.en-US.xlf'), 51 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesAutoupgradeAdmin.en-US.xlf'), 52 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBannerAdmin.en-US.xlf'), 53 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBannerShop.en-US.xlf'), 54 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBestsellersAdmin.en-US.xlf'), 55 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBestsellersShop.en-US.xlf'), 56 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBlockreassuranceAdmin.en-US.xlf'), 57 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBlockreassuranceShop.en-US.xlf'), 58 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBrandlistAdmin.en-US.xlf'), 59 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesBrandlistShop.en-US.xlf'), 60 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCarriercomparisonAdmin.en-US.xlf'), 61 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCarriercomparisonShop.en-US.xlf'), 62 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCashondeliveryAdmin.en-US.xlf'), 63 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCashondeliveryShop.en-US.xlf'), 64 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCategoryproductsAdmin.en-US.xlf'), 65 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCategoryproductsShop.en-US.xlf'), 66 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCategorytreeAdmin.en-US.xlf'), 67 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCheckpaymentAdmin.en-US.xlf'), 68 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCheckpaymentShop.en-US.xlf'), 69 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesContactformAdmin.en-US.xlf'), 70 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesContactformShop.en-US.xlf'), 71 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesContactinfoAdmin.en-US.xlf'), 72 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesContactinfoShop.en-US.xlf'), 73 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCrosssellingAdmin.en-US.xlf'), 74 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCrosssellingShop.en-US.xlf'), 75 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCurrencyselectorAdmin.en-US.xlf'), 76 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCustomeraccountlinksAdmin.en-US.xlf'), 77 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCustomersigninAdmin.en-US.xlf'), 78 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesCustomtextAdmin.en-US.xlf'), 79 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDashactivityAdmin.en-US.xlf'), 80 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDashgoalsAdmin.en-US.xlf'), 81 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDashproductsAdmin.en-US.xlf'), 82 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDashtrendsAdmin.en-US.xlf'), 83 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDataprivacyAdmin.en-US.xlf'), 84 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDataprivacyShop.en-US.xlf'), 85 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDateofdeliveryAdmin.en-US.xlf'), 86 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesDateofdeliveryShop.en-US.xlf'), 87 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesEmailsubscriptionAdmin.en-US.xlf'), 88 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesEmailsubscriptionShop.en-US.xlf'), 89 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesFacetedsearchAdmin.en-US.xlf'), 90 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesFacetedsearchShop.en-US.xlf'), 91 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesFeaturedproductsAdmin.en-US.xlf'), 92 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesFeaturedproductsShop.en-US.xlf'), 93 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesFeederAdmin.en-US.xlf'), 94 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesGAnalyticsAdmin.en-US.xlf'), 95 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesGraphnvd3Admin.en-US.xlf'), 96 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesGridhtmlAdmin.en-US.xlf'), 97 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesImagesliderAdmin.en-US.xlf'), 98 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesLanguageselectorAdmin.en-US.xlf'), 99 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesLegalcomplianceAdmin.en-US.xlf'), 100 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesLegalcomplianceShop.en-US.xlf'), 101 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesLinklistAdmin.en-US.xlf'), 102 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesLinklistShop.en-US.xlf'), 103 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesLivetranslationAdmin.en-US.xlf'), 104 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesLivetranslationShop.en-US.xlf'), 105 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesMailalertsAdmin.en-US.xlf'), 106 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesMailalertsShop.en-US.xlf'), 107 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesMainmenuAdmin.en-US.xlf'), 108 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesNewproductsAdmin.en-US.xlf'), 109 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesNewproductsShop.en-US.xlf'), 110 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesNewsletterAdmin.en-US.xlf'), 111 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesPagesnotfoundAdmin.en-US.xlf'), 112 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesProductinfoAdmin.en-US.xlf'), 113 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesPscleanerAdmin.en-US.xlf'), 114 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesReminderAdmin.en-US.xlf'), 115 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesRssfeedAdmin.en-US.xlf'), 116 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesRssfeedShop.en-US.xlf'), 117 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSearchbarAdmin.en-US.xlf'), 118 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSearchbarShop.en-US.xlf'), 119 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSekeywordsAdmin.en-US.xlf'), 120 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSharebuttonsAdmin.en-US.xlf'), 121 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSharebuttonsShop.en-US.xlf'), 122 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesShoppingcartAdmin.en-US.xlf'), 123 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSocialfollowAdmin.en-US.xlf'), 124 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSocialfollowShop.en-US.xlf'), 125 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSpecialsAdmin.en-US.xlf'), 126 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSpecialsShop.en-US.xlf'), 127 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsbestcategoriesAdmin.en-US.xlf'), 128 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsbestcustomersAdmin.en-US.xlf'), 129 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsbestmanufacturersAdmin.en-US.xlf'), 130 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsbestproductsAdmin.en-US.xlf'), 131 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsbestsuppliersAdmin.en-US.xlf'), 132 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsbestvouchersAdmin.en-US.xlf'), 133 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatscarrierAdmin.en-US.xlf'), 134 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatscatalogAdmin.en-US.xlf'), 135 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatscheckupAdmin.en-US.xlf'), 136 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsdataAdmin.en-US.xlf'), 137 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsequipmentAdmin.en-US.xlf'), 138 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsforecastAdmin.en-US.xlf'), 139 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsliveAdmin.en-US.xlf'), 140 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsnewsletterAdmin.en-US.xlf'), 141 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsoriginAdmin.en-US.xlf'), 142 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatspersonalinfosAdmin.en-US.xlf'), 143 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsproductAdmin.en-US.xlf'), 144 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsregistrationsAdmin.en-US.xlf'), 145 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatssalesAdmin.en-US.xlf'), 146 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatssearchAdmin.en-US.xlf'), 147 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsstockAdmin.en-US.xlf'), 148 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesStatsvisitsAdmin.en-US.xlf'), 149 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSupplierlistAdmin.en-US.xlf'), 150 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesSupplierlistShop.en-US.xlf'), 151 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesTrackingfrontAdmin.en-US.xlf'), 152 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesTrackingfrontShop.en-US.xlf'), 153 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesViewedproductAdmin.en-US.xlf'), 154 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesViewedproductShop.en-US.xlf'), 155 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesWelcomeAdmin.en-US.xlf'), 156 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesWirepaymentAdmin.en-US.xlf'), 157 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ModulesWirepaymentShop.en-US.xlf'), 158 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopDemoCatalog.en-US.xlf'), 159 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopFormsErrors.en-US.xlf'), 160 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopFormsHelp.en-US.xlf'), 161 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopFormsLabels.en-US.xlf'), 162 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopNavigation.en-US.xlf'), 163 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopNotificationsError.en-US.xlf'), 164 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopNotificationsInfo.en-US.xlf'), 165 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopNotificationsSuccess.en-US.xlf'), 166 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopNotificationsWarning.en-US.xlf'), 167 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopPdf.en-US.xlf'), 168 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopThemeActions.en-US.xlf'), 169 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopThemeCatalog.en-US.xlf'), 170 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopThemeCheckout.en-US.xlf'), 171 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopThemeCustomeraccount.en-US.xlf'), 172 => ($this->targetDirs[3].'/app/Resources/translations/en-US/ShopThemeGlobal.en-US.xlf'), 173 => ($this->targetDirs[3].'/app/Resources/translations/en-US/messages.en-US.xlf')), 'ru-RU' => array(0 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminActions.ru-RU.xlf'), 1 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminAdvparametersFeature.ru-RU.xlf'), 2 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminAdvparametersHelp.ru-RU.xlf'), 3 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminAdvparametersNotification.ru-RU.xlf'), 4 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminCatalogFeature.ru-RU.xlf'), 5 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminCatalogHelp.ru-RU.xlf'), 6 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminCatalogNotification.ru-RU.xlf'), 7 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminDashboardFeature.ru-RU.xlf'), 8 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminDashboardHelp.ru-RU.xlf'), 9 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminDashboardNotification.ru-RU.xlf'), 10 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminDesignFeature.ru-RU.xlf'), 11 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminDesignHelp.ru-RU.xlf'), 12 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminDesignNotification.ru-RU.xlf'), 13 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminGlobal.ru-RU.xlf'), 14 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminGlobalError.ru-RU.xlf'), 15 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminInternationalFeature.ru-RU.xlf'), 16 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminInternationalHelp.ru-RU.xlf'), 17 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminInternationalNotification.ru-RU.xlf'), 18 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminLoginFeature.ru-RU.xlf'), 19 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminLoginNotification.ru-RU.xlf'), 20 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminModulesFeature.ru-RU.xlf'), 21 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminModulesHelp.ru-RU.xlf'), 22 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminModulesNotification.ru-RU.xlf'), 23 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNavigationFooter.ru-RU.xlf'), 24 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNavigationHeader.ru-RU.xlf'), 25 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNavigationMenu.ru-RU.xlf'), 26 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNavigationNotification.ru-RU.xlf'), 27 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNavigationSearch.ru-RU.xlf'), 28 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNotificationsError.ru-RU.xlf'), 29 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNotificationsInfo.ru-RU.xlf'), 30 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNotificationsSuccess.ru-RU.xlf'), 31 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminNotificationsWarning.ru-RU.xlf'), 32 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminOrderscustomersFeature.ru-RU.xlf'), 33 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminOrderscustomersHelp.ru-RU.xlf'), 34 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminOrderscustomersNotification.ru-RU.xlf'), 35 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminPaymentFeature.ru-RU.xlf'), 36 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminPaymentHelp.ru-RU.xlf'), 37 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminPaymentNotification.ru-RU.xlf'), 38 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminShippingFeature.ru-RU.xlf'), 39 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminShippingHelp.ru-RU.xlf'), 40 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminShippingNotification.ru-RU.xlf'), 41 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminShopparametersFeature.ru-RU.xlf'), 42 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminShopparametersHelp.ru-RU.xlf'), 43 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminShopparametersNotification.ru-RU.xlf'), 44 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminStatsFeature.ru-RU.xlf'), 45 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminStatsHelp.ru-RU.xlf'), 46 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/AdminStatsNotification.ru-RU.xlf'), 47 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/EmailsBody.ru-RU.xlf'), 48 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/EmailsSubject.ru-RU.xlf'), 49 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/Install.ru-RU.xlf'), 50 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesAdvertisingAdmin.ru-RU.xlf'), 51 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesAutoupgradeAdmin.ru-RU.xlf'), 52 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBannerAdmin.ru-RU.xlf'), 53 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBannerShop.ru-RU.xlf'), 54 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBestsellersAdmin.ru-RU.xlf'), 55 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBestsellersShop.ru-RU.xlf'), 56 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBlockreassuranceAdmin.ru-RU.xlf'), 57 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBlockreassuranceShop.ru-RU.xlf'), 58 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBrandlistAdmin.ru-RU.xlf'), 59 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesBrandlistShop.ru-RU.xlf'), 60 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCarriercomparisonAdmin.ru-RU.xlf'), 61 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCarriercomparisonShop.ru-RU.xlf'), 62 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCashondeliveryAdmin.ru-RU.xlf'), 63 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCashondeliveryShop.ru-RU.xlf'), 64 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCategoryproductsAdmin.ru-RU.xlf'), 65 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCategoryproductsShop.ru-RU.xlf'), 66 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCategorytreeAdmin.ru-RU.xlf'), 67 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCheckpaymentAdmin.ru-RU.xlf'), 68 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCheckpaymentShop.ru-RU.xlf'), 69 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesContactformAdmin.ru-RU.xlf'), 70 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesContactformShop.ru-RU.xlf'), 71 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesContactinfoAdmin.ru-RU.xlf'), 72 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesContactinfoShop.ru-RU.xlf'), 73 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCrosssellingAdmin.ru-RU.xlf'), 74 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCrosssellingShop.ru-RU.xlf'), 75 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCurrencyselectorAdmin.ru-RU.xlf'), 76 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCustomeraccountlinksAdmin.ru-RU.xlf'), 77 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCustomersigninAdmin.ru-RU.xlf'), 78 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesCustomtextAdmin.ru-RU.xlf'), 79 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDashactivityAdmin.ru-RU.xlf'), 80 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDashgoalsAdmin.ru-RU.xlf'), 81 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDashproductsAdmin.ru-RU.xlf'), 82 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDashtrendsAdmin.ru-RU.xlf'), 83 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDataprivacyAdmin.ru-RU.xlf'), 84 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDataprivacyShop.ru-RU.xlf'), 85 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDateofdeliveryAdmin.ru-RU.xlf'), 86 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesDateofdeliveryShop.ru-RU.xlf'), 87 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesEmailsubscriptionAdmin.ru-RU.xlf'), 88 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesEmailsubscriptionShop.ru-RU.xlf'), 89 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesFacetedsearchAdmin.ru-RU.xlf'), 90 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesFacetedsearchShop.ru-RU.xlf'), 91 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesFeaturedproductsAdmin.ru-RU.xlf'), 92 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesFeaturedproductsShop.ru-RU.xlf'), 93 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesFeederAdmin.ru-RU.xlf'), 94 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesGAnalyticsAdmin.ru-RU.xlf'), 95 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesGraphnvd3Admin.ru-RU.xlf'), 96 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesGridhtmlAdmin.ru-RU.xlf'), 97 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesImagesliderAdmin.ru-RU.xlf'), 98 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesLanguageselectorAdmin.ru-RU.xlf'), 99 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesLegalcomplianceAdmin.ru-RU.xlf'), 100 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesLegalcomplianceShop.ru-RU.xlf'), 101 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesLinklistAdmin.ru-RU.xlf'), 102 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesLinklistShop.ru-RU.xlf'), 103 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesLivetranslationAdmin.ru-RU.xlf'), 104 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesLivetranslationShop.ru-RU.xlf'), 105 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesMailalertsAdmin.ru-RU.xlf'), 106 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesMailalertsShop.ru-RU.xlf'), 107 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesMainmenuAdmin.ru-RU.xlf'), 108 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesNewproductsAdmin.ru-RU.xlf'), 109 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesNewproductsShop.ru-RU.xlf'), 110 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesNewsletterAdmin.ru-RU.xlf'), 111 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesPagesnotfoundAdmin.ru-RU.xlf'), 112 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesProductinfoAdmin.ru-RU.xlf'), 113 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesPscleanerAdmin.ru-RU.xlf'), 114 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesReminderAdmin.ru-RU.xlf'), 115 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesRssfeedAdmin.ru-RU.xlf'), 116 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesRssfeedShop.ru-RU.xlf'), 117 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSearchbarAdmin.ru-RU.xlf'), 118 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSearchbarShop.ru-RU.xlf'), 119 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSekeywordsAdmin.ru-RU.xlf'), 120 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSharebuttonsAdmin.ru-RU.xlf'), 121 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSharebuttonsShop.ru-RU.xlf'), 122 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesShoppingcartAdmin.ru-RU.xlf'), 123 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSocialfollowAdmin.ru-RU.xlf'), 124 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSocialfollowShop.ru-RU.xlf'), 125 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSpecialsAdmin.ru-RU.xlf'), 126 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSpecialsShop.ru-RU.xlf'), 127 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsbestcategoriesAdmin.ru-RU.xlf'), 128 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsbestcustomersAdmin.ru-RU.xlf'), 129 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsbestmanufacturersAdmin.ru-RU.xlf'), 130 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsbestproductsAdmin.ru-RU.xlf'), 131 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsbestsuppliersAdmin.ru-RU.xlf'), 132 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsbestvouchersAdmin.ru-RU.xlf'), 133 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatscarrierAdmin.ru-RU.xlf'), 134 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatscatalogAdmin.ru-RU.xlf'), 135 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatscheckupAdmin.ru-RU.xlf'), 136 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsdataAdmin.ru-RU.xlf'), 137 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsequipmentAdmin.ru-RU.xlf'), 138 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsforecastAdmin.ru-RU.xlf'), 139 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsliveAdmin.ru-RU.xlf'), 140 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsnewsletterAdmin.ru-RU.xlf'), 141 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsoriginAdmin.ru-RU.xlf'), 142 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatspersonalinfosAdmin.ru-RU.xlf'), 143 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsproductAdmin.ru-RU.xlf'), 144 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsregistrationsAdmin.ru-RU.xlf'), 145 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatssalesAdmin.ru-RU.xlf'), 146 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatssearchAdmin.ru-RU.xlf'), 147 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsstockAdmin.ru-RU.xlf'), 148 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesStatsvisitsAdmin.ru-RU.xlf'), 149 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSupplierlistAdmin.ru-RU.xlf'), 150 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesSupplierlistShop.ru-RU.xlf'), 151 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesTrackingfrontAdmin.ru-RU.xlf'), 152 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesTrackingfrontShop.ru-RU.xlf'), 153 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesViewedproductAdmin.ru-RU.xlf'), 154 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesViewedproductShop.ru-RU.xlf'), 155 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesWelcomeAdmin.ru-RU.xlf'), 156 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesWirepaymentAdmin.ru-RU.xlf'), 157 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ModulesWirepaymentShop.ru-RU.xlf'), 158 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopDemoCatalog.ru-RU.xlf'), 159 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopFormsErrors.ru-RU.xlf'), 160 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopFormsHelp.ru-RU.xlf'), 161 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopFormsLabels.ru-RU.xlf'), 162 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopNavigation.ru-RU.xlf'), 163 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopNotificationsError.ru-RU.xlf'), 164 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopNotificationsInfo.ru-RU.xlf'), 165 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopNotificationsSuccess.ru-RU.xlf'), 166 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopNotificationsWarning.ru-RU.xlf'), 167 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopPdf.ru-RU.xlf'), 168 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopThemeActions.ru-RU.xlf'), 169 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopThemeCatalog.ru-RU.xlf'), 170 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopThemeCheckout.ru-RU.xlf'), 171 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopThemeCustomeraccount.ru-RU.xlf'), 172 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/ShopThemeGlobal.ru-RU.xlf'), 173 => ($this->targetDirs[3].'/app/Resources/translations/ru-RU/messages.ru-RU.xlf')), 'uk-UA' => array(0 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminActions.uk-UA.xlf'), 1 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminAdvparametersFeature.uk-UA.xlf'), 2 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminAdvparametersHelp.uk-UA.xlf'), 3 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminAdvparametersNotification.uk-UA.xlf'), 4 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminCatalogFeature.uk-UA.xlf'), 5 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminCatalogHelp.uk-UA.xlf'), 6 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminCatalogNotification.uk-UA.xlf'), 7 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminDashboardFeature.uk-UA.xlf'), 8 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminDashboardHelp.uk-UA.xlf'), 9 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminDashboardNotification.uk-UA.xlf'), 10 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminDesignFeature.uk-UA.xlf'), 11 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminDesignHelp.uk-UA.xlf'), 12 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminDesignNotification.uk-UA.xlf'), 13 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminGlobal.uk-UA.xlf'), 14 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminGlobalError.uk-UA.xlf'), 15 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminInternationalFeature.uk-UA.xlf'), 16 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminInternationalHelp.uk-UA.xlf'), 17 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminInternationalNotification.uk-UA.xlf'), 18 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminLoginFeature.uk-UA.xlf'), 19 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminLoginNotification.uk-UA.xlf'), 20 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminModulesFeature.uk-UA.xlf'), 21 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminModulesHelp.uk-UA.xlf'), 22 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminModulesNotification.uk-UA.xlf'), 23 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNavigationFooter.uk-UA.xlf'), 24 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNavigationHeader.uk-UA.xlf'), 25 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNavigationMenu.uk-UA.xlf'), 26 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNavigationNotification.uk-UA.xlf'), 27 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNavigationSearch.uk-UA.xlf'), 28 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNotificationsError.uk-UA.xlf'), 29 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNotificationsInfo.uk-UA.xlf'), 30 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNotificationsSuccess.uk-UA.xlf'), 31 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminNotificationsWarning.uk-UA.xlf'), 32 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminOrderscustomersFeature.uk-UA.xlf'), 33 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminOrderscustomersHelp.uk-UA.xlf'), 34 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminOrderscustomersNotification.uk-UA.xlf'), 35 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminPaymentFeature.uk-UA.xlf'), 36 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminPaymentHelp.uk-UA.xlf'), 37 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminPaymentNotification.uk-UA.xlf'), 38 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminShippingFeature.uk-UA.xlf'), 39 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminShippingHelp.uk-UA.xlf'), 40 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminShippingNotification.uk-UA.xlf'), 41 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminShopparametersFeature.uk-UA.xlf'), 42 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminShopparametersHelp.uk-UA.xlf'), 43 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminShopparametersNotification.uk-UA.xlf'), 44 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminStatsFeature.uk-UA.xlf'), 45 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminStatsHelp.uk-UA.xlf'), 46 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/AdminStatsNotification.uk-UA.xlf'), 47 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/EmailsBody.uk-UA.xlf'), 48 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/EmailsSubject.uk-UA.xlf'), 49 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/Install.uk-UA.xlf'), 50 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesAdvertisingAdmin.uk-UA.xlf'), 51 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesAutoupgradeAdmin.uk-UA.xlf'), 52 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBannerAdmin.uk-UA.xlf'), 53 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBannerShop.uk-UA.xlf'), 54 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBestsellersAdmin.uk-UA.xlf'), 55 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBestsellersShop.uk-UA.xlf'), 56 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBlockreassuranceAdmin.uk-UA.xlf'), 57 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBlockreassuranceShop.uk-UA.xlf'), 58 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBrandlistAdmin.uk-UA.xlf'), 59 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesBrandlistShop.uk-UA.xlf'), 60 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCarriercomparisonAdmin.uk-UA.xlf'), 61 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCarriercomparisonShop.uk-UA.xlf'), 62 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCashondeliveryAdmin.uk-UA.xlf'), 63 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCashondeliveryShop.uk-UA.xlf'), 64 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCategoryproductsAdmin.uk-UA.xlf'), 65 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCategoryproductsShop.uk-UA.xlf'), 66 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCategorytreeAdmin.uk-UA.xlf'), 67 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCheckpaymentAdmin.uk-UA.xlf'), 68 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCheckpaymentShop.uk-UA.xlf'), 69 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesContactformAdmin.uk-UA.xlf'), 70 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesContactformShop.uk-UA.xlf'), 71 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesContactinfoAdmin.uk-UA.xlf'), 72 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesContactinfoShop.uk-UA.xlf'), 73 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCrosssellingAdmin.uk-UA.xlf'), 74 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCrosssellingShop.uk-UA.xlf'), 75 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCurrencyselectorAdmin.uk-UA.xlf'), 76 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCustomeraccountlinksAdmin.uk-UA.xlf'), 77 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCustomersigninAdmin.uk-UA.xlf'), 78 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesCustomtextAdmin.uk-UA.xlf'), 79 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDashactivityAdmin.uk-UA.xlf'), 80 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDashgoalsAdmin.uk-UA.xlf'), 81 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDashproductsAdmin.uk-UA.xlf'), 82 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDashtrendsAdmin.uk-UA.xlf'), 83 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDataprivacyAdmin.uk-UA.xlf'), 84 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDataprivacyShop.uk-UA.xlf'), 85 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDateofdeliveryAdmin.uk-UA.xlf'), 86 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesDateofdeliveryShop.uk-UA.xlf'), 87 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesEmailsubscriptionAdmin.uk-UA.xlf'), 88 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesEmailsubscriptionShop.uk-UA.xlf'), 89 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesFacetedsearchAdmin.uk-UA.xlf'), 90 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesFacetedsearchShop.uk-UA.xlf'), 91 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesFeaturedproductsAdmin.uk-UA.xlf'), 92 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesFeaturedproductsShop.uk-UA.xlf'), 93 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesFeederAdmin.uk-UA.xlf'), 94 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesGAnalyticsAdmin.uk-UA.xlf'), 95 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesGraphnvd3Admin.uk-UA.xlf'), 96 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesGridhtmlAdmin.uk-UA.xlf'), 97 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesImagesliderAdmin.uk-UA.xlf'), 98 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesLanguageselectorAdmin.uk-UA.xlf'), 99 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesLegalcomplianceAdmin.uk-UA.xlf'), 100 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesLegalcomplianceShop.uk-UA.xlf'), 101 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesLinklistAdmin.uk-UA.xlf'), 102 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesLinklistShop.uk-UA.xlf'), 103 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesLivetranslationAdmin.uk-UA.xlf'), 104 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesLivetranslationShop.uk-UA.xlf'), 105 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesMailalertsAdmin.uk-UA.xlf'), 106 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesMailalertsShop.uk-UA.xlf'), 107 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesMainmenuAdmin.uk-UA.xlf'), 108 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesNewproductsAdmin.uk-UA.xlf'), 109 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesNewproductsShop.uk-UA.xlf'), 110 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesNewsletterAdmin.uk-UA.xlf'), 111 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesPagesnotfoundAdmin.uk-UA.xlf'), 112 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesProductinfoAdmin.uk-UA.xlf'), 113 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesPscleanerAdmin.uk-UA.xlf'), 114 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesReminderAdmin.uk-UA.xlf'), 115 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesRssfeedAdmin.uk-UA.xlf'), 116 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesRssfeedShop.uk-UA.xlf'), 117 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSearchbarAdmin.uk-UA.xlf'), 118 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSearchbarShop.uk-UA.xlf'), 119 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSekeywordsAdmin.uk-UA.xlf'), 120 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSharebuttonsAdmin.uk-UA.xlf'), 121 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSharebuttonsShop.uk-UA.xlf'), 122 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesShoppingcartAdmin.uk-UA.xlf'), 123 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSocialfollowAdmin.uk-UA.xlf'), 124 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSocialfollowShop.uk-UA.xlf'), 125 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSpecialsAdmin.uk-UA.xlf'), 126 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSpecialsShop.uk-UA.xlf'), 127 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsbestcategoriesAdmin.uk-UA.xlf'), 128 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsbestcustomersAdmin.uk-UA.xlf'), 129 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsbestmanufacturersAdmin.uk-UA.xlf'), 130 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsbestproductsAdmin.uk-UA.xlf'), 131 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsbestsuppliersAdmin.uk-UA.xlf'), 132 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsbestvouchersAdmin.uk-UA.xlf'), 133 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatscarrierAdmin.uk-UA.xlf'), 134 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatscatalogAdmin.uk-UA.xlf'), 135 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatscheckupAdmin.uk-UA.xlf'), 136 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsdataAdmin.uk-UA.xlf'), 137 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsequipmentAdmin.uk-UA.xlf'), 138 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsforecastAdmin.uk-UA.xlf'), 139 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsliveAdmin.uk-UA.xlf'), 140 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsnewsletterAdmin.uk-UA.xlf'), 141 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsoriginAdmin.uk-UA.xlf'), 142 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatspersonalinfosAdmin.uk-UA.xlf'), 143 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsproductAdmin.uk-UA.xlf'), 144 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsregistrationsAdmin.uk-UA.xlf'), 145 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatssalesAdmin.uk-UA.xlf'), 146 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatssearchAdmin.uk-UA.xlf'), 147 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsstockAdmin.uk-UA.xlf'), 148 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesStatsvisitsAdmin.uk-UA.xlf'), 149 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSupplierlistAdmin.uk-UA.xlf'), 150 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesSupplierlistShop.uk-UA.xlf'), 151 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesTrackingfrontAdmin.uk-UA.xlf'), 152 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesTrackingfrontShop.uk-UA.xlf'), 153 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesViewedproductAdmin.uk-UA.xlf'), 154 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesViewedproductShop.uk-UA.xlf'), 155 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesWelcomeAdmin.uk-UA.xlf'), 156 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesWirepaymentAdmin.uk-UA.xlf'), 157 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ModulesWirepaymentShop.uk-UA.xlf'), 158 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopDemoCatalog.uk-UA.xlf'), 159 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopFormsErrors.uk-UA.xlf'), 160 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopFormsHelp.uk-UA.xlf'), 161 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopFormsLabels.uk-UA.xlf'), 162 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopNavigation.uk-UA.xlf'), 163 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopNotificationsError.uk-UA.xlf'), 164 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopNotificationsInfo.uk-UA.xlf'), 165 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopNotificationsSuccess.uk-UA.xlf'), 166 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopNotificationsWarning.uk-UA.xlf'), 167 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopPdf.uk-UA.xlf'), 168 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopThemeActions.uk-UA.xlf'), 169 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopThemeCatalog.uk-UA.xlf'), 170 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopThemeCheckout.uk-UA.xlf'), 171 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopThemeCustomeraccount.uk-UA.xlf'), 172 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/ShopThemeGlobal.uk-UA.xlf'), 173 => ($this->targetDirs[3].'/app/Resources/translations/uk-UA/messages.uk-UA.xlf')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'default'));

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Twig\Loader\ChainLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Twig\Loader\ChainLoader();

        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ($this->targetDirs[3].'/app'));
        $a->addPath(($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/Product'), 'Product');
        $a->addPath(($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters'), 'AdvancedParameters');
        $a->addPath(($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters'), 'ShopParameters');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'/src/PrestaShopBundle/Resources/views'), 'PrestaShop');
        $a->addPath(($this->targetDirs[3].'/src/PrestaShopBundle/Resources/views'), '!PrestaShop');
        $a->addPath(($this->targetDirs[3].'/vendor/csa/guzzle-bundle/src/Resources/views'), 'CsaGuzzle');
        $a->addPath(($this->targetDirs[3].'/vendor/csa/guzzle-bundle/src/Resources/views'), '!CsaGuzzle');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '!Debug');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        $instance->addLoader(${($_ = isset($this->services['prestashop.twig.modules.loader']) ? $this->services['prestashop.twig.modules.loader'] : $this->getPrestashop_Twig_Modules_LoaderService()) && false ?: '_'});
        $instance->addLoader($a);

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('zv1997GhjixOanMRw2UYYiEsAdI7nKa41GuvgkYkI9KBTQC5JUqf3Fi5');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false)) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->getDoctrine_Orm_ValidatorInitializerService()) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}, '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'admin_page' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'router.resource' => false,
        'serializer.mapping.cache.file' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'doctrine.orm.proxy_dir' => false,
        'ps_root_dir' => false,
        'ps_config_dir' => false,
        'translations_dir' => false,
        'themes_translations_dir' => false,
        'themes_dir' => false,
        'prestashop.addons.api_client.verify_ssl' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'PrestaShopBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/PrestaShopBundle'),
                    'namespace' => 'PrestaShopBundle',
                ),
                'TranslationToolsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/prestashop/translationtools-bundle'),
                    'namespace' => 'PrestaShop\\TranslationToolsBundle',
                ),
                'CsaGuzzleBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/csa/guzzle-bundle/src'),
                    'namespace' => 'Csa\\Bundle\\GuzzleBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
            ); break;
            case 'admin_page': $value = ($this->targetDirs[3].'/app/../src/PrestaShopBundle/Resources/views/Admin'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/app/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appDevDebugProjectContainer.xml'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing_dev.yml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/app/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'ps_root_dir': $value = ($this->targetDirs[3].'/app/../'); break;
            case 'ps_config_dir': $value = ($this->targetDirs[3].'/app/../config'); break;
            case 'translations_dir': $value = ($this->targetDirs[3].'/app/Resources/translations'); break;
            case 'themes_translations_dir': $value = ($this->targetDirs[0].'/themes'); break;
            case 'themes_dir': $value = ($this->targetDirs[3].'/app/../themes'); break;
            case 'prestashop.addons.api_client.verify_ssl': $value = ($this->targetDirs[0].'/cacert.pem'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array(
        'adaptersecurityadminclass' => 'AdapterSecurityAdminClass',
    );

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'PrestaShopBundle' => 'PrestaShopBundle\\PrestaShopBundle',
                'TranslationToolsBundle' => 'PrestaShop\\TranslationToolsBundle\\TranslationToolsBundle',
                'CsaGuzzleBundle' => 'Csa\\Bundle\\GuzzleBundle\\CsaGuzzleBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'kernel.active_modules' => array(
                0 => 'contactform',
                1 => 'dashactivity',
                2 => 'dashtrends',
                3 => 'dashgoals',
                4 => 'dashproducts',
                5 => 'graphnvd3',
                6 => 'gridhtml',
                7 => 'ps_banner',
                8 => 'ps_categorytree',
                9 => 'ps_checkpayment',
                10 => 'ps_contactinfo',
                11 => 'ps_currencyselector',
                12 => 'ps_customeraccountlinks',
                13 => 'ps_customersignin',
                14 => 'ps_customtext',
                15 => 'ps_emailsubscription',
                16 => 'ps_facetedsearch',
                17 => 'ps_featuredproducts',
                18 => 'ps_imageslider',
                19 => 'ps_languageselector',
                20 => 'ps_linklist',
                21 => 'ps_mainmenu',
                22 => 'ps_searchbar',
                23 => 'ps_sharebuttons',
                24 => 'ps_shoppingcart',
                25 => 'ps_socialfollow',
                26 => 'ps_themecusto',
                27 => 'ps_wirepayment',
                28 => 'pagesnotfound',
                29 => 'sekeywords',
                30 => 'statsbestcategories',
                31 => 'statsbestcustomers',
                32 => 'statsbestproducts',
                33 => 'statsbestsuppliers',
                34 => 'statsbestvouchers',
                35 => 'statscarrier',
                36 => 'statscatalog',
                37 => 'statscheckup',
                38 => 'statsdata',
                39 => 'statsequipment',
                40 => 'statsforecast',
                41 => 'statslive',
                42 => 'statsnewsletter',
                43 => 'statsorigin',
                44 => 'statspersonalinfos',
                45 => 'statsproduct',
                46 => 'statsregistrations',
                47 => 'statssales',
                48 => 'statssearch',
                49 => 'statsstock',
                50 => 'statsvisits',
                51 => 'welcome',
                52 => 'gamification',
                53 => 'cronjobs',
                54 => 'psaddonsconnect',
                55 => 'blockreassurance',
                56 => 'menuleftside',
                57 => 'mobilesidebarmenu',
                58 => 'exportproducts',
            ),
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => false,
            'database_host' => 'localhost',
            'database_port' => '',
            'database_name' => 'prestashopnoski',
            'database_user' => 'u_prestashT',
            'database_password' => 'UUTu3GNz',
            'database_prefix' => 'os_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'localhost',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'zv1997GhjixOanMRw2UYYiEsAdI7nKa41GuvgkYkI9KBTQC5JUqf3Fi5',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2018-08-26',
            'locale' => 'ru-RU',
            'cookie_key' => 'cs5KLUO6i1GJcgwDMtavRMcUXVyr2VgkvAXFECrz5x2V5kkMCJMDMJz4',
            'cookie_iv' => 'NbRpa8Ry',
            'new_cookie_key' => 'def000006adaca9e1e4c9c732856b9b55f569d1966029a45d291ddf5a4157192ebf20b86b3110c27bc580fd4e48c8a49bfc953ed5c867d30068064718fb7cd1eb94045ee',
            'cache.driver' => 'array',
            'AdapterSecurityAdminClass' => 'PrestaShop\\PrestaShop\\Adapter\\Security\\Admin',
            'translator.class' => 'PrestaShopBundle\\Translation\\Translator',
            'translator.data_collector' => 'PrestaShopBundle\\Translation\\DataCollectorTranslator',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'zv1997GhjixOanMRw2UYYiEsAdI7nKa41GuvgkYkI9KBTQC5JUqf3Fi5',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'ru-RU',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console_very_verbose' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.legacy' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'app',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'prestashop.security.voter.product.class' => 'PrestaShopBundle\\Security\\Voter\\PageVoter',
            'prestashop.addons.prestatrust.enabled' => true,
            'prestashop.addons.api_client.ttl' => 300,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.validator' => array(
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'prestashop.hooks_collector' => array(
                    0 => 'ps.hooks_collector',
                    1 => '@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig',
                ),
                'csa_guzzle.data_collector.guzzle' => array(
                    0 => 'guzzle',
                    1 => 'CsaGuzzleBundle:Collector:guzzle',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@PrestaShop/Admin/WebProfiler/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'sensio_distribution.security_checker.command' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
            ),
        );
    }
}
