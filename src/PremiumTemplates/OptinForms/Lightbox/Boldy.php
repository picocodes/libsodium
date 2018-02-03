<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;

use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Boldy extends AbstractOptinTheme
{
    public $optin_form_name = 'Boldy';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        $this->init_config_filters([

                // -- default for design sections -- //
                [
                    'name' => 'mo_optin_form_background_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_border_color_default',
                    'value' => '#4b4646',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                // -- default for headline sections -- //
                [
                    'name' => 'mo_optin_form_headline_default',
                    'value' => __("Sport News Around The World", 'mailoptin'),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_color_default',
                    'value' => '#4b4646',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                // -- default for description sections -- //
                [
                    'name' => 'mo_optin_form_description_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_description_default',
                    'value' => __('Subscribe To Our Newsletter'),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_description_font_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                // -- default for fields sections -- //
                [
                    'name' => 'mo_optin_form_name_field_color_default',
                    'value' => '#181818',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],


                [
                    'name' => 'mo_optin_form_name_field_background_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],
                [
                    'name' => 'mo_optin_form_email_field_color_default',
                    'value' => '#181818',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_email_field_background_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_background_default',
                    'value' => '#0073b7',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_name_field_font_default',
                    'value' => 'Palatino Linotype, Book Antiqua, serif',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_email_field_font_default',
                    'value' => 'Palatino Linotype, Book Antiqua, serif',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                // -- default for note sections -- //
                [
                    'name' => 'mo_optin_form_note_font_color_default',
                    'value' => '#000000',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_note_close_optin_onclick_default',
                    'value' => true,
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_note_default',
                    'value' => $this->_note_content(),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_form_note_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ],

                [
                    'name' => 'mo_optin_branding_outside_form',
                    'value' => true,
                    'optin_class' => 'Boldy',
                    'optin_type' => 'lightbox'
                ]
            ]
        );

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        $this->default_form_image_partial = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/boldy-img.png';

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
    private function _note_content()
    {
        return __('Join our subscribers who get content directly to their inbox.', 'mailoptin');
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
        $close_image = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/close.png';

        return <<<HTML
<div class="new-style-2">
            <div class="new-style-2-inner">
                <a class="trenton-element-close trenton-close" title="Close" style="background-color:#2d3144;color:#ffffff;">×</a>
                <div class="new-style-2-top">
                    <div class="new-style-small-image img-is-responsive">
                        <img src="$optin_default_image">
                    </div>
                </div>
                <div class="new-style-lower">
                    <h2> Psst.. you forgot something</h2>
                    <h3> Subscribe to the Newslatter !</h3>
                    <div class="note"> join our suscribers who get content directly to they inbox </div>
                    <form method="post" action="#">
                        <div class="new-style-lower-form">
                            <input class="new-style-lower-input" type="text" placeholder="First Name ...">
                            <input class="new-style-lower-input" type="text" placeholder="Email Address ...">
                            <input type="submit" class="new-style-lower-submit" value="Sign up">
                        </div>
                    </form>

                    <div class="new-style-lower-error">Please enter a valid email address. </div>
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

        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        
        .trenton-close {
    color: #fff;
    position: absolute;
    width: 40px;
    height: 40px;
    top: -18px;
    right: -18px;
    text-align: center;
    font-size: 30px;
    line-height: .45;
    font-weight: 700;
    text-decoration: none!important;
    font-family: Helvetica,"Helvetic Neue",Arial,sans-serif;
    z-index: 1050;
    padding: 11px 12px;
    background-color: #353945;
    border-radius: 100px;
}

        .img-is-responsive img{
            display: block;
            width: 100%;
            height: auto;
        }

        .new-style-2 {
            margin: 0px auto;
            /* global font-size*/
            font-size: 16px;
            background: #2d3144;
        }

        .new-style-2-inner {
            margin: 0;
            position: relative;
        }

        .new-style-lower h2, .new-style-lower h3, .new-style-lower .note, .new-style-lower-input{
            font-family: "Lato", sans-serif;
        }

        .new-style-lower h2, .new-style-lower h3, .new-style-lower .note{
            color: #fff;
        }

        .new-style-lower h2 {
            font-weight: 700;
        }

        .new-style-lower {
            text-align: center;
            padding: 20px;
            background: inherit;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            margin: 0;
        }

        .new-style-lower h3 {
            font-size: 15px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-weight: 500;
        }

        .new-style-lower .note {
            color: #8f8888;
        }

        .new-style-lower-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 0px;
            outline: none;
        }

        .new-style-lower-form {
            padding: 20px;
        }

        .new-style-lower-submit {
            font-family: Lato;
            font-size: 15px;
            text-transform: uppercase;
            padding: 6px 18px;
            border-radius: 4px;
            border: 0px;
            font-weight: 700;
            background: #13aff0;
            color: #fff;
            cursor: pointer;
            outline: none;
            letter-spacing: 1.5px;
            width: 100%;
        }

        .new-style-lower-error {
            font-size: 12px;
            color: #ff5151 !important;
            font-style: italic;
        }

        .new-style-small-image.img-is-responsive img {
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .new-style-2-close-btn {
            position: absolute;
            right: -13px;
            background: #2d3144;
            top: -13px;
            border-radius: 100px;
            padding: 5px;
            width: 25px;
            height: 25px;
            box-sizing: content-box;
        }

        @media only screen and (min-width: 720px){
        
            .new-style-lower-form {
                padding: 30px 20px 20px;
                display: flex;
            }
            
            .new-style-lower h3 {
                font-size: 22px;
                padding-top: 0px;
                font-weight: 500;
            }

            .new-style-lower h2 {
                font-size: 26px;
            }
            .new-style-lower-input {
                width: 35%;
                padding: 15px;
                border-radius: 3px;
                border: 0px;
                margin-right: 10px;
                margin-bottom: 0px;
            }
            .new-style-lower-submit {
            width: 25%;
            }
        }

        @media only screen and (min-width: 1000px){
            .new-style-lower-input {
                font-weight: 600;
                font-size: 14px;
            }

            .new-style-lower-error {
                font-size: 16px;
            }
            .new-style-lower h2{
                font-size: 38px;
                padding-bottom: 5px;
            }
        }
CSS;

    }
}