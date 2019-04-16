<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;


use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Tinymce_Control;
use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Design_4 extends AbstractOptinTheme
{
    public $optin_form_name = 'Design 4';

    public $default_form_image_partial;

    public $default_form_bg_image;

    public function __construct($optin_campaign_id)
    {

        $this->init_config_filters([
                // -- default for design sections -- //
                [
                    'name'          => 'mo_optin_form_background_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_email_field_placeholder_default',
                    'value'       => __("Enter your Email", 'mailoptin'),
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for headline sections -- //
                [
                    'name'          => 'mo_optin_form_headline_default',
                    'value'         => __("Sign up Now (For Free)", 'mailoptin'),
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_color_default',
                    'value'       => '#273238',
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_default',
                    'value'       => 'Open+Sans',
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_desktop_default',
                    'value'       => 30,
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_tablet_default',
                    'value'       => 22,
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_mobile_default',
                    'value'       => 17,
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for description sections -- //
                [
                    'name'        => 'mo_optin_form_description_font_default',
                    'value'       => 'Open+Sans',
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_default',
                    'value'       => $this->_description_content(),
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_color_default',
                    'value'       => '#444444',
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_desktop_default',
                    'value'       => 17,
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_tablet_default',
                    'value'       => 15,
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_mobile_default',
                    'value'       => 15,
                    'optin_class' => 'Design_4',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for fields sections -- //
                [
                    'name'          => 'mo_optin_form_name_field_color_default',
                    'value'         => '#444444',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_hide_name_field_default',
                    'value'         => true,
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_color_default',
                    'value'         => '#444444',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_background_default',
                    'value'         => '#5ad9e7',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_font_default',
                    'value'         => 'Open+Sans',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_font_default',
                    'value'         => 'Open+Sans, sans-serif',
                    'optin_class'   => 'Design_4',
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
                    'value'         => '#7a7a7a',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_default',
                    'value'         => __('NO THANKS', 'mailoptin'),
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_font_default',
                    'value'         => 'Open+Sans',
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'              => 'mo_optin_form_note_font_size_desktop_default',
                    'value'             => 16,
                    'optin_class'       => 'Design_4',
                    'optin_type'        => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_font_size_tablet_default',
                    'value'         => 16,
                    'optin_class'   => 'Design_4',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'  => 'mo_optin_form_background_image_default',
                    'value' => function () {
                        return MAILOPTIN_ASSETS_URL . 'images/optin-themes/Design_4/bg-image.png';
                    }
                ]
            ]
        );


        $this->default_form_image_partial = MAILOPTIN_ASSETS_URL . 'images/optin-themes/Design_4/mail-icon.png';
        $this->default_form_bg_image = MAILOPTIN_ASSETS_URL . 'images/optin-themes/Design_4/bg-image.png';

        add_filter('mo_optin_form_enable_form_image', '__return_true');
        add_filter('mo_optin_form_enable_form_background_image', '__return_true');

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 512;
            $config['height'] = 512;
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
        return __('Get access to all our upcoming educational webinars, invitations to regional workshop meetups , PLUS our curated weekly newsletter that delivers hand-picked articles on digital marketing , building great websites and more.', 'mailoptin');
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
[mo-optin-form-wrapper class="mail_optin_design_4"]
		<div class="mail_optin_design_4_inner">
			<div class="left-section">
				<div class="image-icon-mail img-is-responsive">
                    [mo-optin-form-image default="$optin_default_image"]
                </div>
			</div>
			<div class="mail_optin_design_4_right-section">
				<div class="mail_optin_design_4_right-section_inner">
                    [mo-optin-form-headline tag="h3" class="big-intro-text"]
                    [mo-optin-form-description tag="p" class="main-text-intro"]
                    [mo-optin-form-cta-button class="mail_optin_Design_4_cta"]
                    [mo-optin-form-fields-wrapper class="mail_optin_design_4_field"]
                        [mo-optin-form-error]
                        [mo-optin-form-name-field class="mail-optin-4-reset inpt_field"]
                        [mo-optin-form-email-field class="mail-optin-4-reset inpt_field"]
                        [mo-optin-form-custom-fields class="mail-optin-4-reset inpt_field"]
                        [mo-mailchimp-interests]
                        [mo-optin-form-submit-button class="mail-optin-4-reset submit_btn"]
                        <br>
                        [mo-optin-form-note class="no-thanks"]
                    [/mo-optin-form-fields-wrapper]
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
        $background_image = "url('" . $this->get_form_background_image_url() . "')";

        return <<<CSS
div#$optin_css_id.mail_optin_design_4 * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
    margin: 0;
	padding: 0;
}

div#$optin_css_id.mail_optin_design_4{
	width: 250px;
	margin: 50px auto;
	background: #fff;
	position: relative;
    border-radius: 3px;
}

div#$optin_css_id .img-is-responsive img {
	width: 100%;
	height: auto;
}

div#$optin_css_id .mail_optin_design_4_inner {
	display: flex;
}
		
div#$optin_css_id .left-section {
	min-height: 550px;
	background: #00ffd2;
	position: absolute;
	width: 230px;
	top: -25px;
	border-radius: 5px;
	box-shadow: 10px -1px 30px rgba(0, 0, 0, 0.1);
	background: $background_image;
}
		
