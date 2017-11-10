<?php

namespace MailOptin\Libsodium;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Ace_Editor_Control;
use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\OptinForm\AbstractCustomizer;
use MailOptin\Core\Admin\Customizer\OptinForm\Customizer;
use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerControls;

class AfterConversion
{
    public static function init()
    {
        add_filter('mo_optin_form_customizer_success_settings', [__CLASS__, 'after_conversion_settings'], 10, 4);
        add_filter('mo_optin_form_customizer_success_controls', [__CLASS__, 'after_conversion_controls'], 10, 4);
    }

    public static function after_conversion_settings($settings)
    {
        $settings['state_after_conversion'] = array(
            'default' => (new AbstractCustomizer())->customizer_defaults['state_after_conversion'],
            'type' => 'option',
            'transport' => 'postMessage',
        );

        return $settings;
    }

    /**
     * @param CustomizerControls $instance
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param Customizer $customizerClassInstance
     */
    public static function after_conversion_controls($controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        $controls['state_after_conversion'] = apply_filters('mo_optin_form_customizer_state_after_conversion_args', array(
                'type' => 'select',
                'label' => __('State After Conversion', 'mailoptin'),
                'section' => $customizerClassInstance->success_section_id,
                'settings' => $option_prefix . '[state_after_conversion]',
                'description' => sprintf(
                    __('Choose state of optin form to users who are already subscribed. %sLearn more%s', 'mailoptin'),
                    '<a target="_blank" href="#">', '</a>'
                ),
                'choices' => [
                    'success_message_shown' => __('Success Message Shown', 'mailoptin'),
                    'optin_form_hidden' => __('Optin Form Hidden', 'mailoptin'),
                    'optin_form_shown' => __('Optin Form Shown', 'mailoptin'),
                ],
                'priority' => 25,
            )
        );

        $controls['pass_lead_data_redirect_url'] = new WP_Customize_Toggle_Control(
            $wp_customize,
            $option_prefix . '[pass_lead_data_redirect_url]',
            apply_filters('mo_optin_form_customizer_pass_lead_data_redirect_url_args', array(
                    'label' => __('Pass Lead Data to Redirect URL', 'mailoptin'),
                    'description' => __('Enabling this will add lead name and email address as a query parameter to the redirect URL you specified above.', 'mailoptin'),
                    'section' => $customizerClassInstance->success_section_id,
                    'settings' => $option_prefix . '[pass_lead_data_redirect_url]',
                    'type' => 'light',
                    'priority' => 30,
                )
            )
        );

        $controls['success_js_script'] = new WP_Customize_Ace_Editor_Control(
            $wp_customize,
            $option_prefix . '[success_js_script]',
            apply_filters('mo_optin_form_customizer_success_js_script_args', array(
                    'editor_id' => 'success-js-script',
                    'label' => __('Success Triggered Script', 'mailoptin'),
                    'description' => sprintf(
                        __('Enter valid JavaScript code that will be triggered after every successful opt-in conversion. Please! do not include opening and closing %s&lt;script&gt;%s tag.', 'mailoptin'),
                        '<code>', '</code>'),
                    'section' => $customizerClassInstance->success_section_id,
                    'settings' => $option_prefix . '[success_js_script]',
                    'priority' => 50,
                )
            )
        );

        return $controls;
    }
}