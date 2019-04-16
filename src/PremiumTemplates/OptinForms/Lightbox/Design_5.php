<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;


use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Tinymce_Control;
use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Design_5 extends AbstractOptinTheme
{
    public $optin_form_name = 'Design 5';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id)
    {

        $this->init_config_filters([
                // -- default for design sections -- //
                [
                    'name'          => 'mo_optin_form_background_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_email_field_placeholder_default',
                    'value'       => __("Enter your email", 'mailoptin'),
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for headline sections -- //
                [
                    'name'          => 'mo_optin_form_headline_default',
                    'value'         => __("Amelia Carpenter", 'mailoptin'),
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_color_default',
                    'value'       => '#444444',
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_default',
                    'value'       => 'Open+Sans',
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_desktop_default',
                    'value'       => 18,
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_tablet_default',
                    'value'       => 16,
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_mobile_default',
                    'value'       => 15,
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for description sections -- //
                [
                    'name'        => 'mo_optin_form_description_font_default',
                    'value'       => 'Open+Sans',
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_default',
                    'value'       => $this->_description_content(),
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_color_default',
                    'value'       => '#444444',
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_desktop_default',
                    'value'       => 18,
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_tablet_default',
                    'value'       => 15,
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_mobile_default',
                    'value'       => 15,
                    'optin_class' => 'Design_5',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for fields sections -- //
                [
                    'name'          => 'mo_optin_form_name_field_color_default',
                    'value'         => '#f0f4f7',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_hide_name_field_default',
                    'value'         => true,
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_color_default',
                    'value'         => '#f0f4f7',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_background_default',
                    'value'         => '#5d6d7b',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_font_default',
                    'value'         => 'Open+Sans',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_font_default',
                    'value'         => 'Open+Sans, sans-serif',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],
                
                [
                    'name'          => 'mo_optin_form_name_field_font_default',
                    'value'         => 'Open+Sans, sans-serif',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                // -- default for note sections -- //
                [
                    'name'          => 'mo_optin_form_note_font_color_default',
                    'value'         => '#90a1af',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_default',
                    'value'         => __('Your privacy is guranteed.', 'mailoptin'),
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_font_default',
                    'value'         => 'Open+Sans',
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'              => 'mo_optin_form_note_font_size_desktop_default',
                    'value'             => 14,
                    'optin_class'       => 'Design_5',
                    'optin_type'        => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_font_size_tablet_default',
                    'value'         => 12,
                    'optin_class'   => 'Design_5',
                    'optin_type'    => 'lightbox'
                ]
            ]
        );


        $this->default_form_image_partial = MAILOPTIN_ASSETS_URL . 'images/optin-themes/design_5/profile.jpg';

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 400;
            $config['height'] = 400;
            return $config;
        });

        add_action('customize_preview_init', function () {
            add_action('wp_footer', [$this, 'customizer_preview_js']);
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

    public function features_support()
    {
        return [
            self::CTA_BUTTON_SUPPORT,
            self::OPTIN_CUSTOM_FIELD_SUPPORT
        ];
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
     * Default description content.
     *
     * @return string
     */
    private function _description_content()
    {
        return __('"You have finished building your website. You have introduced Your company and presented your products and services. You have added propositions and promos to target your audience\'s attention"', 'mailoptin');
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
            'default'           => "CMO - A really good agency",
            'type'              => 'option',
            'transport'         => 'postMessage',
            'sanitize_callback' => array($CustomizerSettingsInstance, '_remove_paragraph_from_headline'),
        );

        $settings['hide_mini_headline'] = array(
            'default'   => false,
            'type'      => 'option',
            'transport' => 'postMessage'
        );

        $settings['mini_headline_font_color'] = array(
            'default'   => '#53aad9',
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
                    'quicktags'     => true,
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

    public function customizer_preview_js()
    {
        ?>
        <script type="text/javascript">
            (function ($) {
                $(function () {
                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][mini_headline_font_color]', function (value) {
                        value.bind(function (to) {
                            $('.mail_optin_design_5_attendant_title').css('color', to);
                        });
                    });

                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][hide_mini_headline]', function (value) {
                        value.bind(function (to) {
                            $('.mail_optin_design_5_attendant_title').toggle(!to);
                        });
                    });

                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][hide_name_field]', function (value) {
                        value.bind(function (to) {
                            $('.mo-optin-form-name-field').toggle(!to);
                        });
                    });

                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][mini_headline]', function (value) {
                        value.bind(function (to) {
                            $('.mail_optin_design_5_attendant_title').html(to);
                        });
                    });

                })
            })(jQuery)
        </script>
        <?php
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
        $fields_settings['hide_name_field']['transport']          = 'postMessage';
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
        add_filter('mailoptin_tinymce_customizer_control_count', function ($count) {
            return $count - 2;
        });

        unset($configuration_controls['hide_headline']);
        unset($configuration_controls['hide_description']);

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
        $optin_default_image = $this->default_form_image_partial;

        $mini_header = $this->get_customizer_value('mini_headline', __("CMO - A really good agency", 'mailoptin'));

        return <<<HTML
    [mo-optin-form-wrapper class="mailotin-design_5-container"]
		<div class="mail_optin_design_5_inner">
			<div class="mail_optin_design_5_top-section">
				<div class="mail_optin_design_5_attendant_image img-is-responsive"> 
                    [mo-optin-form-image default="$optin_default_image"]
                </div>
				<div class="mail_optin_design_5_top-section_inner">
                    [mo-optin-form-headline tag="h3" class="mail_optin_design_5_attendant_name"]
                    <div class="mail_optin_design_5_attendant_title">$mini_header</div>
				</div>
			</div>
			<div class="mail_optin_design_5_-middle-section">
                [mo-optin-form-description class="mail_optin_design_5_main-intro"]
                [mo-optin-form-cta-button class="mail_optin_design_5_cta"]
			</div>
			<div class="mail_optin_design_5_-bottom">
                [mo-optin-form-fields-wrapper]
                    [mo-optin-form-error]                     
				    <div class="mail_optin_design_5_fields">
                        [mo-optin-form-name-field class="reset_field-5 mail_optin_design_5_text_field"]
                        [mo-optin-form-email-field class="reset_field-5 mail_optin_design_5_text_field"]
                        [mo-optin-form-custom-fields class="reset_field-5 mail_optin_design_5_text_field"]
                        [mo-optin-form-submit-button class="reset_field-5 mail_optin_design_5_sub_field"]                     
                        [mo-mailchimp-interests] 
                    </div>
                    [mo-optin-form-note class="mail_optin_design_5_privacy_note"]
                [/mo-optin-form-fields-wrapper]
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

        $is_mini_hadline_display = '';
        if ($this->get_customizer_value('hide_mini_headline', false)) {
            $is_mini_hadline_display = 'display:none;';
        }

        return <<<CSS
