<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Bar;

use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Dahlia extends AbstractOptinTheme
{
    public $optin_form_name = 'Dahlia';

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        // -- default for design sections -- //
        add_filter('mo_optin_form_background_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_border_color_default', function () {
            return '#00ceff';
        });

        add_filter('mo_optin_form_name_field_placeholder_default', function () {
            return __("Enter your name...", 'mailoptin');
        });

        add_filter('mo_optin_form_email_field_placeholder_default', function () {
            return __("Enter your email...", 'mailoptin');
        });

        // -- default for headline sections -- //
        add_filter('mo_optin_form_headline_default', function () {
            return __("Subscribe for Free Marketing Tips", 'mailoptin');
        });

        add_filter('mo_optin_form_headline_font_color_default', function () {
            return '#000000';
        });

        add_filter('mo_optin_form_headline_font_default', function () {
            return 'Helvetica';
        });

        // -- default for fields sections -- //
        add_filter('mo_optin_form_name_field_color_default', function () {
            return '#2e2e2e';
        });

        add_filter('mo_optin_form_email_field_color_default', function () {
            return '#2e2e2e';
        });

        add_filter('mo_optin_form_submit_button_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_submit_button_background_default', function () {
            return '#00c1f3';
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
        
[mo-optin-form-wrapper class="dahlia-container"]
            <div class="dahlia-form-row dahlia-text-align">
                <div class="dahlia-title-wrap">
            [mo-optin-form-headline tag="div" class="dahlia-headline"]
            <div class="dahlia-close-form" title="close"><a class="mo-close-optin" href="#">x</a></div>
                </div>
                <div class="dahlia-form-group dahlia-name-field" id="mo-optin-form-name-field">
                [mo-optin-form-name-field class="dahlia-form-control"]
                        <span class="dahlia-icons-wrap">
                        <i class="fa fa-user fa-lg dahlia-icons" aria-hidden="true"></i>
                        </span>
                </div>
                <div class="dahlia-form-group dahlia-email-field">
                [mo-optin-form-email-field class="dahlia-form-control"]
                        <span class="dahlia-icons-wrap">
                        <i class="fa fa-envelope fa-lg dahlia-icons" aria-hidden="true"></i>
                        </span>
                </div>
                <div class="dahlia-form-group dahlia-button-group" style="padding-bottom: 15px;">
                    
            [mo-optin-form-submit-button class="dahlia-button"]
                </div>
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
        return <<<CSS
        @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
div#$optin_css_id.dahlia-container * {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-font-smoothing: antialiased !important;
    -moz-osx-font-smoothing: grayscale;
}



div#$optin_css_id.dahlia-container {
    background-color: #fff;
    color:#fff;
    padding-left: 15px;
    padding-right: 35px;
    width: 100%;
    font-family: Helvetica, Arial, sans-serif;  /* Adjust font */
    font-size: 16px;
    border: 2px solid #00ceff;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

div#$optin_css_id.dahlia-container .dahlia-close-form {
    color: #000;
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
div#$optin_css_id.dahlia-container .dahlia-close-form:hover {
    text-shadow: 0 0 2px #fff
}

div#$optin_css_id.dahlia-container .dahlia-title-wrap{
    padding: 15px;
    width:100%;
    text-align: center;
    font-size: 18px;
}

div#$optin_css_id.dahlia-container .dahlia-form-group {
    margin-bottom: 15px;
    padding-left: 15px;
    padding-right: 15px;
}
div#$optin_css_id.dahlia-container input.dahlia-form-control{
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
div#$optin_css_id.dahlia-container .dahlia-form-row{
    margin-right: -15px;
    margin-left: -15px;
}
div#$optin_css_id.dahlia-container .dahlia-form-row:after{
    clear: both;
}

div#$optin_css_id.dahlia-container input.dahlia-button{
    outline: none !important;
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 16px;
    line-height: 1.42857143;
    text-align: center;
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

