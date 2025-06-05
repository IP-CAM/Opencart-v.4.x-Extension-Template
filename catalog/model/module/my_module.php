<?php

namespace Opencart\Catalog\Model\Extension\VendorName\Module;

use Opencart\System\Engine\CatalogComponentAwareTrait;

/**
 * MyModule Model (optional) extends the core OpenCart Model class.
 *
 * This is a minimal example model for the MyModule extension.
 * It includes only essential methods and is entirely optional.
 * You can DELETE THIS MODEL FILE or MODIFY IT with your methods as needed for your module.
 */
class MyModule extends \Opencart\System\Engine\Model {

    // use CatalogComponentAwareTrait;

    /**
     * Example method to retrieve data for display on the storefront.
     * This data might come from your module's custom database table.
     */
    public function getMyModuleItems(int $limit = 5) {
        $items = [];

        // Example database query to fetch items for the frontend.
        // Ensure your custom table exists and has relevant data.
        // Only fetch items that are enabled (status = 1).

        // $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "my_module_table` WHERE `status` = '1' ORDER BY `sort_order` ASC LIMIT " . (int)$limit);

        // foreach ($query->rows as $row) {
        //     $items[] = [
        //         'my_module_id'  => $row['my_module_id'],
        //         'title'         => $row['title'],
        //         'description'   => html_entity_decode($row['description'], ENT_QUOTES, 'UTF-8'), // Decode HTML entities if stored as such.
        //         'date_added'    => $row['date_added']
        //     ];
        // }

        // return $items; // Return the array of items.
    }

    /**
     * Example method to get a single item by ID for the frontend.
     */
    public function getMyModuleItem(int $my_module_id) {
        // $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "my_module_table` WHERE `my_module_id` = '" . (int)$my_module_id . "' AND `status` = '1'");

        // if ($query->num_rows) {
        //     return $query->row;
        // }

        // return null;
    }
}
