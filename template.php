<?php

function digital_pitt_preprocess_islandora_objects_subset(&$variables) {
  $islandora_object = menu_get_object('islandora_object', 2);
  module_load_include('inc', 'islandora', 'includes/metadata');
  if ($islandora_object) {
    $page_number = (empty($_GET['page'])) ? 0 : $_GET['page'];
    $page_size = (empty($_GET['pagesize'])) ? variable_get('islandora_basic_collection_page_size', '10') : $_GET['pagesize'];
    #TODO: correct 'total_count' to 'total' wherever this was used
    $variables['total_count'] = $variables['total'];
    if (isset($islandora_object['TN_LARGE'])) {
      $collection_tn_url = url("islandora/object/{$islandora_object->id}/datastream/TN_LARGE/view");
      $params = array(
        'title' => $islandora_object->label,
        'alt' => $islandora_object->label,
        'path' => $collection_tn_url);
      $variables['collection_img'] = theme('image', $params);
    } elseif (isset($islandora_object['TN'])) {
      $collection_tn_url = url("islandora/object/{$islandora_object->id}/datastream/TN/view");
      $params = array(
        'title' => $islandora_object->label,
        'alt' => $islandora_object->label,
        'path' => $collection_tn_url);
      $variables['collection_img'] = theme('image', $params);
    }

    $variables['collection_metadata'] = islandora_retrieve_metadata_markup($islandora_object);
  }
}