div#$optin_css_id.mailotin-design_5-container * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
    margin: 0;
	padding: 0;
}

div#$optin_css_id.mailotin-design_5-container{
	width: 250px;
	margin: 70px auto;
	background: #fff;
	padding: 20px;
	border-radius: 3px;
	position: relative;
}

div#$optin_css_id .img-is-responsive img {
	width: 100%;
	height: auto;
}

div#$optin_css_id .mail_optin_design_5_-middle-section {
	text-align: center;
	padding: 30px 0;
}
		
div#$optin_css_id .mail_optin_design_5_cta {
	margin-top: 30px;
	margin-bottom: 10px;
    background: #5d6d7b;
	border: 0;
	font-weight: 800;
	font-size: 17px;
	color: #fff;
	border-radius: 3px;
    padding: 10px;
    width: 100%;
    display: block;
}
		
div#$optin_css_id .mail_optin_design_5_top-section {
	text-align: center;
}
		
div#$optin_css_id .mail_optin_design_5_privacy_note {
	text-align: center;
	margin-top: 20px;
	color: #90a1af;
	font-size: 12px;
	font-weight: 600;
}
		
div#$optin_css_id .mail_optin_design_5_text_field {
	width: 100%;
	margin-right: 10px;
}
		
div#$optin_css_id .mail_optin_design_5_sub_field {
	width: 100%;
}
		
div#$optin_css_id .mail_optin_design_5_fields {
	display: block;
	padding: 0px;
}
		
div#$optin_css_id .mail_optin_design_5_main-intro,
div#$optin_css_id .mail_optin_design_5_cta {
	font-weight: 600;
	line-height: 1.7;
	font-size: 15px;
	color: #444;
}
		
div#$optin_css_id .mail_optin_design_5_attendant_title {
	color: #53aad9;
	font-weight: 600;
	font-size: 16px;
	margin-top: 5px;
    $is_mini_hadline_display
}
		
div#$optin_css_id .mail_optin_design_5_attendant_name {
	font-weight: 800;
	color: #444;
}
		
div#$optin_css_id .reset_field-5 {
	padding: 15px;
}
		
div#$optin_css_id .reset_field-5.mail_optin_design_5_text_field {
	background: #f0f4f7;
	border: 0;
	border-radius: 3px;
	font-size: 15px;
	color: #444;
	border: 1px solid #f0f4f7;
    margin-top: 20px;
}
		
div#$optin_css_id .reset_field-5.mail_optin_design_5_text_field:focus {
	background: #fff;
	border: 1px solid #f0f4f7;
}
		
div#$optin_css_id .reset_field-5.mail_optin_design_5_sub_field {
	background: #5d6d7b;
	border: 0;
	font-weight: 800;
	font-size: 17px;
	color: #fff;
	border-radius: 3px;
	margin-top: 20px;
}
		
