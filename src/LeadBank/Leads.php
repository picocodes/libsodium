<?php

namespace MailOptin\Libsodium\LeadBank;

// Exit if accessed directly
use MailOptin\Core\Admin\SettingsPage\AbstractSettingsPage;
use W3Guy\Custom_Settings_Page_Api;

if ( ! defined('ABSPATH')) {
    exit;
}

class Leads extends AbstractSettingsPage
{
    /**
     * @var Leads_List
     */
    protected $conversions_instance;

    public function __construct()
    {
        add_action('mailoptin_leadbank_settings_page', [$this, 'init']);

        add_filter('mailoptin_settings_page', [$this, 'leadbank_settings']);

        add_action('mailoptin_register_optin_campaign_settings_page', function ($hook) {
            add_action("load-$hook", array($this, 'screen_option'));
        });
    }

    public function init()
    {
        add_filter('set-screen-option', array($this, 'set_screen'), 10, 3);

        add_filter('wp_cspa_main_content_area', array($this, 'wp_list_table'), 10, 2);
    }

    public function leadbank_settings($settings)
    {
        $settings['leadbank_settings'] = apply_filters('mailoptin_settings_leadbank_settings_page', [
            'tab_title' => __('Lead Bank (Submissions)', 'mailoptin'),
            [
                'section_title'    => __('Settings', 'mailoptin'),
                'disable_leadbank' => [
                    'type'           => 'checkbox',
                    'checkbox_label' => __('Disable', 'mailoptin'),
                    'label'          => __('Disable Lead Bank', 'mailoptin'),
                    'description'    => sprintf(
                                            __('Check this box if you would like to disable Lead Bank.%s', 'mailoptin'),
                                            '</p><p class="description">'
                                        ) . sprintf(
                                            __('%sLead bank%s is a record of all subscribers to your optin campaigns.%s', 'mailoptin'),
                                            '<a href="' . MAILOPTIN_LEAD_BANK_SETTINGS_PAGE . '">', '</a>', '</p>'
                                        ),
                ]
            ]
        ]);

        return $settings;
    }

    /**
     * Save screen option.
     *
     * @param string $status
     * @param string $option
     * @param string $value
     *
     * @return mixed
     */
    public function set_screen($status, $option, $value)
    {
        if ('conversions_per_page' == $option)
            return $value;

        return $status;
    }

    /**
     * Screen options
     */
    public function screen_option()
    {
        if (isset($_GET['page']) && $_GET['page'] == MAILOPTIN_OPTIN_CAMPAIGNS_SETTINGS_SLUG && isset($_GET['view'])) {

            $option = 'per_page';
            $args   = array(
                'label'   => __('Leads', 'mailoptin'),
                'default' => 8,
                'option'  => 'conversions_per_page',
            );
            add_screen_option($option, $args);

            $this->conversions_instance = Leads_List::get_instance();
        }
    }


    /**
     * Build the settings page structure. I.e tab, sidebar.
     */
    public function settings_admin_page_callback()
    {
        $instance = Custom_Settings_Page_Api::instance();
        $instance->option_name('mo_leads');
        $instance->page_header(__('Lead Bank', 'mailoptin'));
        $this->register_core_settings($instance, true);
        $instance->build(true);
    }

    public function leadbank_disabled_notice()
    {
        if (LeadBank::is_leadbank_disabled()) {
            echo '<div style="border-left: 4px solid #dc3232;background: #fff;box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);margin: 0 0 10px;padding: 10px">';
            printf(
                __('%sLead Bank is currently disabled%s. New leads will not be recorded or backed up. Go to %sLead Bank settings%s to reactivate.', 'mailoptin'),
                '<strong>', '</strong>', '<a href="' . MAILOPTIN_SETTINGS_SETTINGS_PAGE . '">', '</a>'
            );
            echo '</div>';
        }
    }

    /**
     * Callback to output content of Email_Template_List table.
     *
     * @param string $content
     * @param string $option_name settings Custom_Settings_Page_Api option name.
     *
     * @return string
     */
    public function wp_list_table($content, $option_name)
    {
        if ($option_name != 'mo_leads') {
            return $content;
        }

        $this->conversions_instance->prepare_items();
        ob_start();
        $this->leadbank_disabled_notice();
        echo '<form method="post">';
        $this->conversions_instance->search_box(__('Search Leads', 'mailoptin'), 'leadbank_search');
        $this->conversions_instance->display();
        echo '</form>';

        return ob_get_clean();
    }


    /**
     * @return Leads
     */
    public static function get_instance()
    {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}