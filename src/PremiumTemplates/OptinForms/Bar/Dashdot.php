<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Bar;

use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Dashdot extends AbstractOptinTheme
{
    public $optin_form_name = 'Dashdot';

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        // -- default for design sections -- //
        add_filter('mo_optin_form_background_color_default', function () {
            return '#34495e';
        });

        add_filter('mo_optin_form_border_color_default', function () {
            return '#34495e';
        });

        add_filter('mo_optin_form_name_field_placeholder_default', function () {
            return __("Enter your name..", 'mailoptin');
        });

        add_filter('mo_optin_form_email_field_placeholder_default', function () {
            return __("Enter your email..", 'mailoptin');
        });

        // -- default for headline sections -- //
        add_filter('mo_optin_form_headline_default', function () {
            return __("Grab your Free Copy of SEO eBook ($9.69)", 'mailoptin');
        });

        add_filter('mo_optin_form_headline_font_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_headline_font_default', function () {
            return 'Vollkorn';
        });

        // -- default for fields sections -- //
        add_filter('mo_optin_form_name_field_color_default', function () {
            return '#666666';
        });

        add_filter('mo_optin_form_email_field_color_default', function () {
            return '#666666';
        });

        add_filter('mo_optin_form_submit_button_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_submit_button_background_default', function () {
            return '#666666';
        });

        add_filter('mo_optin_form_submit_button_font_default', function () {
            return 'Raleway';
        });

        add_filter('mo_optin_form_name_field_font_default', function () {
            return 'Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif';
        });

        add_filter('mo_optin_form_email_field_font_default', function () {
            return 'Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif';
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_style', function () {
            return 'inline';
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_alignment', function () {
            return 'center';
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_user_input_field_color', function () {
            return '#ffffff';
        });

        add_action('customize_preview_init', function () {
            add_action('wp_footer', [$this, 'customizer_preview_js']);
        });

        parent::__construct($optin_campaign_id);
    }

    public function customizer_preview_js()
    {
        ?>
        <script type="text/javascript">
            (function ($) {
                $(function () {
                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][headline_border_color]', function (value) {
                        value.bind(function (to) {
                            $('.dashdot-dotted').css('border-color', to);
                        });
                    });
                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][headline_background_color]', function (value) {
                        value.bind(function (to) {
                            $('.dashdot-dotted').css('background-color', to);
                        });
                    });
                })
            })(jQuery)
        </script>
        <?php
    }

    /**
     * @param mixed $settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_design_settings($settings, $CustomizerSettingsInstance)
    {
        return $settings;
    }

    /**
     * @param array $controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param \MailOptin\Core\Admin\Customizer\OptinForm\Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_design_controls($controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        return $controls;
    }

    /**
     * @param mixed $settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_headline_settings($settings, $CustomizerSettingsInstance)
    {
        $settings['headline_border_color'] = array(
            'default' => '#ffffff',
            'type' => 'option',
            'transport' => 'postMessage',
        );

        $settings['headline_background_color'] = array(
            'default' => '#aa3030',
            'type' => 'option',
            'transport' => 'postMessage',
        );

        return $settings;
    }

    /**
     * @param array $controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param \MailOptin\Core\Admin\Customizer\OptinForm\Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_headline_controls($controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        $controls['headline_border_color'] = new \WP_Customize_Color_Control(
            $wp_customize,
            $option_prefix . '[headline_border_color]',
            apply_filters('mo_optin_form_customizer_headline_border_color_args', array(
                    'label' => __('Border Color', 'mailoptin'),
                    'section' => $customizerClassInstance->headline_section_id,
                    'settings' => $option_prefix . '[headline_border_color]',
                    'priority' => 50
                )
            )
        );

        $controls['headline_background_color'] = new \WP_Customize_Color_Control(
            $wp_customize,
            $option_prefix . '[headline_background_color]',
            apply_filters('mo_optin_form_customizer_headline_background_color_args', array(
                    'label' => __('Background Color', 'mailoptin'),
                    'section' => $customizerClassInstance->headline_section_id,
                    'settings' => $option_prefix . '[headline_background_color]',
                    'priority' => 50
                )
            )
        );

        return $controls;
    }

    /**
     * @param mixed $settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_description_settings($settings, $CustomizerSettingsInstance)
    {
        return $settings;
    }

    /**
     * @param array $controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param \MailOptin\Core\Admin\Customizer\OptinForm\Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_description_controls($controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        return $controls;
    }

    /**
     * @param mixed $settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_note_settings($settings, $CustomizerSettingsInstance)
    {
        return $settings;
    }

    /**
     * @param array $controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param \MailOptin\Core\Admin\Customizer\OptinForm\Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_note_controls($controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        return $controls;
    }


    /**
     * @param mixed $fields_settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_fields_settings($fields_settings, $CustomizerSettingsInstance)
    {
        return $fields_settings;
    }

    /**
     * @param array $fields_controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param \MailOptin\Core\Admin\Customizer\OptinForm\Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_fields_controls($fields_controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        return $fields_controls;
    }

    /**
     * @param mixed $configuration_settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_configuration_settings($configuration_settings, $CustomizerSettingsInstance)
    {
        return $configuration_settings;
    }

    /**
     * @param array $configuration_controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param \MailOptin\Core\Admin\Customizer\OptinForm\Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_configuration_controls($configuration_controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        return $configuration_controls;
    }

    /**
     * @param mixed $output_settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_output_settings($output_settings, $CustomizerSettingsInstance)
    {
        return $output_settings;
    }


    /**
     * @param array $output_controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param \MailOptin\Core\Admin\Customizer\OptinForm\Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_output_controls($output_controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        return $output_controls;
    }

    /**
     * Default description content.
     *
     * @return string
     */
    private function _description_content()
    {
        return __('Receive top education news, lesson ideas, teaching tips and more!', 'mailoptin');
    }

    /**
     * Fulfil interface contract.
     */
    public function optin_script()
    {
    }

    /**
     * Template body.
     *
     * @return string
     */
    public function optin_form()
    {
        return <<<HTML
[mo-optin-form-wrapper class="dashdot-container"]
            <div class="dashdot-close-form" title="close"><a class="mo-close-optin" href="#">x</a></div>
    <div class="dashdot-form-row dashdot-text-align">
        <div class="dashdot-header-block">
            [mo-optin-form-headline tag="div" class="dashdot-dotted"]
        </div>
        <div class="dashdot-form-wrapper">
                [mo-optin-form-name-field class="dashdot-input-field"]
                [mo-optin-form-email-field class="dashdot-input-field"]
            [mo-optin-form-submit-button class="dashdot-submit-button"]
        </div>
        [mo-mailchimp-interests]
        [mo-optin-form-error]
</div>
[/mo-optin-form-wrapper]

HTML;
    }

    /**
     * Template CSS styling.
     *
     * @return string
     */
    public function optin_form_css()
    {
        $optin_css_id = $this->optin_css_id;
        $headline_border_color = $this->get_customizer_value('headline_border_color');
        $headline_background_color = $this->get_customizer_value('headline_background_color');

        return <<<CSS
div#$optin_css_id.dashdot-container {
    border: 2px solid #34495e;
    background: #34495e;
    width: 100%;
    text-align: center;
    padding: 15px 0px;
}
div#$optin_css_id.dashdot-container * {
      box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

