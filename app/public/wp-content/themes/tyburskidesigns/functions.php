<?php

// Navigation
require_once('bs4navwalker.php');
register_nav_menu('primary', 'Primary Menu');
register_nav_menu('projects', 'Projects Menu');

// Call Component
function layout_get_component($component) {
    return get_template_part('components/' . $component, '');
}

// Call Module
function layout_get_module($module) {
    return get_template_part('modules/' . $module, '');
}