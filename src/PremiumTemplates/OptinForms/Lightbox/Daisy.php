<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;

use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Daisy extends AbstractOptinTheme
{
    public $optin_form_name = 'Daisy';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        // -- default for design sections -- //
        add_filter('mo_optin_form_background_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_headline_font_color_default', function () {
            return '#000000';
        });

        add_filter('mo_optin_form_headline_font_default', function () {
            return 'Courgette';
        });

        // -- default for description sections -- //
        add_filter('mo_optin_form_description_font_default', function () {
            return 'Titillium Web';
        });

        // -- default for design sections -- //
        add_filter('mo_optin_form_border_color_default', function () {
            return '#2ecc71';
        });

        // -- default for headline sections -- //
        add_filter('mo_optin_form_headline_default', function () {
            return __("Get Your Free Ebook", 'mailoptin');
        });

        add_filter('mo_optin_form_description_default', function () {
            return $this->_description_content();
        });

        add_filter('mo_optin_form_description_font_color_default', function () {
            return '#a2a2a2';
        });

        // -- default for fields sections -- //
        add_filter('mo_optin_form_name_field_color_default', function () {
            return '#000';
        });

        add_filter('mo_optin_form_email_field_color_default', function () {
            return '#000';
        });

        add_filter('mo_optin_form_submit_button_color_default', function () {
            return '#ffffff';
        });

        add_filter('mo_optin_form_submit_button_background_default', function () {
            return '#2ecc71';
        });

        add_filter('mo_optin_form_submit_button_font_default', function () {
            return 'Merriweather';
        });

        add_filter('mo_optin_form_name_field_font_default', function () {
            return 'Trebuchet MS, Arial, sans-serif';
        });

        add_filter('mo_optin_form_email_field_font_default', function () {
            return 'Trebuchet MS, Arial, sans-serif';
        });

        // -- default for note sections -- //
        add_filter('mo_optin_form_note_font_color_default', function () {
            return '#000000';
        });

        add_filter('mo_optin_form_note_default', function () {
            return __("I'll Pass, Thank you", 'mailoptin');
        });

        add_filter('mo_optin_form_note_font_default', function () {
            return 'Merriweather';
        });

        add_filter('mo_optin_form_name_field_placeholder_default', function () {
            return __("Enter your name...", 'mailoptin');
        });

        add_filter('mo_optin_form_email_field_placeholder_default', function () {
            return __("Enter your email...", 'mailoptin');
        });

        add_filter('mo_optin_form_customizer_fields_settings', function ($settings) {
            $settings['hide_name_field']['transport'] = 'refresh';
            return $settings;
        });

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        $this->default_form_image_partial = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/bookcover.png';

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 250;
            $config['height'] = 300;

            return $config;
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
        return 'This comprehensive marketing book will teach you everything you need to become one of the best marketers of this generation.';
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
        $optin_default_image = $this->default_form_image_partial;

        return <<<HTML

[mo-optin-form-wrapper class="daisy-container"]
<div class="daisy-clearfix">
    <div class="daisy-form daisy-tabbled daisy-half-col">
        [mo-optin-form-headline tag="div" class="daisy-header"]
        [mo-optin-form-description class="daisy-description"]
    </div>
    <div class="daisy-form daisy-half-col">
        <div class="dasiy-image-wrap mo-optin-form-image-wrapper">
            [mo-optin-form-image default="$optin_default_image"]
        </div>
    </div>
</div>
<div class="daisy-form_button daisy-clearfix">
    <div class="daisy-form-wrap">
        [mo-optin-form-name-field class="daisy-input"]
        [mo-optin-form-email-field class="daisy-input"]
        [mo-optin-form-submit-button class="daisy-submit-button"]
    </div>
    [mo-optin-form-error]
</div>
[mo-optin-form-note class="daisy-note mo-close-optin"]
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
        div#$optin_css_id.daisy-container {
    max-width: 600px;
    background: #fff;
    padding: 20px;
    border: 5px solid #2ecc71;
}
div#$optin_css_id.daisy-container * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
div#$optin_css_id.daisy-container div.daisy-header {
    font-family: 'Courgette', cursive;
    color: #000;
    font-weight: 700;
    margin: 10px 0;
    font-size: 25px;
    line-height: 1.5;
    text-align: center;
}
div#$optin_css_id.daisy-container .dasiy-image-wrap img {
    max-height: 300px;
    margin: 0px auto;
}
div#$optin_css_id.daisy-container .daisy-clearfix:before,
div#$optin_css_id.daisy-container .daisy-clearfix:after {
    display: table;
    content: " ";
}
div#$optin_css_id.daisy-container .daisy-clearfix:after {
    clear: both;
}
div#$optin_css_id.daisy-container .daisy-half-col {
    position: relative;
    min-height: 1px;
    float: left;
    width: 100%;
}
div#$optin_css_id.daisy-container input.daisy-input:focus {
    background: #f5f1f1;
}
div#$optin_css_id.daisy-container .daisy-note {
    font-family: merriweather, sans-serif;
    text-decoration: underline;
    margin: 10px 0 0;
    text-align: center;
    cursor: pointer;
    font-size: 12px;
}
div#$optin_css_id.daisy-container .daisy-description {
    font-family: 'merriweather', sans-serif;
    font-size: 17px;
    line-height: 1.5;
    text-align: center;
    color: #777;
    margin: 10px 0;
    font-weight: 300;
}
div#$optin_css_id.daisy-container img.mo-optin-form-image {
    display: block;
    max-width: 100%;
    height: auto;
}
div#$optin_css_id.daisy-container .dasiy-image-wrap {
    text-align: center;
    margin: 10px auto;
    width: 100%;
    padding-top: 0px;
}
div#$optin_css_id.daisy-container input.daisy-input {
    border: 1px solid #2ecc71;
    width: 100%;
    display: block;
    margin: 0;
    margin-bottom: 5px;
    padding: 10px;
    font-size: 14px;
    font-weight: 700;
    line-height: normal;
}
div#$optin_css_id.daisy-container input[type="submit"].daisy-submit-button {
    width: 100%;
    height: 44px;
    margin: 0;
    text-transform: uppercase;
    border: 0px;
    background: #2ecc71;
    font-weight: 700;
    color: white;
    font-family: merriweather, sans-serif;
    cursor: pointer;
    font-size: 13px;
    padding: 12px;
    line-height: normal;
}
div#$optin_css_id.daisy-container .daisy-description {
    font-family: merriweather, sans-serif;
    color: #a2a2a2;
    font-size: 17px;
}
div#$optin_css_id.daisy-container div.mo-optin-error {
    display: none;
    color: #FF0000;
    font-size: 12px;
    text-align: center;
    width: 100%;
}
    