div#$optin_css_id.dashdot-container .dashdot-form-wrapper {
    display: inline-block;
    position: relative;
}

div#$optin_css_id.dashdot-container .dashdot-header-block {
    display: inline-block;
    padding: 0px;
    margin: 0px;
    font-weight: 700;
    font-size: 18px;
    color: white;
	padding-right: 10px;
}
div#$optin_css_id.dashdot-container .dashdot-form-wrapper {
    padding: 0px !important;
    margin: 0px !important;
}

div#$optin_css_id.dashdot-container input.dashdot-submit-button {
    color: #FFF;
    background: #1abc9c;
    font-size: 13px;
    display: inline;
    line-height: normal;
    border-width: 1px 1px 3px;
    font-weight: 900;
    font-family: Georgia, "Times New Roman", Times, serif;;
    padding: 10px;
	border-radius: 2px;
	border: 0;
	
}

div#$optin_css_id.dashdot-container input.dashdot-input-field {
    font-weight: 400;
    padding: 10px 10px;
    font-family: Georgia, "Times New Roman", Times, serif;
    border: none;
    font-size: 13px;
    margin: 0;
    display: inline;
    outline: 0;
    line-height: normal;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: #8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    width: 180px;
    border-radius: 2px;
    background-color:#ffffff;
}

div#$optin_css_id.dashdot-container .dashdot-dotted {
    padding: 5px;
    margin: 10px;
    background: $headline_background_color;
    color: #fff;
    border: 1px dashed $headline_border_color;
    border-radius: 1px;
    text-shadow: -1px -1px #aa3030;
    font-weight: 700;
    font-family: Vollkorn, san-serif;
}

div#$optin_css_id.dashdot-container .dashdot-header-block {
    padding-right: 0px;
}

div#$optin_css_id.dashdot-container div.mo-optin-error {
         display: none;
         color: #FF0000;
         text-align: center;
         width: 100%;
         padding-bottom: .5em;
     }
     
div#$optin_css_id.dashdot-container .dashdot-close-form {
    cursor: pointer;
    display: block;
    font-size: 22px;
    font-weight: 100;
    text-decoration: none !important;
    font-family: Arial, sans-serif !important;
    margin-left: 5px;
    vertical-align: text-top;
    position: absolute;
    color: #ffffff;
    top: 24px;
    margin-top: -11px;
    right: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

div#$optin_css_id.dashdot-container .dashdot-close-form a.mo-close-optin {
    color: #fff;
    text-decoration: none;
}

@media only screen and (max-width: 768px) {
	div#$optin_css_id.dashdot-container .dashdot-header-block{
	padding-right: 0px;
	}
}
@media only screen and (max-width: 572px) {
	div#$optin_css_id.dashdot-container input.dashdot-input-field{
	width: 33%;
	}
}
@media only screen and (max-width: 370px) {
	div#$optin_css_id.dashdot-container input.dashdot-input-field{
	width: 40%;
	margin-bottom: 10px;
	}
	
	div#$optin_css_id.dashdot-container .dashdot-close-form {
    top: 12px;
}
	
}

CSS;

    }
}