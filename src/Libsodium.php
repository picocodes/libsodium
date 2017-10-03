<?php

namespace MailOptin\Libsodium;

define('MAILOPTIN_DETACH_LIBSODIUM', true);

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\Customizer as EmailTemplateCustomizer;
use MailOptin\Core\Admin\Customizer\OptinForm\Customizer as OptinCustomizer;

class Libsodium
{
    public function __construct()
    {
        LibsodiumSettingsPage::get_instance();
        OptinSuccess::init();

        add_filter('mailoptin_add_optin_email_campaign_limit', '__return_false');
        add_filter('mailoptin_add_new_email_campaign_limit', '__return_false');
        add_filter('mailoptin_lite_upgrade_more_optin_themes', '__return_false');
        add_filter('mailoptin_disable_sidebar_ads', '__return_true');

        add_action('mailoptin_email_campaign_customizer_page_settings', array($this, 'add_email_customizer_settings'), 10, 4);
        add_action('mailoptin_email_campaign_customizer_settings_controls', array($this, 'add_email_customizer_control'), 10, 4);
    }

    public function add_email_customizer_settings($settings)
    {
        $settings['remove_branding'] = array(
            'default' => apply_filters('mailoptin_remove_branding_default', false),
            'type' => 'option',
            'transport' => 'refresh',
        );

        return $settings;
    }


    /**
     * @param array $control
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param EmailTemplateCustomizer $customizerClassInstance
     * @return mixed
     */
    public function add_email_customizer_control($control, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        $control['remove_branding'] = new WP_Customize_Toggle_Control(
            $wp_customize,
            $option_prefix . '[remove_branding]',
            apply_filters('mailoptin_customizer_settings_remove_branding_args', array(
                    'label' => __('Remove MailOptin Branding', 'mailoptin'),
                    'section' => $customizerClassInstance->campaign_settings_section_id,
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