div#$optin_css_id .mail_optin_design_5_attendant_image.img-is-responsive img {
	border: 5px solid #fff;
	border-radius: 100%;
	box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.3);
}
		
div#$optin_css_id .mail_optin_design_5_attendant_image.img-is-responsive {
	width: 94px;
	margin: 0 auto;
	position: absolute;
	top: -48px;
	right: 80px;
}
		
div#$optin_css_id .mail_optin_design_5_top-section_inner {
	margin-top: 40px;
}
		
div#$optin_css_id .mail_optin_design_5_attendant_title {
	font-size: 15px;
}
		
div#$optin_css_id .mail_optin_design_5_attendant_title {
	font-size: 14px;
}
		
div#$optin_css_id .mailotin-design-5_button_close button{
	position: absolute;
	right: 14px;
	background: transparent;
	border: 0;
	font-size: 22px;
	font-weight: 600;
	color: #90a4ad;
	top: 5px;
}
		
div#$optin_css_id .mailotin-design-5_button_close button,
div#$optin_css_id .reset_field-5.mail_optin_design_5_sub_field {
	cursor: pointer;
}

div#$optin_css_id .mo-optin-error  {
    display: none;
    background: #F44336;
    color: #ffffff;
    text-align: center;
    padding: .2em;
    margin: 0 auto 10px;
    width: 100%;
    font-size: 16px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #FF0000;
}
		
@media only screen and (min-width: 380px) {
	div#$optin_css_id.mailotin-design_5-container {
		width: 350px;
		margin: 70px auto;
		background: #fff;
		padding: 20px;
		border-radius: 3px;
		position: relative;
	}
	div#$optin_css_id .mail_optin_design_5_attendant_image.img-is-responsive {
		right: 132px;
	}
}
		
@media only screen and (min-width: 480px) {
	div#$optin_css_id .mail_optin_design_5_attendant_image.img-is-responsive {
		right: 155px;
	}
	div#$optin_css_id.mailotin-design_5-container {
		width: 400px;
	}
}
		
@media only screen and (min-width: 580px) {
	div#$optin_css_id.mailotin-design_5-container {
		width: 500px;
	}
	div#$optin_css_id .mail_optin_design_5_attendant_image.img-is-responsive {
		right: 200px;
	}
	div#$optin_css_id .mail_optin_design_5_inner {
		padding: 0 20px;
	}
}
		
@media only screen and (min-width: 750px) {
	div#$optin_css_id .mail_optin_design_5_inner {
		padding: 0px;
	}
	div#$optin_css_id .mail_optin_design_5_attendant_title {
		font-size: 15px;
	}
	div#$optin_css_id .mail_optin_design_5_text_field {
		width: 70%;
	}
    .mo-optin-has-custom-field div#$optin_css_id .mail_optin_design_5_text_field,
    div#$optin_css_id.mo-has-name-email .mail_optin_design_5_text_field {
        width: 100%;
    }
    div#$optin_css_id .mail_optin_design_5_fields {
        display: flex;
		padding: 0px 30px;
    }
    .mo-optin-has-custom-field div#$optin_css_id .mail_optin_design_5_fields,
    div#$optin_css_id.mo-has-name-email .mail_optin_design_5_fields {
        display: block;
        padding: 0;
    }
	div#$optin_css_id .mail_optin_design_5_attendant_image.img-is-responsive {
		width: 130px;
		margin: 0 auto;
		position: absolute;
		top: -48px;
		right: 280px;
	}
	div#$optin_css_id.mailotin-design_5-container {
		width: 700px;
		margin: 70px auto;
		background: #fff;
		padding: 50px 40px;
		border-radius: 3px;
		position: relative;
	}
	div#$optin_css_id .mail_optin_design_5_main-intro,
	div#$optin_css_id .mail_optin_design_5_cta {
		font-size: 18px;
	}
	div#$optin_css_id .mail_optin_design_5_attendant_title {
		color: #53aad9;
		font-weight: 600;
		font-size: 18px;
	}
	div#$optin_css_id .mail_optin_design_5_sub_field {
		width: 30%;
	}
    .mo-optin-has-custom-field div#$optin_css_id .mail_optin_design_5_sub_field,
    div#$optin_css_id.mo-has-name-email .mail_optin_design_5_sub_field {
        width: 100%;
    }
	div#$optin_css_id .reset_field-5.mail_optin_design_5_sub_field {
		margin-top: 20px;
	}
    .mo-optin-has-custom-field div#$optin_css_id .reset_field-5.mail_optin_design_5_sub_field,
    div#$optin_css_id.mo-has-name-email .reset_field-5.mail_optin_design_5_sub_field {
        margin-top: 20px;
    }
	div#$optin_css_id .mail_optin_design_5_privacy_note {
		font-size: 14px;
	}
	div#$optin_css_id .reset_field-5.mail_optin_design_5_text_field {
		font-size: 18px;
	}
}
CSS;

    }
}