<?php


/**
 * Table tl_botstatistics_blocker
 */
$GLOBALS['TL_DCA']['tl_botstatistics_blocker'] = array
(

        // Config
        'config' => array
        (
            'sql' => array
            (
                'keys' => array
                (
                    'id' => 'primary',
                    'bot_module_id' => 'index'
                )
            )
        ),

        // Fields
        'fields' => array
        (
            'id' => array
            (
                'sql'                     => "int(10) unsigned NOT NULL auto_increment"
            ),
            'bot_module_id' => array
            (
                'sql'                     => "int(10) unsigned NOT NULL default '0'"
            ),
            'bot_tstamp' => array
            (
                'sql'                     => "timestamp NULL"
            ),
            'bot_ip' => array
            (
                'sql'                     => "varchar(40) NOT NULL default '0.0.0.0'"
            )
        )
);
