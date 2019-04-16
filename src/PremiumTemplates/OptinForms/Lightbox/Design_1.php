<?php

namespace MailOptin\Libsodium\PremiumTemplates\OptinForms\Lightbox;

use MailOptin\Core\Admin\Customizer\OptinForm\Customizer;
use MailOptin\Core\Admin\Customizer\OptinForm\CustomizerSettings;
use MailOptin\Core\OptinForms\AbstractOptinTheme;

class Design_1 extends AbstractOptinTheme
{
    public $optin_form_name = 'Design 1';

    public function __construct($optin_campaign_id)
    {
        $this->init_config_filters([
                // -- default for design sections -- //
                [
                    'name'          => 'mo_optin_form_background_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_placeholder_default',
                    'value'         => __("E-mail Address *", 'mailoptin'),
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                // -- default for headline sections -- //
                [
                    'name'          => 'mo_optin_form_headline_default',
                    'value'         => __("<strong>Keep an eye</strong> on what we are doing", 'mailoptin'),
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_headline_font_color_default',
                    'value'         => '#444444',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_headline_font_default',
                    'value'         => 'Work+Sans',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_headline_font_size_desktop_default',
                    'value'         => 27,
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_headline_font_size_tablet_default',
                    'value'         => 21,
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_headline_font_size_mobile_default',
                    'value'         => 21,
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],


                // -- default for fields sections -- //

                [
                    'name'          => 'mo_optin_form_submit_button_color_default',
                    'value'         => '#ffffff',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_background_default',
                    'value'         => '#6355b9',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_submit_button_font_default',
                    'value'         => 'Work+Sans',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_email_field_font_default',
                    'value'         => 'Work+Sans, sans-serif',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_name_field_font_default',
                    'value'         => 'Work+Sans, sans-serif',
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_hide_note_default',
                    'value'         => true,
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_hide_name_field_default',
                    'value'         => true,
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ],

                [
                    'name'          => 'mo_optin_form_hide_description_default',
                    'value'         => true,
                    'optin_class'   => 'Design_1',
                    'optin_type'    => 'lightbox'
                ]
            ]
        );

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_style', function () {
            return 'inline';
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_segment_display_alignment', function () {
            return 'center';
        });

        add_filter('mailoptin_customizer_optin_campaign_MailChimpConnect_user_input_field_color', function () {
            return '#000000';
        });

        add_action('customize_preview_init', function () {
            add_action('wp_footer', [$this, 'customizer_preview_js']);
        });

        $this->default_form_image_partial = MAILOPTIN_ASSETS_URL . 'images/optin-themes/Design_1/intro-icon.png';

        add_filter('mo_optin_form_enable_form_image', '__return_true');

        add_filter('mo_optin_form_partial_default_image', function () {
            return $this->default_form_image_partial;
        });

        add_filter('mo_optin_form_customizer_form_image_args', function ($config) {
            $config['width'] = 54;
            $config['height'] = 50;
            return $config;
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
     * @param Customizer $customizerClassInstance
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
     * @param Customizer $customizerClassInstance
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
     * @param Customizer $customizerClassInstance
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
     * @param Customizer $customizerClassInstance
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
        $fields_settings['hide_name_field']['transport']  = 'postMessage';
        return $fields_settings;
    }

    /**
     * @param array $fields_controls
     * @param \WP_Customize_Manager $wp_customize
     * @param string $option_prefix
     * @param Customizer $customizerClassInstance
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
     * @param Customizer $customizerClassInstance
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
     * @param Customizer $customizerClassInstance
     *
     * @return array
     */
    public function customizer_output_controls($output_controls, $wp_customize, $option_prefix, $customizerClassInstance)
    {
        return $output_controls;
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
        $arrow = MAILOPTIN_ASSETS_URL . 'images/optin-themes/Design_1/custom-arrow.png';

        return <<<HTML
[mo-optin-form-wrapper class="mailotin-design-1"]
    <div class="intro-arrow">
        <img src="$arrow">
    </div>

    <div class="mailoptin-design-1_inner">
        <div class="design_intro-section">
            <span class="image-icon">[mo-optin-form-image default="$optin_default_image"]</span>
            [mo-optin-form-headline tag="h3" class="mailotin-design-1-intro_text"]
            [mo-optin-form-description]
            [mo-optin-form-cta-button]
        </div>
        [mo-optin-form-fields-wrapper class="mailoptin-design-input-filed"]     
            [mo-optin-form-name-field class="mailotin-design-1_input_field"]
            [mo-optin-form-email-field class="mailotin-design-1_input_field"]
            [mo-optin-form-custom-fields class="mailotin-design-1_input_field"]                     
            [mo-mailchimp-interests] 
            [mo-optin-form-submit-button class="mailotin-design-1_subscibe_btn"]
        [/mo-optin-form-fields-wrapper]
        [mo-optin-form-error]
        [mo-optin-form-note class="privacy_note"]
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

        return <<<CSS
div#$optin_css_id.mailotin-design-1 * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
    margin: 0;
	padding: 0;
}

div#$optin_css_id.mailotin-design-1 {
	width: 250px;
	background-color: #fff;
	border-radius: 10px;
	margin: 50px auto;
	padding: 20px 20px 40px 20px;
	text-align: center;
	position: relative;
}
div#$optin_css_id .image-icon {
	padding-right: 8px;
}
	
div#$optin_css_id .mailotin-design-1-intro_text {
	font-size: 27px;
	color: #444;
	vertical-align: top;
	padding-top: 10px;
	font-weight: 500;
}
	
div#$optin_css_id .mailotin-design-1_input_field {
	width: 100%;
	padding: 16px;
	border-radius: 30px;
	border: 1px solid #e0e0e5;
	margin-right: 0px;
	font-size: 15px;
	margin-bottom: 20px;
	text-align: center;
}
	
