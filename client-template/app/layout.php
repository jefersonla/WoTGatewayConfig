<?php
/**
 * 
 * Define layouts for this project, since variables are not direct accessible by
 * functions define, we use global variables instead and a simple include.
 * 
 */
 
require_once "helpers/helper_default.php";

/* Check if we have a layout template defined, since we cannot render a layout 
   without have this type of thing we die right here. */
if(!isset($template_layout)){
    die_http_error(500, "Template not defined!");
}


/* Check if we have a view defined, since we always need a view we die here too. */
if(!isset($template_view)){
    die_http_error(500, "View not defined!");
}
 
/* Rewrite Variable to reflect to files now */
$template_layout = "layout_$template_layout.php";
$template_view = "view_$template_view.php";
 
/* Check if view and template file exists */
if(!file_exists(dirname(__FILE__)."/".$template_layout) || !file_exists(dirname(__FILE__)."/".$template_view)){
    die_http_error(500, "View or template don't exist!");
}
 
/* Include only the template since template_view should be included by the layout */
include $template_layout;

?>