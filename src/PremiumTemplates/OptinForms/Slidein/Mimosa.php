<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Slidein;

use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Mimosa extends AbstractOptinTheme
{
    public $optin_form_name = 'Mimosa';

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        // -- default for design sections -- //
        add_filter('mo_optin_form_background_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_border_color_default', function () {
            return '#dddddd';
        });

        add_filter('mo_optin_form_email_field_placeholder_default', function () {
            return __("Enter your email here...", 'mailoptin');
        });

        // -- default for headline sections -- //
        add_filter('mo_optin_form_headline_default', function () {
            return __("Don't Miss Our Update", 'mailoptin');
        });

        add_filter('mo_optin_form_headline_font_color_default', function () {
            return '#000000';
        });

        add_filter('mo_optin_form_headline_font_default', function () {
            return 'Open+Sans';
        });

        // -- default for description sections -- //
        add_filter('mo_optin_form_description_font_default', function () {
            return 'Open+Sans';
        });

        add_filter('mo_optin_form_description_default', function () {
            return $this->_description_content();
        });

        add_filter('mo_optin_form_description_font_color_default', function () {
            return '#000000';
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
            return '#ea0c1a';
        });

        add_filter('mo_optin_form_submit_button_font_default', function () {
            return 'Open+Sans';
        });

        add_filter('mo_optin_form_name_field_font_default', function () {
            return 'Palatino Linotype, Book Antiqua, serif';
        });

        add_filter('mo_optin_form_email_field_font_default', function () {
            return 'Palatino Linotype, Book Antiqua, serif';
        });

        // -- default for note sections -- //
        add_filter('mo_optin_form_note_font_color_default', function () {
            return '#000000';
        });

        add_filter('mo_optin_form_note_default', function () {
            return __('We promise not to spam you. You can unsubscribe at any time.', 'mailoptin');
        });

        add_filter('mo_optin_form_note_font_default', function () {
            return 'Open+Sans';
        });

        add_filter('mo_optin_form_modal_effects_default', function () {
            return 'MOslideInUp';
        });

        add_filter('mo_optin_form_hide_name_field_default', function () {
            return true;
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
            return '#000000';
        });

        parent::__construct($optin_campaign_id);
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
        return <<<HTML
[mo-optin-form-wrapper class="mimosa-container"]
[mo-close-optin class="mimosa-optin-form-close"]x[/mo-close-optin]
<div class="mimosa-inner-wrapper">
    [mo-optin-form-headline class="mimosa-heading" tag="div"]
    [mo-optin-form-description class="mimosa-caption"]
    <div class="mimosa-form">
    [mo-optin-form-error]
    [mo-optin-form-name-field class="mimosa-input"]
    [mo-optin-form-email-field class="mimosa-input"]
    [mo-optin-form-submit-button class="mimosa-submit"]
    </div>
    [mo-mailchimp-interests]
    [mo-optin-form-note class="mimosa-finePrint"]
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
div#$optin_css_id.mimosa-container * {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

div#$optin_css_id.mimosa-container {
  border: 3px solid #dddddd;
  background: #fff;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  max-width: 350px;
  width: auto;
  padding: 0.5em;
  font-size: 15px;
  font-family: 'Open Sans', arial, sans-serif;
  color: #000;
  text-align: center;
  -webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

div#$optin_css_id.mimosa-container .mimosa-optin-form-close {
    color: #000;
    display: inline;
    cursor: pointer;
    font-size: 1.5em;
    font-weight: 500;
    float: right;
    text-decoration: none !important;
    vertical-align: text-top;
    margin-top: -0.5em;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

div#$optin_css_id.mimosa-container .mimosa-inner-wrapper {
  padding: 0.5em;
}

div#$optin_css_id.mimosa-container .mimosa-heading {
  font-weight: 600;
  font-size: 1em;
  line-height: 1.5em;
}

div#$optin_css_id.mimosa-container .mimosa-caption {
  margin: 1em 0;
  font-size: 0.8em
}

div#$optin_css_id.mimosa-container .mimosa-form {
  max-width: 100%;
  margin-left: 0.5em;
  margin-right: 0.5em;
}

div#$optin_css_id.mimosa-container .mo-optin-error {
display: none;
color: #c94c4c;
text-align: center;
padding: .2em;
margin: 0 0 -0.6em;
width: 100%;
font-size: 0.8em;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box; 
}

div#$optin_css_id.mimosa-container .mimosa-input {
  
  -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block;
  width: 100%;
  margin-top: 0.5em;
  -webkit-appearance: none;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  font-family: 'Open Sans', arial, sans-serif;
  padding: 0.7em;
  font-size: 0.9em;
  line-height: 0.9em;
  text-align: center;
  color: #555;
  border: 1px solid #ccc;
  outline: none;
  background: 0;
}

div#$optin_css_id.mimosa-container .mimosa-submit {
  display: block;
  width: 100%;
  margin-top: 0.5em;
  -webkit-appearance: none;
  border: 2px solid #ea0c1a;
  background: #EA0C1A;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  font-family: 'Open Sans', arial, sans-serif;
  padding: 0.9em;
  font-size: 0.9em;
  line-height: 0.9em;
  text-align: center;
  color: #fff;
  outline: none;
  text-transform: uppercase;
  cursor: pointer;
  font-weight: 600;
}

div#$optin_css_id.mimosa-container .mimosa-finePrint {
  margin-top: 1em;
  font-size: 0.7em;
  line-height: 1.5em;
  font-style: italic;
}
CSS;

    }
}