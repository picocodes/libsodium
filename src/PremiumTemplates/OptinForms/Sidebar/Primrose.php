<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Sidebar;

use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Primrose extends AbstractOptinTheme
{
    public $optin_form_name = 'Primrose';

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        // -- default for design sections -- //
        add_filter('mo_optin_form_background_color_default', function () {
            return '#f22613';
        });

        add_filter('mo_optin_form_border_color_default', function () {
            return '#000000';
        });

        add_filter('mo_optin_form_name_field_placeholder_default', function () {
            return __("Enter your name...", 'mailoptin');
        });

        add_filter('mo_optin_form_email_field_placeholder_default', function () {
            return __("Enter your email...", 'mailoptin');
        });

        // -- default for headline sections -- //
        add_filter('mo_optin_form_headline_default', function () {
            return __("50% OFF", 'mailoptin');
        });

        add_filter('mo_optin_form_headline_font_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_headline_font_default', function () {
            return 'PT+serif';
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
            return '#555555';
        });

        add_filter('mo_optin_form_email_field_color_default', function () {
            return '#555555';
        });

        add_filter('mo_optin_form_submit_button_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_submit_button_background_default', function () {
            return '#000000';
        });

        add_filter('mo_optin_form_submit_button_font_default', function () {
            return 'Raleway';
        });

        add_filter('mo_optin_form_name_field_font_default', function () {
            return 'Consolas, Lucida Console, monospace';
        });

        add_filter('mo_optin_form_email_field_font_default', function () {
            return 'Consolas, Lucida Console, monospace';
        });

        // -- default for note sections -- //
        add_filter('mo_optin_form_note_font_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_note_default', function () {
            return __('*Offer Valid till 26th December', 'mailoptin');
        });

        add_filter('mo_optin_form_note_font_default', function () {
            return 'Raleway';
        });

        add_filter('mo_optin_form_background_image_default', function () {
            return MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/primrose-bg.jpg';
        });

        add_filter('mo_optin_form_enable_form_background_image', '__return_true');

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_style', function () {
            return 'inline';
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_alignment', function () {
            return 'center';
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_user_input_field_color', function () {
            return '#000000';
        });

        parent::__construct($optin_campaign_id);
    }

    /**
     * Default description content.
     *
     * @return string
     */
    private function _description_content()
    {
        return __('On wide range of product<br/>CVHSTG', 'mailoptin');
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
[mo-optin-form-wrapper class="primrose-container mo-optin-form-background-image-wrapper"]
    [mo-optin-form-headline class="primrose-headline" tag="div"]
    [mo-optin-form-description class="primrose-description"]
    [mo-optin-form-error]
    [mo-optin-form-name-field class="primrose-input-field"]
    [mo-optin-form-email-field class="primrose-input-field"]
    [mo-optin-form-submit-button class="primrose-submit-button"]
    [mo-mailchimp-interests]
    [mo-optin-form-note class="primrose-note"]
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
        $optin_uuid = $this->optin_campaign_uuid;
        $background_image = $this->get_form_background_image_url();

        return <<<CSS

div#$optin_css_id.primrose-container * {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
    
div#$optin_css_id.primrose-container {
    max-width: 400px;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 20px;
    background: url($background_image) no-repeat !important;
    background-size: cover !important;
    color: white;
    background-color: #F22613;
    border: 5px solid #000000;
}

div#$optin_css_id.primrose-container .primrose-headline {
    font-size: 45px;
    text-align: center;
    font-family: 'PT serif', serif;
    display: block;
    border: 0;
    line-height: normal;
    height: auto;
}
    
div#$optin_css_id.primrose-container .primrose-description {
    font-size: 18px;
    font-family: Raleway, sans-serif;
    font-weight: 600;
    text-align: center;
    padding: 10px 0;
    line-height: 1.5;
    display: block;
    border: 0;
    height: auto;
}
        
div#$optin_css_id.primrose-container .primrose-note {
    font-size: 12px;
    margin-top: 10px;
    font-family: Raleway, sans-serif, Arial, Verdana, "Trebuchet MS";
    font-weight: normal;
    text-align: center;
    display: block;
    border: 0;
    line-height: normal;
    height: auto;
}
        
div#$optin_css_id.primrose-container .primrose-headline {
    margin: 0;
}
        
div#$optin_css_id.primrose-container input.primrose-input-field {
    width: 100%;
    height: 36px !important;
    border: 2px solid #f0f0f0;
    border-radius: 3px;
    padding-left: 10px;
    font-family: Raleway, sans-serif, Arial, Verdana, "Trebuchet MS";
    font-size: 16px;
    margin: 0 auto;
    margin-top: 10px;
    text-align: center;
    line-height: normal;
    background-color: #ffffff;
}
        
div#$optin_css_id.primrose-container input.primrose-submit-button {
    border: 2px solid black;
    border-radius: 3px;
    background: black;
    color: white;
    width: 100%;
    font-weight: 700;
    font-family: Raleway, sans-serif, Arial, Verdana, "Trebuchet MS";
    text-transform: uppercase;
    padding: 5px 10px;
    margin-top: 10px;
    font-size: 16px;
    line-height: normal;
}

div#$optin_css_id.primrose-container .mo-optin-error {
     display: none; 
    background: #FF0000;
    color: #ffffff;
    text-align: center;
    padding: .2em;
    margin: 0 0 -5px;
    width: 100%;
    font-size: 16px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
        
div#$optin_css_id.primrose-container input.primrose-input-field:focus {
    border-color: #0abff0;
    border-radius: 3px;
}
        
div#$optin_css_id.primrose-container input.primrose-submit-button:hover {
    background: black;
    opacity: 0.9;
}
CSS;
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
}