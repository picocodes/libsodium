<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Inpost;

use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Tinymce_Control;
use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Rescript extends AbstractOptinTheme
{
    public $optin_form_name = 'Rescript';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id)
    {
        $this->init_config_filters([

                // -- default for design sections -- //
                [
                    'name'        => 'mo_optin_form_background_color_default',
                    'value'       => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_border_color_default',
                    'value'       => '#cccccc',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                // -- default for headline sections -- //
                [
                    'name'        => 'mo_optin_form_headline_default',
                    'value'       => __("Learn how to easily create your own website in live workshop", 'mailoptin'),
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_color_default',
                    'value'       => '#2c2f33',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_default',
                    'value'       => 'PT+Serif',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                // -- default for description sections -- //
                [
                    'name'        => 'mo_optin_form_description_font_default',
                    'value'       => 'Open+Sans',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_description_default',
                    'value'       => $this->_description_content(),
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_color_default',
                    'value'       => '#bebebe',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                // -- default for fields sections -- //

                [
                    'name'        => 'mo_optin_form_email_field_placeholder_default',
                    'value'       => __("Enter your email...", 'mailoptin'),
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_email_field_color_default',
                    'value'       => '#737373',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_email_field_background_default',
                    'value'       => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_submit_button_color_default',
                    'value'       => '#ffffff',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_submit_button_background_default',
                    'value'       => '#ff7f45',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_submit_button_font_default',
                    'value'       => 'Open+Sans',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_email_field_font_default',
                    'value'       => 'Palatino Linotype, Book Antiqua, serif',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                // -- default for note sections -- //
                [
                    'name'        => 'mo_optin_form_note_font_color_default',
                    'value'       => '#2c2f33',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_note_font_default',
                    'value'       => 'Open+Sans',
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_branding_outside_form',
                    'value'       => true,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'  => 'mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_style',
                    'value' => function () {
                        return 'inline';
                    }
                ],

                [
                    'name'  => 'mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_alignment',
                    'value' => function () {
                        return 'center';
                    }
                ],

                [
                    'name'  => 'mailoptin_customizer_optin_campaign_MailChimpConnect_user_input_field_color',
                    'value' => function () {
                        return '#919191';
                    }
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_desktop_default',
                    'value'       => 24,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_tablet_default',
                    'value'       => 24,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_mobile_default',
                    'value'       => 20,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_desktop_default',
                    'value'       => 16,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_tablet_default',
                    'value'       => 16,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_mobile_default',
                    'value'       => 14,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_note_font_size_desktop_default',
                    'value'       => 14,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_note_font_size_tablet_default',
                    'value'       => 14,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ],

                [
                    'name'        => 'mo_optin_form_note_font_size_mobile_default',
                    'value'       => 12,
                    'optin_class' => 'Rescript',
                    'optin_type'  => 'inpost'
                ]
            ]
        );

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        $this->default_form_image_partial = MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/rescript-img.jpg';

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width']  = 420;
            $config['height'] = 560;

            return $config;
        });

        add_action('customize_preview_init', function () {
            add_action('wp_footer', [$this, 'customizer_preview_js']);
        });

        parent::__construct($optin_campaign_id);
    }

    public function features_support()
    {
        return [self::CTA_BUTTON_SUPPORT];
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
            'default'           => "DON'T MISS OUT!",
            'type'              => 'option',
            'transport'         => 'refresh',
            'sanitize_callback' => array($CustomizerSettingsInstance, '_remove_paragraph_from_headline'),
        );

        $settings['hide_mini_headline'] = array(
            'default'   => false,
            'type'      => 'option',
            'transport' => 'postMessage'
        );

        $settings['mini_headline_font_color'] = array(
            'default'   => '#bebebe',
            'type'      => 'option',
            'transport' => 'postMessage'
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
                    'label'         => __('Mini Headline', 'mailoptin'),
                    'section'       => $customizerClassInstance->headline_section_id,
                    'settings'      => $option_prefix . '[mini_headline]',
                    'editor_id'     => 'mini_headline',
                    'editor_height' => 50,
                    'priority'      => 4
                )
            )
        );

        $controls['hide_mini_headline'] = new WP_Customize_Toggle_Control(
            $wp_customize,
            $option_prefix . '[hide_mini_headline]',
            apply_filters('mo_optin_form_customizer_hide_mini_headline_args', array(
                    'label'    => __('Hide Mini Headline', 'mailoptin'),
                    'section'  => $customizerClassInstance->headline_section_id,
                    'settings' => $option_prefix . '[hide_mini_headline]',
                    'type'     => 'light',
                    'priority' => 2,
                )
            )
        );

        $controls['mini_headline_font_color'] = new \WP_Customize_Color_Control(
            $wp_customize,
            $option_prefix . '[mini_headline_font_color]',
            apply_filters('mo_optin_form_customizer_headline_mini_headline_font_color_args', array(
                    'label'    => __('Mini Headline Color', 'mailoptin'),
                    'section'  => $customizerClassInstance->headline_section_id,
                    'settings' => $option_prefix . '[mini_headline_font_color]',
                    'priority' => 3
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
        // this optin theme do not have support for name field hence remove them.

        foreach ($fields_settings as $key => $fields_setting) {
            if (strpos($key, 'name_field') !== false) {
                unset($fields_settings[$key]);
            }
        }

        $fields_settings['submit_button_background']['transport'] = 'refresh';

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
        return __('In this free live workshop, learn how to setup your first website and start making money in weeks.', 'mailoptin');
    }

    /**
     * Fulfil interface contract.
     */
    public function optin_script()
    {
    }

    public function customizer_preview_js()
    {
        ?>
        <script type="text/javascript">
            (function ($) {
                $(function () {
                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][mini_headline_font_color]', function (value) {
                        value.bind(function (to) {
                            $('.rescript_miniHeader').css('color', to);
                        });
                    });

                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][hide_mini_headline]', function (value) {
                        value.bind(function (to) {
                            $('.rescript_miniHeader').toggle(!to);
                        });
                    });
                })
            })(jQuery)
        </script>
        <?php
    }

    /**
     * Template body.
     *
     * @return string
     */
    public function optin_form()
    {
        $mini_header = $this->get_customizer_value('mini_headline', __("Don't miss out!", 'mailoptin'));

        $mini_header_block = '<div class="rescript_miniHeader">' . $mini_header . '</div>';

        $optin_default_image = $this->default_form_image_partial;

        return <<<HTML
[mo-optin-form-wrapper class="rescript_container"]
        <div class="rescript_imgCol mo-optin-form-image-wrapper">
        [mo-optin-form-image default="$optin_default_image" class="rescript_imgResponsive"]
    </div>
    <div class="rescript_main">  
        <div class="rescript_copy">
        $mini_header_block
        [mo-optin-form-headline tag="div" class="rescript_headline"]
        [mo-optin-form-description class="rescript_description"]
        <div class="rescript_form rescript_clear">
            <div class="rescript_blockify">
            [mo-optin-form-fields-wrapper]
                [mo-optin-form-email-field class="rescript_inputField"]
                [mo-optin-form-submit-button class="rescript_submitBtn"]
                [mo-mailchimp-interests]
            [/mo-optin-form-fields-wrapper]
    [mo-optin-form-cta-button class="rescript_submitBtn rescript_ctaBtn"]
            </div>
        [mo-optin-form-note class="rescript_note"]
        [mo-optin-form-error]
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
        $optin_uuid   = $this->optin_campaign_uuid;

        $submit_button_background = $this->get_customizer_value('submit_button_background', '#ff7f45');
        $mini_headline_font_color = $this->get_customizer_value('mini_headline_font_color', '#bebebe');

        $is_mini_hadline_display = '';
        if ($this->get_customizer_value('hide_mini_headline', false)) {
            $is_mini_hadline_display = 'display:none;';
        }

        return <<<CSS
                div#$optin_css_id.rescript_container .rescript_imgResponsive {
                    display: block;
                    max-width: 100%;
                    height: auto;
                }

               div#$optin_css_id.rescript_container {
                    margin: 10px auto;
                    padding: 50px 50px 0 0;
                    width: 100%;
                }

               div#$optin_css_id.rescript_container * {
                    font-size: 16px;
                    text-align: center;
                }

               div#$optin_css_id.rescript_container .rescript_clear::before,
               div#$optin_css_id.rescript_container .rescript_clear::after {
                    content: " ";
                    display: table;
                }

                div#$optin_css_id.rescript_container .rescript_clear::after {
                    clear: both;
                }

                div#$optin_css_id.rescript_container .rescript_imgCol {
                    display: none;
                }

                div#$optin_css_id.rescript_container .rescript_miniHeader {
                    text-transform: uppercase;
                    font-weight: 700;
                    color: $mini_headline_font_color;
                    font-size: 16px;
                    display: block;
                    border: 0px;
                    line-height: normal;
                    height: auto;
                    $is_mini_hadline_display

                }

                div#$optin_css_id.rescript_container {
                    padding: 20px;
                    background: #fff;
                    border-radius: 6px;
                    -webkit-border-radius: 6px; 
                    -moz-border-radius: 6px; 
                    border: 1px solid #ccc;
                    position: relative;
                }

               div#$optin_css_id.rescript_container .rescript_main .rescript_description {
                    font-size: 16px;
                    line-height: 1.8;
                    color: #bebebe;
                    display: block;
                    border: 0px;
                    height: auto;
                }
                            
        div#$optin_css_id.rescript_container .mo-optin-error {
             display: none; 
            color: #ff0000;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }

               div#$optin_css_id.rescript_container input.rescript_inputField {
                    border: 2px solid $submit_button_background;
                    width: 100%;
                    max-width: 100%;
                    border-radius: 100px;
                    -webkit-border-radius: 100px; 
                    -moz-border-radius: 100px; 
                    padding: 10px;
                    height: 60px !important;
                    font-weight: 400;
                    padding-left: 25px !important;
                    color: #737373;
                    text-align: left;
                }

               div#$optin_css_id.rescript_container input.rescript_inputField:focus,
               div#$optin_css_id.rescript_container input.rescript_submitBtn:focus {
                    outline: 0;
                }

               div#$optin_css_id.rescript_container .rescript_blockify {
                    position: relative;
                }

               div#$optin_css_id.rescript_container .rescript_headline {
                    line-height: 1.5;
                    color: #2c2f33;
                    font-weight: bold;
                    font-size: 24px;
                    margin: 20px 0;
                    
                    display: block;
                    border: 0px;
                    height: auto;
                }

               div#$optin_css_id.rescript_container .rescript_form {
                    padding-top: 20px;
                    padding-bottom: 20px;
                    position: relative;
                }

              div#$optin_css_id.rescript_container input.rescript_submitBtn {
                    width: 100%;
                    background: #ff7f45;
                    border: 0px;
                    padding: 10px;
                    border-radius: 100px;
                    -webkit-border-radius: 100px; 
                    -moz-border-radius: 100px; 
                    height: 60px !important;
                    color: #fff;
                    font-weight: 700;
                    text-transform: uppercase;
                    margin-top: 20px;
                }

              div#$optin_uuid.mo-cta-button-display .rescript_ctaBtn {
                    width: 100% !important;
                }
                
                div#$optin_css_id.rescript_container .rescript_note,
                div#$optin_css_id.rescript_container .rescript_note * {
                     margin-top: 5px;
                     text-align: center;
                     font-size: 14px !important;
                     font-style: italic;
                     display: inline;
                     border: 0;
                     line-height: normal;
                 }

                /* Responsive cases*/
                @media only screen and (min-width: 230px) {
                 div#$optin_css_id.rescript_container .rescript_copy {
                        padding: 20px;
                    }
                }

                @media only screen and (min-width: 580px) {
                    div#$optin_css_id.rescript_container {
                        padding: 40px;
                    }
                }

                @media only screen and (min-width: 1200px) {
                    div#$optin_css_id.rescript_container {
                        padding: 50px;
                    }

                   div#$optin_css_id.rescript_container input.rescript_submitBtn {
                        width: 165px;
                        margin-top: 0;
                        background: #ff7f45;
                        border: 0;
                        padding: 10px;
                        border-radius: 100px;
                    -webkit-border-radius: 100px; 
                    -moz-border-radius: 100px; 
                        height: 60px !important;
                        color: #fff;
                        font-weight: 700;
                        text-transform: uppercase;
                        position: absolute;
                        right: 0;
                        top: 0;
                    }
                }

                @media only screen and (min-width: 1200px) {
                   div#$optin_css_id.rescript_container .rescript_main {
                        padding-right: 20px;
                        padding-left: 320px;
                        padding-top: 25px;
                    }

                   div#$optin_css_id.rescript_container .rescript_imgCol {
                        display: inline-block;
                    }

                   div#$optin_css_id.rescript_container .rescript_imgCol {
                        float: left;
                    }

                    div#$optin_css_id.rescript_container {
                        padding: 0px;
                    }

                   div#$optin_css_id.rescript_container .rescript_blockify {
                        width: 100%;
                        float: left;
                        position: relative;
                    }

                   div#$optin_css_id.rescript_container .rescript_form {
                        padding-bottom: 0px;
                    }

                   div#$optin_css_id.rescript_container .rescript_copy {
                        padding-top: 20px;
                    }

                    div#$optin_css_id.rescript_container {
                        padding: 0px;
                        width: auto;
                    }

                   div#$optin_css_id.rescript_container .rescript_imgCol img {
                        width: 300px;
                        height: 450px;
                        border-top-left-radius: 4px;
                        border-bottom-left-radius: 4px;
                        -moz-border-radius-topleft: 4px;
                        -moz-border-radius-bottomleft: 4px;
                        -webkit-border-top-left-radius: 4px;
                        -webkit-border-bottom-left-radius: 4px;
                    }

                   div#$optin_css_id.rescript_container .rescript_copy {
                        padding-bottom: 0 ;
                    }
                }

                @media only screen and (min-width: 1000px) {
                    div#$optin_css_id.rescript_container {
                        padding: 0px;
                    }
                }

CSS;

    }
}