@media only screen and (min-width: 500px) {
    div#$optin_css_id.daisy-container input.daisy-input {
        width: 100%;
    }
}
@media only screen and (min-width: 400px) {
    div#$optin_css_id.daisy-container .daisy-half-col {
        position: relative;
        min-height: 1px;
        float: left;
        width: 50%;
    }
    div#$optin_css_id.daisy-container .daisy-tabbled {
        display: table-cell;
    }
    div#$optin_css_id.daisy-container input.daisy-input {
        width: 100%;
    }
}
@media only screen and (min-width: 768px) {
    div#$optin_css_id.daisy-container .daisy-half-col {
        width: 50%;
    }
}
@media only screen and (min-width: 800px) {
    div#$optin_css_id.daisy-container input.daisy-input {
        width: 100%;
    }
}
@media only screen and (min-width: 1200px) {
    div#$optin_css_id.daisy-container .daisy-note {
        padding-top: 10px !important;
    }
}
@media only screen and (min-width: 900px) {
    div#$optin_css_id.daisy-container .daisy-form-wrap {
        text-align: center;
        background: #2ecc71;
        padding: 3px 3px 6px;
        margin: 20px auto 10px;
        width: 100%;
        border-radius: 5px;
        height: 44px;
    }
    div#$optin_css_id.daisy-container input.daisy-input {
        width: 33%;
        font-weight: normal;
        float: left;
        padding-right: 10px;
        margin-right: 10px !important;
        border-radius: 3px;
        font-family: merriweather, sans-serif;
    }
    div#$optin_css_id.daisy-container .daisy-note {
        padding-top: 20px;
    }
    div#$optin_css_id.daisy-container input[type="submit"].daisy-submit-button {
        width: 30%;
    }
    div#$optin_css_id.daisy-container {
        padding: 20px;
    }
    
    
div#$optin_css_id.mo-has-email.daisy-container input.daisy-input {
    width: 66% !important;
}

div#$optin_css_id.mo-has-email.daisy-container input[type="submit"].daisy-submit-button {
        width: 30%;
    }
}
/* hide image on small devices */

@media only screen and (max-width: 399px) {
    div#$optin_css_id.daisy-container img.mo-optin-form-image {
        display: none
    }
    
    
div#$optin_css_id.mo-has-email.daisy-container input.daisy-input {
    width: 100% !important;
}
}

CSS;

    }
}