div#$optin_css_id .mail_optin_design_4_right-section {
	margin-left: 0px;
	text-align: center;
	padding: 20px;
	margin-top: 20px;
	width: 100%;
	display: table-cell;
}
		
div#$optin_css_id .image-icon-mail.img-is-responsive {
	width: 100px;
	margin: 0 auto;
	padding-top: 50px;
}
		
div#$optin_css_id .mail_optin_design_4_inner {
	min-height: 500px;
}
		
div#$optin_css_id .big-intro-text {
	font-size: 17px;
	margin-bottom: 20px;
	color: #273238;
}
		
div#$optin_css_id .mail_optin_design_4_field {
	text-align: center;
	margin-top: 30px;
	position: relative;
}
		
div#$optin_css_id .mail_optin_design_4_field .mail-optin-4-reset {
	display: block;
	padding: 15px;
	width: 100%;
	border-radius: 3px;
}
		
div#$optin_css_id .mail-optin-4-reset.submit_btn {
	background-color: #5ad9e7;
	border: 0;
	margin-top: 5px;
	font-size: 18px;
	font-weight: 600;
	color: #fff;
}

div#$optin_css_id .mail_optin_Design_4_cta {
    border: 0;
    margin-top: 5px;
    padding: 10px;
    border-radius: 5px;
    display: block;
    width: 100%;
    font-size: 20px;
    font-weight: 500;
}
		
div#$optin_css_id .mail-optin-4-reset.inpt_field {
	border: 1px solid #cccc;
	font-size: 18px;
	color: #444;
	text-align: center;
	margin-bottom: 15px;
}
		
div#$optin_css_id .main-text-intro {
	padding: 0;
	font-size: 15px;
	letter-spacing: 0.2px;
	line-height: 1.6;
	color: #444;
    margin-bottom: 10px;
}
		
div#$optin_css_id .mail_optin_design_4_right-section_inner {
	padding: 0;
}
		
div#$optin_css_id .no-thanks {
	font-weight: 700;
	cursor: pointer;
	color: #7a7a7a;
}
		
div#$optin_css_id .left-section {
	display: none;
}
		
div#$optin_css_id .mo-optin-error {
	background: #e74c3c;
    border-radius: 3px;
    padding: 7px;
    font-size: 13px;
    color: #fff;
    margin-bottom: 10px;
    display: none;
}
		
div#$optin_css_id .mailotin-design-4_button_close {
	position: absolute;
	right: 14px;
	background: transparent;
	border: 0;
	font-size: 35px;
	font-weight: 700;
	color: #90a4ad;
}
		
div#$optin_css_id .mail-optin-4-reset.submit_btn,
div#$optin_css_id .mailotin-design-4_button_close,
div#$optin_css_id .no-thanks {
	cursor: pointer;
}
		
@media only screen and (min-width: 400px) {
	div#$optin_css_id.mail_optin_design_4 {
		width: 350px;
	}
}
		
@media only screen and (min-width: 430px) {
	div#$optin_css_id.mail_optin_design_4 {
		width: 400px;
	}
	div#$optin_css_id .big-intro-text {
		font-size: 22px;
	}
}
		
@media only screen and (min-width: 800px) {
	div#$optin_css_id.mail_optin_design_4 {
		width: 750px;
	}
	div#$optin_css_id .left-section {
		display: block;
	}
	div#$optin_css_id .mail_optin_design_4_right-section {
		margin-left: 230px;
	}
	div#$optin_css_id .mail_optin_design_4_right-section_inner {
		padding: 0 50px;
	}
	div#$optin_css_id .big-intro-text {
		font-size: 33px;
	}
	div#$optin_css_id .main-text-intro {
		padding: 0 20px 20px 20px;
		font-size: 17px;
	}
	div#$optin_css_id .mail-optin-4-reset.inpt_field {
		border: 1px solid #cccc;
		font-size: 18px;
		color: #444;
		text-align: center;
		margin-bottom: 0;
        margin-top: 4px;
	}
	div#$optin_css_id .mail_optin_design_4_field {
		margin-top: 0px;
	}
	div#$optin_css_id .big-intro-text {
		font-size: 30px;
	}
}
		
@media only screen and (min-width: 980px) {
	div#$optin_css_id.mail_optin_design_4 {
		width: 800px;
	}
}
CSS;

    }
}