<?php

namespace Opencart\Admin\Model\Extension\VendorName\Module;

/**
 * MyModule Model (optional) extends the core OpenCart Model class.
 *
 * This is a minimal example model for the MyModule extension.
 * It includes only essential methods and is entirely optional.
 * You can DELETE THIS MODEL FILE or MODIFY IT with your methods as needed for your module.
 */
class MyModule extends \Opencart\System\Engine\Model {
    
    /**
     * Add a new record to the module table
     *
     * @param array $data
     * @return int Inserted record ID
     */
    public function addMyModule(array $data) {
        // $this->db->query("INSERT INTO `" . DB_PREFIX . "my_module` SET `name` = '" . $this->db->escape($data['name']) . "', `status` = '" . (int)$data['status'] . "'");
        // return (int)$this->db->getLastId();
    }

    /**
     * Get all records (with optional limit and start)
     *
     * @param int $limit
     * @param int $start
     * @return array
     */
    public function getMyModules(int $limit = 20, int $start = 0) {
        // $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "my_module` LIMIT " . (int)$start . ", " . (int)$limit);
        // return $query->rows;
    }
}
