<?php
/**
 * @package ProductPlugin
 */

 class ProductPluginDeactivate{
    public static function deactivate(){
        flush_rewrite_rules();
    }
 }