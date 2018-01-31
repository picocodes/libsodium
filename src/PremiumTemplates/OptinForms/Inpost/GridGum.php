<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Inpost;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Tinymce_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Gridgum extends AbstractOptinTheme
{
    public $optin_form_name = 'Gridgum';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id, $wp_customize = '')
    {
        $this->init_config_filters([


                // -- default for design sections -- //
                [
                    'name' => 'mo_optin_form_background_color_default',
                    'value' => '#f0f0f0',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_border_color_default',
                    'value' => '#00cc77',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                // -- default for headline sections -- //
                [
                    'name' => 'mo_optin_form_headline_default',
                    'value' => __("Get a little acid in your inbox", 'mailoptin'),
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_color_default',
                    'value' => '#222222',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_default',
                    'value' => 'Glegoo',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                // -- default for description sections -- //
                [
                    'name' => 'mo_optin_form_description_font_default',
                    'value' => 'Satisfy',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_description_default',
                    'value' => $this->_description_content(),
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_description_font_color_default',
                    'value' => '#000000',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                // -- default for fields sections -- //
                [
                    'name' => 'mo_optin_form_name_field_color_default',
                    'value' => '#222222',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_email_field_color_default',
                    'value' => '#222222',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_background_default',
                    'value' => '#0073b7',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_font_default',
                    'value' => 'Helvetica+Neue',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_name_field_font_default',
                    'value' => 'Consolas, Lucida Console, monospace',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_email_field_font_default',
                    'value' => 'Consolas, Lucida Console, monospace',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                // -- default for note sections -- //
                [
                    'name' => 'mo_optin_form_note_font_color_default',
                    'value' => '#000000',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_note_default',
                    'value' => '<em>' . __('We promise not to spam you. You can unsubscribe at any time', 'mailoptin') . '</em>',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_note_font_default',
                    'value' => 'Source+Sans+Pro',
                    'optin_class' => 'BareMetal',
                    'optin_type' => 'inpost'
                ]
            ]
        );

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        $this->default_form_image_partial = MAILOPTIN_ASSETS_URL . 'images/optin-themes/bannino/optin-image.png';

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 700;
            $config['height'] = 300;

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
        return __('Signup to best of business news, informed analysis and opinions on what matters to you.', 'mailoptin');
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

        $image = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/gridgum-img.png';

        return <<<HTML
        [mo-optin-form-wrapper class="gridgum_container"]
            <div class="gridgum_inner gridgum_clearfix">
                <div class="gridgum_style-smaller">
                    <div class="gridgum_style-image gridgum_img-responsive">
                        <img src="$image">
                    </div>
                    <div class="gridgum_img-overlay"></div>
                    <div class="gridgum_content-overlay">
                     [mo-optin-form-description class="gridgum_header4"]
                        <div class="gridgum_header2"> Questions ?</div>
                        <div class="gridgum_header4"> You can also contact </div>
                        <div class="gridgum_header4"> us at info@mailoptin.io </div>
                    </div>
                </div>
                <div class="gridgum_body">
                    <div class="gridgum_body-inner">
                        <div class="gridgum_header2">$mini_header</div>
                        [mo-optin-form-headline tag="div" class="gridgum_header3"]
                            <div class="gridgum_body-form">
                            [mo-optin-form-name-field class="gridgum_input_field"]
                            [mo-optin-form-email-field class="gridgum_input_field"]
                            [mo-optin-form-cta-button class="gridgum_submit_button"]
                            </div>
                        <!--<div class="gridgum_note"> <u>No, I don't want one</u></div>-->
                       [mo-optin-form-note class="gridgum_note"]
                    </div>
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
        $optin_uuid = $this->optin_campaign_uuid;
        return <<<CSS
* {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        .gridgum_style-smaller{
            display: none;
        }

        .gridgum_body {
            width: 100%;
            margin: 10px auto;
        }

        .gridgum_inner {
            width: 100%;
            background: white;
            margin: 0px auto;
            border: 1px solid #e7e7e7;
            border-radius: 3px;
            padding: 20px;
        }

        .gridgum_body-inner .gridgum_header2 {
            text-transform: uppercase;
            font-weight: 900;
            padding-bottom: 10px;
            font-size: 12px;
            color: #46ca9b;
            text-align: center;
        }

        .gridgum_body-inner .gridgum_header2, .gridgum_body-inner .gridgum_header3, .gridgum_body-form .gridgum_input_field, .gridgum_submit_button, .gridgum_note , .gridgum_content-overlay .gridgum_header2, .gridgum_content-overlay .gridgum_header4 {
            font-family: "Open Sans", sans-serif;
        }

        .gridgum_body-inner .gridgum_header3 {
            padding-bottom: 10px;
            color: #4b4646;
            font-size: 25px;
            text-align: center;
            text-transform: capitalize;
        }
        .gridgum_body-form .gridgum_input_field {
            width: 100%;
            padding: 10px 0px;
            margin-bottom: 20px;
            border: 0px;
            border-bottom: 2px solid #ccc;
            font-weight: 600;
            color: #181818;
            font-size: 15px;
        }

        .gridgum_submit_button {
            padding: 10px 20px;
            font-size: 15px;
            border-radius: 3px;
            border: 0px;
            background: #46ca9b;
            text-transform: uppercase;
            color: #fff;
            font-weight: 600;
            width: 100%;
        }

        .gridgum_note {
            padding-top: 20px;
            text-align: center;
        }

        .gridgum_note {
            color: #777;
        }

        .gridgum_img-responsive img{
            display: block;
            width: 100%;
            height: 100%;
        }

        @media (min-width: 700px) {
            .gridgum_style-smaller {
                display: block;
            }
            .gridgum_inner {
                max-width: 700px;
            }

            .gridgum_style-smaller{
                width: 45%;
                position: relative;
                float: left;
            }

            .gridgum_body {
                width: 55%;
                position: relative;
                float: left;
            }
            
            .gridgum_clearfix:before,
            .gridgum_clearfix:after {
            display: table;
            content: " ";
            }

            .gridgum_clearfix:after {
                clear: both;
            }

            .gridgum_body-inner {
                padding-left: 50px;
                padding-top: 50px;
                padding-right: 50px;
            }

            .gridgum_content-overlay {
                position: absolute;
                bottom: 60px;
                left: 18%;
            }

            .gridgum_inner {
                padding: 0px;
            }

            .gridgum_style-image.gridgum_img-responsive {
                height: 460px;
                display: block;
                overflow: hidden;
            }

            .gridgum_img-overlay {
                background: -webkit-gradient(linear, left top, right top, from(#5FC3E499), to(#E55D87E6));
                background: -webkit-linear-gradient(left, #5FC3E499, #E55D87E6);
                background: -o-linear-gradient(left, #5FC3E499, #E55D87E6);
                background: linear-gradient(to right, #5FC3E499, #E55D87E6);
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .gridgum_content-overlay .gridgum_header2, .gridgum_content-overlay .gridgum_header4 {
                color: #fff;
            }

            .gridgum_content-overlay .gridgum_header2 {
                padding-bottom: 10px;
            }
        }

        @media (min-width: 980px) {
            .gridgum_inner {
                max-width: 800px;
            }
            .gridgum_style-image.gridgum_img-responsive {
                height: 500px;
            }
            .gridgum_body-inner .gridgum_header2 {
                font-size: 18px;
                text-align: center;
                padding-bottom: 0px;
            }
            .gridgum_body-inner .gridgum_header3 {
                font-size: 33px;
            }
        }

        @media (min-width: 980px) {
            .gridgum_style-smaller {
                width: 40%;
            }

            .gridgum_body {
                 width: 60%;
            }
        }

CSS;

    }
}