<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Slidein;

use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class LetterBox extends AbstractOptinTheme
{
    public $optin_form_name = 'Letter Box';

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        // -- remove branding so it doesn't distort design -- //
        add_filter('mo_optin_form_remove_branding_default', function () {
            return true;
        });

        // -- default for design sections -- //
        add_filter('mo_optin_form_background_color_default', function () {
            return '#0e67e0';
        });

        add_filter('mo_optin_form_border_color_default', function () {
            return '#0e67e0';
        });

        add_filter('mo_optin_form_email_field_placeholder_default', function () {
            return __("Enter your email here...", 'mailoptin');
        });

        // -- default for headline sections -- //
        add_filter('mo_optin_form_headline_default', function () {
            return __("Don't Miss Our Update", 'mailoptin');
        });

        add_filter('mo_optin_form_headline_font_color_default', function () {
            return '#ffffff';
        });

        // Add Raleway with 400, 700 font weight variant.
        add_filter('mo_optin_form_fonts_list', function ($webfont) {
            $webfont[] = "'Raleway:400,700'";
            return $webfont;
        });

        add_filter('mo_optin_form_headline_font_default', function () {
            return 'Raleway';
        });

        // -- default for description sections -- //
        add_filter('mo_optin_form_description_font_default', function () {
            return 'Raleway';
        });

        add_filter('mo_optin_form_description_default', function () {
            return $this->_description_content();
        });

        add_filter('mo_optin_form_description_font_color_default', function () {
            return '#ffffff';
        });

        // -- default for fields sections -- //
        add_filter('mo_optin_form_name_field_color_default', function () {
            return '#444444';
        });

        add_filter('mo_optin_form_name_field_background_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_email_field_color_default', function () {
            return '#444444';
        });

        add_filter('mo_optin_form_email_field_background_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_submit_button_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_submit_button_background_default', function () {
            return '#1b1bea';
        });

        add_filter('mo_optin_form_submit_button_font_default', function () {
            return 'Raleway';
        });

        add_filter('mo_optin_form_name_field_font_default', function () {
            return 'Palatino Linotype, Book Antiqua, serif';
        });

        add_filter('mo_optin_form_email_field_font_default', function () {
            return 'Palatino Linotype, Book Antiqua, serif';
        });

        add_filter('mo_optin_form_modal_effects_default', function () {
            return 'MOslideInUp';
        });

        add_filter('mo_optin_form_slidein_position_default', function () {
            return 'bottom_right';
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

        parent::__construct($optin_campaign_id);
    }

    public function features_support()
    {
        return [$this->cta_button];
    }

    /**
     * @param mixed $settings
     * @param CustomizerSettings $CustomizerSettingsInstance
     *
     * @return mixed
     */
    public function customizer_design_settings($settings, $CustomizerSettingsInstance)
    {
        unset($settings['form_border_color']);

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
        add_filter('mailoptin_tinymce_customizer_control_count', function ($count) {
            return --$count;
        });

        // we are returning empty array so all controls for note are removed hence removing note panel/section.
        return [];
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
        return __('Be the first to get exclusive content straight to your email.', 'mailoptin');
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
        $close_image = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/close.png';
        return <<<HTML
        [mo-optin-form-wrapper class="letterBox_container"]
          [mo-close-optin]<img src="$close_image" class="letterBox_closeBtn">[/mo-close-optin]
    <div class="letterBox_inner">
        <div class="letterBox_copy">
        [mo-optin-form-headline class="letterBox_header" tag="div"]
        [mo-optin-form-description class="letterBox_description"]
       </div>
            </div>
        <div class="letterBox_form">
        [mo-optin-form-fields-wrapper]
            <div class="letterBox_field_wrapper">
            [mo-optin-form-name-field class="letterBox_form_field"]
            [mo-optin-form-email-field class="letterBox_form_field"]
            </div>
        [mo-optin-form-error]
            [mo-optin-form-submit-button class="letterBox_submitButton"]
        [/mo-optin-form-fields-wrapper]
        [mo-optin-form-cta-button class="letterBox_submitButton"]
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
        return <<<CSS
        
div#$optin_css_id.letterBox_container input,
 div#$optin_css_id.letterBox_container select, 
 div#$optin_css_id.letterBox_container textarea {
    margin: 0;
}

div#$optin_css_id.letterBox_container *,
 div#$optin_css_id.letterBox_container .letterBox_submitButton,
 div#$optin_css_id.letterBox_container .letterBox_form_field
 {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
        
div#$optin_css_id.letterBox_container {
    background: #0e67e0;
    border-radius: 10px;
    text-align: center;
    max-width: 350px;
    margin: 0;
    width: 100%;
    border: 0;
}

div#$optin_css_id.letterBox_container .letterBox_copy .letterBox_header {
    font-family: 'Raleway', sans-serif;
    color: #ffffff;
    font-size: 20px;
    font-weight: 700;
    margin: 15px auto;
    line-height: normal;
    height: auto;
    display: block;
    border: 0;
}

div#$optin_css_id.letterBox_container .letterBox_copy .letterBox_description {
    color: #ffffff;
    font-family: 'Raleway', sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: normal;
    height: auto;
    display: block;
    border: 0;
}

div#$optin_css_id.letterBox_container .letterBox_inner {
    padding: 20px;
}

div#$optin_css_id.letterBox_container input.letterBox_form_field {
    width: 100%;
    padding: 15px;
    border: 0px;
    border-radius: 5px;
    color: #444;
    font-family: 'Raleway', sans-serif;
    font-size: 15px;
    text-align: center;
    margin: 0 0 10px;
    display: inline-block;
    line-height: normal;
}

div#$optin_css_id.letterBox_container input.letterBox_form_field:focus,
div#$optin_css_id.letterBox_container input.letterBox_submitButton:focus,
 {
   outline: 0
}

div#$optin_css_id.letterBox_container input.letterBox_form_field:focus {
    background: #ececec;
}

div#$optin_css_id.letterBox_container .mo-optin-error {
     display: none; 
    color: #ff0000;
    text-align: center;
    padding: 5px;
    font-size: 14px;
}

div#$optin_css_id.letterBox_container input[type="submit"].letterBox_submitButton {
    width: 100%;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border: 0;
    background: #1b1bea;
    color: #ffffff;
    padding: 12px;
    font-size: 15px;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-appearance: button;
    cursor: pointer;
    font-weight: 700;
    display: inline-block;
    line-height: normal;
    margin: 0;
}

div#$optin_css_id.letterBox_container .letterBox_submitButton:hover{
    color: #ffffff;
    border-color: #3a3a3a;
    background-color: #3a3a3a;
}

div#$optin_css_id.letterBox_container .letterBox_field_wrapper {
    padding: 0px 20px;
}

div#$optin_css_id.letterBox_container .letterBox_closeBtn {
    position: absolute;
    right: 10px;
    top: 7px;
    width: 20px;
    height: 20px;
}

/* remove border radius from submit button when display on mobile */
@media only screen and (max-width: 575px) {
    .letterBox_container, 
     .letterBox_submitButton {
        border-radius: 0 !important;
    }
}
CSS;

    }
}