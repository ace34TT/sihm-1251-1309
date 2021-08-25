<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('img_loader')) {
    function img_loader($name, $format)
    {
        return base_url() . "/assets/img/" . $name . "." . $format;
    }
}

if (!function_exists('asset_loader')) {
    function asset_loader()
    {
        return site_url();
    }
}

if (!function_exists('css_loader')) {
    function css_loader($name)
    {
        return site_url() . "/assets/css/" . $name . ".css";
    }
}

if (!function_exists('js_loader')) {
    function js_loader($name)
    {
        return site_url() . "/assets/js/" . $name . ".js";
    }
}
