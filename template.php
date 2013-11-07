<?php

/**
 * Views Slideshow: pager.
 *
 * @ingroup themeable
 */
function stemcellcenter_views_slideshow_singleframe_pager($vss_id, $view, $options) {
  $pager_type = $options['views_slideshow_singleframe']['pager_type'];

  $attributes['class'] = "views_slideshow_singleframe_pager views_slideshow_pager$pager_type";
  $attributes['id'] = "views_slideshow_singleframe_pager_" . $vss_id;
  $attributes = drupal_attributes($attributes);

  return "<ul$attributes></ul>";
}

// add image path to settings for play/pause button override in scripts.js
drupal_add_js(array('path_to_images'  => base_path() . path_to_theme() .'/images/'), 'setting');

/**
 * Views Slideshow: image counter.
 *
 * @ingroup themeable
 */
function stemcellcenter_views_slideshow_singleframe_image_count($vss_id, $view, $options) {
  $attributes['class'] = 'views_slideshow_singleframe_image_count views_slideshow_image_count';
  $attributes['id'] = "views_slideshow_singleframe_image_count_" . $vss_id;
  $attributes = drupal_attributes($attributes);

  $counter = '<span class="num">1</span> ' . '/' . ' <span class="total">1</span>';

  return "<div$attributes>$counter</div>";
}

// Add Jquery UI accordion
 jquery_ui_add('ui.accordion');


// If no search, remove search help from results page
function stemcellcenter_box($title, $content, $region = 'main') {
  if (substr ($content, 120, 10 ) == 'blue smurf')
  {
    $title = 'Your search yielded no results';
	$content = '';   
  }
  else
  {
	$title = "Search results for '" . urldecode(end(explode('/', $_SERVER['REQUEST_URI']))) ."'" ;	
	}
  $output = '<div class="box"><h2>' . $title . '</h2>'. '<div class="content">' . $content .'</div> <!-- END CLASS CONTENT --> </div>';
  return $output;
}

// Include preload.css if on page where faculty list sidebar appears (node 52)
// function stemcellcenter_preprocess_node(&$variables) {
//   $node = $variables['node'];
//   if (!empty($node) && $node->nid == 52) {
//     drupal_add_js('document.write("<link rel="stylesheet" type="text/css" href="' . base_path() . path_to_theme() . 'css/preload.css" />")', "inline");	
//     $variables['script'] = drupal_get_js();
//   }
// 
// }


?>