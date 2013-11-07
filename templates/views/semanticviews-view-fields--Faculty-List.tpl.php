<?php
// $Id: semanticviews-view-fields.tpl.php,v 1.1.2.4 2010/02/20 14:43:06 bangpound Exp $
/**
 * @file semanticviews-view-fields.tpl.php
 * Default simple view template to display all the fields as a row. The template
 * outputs a full row by looping through the $fields array, printing the field's
 * HTML element (as configured in the UI) and the class attributes. If a label
 * is specified for the field, it is printed wrapped in a <label> element with
 * the same class attributes as the field's HTML element.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output
 *     safe.
 *   - $field->element_type: The HTML element wrapping the field content and
 *     label.
 *   - $field->attributes: An array of attributes for the field wrapper.
 *   - $field->handler: The Views field handler object controlling this field.
 *     Do not use var_export to dump this object, as it can't handle the
 *     recursion.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @see template_preprocess_semanticviews_view_fields()
 * @ingroup views_templates
 * @todo Justify this template. Excluding the PHP, this template outputs angle
 * brackets, the label element, slashes and whitespace.
 */
?>
<?php
  // print '<pre>' . htmlentities(print_r($rows, 1)) . '</pre>';
  // If you have devel.module installed, comment the line above and uncomment the line below
   //dsm(array_keys($fields)); 
?>
<?php if ($fields['field_external_bio_page_url']->content): ?>	
  <?php print '<a href="' . $fields['field_external_bio_page_url']->content . '">' . $fields['title']->content . '</a>'; ?>
<? else: ?>
  <?php print '<a href="' . $fields['path']->content . '">' . $fields['title']->content . '</a>'; ?>
<?php endif; ?>	

<?php if ($fields['field_summary_value']->content): ?>
  <?php print $fields['field_summary_value']->content; ?> 
<?php endif; ?>	

