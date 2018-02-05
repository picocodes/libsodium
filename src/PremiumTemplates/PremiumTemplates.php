<?php

namespace MailOptin\Libsodium\PremiumTemplates;

if (strpos(__FILE__, 'mailoptin/vendor') !== false) {
    // production url path to assets folder.
    define('MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL', MAILOPTIN_URL . '../' . dirname(substr(__FILE__, strpos(__FILE__, 'mailoptin/vendor'))) . '/assets/');
} else {
    // dev url path to assets folder.
    define('MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL', MAILOPTIN_URL . '../' . dirname(substr(__FILE__, strpos(__FILE__, 'mailoptin'))) . '/assets/');
}

class PremiumTemplates
{
    public function __construct()
    {
        add_filter('mailoptin_registered_optin_themes', [$this, 'register_optin_premium_themes']);
        add_filter('mailoptin_register_optin_class', [$this, 'register_optin_premium_classes'], 10, 4);
    }

    public function premium_optin_themes()
    {
        return [
            [
                'name' => 'Bannino',
                'optin_class' => 'Bannino',
                'optin_type' => 'lightbox', // accept comma delimited values eg lightbox,sidebar,inpost
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/bannino/bannino-lightbox.png'
            ],
            [
                'name' => 'Bannino',
                'optin_class' => 'Bannino',
                'optin_type' => 'inpost', // accept comma delimited values eg lightbox,sidebar,inpost
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/bannino/bannino-inpost.png'
            ],
            [
                'name' => 'BareMetal',
                'optin_class' => 'BareMetal',
                'optin_type' => 'inpost',
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/baremetal-inpost.png'
            ],
            [
                'name' => 'Daisy',
                'optin_class' => 'Daisy',
                'optin_type' => 'lightbox',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/daisy-lightbox.png'
            ],
            [
                'name' => 'Elegance',
                'optin_class' => 'Elegance',
                'optin_type' => 'lightbox',
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/elegance-lightbox.png'
            ],
            [
                'name' => 'Elegance',
                'optin_class' => 'Elegance',
                'optin_type' => 'inpost',
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/elegance-inpost.png'
            ],
            [
                'name' => 'Muscari',
                'optin_class' => 'Muscari',
                'optin_type' => 'bar',
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/muscari-bar.png'
            ],
            [
                'name' => 'Dahlia',
                'optin_class' => 'Dahlia',
                'optin_type' => 'bar',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/dahlia-bar.png'
            ],
            [
                'name' => 'Dashdot',
                'optin_class' => 'Dashdot',
                'optin_type' => 'bar',
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/dashdot-bar.png'
            ],
            [
                'name' => 'Mimosa',
                'optin_class' => 'Mimosa',
                'optin_type' => 'slidein',
                'screenshot' => MAILOPTIN_ASSETS_URL . 'images/optin-themes/mimosa-slidein.png'
            ],
            [
                'name' => 'Letter Box',
                'optin_class' => 'LetterBox',
                'optin_type' => 'slidein',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/letterbox-slidein.png'
            ],
            [
                'name' => 'Letter Box',
                'optin_class' => 'LetterBox',
                'optin_type' => 'sidebar',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/letterbox-sidebar.png'
            ],
            [
                'name' => 'Letter Box',
                'optin_class' => 'LetterBox',
                'optin_type' => 'inpost',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/letterbox-inpost.png'
            ],
            [
                'name' => 'Letter Box',
                'optin_class' => 'LetterBox',
                'optin_type' => 'lightbox',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/letterbox-lightbox.png'
            ],
            [
                'name' => 'Primrose',
                'optin_class' => 'Primrose',
                'optin_type' => 'sidebar',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/primrose-sidebar.png'
            ],
            [
                'name' => 'Gridgum',
                'optin_class' => 'Gridgum',
                'optin_type' => 'inpost',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/gridgum-inpost.png'
            ],
            [
                'name' => 'Gridgum',
                'optin_class' => 'Gridgum',
                'optin_type' => 'lightbox',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/gridgum-lightbox.png'
            ],
            [
                'name' => 'Gridgum',
                'optin_class' => 'Gridgum',
                'optin_type' => 'sidebar',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/gridgum-sidebar-slidein.png'
            ],
            [
                'name' => 'Gridgum',
                'optin_class' => 'Gridgum',
                'optin_type' => 'slidein',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/gridgum-sidebar-slidein.png'
            ],
            [
                'name' => 'Boldy',
                'optin_class' => 'Boldy',
                'optin_type' => 'lightbox',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/boldy-lightbox.png'
            ],
            [
                'name' => 'Boldy',
                'optin_class' => 'Boldy',
                'optin_type' => 'inpost',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/boldy-inpost.png'
            ],
            [
                'name' => 'Boldy',
                'optin_class' => 'Boldy',
                'optin_type' => 'sidebar',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/boldy-sidebar.png'
            ],
            [
                'name' => 'Boldy',
                'optin_class' => 'Boldy',
                'optin_type' => 'slidein',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/boldy-slidein.png'
            ],
            [
                'name' => 'Rescript',
                'optin_class' => 'Rescript',
                'optin_type' => 'lightbox',
                'screenshot' => MAILOPTIN_PREMIUMTEMPLATES_ASSETS_URL . 'optin/rescript-lightbox.png'
            ]
        ];
    }

    /**
     * Register premium optin themes to admin dashboard UI.
     * @param array $themes
     * @return array
     */
    public function register_optin_premium_themes($themes)
    {
        return array_merge($themes, $this->premium_optin_themes());
    }

    /**
     * Register premium optin themes classes for instantiation by OptinFormFactory.
     *
     * @param $optin_class
     * @param $optin_campaign_id
     * @param $db_optin_class
     * @param $optin_type
     * @return string
     */
    public function register_optin_premium_classes($optin_class, $optin_campaign_id, $db_optin_class, $optin_type)
    {
        foreach ($this->premium_optin_themes() as $premium_optin_theme) {
            $optin_theme_type = ucfirst($premium_optin_theme['optin_type']);
            $optin_theme_class = $premium_optin_theme['optin_class'];

            if ($db_optin_class === $optin_theme_class && $optin_type === $optin_theme_type) {
                $optin_class = "\\MailOptin\\Libsodium\\PremiumTemplates\\OptinForms\\$optin_type\\$db_optin_class";
            }
        }
        return $optin_class;
    }


    /**
     * Singleton poop.
     *
     * @return PremiumTemplates|null
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