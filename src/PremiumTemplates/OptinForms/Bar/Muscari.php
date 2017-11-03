<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Bar;

use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Muscari extends AbstractOptinTheme
{
    public $optin_form_name = 'Muscari';

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        // -- default for design sections -- //
        add_filter('mo_optin_form_background_color_default', function () {
            return '#000000';
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
            return __("Grab your Free Copy of SEO eBook ($9.69)", 'mailoptin');
        });

        add_filter('mo_optin_form_headline_font_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_headline_font_default', function () {
            return 'Helvetica';
        });

        // -- default for fields sections -- //
        add_filter('mo_optin_form_name_field_color_default', function () {
            return '#dddddd';
        });

        add_filter('mo_optin_form_email_field_color_default', function () {
            return '#dddddd';
        });

        add_filter('mo_optin_form_submit_button_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_submit_button_background_default', function () {
            return '#3abaab';
        });

        add_filter('mo_optin_form_submit_button_font_default', function () {
            return 'Helvetica';
        });

        add_filter('mo_optin_form_name_field_font_default', function () {
            return 'Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif';
        });

        add_filter('mo_optin_form_email_field_font_default', function () {
            return 'Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif';
        });

        add_filter('mo_optin_form_customizer_fields_settings', function ($settings) {
            $settings['hide_name_field']['transport'] = 'refresh';
            return $settings;
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
[mo-optin-form-wrapper class="muscari-container"]
<div role="form">
    <div class="muscari-form-row muscari-text-align">
        <div class="muscari-form-title-wrap">
            [mo-optin-form-headline tag="div" class="muscari-title-wrap-content"]
            <div class="muscari-close-form" title="close"><a class="mo-close-optin" href="#">x</a></div>
        </div>
        <div class="muscari-form-group muscari-name-field mo-optin-form-name-field">
            <label>
                [mo-optin-form-name-field class="muscari-form-control"]
            </label>
        </div>
        <div class="muscari-form-group muscari-email-field mo-optin-form-email-field">
            <label>
                [mo-optin-form-email-field class="muscari-form-control"]
            </label>
        </div>
        <div class="muscari-form-group muscari-button-group" style="padding-bottom: 15px;">
            [mo-optin-form-submit-button class="muscari-button"]
        </div>
        [mo-optin-form-error]
    </div>
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
        div#$optin_css_id.muscari-container,
 div#$optin_css_id.muscari-container .muscari-form-group,
 div#$optin_css_id.muscari-container .muscari-form-control {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

div#$optin_css_id.muscari-container{
    background-color: #000000;
    border: 3px solid #000000;
    color:#fff;
    padding-left: 15px;
    padding-right: 35px;
    -webkit-font-smoothing: antialiased !important;
    -moz-osx-font-smoothing: grayscale;
    width: 100%;
    font-family: Helvetica, Arial, sans-serif;  /* Adjust font */
    font-size: 16px;
}

div#$optin_css_id.muscari-container .muscari-close-form{
    cursor: pointer;
    display: block;
    font-size: 22px;
    font-weight: 100;
    text-decoration: none !important;
    font-family: Arial, sans-serif !important;
    margin-left: 5px;
    vertical-align: text-top;
    position: absolute;
    top: 24px;
    margin-top: -11px;
    right: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

div#$optin_css_id.muscari-container .muscari-close-form,
div#$optin_css_id.muscari-container .muscari-close-form a.mo-close-optin {
    color: #fff;
    text-decoration: none;
}

div#$optin_css_id.muscari-container .muscari-close-form:hover {
    text-shadow: 0 0 2px #fff
}

div#$optin_css_id.muscari-container .muscari-form-title-wrap{
    padding: 15px;
    width:100%;
    text-align: center;
    font-size: 15px;
}

