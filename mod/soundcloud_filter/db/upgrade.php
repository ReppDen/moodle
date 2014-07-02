<?php

defined('MOODLE_INTERNAL') || die();

function xmldb_filter_soundcloud_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2013111800) {
        unset_all_config_for_plugin('filter_soundcloud');
        upgrade_plugin_savepoint(true, 2013111800, 'filter', 'soundcloud');
    }

    return true;
}
