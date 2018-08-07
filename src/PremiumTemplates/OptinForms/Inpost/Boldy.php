<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Inpost;

use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;
use MailOptin\Core\Repositories\OptinCampaignsRepository;

class Boldy extends AbstractOptinTheme
{
    public $optin_form_name = 'Boldy';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id)
    {
        $this->init_config_filters([

                // -- default for design sections -- //
                [
                    'name' => 'mo_optin_form_background_color_default',
                    'value' => '#2d3144',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_border_color_default',
                    'value' => '#2d3144',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                // -- default for headline sections -- //
                [
                    'name' => 'mo_optin_form_headline_default',
                    'value' => __("Sport News Around The World", 'mailoptin'),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_headline_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                // -- default for description sections -- //
                [
                    'name' => 'mo_optin_form_description_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_description_default',
                    'value' => __('Subscribe To Our Newsletter'),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_description_font_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                // -- default for fields sections -- //
                [
                    'name' => 'mo_optin_form_name_field_color_default',
                    'value' => '#181818',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_name_field_placeholder_default',
                    'value' => __("Enter your name...", 'mailoptin'),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_name_field_background_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],
                [
                    'name' => 'mo_optin_form_email_field_color_default',
                    'value' => '#181818',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_email_field_background_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_email_field_placeholder_default',
                    'value' => __("Enter your email...", 'mailoptin'),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_color_default',
                    'value' => '#ffffff',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_background_default',
                    'value' => '#13aff0',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_submit_button_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_name_field_font_default',
                    'value' => 'Franklin Gothic Medium, sans-serif',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_email_field_font_default',
                    'value' => 'Franklin Gothic Medium, sans-serif',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                // -- default for note sections -- //
                [
                    'name' => 'mo_optin_form_note_font_color_default',
                    'value' => '#8f8888',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_note_default',
                    'value' => $this->_note_content(),
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mo_optin_form_note_font_default',
                    'value' => 'Lato',
                    'optin_class' => 'Boldy',
                    'optin_type' => 'inpost'
                ],

                [
                    'name' => 'mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_style',
                    'value' => function () {
                        return 'inline';
                    }
                ],

                [
                    'name' => 'mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_alignment',
                    'value' => function () {
                        return 'center';
                    }
                ],

                [
                    'name' => 'mailoptin_customizer_optin_campaign_MailChimpConnect_user_input_field_color',
                    'value' => function () {
                        return '#ffffff';
                    }
                ]
            ]
        );

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        $this->default_form_image_partial = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/boldy-img.png';

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 700;
            $config['height'] = 190;

            return $config;
        });

        parent::__construct($optin_campaign_id);
    }

    public function features_support()
    {
        // no cta support declared for this theme.
        return [];
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
        $settings['note_position'] = [
            'default' => 'before_form',
            'type' => 'option',
            'transport' => 'refresh',
        ];

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
        $controls['note_position'] = apply_filters('mo_optin_form_customizer_note_position_args', array(
                'type' => 'select',
                'description' => __(''),
                'choices' => [
                    'before_form' => __('Before Form', 'mailoptin'),
                    'after_form' => __('After Form', 'mailoptin')
                ],
                'label' => __('Position', 'mailoptin'),
                'section' => $customizerClassInstance->note_section_id,
                'settings' => $option_prefix . '[note_position]',
                'priority' => 15,
            )
        );

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
        $optin_default_image = $this->default_form_image_partial;
        $note_position = OptinCampaignsRepository::get_customizer_value($this->optin_campaign_id, 'note_position', 'before_form');
        $before_form_note = $after_form_note = '';

        if ($note_position == 'after_form') $after_form_note = '[mo-optin-form-note class="boldy_note"]';
        if ($note_position == 'before_form') $before_form_note = '[mo-optin-form-note class="boldy_note"]';


        return <<<HTML
        [mo-optin-form-wrapper class="boldy_container"]
            <div class="boldy_inner">
                    <div class="boldy_featureImage boldy_isresponsive mo-optin-form-image-wrapper">
                    [mo-optin-form-image default="$optin_default_image"]
                    </div>
                <div class="boldy_main">
                    [mo-optin-form-headline tag="div" class="boldy_header"]
                    [mo-optin-form-description class="boldy_description"]
                    $before_form_note
                        <div class="boldy_main-form">
                            [mo-optin-form-name-field class="boldy_input"]
                            [mo-optin-form-email-field class="boldy_input"]
                            [mo-optin-form-submit-button class="boldy_submitButton"]
                        </div>
                            [mo-mailchimp-interests]
		            $after_form_note
		            [mo-optin-form-error class="boldy_optin_error"]
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

      div#$optin_css_id.boldy_container {
            margin: 0 auto;
            font-size: 16px;
            background: #2d3144;
            border: 2px solid #2d3144;
            width: 100%;
        }

       div#$optin_css_id.boldy_container .boldy_isresponsive img {
            display: block;
            width: 100%;
            height: auto;
        }

        div#$optin_css_id.boldy_container .boldy_inner {
            margin: 0;
            position: relative;
        }

        div#$optin_css_id.boldy_container .boldy_main .boldy_header,
        div#$optin_css_id.boldy_container .boldy_main .boldy_description,
        div#$optin_css_id.boldy_container .boldy_main .boldy_note,
        div#$optin_css_id.boldy_container .boldy_input{
            font-family: "Lato", sans-serif;
        }

       div#$optin_css_id.boldy_container .boldy_main .boldy_header,
       div#$optin_css_id.boldy_container .boldy_main .boldy_description,
       div#$optin_css_id.boldy_container .boldy_main .boldy_note{
            color: #fff;
        }

        div#$optin_css_id.boldy_container .boldy_main .boldy_header {
            font-weight: 700;
            display: block;
            border: 0;
            line-height: normal;
        }

        div#$optin_css_id.boldy_container .boldy_main {
            text-align: center;
            padding: 20px;
            background: inherit;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            margin: 0;
        }

        div#$optin_css_id.boldy_container .boldy_main .boldy_description {
            font-size: 15px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-weight: 500;
            display: block;
            border: 0;
            line-height: normal;
        }

        div#$optin_css_id.boldy_container .boldy_main .boldy_note {
            color: #8f8888;
            display: block;
            border: 0;
            line-height: normal;
        }

        div#$optin_css_id.boldy_container input.boldy_input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 0px;
            outline: none;
        }
        
        div#$optin_css_id.boldy_container.mo-has-email input.boldy_input {
            width: 100% !important;
        }

        div#$optin_css_id.boldy_container input.boldy_input:focus,
         div#$optin_css_id.boldy_container input.boldy_submitButton:focus {
            outline: 0
        }

        div#$optin_css_id.boldy_container .boldy_main-form {
            padding: 20px;
        }

        div#$optin_css_id.boldy_container input.boldy_submitButton {
            font-family: Lato, sans-serif, Arial, Verdana, "Trebuchet MS";
            font-size: 15px;
            text-transform: uppercase;
            padding: 6px;
            border-radius: 4px;
            border: 0;
            font-weight: 700;
            background: #13aff0;
            color: #fff;
            cursor: pointer;
            outline: none;
            letter-spacing: 1.5px;
            width: 100%;
        }

        div#$optin_css_id.boldy_container .boldy_optin_error {
            display:none;
            font-size: 14px;
            color: #ff5151 !important;
            font-style: italic;
            margin: 5px auto;
        }

       div#$optin_css_id.boldy_container .boldy_featureImage.boldy_isresponsive img {
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        @media only screen and (min-width: 720px){
        
          div#$optin_css_id.boldy_container .boldy_main-form {
                padding: 30px 20px 20px;
                display: flex;
            }
            
            div#$optin_css_id.boldy_container .boldy_main .boldy_description {
                font-size: 22px;
                padding-top: 0px;
                font-weight: 500;
            }

            div#$optin_css_id.boldy_container .boldy_main .boldy_header {
                font-size: 26px;
            }
            div#$optin_css_id.boldy_container input.boldy_input {
                width: 35%;
                padding: 15px;
                border-radius: 3px;
                border: 0px;
                margin-right: 10px;
                margin-bottom: 0px;
            }
            div#$optin_css_id.boldy_container input.boldy_submitButton {
            width: 30%;
            }
        }

        @media only screen and (min-width: 1000px){
            div#$optin_css_id.boldy_container input.boldy_input {
                font-weight: 600;
                font-size: 14px;
            }

            div#$optin_css_id.boldy_container .boldy_main .boldy_header{
                font-size: 38px;
                padding-bottom: 5px;
            }
        }
CSS;

    }
}