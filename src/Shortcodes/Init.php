<?php

namespace MailOptin\Libsodium\Shortcodes;

class Init
{
    public static function init()
    {
        Shortcodes::get_instance();
    }
}