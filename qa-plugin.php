<?php
if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
  header('Location: ../../');
  exit;
}

qa_register_plugin_module(
  'widget', // type of module
  'qa-welcome-widget.php', // PHP file containing module class
  'qa_welcome_widget', // module class name in that PHP file
  'Welcome Widget' // human-readable name of module
);

qa_register_plugin_phrases(
    'qa-welcome-widget-lang-*.php', // pattern for language files
    'plugin_ww' // prefix to retrieve phrases
);

qa_register_plugin_layer(
  'qa-welcome-widget-layer.php', // PHP file containing layer
  'Welcome Widget Layer' // human-readable name of layer
);

qa_register_plugin_module(
  'module', 
  'qa-ask-with-tags-admin.php', 
  'qa_ask_with_tags_admin', 
  'Q2A Welcome Widget Configuration'
);