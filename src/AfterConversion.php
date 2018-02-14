<?php

namespace MailOptin\Libsodium;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Ace_Editor_Control;
use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\OptinForm\AbstractCustomizer;
use MailOptin\Core\Admin\Customizer\OptinForm\Customizer;
use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerControls;
use MailOptin\Core\PluginSettings\Settings;
use MailOptin\Core\Repositories\OptinCampaignsRepository;

class AfterConversion
{
    public static function init()
    {
        add_filter('mo_optin_form_customizer_success_settings', [__CLASS__, 'after_conversion_settings'], 10, 4);
        add_filter('mo_optin_form_customizer_success_controls', [__CLASS__, 'after_conversion_controls'], 10, 4);

        add_filter('mailoptin_settings_optin_campaign_settings_page', [__CLASS__, 'af_email_notification_settings']);
        add_action('mailoptin_track_conversions', [__CLASS__, 'af_send_email_notification'], 10, 2);
    }

    private static function af_default_email_body()
    {
        return sprintf(
            __("%s\n\n -- \n\nThis e-mail was sent by %s plugin on %s (%s)", 'mailoptin'), '[LEAD_DATA]', 'MailOptin', get_bloginfo('name'), site_url()
        );
    }

    private static function af_default_subject()
    {
        return __('[OPTIN_CAMPAIGN] - New Lead', 'mailoptin');
    }

    public function af_send_email_notification($lead_data, $optin_campaign_id)
    {
        $emails = OptinCampaignsRepository::get_customizer_value($optin_campaign_id, 'email_notification');
        $optin_campaign_name = OptinCampaignsRepository::get_optin_campaign_name($optin_campaign_id);

        if (strpos($emails, ',') !== false) {
            $emails = array_map('sanitize_email', explode(',', $emails));
        }

        $subject = Settings::instance()->afems_email_subject();
        if (empty($subject)) {
            $subject = self::af_default_subject();
        }

        $message_template = Settings::instance()->afems_message_contents();
        if (empty($message_template)) {
            $message_template = self::af_default_email_body();
        }

        $headers = [
            'Content-Type: text/html; charset=UTF-8',
        ];

        $message = '';

        if (is_array($lead_data)) {
            unset($lead_data['optin_campaign_id']);
            unset($lead_data['optin_campaign_type']);

            foreach ($lead_data as $key => $value) {
                $key = str_replace('_', ' ', $key);
                $message .= '<p>' . ucfirst($key) . ': ' . $value . '</p>';
            }
        }

        $subject = str_replace('[OPTIN_CAMPAIGN]', $optin_campaign_name, $subject);
        $message_template = str_replace('[LEAD_DATA]', $message, $message_template);

        wp_mail($emails, $subject, $message_template, $headers);
    }

    public static function af_email_notification_settings($settings)
    {
        $settings[] = [
            'section_title' => __('After Conversion Email Notification Settings', 'mailoptin'),
            'afems_email_subject' => [
                'type' => 'text',
                'label' => __('Email Subject', 'mailoptin'),
                'value' => self::af_default_subject(),
            ],
            'afems_message_contents' => [
                'type' => 'textarea',
                'rows' => 10,
                'value' => self::af_default_email_body(),
                'label' => __('Email Message', 'mailoptin')
            ]
        ];

        return $settings;
    }

    public static function after_conversion_settings($settings)
    {
        $settings['state_after_conversion'] = array(
            'default' => (new AbstractCustomizer())->customizer_defaults['state_after_conversion'],
            'type' => 'option',
            'transport' => 'postMessage',
        );

        $settings['email_notification'] = array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage'
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
        if (!in_array($customizerClassInstance->optin_campaign_type, ['bar', 'lightbox', 'slidein'])) {
            $controls['state_after_conversion'] = apply_filters('mo_optin_form_customizer_state_after_conversion_args', array(
                    'type' => 'select',
                    'label' => __('State After Conversion', 'mailoptin'),
                    'section' => $customizerClassInstance->success_section_id,
                    'settings' => $option_prefix . '[state_after_conversion]',
                    'description' => sprintf(
                        __('Choose state of optin form to users who are already subscribed. %sLearn more%s', 'mailoptin'),
                        '<a target="_blank" href="https://mailoptin.io/article/state-after-conversion/">', '</a>'
                    ),
                    'choices' => [
                        'success_message_shown' => __('Success Message Shown', 'mailoptin'),
                        'optin_form_hidden' => __('Optin Form Hidden', 'mailoptin'),
                        'optin_form_shown' => __('Optin Form Shown', 'mailoptin'),
                    ],
                    'priority' => 25,
                )
            );
        }

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

        $controls['email_notification'] = apply_filters('mo_optin_form_customizer_email_notification_args', array(
                'type' => 'text',
                'label' => __('Email Notification', 'mailoptin'),
                'section' => $customizerClassInstance->success_section_id,
                'settings' => $option_prefix . '[email_notification]',
                'input_attrs' => ['placeholder' => __('Email Address', 'mailoptin')],
                'description' => __('Enter email address to send notifications of new subscribers. You can add multiple email addresses separated by a comma. Leave blank to disable this feature.', 'mailoptin'),
                'priority' => 35,
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