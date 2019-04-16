<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;


use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Tinymce_Control;
use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Design_3 extends AbstractOptinTheme
{
    public $optin_form_name = 'Design 3';

    public function __construct($optin_campaign_id)
    {

        $this->init_config_filters([
                // -- default for design sections -- //
                [
                    'name'          => 'mo_optin_form_background_color_default',
                    'value'         => '#171a1f',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_email_field_placeholder_default',
                    'value'       => __("email@address.com", 'mailoptin'),
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_name_field_placeholder_default',
                    'value'       => __("First Name", 'mailoptin'),
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for headline sections -- //
                [
                    'name'          => 'mo_optin_form_headline_default',
                    'value'         => __("Want to Demo Login Designer ?", 'mailoptin'),
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_color_default',
                    'value'       => '#ffffff',
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_default',
                    'value'       => 'Work+Sans',
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_desktop_default',
                    'value'       => 40,
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_tablet_default',
                    'value'       => 27,
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_mobile_default',
                    'value'       => 21,
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for description sections -- //
                [
                    'name'        => 'mo_optin_form_description_font_default',
                    'value'       => 'Work+Sans',
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_default',
                    'value'       => $this->_description_content(),
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_color_default',
                    'value'       => '#6b6f76',
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_desktop_default',
                    'value'       => 23,
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_tablet_default',
                    'value'       => 18,
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_mobile_default',
                    'value'       => 15,
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for fields sections -- //
                [
                    'name'          => 'mo_optin_form_name_field_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_color_default',
                    'value'         => '#171a1f',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_background_default',
                    'value'         => '#fff',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_font_default',
                    'value'         => 'Work+Sans',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_font_default',
                    'value'         => 'Work+Sans, sans-serif',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_name_field_font_default',
                    'value'         => 'Work+Sans, sans-serif',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],


                // -- default for note sections -- //

                [
                    'name'        => 'mo_optin_form_hide_note_default',
                    'value'       => true,
                    'optin_class' => 'Design_3',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_font_color_default',
                    'value'         => '#fafafa',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_font_default',
                    'value'         => 'Work+Sans',
                    'optin_class'   => 'Design_3',
                    'optin_type'    => 'lightbox'
                ]
            ]
        );


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
            return '#ffffff';
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
        return __('See For your self how brilliant it is.', 'mailoptin');
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

    public function customizer_preview_js()
    {
        ?>
        <script type="text/javascript">
            (function ($) {
                $(function () {

                    wp.customize(mailoptin_optin_option_prefix + '[' + mailoptin_optin_campaign_id + '][hide_name_field]', function (value) {
                        value.bind(function (to) {
                            $('.mo-optin-form-name-field').toggle(!to);
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

        return <<<HTML
[mo-optin-form-wrapper class="mail_optin_design_3"]
	<div class="mail_optin_design_3_inner">
        [mo-optin-form-headline tag="h3" class="big_intro_text"]
        [mo-optin-form-description tag="p" class="small_intro_text"]
        [mo-optin-form-cta-button class="mail_optin_Design_3_cta"]
	</div>
    [mo-optin-form-fields-wrapper class="mail_optin_design_3_field"]
        [mo-optin-form-name-field class="design_3_rest"]
        [mo-optin-form-email-field class="design_3_rest"]
        [mo-optin-form-custom-fields class="design_3_rest"]
        [mo-mailchimp-interests]
        [mo-optin-form-submit-button class="design_3_submit_button"]
        [mo-optin-form-error class="error_note"]
        [mo-optin-form-note class="privacy_note"]
    [/mo-optin-form-fields-wrapper]
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
div#$optin_css_id.mail_optin_Design_3 * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
    margin: 0;
	padding: 0;
}

div#$optin_css_id .mail_optin_Design_3_cta {
    border: 0;
    cursor: pointer;
    margin-top: 30px;
    padding: 20px;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
}

div#$optin_css_id .design_3_rest {
	display: block;
	width: 100%;
	margin-bottom: 20px;
	padding: 20px;
	background: transparent;
	color: #fff;
	font-weight: 600;
	font-size: 14px;
	border-left: 0;
	border-right: 0;
	border-top: 0;
}
		
div#$optin_css_id .design_3_rest:focus {
	transition: 1s ease-in;
	border-bottom: 2px solid #02d2d8;
}

div#$optin_css_id .design_3_submit_button {
	background: #fff;
	border: 0;
	padding: 20px;
	border-radius: 5px;
	font-size: 16px;
	margin-top: 30px;
	text-transform: capitalize;
    cursor: pointer;
}
		
div#$optin_css_id .error_note {
	margin-top: 20px;
    display: none;
    color: #e74c3c;
	font-style: italic;
}

div#$optin_css_id .privacy_note {
	margin-top: 20px;
    color: #e74c3c;
	font-style: italic;
}
		
div#$optin_css_id .big_intro_text {
	font-size: 21px;
	margin-bottom: 10px;
	font-weight: 700;
}
		
div#$optin_css_id .small_intro_text {
	font-size: 13px;
	padding-top: 10px;
}
		
div#$optin_css_id.mail_optin_design_3 {
	background: #171a1f;
	color: #fff;
	text-align: center;
	width: 260px;
	padding: 40px 20px;
	margin: 20px auto;
	position: relative;
}
		
div#$optin_css_id .mail_optin_design_3_field {
	padding: 20px 0px;
}
		
@media only screen and (min-width: 400px) {
	div#$optin_css_id.mail_optin_design_3 {
		width: 350px;
	}
	div#$optin_css_id .mail_optin_design_3_field .design_3_rest {
		font-size: 17px;
	}
	div#$optin_css_id .big_intro_text {
		font-size: 27px;
	}
	div#$optin_css_id .small_intro_text {
		font-size: 15px;
	}
}
		
@media only screen and (min-width: 680px) {
	div#$optin_css_id.mail_optin_design_3 {
		width: 500px;
	}
	div#$optin_css_id .big_intro_text {
		font-size: 34px;
	}
	div#$optin_css_id .small_intro_text {
		font-size: 18px;
	}
	div#$optin_css_id .mail_optin_design_3_field {
		padding: 20px 30px;
	}
	div#$optin_css_id .mail_optin_design_3_field {
		padding: 30px;
	}
}
		
@media only screen and (min-width: 890px) {
	div#$optin_css_id .mail_optin_design_3_field {
		padding: 50px 100px;
	}
	div#$optin_css_id .small_intro_text,
	div#$optin_css_id .mail_optin_design_3_field .design_3_rest {
		color: #6b6f76;
	}
	div#$optin_css_id.mail_optin_design_3 {
		background: #171a1f;
		color: #fff;
		text-align: center;
		width: 800px;
		padding: 40px 20px;
		margin: 20px auto;
	}
	div#$optin_css_id .big_intro_text {
		font-size: 40px;
		margin-bottom: 10px;
		font-weight: 700;
	}
	div#$optin_css_id .small_intro_text {
		font-size: 23px;
		padding-top: 10px;
	}
	div#$optin_css_id .design_3_submit_button {
		background: #fff;
		border: 0;
		padding: 20px;
		border-radius: 5px;
		font-size: 22px;
		margin-top: 30px;
		text-transform: capitalize;
	}
	div#$optin_css_id .mail_optin_design_3_field .design_3_rest {
		display: block;
		width: 100%;
		margin-bottom: 20px;
		padding: 20px;
		background: transparent;
		color: #fff;
		font-weight: 600;
		font-size: 20px;
		border-left: 0;
		border-right: 0;
		border-top: 0;
	}
}

CSS;

    }
}