div#$optin_css_id.dahlia-container .dahlia-email-field, div#$optin_css_id.dahlia-container .dahlia-name-field, div#$optin_css_id.dahlia-container .dahlia-button-group{
    width: 100%;
}

div#$optin_css_id.dahlia-container div.mo-optin-error {
         display: none;
         color: #FF0000;
         text-align: center;
         width: 100%;
         padding-bottom: .5em;
     }

/* Media queries for responsiveness */
/* Tablet */
@media (min-width: 768px) {
    div#$optin_css_id.dahlia-container .dahlia-email-field, div#$optin_css_id.dahlia-container .dahlia-name-field{
        width:28.19%;
        display: inline-block;
    }
    div#$optin_css_id.dahlia-container .dahlia-button-group{
        width: auto;
        display: inline-block;
    }
    div#$optin_css_id.dahlia-container .dahlia-close-form{
        top: 50%;
    }
}

/* Medium device */
@media (min-width: 992px) {
    div#$optin_css_id.dahlia-container .dahlia-text-align{
        text-align: center;
    }
}


/* Large screens & TVs */
@media (min-width: 1200px) {
    div#$optin_css_id.dahlia-container .dahlia-title-wrap{
        width: auto;
        display: inline-block;
    }
    div#$optin_css_id.dahlia-container .dahlia-email-field,
    div#$optin_css_id.dahlia-container .dahlia-name-field,
    div#$optin_css_id.dahlia-container .dahlia-button-group{
        width:auto;
        display: inline-block;
    }
    div#$optin_css_id.dahlia-container .dahlia-close-form{
        top: 24px;
    }
    div#$optin_css_id.dahlia-container .dahlia-form-group{
        margin-bottom: -5px;
    }
}
div#$optin_css_id.dahlia-container .dahlia-headline{
    color: #000;
    font-size: 18px;
    display: block;
    border: none;
    line-height: normal;
    height: auto;
}

div#$optin_css_id.dahlia-container input.dahlia-form-control{
    color: #2e2e2e;
    border-bottom: 2px solid #D6D6D6;
    padding-left: 45px;
    background-color: transparent;
    border-radius: 0;
    height: 36px;
    display:block;
    margin: 0;
}

div#$optin_css_id.dahlia-container input.dahlia-form-control:hover{
    outline: 0;
    border-bottom-color: #00CCFF;
    -webkit-transition: border-bottom-color 0.15s;
    -moz-transition: border-bottom-color 0.15s;
    -ms-transition: border-bottom-color 0.15s;
    -o-transition: border-bottom-color 0.15s;
    transition: border-bottom-color 0.15s;
}

div#$optin_css_id.dahlia-container .dahlia-form-group{
    position: relative;
}

div#$optin_css_id.dahlia-container input.dahlia-button{
    background: #00CCFF;
    color:#fff;
}
div#$optin_css_id.dahlia-container input.dahlia-button:hover{
    background: #00c1f3;
}

div#$optin_css_id.dahlia-container .dahlia-icons-wrap{
    position:absolute;
    bottom:-5px;
    top:0;
    left:15px;
    background:transparent;
    border-bottom-left-radius:5px;
    height: 36px;
    width: 34px;
    border-top-left-radius: 5px;
}
div#$optin_css_id.dahlia-container .dahlia-icons{
    width:30px;
    height:30px;
    padding: 5px;
    color: #00ceff;
}

div#$optin_css_id.dahlia-container ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: rgba(46,46,46,0.70);
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
div#$optin_css_id.dahlia-container ::-moz-placeholder { /* Firefox 19+ */
    color: rgba(46,46,46,0.70);
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
div#$optin_css_id.dahlia-container :-ms-input-placeholder { /* IE 10+ */
    color: rgba(46,46,46,0.70);
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
div#$optin_css_id.dahlia-container :-moz-placeholder { /* Firefox 18- */
    color: rgba(46,46,46,0.70);
    font-family: Palatino,Helvetica, Arial, sans-serif; !important;
    font-size: 15px;
}
CSS;

    }
}