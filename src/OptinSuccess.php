<?php

namespace MailOptin\Libsodium;

use MailOptin\Core\Admin\Customizer\OptinForm\AbstractCustomizer;
use MailOptin\Core\Admin\Customizer\OptinForm\Customizer;
use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerControls;

class OptinSuccess
{
    /** @var string ID of optin form success customizer section. */
    public static $success_section_id = 'mo_success_section';

    public static function init()
    {
        add_action('mo_optin_after_integration_customizer_section', [__CLASS__, 'optin_success_panel']);
        add_action('mo_optin_customizer_settings', [__CLASS__, 'optin_success_settings'], 10, 3);
        add_action('mo_optin_after_customizer_controls', [__CLASS__, 'optin_success_controls'], 10, 4);

        add_filter('mo_optin_customizer_sections_ids', [__CLASS__, 'whitelist_optin_success_panel']);
    }

    public static function whitelist_optin_success_panel($panels)
    {
        $panels[] = self::$success_section_id;

        return $panels;
    }

    /**
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param Customizer $customizerClassInstance
     */
    public static function optin_success_settings($wp_customize, $option_prefix, $customizerClassInstance)
    {
        $success_settings_args = apply_filters("mo_optin_form_customizer_success_settings",
            array(
                'success_action' => array(
                    'default' => (new AbstractCustomizer())->customizer_defaults['success_action'],
                    'type' => 'option',
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'postMessage',
                ),
                'redirect_url_value' => array(
                    'default' => '',
                    'type' => 'option',
                    'sanitize_callback' => 'esc_url',
                    'transport' => 'postMessage',
                ),
                'download_file_value' => array(
                    'default' => '',
                    'type' => 'option',
                    'sanitize_callback' => 'esc_url',
                    'transport' => 'postMessage',
                )
            ),
            $customizerClassInstance
        );

        foreach ($success_settings_args as $id => $args) {
            $wp_customize->add_setting($option_prefix . '[' . $id . ']', $args);
        }

        do_action('mo_optin_after_success_customizer_settings', $wp_customize, $success_settings_args);
    }

    /**
     * @param CustomizerControls $instance
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param Customizer $customizerClassInstance
     */
    public static function optin_success_controls($instance, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        $success_controls_args = apply_filters(
            "mo_optin_form_customizer_success_controls",
            array(
                'success_action' => apply_filters('mo_optin_form_customizer_success_action_args', array(
                        'type' => 'select',
                        'choices' => [
                            'no_action' => __('No action', 'mailoptin'),
                            'close_optin' => __('Close optin', 'mailoptin'),
                            'close_optin_reload_page' => __('Close optin and reload page', 'mailoptin'),
                            'redirect_url' => __('Redirect to URL', 'mailoptin'),
                            'download_file' => __('Download File', 'mailoptin')
                        ],
                        'label' => __('Success Action', 'mailoptin'),
                        'section' => self::$success_section_id,
                        'settings' => $option_prefix . '[success_action]',
                        'description' => __('What to do after user has successfully subscribe or opt-in to this campaign.'),
                        'priority' => 10,
                    )
                ),
                'redirect_url_value' => apply_filters('mo_optin_form_customizer_redirect_url_value_args', array(
                        'type' => 'text',
                        'label' => __('Redirect URL', 'mailoptin'),
                        'section' => self::$success_section_id,
                        'settings' => $option_prefix . '[redirect_url_value]',
                        'priority' => 20,
                        'description' => __('Specify a URL to redirect users to after opt-in. Must begin with http or https.', 'mailoptin')
                    )
                ),
                'download_file_value' => apply_filters('mo_optin_form_customizer_download_url_value_args', array(
                        'type' => 'text',
                        'label' => __('Download File URL', 'mailoptin'),
                        'section' => self::$success_section_id,
                        'settings' => $option_prefix . '[download_file_value]',
                        'priority' => 30,
                        'description' => __('Specify the URL of the file that users will download after opt-in. Must begin with http or https.', 'mailoptin')
                    )
                ),
            ),
            $wp_customize,
            $option_prefix,
            $customizerClassInstance
        );

        do_action('mailoptin_before_success_controls_addition');

        foreach ($success_controls_args as $id => $args) {
            if (is_object($args)) {
                $wp_customize->add_control($args);
            } else {
                $wp_customize->add_control($option_prefix . '[' . $id . ']', $args);
            }
        }

        do_action('mailoptin_after_success_controls_addition');
    }

    /**
     * @param \WP_Customize_Manager $wp_customize
     */
    public static function optin_success_panel($wp_customize)
    {
        if (!apply_filters('mo_optin_customizer_disable_success_section', false)) {
            $wp_customize->add_section(self::$success_section_id, array(
                    'title' => __('After Conversion', 'mailoptin'),
                    'priority' => 35,
                )
            );
        }
    }
}