<?php

/**
 * Plugin Name: Auto Filling Alt Tag for Images
 *
 * Description: Automatically adds an alt tag to images without alt or with empty alt by using the closest heading tag above the image.
 *
 * Version: 1.0.0
 *
 * Author: Hassan Ali Askari
 * Author URI: https://t.me/hassan7303
 * Plugin URI: https://github.com/hassan7303/Auto-filling-alt-tag-for-images
 * GitHub Plugin URI: https://github.com/hassan7303/Auto-filling-alt-tag-for-images
 * GitHub Branch: master
 * 
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 */

 if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}



add_filter('the_content', 'auto_add_alt_tags_to_images');

function auto_add_alt_tags_to_images($content) {
    libxml_use_internal_errors(true); 
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $content);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $images = $xpath->query("//img");

    foreach ($images as $img) {
        $alt = $img->getAttribute('alt');
        if (empty(trim($alt))) {
            $previousNode = $img->previousSibling;
            while ($previousNode) {
                if ($previousNode->nodeType === XML_ELEMENT_NODE && preg_match('/^h[1-6]$/i', $previousNode->nodeName)) {
                    $img->setAttribute('alt', $previousNode->textContent);
                    break;
                }
                $previousNode = $previousNode->previousSibling;
            }

            if (empty($img->getAttribute('alt'))) {
                $img->setAttribute('alt', 'default alt text');
            }
        }
    }

    return $dom->saveHTML();
}



 /**
 * Checks for plugin updates from GitHub and notifies WordPress.
 *
 * Fetches the latest release information from GitHub. If a newer version is available,
 * it adds the update to the WordPress update queue.
 *
 * @param object $transient The transient object containing update information.
 * @return object Modified transient object with update details if available.
 */
 function check_for_plugin_update($transient) {
  if (empty($transient->checked)) {
      return $transient;
  }

  $plugin_slug = plugin_basename(__FILE__);
  $github_url = 'https://api.github.com/repos/hassan7303/Persian-to-english-number-converter/releases/latest';

  $response = wp_remote_get($github_url, ['sslverify' => false]);
  if (is_wp_error($response)) {
      return $transient;
  }

  $release_info = json_decode(wp_remote_retrieve_body($response), true);

  if (isset($release_info['tag_name']) && isset($transient->checked[$plugin_slug])) {
      $new_version = $release_info['tag_name'];
      if (version_compare($transient->checked[$plugin_slug], $new_version, '<')) {
          $transient->response[$plugin_slug] = (object) [
              'slug' => $plugin_slug,
              'new_version' => $new_version,
              'package' => $release_info['zipball_url'],
              'url' => 'https://github.com/hassan7303/Persian-to-english-number-converter',
          ];
      }
  }

  return $transient;
}
add_filter('pre_set_site_transient_update_plugins', 'check_for_plugin_update');

/**
* Adjust plugin folder name after installation to maintain original name.
*/
function fix_plugin_folder_name($response, $hook_extra, $result) {
  global $wp_filesystem;

  $plugin_slug = 'Persian-to-english-number-converter';
  $original_folder = WP_PLUGIN_DIR . '/' . $plugin_slug;
  $new_folder = $result['destination'];

  if (basename($new_folder) !== $plugin_slug) {
      $wp_filesystem->move($new_folder, $original_folder);
      $result['destination'] = $original_folder;
  }

  return $response;
}
add_filter('upgrader_post_install', 'fix_plugin_folder_name', 10, 3);
