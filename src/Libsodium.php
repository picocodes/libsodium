<?php

namespace MailOptin\Libsodium;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\Customizer as EmailTemplateCustomizer;
use MailOptin\Libsodium\LeadBank\LeadBank;
use MailOptin\Libsodium\PremiumTemplates\PremiumTemplates;

if (strpos(__FILE__, 'mailoptin/vendor') !== false) {
    // production url path to assets folder.
    define('MAILOPTIN_LIBSODIUM_ASSETS_URL', MAILOPTIN_URL . '../' . dirname(substr(__FILE__, strpos(__FILE__, 'mailoptin/vendor'))) . '/assets/');
} else {
    // dev url path to assets folder.
    define('MAILOPTIN_LIBSODIUM_ASSETS_URL', MAILOPTIN_URL . '../' . dirname(substr(__FILE__, strpos(__FILE__, 'mailoptin'))) . '/assets/');
}

class Libsodium
{
    public function __construct()
    {
        // this is at the top to define LibsodiumSettingsPage.
        LibsodiumSettingsPage::get_instance();

        if ( ! LibsodiumSettingsPage::mo_is_license_expired()) define('MAILOPTIN_DETACH_LIBSODIUM', true);

        if ( ! defined('MAILOPTIN_DETACH_LIBSODIUM')) return;

        add_filter('mailoptin_add_optin_email_campaign_limit', '__return_false');
        add_filter('mailoptin_add_new_email_campaign_limit', '__return_false');
        add_filter('mailoptin_disable_sidebar_ads', '__return_true');
        if (EDD_MO_ITEM_ID != '5591') {
            add_filter('mailoptin_enable_email_customizer_connections', '__return_true');
        }
        add_action('mailoptin_email_campaign_customizer_page_settings', array($this, 'add_email_customizer_settings'), 10, 4);
        add_action('mailoptin_email_campaign_customizer_settings_controls', array($this, 'add_email_customizer_control'), 10, 4);

        AfterConversion::init();
        CustomCSS::get_instance();
        Shortcodes\Init::init();
        DisplayRules::get_instance();
        DisplayEffects::get_instance();
        PremiumTemplates::get_instance();
    }

    public function init_old_pro()
    {
        // we need to check got this constant because it becomes undefined if license is expired.
        if ( ! defined('MAILOPTIN_DETACH_LIBSODIUM')) return;

        if ( ! defined('MAILOPTIN_OLD_PRO_PLUGIN_TYPE')) {
            define('MAILOPTIN_OLD_PRO_PLUGIN_TYPE', true);
        }
        add_filter('mailoptin_enable_advance_analytics', '__return_true');
        add_filter('mailoptin_enable_post_email_digest', '__return_true');
        add_filter('mailoptin_enable_leadbank', '__return_true');

        LeadBank::get_instance();
        OptinSchedule::get_instance();
        AdblockDetector::get_instance();
        NewVsReturningVisitors::get_instance();
        ReferrerDetection::get_instance();
        AutoResponder::get_instance();
        \MailOptin\AdvanceAnalytics\AdvanceAnalytics::get_instance();
    }

    public function init_old_agency()
    {
        // we need to check got this constant because it becomes undefined if license is expired.
        if ( ! defined('MAILOPTIN_DETACH_LIBSODIUM')) return;
        $this->init_old_pro();
        add_filter('mailoptin_enable_google_analytics', '__return_true');
        GoogleAnalytics::get_instance();
    }

    public function add_email_customizer_settings($settings)
    {
        $settings['remove_branding'] = array(
            'default'   => apply_filters('mailoptin_remove_branding_default', false),
            'type'      => 'option',
            'transport' => 'refresh',
        );

        return $settings;
    }


    /**
     * @param array $control
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param EmailTemplateCustomizer $customizerClassInstance
     *
     * @return mixed
     */
    public function add_email_customizer_control($control, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        $control['remove_branding'] = new WP_Customize_Toggle_Control(
            $wp_customize,
            $option_prefix . '[remove_branding]',
            apply_filters('mailoptin_customizer_settings_remove_branding_args', array(
                    'label'    => __('Remove MailOptin Branding', 'mailoptin'),
                    'section'  => $customizerClassInstance->campaign_settings_section_id,
                    'settings' => $option_prefix . '[remove_branding]',
                    'priority' => 90
                )
            )
        );

        return $control;
    }


    /**
     * Singleton poop.
     *
     * @return Libsodium|null
     */
    public static function get_instance()
    {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}