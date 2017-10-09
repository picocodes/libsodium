<?php

namespace MailOptin\Libsodium;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Ace_Editor_Control;
use MailOptin\Core\Admin\Customizer\OptinForm\Customizer;
use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerControls;

class AfterConversion
{
    public static function init()
    {
        add_filter('mo_optin_form_customizer_success_controls', [__CLASS__, 'after_conversion_controls'], 10, 4);
    }

    /**
     * @param CustomizerControls $instance
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param Customizer $customizerClassInstance
     */
    public static function after_conversion_controls($controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
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