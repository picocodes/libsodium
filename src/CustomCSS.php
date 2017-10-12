<?php

namespace MailOptin\Libsodium;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Ace_Editor_Control;
use MailOptin\Core\Repositories\OptinCampaignsRepository;

class CustomCSS
{
    public function __construct()
    {
        add_filter('mo_optin_form_customizer_design_controls', array($this, 'add_control'), 10, 4);
    }

    /**
     * Add custom form css to customizer.
     *
     * @param $wp_customize
     * @param $option_prefix
     * @param $customizerClassInstance
     *
     * @return mixed
     */
    public function add_control($design_controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        $optin_uuid = OptinCampaignsRepository::get_optin_campaign_uuid($customizerClassInstance->optin_campaign_id);

        $design_controls['form_custom_css'] = new WP_Customize_Ace_Editor_Control(
            $wp_customize,
            $option_prefix . '[form_custom_css]',
            apply_filters('mo_optin_form_customizer_success_js_script_args', array(
                    'editor_id' => 'form-custom-css',
                    'language' => 'css',
                    'type' => 'textarea',
                    'label' => __('Custom CSS', 'mailoptin'),
                    'section' => $customizerClassInstance->design_section_id,
                    'settings' => $option_prefix . '[form_custom_css]',
                    'description' => sprintf(
                        __('Adds custom CSS to your optin. Each of your custom CSS statements should be on its own line and be prefixed with: <strong>div#%s</strong>', 'mailoptin'),
                        $optin_uuid
                    ),
                    'priority' => 45,
                )
            )
        );

        return $design_controls;
    }

    /**
     * Singleton poop.
     *
     * @return CustomCSS|null
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