div#$optin_css_id .mailotin-design-1_subscibe_btn {
	padding: 16px;
	border-radius: 30px;
	font-size: 15px;
	width: 100%;
	border: 0;
	background: #6355b9;
	color: #fff;
}
	
div#$optin_css_id .design_intro-section span,
div#$optin_css_id .design_intro-section h3 {
	display: block;
}

div#$optin_css_id .mo-optin-error {
    padding: 7px;
    font-size: 13px;
    color: #e74c3c;
    margin-top: 10px;
    display: none;
}

div#$optin_css_id .mo-optin-form-description{
    margin-top: 20px;
    margin-bottom: 20px;
}

div#$optin_css_id .mo-optin-form-cta-button{
    padding: 16px 40px;
    border-radius: 30px;
    border: 0;
    font-weight: 600;
    margin: 20px;
}
	
div#$optin_css_id .mailotin-design-1_input_field {
	width: 100%;
	padding: 16px;
	border-radius: 30px;
	margin-right: 0px;
	font-size: 15px;
	margin-bottom: 20px;
	text-align: center;
	font-weight: 600;
}

div#$optin_css_id .mailoptin-design-input-filed {
	margin-top: 30px;
}

div#$optin_css_id .mailotin-design-1_input_field:focus {
	background: #ecf0f1;
	border: 1px solid #ecf0f1;
	outline: 0;
	box-shadow: none;
	transition: linear.2s;
}

	
div#$optin_css_id .mailotin-design-1_subscibe_btn {
	text-transform: uppercase;
	font-weight: 600;
}
	
div#$optin_css_id .mailotin-design-1_button_close {
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

div#$optin_css_id .intro-arrow {
	position: absolute;
	left: 6px;
	top: -11px;
}
	
	
div#$optin_css_id .intro-arrow img {
	width: 100px;
}
	
div#$optin_css_id .intro-arrow img {
	width: 70px;
}
	
div#$optin_css_id .mailotin-design-1_subscibe_btn, 
div#$optin_css_id .mailotin-design-1_button_close {
	cursor: pointer;
}
	
@media only screen and (min-width: 380px){
	div#$optin_css_id.mailotin-design-1 {
		width: 300px;
		background-color: #fff;
		border-radius: 10px;
		margin: 50px auto;
		text-align: center;
	}
}
	
@media only screen and (min-width: 460px){
	div#$optin_css_id.mailotin-design-1 {
		width: 400px;
		background-color: #fff;
		border-radius: 10px;
		margin: 50px auto;
		text-align: center;
	}
	
	.intro-arrow {
		position: absolute;
		left: 18px;
		top: -20px;
	}

	.intro-arrow img {
		width: 100px;
	}
}
	
@media only screen and (min-width: 680px){
	
div#$optin_css_id.mailotin-design-1 {
	width: 600px;
	background-color: #fff;
	border-radius: 10px;
	padding: 50px;
}
	
div#$optin_css_id .mailotin-design-1_input_field {
	width: 280px;
	border-radius: 30px;
	margin-right: 15px;
	font-size: 17px;
	margin-top: 0px;
	margin-bottom: 10px;
	text-align: left;
	padding: 16px 16px 16px 30px;
}

.mo-optin-has-custom-field div#$optin_css_id .mailotin-design-1_input_field,
div#$optin_css_id.mo-has-name-email .mailotin-design-1_input_field {
    display: block;
    margin: auto;
    margin-bottom: 10px;
}

.mailoptin-design-input-filed {
	margin-top: 30px;
}
		
.mailotin-design-1_subscibe_btn {
	padding: 20px;
	border-radius: 30px;
	font-size: 17px;
	width: 200px;
	border: 0;
	background: #6355b9;
	color: #fff;
}

.mo-optin-has-custom-field div#$optin_css_id .mailotin-design-1_subscibe_btn,
div#$optin_css_id.mo-has-name-email .mailotin-design-1_subscibe_btn {
    width: 280px;
}
		
.design_intro-section span, .design_intro-section h3 {
	display: block;
}
		
}
	
@media only screen and (min-width: 980px){
	
    div#$optin_css_id.mailotin-design-1 {
		width: 800px;
		background-color: #fff;
		border-radius: 10px;
		padding: 50px;
	}
	
	div#$optin_css_id .design_intro-section span, 
    div#$optin_css_id .design_intro-section h3 {
		display: block;
	}
		
	div#$optin_css_id .mailotin-design-1_input_field {
		width: 350px;
		border-radius: 30px;
		margin-right: 15px;
		font-size: 17px;	
		padding-left: 30px;
		margin-top: 0px;
		margin-bottom: 0;
		text-align: left;
		padding: 20px 20px 20px 30px;
	}

    
    .mo-optin-has-custom-field div#$optin_css_id .mailotin-design-1_input_field,
    div#$optin_css_id.mo-has-name-email .mailotin-design-1_input_field {
        display: block;
        margin: auto;
        margin-bottom: 10px;
    }

	div#$optin_css_id .mailoptin-design-input-filed {
		margin-top: 20px;
	}

	div#$optin_css_id .design_intro-section span, 
    div#$optin_css_id .design_intro-section h3 {
		display: inline-block;
	}
			
	div#$optin_css_id .mailotin-design-1_subscibe_btn {
		padding: 20px;
		border-radius: 30px;
		font-size: 17px;
		width: 200px;
		border: 0;
		background: #6355b9;
		color: #fff;
		
	}

    
    .mo-optin-has-custom-field div#$optin_css_id .mailotin-design-1_subscibe_btn,
    div#$optin_css_id.mo-has-name-email .mailotin-design-1_subscibe_btn {
        width: 350px;
    }

	}

CSS;

    }
}