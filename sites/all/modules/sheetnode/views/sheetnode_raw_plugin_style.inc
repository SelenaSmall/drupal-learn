<?php
/**
 * @file
 * Views raw plugin for sheetnode as a display style.
 */

class sheetnode_raw_plugin_style extends sheetnode_feed_plugin_style {
  function init(&$view, &$display, $options = NULL) {
    parent::init($view, $display, $options = NULL);
    $this->feed_image = drupal_get_path('module', 'sheetnode') . '/images/socialtext.png';
  }

  function render() {
    $this->inherit_options();
    drupal_add_http_header('Content-type', 'text/plain; charset=utf-8');
    return socialcalc_save(parent::render_sheet());
  }
};

