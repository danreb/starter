<?php

/**
 * Implements template_preprocess_html().
 */
function wedding_hub_preprocess_html(&$variables) {
    // Add role to body classes
    if ($variables['user']) { 
        foreach($variables['user']->roles as $role){ 
            $variables['classes_array'][] = 'role-' . drupal_html_class($role);
         }
     }
 }