div#$optin_css_id.muscari-container .muscari-form-group {
    margin-bottom: 15px;
    padding-left: 15px;
    padding-right: 15px;
}
div#$optin_css_id.muscari-container .muscari-form-control{
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    background-image: none;
    outline: none !important;
    border:none;
}
div#$optin_css_id.muscari-container .muscari-form-row{
    margin-right: auto;
    margin-left: auto;
}
div#$optin_css_id.muscari-container .muscari-form-row:after{
    clear: both;
}

div#$optin_css_id.muscari-container .muscari-button{
    outline: none !important;
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 16px;
    line-height: 1.42857143;
    text-align: center;
    text-transform: uppercase;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    font-weight: normal;
    font-family: Helvetica, Arial, sans-serif;  /* Adjust font */
    width: 100%;
}

div#$optin_css_id.muscari-container .muscari-email-field,.muscari-name-field,
div#$optin_css_id.muscari-container .muscari-button-group {
    width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

div#$optin_css_id.muscari-container div.mo-optin-error {
         display: none;
         color: #FF0000;
         text-align: center;
         width: 100%;
         padding-bottom: .5em;
     }

/* Media queries for responsiveness */
/* Tablet */
@media (min-width: 768px) {
    div#$optin_css_id.muscari-container .muscari-email-field,
    div#$optin_css_id.muscari-container .muscari-name-field{
        width:28.19%;
        display: inline-block;
    }
    div#$optin_css_id.muscari-container .muscari-button-group{
        width: auto;
        display: inline-block;
    }
    div#$optin_css_id.muscari-container .muscari-close-form{
        top: 50%;
    }
}

/* Tablet onwards with only email field */
@media (min-width: 992px) {
    div#$optin_css_id.mo-has-email.muscari-container .muscari-form-title-wrap{
        width: auto;
        display: inline-block;
    }
    div#$optin_css_id.mo-has-email.muscari-container .muscari-email-field,
    div#$optin_css_id.mo-has-email.muscari-container .muscari-name-field,
    div#$optin_css_id.mo-has-email.muscari-container .muscari-button-group{
        width:auto;
        display: inline-block;
    }
}

/* Medium device */
@media (min-width: 992px) {
    div#$optin_css_id.muscari-container .muscari-text-align{
        text-align: center;
    }
}

/* Large screens & TVs */
@media (min-width: 1200px) {
    div#$optin_css_id.muscari-container .muscari-form-title-wrap{
        width: auto;
        display: inline-block;
    }
    div#$optin_css_id.muscari-container .muscari-email-field,
    div#$optin_css_id.muscari-container .muscari-name-field,
    div#$optin_css_id.muscari-container .muscari-button-group{
        width:auto;
        display: inline-block;
    }
    div#$optin_css_id.muscari-container .muscari-close-form{
        top: 24px;
    }
    div#$optin_css_id.muscari-container .muscari-form-group{
        margin-bottom: -5px;
    }
}

div#$optin_css_id.muscari-container .muscari-form-control{
    background: transparent;
    color: #dddddd;
    border-radius: 0;
    border-bottom: 2px solid #cccccc;
}

div#$optin_css_id.muscari-container .muscari-form-control:hover{
    outline: 0;
    border-bottom-color: #3abaab;
    -webkit-transition: border-bottom-color 0.15s;
    -moz-transition: border-bottom-color 0.15s;
    -ms-transition: border-bottom-color 0.15s;
    -o-transition: border-bottom-color 0.15s;
    transition: border-bottom-color 0.15s;
}
div#$optin_css_id.muscari-container .muscari-button{
    background: #3abaab;
    color:#fff;
}
div#$optin_css_id.muscari-container .muscari-button:hover{
    background: #2fa699;
}

div#$optin_css_id.muscari-container ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #cccccc;
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
div#$optin_css_id.muscari-container ::-moz-placeholder { /* Firefox 19+ */
    color: #cccccc;
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
div#$optin_css_id.muscari-container :-ms-input-placeholder { /* IE 10+ */
    color: #cccccc;
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
div#$optin_css_id.muscari-container :-moz-placeholder { /* Firefox 18- */
    color: #cccccc;
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
CSS;

    }
}