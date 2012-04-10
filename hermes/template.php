<?php
/**
 * hermes_preprocess_node - template_preprocess_node - see api.drupal.org
 *
 * @return void
 * @author Adrien Castagnet
 **/
function hermes_preprocess_node(&$variables) {
	if (isset($variables['node'])) {
		$variables['messages'] = theme_status_messages(array('display'=>null));
	}
}

/**
 * hermes_preprocess_page - template_preprocess_page - see api.drupal.org
 *
 * @param string $variables 
 * @return void
 * @author Adrien Castagnet
 */
function hermes_preprocess_page(&$variables) {
	$variables['show_messages'] = false;
}

/**
 * hermes_preprocess - template_preprocess - see api.drupal.org
 *
 * @param string $variables 
 * @param string $hook 
 * @return void
 * @author Adrien Castagnet
 */
function hermes_preprocess(&$variables,$hook) {
	drupal_set_message($hook);
}