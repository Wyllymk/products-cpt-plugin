<?php
/**
 * @package ProductPlugin
 */

 class ProductPluginActivate{
    public static function activate(){
        // ProductPlugin::create_table_to_db();
        flush_rewrite_rules();
    }
 }