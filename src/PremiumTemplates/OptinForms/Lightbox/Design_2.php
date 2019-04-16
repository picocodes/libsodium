<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;


use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Tinymce_Control;
use MailOptin\Core\Admin\Customizer\CustomControls\WP_Customize_Toggle_Control;
use MailOptin\Core\Admin\Customizer\EmailCampaign\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Design_2 extends AbstractOptinTheme
{
    public $optin_form_name = 'Design 2';

    public $default_form_image_partial;

    public function __construct($optin_campaign_id)
    {

        $this->init_config_filters([
                // -- default for design sections -- //
                [
                    'name'          => 'mo_optin_form_background_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_email_field_placeholder_default',
                    'value'       => __("E-mail", 'mailoptin'),
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for headline sections -- //
                [
                    'name'          => 'mo_optin_form_headline_default',
                    'value'         => __("Stay Informed", 'mailoptin'),
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_color_default',
                    'value'       => '#ffffff',
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_default',
                    'value'       => 'Work+Sans',
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_desktop_default',
                    'value'       => 28,
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_tablet_default',
                    'value'       => 21,
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_headline_font_size_mobile_default',
                    'value'       => 21,
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for description sections -- //
                [
                    'name'        => 'mo_optin_form_description_font_default',
                    'value'       => 'Work+Sans',
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_default',
                    'value'       => $this->_description_content(),
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_color_default',
                    'value'       => '#ededed',
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_desktop_default',
                    'value'       => 18,
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_tablet_default',
                    'value'       => 18,
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_description_font_size_mobile_default',
                    'value'       => 18,
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                // -- default for fields sections -- //
                [
                    'name'          => 'mo_optin_form_name_field_color_default',
                    'value'         => '#424242',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_color_default',
                    'value'         => '#424242',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_background_default',
                    'value'         => '#e37c5d',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_font_default',
                    'value'         => 'Work+Sans',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_font_default',
                    'value'         => 'Work+Sans, sans-serif',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_name_field_font_default',
                    'value'         => 'Work+Sans, sans-serif',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                // -- default for note sections -- //
                [
                    'name'          => 'mo_optin_form_note_font_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'        => 'mo_optin_form_hide_note_default',
                    'value'       => true,
                    'optin_class' => 'Design_2',
                    'optin_type'  => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_note_font_default',
                    'value'         => 'Work+Sans',
                    'optin_class'   => 'Design_2',
                    'optin_type'    => 'lightbox'
                ]
            ]
        );


        $this->default_form_image_partial = MAILOPTIN_ASSETS_URL . 'images/optin-themes/Design_2/style-2.png';

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 960;
            $config['height'] = 440;
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
        return __('Subscribe to my newsletter to receive the latest wordpress news and blog updates.', 'mailoptin');
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

        return <<<HTML
[mo-optin-form-wrapper class="mailoption-sub-form-2"]
	<div class="mailoptin-sub-from_inner_2">
		<div class="intro_text_2 img-is-responsive">
            [mo-optin-form-image default="$optin_default_image"]
            [mo-optin-form-headline tag="h3" class="intro_main_text_2"]
            [mo-optin-form-description class="main-text_2"]
            [mo-optin-form-cta-button class="field-reset mailoptin-submit-button"]
		</div>
    </div>
    [mo-optin-form-fields-wrapper class="mailoptin-sub-from_inner_2_fields"]
        [mo-optin-form-error]
        [mo-optin-form-name-field class="field-reset"]
        [mo-optin-form-email-field class="field-reset"]
        [mo-optin-form-custom-fields class="field-reset"]                     
        [mo-mailchimp-interests] 
        [mo-optin-form-submit-button class="field-reset mailoptin-submit-button"]
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
div#$optin_css_id.mailoption-sub-form-2 * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
    margin: 0;
	padding: 0;
}

div#$optin_css_id.mailoption-sub-form-2{
	width: 260px;
	margin: 20px auto;
	position: relative;
}

div#$optin_css_id .img-is-responsive img {
	width: 100%;
	height: auto;
}

div#$optin_css_id .mo-optin-error  {
	margin-top: 20px;
    margin-bottom: 20px;
    display: none;
    color: #e74c3c;
	font-style: italic;
}

div#$optin_css_id .mailoptin-sub-from_inner_2 {
	background: #246bb5;
	text-align: center;
	padding: 20px;
}

div#$optin_css_id .intro_text_2.img-is-responsive .main-text_2 {
	padding: 20px;
	font-size: 18px;
} 
	
div#$optin_css_id .intro_main_text_2 {
	text-transform: capitalize;
	font-weight: 600;
	font-size: 21px;
	color: #fff;
}
	
div#$optin_css_id .main-text_2 {
	color: #ededed;
	line-height: 1.4;
}
	
div#$optin_css_id .field-reset {
	display: block;
	width: 100%;
	padding: 15px;
	margin-bottom: 10px;
	border: 0px;
	font-size: 15px;
	border-radius: 5px;
	font-weight: 600;
}
	
div#$optin_css_id .mailoptin-sub-from_inner_2_fields {
	background: #424242;
	padding: 32px 20px;
}
	
	
div#$optin_css_id .field-reset.mailoptin-submit-button {
	background-color: #e37c5d;
	color: #fff;
}
	
div#$optin_css_id .mailotin-design-2_button_close {
	background: #444;
	border-radius: 100%;
	box-sizing: border-box;
	margin: 0px;
	padding: 0px;
	width: 30px;
	height: 30px;
	color: #fff;
	font-size: 19px;
	position: absolute;
	right: -11px;
	top: -15px;
	border: 0;
	font-weight: 500;
}
	
div#$optin_css_id .mailoption-sub-form-2 button, .field-reset.mailoptin-submit-button {
	cursor: pointer;
}
	
@media only screen and (min-width: 430px){
	div#$optin_css_id.mailoption-sub-form-2 {
		width: 400px;
		margin: 20px auto;
		position: relative;
	}
		
    div#$optin_css_id .intro_main_text_2 {
		text-transform: capitalize;
		font-weight: 600;
		font-size: 28px;
	}
			
    div#$optin_css_id .mailoptin-sub-from_inner_2_fields {
		background: #424242;
		padding: 45px 35px;
	}

}
CSS;

    }
}