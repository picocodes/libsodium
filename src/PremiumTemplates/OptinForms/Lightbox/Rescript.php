<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Tinymce_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Rescript extends AbstractOptinTheme
{
    public $optin_form_name = 'Rescript';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        $this->init_config_filters([

                // -- default for design sections -- //
                [
                    'name' => 'mo_optin_form_background_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_border_color_default',
                    'value' => '#4b4646',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                // -- default for headline sections -- //
                [
                    'name' => 'mo_optin_form_headline_default',
                    'value' => __("Subscribe To Newsletter", 'mailoptin'),
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_color_default',
                    'value' => '#4b4646',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_default',
                    'value' => 'Open+Sans',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                // -- default for description sections -- //
                [
                    'name' => 'mo_optin_form_description_font_default',
                    'value' => 'Open+Sans',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_description_default',
                    'value' => $this->_description_content(),
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_description_font_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                // -- default for fields sections -- //
                [
                    'name' => 'mo_optin_form_name_field_color_default',
                    'value' => '#181818',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],


                [
                    'name' => 'mo_optin_form_name_field_background_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],
                [
                    'name' => 'mo_optin_form_email_field_color_default',
                    'value' => '#181818',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_email_field_background_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_background_default',
                    'value' => '#0073b7',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_font_default',
                    'value' => 'Open+Sans',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_name_field_font_default',
                    'value' => 'Palatino Linotype, Book Antiqua, serif',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_email_field_font_default',
                    'value' => 'Palatino Linotype, Book Antiqua, serif',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                // -- default for note sections -- //
                [
                    'name' => 'mo_optin_form_note_font_color_default',
                    'value' => '#000000',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_note_close_optin_onclick_default',
                    'value' => true,
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_note_default',
                    'value' => __('No, I don\'t want to.', 'mailoptin'),
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_note_font_default',
                    'value' => 'Open+Sans',
                    'optin_class' => 'Rescript',
                    'optin_type' => 'lightbox'
                ]
            ]
        );

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        $this->default_form_image_partial = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/gridgum-img.png';

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 278;
            $config['height'] = 500;

            return $config;
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_user_input_field_color', function () {
            return '#000000';
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
        $settings['mini_headline'] = array(
            'default' => "DON'T MISS OUT!",
            'type' => 'option',
            'transport' => 'refresh',
            'sanitize_callback' => array($CustomizerSettingsInstance, '_remove_paragraph_from_headline'),
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
        add_filter('mailoptin_tinymce_customizer_control_count', function ($count) {
            return ++$count;
        });

        $controls['mini_headline'] = new WP_Customize_Tinymce_Control(
            $wp_customize,
            $option_prefix . '[mini_headline]',
            apply_filters('mo_optin_form_customizer_mini_headline_args', array(
                    'label' => __('Mini Headline', 'mailoptin'),
                    'section' => $customizerClassInstance->headline_section_id,
                    'settings' => $option_prefix . '[mini_headline]',
                    'editor_id' => 'mini_headline',
                    'editor_height' => 50,
                    'priority' => 5
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
        return __('Be the first to get latest updates and exclusive content straight to your email inbox.', 'mailoptin');
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
        $mini_header = $this->get_customizer_value('mini_headline');
        $mini_header = empty($mini_header) ? __("Don't miss out!", 'mailoptin') : $mini_header;

        $optin_default_image = $this->default_form_image_partial;

        return <<<HTML
<div class="big-width-sub-form">
        <div class="the-close-button-div">
            <a class="close-form" href="#"><img class="the-close-bt-image" src="close.png"></a>
        </div>
        <div class="col-img">
        <img src="Capture.PNG" class="img-responsive">
    </div>
    <div class="col-big">  
        <div class="col-righted">
        <p class="first-paragraph"> September 18th, 2PM EST </p>
        <h2 class="big-header"> Learn how to easily create your teachable school in live workshop</h2>
        <p class="the-main-tlk">in this free live workshop, learn how to setup your first course on teachable and start teaching this week</p>
        <div class="the-sub-form cleared-ox">
        <form action="#" method="post">
            <div class="the-form-main-inner">
                <input class="new-sub-form-email" placeholder="Email addresss">
                <button class="the-sub-button"> Register </button>
            </div>
        </form>
        </div>
        </div>
    </div>
    
    </div>


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
input {
    line-height: normal;
}

button, input, optgroup, select, textarea {
    margin: 0;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.img-responsive{
    display: block;
    max-width: 100%;
    height: auto;
}

.cleared-ox::before, .cleared-ox::after{
    content: " ";
    display: table;
}

.cleared-ox::after{
    clear: both;
}

.col-img {
    display: none;
}

.big-width-sub-form {
    padding: 50px 50px 0px 0px;
}

.first-paragraph {
    text-transform: uppercase;
    font-weight: 700;
}

.big-width-sub-form {
    padding: 20px;
    background: #fff;
    border-radius: 6px;
    border: 1px solid #ccc;
    position: relative;
}
.col-big p {
    font-family: 'Open Sans', sans-serif;
}
.col-big p {
    font-family: open sans;
    line-height: 1.8;
    color: #737373;
}

.new-sub-form-email {
    border: 2px solid #ff4b4b;
    width: 100%;
    border-radius: 100px;
    padding: 10px;
        padding-left: 10px;
    height: 60px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    padding-left: 25px !important;
    color: #737373;
}

.the-form-main-inner {
    position: relative;
}

.the-close-bt-image {
    width: 15px;
    height: 15px;
}

.close-form {
    text-decoration: none;
    color: #d8d8d8;
    font-family: 'Open Sans', sans-serif;
}

.the-close-button-div {
    position: absolute;
    right: 20px;
    top: 15px;
}

.big-header {
    font-family: 'PT Serif', serif;
    line-height: 1.5;
    color: #2c2f33;
}

.col-big p {
    font-family: 'Open Sans', sans-serif;
    line-height: 1.8;
    color: #bebebe;
}

.the-sub-form {
    padding-top: 20px;
    padding-bottom: 20px;
    position: relative;
}
.the-sub-button {
    width: 100%;
    margin-top: 10px;
    background: #ff7f45;
    border: 0px;
    padding: 10px;
    border-radius: 100px;
    height: 60px;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif;
    margin-top: 20px;
}

.moModal .mo-optin-form-container {
    max-width: 900px !important;
}



/* Responsive cases*/

@media only screen and (min-width: 230px){
    .col-righted {
    padding: 20px ;
}
}
@media only screen and (min-width: 580px){
    .big-width-sub-form {
    padding: 40px;
    }
}

@media only screen and (min-width: 768px){
    .big-width-sub-form {
        padding: 50px;
    }
    .the-sub-button {
        width: 165px;
        margin-top: 0px;
        background: #ff7f45;
        border: 0px;
        padding: 10px;
        border-radius: 100px;
        height: 60px;
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;
        font-family: 'Open Sans', sans-serif;
        margin-top: 0px !important;
        position: absolute;
        right: 0;
        top: 0;
    }
}



@media only screen and (min-width: 900px){
        .col-big {
            padding-right: 20px;
            padding-left: 320px;
            padding-top: 25px;
        }
            .col-img {
            display: inline-block;
        }
            .col-img {
            float: left;
        }
            .big-width-sub-form {
            padding: 0px;
        }
        .the-form-main-inner {
            width: 440px;
            float: left;
            position: relative;
        }
        .the-sub-form {
            padding-bottom: 0px;
        }

        .col-righted {
            padding-top: 20px;
        }
            .big-width-sub-form {
            padding: 0px;
            width: 800px;
        }
        .col-img img {
            height: 400px;
            width: 315px;
        }
        .col-righted {
            padding-bottom: 0px ;
        }
}

@media only screen and (min-width: 1000px){
     .big-width-sub-form {
    padding: 0px;
    width: 900px;
}
    .new-sub-form-email{
        padding-right: 173px;
    }
    
}

@media only screen and (min-width: 1200px){
    .big-width-sub-form {
    width: 900px;
    }
}

CSS;

    }
}